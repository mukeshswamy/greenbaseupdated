<?php if($this->session->userdata('mail')){?>
<!-- When session is set -->
<?php }else{?>
<!-- When session is not set -->
<?php }?>
<script type="text/javascript">
	tinymce.init({
		selector: "#editNewsContent",
		height : "1200",
		extended_valid_elements: 'img[class=myclass|!src|border:0|alt|title|width|height|style]',
  		invalid_elements: 'strong,b,em,i',
  		content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
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
						id="editMainHeadline"
						placeholder="Headline"
						name="editMainHeadline"
					/>
				</div>
				<div class="mb-3">
					<label for="MainHeadline" class="form-label">News Description</label>
					<input
						type="text"
						class="form-control"
						id="editdescription"
						placeholder="Description"
						name="editdescription"
					/>
				</div>
				<div class="mb-3" style="display: none;">
					<label for="CoverImage" class="form-label">News Cover Image</label>
					<input
						class="form-control"
						type="file"
						id="editCoverImage"
						name="editCoverImage"
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
						id="editNewsContent"
						rows="3"
						name="editNewsContent"
						
					></textarea>
					
				</div>
				<button type="button" class="btn btn-primary" id="updateNews">
					Update changes
				</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	

	$(document).ready(function () {
		$("#editCoverImage").change(function(){
			if ( this.files && this.files[0] ){
				$('#coverImageEdit').attr('src', 
				window.URL.createObjectURL(this.files[0]));
			}
		});
		var url = window.location.pathname;
		var URL_id = url.substring(url.lastIndexOf('/') + 1);		
		// GET SINGLE DATA
		$.ajax({
			type: "get",
			url: "<?php echo base_url();?>News/getSingleNewsItems/"+URL_id,
			processData: false,
			contentType: false,
			success: function (responce) {
				if(responce.message === "News Found"){
					var con = responce?.data[0].news_content
					$("input[name='editMainHeadline']").val(responce?.data[0].news_headline);
					$("input[name='editdescription']").val(responce?.data[0].news_description);
					$("textarea[name='editNewsContent']").val(responce?.data[0].news_content);
					$('#coverImageEdit').attr('src', '<?php echo base_url()?>assets/images/uploads/news/'+ responce?.data[0].news_media )
					$("input[name='hid']").val(responce?.data[0].news_media);
					tinyMCE.get('editNewsContent').setContent(con);
				}
			},
			error: function (errorResponce) {
				console.log(errorResponce.responseJSON);
			},
		});

		// UPDATE NEWS
		$("#updateNews").on("click", function () {		
			var fd = new FormData();
			fd.append("editMainHeadline", $("input[name='editMainHeadline']").val());
			fd.append("editdescription", $("input[name='editdescription']").val());
			fd.append("editNewsContent", tinyMCE.get("editNewsContent").getContent());
			if(!$("#editCoverImage")[0].files[0]){
				fd.append("editCoverImage", $("input[name='hid']").val());
			}
			if($("#editCoverImage")[0].files[0] !== undefined){
				fd.append("editCoverImage", $("#editCoverImage")[0].files[0]);
			}
			$.ajax({
				type: "post",
				url: "<?php echo base_url();?>News/updatenews/"+URL_id,
				data: fd,
				processData: false,
				contentType: false,
				success: function (responce) {
					if (responce.message === "News updated") {
						window.location.href = '<?php echo base_url()?>newspages'
					}
				},
				error: function (errorResponce) {
					console.log(errorResponce.responseJSON);
				},
			});
		});

		$('#coverImageEdit').on('click', function(e){
			$('#editCoverImage').click();
		});
	});
</script>



<!-- <script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script> -->
