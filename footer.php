<?php
/**
 * Default Footer Template
 *
 */
?>


<footer class="footer mt-auto" role="contentinfo">
<!-- <footer class="footer mt-auto bg-light" role="contentinfo"> -->
  <div class="container py-4">
    <nav class="nav-footer-wrap" role="navigation">
      <?php h5bs_footer_nav(); ?>
    </nav>

    <p class="text-center pt-8 pb-0">&copy; <?= date( 'Y' ); ?> <?= get_bloginfo( 'name' ); ?></p>
    <!-- <p><?php echo get_option('da_citystate'); ?></p> -->
    <!-- <p><?php echo get_option('da_phonenumber'); ?></p> -->
    <!-- <p><?php echo get_option('da_zip'); ?></p> -->
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
