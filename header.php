<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>

  <nav class="site-navbar site-navbar-blue">
    <div class="site-navbar__desktop-logo-container">
      <a href="index.html">
        <img class="alianza-navbar-logo" src="<?php echo get_template_directory_uri() . '/img/logos/alianza-logo-white.png'?>" alt="Logo Alianza SWE-MEX">
      </a>
    </div>
    <div class="site-navbar__menu-container">
      <div class="site-navbar__mobile-logo-container">
        <a class="navbar-logo-mobile" src="<?php echo get_template_directory_uri() . '/img/logos/alianza-logo-white.png' ?>" alt="Logo Alianza SWE-MEX"></a>
      </div>
      <div class="site-navbar__menu alianza-font-SourceSansPro-REGULAR">
        <a href="index.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span class="alianza-font-SourceSansPro-semi-bold">Inicio</span>
        </a>
        <a href="soluciones.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span class="alianza-font-SourceSansPro-semi-bold">Soluciones</span>
        </a>
        <a href="acerca-de-nosotros.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span class="alianza-font-SourceSansPro-semi-bold">Acerca de nosotros</span>
        </a>
        <a href="" class="site-navbar__menu-link active">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span class="alianza-font-SourceSansPro-semi-bold">Noticias</span>
        </a>
        <a href="contacto.html" class="site-navbar__menu-link">
          <div class="nav_stroke-container">
            <div class="nav_stroke"></div>
          </div>
          <span class="alianza-font-SourceSansPro-semi-bold">Contacto</span>
        </a>
      </div>
    </div>
    <div data-attribute="" class="navbar-hamburguer-visibility"  id="hamburgerMenu">
      <div class="navbar-hamburguer" data-attribute="">
        <div class="align-content-hamburguer" data-attribute="">
          <div class="line-hamburguer-base line-hamburguer-lg" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-lg margin-vertical-4px" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-md" data-attribute=""></div>
        </div>
      </div>
    </div>
    <div class="hamburger-menu-container" id="menuContainer" data-attribute="">
      <div class="hamburger-menu-header" data-attribute="">
        <div class="" data-attribute="">
          <a href="" data-attribute="">
            <img class="hamburger-logo" src="<?php echo get_template_directory_uri() . '/img/logos/alianza-logo-white.png' ?>" data-attribute="">
          </a>
        </div>
        <div class="hamburger-close-container" id="hideHamburger">
          <img class="hamburger-close" src="<?php echo get_template_directory_uri() . '/img/icons/close-menu.png' ?>">
        </div>
      </div>
      <div class="hamburger-menu-body" data-attribute="">
        <a data-attribute="" href="index.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Inicio</span>
          </div>
        </a>
        <a data-attribute="" href="plans-services.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Soluciones</span>
          </div>
        </a>
        <a data-attribute="" href="solar-benefits.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Acerca de nosotros</span>
          </div>
        </a>
        <a data-attribute="" href="projects.html" class="hamburger-menu-link link-active">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Noticias</span>
          </div>
        </a>
        <a data-attribute="" href="http://rer.wpmultisite.getmore.mx/" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">Contacto</span>
          </div>
        </a>
      </div>
    </div>
  </nav>

  <script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous">
  </script>
