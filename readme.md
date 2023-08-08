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
-   [Webpack](https://webpack.js.org/) als Front-End-Build-Tool für SCSS und JavaScript-Imports
-   Automatisches Formatieren von Dateien mit [Prettier](https://prettier.io/) bei GIT Commit.

## Installation

Nutze den "Use this template" Button um ein neues Repository für ein Projekt anzulegen und klone danach dein neues Projekt.

```sh
# Klone dein Repository
git clone git@github.com:brandcom/{{dein-projekt}}
```

Installiere die Abhängigkeiten.

```
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

```
yarn add -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

2. Füge Tailwind zur Webpack-Konfiguration hinzu

Bearbeite die Datei webpack.config.js und füge in Zeile 26 Tailwind als PostCSS-Option hinzu:

```
"css-loader",
{
    loader: "postcss-loader",
    options: { postcssOptions: { plugins: ["tailwindcss", "autoprefixer"] } },
},
```

3. Konfiguriere die Template-Pfade

Füge die Pfade zu deinen Template-Dateien zur `tailwind.config.js` hinzu.

```
module.exports = {
  content: ["./app/templates/**/*.ss", "./public_src/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

4. Füge die Tailwind-Direktiven zu deinen Styles hinzu

In der Datei `public_src/style.scss`

```
@tailwind base;
@tailwind components;
@tailwind utilities;
```

5. Jetzt kannst du TailwindCSS verwenden.

Starte Webpack

```
yarn run start
```

Und verwende TailwindCSS in deinen Templates.

```
<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
```

## Deploy

> Bitte dokumentiere hier kurz, wie Änderungen an der Website live geschaltet werden und was sonst noch wichtig für das
> Projekt sein könnte. Du kannst dich an der Readme von brandcom.de orientieren.
> Siehe: https://github.com/brandcom/brandcom.de#deploy
