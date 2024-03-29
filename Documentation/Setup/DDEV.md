# Setup mit DDEV

Auf Deinem Entwicklungsrechner müssen [Docker Desktop](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/#macos) und [DDEV](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/) installiert sein.

## DDEV: Projektnamen einsetzen

Öffne die Datei `.ddev/config.yaml`. Setze in der ersten Zeile bei `name: silverstripe-starter` den Namen Deines Projektes ein. Am besten nimmst Du die spätere Domain ohne den letzten Teil (TLD). Wenn Dein Projekt später z.B. auf `superprojekt.com` laufen, setze `name: superprojekt` ein.

## DDEV: Erster Start

Starte die DDEV-Umgebung mit

    ddev start

Beim ersten Start möchte Docker einen Eintrag in die Hosts-Datei Deines Macs schreiben. Dafür musst Du einmal Dein Mac-Benutzer-Passwort eingeben, wenn der Prompt "Password:" erscheint. Diese Eingabe ist nur beim allerersten Start nötig.

DDEV führt für Dich einen `composer install` und `yarn install` durch und kopiert Dir eine schlüsselfertige .env-Datei in Dein Projektverzeichnis.

## Projekt im Browser öffnen

Um Dein Projekt im Browser zu öffnen:

    ddev launch

## Mailversand

Wenn Du aus dem Silverstripe Mails versendest, werden diese in einen Mailhog geleitet, den Du so öffnest:

    ddev launch -m

## Weitere Infos

Eine gute Übersicht über verfügbare DDEV-Befehle und Infos, wie das mit der Datenbank genau funktioniert, bekommst Du in den [offiziellen DDEV-Docs](https://ddev.readthedocs.io/en/stable/users/usage/).
