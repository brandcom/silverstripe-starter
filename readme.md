# Silverstripe Starter

Der Silverstripe Starter ist ein Tool, das die Einrichtung einer Silverstripe-Entwicklungsumgebung vereinfacht. Das Tool basiert auf dem [silverstripe/installer](https://github.com/silverstripe/silverstripe-installer) und enthält wesentliche Plugins sowie ein Front-End-Build-Tool.

## Was ist enthalten?

-   PHP 8.2
-   Silverstripe 5.1
-   [Silverstripe Elemental](https://github.com/silverstripe/silverstripe-elemental)
-   [Silverstripe Elemental UserForms](https://github.com/dnadesign/silverstripe-elemental-userforms)
-   [Silverstripe Googlesitemaps](https://github.com/wilr/silverstripe-googlesitemaps)
-   [Silverstripe Redirected URLs](https://github.com/silverstripe/silverstripe-redirectedurls)
-   [Silverstripe Honeypot Protection](https://github.com/brandcom/silverstripe-honeypotprotection) für Spamschutz
-   [Silverstripe Stats Plugin](https://github.com/brandcom/silverstripe-analytics) für Matomo und Cookiebot
-   [Silverstripe Webp Plugin](https://github.com/brandcom/silverstripe-webp) für Webp-Bilder
-   [Webpack](https://webpack.js.org/) als Front-End-Build-Tool für SCSS und modernes JavaScript
-   Beim Committen werden automatisch folgende Tools ausgeführt
    -   [Prettier](https://prettier.io/) formatiert den Code und macht ihn "schöner".
    -   [ESLint](https://eslint.org/) - prüft den JS-Code auf Fehler.
    -   [Stylelint](https://stylelint.io/) - prüft den SCSS-Code auf Fehler.
    -   [PHPStan](https://phpstan.org/) prüft den PHP-Code auf Fehler.
    -   [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) prüft, ob der PSR-12 eingehalten wurde.
    -   Am besten ist es, den Code-Editor so zu konfigurieren, dass die Linting Tools automatisch beim Programmieren ausgeführt werden, damit die Fehler nicht erst beim Commit angezeigt werden.

## Standards und Empfehlungen

-   Dein PHP-Code muss dem [PSR-12](https://www.php-fig.org/psr/psr-12/) folgen.
-   Dein SCSS-Code sollte den [SUIT Naming Conventions](https://github.com/suitcss/suit/blob/master/doc/naming-conventions.md) folgen.
-   Denke an denjenigen, der die Seite befüllen wird. Benenne die Seitentypen, Elemente und Felder sinnvoll und füge eventuell Hilfetexte im CMS hinzu.

## Hinweis für Visual Studio Code

Bitte installiere die Erweiterung [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint), damit Dir mögliche Fehler im SCSS schon während des Codens im Editor angezeigt werden können. Das musst Du nur einmal machen; die Extension steht dann dauerhaft für alle Deine Projekte zur Verfügung.

## Installation

Nutze den "Use this template" Button um ein neues Repository für ein Projekt anzulegen und klone danach dein neues Projekt.

```sh
# Klone dein Repository
git clone git@github.com:brandcom/{{dein-projekt}}
```

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

## Front-end

Startet den Entwicklungs-Modus.

```sh
yarn run start
```

Führt den Production-Build aus.

```sh
yarn run build
```

## TailwindCSS

1. TailwindCSS installieren

```sh
yarn add -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

2. Füge Tailwind zur Webpack-Konfiguration hinzu

Bearbeite die Datei webpack.config.js und füge in Zeile 26 Tailwind als PostCSS-Option hinzu:

```javascript
"css-loader",
{
    loader: "postcss-loader",
    options: { postcssOptions: { plugins: ["tailwindcss", "autoprefixer"] } },
},
```

3. Konfiguriere die Template-Pfade

Füge die Pfade zu deinen Template-Dateien zur `tailwind.config.js` hinzu.

```javascript
module.exports = {
    content: ["./app/templates/**/*.ss", "./public_src/**/*.js"],
    theme: {
        extend: {},
    },
    plugins: [],
};
```

4. Füge die Tailwind-Direktiven zu deinen Styles hinzu

In der Datei `public_src/style.scss`

```scss
@tailwind base;
@tailwind components;
@tailwind utilities;
```

5. Jetzt kannst du TailwindCSS verwenden.

Starte Webpack

```sh
yarn run start
```

Und verwende TailwindCSS in deinen Templates.

```html
<h1 class="text-3xl font-bold underline">Hello world!</h1>
```

Oder deinen SCSS-Components

```scss
.TextBaseElement-title {
    @apply text-3xl font-bold underline;
}
```
