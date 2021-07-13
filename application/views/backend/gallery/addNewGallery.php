<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <!-- <h2 class="text-4xl mb-4">Infrastructure</h2> -->
            <div class="form-group relative">
                <input type="text" class="form-control" id="Category" aria-describedby="Category"
                    placeholder="Enter Category" value="Infrastructure">
                <button type="button" class="btn btn-primary absolute top-0 right-0"> Save</button>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newAlbumModal">
                Add New Album
            </button>
        </div>
        <div class="col-md-3">
            <div class="albumWrapper cursor-pointer shadow rounded-md p-3">
                <img src=<?php echo base_url('assets/images/chennai/chennai1.jpg')?> alt="album" class="w-100 h-40
                object-cover">
                <h5 class="text-xl my-2">Oragadam</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="albumWrapper cursor-pointer shadow rounded-md p-3">
                <img src=<?php echo base_url('assets/images/chennai/chennai1.jpg')?> alt="album" class="w-100 h-40
                object-cover">
                <h5 class="text-xl my-2">Talegaon</h5>
            </div>
        </div>
    </div>
</div>



<!-- MODAL -->
<!-- NEW NEWS ADD MODAL -->
<div class="modal fade" id="newAlbumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Albums</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="Album_Name">Album Name</label>
                        <input type="text" class="form-control" id="Album_Name" aria-describedby="Category"
                            placeholder="Enter Album Name">
                    </div>
                    <div class="form-group">
                        <label for="Album_Description">Album Description</label>
                        <input type="text" class="form-control" id="Album_Description" aria-describedby="Category"
                            placeholder="Enter Category">
                    </div>
                    <div class="form-group">
                        <label for="albumImage">Upload Images For Album</label>
                        <input type="file" class="form-control-file" id="albumImage" multiple="true" accepts="image/*">
                    </div>
                </form>
                <div id='previewAlbumImage' class="flex flex-wrap">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" onclick="addNewGallery()">Save Category</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        var albumImage = [];
        $('#albumImage').on('change', function () {
            for (i = 0; i < this.files.length; i++) {
                albumImage.push(URL.createObjectURL(this.files[i]))
            }
            var img = albumImage.map((albumImg, idx) => {
                return `<img src=${albumImg} alt="" class="w-20 h-20 object-cover mr-3 mb-3">`
            }).join(' ');
            document.getElementById('previewAlbumImage').innerHTML = img;
        });
    });
</script>