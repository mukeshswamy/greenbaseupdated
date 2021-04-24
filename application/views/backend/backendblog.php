<?php if($this->session->userdata('mail')){?>
<!-- When session is set -->
<?php }else{?>
<!-- When session is not set -->
<?php }?>
<div class="container" style="margin-top: 40px">
	<div class="row">
		<div class="col-md-12" style="margin-bottom: 40px">
			<button type="button" class="btn btn-primary" id="addNewBlogs">
				Add New Blogs
			</button>
		</div>
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Sr.no</th>
						<th scope="col">Headline</th>
						<th scope="col">Description</th>
						<th scope="col" style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody id="newstablebody"></tbody>
			</table>
		</div>
	</div>
</div>
<!--  -->

<script type="text/javascript">
	function editBlogs(id) {
		console.log(id);
		window.location.href = `blogsedit/${id}`;
	}
	// DELETE DATA
	function deleteBlogs(id) {
		$.ajax({
			type: "delete",
			url: "Blogs/deleteblog/" + id,
			processData: false,
			contentType: false,
			success: function (responce) {
				console.log(responce);
				if (responce.message === "Blogs Deleted") {
					window.location.assign("blogspage");
				}
			},
			error: function (errorResponce) {
				console.log(errorResponce.responseJSON);
			},
		});
	}
	function timeConverter(UNIX_timestamp) {
		var a = new Date(UNIX_timestamp * 1000);
		var months = [
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		];
		var year = a.getFullYear();
		var month = months[a.getMonth()];
		var date = a.getDate();
		var hour = a.getHours();
		var min = a.getMinutes();
		var sec = a.getSeconds();
		var time = date + " " + month + " " + year;
		return time;
	}
	$(document).ready(function () {
		$("#addNewBlogs").click(function () {
			window.location.assign("blogsadd");
		});
		$("#editBlogs").click(function () {
			window.location.assign("blogsedit");
		});
		$.ajax({
			type: "get",
			url: "<?php echo base_url(); ?>Blogs/read_blogs/",
			processData: false,
			contentType: false,
			success: function (responce) {
				if (responce.message === "Blogs Data") {
					var tablebody = responce.data
						?.map((blogs, index) => {
							console.log(timeConverter(blogs.blog_createdAt));
							return `<tr>
										<th scope="row">${index + 1}</th>
											<td class="newtd">${blogs.blog_title}</td>
											<td class="newtd">${blogs.blog_description}</td>
											<td class="action__tableRow">
											<button
												type="button"
												class="btn btn-info editnewsbutton"
												data-toggle="modal"
												id="editNews"
												onclick=(editBlogs(${blogs.ID}))
											>
												Edit
											</button>
											<button type="button" onclick=(deleteBlogs(${
												blogs.ID
											})) class="btn btn-danger">Delete</button>
										</td>
									</tr>`;
						})
						.join("");
					document.getElementById("newstablebody").innerHTML = tablebody;
				}
			},
			error: function (errorResponce) {
				console.log(errorResponce.responseJSON);
			},
		});
	});
</script>

