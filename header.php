<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>Omnivers</title>
</head>
<header id="header" class="max_width">
    <img id="bgwhirl" src="<?php echo get_template_directory_uri() . "/assets/images/bgwhirl.svg" ?>" alt="logo">
    <div class="hdr-wrap">
        <div class="hdr-Cntnr nav-padding">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/logo.svg" ?>" alt="logo">
            <nav id="nav-cnt">
                <ul class="nav-wrap">
                    <li><a href="">What is Meta</a></li>
                    <li><a href="">How it Works</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">ForWho</a></li>
                </ul>
            </nav>
        </div>
        <div id="btm-hdr" class="btm-padding">
            <section data-aos="fade-right" class="left-content">
                <h1>
                    The most engaging way to train your employees
                </h1>
                <p>Lorem Ipsum is simply dummy text of the <br /> printing and typesetting industry.</p>
                <button>Schedule a meeting</button>
            </section>
            <div data-aos="fade-left" class="right-content">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/retangle.svg" ?>" alt="rectangle">
            </div>
        </div>
    </div>
</header>

<body>