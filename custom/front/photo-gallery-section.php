<?php
function photogallerysection($gallery_title = null)
{
?>
  <!-- SECTION 4: PHOTO GALLERY -->
  <section class="photo-gallery global-width">
    <div class="photo-gallery-texts">
      <div class="photo-gallery-title slideleft">
        <!-- <img src="<?php //echo RESNPO_IMAGE . '/photo-gallery.png' 
                        ?>" alt="photogal"> -->
        <h2 class="outline-blue">PHOTO<br> GALLERY</h2>
      </div>
      <div class="photo-gallery-content">
        <p class="p-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>
    </div>
    <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" style="display:none;">
      <defs>
        <filter id="stroke-text-svg-filter-blue">
          <feMorphology operator="dilate" radius="1"></feMorphology>
          <feComposite operator="xor" in="SourceGraphic" />
        </filter>
      </defs>
    </svg>

    <div class="photo-gallery-images swiper-pg mySwiperpg">
      <div class="gallery-images swiper-wrapper">
        <?php
        $photogallerycontentquery = new WP_Query(
          array(
            'post_type' => 'photo_gallery',
            'posts_per_page' => 1,
            'title' => $gallery_title
          )
        );

        if ($photogallerycontentquery->have_posts()) :
          try {
            while ($photogallerycontentquery->have_posts()) : $photogallerycontentquery->the_post();
              $images = get_post_meta(get_the_ID(), '_photo_gallery_images', true);

              if (!empty($images)) {
                foreach ($images as $image) {
                  $src = esc_url($image);
                  echo '<div class="swiper-slide gallery-images">';
                  echo '<img class="gallery-image" src="' . $src . '" alt="">';
                  echo '</div>';
                }
              } else {
                echo '<div class="error-message">No images found in the gallery: ' . esc_html(get_the_title()) . '</div>';
              }
            endwhile;
            wp_reset_postdata();
          } catch (Exception $e) {
            echo '<div class="error-message">An error occurred: ' . esc_html($e->getMessage()) . '</div>';
          }
        else :
          echo '<div class="error-message">No gallery found with the title: ' . esc_html($gallery_title) . '</div>';
        endif;
        ?>
      </div>
    </div>
  </section>
<?php
}
