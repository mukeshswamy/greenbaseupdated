<?php if($this->session->userdata('mail')){?>
<!-- When session is set -->
<?php }else{?>
<!-- When -->
<?php }?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<form>
				<div class="mb-3">
					<label for="MainHeadline" class="form-label">Main Headline</label>
					<input
						type="text"
						class="form-control"
						id="blogsMainHeadline"
						placeholder="Headline"
						name="blogsMainHeadline"
					/>
				</div>
				<div class="mb-3">
					<label for="MainHeadline" class="form-label">News Description</label>
					<input
						type="text"
						class="form-control"
						id="blogsdescription"
						placeholder="Description"
						name="blogsdescription"
					/>
				</div>
				<div class="mb-3">
					<label for="CoverImage" class="form-label">News Cover Image</label>
					<input
						class="form-control"
						type="file"
						id="blogsCoverImage"
						name="blogsCoverImage"
					/>
				</div>
				<div class="mb-3">
					<label for="NewsContent" class="form-label">News Content</label>
					<textarea
						class="form-control"
						id="blogsContent"
						rows="3"
						name="blogsContent"
					></textarea>
				</div>
                <button type="button" class="btn btn-primary" id="saveNews">Add Blogs</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    tinymce.init({
      selector: '#blogsContent'
    });
    
  $(document).ready(function() {
      
      $("#saveNews").on('click', function() {
          var fd = new FormData();
		  fd.append('blogsHead', $("input[name='blogsMainHeadline']").val())
		  fd.append('blogsDescription', $("input[name='blogsdescription']").val())
		  fd.append("blogsContent", tinyMCE.get("blogsContent").getContent());
		  fd.append("blogsCoverImage", $("#blogsCoverImage")[0].files[0]);
		  $.ajax({
				type: "post",
				url: "Blogs/add_blogs",
				data: fd,
				processData: false,
				contentType: false,
				success: function (responce) {
					console.log(responce);
					if (responce.message === "Blogs Added") {
						window.location.assign("blogspage");
					}
				},
				error: function (errorResponce) {
					console.log(errorResponce.responseJSON);
				},
			});
      });
  });

</script>