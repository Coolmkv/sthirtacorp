@extends('layouts.webSite')
@section('title', 'Sthirta Corp')
@section('content')
{{-- @include('include.navigation') --}}
@include('include.slider')
<!-- home about section -->
<section class="about-section">
    <div class="about-container">
        <div class="about-container_wrapper">
            <!-- about section top title -->
            <div class="about-section_toptitle">
                <h3 class="webfixf">About Us</h3>
            </div>
            <!-- about section title -->
            <div class="about-section_title">
                <h2 class="webfixf-in">Elevating structures, enriching lives</h2>
                <p class="webfixf">With <b>14+ years</b> of experience in the <b>Building Material Industry</b> behind us. We set out to bring the best of premium craftmanship to our clients. It is the amalgamation of this experience and understanding that resulted in the birth of <b>Sthirta Corp.</b> The one stop for premium building material solutions. Our alliance with each brand we represent is borne out of our understanding and longstanding experience.</p>
            </div>
            <!-- about section content -->
            <div class="about-section_content">
                <div class="about-section_content_wrapper">
                    <!-- Swiper -->
                    <div class="swiper-containers  swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="about-section_slide_wrapper">
                                    <img src="assets/img/3-png.png" />
                                    <div class="about-section_slide_content">
                                        <h2 class="webfixf">Accurate & Reliable</h2>
                                        <p class="webfixf">At <b>Sthirta Corp</b>, we pride ourselves on our unwavering commitment to accuracy and reliability. With every delivery, we guarantee precise measurements, consistent quality, empowering you to build with confidence and peace of mind.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about-section_slide_wrapper">
                                    <img src="assets/img/1-png.png" />
                                    <div class="about-section_slide_content">
                                        <h2 class="webfixf">Innovative Approach</h2>
                                        <p class="webfixf">Innovation is our cornerstone. From cutting-edge materials to advanced delivery solutions, we're constantly pushing boundaries to bring you the latest in construction technology.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="about-section_slide_wrapper">
                                    <img src="assets/img/2-png.png" alt="img" />
                                    <div class="about-section_slide_content">
                                        <h2 class="webfixf">Globally Accepted Designs</h2>
                                        <p class="webfixf">Embrace global standards with our creative solutions. Our curated selection of Products blends international trends with local needs, ensuring your projects stand out while meeting worldwide standards for quality and creativity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination custom_pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home about section -->
