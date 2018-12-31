<?php

/*
 * Language detection
 */

// Global variables
const AVAILABLE_LANGUAGES = ["de"];

$lang;

function isValidLanguage($lang) {
    return in_array($lang, AVAILABLE_LANGUAGES);
}

function setLanguageCookie($value) {
    setcookie("lang", $value, strtotime("+10 years"), "/");
}

if (isset($_GET) && array_key_exists("lang", $_GET) && isValidLanguage($_GET["lang"])) {
    // change language
    $lang = $_GET["lang"];
    setLanguageCookie($lang);
} else {
    if (isset($_COOKIE["lang"]) && isValidLanguage($_COOKIE["lang"])) {
        // transfer language setting
        $lang = $_COOKIE["lang"];
    } else {
        // set default language
        $lang = "de";
        setLanguageCookie($lang);
    }
}