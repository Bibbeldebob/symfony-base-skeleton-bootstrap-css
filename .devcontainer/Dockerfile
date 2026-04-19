FROM mcr.microsoft.com/devcontainers/php:3-8.5-trixie

# Symfony CLI installieren
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Abhängigkeiten für php-erweiterungen
RUN apt-get update && apt-get install -y libxml2-dev libicu-dev

# PHP-Erweiterungen für Symfony
RUN docker-php-ext-install simplexml intl
