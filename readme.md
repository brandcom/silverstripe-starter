# silverstripe starter

Der SilverStripe Starter ist ein Tool, das die Einrichtung einer SilverStripe-Entwicklungsumgebung vereinfacht. Das Tool basiert auf dem [silverstripe/installer](https://github.com/silverstripe/silverstripe-installer) und enthält wesentliche Plugins sowie ein Front-End-Build-Tool.

‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️  
ACHTUNG:  
Dies ist noch Beta-Software.  
Es können sich Änderungen ergeben.  
‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️‼️


## Was ist enthalten?

* SilverStripe 4.12
* Silverstripe Elemental
* Silverstripe Stats Plugin für Matomo und Cookiebot
* Silverstripe Honeypot Protection für Spamschutz
* Webpack als Front-End-Build-Tool für SCSS- und JavaScript-Imports


## Installation

```sh
# Laden den Code herunter
git clone git@github.com:brandcom/silverstripe-starter.git

# Initialisieren das Git-Repository
rm -fr silverstripe-starter/.git
cd silverstripe-starter
git init
git add .
git commit -m "initial commit"

# Installieren die Abhängigkeiten
php81 composer.phar install
yarn install
```

Erstelle einen neuen Virtual Host in MAMP und legen eine neue Datenbank an.

Bearbeite die Datei `webpack.config.js` und trage in Zeile 56 die URL aus MAMP ein.

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