<!-- home proparty profile section -->
<section class="pro-profile">
    <div class="pro-profile_container">
        <div class="pro-profile_wrapper">
            <!-- pro-profile section title -->
            <div class="about-section_title pro-profile_title">
                <h2 class="webfixf-in">Reliable support, unmatched service</h2>
                <p class="webfixf">We're here to ensure your building projects thrive. Your project success is our priority. Reach out to our dedicated customer support team for personalized assistance with all your needs.</p>
            </div>
            <!-- slide proparty wrapper -->
            <div class="pro-profile_slide_wrapper">
                 <div class="pro-profile_slide-container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="pro-profile_slide_box">
                                <div class="pro-profile_slide_inner_box">
                                    <div class="pro-profile_slide_left_box">
                                        <div class="pro-profile_slide_img">
                                            <img src="assets/img/vox/vox.jpg" alt="img" />
                                        </div>
                                    </div>
                                    <div class="pro-profile_slide_right_box">
                                        <div class="pro-profile_slide_toptitle">
                                            <p class="webfixf">Turning imagery into Proper specific intelligence</p>
                                        </div>
                                        <div class="pro-profile_slide_title">
                                            <h2 class="webfixf-in">Sthirta Corp Profile</h2>
                                            <h6 class="webfixf">123 MAIN STREET, USA</h6>
                                        </div>
                                        <div class="pro-profile_slide_toggle_wrapper">
                                            <div class="pro-profile-block">
                                                <div class="pro-profile-title">
                                                    <h3 class="webfixf">By peril attributes: <br><label>Hail</label></h3>
                                                    <span class="pro-profile_nav" id="tab1" onclick="clickfunction(this.id)"><i class="lni lni-chevron-down"></i></span>
                                                </div>
                                                <div class="pro-profile-content tab1 show collapse_box">
                                                    <div class="pro-profile-content_wrapper">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Roof Condition</td>
                                                                    <td>Severe</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roof Covering</td>
                                                                    <td>Membrane</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roof Geometry</td>
                                                                    <td>Flat</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-profile-block">
                                                <div class="pro-profile-title">
                                                    <h3 class="webfixf">Proper Characteristics</h3>
                                                    <span class="pro-profile_nav" id="tab2" onclick="clickfunction(this.id)"><i class="lni lni-chevron-down"></i></span>
                                                </div>
                                                <div class="pro-profile-content tab2 collapse_box">
                                                    <div class="pro-profile-content_wrapper">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Solar Panels</td>
                                                                    <td>No</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roof Area</td>
                                                                    <td>22,000 sq ft.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-profile-block">
                                                <div class="pro-profile-title">
                                                    <h3 class="webfixf">SUMMARY OF ROOF SCORES</h3>
                                                    <span class="pro-profile_nav" id="tab3" onclick="clickfunction(this.id)"><i class="lni lni-chevron-down"></i></span>
                                                </div>
                                                <div class="pro-profile-content tab3 pro-profile-content-last collapse_box">
                                                    <div class="pro-profile-content_wrapper">
                                                        <div class="pro-profile-content_title">
                                                            <h2>SUMMARY OF ROOF SCORES</h2>
                                                            <p>6 out of 100</p>
                                                        </div>
                                                        <div class="inner_pwer_wrrap">
                                                            <input type='range' disabled value='0'/>
                                                        </div>
                                                        <div class="inner_pwer_wrrap_strio">
                                                            <span>Low</span>
                                                            <span>Fire</span>
                                                            <span>Storm Risk</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pro-profile_slide_box">
                                <div class="pro-profile_slide_inner_box">
                                    <div class="pro-profile_slide_left_box">
                                        <div class="pro-profile_slide_img">
                                            <img src="assets/img/vox/vox.jpg" alt="img" />
                                        </div>
                                    </div>
                                    <div class="pro-profile_slide_right_box">
                                        <div class="pro-profile_slide_toptitle">
                                            <p class="webfixf">Turning imagery into Proper specific intelligence</p>
                                        </div>
                                        <div class="pro-profile_slide_title">
                                            <h2 class="webfixf-in">Sthirta Corp Profile</h2>
                                            <h6 class="webfixf">123 MAIN STREET, USA</h6>
                                        </div>
                                        <div class="pro-profile_slide_toggle_wrapper">
                                            <div class="pro-profile-block">
                                                <div class="pro-profile-title">
                                                    <h3 class="webfixf">By peril attributes: <br><label>Hail</label></h3>
                                                    <span class="pro-profile_nav" id="tab1" onclick="clickfunction(this.id)"><i class="lni lni-chevron-down"></i></span>
                                                </div>
                                                <div class="pro-profile-content tab1 show collapse_box">
                                                    <div class="pro-profile-content_wrapper">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Roof Condition</td>
                                                                    <td>Severe</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roof Covering</td>
                                                                    <td>Membrane</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roof Geometry</td>
                                                                    <td>Flat</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-profile-block">
                                                <div class="pro-profile-title">
                                                    <h3 class="webfixf">Proper Characteristics</h3>
                                                    <span class="pro-profile_nav" id="tab2" onclick="clickfunction(this.id)"><i class="lni lni-chevron-down"></i></span>
                                                </div>
                                                <div class="pro-profile-content tab2 collapse_box">
                                                    <div class="pro-profile-content_wrapper">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Solar Panels</td>
                                                                    <td>No</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roof Area</td>
                                                                    <td>22,000 sq ft.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pro-profile-block">
                                                <div class="pro-profile-title">
                                                    <h3 class="webfixf">SUMMARY OF ROOF SCORES</h3>
                                                    <span class="pro-profile_nav" id="tab3" onclick="clickfunction(this.id)"><i class="lni lni-chevron-down"></i></span>
                                                </div>
                                                <div class="pro-profile-content tab3 pro-profile-content-last collapse_box">
                                                    <div class="pro-profile-content_wrapper">
                                                        <div class="pro-profile-content_title">
                                                            <h2>SUMMARY OF ROOF SCORES</h2>
                                                            <p>6 out of 100</p>
                                                        </div>
                                                        <div class="inner_pwer_wrrap">
                                                            <input type='range' value='0'/>
                                                        </div>
                                                        <div class="inner_pwer_wrrap_strio">
                                                            <span>Low</span>
                                                            <span>Fire</span>
                                                            <span>Storm Risk</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home proparty profile section -->
