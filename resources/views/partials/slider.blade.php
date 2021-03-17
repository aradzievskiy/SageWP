<body>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php while (have_rows('page-slider')) : the_row(); ?>
      <?php $counter = get_row_index(); ?>
      <?php $photo = get_sub_field('photo'); ?>
      <div class="swiper-slide">
        <img class="swiper-slide" src="<?php echo $photo['sizes']['large']; ?>" alt="">
        <ol class="text">
          <ul class="text1">
            <?php the_sub_field('title'); ?>
          </ul>
          <ul class="text2">
            <?php the_sub_field('caption'); ?>
          </ul>
          <ul class="text3">
            <?php the_sub_field('text'); ?>
          </ul>
        </ol>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="swiper-pagination "></div>
  </div>
</body>