<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container {
        /* height: 500px; */
        /* background-color: red; */
    }

    .mt-head {
        padding-top: 8%;
    }

    .pan-head {
        display: block;
        background-color: black;
        color: white;
        width: fit-content;
        font-family: "D-DIN Condensed";
        font-weight: normal;
        font-size: 50px;
        padding: 5px 20px;
    }

    * {
        font-family: "D-DIN Condensed";
    }

    .ls {
        letter-spacing: 3px;
    }

    .bg-gray {
        background-color: #808080;
    }

    .map {
        width: 720px;
        margin: 0 auto;
        display: block;

    }

    .map-container {
        overflow: hidden;
    }

    @keyframes zoomin {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(10);
            opacity: 0;
        }
    }

    /* The element to apply the animation to */
    .zoom-in {
        animation-name: zoomin;
        animation-duration: 1s;
    }

    .invisible {
        display: none;
    }

    .circle {
        height: 13px;
        width: 13px;
        display: inline-block;
        background-color: #a1a3a6;
        border-radius: 50%;
        float: right;
        /* margin-top: 2px; */
    }

    .blue {
        background-color: #00bdff;
    }

    /* .bot {
        position: absolute;
        bottom: 0;
        width: 100%;
    } */

    .bot {
        font-size: 20px;
    }

    area::before {
        content: "";
        height: fit-content;
        width: fit-content;
        background-color: red;
    }

    .posrel {
        position: relative;
    }

    .cancont {
        overflow: hidden;
    }

    .zoomButton {
        display: none;
    }

    tspan {
        font-size: 35px;
        color: #00bdff;
    }

    .details {
        position: fixed;
        top: 15%;
        background-color: white;
        right: 30px;
        padding: 15px 15px;
        width: 280px;
    }

    circle.existing {
        color: #00bdff;
        background-color: #00bdff;
    }

    .details .name {
        color: #00bdff;
        font-size: 20px;

    }

    .details p {
        margin: 0;
        margin-top: 5px;
        text-decoration: capitalize;
    }

    .details p:first-child {
        margin: 0;
        margin-top: 0;
    }

    .details .area {
        color: #808080;
        font-size: 20px;
    }

    .details .getdir {
        color: #000000;
        font-size: 20px;
    }

    .details .detpdf {
        color: #000000;
        font-size: 20px;
    }

    .details .veiwPlan {
        color: #000000;
        font-size: 20px;
    }

    .details a:hover {
        text-decoration: none;
    }

    .downimg {
        width: 15px;
        color: black;
        vertical-align: baseline;
        margin-left: 15px;
    }

    .bordmin {
        width: 60px;
        height: 2px;
        background-color: #00bdff;
        margin-top: 15px;
    }

    #state {
        border: 0;
        outline: 0;
        border-bottom: 1px solid #808080;
        margin-bottom: 15px;
        padding-left: 0;
        font-size: 20px;
    }

    .city {
        border: 0;
        outline: 0;
        margin-bottom: 0;
        border-bottom: 1px solid #808080;
        padding-left: 0;
        font-size: 20px;
    }

    #state:focus,
    #state:hover,
    #state:active {
        outline: 0;
    }

    .districts {
        padding: 10px;
    }

    .districts.active {
        border: 1px solid black;

    }

    .districts a {
        color: #808080;
    }

    .districts a:hover {
        text-decoration: none;
    }

    .subtxt {
        font-size: 20px;
    }

    /* MODAL STYLING */
    .modal__viewPlan_d_block {
        display: block !important;
    }

    .modal__viewPlan {
        display: none;
        position: fixed;
        z-index: 10;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: #00000085;
    }

    .viewPlan_main_img {
        width: 50%;
        height: 80vh;
        overflow: auto;
        background-color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px;
        text-align: justify;
        font-family: "D-DIN Condensed";
        font-weight: normal;
        font-size: 1.2vw;
    }

    .viewImg {
        width: 100%;
        object-fit: contain;
    }

    .cus_paddingleft {
        padding-left: 1.5rem !important;
    }

    .locationform-Modal {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40%;
        background-color: white;
    }
</style>

<!-- Location -->