<!-- Sthirta Corpsection -->
<section class="geox-section">
    <div class="geox-section_container">
        <div class="geox-section_wrapper">
            <!-- about section top title -->
            <div class="about-section_toptitle geox-section_toptitle">
                <h3 class="webfixf">Sthirta Corp Benefits</h3>
            </div>
            <!-- Sthirta Corpsection title -->
            <div class="about-section_title geox-section_title">
                <h2 class="webfixf-in">Sthirta Corp High Quality Products & Solutions</h2>
                <p class="webfixf">Uncompromising quality, built into every product, every time.</p>
            </div>
            <div class="geox-section_content">
                <div class="geox-section_content_wrapper">
                    <div class="geox-section_box">
                        <div class="geox-section_Inner_box">
                            <img src="assets/img/tostem-new.png" alt="Website" />
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Tostem</h3>
                            </div>
                        </div>
                    </div>
                    <div class="geox-section_box">
                        <div class="geox-section_Inner_box">
                            <img src="assets/img/greenlam_laminates-new.png" alt="Website" />
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Greenlam – Mikasa</h3>
                            </div>
                        </div>
                    </div>
                    <div class="geox-section_box">
                        <div class="geox-section_Inner_box">
                            <img src="assets/img/sloan-new.png" alt="Website" />
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Sloan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="geox-section_box">
                        <div class="geox-section_Inner_box">
                            <img src="assets/img/vox-new.png" alt="Website" />
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Vox</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="geox-section_content_action">
                    <a href="{{ route('product') }}">Know more <span><i class="lni lni-arrow-top-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sthirta Corpsection -->
<!-- our solution section -->
<section class="our-section">
    <div class="our-section_container">
        <div class="our-section_wrapper">
            <!-- about section top title -->
            <div class="about-section_toptitle geox-section_toptitle our-section_toptitle">
                <h3 class="webfixf">Overview</h3>
            </div>
            <!-- Sthirta Corpsection title -->
            <div class="about-section_title geox-section_title our-section_title">
                <h2 class="webfixf-in">Elevating <br>Construction with Quality Materials</h2>
                <p class="webfixf">Providing top-quality materials for every project, we're your trusted partner in construction excellence</p>
            </div>
        </div>
    </div>
    <div class="our-section_image">
        <div class="our-section_image_container">
            <div class="our-section_image_box our-section_image_box_frist">
                <iframe width="100%" height="" src="https://www.youtube.com/embed/sxUEBoO4uac?si=k_fUv1wKRtZSESud?color=white&showinfo=0&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                {{-- <img src="assets/img/top-view-boards-mdf-material.jpg" alt="img" /> --}}
            </div>
            <div class="our-section_image_box our-section_image_box_2nd">
                <img src="assets/img/fea-img-416x647.jpg" alt="img" />
            </div>
        </div>
    </div>
    <div class="our-section_container">
        <div class="our-section_wrapper">
            <!-- about section top title -->
            <div class="about-section_toptitle geox-section_toptitle our-section_toptitle">
                <h3 class="webfixf">Clint Testimonials</h3>
            </div>
            <!-- Sthirta Corpsection title -->
            <div class="about-section_title geox-section_title our-section_title">
                <p class="webfixf">Their exceptional range of building materials exceeded my expectations, making my project a seamless success</p>
            </div>
            <div class="swiper-container mt-5" id="testimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slide geox-section_box our-section_box ">
                        <div class="geox-section_Inner_box">
                            <div class="our-section_Inner_box">
                                <iframe width="100%" height="" src="https://www.youtube.com/embed/5cJIi-MJRS4?si=e_hogG7SBoA6Doox?color=white&showinfo=0&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Testimonial - Praful Jain</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide geox-section_box our-section_box ">
                        <div class="geox-section_Inner_box">
                            <div class="our-section_Inner_box">
                                <iframe width="100%" height="" src="https://www.youtube.com/embed/LwRGHC90VYA?si=vepMDeIact3Eqgjt?color=white&showinfo=0&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Testimonial - Ritu Jain</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide geox-section_box our-section_box ">
                        <div class="geox-section_Inner_box">
                            <div class="our-section_Inner_box">
                                <iframe width="100%" height="" src="https://www.youtube.com/embed/vldeg4yFEHc?si=dGRoHmo8-BciJQrk?color=white&showinfo=0&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="geox-section_content_box">
                                <h3 class="webfixf">Testimonial - Saksham Jain</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
<!-- our solution section -->
<!-- home contact box section -->
{{-- <section class="contact-box">
    <div class="contact-box_container">
        <div class="contact-box_wrapper">
            <div class="contact-box_left_box">
                <div class="contact-box_box">
                    <!-- about section top title -->
                    <div class="about-section_toptitle geox-section_toptitle">
                        <h3 class="webfixf">Section</h3>
                    </div>
                    <!-- Sthirta Corpsection title -->
                    <div class="about-section_title geox-section_title">
                        <h2 class="webfixf-in">Company customer types belief, Lorem Ipsum is not simply random text.</h2>
                        <p class="webfixf">Ecopia leverages artificial intelligence (“AI”) to mine geospatial big data, rapidly generating HD Vector Maps at-scale, all with the accuracy of a trained GIS professional. Our HD Vector Maps are trusted foundational layers embedded into critical applications around the world.</p>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</section> --}}
<!-- home contact box section -->
@endsection
@section("script")
<script>
    let site_url = '{{ url('/') }}';
</script>
<script src="js/homePage.js"></script>
<script>
    
</script>
@endsection