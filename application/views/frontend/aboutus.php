<section class="section-1-about banner-main setMaxWidth">
    <div class="banner-about banner-slider-container">
        <img src=<?php echo base_url('assets/images/about/legacy_banner.jpg') ?> alt="banner_in_about"
        class="banner_about_img">
        <div class="banner-caption-container d-block">
            <div class="banner-main-heading">
                <div>our industrial space.</div>
                <div>your business glory.</div>
            </div>
            <div class="banner-caption">
                our rich real estate legacy allows us the leverage to build
                efficient industrial and warehousing space across the country
            </div>
        </div>
    </div>
    <div class="container-gb legacy_content_wrapper d-flex">
        <div class="title_wrapper">
            <h1>
                The conglomerate
            </h1>
        </div>
        <div class="content_wrapper">
            <p class="m-0">By leveraging our intrinsic strengths in real estate, we have further expanded the scope of excellence by
                integrating sustainability and adaptability into each of our new businessess be it industrial and
                warehousing, infrastructure, oil, gas,data center and more..</p>
        </div>
    </div>
</section>

<!-- GROUP OVERVIEW -->
<section class="group_overview_wrapper group_bg" style="background-image: url('<?php echo base_url("assets/images/about/group.jpg") ?>');">
        <div class="container-gb py-5">
            <div class="group_head_wrapper">
                <h1 class="m-0">Group overview</h1>
            </div>
            <div class="group_content content_bg d-flex mt-4">
                <div class="stats_wrapper bg-col-2 flex-25 mr-4">
                    <div class="stats_content d-flex mb-5 align-center">
                        <img src=<?php echo base_url('assets/images/logo.svg'); ?> alt="" class="mr-3">
                        <div class="stats">
                            <span class="count">3,152</span><span class="volume">acres</span>
                            <p class="m-0">Total land bank hoding</p>
                        </div>
                    </div>
                    <div class="stats_content d-flex mb-5 align-center">
                        <img src=<?php echo base_url('assets/images/logo.svg'); ?> alt="" class="mr-3">
                        <div class="stats">
                            <span class="count">3,152</span><span class="volume">acres</span>
                            <p class="m-0">Total land bank hoding</p>
                        </div>
                    </div>
                    <div class="stats_content d-flex mb-5 align-center">
                        <img src=<?php echo base_url('assets/images/logo.svg'); ?> alt="" class="mr-3">
                        <div class="stats">
                            <span class="count">3,152</span><span class="volume">acres</span>
                            <p class="m-0">Total land bank hoding</p>
                        </div>
                    </div>
                    <div class="stats_content d-flex mb-5 align-center">
                        <img src=<?php echo base_url('assets/images/logo.svg'); ?> alt="" class="mr-3">
                        <div class="stats">
                            <span class="count">3,152</span><span class="volume">acres</span>
                            <p class="m-0">Total land bank hoding</p>
                        </div>
                    </div>
                </div>
                <div class="stats_detail_wrapper bg-col-1 flex-1">world</div>
            </div>
        </div>
</section>

<!-- Businessess -->
<section class="group_overview_wrapper group_bg" style="background-image: url('<?php echo base_url("assets/images/about/business.jpg") ?>');">
    <div class="container-gb py-5">
        <div class="group_head_wrapper business_wrapper">
            <h1 class="m-0">our 12 business sbu</h1><sup>s</sup>
        </div>
    </div>
</section>
<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);
    function mobileAboutIdicator(x) {
        showSlides(slideIndex += x);
    }
    function showSlides(n) {
        var i, j;
        var slides = document.getElementsByClassName("carousel-item-abouts");
        var slides_content = document.getElementsByClassName("overview-content-mobile");
        if (n > slides.length) { slideIndex = 1 }
        if (n > slides_content.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        if (n < 1) { slideIndex = slides_content.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (j = 0; j < slides_content.length; j++) {
            slides_content[j].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
        slides_content[slideIndex - 1].style.display = "block";
    }
</script>