# Install php modules
dnf install php-xml php-apcu -y

# Copy Apcu ini files
/bin/cp php.d/apcu.ini /etc/php.d/40-apcu.ini
/bin/cp php.d/php-cli.ini /etc/php.d/40-php-cli.ini