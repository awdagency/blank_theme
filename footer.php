<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corvari-store
 */

$currentObjectId = get_queried_object_id();

?>

    <footer class="footer">
    <?php
        $time = date('Y');
    ?>
        <div class="footer__copyrights">
            <p>&copy; <?php echo $time; ?> Copyright COMPANY - P.IVA XXXXXXXXX</p>
        </div>

        <div class="footer__credits">
            <a target="_blank" href="https://www.awd.agency">
            <?php /*/ //Logo AWD ?>
                <div class="img">
                    <svg x="0px" y="0px" viewBox="0 0 160 100" style="enable-background:new 0 0 160 100;" xml:space="preserve">
                    <g>
                        <path class="svg-awd" d="M67.1,23.6C59.6,16.1,50.5,12.3,40,12.3s-19.5,3.8-27.1,11.3C5.4,31.1,1.7,40.2,1.7,50.8S5.4,70.4,13,77.9   c7.5,7.4,16.5,11.2,27.1,11.2h38.4V50.8C78.4,40.2,74.7,31.1,67.1,23.6 M39.9,70.2c-5.2,0-9.7-1.9-13.4-5.7   c-3.6-3.8-5.5-8.4-5.5-13.7s1.9-10,5.5-13.8c3.6-3.9,8.1-5.8,13.4-5.8s9.8,1.9,13.4,5.8c3.7,3.8,5.5,8.5,5.5,13.8v0.1H40.2v19.3   H39.9z"></path>
                        <path class="svg-awd" d="M81.3,50.8v38.3h38.4c10.5,0,19.6-3.7,27.1-11.2s11.3-16.5,11.3-27.1s-3.7-19.7-11.3-27.2   c-7.5-7.5-16.6-11.3-27.1-11.3s-19.5,3.8-27.1,11.3C85,31.1,81.3,40.2,81.3,50.8 M119.5,70.2V50.9h-18.6v-0.1   c0-5.3,1.9-10,5.5-13.8c3.6-3.9,8.1-5.8,13.4-5.8s9.8,1.9,13.5,5.8c3.6,3.8,5.5,8.5,5.5,13.8s-1.9,9.8-5.6,13.7   c-3.7,3.8-8.1,5.7-13.4,5.7H119.5z"></path>
                    </g>
                    </svg>
                </div>
                <?php /*/ //Logo AWD ?>
            </a>
        </div>

    </footer>

</div>  <!-- #container -->
<?php
// do_shortcode('[awdGDPR]');
?>
<?php wp_footer(); ?>

</body>
</html>