#!/bin/bash

echo "🔄 Vidage du cache Symfony (prod)..."
rm -rf var/cache/prod
php bin/console cache:warmup --env=prod

echo "🔐 Correction des permissions..."
chmod -R 775 var/cache var/log

echo "✅ Cache Symfony vidé et régénéré."
