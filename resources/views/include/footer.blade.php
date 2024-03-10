 <!-- footer section -->
 <footer>
    <div class="footer-container">
        <div class="footer-wrapper row">
            <div class="col-md-4 mb-3 order-sm-0">
                <div class="footer-wrapper_logo">
                    <a href="{{url('/')}}" aria-label="SthirtaCorp"><img src="assets/img/footer-logo.png" alt="logo" /></a>
                </div>
                <div class="footer-wrapper_box_title">
                    <h3>Subscribe for Periodic Updates</h3>
                    <p>Receive news, announcements and reports</p>
                </div>
                <div class="footer-wrapper_box_form mb-3">
                    <form action="">
                        <div class="subscription_box">
                            <input type="email" placeholder="Insert email" />
                            <div class="action_sub">
                                <input type="submit" name="" value="Update me" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="footer-followus">
                    <span>Follow Us</span>
                    <span><a href="#" aria-label="Read more about Sthirta Corp facebook"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" aria-label="Read more about Sthirta Corp Instagram"><i class="fa fa-instagram"></i></a></span>
                    <span><a href="#" aria-label="Read more about Sthirta Corp Linkedin"><i class="fa fa-linkedin"></i></a></span>
                    <span><a href="#" aria-label="Read more about Sthirta Corp Youtube"><i class="fa fa-youtube-play"></i></a></span>
                    <span><a href="#" aria-label="Read more about Sthirta Corp WhatsApp"><i class="fa fa-whatsapp"></i></a></span>
                </div>
                
            </div>
            <div class="col-md-2 col-6 mb-3 text-left">
                <div class="footer-wrapper_box">
                    <div class="footer-wrapper_box_title">
                        <h3>navigations</h3>
                    </div>
                    <ul class="footer-wrapper_box_list">
                        <li><a href="{{ route('contactUs') }}">Connect Us</a></li>
                        <li><a href="{{ route('tostem') }}">Tostem</a></li>
                        <li><a href="{{ route('greenlam') }}">Greenlam</a></li>
                        <li><a href="{{ route('sloan') }}">Sloan</a></li>
                        <li><a href="{{ route('vox') }}">Vox</a></li>
                        <li><a href="{{ route('galleryPages') }}">Gallery</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3 text-left">
                <div class="footer-wrapper_box">
                    <div class="footer-wrapper_box_title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="footer-wrapper_box_list">
                        <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                        <li><a href="{{ url('/') }}">Terms &amp; Conditions</a></li>
                        <li><a href="{{ url('/') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('/') }}">Cancellation & refund policy</a></li>
                        <li><a href="{{ url('/') }}">Shipping & delivery policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-3 order-sm-1 text-left">
                <div class="footer-wrapper_box">
                    <div class="footer-wrapper_box_title">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="footer-wrapper_box_add">
                        <label>Corporate Office:</label>
                        <p class="mb-2">847, 8th Floor, JMD Megapolis Sector 48 Sohna Road Gurugram Haryana - 122018</p>
                        <label>Showroom:</label>
                        <p class="mb-2">D65, Udyog Vihar Phase 5, Gurugram, Haryana, 122016</p>
                        <label>Phone No:</label>
                        <p><a href="tel:+918800442989" class="mb-2">+91 880 044 2989</a></p>
                        <label>E-mail:</label>
                        <p><a href="mailto:sthirtacorp@gmail.com">sthirtacorp@gmail.com</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="mailto:sales1@sthirtacorp.in">sales1@sthirtacorp.in</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section -->
<!-- footer strip section -->
<section class="fooeter-strip">
    <div class="fooeter-strip_container">
        <p class="text-center">&copy; <script>document.write( new Date().getFullYear() );</script> All Rights Reserved by Sthirta Corp Pvt. Ltd.  & Developed by <a href="https://www.vyaparkranti.com">Vyapar kranti</a></p>
    </div>
</section>
<!-- footer strip section -->
<input id="enquiry" hidden type="checkbox"/>
<section class="enquiry-form">
    <label for="enquiry" class="enquiry-button">Enquiry now</label>
    <div class="enquiry-container">
        <div class="contact-box_right_box">
            <div class="contact-box_form_box">
                <form method="POST" action="">
                    <!-- about section top title -->
                    <div class="about-section_toptitle geox-section_toptitle our-section_toptitle contact-section_toptitle">
                        <h3 class="webfixf">Take the next step</h3>
                    </div>
                    <!-- Sthirta Corpsection title -->
                    <div class="about-section_title geox-section_title our-section_title contact-section_title">
                        <h2 class="webfixf-in">Enquiry now</h2>
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
    </div>
</section>
</div>