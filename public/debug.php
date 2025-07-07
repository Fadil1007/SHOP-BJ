<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Informations de base
echo "<h1>Informations sur le serveur</h1>";
echo "<p>Date et heure: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>PHP version: " . phpversion() . "</p>";
echo "<p>Server: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";

// Extensions
echo "<h2>Extensions PHP</h2>";
$extensions = get_loaded_extensions();
sort($extensions);
echo "<ul>";
foreach ($extensions as $extension) {
    echo "<li>$extension</li>";
}
echo "</ul>";

// Variables d'environnement
echo "<h2>Variables d'environnement disponibles</h2>";
$env_vars = array_keys($_ENV);
sort($env_vars);
echo "<ul>";
foreach ($env_vars as $var) {
    // Ne pas afficher les valeurs sensibles
    if (strpos(strtolower($var), 'password') !== false || 
        strpos(strtolower($var), 'secret') !== false || 
        strpos(strtolower($var), 'key') !== false) {
        echo "<li>$var = [HIDDEN]</li>";
    } else {
        echo "<li>$var = " . $_ENV[$var] . "</li>";
    }
}
echo "</ul>";

// Session
echo "<h2>État de la session</h2>";
if (session_status() == PHP_SESSION_ACTIVE) {
    echo "<p>Session active: Oui</p>";
    echo "<p>Session ID: " . session_id() . "</p>";
    echo "<p>Session name: " . session_name() . "</p>";
} else {
    echo "<p>Session active: Non</p>";
}

// Chemins
echo "<h2>Chemins importants</h2>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";
echo "<p>Script Name: " . $_SERVER['SCRIPT_NAME'] . "</p>";

// Base de données
echo "<h2>Test de connexion à la base de données</h2>";
if (isset($_ENV['DATABASE_URL'])) {
    echo "<p>DATABASE_URL défini: Oui</p>";
    try {
        $dsn = $_ENV['DATABASE_URL'];
        $conn = new PDO($dsn);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p style='color:green'>Connexion à la base de données réussie!</p>";
        
        // Vérifier les tables
        $tables = $conn->query("SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'");
        echo "<p>Tables dans la base de données:</p>";
        echo "<ul>";
        foreach ($tables as $table) {
            echo "<li>" . $table['table_name'] . "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "<p style='color:red'>Erreur de connexion à la base de données: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p style='color:red'>DATABASE_URL non défini</p>";
}

// Fichiers et répertoires
echo "<h2>Structure des fichiers</h2>";
$dirs = ["templates", "public", "src", "config"];
foreach ($dirs as $dir) {
    $path = realpath(__DIR__ . "/../$dir");
    if ($path && is_dir($path)) {
        echo "<p>$dir existe à: $path</p>";
    } else {
        echo "<p style='color:red'>$dir n'existe pas</p>";
    }
}