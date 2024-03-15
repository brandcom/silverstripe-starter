# Front-end (MAMP)

## Builden der CSS/JS-Assets

Die Source-Dateien für CSS und JS liegen unter `public_src/`. Um daraus die dist-Files zu bauen:

    yarn run build

## Entwicklungs-Modus (Watcher)

### Setup

Um den Webpack-Dev-Server (mit Watch-Funktion) nutzen zu können, musst Du einmalig folgende Einstellungen vornehmen:

Bearbeite die Datei `webpack.config.js` und trage in Zeile 56 die Host-URL aus MAMP ein (mit Port-Nummer, MAMP-Default: 8890).

`webpack.config.js`:

    target: "https://silverstripe-starter.local", // enter your local dev url here

Kopiere die Datei `app/_config/env.yml.example` zu `app/_config/env.yml`.

```sh
cp app/_config/env.yml.example app/_config/env.yml
```

Nun kannst Du den Watcher nutzen.

### Watcher starten

    yarn run start

### Watcher stoppen

    Control + C

Achtung, der Watcher baut die CSS/JS-Assets nur in temporäre Dateien. Wenn Du mit einem Entwicklungsschritt fertig bist und Deine Änderungen ins Projekt übernehmen willst, führe einmal den Build-Prozess aus (`yarn run build`), nachdem Du den Watcher geschlossen hast.
