<?php if($this->session->userdata('mail')){?>
<!-- When session is set -->
<?php }else{?>
<!-- When session is not set -->
<?php }?>
<div class="container" style="margin-top: 40px">
	<div class="row">
		<div class="col-md-12" style="margin-bottom: 40px">
			<button
				type="button"
				class="btn btn-primary"
				data-toggle="modal"
				data-target="#newAlbumModal"
			>
				Add New Album
			</button>
		</div>
		<div class="col-md-3">
            <div class="albumWrapper cursor-pointer shadow rounded-md p-3">
                <img src=<?php echo base_url('assets/images/chennai/chennai1.jpg')?> alt="album" class="w-100 h-40 object-cover">
                <h5 class="text-xl my-2">Infrastructure</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="albumWrapper cursor-pointer shadow rounded-md p-3">
                <img src=<?php echo base_url('assets/images/chennai/chennai1.jpg')?> alt="album" class="w-100 h-40 object-cover">
                <h5 class="text-xl my-2">Events</h5>
            </div>
        </div>
	</div>
</div>

<!-- MODAL -->
<!-- NEW NEWS ADD MODAL -->
<div
	class="modal fade"
	id="newAlbumModal"
	tabindex="-1"
	role="dialog"
	aria-labelledby="exampleModalLongTitle"
	aria-hidden="true"
>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Add Albums</h5>
				<button
					type="button"
					class="close"
					data-dismiss="modal"
					aria-label="Close"
				>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="Category">Category</label>
						<input type="text" class="form-control" id="Category" aria-describedby="Category"
							placeholder="Enter Category">
					</div>
				</form>
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
	function addNewGallery(){
		location.href="galleryadd"
	}
</script>
