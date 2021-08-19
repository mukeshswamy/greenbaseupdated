<!-- SECTION 1 GALLERY -->
<style>

</style>
<section class="gallery-section content setMaxWidth">
	<div class="container-fluid cus-container-fluid mrb">
		<div class="row">
			<div class="col-md-2 cus-col-md-4">
				<div class="gallery-head-wrapper">
					<div class="gallery_headContainer">
						<div class="gallery-heading">GALLERY</div>
					</div>
					<ul class="gallery-list" id="gallery-list">
						<!-- LIST OF GALLERY WILL POPULATE HERE -->
					</ul>
					<div class="newsheader__yearMobile">
						<select name="years" id="years">
							<option value="Chennai">Chennai</option>
							<option value="Pune">Pune</option>
						</select>
					</div>
					<div class="newsheader__monthsMobile">
						<select name="months" id="months">
							<option value="infrastructure">Infrastructure</option>
							<option value="events">Events</option>
							<option value="greenbase">Video</option>
						</select>
					</div>
				</div>
			</div>
			<div class="content-container-gallery">
				<!-- INFRASTRUCTURE -->
				<div class="col-md-9 cus-col-md-8 tab-container-gallery" data-index="0">
					<div class="row" id="gallery">
					</div>
				</div>
				<!-- Cooper -->
				<div class="row imageGridEvent" style="display: none" data-index="0">
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/g1.jpg') ?> alt="g1" class="img-grid">
						</div>
					</div>
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/g2.jpg') ?> alt="g1" class="img-grid">
						</div>
					</div>
					<div class="col-md-12 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/g3.jpg') ?> alt="g1" class="img-grid">
						</div>
					</div>
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/g4.jpg') ?> alt="g1" class="img-grid">
						</div>
					</div>
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/g5.jpg') ?> alt="g1" class="img-grid">
						</div>
					</div>
				</div>
				<!-- Vistas -->
				<div class="row imageGridEvent" style="display: none" data-index="1">
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/vestas/vestas1.jpg') ?> alt="g1"
							class="img-grid">
						</div>
					</div>
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/vestas/vestas2.jpg') ?> alt="g1"
							class="img-grid">
						</div>
					</div>
					<div class="col-md-12 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/vestas/vestas4.jpg') ?> alt="g1"
							class="img-grid">
						</div>
					</div>
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/vestas/vestas5.jpg') ?> alt="g1"
							class="img-grid">
						</div>
					</div>
					<div class="col-md-6 gallery-img-tumbnail">
						<div class="img-card-div">
							<img src=<?php echo base_url('assets/images/vestas/vestas6.jpg') ?> alt="g1"
							class="img-grid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Image Modal -->
<div id="mainModal" class="mainModal">
	<span class="closeGalleryModal" onclick="closeGalleryModal()">&times;</span>
	<div class="gallery-modal-content" id="galleryContent">
	</div>
	<div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