<div class="row  mx-0 setMaxWidth m-flex-column-reverse">
    <div class="col-md-5 cus_col_md_12 cus_paddingleft">
        <div class="container pt-5 dfl pb-5 cusPaddingLeft cusPaddingRight">
            <p class="pan-head mt-5 cusMargins">PAN-INDIA</p>
            <p class="pan-head ls">PRESENCE </p>
            <p class="subtxt">
                Greenbase Industrial &amp; Logistics Parks are
                strategically located at key locations pan-india, in close
                proximity to commercial, logistical and freight corridors.
            </p>

            <div class="col-9 px-0">
                <select name="state" id="state" class="form-control">
                    <option value="State" disabled selected>State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Assam">Assam</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Punjab">Punjab</option>
                </select>
                <div class="city">City/District</div>
                <div class="districts">
                    <div class=" distcity maharashtra d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Talegaon, Pune</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="<?php echo base_url()?>assets/pdf/talegaon.pdf" download>E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Nashik</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="<?php echo base_url()?>assets/pdf/nashik.pdf" download>E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Bhiwandi</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Panvel</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity haryana d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Gurugram</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity tamilnadu d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Oragadam</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="<?php echo base_url()?>assets/pdf/oragadam.pdf" download>E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity tamilnadu d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Coimbatore</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity karnataka d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Bangalore</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity westbengal d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Durgapur</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity westbengal d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Kolkata</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity gujarat d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Ahmedabad</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity assam d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Guwahati</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity Punjab d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Rajpura</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity uttarpradesh d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Lucknow</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity andhrapradesh d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Hyderabad</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img
                                            src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"
                                            class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bot pt-5 pb-0">
                <p>Existing Industrial & Logistics Parks <span class="circle blue"></span></p>
                <p>Upcoming Industrial & Logistics Parks <span class="circle"></span></p>
            </div>
        </div>
    </div>
    <div class="col-md-7 cus_col_md_12 px-0 bg-gray map__MainContainer">
        <div class="cancont mapcontainer" id="cancot">
            <div class="map"></div>
            <div class="details d-none">
                <span class="closeMapDetailModal" id="closeMapDetailModal">&times;</span>
                <p class="name">Gurugram, Haryana</p>
                <p class="area"><span class="areaval">9,20,300 sq. ft.</span></p>
                <div class="bordmin"></div>
                <div id="location_action">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL FOR PLAN VIEW -->
<!-- MODAL FOR GREENBASE -->
<div class="modal__viewPlan">
    <div class="container-fluid viewPlan__content">
        <span class="closeGalleryModal" id="closeviewPlanModal">&times;</span>
        <div class="row">
            <div class="viewPlan_main_img">
                <img id="setViewPlanImg" alt="plan" class="viewImg">
            </div>
        </div>
    </div>
</div>

<div class="disclaimer-modal modal" id="helpModal" style="z-index: 100000;">
    <span class="closeGalleryModal" data-dismiss="modal">&times;</span>
    <div class="container-fluid locationform-Modal">
        <div class="row">
            <div class="col-md-12 py-3">
                <h3 id="formHeading" style="text-transform: uppercase;">Enquiry about Bangalore Location</h3>
                <form>
                    <div class="w-100 mb-2">
                        <input type="text" name="name" placeholder="Name" class="w-100">
                    </div>
                    <div class="w-100 mb-2">
                        <input type="email" name="email" placeholder="E-mail" class="w-100">
                    </div>
                    <div class="w-100 mb-2">
                        <input type="tel" name="phone" placeholder="phone" class="w-100">
                    </div>
                    <div class="w-100 mb-2">
                        <textarea name="query" placeholder="Query" class="w-100"></textarea>
                    </div>
                    <div class="button-div-wrapper">
                        <button class="button-submit floatnormal" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- End of Location -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
    charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-mapael@2.2.0/js/jquery.mapael.js"></script>
