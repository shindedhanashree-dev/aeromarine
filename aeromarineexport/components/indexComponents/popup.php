<div id="openModal" class="popup-form contact-form">

    <div class="modal-content">

        <span class="close-button" onclick="closePopup(event)">&times;</span>

        <div class="container">
            <div class="popup-heading">
                <span class="popup-eyebrow">
                    <i class="fa-solid fa-globe"></i>
                    AEROMARINE EXPORTS LLP
                </span>

                <h4>Request a Product Enquiry</h4>

                <p>
                    Looking for quality agricultural products for your business?
                    Share your requirements and our team will contact you shortly.
                </p>
            </div>

            <div class="row">

                <!-- LEFT: COMPANY INFORMATION -->
                <div class="col-md-5 d-none d-md-flex popup-left">

                    <div class="doc-brand-icon">
                        <i class="fa-solid fa-earth-asia"></i>
                    </div>

                    <div class="doc-name">Aeromarine Exports LLP</div>

                    <div class="doc-sub">
                        Agricultural Products<br>
                        Global Import &amp; Export
                    </div>

                    <div class="signature">
                        <div class="doc-features">
                            <div>
                                <i class="fa-solid fa-seedling"></i>
                                <span>Quality Sourcing</span>
                            </div>

                            <div>
                                <i class="fa-solid fa-boxes-packing"></i>
                                <span>Bulk Supply</span>
                            </div>

                            <div>
                                <i class="fa-solid fa-ship"></i>
                                <span>Global Trade</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- RIGHT: ENQUIRY FORM -->
                <div class="col-md-7 col-12">

                    <form method="post" class="w3layouts-contact-fm" action="send-mail.php">

                        <div class="form-group mb-3">
                            <label for="form_name" class="visually-hidden">
                                Your Name
                            </label>

                            <input id="form_name" type="text" name="name" class="form-control"
                                placeholder="Your Full Name" autocomplete="name" required>
                        </div>

                        <div class="form-group country-code mb-3">
                            <label for="phone" class="visually-hidden">
                                Phone
                            </label>

                            <input type="tel" id="phone" placeholder="Phone / WhatsApp Number" name="phone"
                                class="form-control" autocomplete="tel" required data-error="Valid phone is required.">

                            <!-- <input type="hidden" id="popupCountryCode" name="country_code"> -->
                        </div>

                        <div class="form-group mb-3">
                            <label for="form_email" class="visually-hidden">
                                Business Email
                            </label>

                            <input id="form_email" type="email" name="email" class="form-control"
                                placeholder="Business Email Address" autocomplete="email">
                        </div>

                        <div class="form-group">
                            <label for="form_message" class="visually-hidden">
                                Product Requirements
                            </label>

                            <textarea id="form_message" rows="4" name="message" class="form-control"
                                placeholder="Product, quantity, packaging, destination country or other requirements..."></textarea>
                        </div>

                        <div class="form-group-2 mt-3 text-end">
                            <button type="submit" name="send" class="btn-style mt-4">
                                <i class="btn-curve"></i>
                                <span class="btn-title">
                                    Send Enquiry
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </button>
                        </div>

                        <div class="popup-note">
                            <i class="fa-solid fa-lock"></i>
                            Your business enquiry will be handled professionally.
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <!-- FULL RIGHT-SIDE CARGO SHIP IMAGE -->
        <div class="cargo-image-panel">
            <img src="img/popup-img.png" alt="Cargo ship transporting international export goods">

            <div class="cargo-image-overlay"></div>

            <div class="cargo-image-caption">
                <span class="cargo-tag">
                    <i class="fa-solid fa-earth-americas"></i>
                    GLOBAL TRADE
                </span>

                <h3>Connecting Quality Products with the World</h3>

                <p>
                    Reliable agricultural product sourcing for international markets.
                </p>
            </div>

            <div class="cargo-image-bottom">
                <i class="fa-solid fa-ship"></i>
                <span>International Import &amp; Export</span>
            </div>
        </div>

    </div>
</div>