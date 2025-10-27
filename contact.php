<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Heaven Key </title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/image/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" href="./assets/image/favicon.png">

    <?php include('./includes/head.php'); ?>

</head>

<body>

    <div class="page-wrap">

        <?php include('./includes/header.php'); ?>

        <main>

            <!-- sub banner -->
            <section>
                <div class="subbanner-inner" style="background-image: url('./assets/image/banner/sub-banner-4.png')">
                    <div class="container-fluid">
                        <div class="sub-banner-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#" class="sub-active">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="subbanner-para">
                            <p>We’d love to hear from you! Reach out with any questions or to start your project — simple, friendly, and helpful.</p>

                        </div>
                        <div class="sub-banner-overlay">
                        </div>
                    </div>
                </div>
            </section>

            <!-- form section -->
            <section>
                <div class="inner-form position-relative overflow-hidden " style=" background-image: none !important;">
                    <div class="container">
                        <!-- Header -->
                        <div class="form-header text-center wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            <h2>How to reach us</h2>
                            <p>World-class care for everyone. Our health system offers unmatched, expert health care.</p>
                        </div>

                        <div class="row contact-container">
                            <!-- Left Side -->
                            <div class="col-lg-5 col-md-6 col-sm-12 mt-3 order-2 order-md-1 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="contact-left d-flex flex-column justify-content-between">
                                    <div>
                                        <h3>Contact Information</h3>
                                        <p>Fill up the form and our Team will get back to you within 24 hours.</p>

                                        <div class="contact-info d-flex align-items-start">
                                            <div class="icon"><i class="bi bi-telephone-fill"></i></div>
                                            <div>
                                                <div class="text"><a href="tel:+917373337773">+91 73733 37773</a></div>
                                                <small>Help phone support</small>
                                            </div>
                                        </div>

                                        <div class="contact-info d-flex align-items-start">
                                            <div class="icon"><i class="bi bi-envelope-fill"></i></div>
                                            <div>
                                                <div class="text"><a href="mailto:support@heavenkey.com">support@heavenkey.com</a></div>
                                                <small>Help email support</small>
                                            </div>
                                        </div>

                                        <div class="contact-info d-flex align-items-start">
                                            <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                                            <div>
                                                <div class="text"><a href="">123 main street, Coimbatore, Tamil Nadu</a></div>
                                                <small>Our office address</small>
                                            </div>
                                        </div>
                                    </div>

                                   <div class="social-icons mt-4">
                                        <a href="https://www.facebook.com/profile.php?id=61582227082291" target="_blank"><i class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/_heaven_key_/" target="_blank"><i class="bi bi-instagram"></i></a>
                                        <a href="https://in.pinterest.com/heavenkeycbe/" target="_blank"><i class="bi bi-pinterest"></i></a>
                                        <a href="https://x.com/Heaven_Key_" target="_blank"><i class="bi bi-twitter-x"></i></a>
                                        <a href="https://wa.me/+917373337773" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side (Form) -->
                            <div class="col-lg-7 col-md-6 col-sm-12 mt-3 order-1 order-md-2 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="contact-right">
                                    <!-- Contact Form -->
                                    <form id="contact-ain" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                            <small class="text-danger error-message" id="name-error"></small>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                                <small class="text-danger error-message" id="email-error"></small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Phone</label>
                                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone">
                                                <small class="text-danger error-message" id="phone-error"></small>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter your Subject">
                                                <small class="text-danger error-message" id="subject-error"></small>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Message</label>
                                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Your message"></textarea>
                                            <small class="text-danger error-message" id="message-error"></small>
                                        </div>
                                        <button type="submit" class="btn btn-send wow animate__animated animate__pulse" data-wow-duration="1s" data-wow-delay="0.6s">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-overlay">
                        <img src="./assets/image/shapes/form-shape-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="form-overlay-1">
                        <img src="./assets/image/shapes/about-shape-1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </section>
            
            <section>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d165138.51411862942!2d76.967235!3d11.013968899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e1!3m2!1sen!2sin!4v1759470445655!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

        </main>

        <?php include('./includes/footer.php'); ?>

    </div>

    <?php include('./includes/script.php'); ?>
</body>

</html>
 