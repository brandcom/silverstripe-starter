# silverstripe docker starter

### ACHTUNG: Ist noch inder Beta-Phase.
### ACHTUNG: Ist noch inder Beta-Phase.
### ACHTUNG: Ist noch inder Beta-Phase.

### Installieren

```
git clone git@github.com:brandcom/silverstripe-docker-starter.git
cd silverstripe-docker-starter
docker-compose up -d
```

Die Seite läuft jetzt im Browser unter http://localhost:8000/. Der Admin ist unter http://localhost:8000/admin/ mit den Zugangsdaten admin/admin.


### Composer-Befehle ausführen

```
docker run --rm --interactive --tty --volume $PWD:/app composer <command>
```


### Node-Befehle ausführen

```
 docker run --rm --interactive --tty --workdir /app --volume $PWD:/app node:18.4-alpine npm <command>
```
