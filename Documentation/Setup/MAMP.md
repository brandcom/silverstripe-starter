# Setup mit MAMP

Installiere die Abhängigkeiten.

```sh
php82 composer.phar install
yarn install
```

Erstelle einen neuen Virtual Host in MAMP und lege eine neue Datenbank an.
Einige Einstellungen in der .htaccess-Datei gehen davon aus, dass Dein Dev-Server im MAMP auf ".local" endet.

Bearbeite die Datei `webpack.config.js` und trage in Zeile 54 die Host-URL aus MAMP ein (mit Port-Nummer, MAMP-Default: 8890).

```sh
vim webpack.config.js
```

Kopiere die Datei .env.example zu .env und trage dort deine MySQL-Zugangsdaten ein.

```sh
cp .env.example .env
```

Kopiere die Datei `app/_config/env.yml.example` zu `app/_config/env.yml`.

```sh
cp app/_config/env.yml.example app/_config/env.yml
```
