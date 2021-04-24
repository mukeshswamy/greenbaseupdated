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
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Sr.no</th>
						<th scope="col">First</th>
						<th scope="col">Last</th>
						<th scope="col">Handle</th>
						<th scope="col" style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td class="action__tableRow">
							<button
								type="button"
								class="btn btn-info"
								data-toggle="modal"
								data-target="#editAlbumModal"
							>
								Edit
							</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
						<td class="action__tableRow">
							<button type="button" class="btn btn-info" data-toggle="modal"
              data-target="#editAlbumModal">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
						<td class="action__tableRow">
							<button type="button" class="btn btn-info" data-toggle="modal"
              data-target="#editAlbumModal">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
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
			<div class="modal-body">...</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- EDIT NEWS MODAL -->
<div
	class="modal fade"
	id="editAlbumModal"
	tabindex="-1"
	role="dialog"
	aria-labelledby="exampleModalLongTitle"
	aria-hidden="true"
>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Edit Album</h5>
				<button
					type="button"
					class="close"
					data-dismiss="modal"
					aria-label="Close"
				>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">...</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
