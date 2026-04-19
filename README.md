# symfony-base-skeleton-bootstrap-css

## Nutzung als Starterprojekt

Dieses Projekt kann als Grundlage für neue Symfony-Projekte verwendet werden. Weil es nicht auf Packagist veröffentlicht ist, nutze bitte die GitHub-Repository-URL in `composer create-project`:

```bash
composer create-project --repository-url=https://github.com/Bibbeldebob/symfony-base-skeleton-bootstrap-css.git <dein-neues-verzeichnis>
```

Beispiel:

```bash
composer create-project --repository-url=https://github.com/Bibbeldebob/symfony-base-skeleton-bootstrap-css-bootstrap-css.git my-app
```

Danach kannst du das Verzeichnis `my-app` betreten und wie gewohnt weiterentwickeln:

```bash
cd my-app
composer install
vendor/bin/phpunit
```

**Hinweis:** Frontend-Abhängigkeiten müssen separat installiert werden. Führe `php bin/console importmap:install` aus, um die erforderlichen JavaScript- und CSS-Abhängigkeiten zu installieren.

Wenn du den Symfony-Webserver für die Entwicklung nutzen möchtest, installiere zuerst das lokale CA-Zertifikat und starte den Server:

```bash
symfony server:ca:install
symfony server:start
```

Tipp: Öffne das Projekt im Zielverzeichnis im VS Code-Devcontainer (\`.devcontainer\`), damit die Entwicklungsumgebung und PHP-Version konsistent sind.

Hinweis: Bei privaten Repositories sind ggf. SSH-Zugang oder Token nötig (z. B. `git@github.com:Bibbeldebob/symfony-base-skeleton-bootstrap-css.git`).
