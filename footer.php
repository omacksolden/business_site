<!-- BEGINNING OF FOOTER - END SECTION CONTENT -->
            <footer class="row">
                <div class="twelve columns">
                  <?php wp_nav_menu(array(
                      'sort_column' => 'menu_order',
                      'container_class' => 'blank-menu-footer'
                      ));?>
                  <div id="blogpostsfooter">
                  </div>
                  <div id="socialicons">
                    <div id="facebook"></div>
                    <div id="twitter"></div>
                    <div id="instagram"></div>
                  </div>
                  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <div><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="Search" class="btn" />
                    </div>
                    </form>
            </footer>
        </div> <!-- ends container -->
    <?php wp_footer(); ?>
    </body>
</html>
