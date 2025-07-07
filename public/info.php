<?php
// Afficher une version simplifiée de phpinfo()
echo '<h1>Informations PHP</h1>';
echo '<h2>Version</h2>';
echo 'PHP Version: ' . phpversion();

echo '<h2>Limites mémoire</h2>';
echo 'memory_limit: ' . ini_get('memory_limit') . '<br>';
echo 'max_execution_time: ' . ini_get('max_execution_time') . '<br>';
echo 'post_max_size: ' . ini_get('post_max_size') . '<br>';
echo 'upload_max_filesize: ' . ini_get('upload_max_filesize') . '<br>';

echo '<h2>Environnement Symfony</h2>';
echo 'APP_ENV: ' . getenv('APP_ENV') . '<br>';
echo 'APP_DEBUG: ' . getenv('APP_DEBUG') . '<br>';

echo '<h2>Zone mémoire</h2>';
echo 'Utilisation mémoire actuelle: ' . memory_get_usage(true) / 1024 / 1024 . ' MB<br>';
echo 'Pic d\'utilisation mémoire: ' . memory_get_peak_usage(true) / 1024 / 1024 . ' MB<br>';