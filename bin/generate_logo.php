<?php

/**
 * Script pour générer le logo SHOP BJ en SVG puis le convertir en PNG
 */

// Création du répertoire pour les logos s'il n'existe pas
$logoDir = __DIR__ . '/../public/uploads/logo';
if (!is_dir($logoDir)) {
    mkdir($logoDir, 0777, true);
}

// Couleurs du thème - palette verte
$primaryColor = '#088A4B'; // Vert principal
$secondaryColor = '#333333'; // Gris foncé
$accentColor = '#2ECC71'; // Vert clair

// Création du logo SVG
$svgLogo = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="220" height="80" viewBox="0 0 220 80">
  <defs>
    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="{$primaryColor}" />
      <stop offset="100%" stop-color="{$accentColor}" />
    </linearGradient>
    <linearGradient id="shadow-gradient" x1="0%" y1="0%" x2="0%" y2="100%">
      <stop offset="0%" stop-color="#00000000" />
      <stop offset="100%" stop-color="#00000022" />
    </linearGradient>
  </defs>
  <style>
    .logo-text { font-family: 'Trebuchet MS', sans-serif; font-weight: bold; letter-spacing: 2px; }
    .primary { fill: url(#gradient); }
    .secondary { fill: {$secondaryColor}; }
    .shadow { filter: drop-shadow(0px 3px 3px rgba(0,0,0,0.2)); }
  </style>
  <g class="shadow">
    <text x="10" y="48" class="logo-text primary" font-size="34">RACHA</text>
    <text x="120" y="48" class="logo-text secondary" font-size="34">NOVA</text>
  </g>
  <rect x="10" y="58" width="200" height="3" rx="1.5" class="primary" />
  <rect x="10" y="65" width="120" height="1.5" rx="0.75" class="primary" style="opacity: 0.7" />
</svg>
SVG;

// Enregistrement du logo SVG
$svgPath = $logoDir . '/logo.svg';
file_put_contents($svgPath, $svgLogo);
echo "Logo SVG créé: uploads/logo/logo.svg\n";

// Création d'un autre logo SVG avec fond blanc pour une meilleure conversion en PNG
$svgLogoWithBackground = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="220" height="80" viewBox="0 0 220 80">
  <defs>
    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="{$primaryColor}" />
      <stop offset="100%" stop-color="{$accentColor}" />
    </linearGradient>
    <linearGradient id="shadow-gradient" x1="0%" y1="0%" x2="0%" y2="100%">
      <stop offset="0%" stop-color="#00000000" />
      <stop offset="100%" stop-color="#00000022" />
    </linearGradient>
  </defs>
  <rect width="100%" height="100%" fill="white"/>
  <style>
    .logo-text { font-family: 'Trebuchet MS', sans-serif; font-weight: bold; letter-spacing: 2px; }
    .primary { fill: url(#gradient); }
    .secondary { fill: {$secondaryColor}; }
    .shadow { filter: drop-shadow(0px 3px 3px rgba(0,0,0,0.2)); }
  </style>
  <g class="shadow">
    <text x="10" y="48" class="logo-text primary" font-size="34">RACHA</text>
    <text x="120" y="48" class="logo-text secondary" font-size="34">NOVA</text>
  </g>
  <rect x="10" y="58" width="200" height="3" rx="1.5" class="primary" />
  <rect x="10" y="65" width="120" height="1.5" rx="0.75" class="primary" style="opacity: 0.7" />
</svg>
SVG;

// Enregistrement du logo SVG avec fond blanc
$svgBgPath = $logoDir . '/logo_bg.svg';
file_put_contents($svgBgPath, $svgLogoWithBackground);

// Conversion en PNG via la commande convert d'ImageMagick
$pngPath = $logoDir . '/logo.png';
$pngSmallPath = $logoDir . '/logo_small.png';
$faviconPath = __DIR__ . '/../public/favicon.ico';

// Commande pour convertir SVG en PNG
$convertCmd = "convert {$svgBgPath} {$pngPath}";
exec($convertCmd, $output, $returnCode);
if ($returnCode === 0) {
    echo "Logo PNG créé: uploads/logo/logo.png\n";
    
    // Commande pour créer une version plus petite pour l'en-tête
    $resizeCmd = "convert {$pngPath} -resize 48x48 {$pngSmallPath}";
    exec($resizeCmd, $output, $returnCode);
    if ($returnCode === 0) {
        echo "Logo petit format créé: uploads/logo/logo_small.png\n";
    } else {
        echo "Erreur de création du petit logo\n";
    }
    
    // Commande pour créer un favicon
    $faviconCmd = "convert {$pngSmallPath} -resize 32x32 {$faviconPath}";
    exec($faviconCmd, $output, $returnCode);
    if ($returnCode === 0) {
        echo "Favicon créé: favicon.ico\n";
    } else {
        echo "Erreur de création du favicon\n";
    }
} else {
    echo "Erreur de conversion en PNG\n";
    echo "Le logo SVG est disponible à uploads/logo/logo.svg\n";
}

echo "Génération du logo terminée.\n";