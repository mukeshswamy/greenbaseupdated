<!-- SECTION 1 GALLERY -->
<style>
	.mainSectionHeight {
		min-height: calc(100vh - 190px);
	}

	.imagesMainContainer .carousel-inner,
	.imagesMainContainer .carouselPop .carousel-item,
	.imageCarousel-lightBox {
		min-height: 34rem;
		height: 34rem;
		cursor: pointer;
	}

	.imagesMainContainer .carouselPop .carousel-item img {
		object-fit: cover;
	}

	.carouselOverLay {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		background-color: #00000094;
		z-index: 1;
		transition: all 0.5s;
	}

	.CategoryOnCarousel {
		position: absolute;
		bottom: 25px;
		left: 35px;
		font-family: "D-DIN Condensed";
		font-weight: normal;
		font-size: 70px;
		color: white;
		z-index: 2;
		transition: all 0.5s;
		text-transform: uppercase;
	}

	.carouselOverLay:hover {
		opacity: 0.5;
	}

	.imageCarousel-lightBox {
		display: none;
	}

	.prev,
	.next {
		cursor: pointer;
		position: absolute;
		top: 50%;
		width: auto;
		padding: 16px;
		margin-top: -50px;
		color: white;
		font-weight: bold;
		font-size: 20px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
		user-select: none;
		-webkit-user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
		right: 0;
		border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover,
	.next:hover {
		background-color: rgba(0, 0, 0, 0.8);
	}

	.imagePreview {
		overflow: auto;
		white-space: nowrap;
		text-align: center;
		background-color: rgba(0, 0, 0, 0.452);
		padding-left: 15px;
		padding-right: 15px;
	}

	.imagePreview::-webkit-scrollbar {
		display: none;
	}

	.imagePreview div {
		display: inline-block;
		width: 10rem;
		height: 6rem;
		cursor: pointer;
	}

	.imagePreview div img {
		object-fit: cover;
	}
	.videoContainer{
		height: 30rem;
	}
</style>
<section class="mainSectionHeight">
	<div class="container-fluid cus-container-fluid">
		<div class="row align-items-center">
			<div class="px-4">
				<div class="gallery-head-wrapper">
					<div class="gallery_headContainer">
						<div class="gallery-heading">GALLERY</div>
					</div>
					<ul class="gallery-list" id="gallery-list">
						<!-- LIST OF GALLERY WILL POPULATE HERE -->
					</ul>
				</div>
			</div>
			<div class="offset-md-3 col-md-9">
				<!-- Images -->
				<div class="imagesMainContainer" id="mainContainer">
					<!-- FADER -->
					<div
						id="carouselExampleFade"
						class="carousel slide carousel-fade"
						data-ride="carousel"
					>
						<div class="carousel-inner">
							<div class="carouselOverLay"></div>
							<div id="carouselPop" class="w-100 h-100 carouselPop">
								<div class="carousel-item active">
									<img
										class="d-block w-100 h-100"
										src="<?php echo base_url(); ?>assets/images/chennai/chennai1.jpg"
										alt="First slide"
									/>
								</div>
								<div class="carousel-item">
									<img
										class="d-block w-100 h-100"
										src="<?php echo base_url(); ?>assets/images/chennai/chennai2.jpg"
										alt="Second slide"
									/>
								</div>
								<div class="carousel-item">
									<img
										class="d-block w-100 h-100"
										src="<?php echo base_url(); ?>assets/images/chennai/chennai3.jpg"
										alt="Third slide"
									/>
								</div>
							</div>
							<div class="CategoryOnCarousel">
								<span class="d-block" id="CategoryName">
									INDUSTRIAL PARKS
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Videos -->
				<div class="videoSection imagesMainContainer" id="videoSection">
					<!-- <div>
						<iframe style="width: 100%; height: 250" src="https://www.youtube.com/embed/m57KlZFDaVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div> -->
				</div>
				<!-- Lightbox -->
				<div class="lightboxContainer d-none" id="lightContainer">
					<div class="lightBoxWrapper relative">
						<div class="lightBoxPop" id="lightBoxPop">
							<!-- <div class="imageCarousel-lightBox">
								<img
									class="d-block w-100 h-100"
									src="<?php echo base_url(); ?>assets/images/chennai/chennai1.jpg"
									alt="First slide"
								/>
							</div>
							<div class="imageCarousel-lightBox">
								<img
									class="d-block w-100 h-100"
									src="<?php echo base_url(); ?>assets/images/chennai/chennai2.jpg"
									alt="First slide"
								/>
							</div> -->
						</div>
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<div class="imagePreview w-100 mt-4 pt-2" id="lightWrapper">
						<!-- <div>
							<img
								onclick="currentSlide(1)"
								class="d-block w-100 h-100"
								src="<?php echo base_url(); ?>assets/images/chennai/chennai1.jpg"
								alt="First slide"
							/>
						</div>
						<div>
							<img
								onclick="currentSlide(2)"
								class="d-block w-100 h-100"
								src="<?php echo base_url(); ?>assets/images/chennai/chennai2.jpg"
								alt="First slide"
							/>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal End -->
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
	charset="utf-8"
></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript">
	var mainContainer = document.getElementById("mainContainer");
	var lightContainer = document.getElementById("lightContainer");
	var gallery = [
		{
			category: "industrial parks",
			video: false,
			albums: [
				{
					album: "oragadam",
					albumSlug: "oragadam-infra",
					pics: [
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/chennai/chennai1.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/chennai/chennai2.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/chennai/chennai3.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/chennai/chennai4.jpg",
						},
					],
				},
				{
					album: "talegaon",
					albumSlug: "talegaon-infra",
					pics: [
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_1.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_2.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_3.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_4.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_5.jpg",
						},
					],
				},
			],
		},
		{
			category: "events",
			video: false,
			albums: [
				{
					album: "oragadam",
					albumSlug: "oragadam-event",
					pics: [
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/vestas/vestas1.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/vestas/vestas2.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/vestas/vestas4.jpg",
						},
						{
							imageURL:
								"<?php echo base_url(); ?>assets/images/vestas/vestas5.jpg",
						},
					],
				},
			],
		},
		{
			category: "videos",
			video: true,
			albums: [
				{
					album: "Greenbase Video",
					albumSlug: "video",
					videoTumbnail:
						'<?php echo base_url(); ?>assets/images/chennai/chennai4.jpg',
					videos: [
						{
							videoURL:
								'<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/m57KlZFDaVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
							videoURL:
								'<iframe width="783" height="573" src="https://www.youtube.com/embed/GOtbP8BeX30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
							videoURL:
								'<iframe width="950" height="536" src="https://www.youtube.com/embed/dq5JUanC0wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
							videoURL:
								'<iframe width="950" height="534" src="https://www.youtube.com/embed/1f8azPDFTsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
						},
					],
				},
			],
		},
	];

	var albums = [
		{
			albumName: "oragadam",
			albumSlug: "oragadam-infra",
			video: false,
			albumImage: [
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/chennai/chennai1.jpg",
				},
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/chennai/chennai2.jpg",
				},
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/chennai/chennai3.jpg",
				},
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/chennai/chennai4.jpg",
				},
			],
		},
		{
			albumName: "talegaon",
			albumSlug: "talegaon-infra",
			video: false,
			albumImage: [
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_1.jpg",
				},
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_2.jpg",
				},
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_3.jpg",
				},
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_4.jpg",
				},
				{
					imageURL:
						"<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_5.jpg",
				},
			],
		},
		{
			albumName: "oragadam",
			albumSlug: "oragadam-event",
			video: false,
			albumImage: [
				{
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
			],
		},
		{
			albumName: "GreenBase Video",
			albumSlug: "video",
			video: true,
			albumImage: [
				{
					imageURL:
						'<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/m57KlZFDaVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
				{
					imageURL:
					'<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/GOtbP8BeX30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
				{
					imageURL:
					'<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/dq5JUanC0wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
				{
					imageURL:
					'<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/1f8azPDFTsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
			],
		},
	];
	var galleryCategoryList = gallery.map((finaldata, index) => {
		return `<div class="gallery-list-wrpper" data-index="${index}">
					<li>
						<a href="javascript:void(0)" class="main-list ${index === 0 ? "gallery-list-active" : ""}" onClick="albumCategory('${finaldata.category}')" data-name= ${finaldata.category.replace(/[, ]+/g,"-")} data-index=${index}>${finaldata.category}</a>
					</li>
                    <div class="gallery__subListContainer ${index === 0 ? "gallery__subListContainer__Show" : ""} ">
						<ul>
							${finaldata.albums.map((subFinalList, index) => {
								return `<li><a href="javascript:void(0)" class="gallery_subList captalize" data-name="${subFinalList.albumSlug}" onClick="albumOpen('${subFinalList.albumSlug}')">${subFinalList.album}</a></li>`;
							}).join("")}
						</ul>
					</div>
				</div>`;
		}).join("");
	document.getElementById("gallery-list").innerHTML = galleryCategoryList;
	function albumCategory(categoryName) {
		mainContainer.style.display = "block";
		lightContainer.classList.add("d-none");
		var categoryCarousel = gallery.map((galleryData, idx) => {
			if (categoryName === galleryData.category && !galleryData.video) {
				$("#videoSection").hide();
				$("#CategoryName").text(galleryData.category);
				return galleryData.albums[0].pics.map((albums, index) => {
					return `<div class="carousel-item ${index === 0 ? "active" : ""}">
								<img class="d-block w-100 h-100" src=${albums.imageURL} alt="First slide" />
							</div>`;
						})
					.join("");
			}
			if (categoryName === galleryData.category && galleryData.video) {
				$("#CategoryName").text(galleryData.category);
				$("#videoSection").hide();
				return galleryData.albums[0].videos.map((albums, index) => {
					return `<div class="carousel-item ${index === 0 ? "active" : ""}">
								<img class="d-block w-100 h-100" src=${galleryData.albums[0].videoTumbnail} alt="First slide" />
							</div>`;
						}).join("");
					}
				}).join("");
			document.getElementById("carouselPop").innerHTML = categoryCarousel;
	}

	var slideIndex = 1;

	function albumOpen(albumName) {
		mainContainer.style.display = "none";
		lightContainer.classList.remove("d-none");
		var lightBox = albums.map((albumData, idx) => {
			if (albumData.albumSlug === albumName && albumData.video === false) {
				$("#lightContainer").show();
				return albumData.albumImage.map((albums, index) => {
					return `<div class="mx-1 videoContainer">
								<img onclick="currentSlide(${index + 1})" class="d-block w-100 h-100" src=${albums.imageURL} alt="First slide" style="object-fit:containe"/>
                            </div>`;
					}).join("");
			} 
		}).join("");
		document.getElementById("lightWrapper").innerHTML = lightBox;
		var lightBoxVideo = albums.map((albumData, idx) => {
			if (albumData.albumSlug === albumName && albumData.video === true) {
				$("#lightContainer").hide();
				$("#videoSection").show();
				return albumData.albumImage.map((albums, index) => {
					return `<div class="mx-1 mb-1 videoContainer">
								${albums.imageURL}
                            </div>`;
					}).join("");
			} 
		}).join("");
		document.getElementById("videoSection").innerHTML = lightBoxVideo;
		var albumElem = albums.map((albumData, idx) => {
			if (albumData.albumSlug === albumName) {
				return albumData.albumImage.map((albums, index) => {
					return `<div class="imageCarousel-lightBox">
                                <img class="d-block w-100 h-100" src=${albums.imageURL} alt="First slide" style="object-fit:cover"/>
                            </div>`;
					}).join("");
			}
		}).join("");
		document.getElementById("lightBoxPop").innerHTML = albumElem;
		showSlides(1);
	}

	// showSlides(slideIndex);
	function plusSlides(n) {
		showSlides((slideIndex += n));
	}
	function currentSlide(n) {
		showSlides((slideIndex = n));
	}
	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("imageCarousel-lightBox");
		if (n > slides.length) {
			slideIndex = 1;
		}
		if (n < 1) {
			slideIndex = slides.length;
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slides[slideIndex - 1].style.display = "block";
	}
</script>
