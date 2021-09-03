<section class="section-contact setMaxWidth">
    <div class="contact-banner-div">
        <img src=<?php echo base_url('assets/images/contact_banner.jpg');?> alt="contact_banner" class="contact_banner">
        <div class="main-contact-text-wrapper">
            <div class="contactus-text" style="color: #3c5530;">
                CORPORATE
            </div></br>
            <div class="contactus-text" style="margin-top: 10px;color: #3c5530;">
                OFFICE
            </div>
        </div>
    </div>
    <div class="container-fluid cus-container-fluid mtTop m-px-15">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-text mr-bottom-40 removebr">
                    The Greenbase Corporate HQ is situated across a sprawling 35 acres of prime land with</br>abundant
                    greenery. An enticing spectacle, the corporate office acts as a prime portal in </br>enriching the
                    customer's multifarious requirements across a wide spectrum.
                </div>
                <div class="contact-text mr-bottom-40">
                    Greenbase - Industrial and Logistics Park</br>
                    Floor 3, Olympia, Technology Street, Hiranandani Business Park,</br>
                    Hiranandani Gardens, Powai, Mumbai – 400076, MH, India.<br class="forcebr">
                </div>
                <div class="contant__PhoneNumber mr-bottom-40">
                    <img src="<?php echo base_url('assets/images/call.svg');?>" alt="call">
                    <a href="tel:+91 7506805746">7506805746</a>
                </div>
            </div>
            <div class="col-md-6 spacing__tabPro">
                <div class="contact-text removebr">
                    If you would like to know more about Greenbase, please fill in the form below and </br>
                    we will reach out to you.
                </div>
                <form class="contact-form spacing__tabPro" method="post" action="<?php echo base_url()?>mail_send">
                    <div>
                        <input type="text" placeholder="Name" name="username" class="input-width-half" required>
                        <input type="email" placeholder="Email Id" name="email" class="input-width-half" required>
                    </div>
                    <div>
                        <input type="tel" placeholder="Phone Number" name="phone" class="input-width-full" required>
                    </div>
                    <div>
                    <textarea class="contactCommentArea" name="comment" placeholder="Comments"></textarea>
                    </div>
                    <div class="button-div-wrapper">
                        <button class="button-submit" type="submit" id="mail">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="contact-section-2 setMaxWidth">
    <div class="container-fluid">
        <div class="row">
            <div class="left-content-wrapper">
                <div class="careers-form-wrapper">
                    <div class="careers-head">
                        CAREERS
                    </div>
                    <div class="form-part-careers">
                        <h5>WORK WITH US</h5>
                        <p>If you are looking for an exciting career with the industry leader,</br>send in your resume to
                        </p>
                        <div>
                            <!-- <span><img src=<?php echo base_url('assets/images/mail.svg');?> alt="mail"
                                    class="mail-career"></span><span class="mail"><a href="mailto:careers@greenbase.com" class="mailto">careers@greenbase.com</a></span>
                            or
                            <span class="upload-span"><img src=<?php echo base_url('assets/images/upload.svg');?>
                                    alt="mail" class="upload-career"></span><span class="upload">Upload your CV</span> -->
                        </div>
                        <div class="form__part_resume">
                            <img src=<?php echo base_url('assets/images/mail.svg');?> alt="mail" class="mail_img">
                            <a href="mailto:careers@greenbase.com">careers@greenbase.com</a>
                            <p>or</p>
                            <img src=<?php echo base_url('assets/images/upload.svg');?> alt="upload" class="upload__Image">
                            <a href="mailto:careers@greenbase.com">Upload your CV</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-content-wrapper">
                <img src=<?php echo base_url('assets/images/cv.jpg');?> alt="resume" class="resume-img">
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION 2 MOBILE -->
<section class="contact-section-2-mobile">
    <div class="resume-wrapper">
        <div class="resume-image-wrapper">
            <img src=<?php echo base_url('assets/images/cv.jpg');?> alt="banner" class="cv_mobile">
            <div class="career_mobileHeading">
                CAREERS
            </div>
        </div>
        <div class="form-part-careers">
            <h5>WORK WITH US</h5>
            <p>If you are looking for an exciting career with the industry leader,</br>send in your resume to
            </p>
            <div class="footer__mailer">
                <div class="footer__mailId">
                    <img src=<?php echo base_url('assets/images/mail.svg');?> alt="mail" class="mail-career">
                    <a href="mailto:careers@greenbase.com" class="mailto">careers@greenbase.com</a>
                </div>
                <p>or</p>
                <div class="footer__upload">
                    <img src=<?php echo base_url('assets/images/upload.svg');?>
                        alt="mail" class="upload-career">
                    <!-- <span class="mailto">Upload your CV</span> -->
                    <a href="mailto:careers@greenbase.com" class="mailto">Upload your CV</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#mail').on('click',function(e){
            e.preventDefault();
            window.location.href = "<?php echo base_url()?>";
        });
    });
</script> -->
