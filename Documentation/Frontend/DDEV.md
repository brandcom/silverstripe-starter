# Front-end (DDEV)

## Builden der CSS/JS-Assets

Die Source-Dateien für CSS und JS liegen unter `public_src/`. Um daraus die dist-Files zu bauen:

    ddev yarn run build

## Entwicklungs-Modus (Watcher)

### Setup

Um den Webpack-Dev-Server (mit Watch-Funktion) nutzen zu können, musst Du einmalig folgende Einstellungen vornehmen:

`webpack.config.js`:

    devServer: {
        ...
        proxy: [
            {
                ...
                target: "https://my-project.ddev.site", // my-project mit dem Namen Deines Projektes ersetzen!
            }
        ],
        server: "http",
        allowedHosts: "all"
    }

`app/_config/env.yml`:

    SilverStripe\Control\Director:
        alternate_base_url: "https://my-project.ddev.site:3000/"

Nun kannst Du den Watcher nutzen.

### Watcher starten

    ddev yarn run start

### Watcher stoppen

    Control + C

Achtung, der Watcher baut die CSS/JS-Assets nur in temporäre Dateien. Wenn Du mit einem Entwicklungsschritt fertig bist und Deine Änderungen ins Projekt übernehmen willst, führe einmal den Build-Prozess aus (`ddev yarn run build`), nachdem Du den Watcher geschlossen hast.
