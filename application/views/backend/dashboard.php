<?php if($this->session->userdata('mail')){?>
<!-- When session is set -->
<?php }else{?>
<!-- When session is not set -->
<?php }?>

<!-- <a href="<?php echo base_url();?>Auth/Logout">Logout</a> -->

<div style="background-color: #00689f;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard__header">
                    <p>WELCOME TO GREENBASE DASHBOARD</p>
                    <a href="<?php echo base_url();?>logout">LOGOUT</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-md-4 dashboard__modules" style="margin-top: 20px;">
            <a href="<?php echo base_url()?>home-dashboard">
                HOME
            </a>
        </div>
        <div class="col-md-4 dashboard__modules" style="margin-top: 20px;">
            <a href="<?php echo base_url()?>about-dashboard">
                ABOUT
            </a>
        </div>
        <div class="col-md-4 dashboard__modules" style="margin-top: 20px;">
            <a href="<?php echo base_url()?>whyus-dashboard">
                WHY US
            </a>
        </div>
        <div class="col-md-4 dashboard__modules" style="margin-top: 20px;">
            <a href="<?php echo base_url()?>clients-dashboard">
                OUR CLIENTS
            </a>
        </div>
        <div class="col-md-4 dashboard__modules" style="margin-top: 20px;">
            <a href="<?php echo base_url()?>newspages">
                NEWS
            </a>
        </div>
        <div class="col-md-4 dashboard__modules" style="margin-top: 20px;">
            <a href="<?php echo base_url()?>gallerypage">
                GALLERY
            </a>
        </div>
        <div class="col-md-4 dashboard__modules" style="margin-top: 20px;">
            <a href="<?php echo base_url()?>blogspage">
                BLOGS
            </a>
        </div>
    </div>
</div>
