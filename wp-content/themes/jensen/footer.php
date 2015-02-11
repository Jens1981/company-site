
    <footer id="footer" class="footer">
      <div class="wrapper">
      
        <div class="logo-mark">
          <svg class="footer-logo" viewBox="0 0 100 116.736">
            <use xlink:href="#footer-logo"></use>
          </svg>
        </div>
        
        <div class="col col-address">
          <h4>Jensen Ecology</h4>
          <p>1845 E. Main St.</p>
          <p>Madison, WI 53704</p>
        </div>

        <div class="col col-contact">
          <h4>Contact Us</h4>
          <p>608.630.1651</p>
          <p><a href="mailto:hello@jensenecology.com">Email Us</a></p>
        </div>

        <div class="col col-follow">
          <h4>Follow Us</h4>
          <p><a href="">Twitter</a></p>
          <p><a href="">Facebook</a></p>
        </div>
        
        <div class="col col-copyright">
          <p>&copy;<?php echo date('Y'); ?> Jensen Ecology</p>
          <p><a href="http://bradsawicki.com" target="_blank">Web Design: Brad Sawicki</a></p>
        </div>

      </div>
    </footer>
  
  </div>

	<?php wp_footer(); ?>

  <?php get_template_part( 'partials/svg' ); ?>
	
  <script src="<?php bloginfo('template_directory'); ?>/dist/js/main.js"></script>
</body>
</html>