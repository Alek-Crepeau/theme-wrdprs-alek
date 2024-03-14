<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thème wordpress de Alek</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Protest+Riot" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css" />
</head>

<body>
    <div id="menu" class="global">
        <div class="logo"><?= get_custom_logo(); ?></div>
        <input type="checkbox" name="" id="chk_burger">
        <label id="burger" for="chk_burger">
            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <header class="menu__header">
            <?php wp_nav_menu(array("container" => "nav")); ?>
        </header>
    </div>