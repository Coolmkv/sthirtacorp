@extends('layouts.webSite')
@section('title', 'Contact Us')
@section('content')
<!-- banner section -->
<div class="about-banner">
    <div class="about-banner_image">
        <img src="assets/img/vox/vox-001.jpg" alt="img" />
    </div>
    <div class="about-banner_content">
        <div class="about-banner_text">
            <h3>Contect Us</h3>
            <p>Our Values" invites you on a captivating voyage through our company's story.</p>
        </div>
    </div>
</div>
<!-- banner section -->
<div id="about">
    <div class="default-content pt-4 pb-4">
        <div class="custom-container">   
            <!-- Contact Area Strat -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="site_title">
                        <h3>Get in tuch</h3>
                    </div>
                    <div class="contact-details">
                        <label>Corporate Office:</label>
                        <p class="mb-3">847, 8th Floor, JMD Megapolis Sector 48 Sohna Road Gurugram Haryana - 122018</p>
                        <label>Showroom:</label>
                        <p class="mb-3">D65, Udyog Vihar Phase 5, Gurugram, Haryana, 122016</p>
                        <label>Phone No:</label>
                        <p class="mb-3"><a href="tel:+918800442989" class="mb-2">+91 880 044 2989</a></p>
                        <label>E-mail:</label>
                        <p class="mb-3"><a href="mailto:sthirtacorp@gmail.com">sthirtacorp@gmail.com</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="mailto:sales1@sthirtacorp.in">sales1@sthirtacorp.in</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form-area mb-2">
                        <div class="contact-box_right_box">
                            <div class="contact-box_form_box">
                                <form method="POST" action="">
                                    <!-- about section top title -->
                                    <div class="about-section_toptitle geox-section_toptitle our-section_toptitle contact-section_toptitle">
                                        <h3 class="webfixf">Take the next step</h3>
                                    </div>
                                    <!-- Sthirta Corpsection title -->
                                    <div class="about-section_title geox-section_title our-section_title contact-section_title">
                                        <h2 class="webfixf-in">Contact Us</h2>
                                    </div>
                                    <div class="contact-box_contant">
                                        <div class="contact-box_contant_g">
                                            <div class="contact-box_group">
                                                <input type="text" name="fname" placeholder="Frist Name" />
                                            </div>
                                            <div class="contact-box_group">
                                                <input type="text" name="lname" placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <div class="contact-box_group">
                                            <input type="email" name="email" placeholder="Email Address" />
                                        </div>
                                        <div class="contact-box_group">
                                            <input type="text" name="cname" placeholder="Company Name" />
                                        </div>
                                        
                                        <div class="contact-box_group">
                                            <input type="tel" name="tel" placeholder="Phone Number" />
                                        </div>
                                        <div class="contact-box_group">
                                            <textarea type="text" name="textarea" placeholder="Tell us more about your project, needs, and timelines" rows="5" ></textarea>
                                        </div>
                                        <div class="contact-box_group">
                                            <input type="submit" name="submit" value="submit" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <script>
                            (function () {
                                'use strict';
                                window.addEventListener('load', function () {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function (form) {
                                        form.addEventListener('submit', function (event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </div>
            </div>
            <!-- Contact Area End -->
        </div>
    </div>
</div>
<div class="footer-map-section">
    <div class="map-item">
        <div class="map-item-detail">
            <label>Corporate Office:</label>
            <p class="mb-2">847, 8th Floor, JMD Megapolis Sector 48 Sohna Road Gurugram Haryana - 122018</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2943.3361185967788!2d77.08365112597231!3d28.50041118095797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19433dbeffe1%3A0x9c2ff4c01544afce!2sUdyog%20Vihar%20Phase%20V%2C%20Udyog%20Vihar%2C%20Sector%2019%2C%20Gurugram%2C%20Haryana%20122022!5e0!3m2!1sen!2sin!4v1707593623694!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
    </div>
    <div class="map-item">
        <div class="map-item-detail">
            <label>Showroom:</label>
            <p class="mb-2">D65, Udyog Vihar Phase 5, Gurugram, Haryana, 122016</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.2117560276133!2d77.28957947568269!3d28.653377575653337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb348efa70c3%3A0x276235369875fd54!2sSthirtaCorp%20Showroom!5e0!3m2!1sen!2sin!4v1707593766055!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection