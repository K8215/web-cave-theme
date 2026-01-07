<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Cave
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div>
        <a id="skip-link" href="#main">
            Skip Navigation
        </a>

        <header>
            <a href="/" class="logo">Home</a>

            <button id="mobile-toggler" class="hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <nav id="navigation">
                <?php wp_nav_menu();?>
                <ul class="social">
                    <li><a href="/feed/" target="_blank" aria-label="RSS Feed"><i class="fas fa-rss"></i></a>
                    </li>
                </ul>
            </nav>
        </header>