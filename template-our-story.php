<?php

/*
Template Name:  Our Story
*/
get_header(); ?>
<!-- start the loop -->
<?php
if (have_posts()):
  while (have_posts()):
    the_post();

    ?>

    <main class="page-story">
      <section class="about-content">
        <div class="about-page-left">
          <?php
          $imgPageAbout = get_field('page_left_image');
          ?>
          <img src="<?php echo esc_url($imgPageAbout['url']); ?>" alt="<?php echo esc_attr($imgPageAbout['alt']); ?>">
        </div>
        <div class="about-page-right">
          <div class="container">
            <div class="right-text">
              <div class="story-hero-title">
                <h2>
                  <?php the_field('page_title'); ?>
                </h2>
                <p> <?php the_field('our_story_description'); ?></p>
              </div>

              <div class="mission story-text">
                <h4><?php the_field('story_section_title'); ?></h4>
                <h3><?php the_field('story_section_subtitle'); ?></h3>

                <div class="mission-item">
                  <h5 class="mission-title">Create opportunities <span class="toggle-btn">+</span></h5>
                  <p class="mission-detail">for individuals of all backgrounds to come together and celebrate their shared
                    experiences.</p>
                </div>
                <!-- end of mission item 1 -->

                <div class="mission-item">
                  <h5 class="mission-title">Create opportunities <span class="toggle-btn">+</span></h5>
                  <p class="mission-detail">for individuals of all backgrounds to come together and celebrate their shared
                    experiences.</p>
                </div>
                <!-- end of mission item 2 -->

                <div class="mission-item">
                  <h5 class="mission-title">Create opportunities <span class="toggle-btn">+</span></h5>
                  <p class="mission-detail">for individuals of all backgrounds to come together and celebrate their shared
                    experiences.</p>
                </div>
                <!-- end of mission item 3 -->

              </div>
              <!-- end of mission -->

              <div class="value story-text">
                <h4>our value</h4>
                <div class="value-grid">
                  <div class="value-item">
                    <h3 class="value-number">01</h3>
                    <h5 class="value-title">Integrity</h5>
                    <p class="value-content">We uphold the highest standards of integrity in all our actions.</p>
                  </div>
                  <div class="value-item">
                    <h3 class="value-number">02</h3>
                    <h5 class="value-title">Innovation</h5>
                    <p class="value-content">We seek innovative solutions and ideas to serve our customers better.</p>
                  </div>
                  <div class="value-item">
                    <h3 class="value-number">03
                      <h5 class="value-title">Collaboration</h5>
                      <p class="value-content">We work together to meet the needs of our customers and help the company
                        grow.
                      </p>
                  </div>
                  <div class="value-item">
                    <h3 class="value-number">04</h3>
                    <h5 class="value-title">Excellence</h5>
                    <p class="value-content">We continuously strive for excellence in everything we do.</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- end of right-text -->


          </div>
          <!-- end of container -->
        </div>
        <!-- end of page-right -->
      </section>

      <section class="story-partner">
        <div class="container">
          <h4>our partner</h4>
          <div class="partner-grid">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">
            <img src="http://localhost:8888/projectaaa/wp-content/uploads/2024/10/partner_logo.png" alt="Logo">

          </div>
        </div>
      </section>

      <section class="story-cta"
        style="background-image: url(<?php the_field('story_cta_bg'); ?>); background-color: rgba(15, 15, 15, 0.6);">
        <div class="container">
          <div class="text-box">
            <h3><?php the_field('story_cta_title'); ?></h3>
            <p><?php the_field('story_cta_description'); ?></p>
            <?php
            $btnStoryCta = get_field('story_cta_btn');

            $btnStoryCtaLink = $btnStoryCta['url'];
            $btnStoryCtaText = $btnStoryCta['title'];
            $btnStoryCtaTarget = $btnStoryCta['target'];

            ?>

            <a class="btn2" target="<?php $btnStoryCtaTarget; ?>" href="<?php echo $btnStoryCtaLink; ?>">
              <?php echo $btnStoryCtaText; ?>
            </a>
          </div>

        </div>
      </section>>


    </main>

    <?php
  endwhile;
endif;
?>

<!-- close the loop -->
<?php get_footer(); ?>