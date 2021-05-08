<div class="contact-icons-wrapper">
    <a href="tel:+91 7506805746">
        <img src=<?php echo base_url('assets/images/call-modal.svg'); ?> alt="contact-icons" class="contact-icons" id="call-modal">
    </a>


    <a href="mailto:marketing@greenbase.com">
        <img src=<?php echo base_url('assets/images/mail-modal.svg'); ?> alt="contact-icons" class="contact-icons" id="mail-modal">
    </a>

    <img id="contact-modal" src=<?php echo base_url('assets/images/contact-modal.svg'); ?> alt="contact-icons" class="contact-icons" id="contact-modal">
</div>

<!-- DeskTop Footer -->
<footer class="footersection cus-padding-footer">
    <div class="container-fluid">
        <div class="row center-item">
            <div class="col-md-5 address-wrapper">
                <h4 class="m-0">Greenbase - Industrial and Logistics Park</h4>
                <div class="footer-address">
                    <p class="m-0">Floor 3, Olympia, Technology Steet, Hiranandani Business Park,
                        Hiranandani Gardens, Powai, Mumbai – 400076, MH, India</p>
                </div>
            </div>
            <div class="col-md-7 text-end">
                <ul class="footer-nav text-uppercase mb-2">
                    <li> <a href="our-legacy">our legacy</a></li>
                    <li> <a href="value-proposition">value proposition</a></li>
                    <li> <a href="location">our location</a></li>
                    <li> <a href="clients">our client</a></li>
                    <li> <a href="news">news</a></li>
                    <li> <a href="gallery">gallery</a></li>
                    <li> <a href="blogs">blogs</a></li>
                    <li> <a href="contact">contact us</a></li>
                </ul>
                <div class="group-icon-wrapper mb-2">
                    <p class="m-0">A Hiranandani Group - Blackstone JV</p>
                    <div class="footer-icons-brand ml-4">
                        <a href="http://">
                            <img src=<?php echo base_url('assets/images/linkedin_white.svg') ?> alt="twitterwhite">
                        </a>
                        <a href="http://">
                            <img src=<?php echo base_url('assets/images/youtube.svg') ?> alt="twitterwhite">
                        </a>
                        <a href="http://">
                            <img src=<?php echo base_url('assets/images/fbwhite.svg') ?> alt="twitterwhite">
                        </a>
                        <a href="http://">
                            <img src=<?php echo base_url('assets/images/twitterwhite.svg') ?> alt="twitterwhite">
                        </a>
                    </div>
                </div>
                <div class="copy-ryt-disclaimer-wrapper">
                    <p class="m-0">© 2020 - All rights reserved</p>
                    <p class="m-0 ml-3" id="disclaimer">Disclaimer</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Mobile Footer -->
<div class="mobile__footer">
    <div class="mobile__socialIcons__Container">
        <span class="mobile__footer_Socialicons">
            <a href="#">
                <img src=<?php echo base_url('assets/images/twitterwhite.svg') ?> alt="ico">
            </a>
        </span>
        <span class="mobile__footer_Socialicons">
            <a href="#">
                <img src=<?php echo base_url('assets/images/linkedin_white.svg') ?> alt="ico">
            </a>
        </span>
        <span class="mobile__footer_Socialicons">
            <a href="#">
                <img src=<?php echo base_url('assets/images/fbwhite.svg') ?> alt="ico">
            </a>
        </span>
    </div>
    <div class="mobile__footer__address">
        <strong>Greenbase - Industrial and Logistics Park</strong>
        <p>
            Floor 3, Olympia, Technology Steet, Hiranandani Business Park,
            Hiranandani Gardens, Powai, Mumbai – 400076, MH, India.
        </p>
    </div>
    <hr style="background-color: white;">
    </hr>
    <div class="mobile__footer__nav">
        <ul>
            <li><a href="aboutus">ABOUT US</a></li>
            <li><a href="whyus">WHY US</a></li>
            <li><a href="OUR LOCATIONS">OUR LOCATIONS</a></li>
            <li><a href="clients">OUR CLIENTS</a></li>
            <li><a href="news">NEWS</a></li>
            <li><a href="gallery">GALLERY</a></li>
            <li><a href="blogs">BLOGS</a></li>
            <li><a href="contact">CONTACT US</a></li>
            <li><a href="javascript:void(0);" id="disclaimerMobile">DISCLAMIER</a></li>
        </ul>
    </div>
    <p class="mobile__footer__copyryt">
        © 2020 - All rights reserved
    </p>
