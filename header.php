<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>
        <?php echo get_the_title() ?>
    </title>
    <link rel="icon" href="<?php echo get_template_directory_uri() . "/assets/images/bgwhirl.svg"; ?>"
        type="image/x-icon">
</head>
<?php
if (is_front_page()) {
    $header_id = 'header';
} else {
    $header_id = 'header-col';
}
?>

<header id="<?php echo esc_attr($header_id); ?>" class="max_width">
    <!-- <div class="modalscheduler"></div> -->
    <?php
    if (is_front_page()) {
        ?>
        <img id="bgwhirl" src="<?php echo get_template_directory_uri() . "/assets/images/bgwhirl.svg" ?>" alt="logo">
        <?php
    }
    ?>

    <div class="hdr-wrap">
        <div class="hdr-Cntnr nav-padding">
            <a href="<?php echo get_home_url() ?>"> <img id="mainlogo"
                    src="<?php echo get_template_directory_uri() . "/assets/images/logo.svg" ?>" alt="logo"></a>


            <nav id="nav-cnt">

                <ul class="nav-wrap">
                    <li><a href="<?php echo get_home_url() . '/about'; ?>">About Us</a></li>
                    <li><a href="<?php echo get_home_url() . '/products' ?>">Product</a></li>
                    <li><a href="<?php echo get_home_url() . '/contact' ?>">Contact</a></li>
                </ul>
            </nav>

            <a class="open-close-icon">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <?php
        if (is_front_page()) {
            ?>
            <div id="btm-hdr" class="btm-padding">
                <section data-aos="fade-right" class="left-content">
                    <h1>
                        Empowering Clean Energy Worldwide with Innovative Solutions.
                    </h1>
                    <p>Advancing Clean Energy: Our Vision, Your Power, A Sustainable Future.</p>
                    <a href="<?php echo get_home_url() . "/contact" ?>" id="btn_scheduler">Send us a message</a>
                </section>

                <div data-aos="fade-left" class="right-content">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/retangle.svg" ?>" alt="rectangle">
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</header>

<body>