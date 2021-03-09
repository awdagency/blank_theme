<?php
// if(!isset($_COOKIE["cookieConsent"])){setcookie("cookieConsent", "cookie-analitici=true|cookie-marketing=false|cookie-tecnici=true|checked=false", time() + (12 * 86400 * 30), "/");}
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corvari-store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Elimina il blu dai numeri (p.iva, etc) nei dispositivi Apple -->
	<meta name="format-detection" content="telephone=no">

    <link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- favicon -->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" /> -->
    <!-- end favicon -->


	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>

<?php
$currentObjectId = get_queried_object_id();

if(ICL_LANGUAGE_CODE !== 'it'){
    $siteUrl = str_replace("/en","",get_home_url());
    $homeUrl = rtrim(get_home_url(), '/');
} else {
    $siteUrl = get_home_url();
    $homeUrl = get_home_url();
}
?>

	<input type="hidden" id="uri" data-uri="<?php echo get_template_directory_uri(); ?>">
	<input type="hidden" id="homeUrl" data-homeurl="<?php echo $homeUrl; ?>">
	<input type="hidden" id="siteUrl" data-siteurl="<?php echo $siteUrl; ?>">
	<input type="hidden" id="objId" data-objid="<?php echo $currentObjectId; ?>">
	<input type="hidden" id="language" data-language="<?php echo defined( 'ICL_LANGUAGE_CODE' ) ? ICL_LANGUAGE_CODE : ''; ?>">

    <header class="">
    
    </header>

    <div id="container" data-url="<?php echo esc_url( home_url( '/' ) ); ?>" >
