# Silverstripe Starter

Der Silverstripe Starter ist ein Tool, das die Einrichtung einer Silverstripe-Entwicklungsumgebung vereinfacht. Das Tool basiert auf dem [silverstripe/installer](https://github.com/silverstripe/silverstripe-installer) und enthält wesentliche Plugins sowie ein Front-End-Build-Tool.

## Was ist enthalten?

-   Silverstripe 5.0
-   Silverstripe Elemental
-   Silverstripe Elemental UserForms
-   Silverstripe Googlesitemaps
-   Silverstripe Redirected URLs
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

## Standards und Empfehlungen

-   Dein PHP-Code muss dem [PSR-12](https://www.php-fig.org/psr/psr-12/) folgen.
-   Dein SCSS-Code sollte den [SUIT Naming Conventions](https://github.com/suitcss/suit/blob/master/doc/naming-conventions.md) folgen.

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

Starte die Entwicklung.

```sh
yarn run start
```

## Front-end Build

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

## Deploy

> Bitte dokumentiere hier kurz, wie Änderungen an der Website live geschaltet werden und was sonst noch wichtig für das
> Projekt sein könnte. Du kannst dich an der Readme von brandcom.de orientieren.
> Siehe: https://github.com/brandcom/brandcom.de#deploy
