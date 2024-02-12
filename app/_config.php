<?php

use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;
use SilverStripe\View\Requirements;

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
$config->setContentCSS($contentCSS)->addButtonsToLine(1, "styles");
