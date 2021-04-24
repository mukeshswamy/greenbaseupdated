<?php if($this->session->userdata('mail')){?>
<!-- When session is set -->
<?php }else{?>
<!-- When -->
<?php }?>
<script type="text/javascript">
	tinymce.init({
		selector: "#blogsNewsContent",
	});
</script>
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
				<div class="mb-3" style="display: none;">
					<label for="CoverImage" class="form-label">News Cover Image</label>
					<input
						class="form-control"
						type="file"
						id="blogsCoverImage"
						name="blogsCoverImage"
						capture
					/>
				</div>
				<div class="mb-3" id="imgcontainer">
					<img src="" alt="" id="coverImageEdit">
					<input type="text" id="hiddenEditImg" style="display: none;"  name="hid">
				</div>
				<div class="mb-3">
					<label for="NewsContent" class="form-label">News Content</label>
					<textarea
						class="form-control"
						id="blogsNewsContent"
						rows="3"
						name="blogsNewsContent"
					></textarea>
				</div>
				<button type="button" class="btn btn-primary" id="saveNews">
					update changes
				</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	

	$(document).ready(function () {
		$("#blogsCoverImage").change(function(){
			if ( this.files && this.files[0] ){
				$('#coverImageEdit').attr('src', 
				window.URL.createObjectURL(this.files[0]));
			}
		});
		var url = window.location.pathname;
		var URL_id = url.substring(url.lastIndexOf("/") + 1);
		// GET SINGLE DATA
		$.ajax({
			type: "get",
			url: "<?php echo base_url();?>Blogs/getSingleBlogsItems/"+URL_id,
			processData: false,
			contentType: false,
			success: function (responce) {
				if(responce.message === "Blogs Found"){
					var con = responce?.data[0].blog_content
					console.log(con)
					$("input[name='blogsMainHeadline']").val(responce?.data[0].blog_title);
					$("input[name='blogsdescription']").val(responce?.data[0].blog_description);
					$("textarea[name='blogsNewsContent']").val(responce?.data[0].blog_content);
					$('#coverImageEdit').attr('src', '<?php echo base_url()?>assets/images/uploads/blogs/'+ responce?.data[0].blog_media )
					$("input[name='hid']").val(responce?.data[0].blog_media);
					tinyMCE.get("blogsNewsContent").setContent(con);
				}
			},
			error: function (errorResponce) {
				console.log(errorResponce.responseJSON);
			},
		});

		$("#saveNews").on("click", function () {
			// console.log($("input[name='blogsMainHeadline']").val());
			// console.log($("input[name='blogsdescription']").val());
			// console.log($("#blogsCoverImage")[0].files[0]);


			// // to populate content in tinyMCE
			// tinyMCE.get("blogsNewsContent").setContent(con);
			// // To get content from tinyMCE to post

			// console.log(tinyMCE.get("blogsNewsContent").getContent());

			var fd = new FormData();
			fd.append("editMainHeadline", $("input[name='blogsMainHeadline']").val());
			fd.append("editdescription", $("input[name='blogsdescription']").val());
			fd.append("editNewsContent", tinyMCE.get("blogsNewsContent").getContent());
			if(!$("#blogsCoverImage")[0].files[0]){
				fd.append("editCoverImage", $("input[name='hid']").val());
			}
			if($("#blogsCoverImage")[0].files[0] !== undefined){
				fd.append("editCoverImage", $("#blogsCoverImage")[0].files[0]);
			}
			$.ajax({
				type: "post",
				url: "<?php echo base_url();?>Blogs/updateblog/"+URL_id,
				data: fd,
				processData: false,
				contentType: false,
				success: function (responce) {
					if (responce.message === "Blogs updated") {
						window.location.href = '<?php echo base_url()?>blogspage'
					}
				},
				error: function (errorResponce) {
					console.log(errorResponce.responseJSON);
				},
			});
		});
		$('#coverImageEdit').on('click', function(e){
			$('#blogsCoverImage').click();
		});
	});
</script>
