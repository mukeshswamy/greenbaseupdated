<div style="background-color: #00689f">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard__header">
                    <p>ABOUT DASHBOARD</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px; margin-bottom: 20px">
    <div class="row">
        <div class="col-md-12">
            <div id="accordion-about">
                <div class="card">
                    <div class="card-header" id="headingOne-about">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne-about"
                                aria-expanded="true" aria-controls="collapseOne-about">
                                Section 1: Banner and Caption
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne-about" class="collapse show" aria-labelledby="headingOne-about"
                        data-parent="#accordion-about">
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="about_banner_image">About Banner Image</label>
                                    <input type="file" class="form-control-file" id="about_banner_image">
                                    <small id="emailHelp" class="form-text text-muted">NOTE: If the above uploaded
                                        images is higher resolution, the site will auto optimize the image</small>
                                </div>
                                <div class="form-group">
                                    <label for="description_left">Description Left</label>
                                    <textarea class="form-control" id="description_left" rows="3" placeholder="Description..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description_right">Description Right</label>
                                    <textarea class="form-control" id="description_right" rows="3" placeholder="Description..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingtwo-about">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsetwo-about"
                                aria-expanded="true" aria-controls="collapsetwo-about">
                                Section 2: Vision and mission
                            </button>
                        </h5>
                    </div>
                    <div id="collapsetwo-about" class="collapse" aria-labelledby="headingtwo-about"
                        data-parent="#accordion-about">
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="vision_banner_image">Vision and mission Banner Image</label>
                                    <input type="file" class="form-control-file" id="vision_banner_image">
                                    <small id="emailHelp" class="form-text text-muted">NOTE: If the above uploaded
                                        images is higher resolution, the site will auto optimize the image</small>
                                </div>
                                <div class="form-group">
                                    <label for="vision_state">Vision Statement</label>
                                    <textarea class="form-control" id="vision_state" rows="3" placeholder="vision_state..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description_right">Mission Statement</label>
                                    <input type="text" class="form-control" placeholder="Mission 1" style="margin-bottom: 10px;">
                                    <input type="text" class="form-control" placeholder="Mission 2" style="margin-bottom: 10px;">
                                    <input type="text" class="form-control" placeholder="Mission 3" style="margin-bottom: 10px;">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>