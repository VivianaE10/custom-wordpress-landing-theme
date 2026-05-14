<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="logo">
            <?php
            $logo_texto = get_field('logo_texto', get_option('page_on_front'));
            echo esc_html($logo_texto ? $logo_texto : 'LOGO');
            ?>
        </div>

        <nav class="navbar">

             <a href="#">
                <?php
                $menu_2_text = get_field('menu_2_text', get_option('page_on_front'));
                echo esc_html($menu_2_text ? $menu_2_text : 'BELIEFS');
                ?>
            </a>
            <a href="#">
                <?php
                $menu_2_text = get_field('menu_2_text', get_option('page_on_front'));
                echo esc_html($menu_2_text ? $menu_2_text : 'BELIEFS');
                ?>
            </a>
            <a href="#">
                <?php
                $menu_3_text = get_field('menu_3_text', get_option('page_on_front'));
                echo esc_html($menu_3_text ? $menu_3_text : 'CASE STUDIES');
                ?>
            </a>
            <a href="#">
                <?php
                $menu_4_text = get_field('menu_4_text', get_option('page_on_front'));
                echo esc_html($menu_4_text ? $menu_4_text : 'ABOUT US');
                ?>
            </a>

            <a href="#">
                <?php
                $menu_5_text = get_field('menu_5_text', get_option('page_on_front'));
                echo esc_html($menu_5_text ? $menu_5_text : 'JOIN US');
                ?>
            </a>
        </nav>
    </header>