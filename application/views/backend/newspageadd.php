<?php if ($this->session->userdata('mail')) { ?>
<!-- When session is set -->
<?php } else { ?>
<!-- When session is not set -->
<?php } ?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<form>
				<div class="mb-3">
					<label for="MainHeadline" class="form-label">Main Headline</label>
					<input
						type="text"
						class="form-control"
						id="MainHeadline"
						placeholder="Headline"
						name="newheadline"
					/>
				</div>
				<div class="mb-3">
					<label for="MainHeadline" class="form-label">News Description</label>
					<input
						type="text"
						class="form-control"
						id="description"
						placeholder="Description"
						name="description"
					/>
				</div>
				<div class="mb-3">
					<label for="CoverImage" class="form-label">News Cover Image</label>
					<input
						class="form-control"
						type="file"
						id="newsCoverImage"
						name="newsCoverImage"
					/>
				</div>
				<div class="mb-3">
					<label for="NewsContent" class="form-label">News Content</label>
					<textarea
						class="form-control"
						id="NewsContent"
						rows="3"
						name="NewsContent"
					></textarea>
				</div>
				<button type="button" class="btn btn-primary" id="saveNews">
					Save changes
				</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	tinymce.init({
		selector: "#NewsContent",
	});

	$(document).ready(function () {
		$("#saveNews").on("click", function () {
			var fd = new FormData();
			fd.append("newheadline", $("input[name='newheadline']").val());
			fd.append("description", $("input[name='description']").val());
			fd.append("NewsContent", tinyMCE.get("NewsContent").getContent());
			fd.append("newsCoverImage", $("#newsCoverImage")[0].files[0]);
			$.ajax({
				type: "post",
				url: "News/add_news",
				data: fd,
				processData: false,
				contentType: false,
				success: function (responce) {
					if (responce.message === "News Added") {
						window.location.assign("newspages");
					}
				},
				error: function (errorResponce) {
					console.log(errorResponce.responseJSON);
				},
			});
		});
	});
</script>

