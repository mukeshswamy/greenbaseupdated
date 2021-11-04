<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/bootstrap.min.css'); ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/style.css') ?>>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    
    <script src=<?php echo base_url('assets/js/jquery.min.js')?>></script>
    <script src=<?php echo base_url('assets/js/moment.min.js')?>></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>GreenBase | Home</title>
</head>

<body>
    <div class="fulloverlay" id="fulloverlay"></div>
    <header class="main-header setMaxWidth">
        <div class="container-fluid container-header">
            <div class="row header-row">
                <div class="col-md-2 cus-col-md-2 paddingnull">
                    <a href=<?php echo base_url();?>><img src=<?php echo base_url('assets/images/logo.svg'); ?>
                            alt="logo" class="logo"></a>
                </div>
                <div class="col-md-10 flex-col">
                    <ul class="main-nav-ul">
                        <li><a href="<?php echo base_url();?>our-legacy">OUR LEGACY</a></li>
                        <li><a href="<?php echo base_url();?>value-proposition">VALUE PROPOSITION</a></li>
                        <li><a href="<?php echo base_url();?>location" id="do">OUR LOCATIONS</a></li>
                        <li><a href="<?php echo base_url();?>clients">OUR CLIENTS</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url();?>gallery">GALLERY</a></li>
                        <li><a href="<?php echo base_url();?>blogs">BLOGS</a></li>
                        <li><a href="<?php echo base_url();?>contact">CONTACT US</a></li>
                    </ul>
                    <a download href="<?php echo base_url(); ?>assets/pdf/greenbase.pdf" class="download">Download</a>
                </div>
                <script>
                        $(function () {
                            var current = location.pathname;
                            $('.main-nav-ul li a').each(function () {
                                var this_link = $(this);
                                // if the current path is like this link, make it active
                                if (this_link.attr('href').indexOf(current) !== -1) {
                                    this_link.addClass('navActive');
                                }
                                if(current === "/greenbase/"){
                                    $(".main-nav-ul li a").removeClass("navActive");
                                }
                            })
                        })
                </script>
                <div class="col-md-10 cus-col10 mobile-header">
                    <!-- <img id="burger" src=<?php echo base_url('assets/images/burger.svg');?> alt="burger"> -->
                    <div class="cus-container" id="burger">
                        <input type="checkbox" name="nav-toggle" id="nav-toogle">
                        <label for="nav-toogle" class="menu">
                            <span class="hamburger"></span>
                        </label>
                    </div>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="<?php echo base_url(); ?>our-legacy">OUR LEGACY</a>
                    <a href="<?php echo base_url(); ?>value-proposition">VALUE PROPOSITION</a>
                    <a href="<?php echo base_url(); ?>location" id="do">OUR LOCATIONS</a>
                    <a href="<?php echo base_url(); ?>clients">OUR CLIENTS</a>
                    <a href="<?php echo base_url(); ?>news">NEWS</a>
                    <a href="<?php echo base_url(); ?>gallery">GALLERY</a>
                    <a href="<?php echo base_url(); ?>blogs">BLOGS</a>
                    <a href="<?php echo base_url(); ?>contact">CONTACT US</a>
                </div>
                <script>
                    $(function () {
                        var current = location.pathname;
                        $('.sidenav a').each(function () {
                            var this_link = $(this);
                            // if the current path is like this link, make it active
                            if (this_link.attr('href').indexOf(current) !== -1) {
                                this_link.addClass('mobilenav__active');
                            }
                            if(current === "/greenbase/"){
                                $(".sidenav a").removeClass("mobilenav__active");
                            }
                        })
                    })
            </script>
            </div>
        </div>
    </header>