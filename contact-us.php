<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Contact-Us | SonaMistry</title>
    <!-- header head -->
    <?php
	include_once 'includes/header-includes.php';
?>
    <!--close  header head -->

</head>

<body>
    <div class="main-wrapper">

        <main class="main_wrap">
            <!-- Header -->
            <?php
				include_once 'includes/header.php';
			?>
            <!--close Header -->

            <!--Content-->
            <section class="sm-hero-banner sm-first-sec">
                <div class="inner-wrap">
                    <div class="sm-img-wrapper">
                        <div class="sm-img-wrap">
                            <img class="for-desktop-img" src="images/mehndi43.webp" alt="mehendi banner">
                        </div>
                    </div>
                    <div class="sm-doodle container sm-banner-container">
                        <div class="sm-banner-container-wrap">
                            <div class="sec-icon">
                                <img class="sec-icon-img" src="images/flowerCircle.svg" alt="flowerCircle">
                            </div>
                            <div class="sec-head">
                                <p class="sm-subline">Let’s talk...</p>
                                <h1 class="sm-title">It All Begins with a Hello</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sm-contactUs-sec">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="sm-contact-wrappper">
                            <div class="sm-sec-head sm-center">
                                <h2 class="sm-title">
                                    Book Your Mehendi Session <br />
                                    with Us Today!
                                </h2>
                            </div>
                            <div class="sm-contact-wrap">
                                <div class="sm-form-col">
                                    <div class="sm-form-wrapper">
                                        <div class="form-wrapper">
                                            <form class="cust-form" action="">
                                                <div class="input-field-wrapper">
                                                    <div class="input-field col2-field-group">
                                                        <div class="input-field">
                                                            <input type="text" id="fullName" name="fullname" required
                                                                placeholder="Full Name" />
                                                        </div>
                                                        <div class="input-field">
                                                            <input type="email" id="email" name="email" required
                                                                placeholder="Your Email ID" />
                                                        </div>
                                                    </div>
                                                    <div class="field-number input-field">
                                                        <input type="number" id="phoneNumber" name="number" required
                                                            placeholder="Your Mobile No" maxlength="16" />
                                                    </div>
                                                    <div class="input-field">
                                                        <textarea id="message" name="message" required
                                                            placeholder="Describe your Mehendi Requirements"
                                                            rows="5"></textarea>
                                                    </div>
                                                </div>

                                                <div class="btn-wrap">
                                                    <button type="submit" class="sm-btn">
                                                        Book Now
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm-info-col">
                                    <div class="sm-inner-col">
                                        <div class="sm-sec-head">
                                            <h2 class="sm-title">
                                                Contact Us <br />
                                                <p class="sm-sub-xsTitle">for a FREE Consultation</p>
                                            </h2>
                                        </div>

                                        <div class="sm-bottom-wrap">
                                            <div class="sm-contact-info">
                                                <ul>
                                                    <li class="sm-address">
                                                        <p>
                                                            <strong>Address: </strong> area, city, landmark,
                                                            pincode
                                                        </p>
                                                    </li>
                                                    <li class="sm-email">
                                                        <a href="mailto:sample@example.com"><strong>Email: </strong>
                                                            sample@example.com</a>
                                                    </li>
                                                    <li class="sm-phone">
                                                        <a href="tel:1234567890"><strong>phone: </strong> 1234567890
                                                        </a>
                                                    </li>
                                                    <li class="sm-timing">
                                                        <p>
                                                            <strong>Our Timings: </strong>Mon-Sun: 10:00AM -
                                                            07:00PM
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="sm-title">Sona Mistry:</h3>
                                            <p>
                                                Have questions about our Mehendi services, bridal
                                                bookings, or training programs? We are here to assist
                                                you! Whether you need a custom bridal Mehendi
                                                consultation, want to book an event, or inquire about
                                                our global services, we’ve got you covered.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Content-->

        </main>
        <!--footer -->
        <?php
					include_once 'includes/footer.php';
			 ?>
        <!--close footer -->
    </div>

    <!--footer scrpit -->
    <?php
	include_once 'includes/footer-includes.php';
?>
    <!--close footer scrpit -->

</body>

</html>