<script src="<?php echo base_url(); ?>assets/js/newind.js"></script>
<script type="text/javascript">
    // object for location details
    function setLocation(e) {
        $("#formHeading").text(`Enquiry about ${e.getAttribute('data-location')} Location`)
    }
    var loc = {
        gurugram: {
            name: 'GURUGRAM',
            state: 'HARYANA',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/gurugram.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        mumbai: {
            name: 'MUMBAI',
            state: 'MAHARASHTRA',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/mumbai.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        nashik: {
            name: 'NASHIK',
            state: 'MAHARASHTRA',
            area: 'AREA - 73 acres',
            pdf: '<?php echo base_url(); ?>assets/pdf/nashik.pdf',
            img: "nashik.jpg",
            directions: 'https://www.google.co.in/maps/place/19%C2%B053"42.2%22N+73%C2%B055"22.8%22E/@19.8950556,73.9208113,701m/data=!3m1!1e3!4m5!3m4!1s0x0:0x0!8m2!3d19.8950556!4d73.923'
        },
        talegaon: {
            name: 'TALEGAON',
            state: 'MAHARASHTRA',
            area: 'AREA - 258 acres',
            pdf: '<?php echo base_url(); ?>assets/pdf/talegaon.pdf',
            img: "talegaon.jpg",
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        bhiwandi: {
            name: 'BHIWANDI',
            state: 'MAHARASHTRA',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        bangalore: {
            name: 'BENGALURU',
            state: 'KARNATAKA',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        oragadam: {
            name: 'ORAGADAM',
            state: 'TAMIL NADU',
            area: 'AREA - 114 acres',
            pdf: '<?php echo base_url(); ?>assets/pdf/oragadam.pdf',
            img: "oragadamBanner.jpg",
            directions: "https://www.google.co.in/maps/place/12%C2%B048'49.8%22N+79%C2%B057'16.8%22E/@12.8138333,79.9528563,727m/data=!3m2!1e3!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d12.8138396!4d79.9546728"
        },
        durgapur: {
            name: 'DURGAPUR',
            state: 'WEST BENGAL',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        rajpura: {
            name: 'RAJPURA',
            state: 'PUNJAB',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        lucknow: {
            name: 'LUCKNOW',
            state: 'UTTAR PRADESH',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        guwahati: {
            name: 'GUWAHATI',
            state: 'ASSAM',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        Ahmedabad: {
            name: 'AHMEDABAD',
            state: 'GUJARAT',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        Kolkata: {
            name: 'KOLKATA',
            state: 'WEST BENGAL',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        nagpur: {
            name: 'NAGPUR',
            state: 'MAHARASHTRA',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        hyderabad: {
            name: 'HYDERABAD',
            state: 'ANDHRA PRADESH',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
        coimbatore: {
            name: 'COIMBATORE',
            state: 'TAMIL NADU',
            area: 'Coming Soon',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            img: "planComingSoon.jpg",
            directions: 'Coming Soon'
        },
    }
    // map creator
    $map = $(".mapcontainer");
    $map.mapael({
        map: {
            name: "india_states",
            zoom: {
                enabled: true,
                minLevel: -0.3
            },
            defaultPlot: {
                size: 30,
                attrs: {
                    fill: "#808080"
                },
                attrsHover: {
                    fill: "#808080"
                },
                text: {
                    fill: "#808080"
                }
            },
            defaultArea: {
                attrs: {
                    fill: "#000031",
                    opacity: 1,
                    stroke: "#002e6f",
                    "stroke-width": 2,
                    opacity: 1
                },
                attrsHover: {
                    fill: "#000055"
                }
            }
        },
        plots: {
            'gurugram': {
                cssClass: "plt gurugram",
                type: "circle",
                size: 30,
                latitude: 28.3,
                longitude: 77.5,
                text: {
                    content: "Gurugram"
                }
            },
            'mumbai': {
                cssClass: "plt mumbai",
                type: "circle",
                size: 30,
                latitude: 18.5,
                longitude: 73.2,
                text: {
                    content: "Mumbai",
                    position: "left"
                }
            },
            'nashik': {
                cssClass: "plt nashik existing",
                type: "circle",
                size: 30,
                latitude: 19.3,
                longitude: 74.2,
                text: {
                    content: "Nashik"
                }
            },
            'bhiwandi': {
                cssClass: "plt bhiwandi",
                type: "circle",
                size: 30,
                latitude: 19.1,
                longitude: 73.2,
                text: {
                    content: "Bhiwandi",
                    position: 'left'
                }
            },
            'talegaon': {
                cssClass: "plt talegaon existing",
                type: "circle",
                size: 30,
                latitude: 18.5,
                longitude: 73.9,
                text: {
                    content: "Talegaon",
                    // position: "bottom",
                }
            },
            'bangalore': {
                cssClass: "plt bangalore",
                type: "circle",
                size: 30,
                latitude: 13,
                longitude: 76.9,
                text: {
                    content: "Bengaluru",
                    position: "left",
                }
            },
            'oragadam': {
                cssClass: "plt orgadam existing",
                type: "circle",
                size: 30,
                latitude: 13,
                longitude: 80.1,
                text: {
                    content: "Oragadam",
                    // position: "top",
                }
            },
            'durgapur': {
                cssClass: "plt durgapur",
                type: "circle",
                size: 30,
                latitude: 23.5,
                longitude: 87.3,
                text: {
                    content: "Durgapur",
                    position: "right",
                }
            },
            'Ahmedabad': {
                cssClass: "plt ahmedabad",
                type: "circle",
                size: 30,
                latitude: 23,
                longitude: 72.2,
                text: {
                    content: "Ahmedabad",
                    position: "right",
                }
            },
            'Kolkata': {
                cssClass: "plt kolkata",
                type: "circle",
                size: 30,
                latitude: 22.6,
                longitude: 88.5,
                text: {
                    content: "Kolkata",
                    position: "right",
                }
            },
            'nagpur': {
                cssClass: "plt nagpur",
                type: "circle",
                size: 30,
                latitude: 21,
                longitude: 79.5,
                text: {
                    content: "Nagpur",
                    position: "right",
                }
            },
            'hyderabad': {
                cssClass: "plt hyderabad",
                type: "circle",
                size: 30,
                latitude: 17,
                longitude: 78.5,
                text: {
                    content: "Hyderabad",
                    position: "right",
                }
            },
            'coimbatore': {
                cssClass: "plt coimbatore",
                type: "circle",
                size: 30,
                latitude: 11,
                longitude: 76.9,
                text: {
                    content: "Coimbatore",
                    position: "right",
                }
            },
            'rajpura': {
                cssClass: "plt rajpura",
                type: "circle",
                size: 30,
                latitude: 30.5,
                longitude: 76.8,
                text: {
                    content: "Rajpura",
                    position: "right",
                }
            },
            'lucknow': {
                cssClass: "plt lucknow",
                type: "circle",
                size: 30,
                latitude: 26.5,
                longitude: 80.8,
                text: {
                    content: "Lucknow",
                    position: "right",
                }
            },
            'guwahati': {
                cssClass: "plt guwahati",
                type: "circle",
                size: 30,
                latitude: 26.5,
                longitude: 91.8,
                text: {
                    content: "Guwahati",
                    position: "right",
                }
            },
        },

    });
    $(document).ready(() => {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $(".plt").click(function () {
        var base_url = window.location.origin;
        var x = $(this).attr('data-id');
        $('.details').removeClass('d-none');
        $('.details > .name').text(loc[x].name + ' , ' + loc[x].state);
        $('.areaval').text(loc[x].area);
        $(".detpdf").attr('href', loc[x].pdf);
        $(".veiwPlan").attr('href', base_url + "/greenbase/viewplan/" + loc[x].img);
        $(".veiwPlan").attr('data-id', x);
        $(".getdir").attr('href', loc[x].directions);
        var elements = `<p><a target="_blank" data-id=${x} class="veiwPlan" href=${base_url + "/greenbase/viewplan/" + loc[x].img}>View Plan</a></p>
        <p><a class="detpdf" href=${loc[x].pdf} download>Download Location Highlights <img class="downimg" src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"></a></p>
                <p><a class="getdir" href=${loc[x].directions} target="_blank">Get Direction<i class="fa fa-map-marker" style="font-size:18px;margin-left:15px;"></i></a></p>
        `
        var button = `<button onclick="setLocation(this)" data-location=${loc[x].name} data-toggle="modal" data-target="#helpModal"class="download ml-0 px-4 b-none mt-3 pointer py-1">Enquire</button>`
        if (loc[x].directions === "Coming Soon") {
            document.getElementById('location_action').innerHTML = button;
        } else {
            document.getElementById('location_action').innerHTML = elements;
        }
        $("circle.existing").attr('fill', '#00bdff');
    });
    $("#closeviewPlanModal").click(function () {
        $('.modal__viewPlan').removeClass('modal__viewPlan_d_block');
    });

    $("#closeMapDetailModal").click(function () {
        $('.details').addClass('d-none');
    });

    $("path").click(function () {
        $('.details').addClass('d-none');
        $("circle.existing").attr('fill', '#00bdff');
    });
    // these are here just to keep the existing ones blue
    $("path").mouseenter(function () {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $("path").mouseleave(function () {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $("path").mousemove(function () {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $('circle.existing').mouseover(function () {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $('circle.existing').mouseleave(function () {
        $("circle.existing").attr('fill', '#00bdff');
    });

    // on select change
    $('#state').on('change', function () {
        var state = this.value;
        if (state == "Maharashtra") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 16,
                longitude: 63
            });
            $('.distcity').addClass('d-none');
            $('.maharashtra').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Haryana") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 28,
                longitude: 80
            });
            $('.distcity').addClass('d-none');
            $('.haryana').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Tamil Nadu") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 10,
                longitude: 80
            });
            $('.distcity').addClass('d-none');
            $('.tamilnadu').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Karnataka") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 10,
                longitude: 80
            });
            $('.distcity').addClass('d-none');
            $('.karnataka').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "West Bengal") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 23,
                longitude: 90
            });
            $('.distcity').addClass('d-none');
            $('.westbengal').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Gujarat") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 25,
                longitude: 9
            });
            $('.distcity').addClass('d-none');
            $('.gujarat').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Assam") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 25,
                longitude: 100
            });
            $('.distcity').addClass('d-none');
            $('.assam').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Uttar Pradesh") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 28,
                longitude: 85
            });
            $('.distcity').addClass('d-none');
            $('.uttarpradesh').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Punjab") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 35,
                longitude: 75
            });
            $('.distcity').addClass('d-none');
            $('.Punjab').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Andhra Pradesh") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 20,
                longitude: 80
            });
            $('.distcity').addClass('d-none');
            $('.andhrapradesh').removeClass('d-none');
            $('.districts').addClass('active');
        }

    });
</script>