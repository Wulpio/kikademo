<?php
$_TRANSLATIONS = [];
$_LANGUAGES = ['sk', 'en', 'de'];
$_DEFAULT_LANGUAGE = 'sk';

function translate($key, $lang = null)
{
    global $_TRANSLATIONS;
    if ($lang == null)
        $lang = getLang();
    if (empty($_TRANSLATIONS)) {
        $content = file_get_contents('translations.json');
        if (!empty($content)) {
            $_TRANSLATIONS = json_decode($content, true);
        }
    }
    if (isset($_TRANSLATIONS[$key]) && isset($_TRANSLATIONS[$key][$lang])) {
        return $_TRANSLATIONS[$key][$lang];
    }
    return null;
}

function getLang()
{
    global $_LANGUAGES;
    global $_DEFAULT_LANGUAGE;
    if (isset($_GET['lang'])) {
        return $_GET['lang'];
    }
    if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $_LANGUAGES)) {
        return $_COOKIE['lang'];
    }
    return $_DEFAULT_LANGUAGE;
}

function setLang($lang = null)
{
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    } elseif (empty($lang)) {

    }
    setcookie('lang', getLang(), (strtotime(time()) + 3600) * 24);
}