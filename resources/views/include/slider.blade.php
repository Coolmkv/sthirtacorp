  <!-- home banner -->
  <section class="home-banner">
    <div class="home-banner_wrapper">
        <div class="home-banner_image">
            <video autoplay muted loop playsinline preload="metadata" class="desktop-video">
                <source src="assets/video/sthirta-corp.mp4" type="video/mp4">
            </video>
            {{-- <iframe width="100%" height="" src="https://www.youtube.com/embed/sxUEBoO4uac?si=k_fUv1wKRtZSESud?color=white&showinfo=0&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
            <style>
                video.mobile-video, video.desktop-video {
                    object-fit: cover;
                    /* position: absolute; */
                    height: 100%;
                    width: 100%;
                }
                .home-banner_image::before{background: linear-gradient(to bottom, rgb(var(--blue-color) / 65%),rgba(0,0,0,0))}
                @media (max-width: 767px){
                    video.desktop-video {display: none;}
                    video.mobile-video {display: block !important} 

                }
            </style>
            <video autoplay muted loop playsinline preload="metadata" hidden class="mobile-video">
                <source src="assets/video/sthirta-corp.mp4" type="video/mp4">
            </video>
            {{-- <img src="assets/img/hp-slide-one.jpg" alt="Banner Image" /> --}}
        </div>
        <div class="home-banner_content">
            <div class="home-banner_inner_wrapper">
                <div class="home-banner_text">
                    <h3>Building Dream with quality for enduring structures.</h3>
                    <p>Elevate your projects with top-quality building materials designed for durability and aesthetic appeal.</p>
                    <h5><a href="https://www.youtube.com/@sthirtacorp">Watch Video <span><i class="lni lni-play"></i></span></a></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home banner -->