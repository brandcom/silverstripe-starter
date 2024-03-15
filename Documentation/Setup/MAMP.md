# Setup mit MAMP

Installiere die Abhängigkeiten.

```sh
php82 composer.phar install
yarn install
```

Erstelle einen neuen Virtual Host in MAMP und lege eine neue Datenbank an.
Einige Einstellungen in der .htaccess-Datei gehen davon aus, dass Dein Dev-Server im MAMP auf ".local" endet.

Kopiere die Datei .env.example zu .env und trage dort deine MySQL-Zugangsdaten ein.

```sh
cp .env.example .env
```
