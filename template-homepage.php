<?php

/*
Template Name: Homepage
*/

get_header(); ?>
<?php
if (have_posts()):
  while (have_posts()):
    the_post();

    ?>
    <section class="hero"
      style="background-image: url(<?php the_field('section_hero_bg'); ?>); background-color: rgba(15, 15, 15, 0.6);">
      <div class="container">
        <div class="textbox">
          <h1>
            <?php echo wp_kses_post(get_field('section_hero_title')) ?>

          </h1>
          <p>
            <?php the_field('section_hero_description'); ?>
          </p>
          <?php
          $btnHero = get_field('section_hero_btn');

          $btnHeroLink = $btnHero['url'];
          $btnHeroText = $btnHero['title'];
          $btnHeroTarget = $btnHero['target'];

          ?>

          <a class="btn" target="<?php $btnHeroTarget; ?>" href="<?php echo $btnHeroLink; ?>">
            <?php echo $btnHeroText; ?>
          </a>
        </div>
      </div>

    </section>

    <section class="about">
      <div class="container">
        <div class="about-flex">
          <div class="about-left">
            <?php
            $imgAbout = get_field('section_about_image');
            ?>
            <img src="<?php echo esc_url($imgAbout['url']); ?>" alt="<?php echo esc_attr($imgAbout['alt']); ?>">
          </div>
          <div class="about-right">
            <h4>
              <?php the_field('section_about_title'); ?>
            </h4>
            <h3>
              <?php the_field('section_about_subtitle'); ?>
            </h3>
            <p>
              <?php the_field('section_about_paragraph'); ?>
            </p>
            <?php
            $btnAbout = get_field('section_about_btn');

            $btnAboutLink = $btnAbout['url'];
            $btnAboutText = $btnAbout['title'];
            $btnAboutTarget = $btnAbout['target'];

            ?>
            <a class="btn2" target="<?php $btnAboutTarget; ?>" href="<?php echo $btnAboutLink; ?>">
              <?php echo $btnAboutText; ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="activities">
      <div class="container">
        <div class="text-box">
          <h4><?php the_field('section_activities_title'); ?></h4>
          <h3>
            <?php the_field('section_activities_subtitle'); ?>
          </h3>
        </div>

        <div class="activities-grid">
          <?php

          //custom query
          $homepageActivities = new WP_Query(
            array(
              'posts_per_page' => 4,
              'post_type' => 'activity',
            )
          );

          //the loop(opening)
          while ($homepageActivities->have_posts()) {
            $homepageActivities->the_post();
            //$homepageBlog relate to the post
      

            ?>
            <div class="card" style="background-image: url(<?php the_field('activity_card_bg'); ?>);">
              <div class="overlay"><a href="<?php the_permalink(); ?>" class="btn2">Learn Detail</a></div>

            </div>
            <?php

          }
          wp_reset_postdata();

          ?> <!--CLOSE THE LOOP-->
        </div>
        <div class="btn-flex" style="display: flex;justify-content: center;">
          <div class="btn-activity">
            <?php
            $btnActivity = get_field('section_activities_btn');

            $btnActivityLink = $btnActivity['url'];
            $btnActivityText = $btnActivity['title'];
            $btnActivityTarget = $btnActivity['target'];

            ?>
            <a class="btn" target="<?php $btnActivityTarget; ?>" href="<?php echo $btnActivityLink; ?>">
              <?php echo $btnActivityText; ?>
            </a>
          </div>

        </div>


        <div class="partners">
          <div class="logoflex">

          </div>
        </div>
      </div>

    </section>

    <section class="testimonials">
      <div class="container">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?>
      </div>

    </section>

    <section class="cta">
      <div class="container">
        <div class="text-box">
          <h4>
            <?php the_field('section_cta_title'); ?>
          </h4>
          <h3><?php the_field('section_cta_subtitle'); ?></h3>
          <p><?php the_field('section_cta_paragraph'); ?></p>
          <?php
          $btnCta = get_field('section_cta_btn');

          $btnCtaLink = $btnCta['url'];
          $btnCtaText = $btnCta['title'];
          $btnCtaTarget = $btnCta['target'];

          ?>
          <a class="btn2" target="<?php $btnCtatTarget; ?>" href="<?php echo $btnCtaLink; ?>">
            <?php echo $btnCtaText; ?>
          </a>
        </div>
      </div>



    </section>

    <section class="contact">
      <div class="container">
        <div class="contact-flex">
          <div class="contact-info">
            <h4>
              <?php the_field('section_contact_title'); ?>
            </h4>

            <h3><?php the_field('section_contact_subtitle'); ?></h3>
            <p><?php the_field('section_contact_email'); ?>
            </p>
          </div>
          <div class="contact-form">
            <!-- contact form here -->

            <?php echo do_shortcode('[contact-form-7 id="0c2da05" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div>
    </section>


    <?php
  endwhile;
endif;
?>

<!-- close the loop -->


<?php get_footer(); ?>