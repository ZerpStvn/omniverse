<?php get_header() ?>
<main class=" global-max_width  ">
    <div class="second-col-wrap main-padding ">
        <section data-aos="fade-right" class="col-details">
            <h1>Omniverse: Clean Energy for Sustainable Tomorrow.</h1>
            <p>Welcome to Omniverse, where innovation meets sustainability in revolutionizing clean energy for a greener
                world.</p>
            <p>Omniverse Energy Management: A SEC-registered leader in clean energy, committed to sustainable solutions
                with global patents and a mission for excellence.</p>
        </section>
        <div data-aos="fade-left" class="col-rectanlge">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/rectangle2.svg" ?>" alt="rectangle">
        </div>
    </div>
    <div class="main-padding third-col-wrap ">

        <section data-aos="fade-right" class="third-col-details">
            <div class="third-col-section">
                <h1>
                    Onivers Project Background
                </h1>
                <p>EER-SPG harnesses electromagnetic energy flux for clean, sustainable electricity, offering an
                    eco-friendly alternative to fossil fuel-based power generation</p>
            </div>
            <p>EER-SPG revolutionizes energy generation, using electromagnetic energy flux to combat environmental
                pollution and climate change, offering a green and sustainable power solution.</p>
        </section>
        <iframe class="third-col-holder" src="https://www.youtube.com/embed/1kUE0BZtTRc?si=dzLrzpEw60j2NgLQ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <div id="services" class="main-padding fouth-col-wrap">
        <section data-aos="fade-right" class="fouth-col-details">
            <h1>
                Lorem Ipsum is simply dummy text of the
            </h1>
            <p>The most engaging way to train your employees. Take the next step to your advantage The most engaging
                way
                to train your employees.</p>
        </section>
        <?php
        $contentview = array('post_type' => 'content', 'posts_per_page' => -1);

        $contentquery = new WP_Query($contentview);

        if ($contentquery->have_posts()):
            ?>
            <div class="serviceswrap">
                <ul class="service-container">
                    <?php while ($contentquery->have_posts()):
                        $contentquery->the_post(); ?>
                        <li>
                            <section data-aos="fade-right" class="services-content-container">
                                <h1>
                                    content
                                </h1>
                                <p>
                                    <?php echo the_title(); ?>

                                </p>
                                <div class="excerpt-container">
                                    <p>
                                        <?php
                                        $custom_excerpt = get_the_excerpt();

                                        $custom_excerpt = wp_trim_words($custom_excerpt, 70, '');

                                        if (strlen($custom_excerpt) < strlen(get_the_excerpt())) {
                                            $custom_excerpt .= '...';
                                        }

                                        echo $custom_excerpt;
                                        ?>
                                    </p>
                                </div>
                                <a href="<?php echo the_permalink(); ?>" class="read-more">Learn More</a>
                            </section>
                            <div data-aos="fade-left" class="list-container-holder">
                                <img class="list-service-holder" src=" <?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="thumbnail"></img>
                            </div>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        <?php endif; ?>

    </div>
    <div class="main-padding fifth-col-wrap">
        <div class="fifth-col-container"></div>
        <img id="bgwhirl" src="<?php echo get_template_directory_uri() . "/assets/images/bgwhirl.svg" ?>" alt="logo">
        <section data-aos="fade-right" class=" fifth-details-wrap">
            <h1>Lorem Ipsum</h1>
            <p>The most engaging way to train your employees. Take the next step to your advantage</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <button>Schedule a meeting</button>
        </section>
    </div>
    <div class="main-padding six-col-wrap">
        <p id="six-col-tittle">
            Choose and edit an Environment
        </p>
        <div class="six-col-container">
            <div class="six-left-corner">
                <ul data-aos="fade-right" data-aos-offset="500" id="six-list-corner">
                    <li>
                        <div class="inside-padding circularAvart">
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>"
                                alt="">
                        </div>
                        <section class="corner-padding corner-content">
                            <h1>Lorem Ipsum</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing dummy text of the .</p>
                        </section>
                    </li>
                    <li>
                        <div class="inside-padding circularAvart">
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>"
                                alt="">
                        </div>
                        <section class="corner-padding corner-content">
                            <h1>Lorem Ipsum</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing dummy text of the .</p>
                        </section>
                    </li>
                    <li>
                        <div class="inside-padding circularAvart">
                            <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>"
                                alt="">
                        </div>
                        <section class="corner-padding corner-content">
                            <h1>Lorem Ipsum</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing dummy text of the .</p>
                        </section>
                    </li>
                </ul>
            </div>
            <div data-aos="fade-left" class="six-right-corner">
                <div class="six-container-holder">

                </div>
                <section>
                    <h1>Lorem Ipsum</h1>
                    <p>The most engaging way to train your employees</p>
                    <ul>
                        <li>Lorem Ipsum is simply dummy</li>
                        <li>Lorem Ipsum is simply dummy</li>
                    </ul>
                    <Button>Schedule a Meeting</Button>
                </section>
            </div>
        </div>
    </div>
    <div class="main-padding seventh-col-wrap">
        <section class="seventh-section">
            <h1>Choose and edit an
                Environment</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy
                text of the printing and typesetting industry.</p>
        </section>
        <div class="seventh-list">
            <ul id="seventh-listveiw">
                <li>
                    <div class="secenth-center circularAvart">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>"
                            alt="">
                        <p>Lorem Ipsum</p>
                    </div>
                </li>
                <li>
                    <div class="secenth-center circularAvart">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>"
                            alt="">
                        <p>Lorem Ipsum</p>
                    </div>
                </li>
                </li>
                <li>
                    <div class="secenth-center circularAvart">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>"
                            alt="">
                        <p>Lorem Ipsum</p>
                    </div>
                </li>
                </li>
                <li>
                    <div class="secenth-center circularAvart">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>"
                            alt="">
                        <p>Lorem Ipsum</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="eight-col-wrap main-padding">
        <section class="eight-left-corner">
            <h1>Lorem Ipsum</h1>
            <p>The most engaging way to train your employees</p>
        </section>
        <div class="eight-right-corner">
            <ul id="eight-list-view">
                <li>
                    <img id="eight-circularAvatar"
                        src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <section class="eight-list-section ">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing dummy text of the</p>
                    </section>
                </li>
                <li>
                    <img id="eight-circularAvatar"
                        src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <section class="eight-list-section ">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing dummy text of the</p>
                    </section>
                </li>
                <li>
                    <img id="eight-circularAvatar"
                        src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <section class="eight-list-section ">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing dummy text of the</p>
                    </section>
                </li>
                <li>
                    <img id="eight-circularAvatar"
                        src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <section class="eight-list-section ">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing dummy text of the</p>
                    </section>
                </li>
                <li>
                    <img id="eight-circularAvatar"
                        src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <section class="eight-list-section ">
                        <h1>Lorem Ipsum</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing dummy text of the</p>
                    </section>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-padding-nnth nnth-col-wrap">
        <section>
            <h1>Lorem Ipsum</h1>
            <p>How does VR compare to e-learning and classroom training programs?</p>
            <p>Lorem Ipsum</p>
        </section>
        <ul id="nnth-listview">
            <li>
                <div class="nnth-center circularAvart">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing dummy text of the.</p>
                </div>
            </li>
            <li>
                <div class="nnth-center  circularAvart">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing dummy text of the.</p>
                </div>
            </li>
            <li>
                <div class="nnth-center  circularAvart">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing dummy text of the.</p>
                </div>
            </li>
            <li>
                <div class="nnth-center  circularAvart">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing dummy text of the.</p>
                </div>
            </li>
            <li>
                <div class="nnth-center  circularAvart">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/circularAvartar.svg" ?>" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing dummy text of the.</p>
                </div>
            </li>

        </ul>
    </div>
</main>
<?php get_footer() ?>