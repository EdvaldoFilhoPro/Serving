<?php get_header(); ?>


<main id="main">

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="row">
        <div class="col-xl-4 col-lg-5" data-aos="fade-up">
          <div class="content">
          <?php
            if (is_active_sidebar('banner-card-main')) {
              dynamic_sidebar('banner-card-main');
            }
            ?>
          </div>
        </div>
        <div class="col-xl-8 col-lg-7 d-flex">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <?php
                  if (is_active_sidebar('banner01')) {
                    dynamic_sidebar('banner01');
                  }
                  ?> 
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <?php
                  if (is_active_sidebar('banner02')) {
                    dynamic_sidebar('banner02');
                  }
                  ?>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <?php
                  if (is_active_sidebar('banner03')) {
                    dynamic_sidebar('banner03');
                  }
                  ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <?php
          if (is_active_sidebar('about')) {
            dynamic_sidebar('about');
          }
          ?>
          <?php
          if (is_active_sidebar('details-about')) {
            dynamic_sidebar('details-about');
          }
          ?>


          <div class="icon-box" data-aos="fade-up">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <?php
            if (is_active_sidebar('sub-topic-1')) {
              dynamic_sidebar('sub-topic-1');
            }
            ?>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <?php
            if (is_active_sidebar('sub-topic-2')) {
              dynamic_sidebar('sub-topic-2');
            }
            ?>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <?php
            if (is_active_sidebar('sub-topic-3')) {
              dynamic_sidebar('sub-topic-3');
            }
            ?>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="owl-carousel clients-carousel">
        <?php
        $args = array(
          'post_per_page' => 8,
          'category__in' => array(2)
        );
        $work = new WP_Query($args);

        if ($work->have_posts()) :
          while ($work->have_posts()) :
            $work->the_post();

        ?>
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
        <?php

          endwhile;
        else :
          echo 'There are no posts to be displayed at the moment';
        endif;

        ?>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <?php
        if (is_active_sidebar('service-section')) {
          dynamic_sidebar('service-section');
        }
        ?>

        <!-- <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="icon-box">
            <div class="icon"><i class="icofont-computer"></i></div>

            <h4 class="title"><a href="">
                <?php
                if (is_active_sidebar('service-tilte-01')) {
                  dynamic_sidebar('service-tilte-01');
                }
                ?>
              </a></h4>

            <p class="description">
              <?php
              if (is_active_sidebar('service-description-01')) {
                dynamic_sidebar('service-description-01');
              }
              ?>
            </p>

          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">
                <?php
                if (is_active_sidebar('service-tilte-02')) {
                  dynamic_sidebar('service-tilte-02');
                }
                ?>
              </a></h4>
            <p class="description">
              <?php
              if (is_active_sidebar('service-description-02')) {
                dynamic_sidebar('service-description-02');
              }
              ?>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">
                <?php
                if (is_active_sidebar('service-tilte-03')) {
                  dynamic_sidebar('service-tilte-03');
                }
                ?>
              </a></h4>
            <p class="description">
              <?php
              if (is_active_sidebar('service-description-03')) {
                dynamic_sidebar('service-description-03');
              }
              ?>
            </p>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>
      </div> -->

      </div>
  </section><!-- End Services Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">
    <div class="container">

      <div class="row">
        <?php
        $args = array(
          'post_per_page' => 4,
          'category__in' => array(1)
        );
        $values = new WP_Query($args);

        if ($values->have_posts()) :
          while ($values->have_posts()) :
            $values->the_post();

        ?>

            <div class="col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up">
              <div class="card" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
                <div class="card-body">
                  <h5 class="card-title"><a href=""><?php the_title(); ?></a></h5>
                  <p class="card-text"><?php foreach ((get_the_category()) as $category) {
                                          echo $category->cat_name;
                                        } ?></p>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>

        <?php

          endwhile;
          wp_reset_postdata();
        else :
          echo 'There are no posts to be displayed at the moment';
        endif;

        ?>

      </div>

    </div>
  </section><!-- End Values Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Portfolio Section ======= -->
  <!-- <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Portfolio</h2>
        <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <!-- <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Team</h2>
        <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="member">
            <div class="member-img">
              <img src="/assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Team Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- <section id="pricing" class="pricing">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Pricing</h2>
        <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6" data-aos="fade-up">
          <div class="box">
            <h3>Free</h3>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
          <div class="box featured">
            <h3>Business</h3>
            <h4><sup>$</sup>19<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <h3>Developer</h3>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <span class="advanced">Advanced</span>
            <h3>Ultimate</h3>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Pricing Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <?php
        if (is_active_sidebar('faq-int')) {
          dynamic_sidebar('faq-int');
        }
        ?>
        <!-- <h2 data-aos="fade-up">F.A.Q</h2>
        <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">
              <?php
              if (is_active_sidebar('question-01')) {
                dynamic_sidebar('question-01');
              }
              ?>
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
              <p>
                <?php
                if (is_active_sidebar('response-01')) {
                  dynamic_sidebar('response-01');
                }
                ?>
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">
              <?php
              if (is_active_sidebar('question-02')) {
                dynamic_sidebar('question-02');
              }
              ?>
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
              <p>
                <?php
                if (is_active_sidebar('response-02')) {
                  dynamic_sidebar('response-02');
                }
                ?>
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">
              <?php
              if (is_active_sidebar('question-03')) {
                dynamic_sidebar('question-03');
              }
              ?>

              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
              <p>
                <?php
                if (is_active_sidebar('response-03')) {
                  dynamic_sidebar('response-03');
                }
                ?>
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">
              <?php
              if (is_active_sidebar('question-04')) {
                dynamic_sidebar('question-04');
              }
              ?>
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
              <p>
                <?php
                if (is_active_sidebar('response-04')) {
                  dynamic_sidebar('response-04');
                }
                ?>
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">
              <?php
              if (is_active_sidebar('question-05')) {
                dynamic_sidebar('question-05');
              }
              ?>
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
              <p>
                <?php
                if (is_active_sidebar('response-05')) {
                  dynamic_sidebar('response-05');
                }
                ?>
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section>
  <!-- End F.A.Q Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <?php
        if (is_active_sidebar('section-contact')) {
          dynamic_sidebar('section-contact');
        }
        ?>
        <!-- <h2 data-aos="fade-up">Contact</h2>
        <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row justify-content-center">

        <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <?php
            if (is_active_sidebar('address-contact')) {
              dynamic_sidebar('address-contact');
            }
            ?>
            <!-- <h3>Our Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p> -->
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <?php
            if (is_active_sidebar('email-contact')) {
              dynamic_sidebar('email-contact');
            }
            ?>
            <!-- <h3>Email Us</h3>
            <p>info@example.com<br>contact@example.com</p> -->
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <?php
            if (is_active_sidebar('phone-contact')) {
              dynamic_sidebar('phone-contact');
            }
            ?>
            <!-- <h3>Call Us</h3>
            <p>+1 5589 55488 55<br>+1 6678 254445 41</p> -->
          </div>
        </div>
      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        <div class="col-xl-9 col-lg-12 mt-4">
        <?php
            if (is_active_sidebar('contact')) {
              dynamic_sidebar('contact');
            }
            ?>
          <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form> -->
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php get_footer(); ?>