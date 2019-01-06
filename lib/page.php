<?php

/*
 * Page routing
 */

const PAGE_HOME = "PAGE_HOME";
const PAGE_INTERPRETING = "PAGE_INTERPRETING";
const PAGE_TRANSLATING = "PAGE_TRANSLATING";
const PAGE_PROFILE = "PAGE_PROFILE";
const PAGE_CONTACT = "PAGE_CONTACT";
const PAGE_IMPRINT = "PAGE_IMPRINT";
const PAGE_DATA_PRIVACY = "PAGE_DATA_PRIVACY";
const PAGE_AGB = "PAGE_AGB";

const PAGE_404 = "PAGE_404";

$page = PAGE_HOME;

if (isset($_SERVER["REQUEST_URI"])) {
    if ($_SERVER["REQUEST_URI"] == null || $_SERVER["REQUEST_URI"] === "" || $_SERVER["REQUEST_URI"] === "/") {
        $path = "/";
    } else {
        $parsed = parse_url($_SERVER["REQUEST_URI"]);
    
        if ($parsed != null && isset($parsed["path"])) {
            $path = $parsed["path"];
        }
    }
    
    switch ($path) {
        case "": $page = PAGE_HOME; break;
        case "/": $page = PAGE_HOME; break;
        
        case "/dolmetschen": $page = PAGE_INTERPRETING; break;

        case "/uebersetzen": $page = PAGE_TRANSLATING; break;
        case "/%C3%BCbersetzen": $page = PAGE_TRANSLATING; break; // umlaut version
        
        case "/profil": $page = PAGE_PROFILE; break;
        case "/kontakt": $page = PAGE_CONTACT; break;
        case "/impressum": $page = PAGE_IMPRINT; break;
        case "/agb": $page = PAGE_AGB; break;
        case "/datenschutz": $page = PAGE_DATA_PRIVACY; break;

        default: $page = PAGE_404;
    }
}

$GLOBALS["page"] = $page;