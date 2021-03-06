<?php

/*
 * Translate functions
 */

const FALLBACK_LANG = "de";

function t($key) {
    if (array_key_exists($key, TRANSLATIONS) && array_key_exists($GLOBALS["lang"], TRANSLATIONS[$key]) && ! empty(TRANSLATIONS[$key][$GLOBALS["lang"]])) {
        return TRANSLATIONS[$key][$GLOBALS["lang"]];
    } else if (! empty(TRANSLATIONS[$key][FALLBACK_LANG])) {
        return TRANSLATIONS[$key][FALLBACK_LANG];
    } else {
        return $key;
    }
}