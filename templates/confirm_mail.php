<?php
/* Template Name: Confirm email */

get_header();

$user = wp_get_current_user();
$allowed_roles = array('administrator', 'staff');

$currentID = get_queried_object_id();
$key = $_GET['key'];
?>
<div id="confirm" class="confirm">

</div>
<?php
get_footer();
