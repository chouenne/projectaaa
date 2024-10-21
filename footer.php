<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <?php if (is_active_sidebar('footer-1')): ?>
          <?php dynamic_sidebar('footer-1'); ?>
        <?php endif; ?>

      </div>
      <div class="footer-col">
        <?php if (is_active_sidebar('footer-2')): ?>
          <div class="footer-widgets">
            <?php dynamic_sidebar('footer-2'); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="footer-col">
        <?php if (is_active_sidebar('footer-3')): ?>
          <div class="footer-widgets">
            <?php dynamic_sidebar('footer-3'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <!-- end of the footer-grid -->

    <div class="footer-logo">
      <a href="<?php echo home_url(); ?>">
        <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/aaa-logoh_lightbg.png" alt="Footer Logo">
      </a>
    </div>

    <h6>copyright
      <?php echo date('Y'); ?> by
      <?php bloginfo('name'); ?>
    </h6>
  </div>
  <!-- end of the container -->
</footer>

<?php wp_footer(); ?>
</body>

</html>