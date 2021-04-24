<div style="background-color: #00689f">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard__header">
                    <p>HOME DASHBOARD</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px; margin-bottom: 20px">
    <div class="row">
        <div class="col-md-12">
            <div id="accordion-home">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Section 1: Banner and Caption
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordion-home">
                        <div class="card-body">
                            <form method="POST" class="home-edit-form" id="home-edit-form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="home_banner_image">Home Banner Image</label>
                                    <input type="file" class="form-control-file" id="home_banner_image">
                                    <small id="emailHelp" class="form-text text-muted">NOTE: If the above uploaded
                                        images is higher resolution, the site will auto optimize the image</small>
                                </div>
                                <button type="submit" class="btn btn-primary save-edit-form">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Section 2: Video
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordion-home">
                        <div class="card-body">
                            <form method="POST" class="home-edit-form">
                                <div class="form-group">
                                    <label for="home_testiomoy_video">Video</label>
                                    <input type="file" class="form-control-file" id="home_testiomoy_video">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour"
                                aria-expanded="false" aria-controls="collapseThree">
                                Section 3: Footer Information
                            </button>
                        </h5>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion-home">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="footer_address">Address</label>
                                <textarea class="form-control" id="footer_address" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="copyright">Copyright</label>
                                <input type="text" class="form-control" id="copyright"
                                    aria-describedby="emailHelp" placeholder="© 2020 - All rights reserved">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery -->

<script type="text/javascript">
    $(document).ready(function(){
        $('#home-edit-form').on('submit',function(event){
            event.preventDefault();
            var fd = new FormData();
            fd.append("editCoverImage", $("#home_banner_image")[0].files[0]);
            $.ajax({
                type: "POST",
                url:"<?php echo base_url();?>News/updatenews/"+URL_id,
                data: fd,
                processData: false,
				contentType: false,
                success: function (response) {
					console.log(response)
				},
				error: function (errorResponse) {
					console.log(errorResponse.responseJSON);
				},
            });
        });
    });
</script>