</div>
<div class="contactmodal" id="modalContact">
    <div class="contactmodalwrapper">
        <div class="contactmodalheader row">
            <div class="col-md-9 heading">
                GET IN TOUCH WITH US
            </div>
            <div class="col-md-3 cancel">
                <img id="cancel-modal" src=<?php echo base_url('assets/images/cancel_red.svg'); ?> alt="cancel" class="modal-cancel-img">
            </div>
        </div>
        <div class="contactmodalbody">
            <form class="contact-form" method="post" action="<?php echo base_url() ?>mail_send">
                <div>
                    <input type="text" name="username" placeholder="Name" class="input-width-half contact-input-width-half" required>
                    <input type="email" name="email" placeholder="Email Id" class="input-width-half contact-input-width-half" required>
                </div>
                <div>
                    <input type="text" placeholder="+91" disabled class="input-width-half phone-code" required>
                    <input type="tel" name="phone" placeholder="Phone Number" class="input-width-half phone-input" required>
                </div>
                <div>
                    <textarea style="width: 100%;" class="contactCommentArea" name="comment" placeholder="Comments"></textarea>
                </div>
                <div class="button-div-wrapper">
                    <button class="button-submit floatnormal" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="contactmodalfooter"></div>
    </div>
</div>
<div class="disclaimer-modal" id="disclaimer-modal">
    <span class="closeGalleryModal" id="closeDisclaimerModal">&times;</span>
    <div class="disclaimer-content">
        <h3>Disclaimer:</h3>
        <p>
            This website www.greenbase.com (“the Website”) is being maintained by the SPV’s who are
            developing the Industrial &amp; Logistic Parks under the brand name ‘Greenbase’. The Website
            access is provided to all those persons individuals or entities (“you”) subject to this
            agreement (“Agreement”) and on the following terms and conditions (the “Terms and
            Conditions”) .The use of any portion of this Website or any services made available through
            this Website (“the Services”) is subject to your acceptance of this Agreement and on the
            Terms and Conditions as published herein and/or as amended from time to time.
        </p>
        <p>
            Use of this Website is solely at our discretion, and we reserve the right to prohibit anyone
            from accessing, browsing, supplying information to or downloading information from this
            Website. You are not granted any rights in or to this Website, any Services or any
            Information, other than the limited right to use this Website, the Services or the Information
            according to the terms of this Agreement and the policies and procedures that we may adopt
            and make available on this Website from time to time. We reserve our right to terminate your
            access to this Website at any time.
        </p>
        <p>
            This Website contains information proprietary to us and our business partners and customers
            (the “Information”) including but not limited to: (i) the Website’s look, feel and embodied
            know-how, ideas and concepts; (ii) texts, illustrations, drawings, logos, marks and slogans;
            and (iii) information and data related to SPV’s its business partners and or their customers.
            This Website, including the Information is protected by Indian copyright law and
            international treaties. This Information and content of the Website may only be used for non-
            commercial, personal use and may not be reproduced, modified, licensed, transferred, sold or
            published for any purpose, in whole or in part, without our prior written consent.
        </p>
        <p>
            Your use of this Website, any of the Services or any of the Information is at your own risk.
            This Website, the Services and the Information are provided ‘as is’, without warranty of any
            kind, either express or implied, including without limitation, any warranty of merchantability,
            satisfaction, fitness for particular purpose, title or non-infringement. We make no
            commitment to update the Information or material. User accepts the risk that the operating
            system and software included in the Website, as well as all information of User that is
            included on the Website, from time to time may contain inaccuracies and may be adversely
            affected by computer viruses, unknown programming difficulties resulting in incorrect
            information or system malfunctions or shut-downs. However, we will use reasonable
            commercial efforts to correct any inaccuracies expressly made known to us and to correct
            and/or remove (as appropriate) any computer viruses and other system malfunctions and shut-
            downs that are within our control. In addition, we shall not be liable for any liability, loss,
            damage, cost or expense caused from error, omission, interruption, deletion, defect, delay in
            operation or transmission, loss of data, communication or line failure, theft or destruction,
            unauthorized access to, alteration of or use of the Website, or the actions of any other party
            involving the use of the Website.
        </p>
        <p>
            You have the sole responsibility for verifying the completeness and accuracy of all
            Information made available on this Website. We make no representations or warranties with
            respect to the customers, business partners, or the Information made available herein. Neither
            we nor any of our business partners warrants that using this Website, any of the Services or
            the Information will be uninterrupted or error free. Neither we nor any of our business
            partners shall be responsible for the content of any websites linked to this Website, neither
            does it constitute an endorsement for the products and services offered on those websites.
            Linking to other websites from this Website is at your own risk.
        </p>
        <p>
            Under no circumstances, will we or our officers, employees, directors, owners, business
            partners, agents or affiliates or the domain name owner be liable directly or indirectly to the
            User or any party claiming through it/them for any direct, special, punitive, indirect,
            incidental or consequential damages, including without limitation, claims for loss of data,
            goodwill, profits, use of money, interruption in use or availability of the Website, the
            Services or the Information, stoppage of other work or implementation of other assets,
            arising out of this Agreement, or the use of the Website, breach or failure of express or
            implied warranty, breach of contract, misrepresentation, negligence, strict liability in tort or
            otherwise and regardless of the nature or cause of such damages.
        </p>
        <p>
            All plans, specifications, designs, elevations, features, amenities, facilities and services
            mentioned in this Website are indicative of the kind of development proposed for respective
            projects and is not a representation, and its finality is subject to the approval of the respective
            authorities or as required in the interest of continuing improvement, without prior notice or
            obligation.
        </p>
        <p>
            To assist your navigation of the Website and prevention of fraud we may send “cookies”
            from the Website to your computer. We do not obtain personal data from your computer or
            gather personal information about you unless you personally give information to our server
            on the terms set out within the Website. Furthermore computer viruses are not passed through
            the use of “cookies”. You may choose to disallow “cookies” via your browser but the
            Website may not work properly as a result of this.
        </p>
        <p>
            We shall take all reasonable steps to exclude viruses from the Website but we cannot
            guarantee such exclusion and shall not be liable for any damages to your computer
            equipment, any loss or corruption of material or data of any material in transit or any loss or
            corruption of any material or data when downloaded on to your computer system or any other
            property, by reason of your use of, access to, or downloading of any material from, the
            Website howsoever otherwise. You should obtain all appropriate safeguards against viruses
            before accessing the Website, its contents and the underlying software and/or related
            software.
        </p>
        <p>
            By using this Website, you signify your acceptance of the Terms and Conditions. If you do
            not agree to these, please do not use our Website. We reserve our right and discretion, to
            change, modify, add, or remove portions from these Terms &amp; Conditions at any time so
            visitors are encouraged to review the Terms &amp; Conditions from time to time. Your continued
            use of our Website following the posting of changes to these Terms &amp; Conditions means you
            accept these changes.
        </p>
        <p>
            Any failure on our part to enforce the User’s strict performance of any provision of this
            Agreement and Terms and Conditions will not constitute a waiver of its right to subsequently
            enforce such provision or any other provision of this Agreement.
        </p>
        <p>
            The Website, Terms and Conditions shall be governed by the laws of India and the courts in
            Mumbai shall have exclusive jurisdiction in respect of any matter or dispute arising out of or
            in respect of the Website and the Terms and Conditions.
        </p>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
</script>
<script src=<?php echo base_url('assets/js/bootstrap.min.js'); ?>></script>
<script src=<?php echo base_url('assets/js/custom.js'); ?>></script>
</body>

</html>