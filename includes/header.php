<?php
session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

function get_preferred_language($available_languages, $default = 'en')
{
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

        foreach ($langs as $lang) {
            $lang = substr($lang, 0, 2); // Get the first two characters (language code)
            if (in_array($lang, $available_languages)) {
                return $lang;
            }
        }
    }
    return $default;
}


function set_default_language()
{
    if (isset($_SESSION['lang'])) {
        return $_SESSION['lang'];
    }

    $available_languages = ['en', 'pt-BR'];
    return get_preferred_language($available_languages);
}

// Load language file based on the detected default language
$lang_code = set_default_language();

$lang_file = 'lang/' . $lang_code . '.php';

if (file_exists($lang_file)) {
    include($lang_file);
} else {
    include('lang/en.php');
}

$options = [
    'en' => 'English',
    'pt-BR' => 'Português',
];

?>

<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <title>Uru Studios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Join the adventure with Haunted Bricks, an innovative brick breaker game with a twist of RPG, perfect for all ages.">
    <meta name="author" content="Uru Studios">
    <link rel="stylesheet" href="/css/bulma.min.css" />
    <link rel="stylesheet" href="/css/custom.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/flickity.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
</head>

<body>
    <nav class="navbar is-fixed-top" style="background-color: var(--bulma-scheme-main-bis);">
        <div class="navbar-brand">
            <a class="navbar-item" href="/"><img style="min-height: 50px; width: auto;" src="./logo.png" alt="Haunted Bricks Logo"></a>
            <div class="navbar-item is-right">
                <div class="select is-small is-right">
                    <select id="language-select">
                        <?php foreach ($options as $value => $label) : ?>
                            <option value="<?php echo $value; ?>" <?php echo $lang_code === $value ? 'selected' : ''; ?>>
                                <?php echo $label; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </nav>