</div>
<!-- Modal End -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript">
	var galleryitems = {
		list: [{
			id: "0",
			item: "Industrial park",
			albums: [{
				id: "0",
				albumname: "Oragadam",
				caption: "Oragadam Infrastructure",
				tumbnail: '<?php echo base_url(); ?>assets/images/chennai/chennai1.jpg',
				pics: [{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai1.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai2.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai3.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai4.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/oragadam_infra.png",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/orginfra2.png",
				},
				]
			},
			{
				id: "1",
				albumname: "Talegaon",
				caption: "Talegaon Infrastructure",
				tumbnail: "<?php echo base_url(); ?>assets/images/pune/pune19.jpg",
				pics: [{
					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune1.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune2.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune3.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune4.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune5.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune6.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune7.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune8.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune9.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune10.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune11.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune12.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune13.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune14.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune15.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune16.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune17.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune18.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune19.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune20.png",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune21.png",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune22.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/pune/pune23.jpg",
				},
				]
			},
			],
		},
		{
			id: "1",
			item: "events",
			albums: [{
				id: "0",
				albumname: "Talegaon",
				caption: "Ground Breaking Ceremony for CooperStandard at Talegaon",
				tumbnail: "<?php echo base_url(); ?>assets/images/g1.jpg",
				pics: [{

					imageURL: "<?php echo base_url(); ?>assets/images/g1.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/g2.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/g3.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/g4.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/g5.jpg",
				},
				]
			},
			{
				id: "1",
				albumname: "Oragadam",
				caption: "Ground Breaking Ceremony for Vistas at Oragadam",
				tumbnail: "<?php echo base_url(); ?>assets/images/vestas/vestas6.jpg",
				pics: [{

					imageURL: "<?php echo base_url(); ?>assets/images/vestas/vestas1.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/vestas/vestas2.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/vestas/vestas4.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/vestas/vestas5.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/vestas/vestas6.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/vestas/v7.png",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/vestas/v8.png",
				},
				]
			},
			],
		},
		],
	};
	// console.log(galleryitems);
	var albumfilter = "Industrial park";

	var galleryLI = galleryitems.list
		.map((finaldata, index) => {
			return `<div class="gallery-list-wrpper" data-index="${index}">
						<li>
							<a href="javascript:void(0)" class="main-list ${albumfilter === finaldata.item ? "gallery-list-active" : ""}" data-name= ${finaldata.item.replace(/[, ]+/g,'-')} data-index=${finaldata.id}>${finaldata.item}</a>
						</li>
						<div class="gallery__subListContainer ${albumfilter === finaldata.item ? "gallery__subListContainer__Show" : ""} ">
							<ul>
								${finaldata.albums.map((subFinalList, index) => {
				return `<li><a href="javascript:void(0)" class="gallery_subList" data-name="${subFinalList.albumname}" onClick="albumOpen('${subFinalList.albumname}')">${subFinalList.albumname}</a></li>`;
			}).join("")}
							</ul>
						</div>
					</div>`;
		})
		.join("");
	document.getElementById("gallery-list").innerHTML = galleryLI;

	// <div class="img-overlay"></div>
	$(document).ready(function () {
		var galleryTab = galleryitems.list.map(function (subarray) {
			if (subarray.item === "Industrial park") {
				return subarray.albums.map(function (album) {
					var content = `
						<div class="col-md-6 gallery-img-tumbnail">
							<div class="img-card-div infrastructure" data-index="${album.id}" data-id="${album.id}" onClick="albumOpen('${album.albumname}')">
								
								<img src=${album.tumbnail} loading="lazy" alt="${album.albumname}" class="img-grid" >
								<div class="img-caption">
									<h5>${album.caption}</h5>
								</div>
							</div>
						</div>`;
					return content;
				}).join('');
			}
		}).join('');
		document.getElementById("gallery").innerHTML = galleryTab;
		$(".main-list").on("click", function () {
			albumfilter = $(this).data("name");
			var galleryTab = galleryitems.list.map(function (subarray) {
				if (subarray.item === albumfilter.replace(/[- ]/g,' ')) {
					return subarray.albums.map(function (album) {
						var content = `
						<div class="col-md-6 gallery-img-tumbnail">
							<div class="img-card-div infrastructure" data-index="${album.id}" data-id="${album.id}" onclick="albumOpen('${album.albumname}')">
								<div class="img-overlay"></div>
								<img src=${album.tumbnail} loading="lazy" alt="${album.albumname}" class="img-grid" >
								<div class="img-caption">
									<h5>${album.caption}</h5>
								</div>
							</div>
						</div>`;
						return content;
					}).join('');
				}
			}).join('');
			document.getElementById("gallery").innerHTML = galleryTab;
		});
	});

	$(".gallery_subList").on("click", function () {
		var albums = $(this).data("name");
		$(".gallery_subList").removeClass("active_subList");
		$(this).addClass("active_subList");
		var galleryInside = galleryitems.list.map(function (finalData) {
			return finalData.albums.map(function (subFinalData) {
				if (subFinalData.pics.length > 0) {
					if (subFinalData.albumname === albums) {
						return subFinalData.pics.map(function (subPics, idx) {
							var content = `
							<div class="col-md-6 gallery-img-tumbnail">
								<div class="img-card-div">
									<img src=${subPics.imageURL} loading="lazy" alt=${subFinalData.albumname}
										class="img-grid" onclick="openGalleryModal();currentSlide('${idx + 1}')">
								</div>
							</div>`;
							return content;
						}).join('');
					}
				}
			}).join('');
		}).join('');
		document.getElementById("gallery").innerHTML = galleryInside;
	});

	function albumOpen(albumName) {
		albumModalOpen(albumName);
		var galleryInside = galleryitems.list.map(function (finalData) {
			return finalData.albums.map(function (subFinalData) {
				if (subFinalData.pics.length > 0) {
					if (subFinalData.albumname === albumName) {
						return subFinalData.pics.map(function (subPics, idx) {
							var content = `
							<div class="col-md-6 gallery-img-tumbnail">
								<div class="img-card-div">
									<img src=${subPics.imageURL} alt=${subFinalData.albumname}
										class="img-grid" onclick="openGalleryModal();currentSlide('${idx + 1}')">
								</div>
							</div>`;
							return content;
						}).join('');
					}
				}
			}).join('');
		}).join('');
		document.getElementById("gallery").innerHTML = galleryInside;
	}
	function albumModalOpen(albumName) {
		var galleryContent = galleryitems.list.map(function (finalData) {
			return finalData.albums.map(function (subFinalData) {
				if (subFinalData.pics.length > 0) {
					if (subFinalData.albumname === albumName) {
						return subFinalData.pics.map(function (subPics, idx) {
							console.log("PICS", subPics);
							var content = `
							<div class="gallerySlides">
								<img class="gallerySlideImg" src=${subPics.imageURL}>
							</div>`;
							return content;
						}).join('');
					}
				}
			}).join('');
		}).join('');
		document.getElementById("galleryContent").innerHTML = galleryContent;
	}
	function openGalleryModal() {
		document.getElementById("mainModal").style.display = "block";
	}
	function closeGalleryModal() {
		document.getElementById("mainModal").style.display = "none";
	}
	var slideIndex = 1;
	showSlides(slideIndex);
	function currentSlide(idx) {
		showSlides(slideIndex = idx);
	}
	function plusSlides(n) {
		showSlides(slideIndex += n);
	}
	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("gallerySlides");
		if (n > slides.length) { slideIndex = 1 }
		if (n < 1) { slideIndex = slides.length }
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slides[slideIndex - 1].style.display = "block";
	}
</script>