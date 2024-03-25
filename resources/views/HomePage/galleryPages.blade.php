@extends('layouts.webSite')
@section('title', 'Gallery')
@section('content')
<!-- banner section -->
<div class="promo-banner">
    <div class="promo-banner_image">
        <img src="assets/img/hp-slide.jpg" alt="img" />
    </div>
    <div class="promo-banner_content">
        <div class="promo-banner_inner_wrapper">
            <div class="promo-banner_text">
                <h3>There are many variations of passages of Lorem Ipsum available</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                <div class="promo-banner_action">
                    <a href="{{ route('contactUs') }}">Contect Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner section -->
<div id="galley">
    <div class="default-content pt-4 pb-5">
        <div class="custom-container">
            <div class="shuffle_wrapper text-center pt-3 pb-4">
                <button class="default-btn" id='all'><span>All</span></button>
                <button class="default-btn" id='btn-tostem'><span>Tostem</span></button>
                <button class="default-btn" id='btn-greenlam'><span>Greenlam</span></button>
                <button class="default-btn" id='btn-sloan'><span>Sloan</span></button>
                <button class="default-btn" id='btn-vox'><span>Vox</span></button>
            </div>
            <div class="row my-shuffle-container">
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["tostem"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/about-image-one.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["greenlam"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/about-image-three.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["greenlam"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/about-image-two.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["sloan"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/image-068.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["vox"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/vox-about.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["tostem"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/about-image-one.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["greenlam"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/about-image-three.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["greenlam"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/about-image-two.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
                <div class="mb-3 grid-col col-6 col-md-3 col-sm-4 picture-item" data-groups='["vox"]'>
                    <div class="service-card-item">
                        <img src="assets/img/vox/vox-about.jpg"  class="img-fluid" width="" height="" alt="Destinations">
                        <p class="service-shor-detail">Providing top-quality materials for every project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/6.1.0/shuffle.min.js"></script>
<script>
var gallary_page = window.location.pathname;
var split_name = gallary_page.split("/").pop();
const getpage = () => {
    var Shuffle = window.Shuffle;
    var element = document.querySelector('.my-shuffle-container');
    var sizer = element.querySelector('.my-sizer-element');
    var shuffleInstance = new Shuffle(element, {
        itemSelector: '.picture-item'
    });
    // shuffleInstance.filter('animal');
    $("#all").on("click", function () {
        shuffleInstance.filter();
    });
    $("#btn-tostem").on("click", function () {
        shuffleInstance.filter('tostem');
    });
    $("#btn-greenlam").on("click", function () {
        shuffleInstance.filter('greenlam');
    });
    $("#btn-sloan").on("click", function () {
        shuffleInstance.filter('sloan');
    });
    $("#btn-vox").on("click", function () {
        shuffleInstance.filter('vox');
    });
    $(".filter").on("click", function () {
        let filterData = $(this).data("filter_category");
        shuffleInstance.filter(filterData);
    });
}
if(split_name == 'gallery'){
    getpage();
}
</script>
@endsection