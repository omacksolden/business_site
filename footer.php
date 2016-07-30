<!-- BEGINNING OF FOOTER - END SECTION CONTENT -->
            <footer class="row">
                <div class="twelve columns">
                  <?php wp_nav_menu(array(
                      'sort_column' => 'menu_order',
                      'container_class' => 'blank-menu-footer'
                      ));?>
                </div>
            </footer>
        </div> <!-- ends container -->
    <?php wp_footer(); ?>
    </body>
</html>
