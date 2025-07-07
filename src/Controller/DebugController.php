<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;

class DebugController extends AbstractController
{
    #[Route('/debug-symfony', name: 'app_debug')]
    public function index(EntityManagerInterface $entityManager = null): Response
    {
        // Variables pour le template
        $templateVars = [
            'php_version' => PHP_VERSION,
            'symfony_env' => $_ENV['APP_ENV'] ?? 'unknown',
            'database_connected' => false,
            'database_tables' => [],
            'database_error' => null,
            'controllers' => [],
            'templates' => [],
            'routes' => [],
            'env_vars' => [],
        ];

        // Vérifier la connexion à la base de données
        if ($entityManager) {
            try {
                $connection = $entityManager->getConnection();
                $templateVars['database_connected'] = $connection->connect();
                
                // Récupérer les tables
                if ($templateVars['database_connected']) {
                    $schemaManager = $connection->createSchemaManager();
                    $templateVars['database_tables'] = $schemaManager->listTableNames();
                }
            } catch (\Exception $e) {
                $templateVars['database_error'] = $e->getMessage();
            }
        }

        // Récupérer les variables d'environnement (masquer les infos sensibles)
        $envVars = $_ENV;
        foreach ($envVars as $key => $value) {
            if (preg_match('/(pass|secret|token|key)/i', $key)) {
                $envVars[$key] = '***MASKED***';
            }
        }
        $templateVars['env_vars'] = $envVars;

        // Scanner les contrôleurs
        $controllerDir = $this->getParameter('kernel.project_dir') . '/src/Controller';
        if (is_dir($controllerDir)) {
            $templateVars['controllers'] = array_filter(scandir($controllerDir), function($file) {
                return substr($file, -4) === '.php';
            });
        }
        
        // Scanner les templates
        $templateDir = $this->getParameter('kernel.project_dir') . '/templates';
        if (is_dir($templateDir)) {
            $templateFiles = [];
            $this->scanDirectory($templateDir, $templateFiles, $templateDir);
            $templateVars['templates'] = $templateFiles;
        }

        // Créer une réponse brute pour éviter des problèmes avec Twig
        $response = new Response();
        $response->setContent($this->generateDebugHtml($templateVars));
        return $response;
    }

    private function scanDirectory($dir, &$results, $baseDir) {
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            $path = $dir . '/' . $file;
            if (is_dir($path)) {
                $this->scanDirectory($path, $results, $baseDir);
            } else {
                $results[] = str_replace($baseDir . '/', '', $path);
            }
        }
    }

    private function generateDebugHtml(array $data): string {
        $html = '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Symfony Debug</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 1200px; margin: 0 auto; padding: 20px; }
                h1 { color: #2e6da4; }
                h2 { color: #5bc0de; margin-top: 30px; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
                pre { background: #f8f9fa; padding: 15px; border-radius: 5px; overflow: auto; }
                table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
                th { background-color: #f2f2f2; }
                .status-ok { color: green; }
                .status-error { color: red; }
            </style>
        </head>
        <body>
            <h1>Symfony Debug Information</h1>
            
            <h2>Environment</h2>
            <table>
                <tr><th>PHP Version</th><td>' . $data['php_version'] . '</td></tr>
                <tr><th>Symfony Environment</th><td>' . $data['symfony_env'] . '</td></tr>
            </table>
            
            <h2>Database</h2>';
            
        if ($data['database_connected']) {
            $html .= '<p class="status-ok">✅ Connected successfully to the database</p>';
            $html .= '<h3>Tables</h3>';
            if (count($data['database_tables']) > 0) {
                $html .= '<ul>';
                foreach ($data['database_tables'] as $table) {
                    $html .= '<li>' . htmlspecialchars($table) . '</li>';
                }
                $html .= '</ul>';
            } else {
                $html .= '<p>No tables found in the database.</p>';
            }
        } else {
            $html .= '<p class="status-error">❌ Failed to connect to the database</p>';
            if ($data['database_error']) {
                $html .= '<p>Error: ' . htmlspecialchars($data['database_error']) . '</p>';
            }
        }
            
        $html .= '<h2>Controllers</h2>';
        if (count($data['controllers']) > 0) {
            $html .= '<ul>';
            foreach ($data['controllers'] as $controller) {
                $html .= '<li>' . htmlspecialchars($controller) . '</li>';
            }
            $html .= '</ul>';
        } else {
            $html .= '<p>No controllers found.</p>';
        }
            
        $html .= '<h2>Templates</h2>';
        if (count($data['templates']) > 0) {
            $html .= '<ul>';
            foreach ($data['templates'] as $template) {
                $html .= '<li>' . htmlspecialchars($template) . '</li>';
            }
            $html .= '</ul>';
        } else {
            $html .= '<p>No templates found.</p>';
        }
            
        $html .= '<h2>Environment Variables</h2>
            <pre>';
        foreach ($data['env_vars'] as $key => $value) {
            $html .= htmlspecialchars($key) . ' = ' . htmlspecialchars($value) . "\n";
        }
        $html .= '</pre>
            
        </body>
        </html>';
        
        return $html;
    }
}