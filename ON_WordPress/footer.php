  <footer class="footer" id="contacts">

    <div class="footer__inner">
      <div class="footer__contacts">
        <div class="footer__text"></div>

        <?php the_field('footer_text'); ?>

        <div class="footer__phone">
          <i class="fas fa-mobile-alt"></i><a href="<?php the_field('footer_phone'); ?>"><?php the_field('footer_phone'); ?></a>
        </div>
        <div class="footer__email">
          <i class="far fa-envelope"></i> <a href="<?php the_field('footer_email'); ?>"><?php the_field('footer_email'); ?></a>
        </div>
        <div class="footer__contact-adress">
          <i class="fas fa-map-marker-alt"></i><?php the_field('footer_contact-adress'); ?>
        </div>
      </div>

      <div class="footer__map">
        <div class="footer__adress">
          <?php the_field('footer_adress'); ?>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.4322859767635!2d30.523477615154693!3d50.45167439515861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce51cbaf5729%3A0x5e32306f1d6d3df2!2z0YPQuy4g0JrRgNC10YnQsNGC0LjQuiwgMTIsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1578673657987!5m2!1sru!2sua" width="400" height="250" frameborder="1" style="border:1;" allowfullscreen=""></iframe>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup">Наверх</a>
  <?php wp_footer(); ?>

  </body>

  </html>