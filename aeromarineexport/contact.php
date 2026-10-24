<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include("components/indexComponents/head.php"); ?>

</head>

<body>

    <?php include("components/indexComponents/navbar.php"); ?>

    <!-- breadcrumb -->
    <section class="breadcrumb-banner"
        style="background: linear-gradient(rgba(0, 0, 0, 0.48), rgba(0, 0, 0, 0.48)), url('img/breadcrumb-bg.jpg') center center / cover no-repeat;">
        <div class="breadcrumb-content">
            <h1>Contact Us</h1>

            <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="separator">/</li>
                    <li class="active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>


    <section class="contact-section">
        <div class="container-fluid contact-container">
            <div class="row g-4 align-items-stretch">

                <!-- LEFT: BUSINESS INQUIRY FORM -->
                <div class="col-lg-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="contact-card">

                        <h1 class="contact-heading">Exim Business Inquiry</h1>

                        <p class="contact-subtitle">
                            Submit your inquiry through the form below, and our team will get back to you shortly.
                        </p>

                        <form action="" method="POST">

                            <!-- Replace with your actual Web3Forms access key -->
                            <input type="hidden" name="access_key" value="YOUR_WEB3FORMS_ACCESS_KEY">

                            <input type="hidden" name="subject" value="New Exim Business Inquiry">

                            <input type="hidden" name="from_name" value="Mighty Merchant Exim Website">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="contact-field">
                                        <label class="contact-label" for="fullName">
                                            Full Name *
                                        </label>
                                        <input class="contact-control" type="text" id="fullName" name="name"
                                            placeholder="e.g. John Smith" autocomplete="name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="contact-field">
                                        <label class="contact-label" for="company">
                                            Company Name *
                                        </label>
                                        <input class="contact-control" type="text" id="company" name="company"
                                            placeholder="e.g. Global Trade Corp" autocomplete="organization" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="contact-field">
                                        <label class="contact-label" for="destination">
                                            Destination Port/Country
                                        </label>
                                        <input class="contact-control" type="text" id="destination" name="destination"
                                            placeholder="e.g. Mumbai, India">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="contact-field">
                                        <label class="contact-label" for="phone">
                                            Phone / WhatsApp *
                                        </label>
                                        <input class="contact-control" type="tel" id="phone" name="phone"
                                            placeholder="+91 000-000-0000" autocomplete="tel" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="contact-field">
                                        <label class="contact-label" for="email">
                                            Business Email *
                                        </label>
                                        <input class="contact-control" type="email" id="email" name="email"
                                            placeholder="john@company.com" autocomplete="email" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="contact-field mb-4">
                                        <label class="contact-label" for="requirements">
                                            Detailed Specs / Requirements
                                        </label>
                                        <textarea class="contact-control" id="requirements" name="requirements"
                                            placeholder="Outline your exact product specifications, grade standards, target pricing..."></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="contact-submit">
                                        <i class="fa-solid fa-paper-plane"></i>
                                        Submit Business Inquiry
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

                <!-- RIGHT: CONTACT INFORMATION -->
                <div class="col-lg-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="contact-card contact-info-card">

                        <div class="contact-eyebrow">
                            GLOBAL HEAD OFFICE
                        </div>

                        <h2 class="contact-info-heading">
                            Aeromarine Import Exports
                        </h2>

                        <p class="contact-info-subtitle">
                            Premier International Trading Enterprise
                        </p>

                        <div class="contact-divider"></div>

                        <!-- Email -->
                        <div class="contact-detail">
                            <div class="contact-detail-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="contact-detail-content">
                                <strong>Email Trade Desk</strong>
                                <a href="mailto:eromarine20@gmail.com">
                                    eromarine20@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-detail">
                            <div class="contact-detail-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-detail-content">
                                <strong>Direct Phone</strong>
                                <a href="tel:+919152331931">+91 9152331931</a>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="contact-detail">
                            <div class="contact-detail-icon">
                                <i class="fa-regular fa-message"></i>
                            </div>
                            <div class="contact-detail-content">
                                <strong>WhatsApp Support</strong>
                                <a class="contact-accent" href="https://wa.me/919152331931" target="_blank"
                                    rel="noopener noreferrer">
                                    +91 9152331931 (Instant Support)
                                </a>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="contact-detail">
                            <div class="contact-detail-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-detail-content">
                                <strong>Corporate Headquarter</strong>
                                Navi Mumbai, Maharastra,
                                <strong>India</strong>
                            </div>
                        </div>

                        <div class="contact-divider mt-3"></div>

                        <h3 class="contact-social-title">Connect With Us</h3>

                        <div class="contact-social-links">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"
                                aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>

                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"
                                aria-label="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>

                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer"
                                aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>


    <?php include("components/indexComponents/footer.php"); ?>

    <?php include("components/indexComponents/script.php"); ?>

</body>

</html>