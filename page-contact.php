<?php get_header() ?>
<main>
    <div class="contact-wrap main-padding">
        <div class="menurwap">
            <nav id="nav">
                <ul>
                    <li><a href="<?php echo get_home_url() . '/about'; ?>">About Us</a></li>
                    <li><a href="<?php echo get_home_url() . '/products' ?>">Product</a></li>
                    <li><a href="<?php echo get_home_url() . '/contact' ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="left-contact-info">
            <ul>
                <li>
                    <span class="fa fa-map-marker"></span>
                    <section>
                        <h1>Address:</h1>
                        <p>Iliolo City</p>
                    </section>
                </li>
                <li>
                    <span class="fa fa-phone"></span>
                    <section>
                        <h1>Phone number:</h1>
                        <p>(231) 233 - 344 - 4343</p>
                    </section>
                </li>
                <li>
                    <span class="fa fa-mobile"></span>
                    <section>


                        <h1>Mobile number:</h1>
                        <p>+6309754218631</p>
                    </section>
                </li>
                <li>
                    <span class="fa fa-paper-plane"></span>
                    <section>
                        <h1>Email Address:</h1>
                        <p>ceo.omniverse.com.ph</p>
                    </section>
                </li>
            </ul>
        </div>
        <div class="contact-form-wrap">
            <form id="contact-form">
                <div class="contact-row">
                    <input type="text" placeholder="Your name">
                    <input type="email" placeholder="Your email">
                </div>
                <input type="text" placeholder="Subject">
                <textarea placeholder="Message" name="message" id="text-message" cols="30" rows="10"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

    </div>
</main>
<?php get_footer() ?>