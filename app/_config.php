<?php

use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;
use SilverStripe\View\Requirements;
use SilverStripe\i18n\i18n;

/*
 * Zwingt alles JavaScript an das Ende des HTMLs
 */
Requirements::set_force_js_to_bottom(true);

/*
 * Aktiviert die Format-Auswahl im HTML-Editor
 */
$config = TinyMCEConfig::get("cms");
$contentCSS = $config->getContentCSS();
$contentCSS[] = "/public/build/admin.min.css";
$config->setContentCSS($contentCSS);
$config->insertButtonsAfter("blocks", "styles");

/*
 * Setzt die Sprache auf Deutsch
 *
 * Für mehrsprachige Seiten installiere bitte das Fluent Plugin und entferne diese Zeile.
 *
 * @link https://github.com/tractorcow-farm/silverstripe-fluent
 */
i18n::set_locale("de_DE");
