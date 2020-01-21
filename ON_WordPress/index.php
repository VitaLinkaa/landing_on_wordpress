<?php error_reporting(-1); ?>
<?php get_header(); ?>

<section class="section">
  <div class="container">
    <div class="section__title"><?php the_field('section_title'); ?></div>
    <div class="section__text"><?php the_field('section_text'); ?>
    </div>
    <div class="section__img">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/main-img.png" alt="timber">
    </div>

    <div class="project" id="project">
      <div class="project__title"><?php the_field('project_title'); ?></div>

      <div class="project_item">
        <?php

        $posts = get_field('project_item');

        if ($posts) : ?>
          <ul>
            <?php foreach ($posts as $post) : ?>
              <?php setup_postdata($post); ?>
              <li class="project__item">
                <div class="project__name"><?php the_field('project_name'); ?></div>
                <div class="project__area"><?php the_field('project_area'); ?></div>
                <div class="project__size"><?php the_field('project_size'); ?></div>
                <div class="project__price"><?php the_field('project_price'); ?></div>
                <div class="project__imgs">
                  <div class="project__imgs-item"><img src="<?php the_field('project_imgs-item-1'); ?>" alt=""></div>
                  <div class="project__imgs-item"><img src="<?php the_field('project_imgs-item-2'); ?>" alt=""></div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
          ?>
        <?php endif; ?>
        <!-- <div class="project__name">Дом #1</div>
        <div class="project__area">Размер дома: 6 x 6</div>
        <div class="project__size">Общая площадь дома: 54 кв. м</div>
        <div class="project__price">Стоимость - 200 000 грн</div>
        <div class="project__imgs">
          <div class="project__imgs-item"><img src="./img/project-home_1.png" alt=""></div>
          <div class="project__imgs-item"><img src="./img/project-plan_1.png" alt=""></div>
        </div> -->
      </div>

      <!-- <div class="project__item">
        <div class="project__name">Дом #1</div>
        <div class="project__area">Размер дома: 6 x 6</div>
        <div class="project__size">Общая площадь дома: 54 кв. м</div>
        <div class="project__price">Стоимость - 200 000 грн</div>
        <div class="project__imgs">
          <div class="project__imgs-item"><img src="./img/project-home_1.png" alt=""></div>
          <div class="project__imgs-item"><img src="./img/project-plan_1.png" alt=""></div>
        </div>
      </div>

      <div class="project__item">
        <div class="project__name">Дом #1</div>
        <div class="project__area">Размер дома: 6 x 6</div>
        <div class="project__size">Общая площадь дома: 54 кв. м</div>
        <div class="project__price">Стоимость - 200 000 грн</div>
        <div class="project__imgs">
          <div class="project__imgs-item"><img src="./img/project-home_1.png" alt="home"></div>
          <div class="project__imgs-item"><img src="./img/project-plan_1.png" alt="plan"></div>
        </div>
      </div> -->
    </div>
  </div>
  <!-- container -->

  <div class="download">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/download.png" alt="download">
    <a href="<?php the_field('download_link'); ?>" download><?php the_field('download_title'); ?></a>
  </div>

  <div class="gallery" id="gallery">
    <div class="gallery__title"><?php the_field('gallery_title'); ?></div>
    <div class="gallery__text"><?php the_field('gallery_text'); ?></div>

    <div class="gallery__inner" id="gallery_inner">
      <div class="popup-gallery">
        <?php the_field('popup-gallery'); ?>
      </div>
    </div>
    <div class="container">
      <div class="section__img">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/main-img.png" alt="timber">
      </div>
    </div>
  </div>
  </div>
</section>

<?php get_footer(); ?>