<?php
/* Template Name: Login */

get_header();

$currentID = get_queried_object_id();

// $image = wp_get_attachment_url( get_post_thumbnail_id( $currentID ), 'full' );
?>
<!-- <div id="loader_login">
    <svg x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
        <circle class="circle" stroke-width="4" cx="50" cy="50" r="44" />
        <circle class="dot" stroke-width="3" cx="8" cy="54" r="6" >
        <animateTransform
            attributeName="transform"
            dur="2s"
            type="rotate"
            from="0 50 48"
            to="360 50 52"
            repeatCount="indefinite" />

        </circle>
    </svg>
</div> -->

<?php
get_footer();
