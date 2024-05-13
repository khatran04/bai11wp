<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="#"><strong>aaaaa  </strong>aaaaa</a>
            </h1>
            <p><a class="site-footer__link" href="#">555.555.5555</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <!-- <nav class="nav-list">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Campuses</a></li>
                </ul>
              </nav> -->
              <?php
              wp_nav_menu( array(
            'theme_location' => 'footer_menu_1',
            'container'            => 'nav',
            'container_class'      => 'nav-list',
          ));
          ?>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <!-- <nav class="nav-list">
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </nav> -->
              <?php
              wp_nav_menu( array(
            'theme_location' => 'footer_menu_2',
            'container'            => 'nav',
            'container_class'      => 'nav-list',
          ));
          ?>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://www.facebook.com/" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://twitter.com/?lang=vi" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/?hl=vi" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer();?>
</body>

</html>
