<!-- SECTION 1 GALLERY -->
<style>
	.mainSectionHeight {
		min-height: calc(100vh - 190px);
	}

	.imagesMainContainer .carousel-inner,
	.imageCarousel-lightBox {
		min-height: calc(100vh - 170px);
		cursor: pointer;
	}

	.imagesMainContainer .carouselPop .carousel-item {
		max-height: 34rem;
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
		backface-visibility: hidden;
		transition: opacity 0.5s ease-in-out;
		display: none;
		opacity: 0;
		/* transition-property: opacity;
		-webkit-box-align: center; */
	}

	.lighBox-Car-Active {
		visibility: visible;
		opacity: 1;
		display: block;
		transform: translate3d(0, 0, 0);
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

	.imagePreview div {
		display: inline-block;
		width: 10rem;
		height: 6rem;
		cursor: pointer;
	}

	.imagePreview div img {
		object-fit: cover;
	}

	.videoContainer {
		height: 30rem;
	}

	.imageCarousel-lightBox img {
		position: absolute;
	}

	@media screen and (max-width: 991px) and (min-width: 768px) {}

	@media screen and (max-width: 767px) and (min-width: 420px) {
		.cus-container-fluid {
			padding-left: 15px;
			padding-right: 15px;
		}
		.mainSectionHeight {
			min-height: calc(100vh - 250px);
		}
		.imagesMainContainer .carousel-inner{
			min-height: 100%;
			cursor: pointer;
		}

		.sticky-mobile {
			position: sticky;
			top: 75px;
			z-index: 1;
			background-color: white;
		}
		.mobile-select-category{
			border: none;
			border-bottom: 1px solid #0068a8;
			width: 7rem;
			text-transform: capitalize;
		}
		.imageCarousel-lightBox {
			min-height: calc(100vh - 350px);
		}
		.imageCarousel-lightBox img{
			object-fit: contain !important;
		}
	}

	@media screen and (max-width: 419px) and (min-width: 360px) {
		.cus-container-fluid {
			padding-left: 15px;
			padding-right: 15px;
		}

		.mainSectionHeight {
			min-height: calc(100vh - 250px);
		}

		.imagesMainContainer .carousel-inner{
			min-height: 100%;
			cursor: pointer;
		}

		.sticky-mobile {
			position: sticky;
			top: 75px;
			z-index: 1;
			background-color: white;
		}
		.mobile-select-category{
			border: none;
			border-bottom: 1px solid #0068a8;
			width: 7rem;
			text-transform: capitalize;
		}
		.imageCarousel-lightBox {
			min-height: calc(100vh - 350px);
		}
		.imageCarousel-lightBox img{
			object-fit: contain !important;
		}
	}
</style>
<section class="mainSectionHeight">
	<div class="container-fluid cus-container-fluid">
		<div class="row align-items-center">
			<div class="col-md-3 sticky-mobile">
				<div class="gallery-head-wrapper">
					<div class="gallery_headContainer">
						<div class="gallery-heading">GALLERY</div>
					</div>
					<ul class="gallery-list" id="gallery-list">
						<!-- LIST OF GALLERY WILL POPULATE HERE -->
					</ul>
					<select class="mobile-select-category d-block d-md-none mr-2" id="mobile-select-category">
						<option value="">Industrial Park</option>
						<option value="">Events</option>
						<option value="">videos</option>
					</select>
					<select class="mobile-select-category d-block d-md-none" id="mobile-select-album">
						<!-- <option value="">Oragadam</option>
						<option value="">Talegaon</option> -->
					</select>
				</div>
			</div>
			<div class="offset-md-3 col-md-9 pt-5">
				<!-- Images -->
				<div class="imagesMainContainer" id="mainContainer">
					<!-- FADER -->
					<div id="carouselExampleFade" data-interval="2000" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-inner">
							<div id="carouselPop" class="w-100 h-100 carouselPop">
							</div>
						</div>
					</div>
				</div>
				<!-- Videos -->
				<div class="videoSection imagesMainContainer" id="videoSection">
				</div>
				<!-- Lightbox -->
				<div class="lightboxContainer d-none" id="lightContainer">
					<div class="lightBoxWrapper relative">
						<!-- <div class="lightBoxPop" id="lightBoxPop">
						</div> -->
						<div id="carouselExampleFade1" data-interval="2000" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner carouselPop" id="lightBoxPop">
								<!-- <div id="lightBoxPop" class="w-100 h-100 carouselPop">
								</div> -->
							</div>
						</div>
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<div class="relative">
						<div class="imagePreview w-100 mt-2 pt-2" id="lightWrapper">
						</div>
						<a class="prev" style="top: 70%" id="slideLeft">&#10094;</a>
						<a class="next" style="top: 70%" id="slideRight">&#10095;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal End -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript">
	fetch(`<?php echo base_url(); ?>assets/js/gallery.json`).then(response => response.json()).then(json => console.log(json));
	var mainContainer = document.getElementById("mainContainer");
	var lightContainer = document.getElementById("lightContainer");
	const btnLeft = document.getElementById("slideLeft");
	const btnRight = document.getElementById("slideRight");
	btnLeft.onclick = function() {
		document.getElementById("lightWrapper").scrollLeft += 40;
	}
	btnRight.onclick = function() {
		document.getElementById("lightWrapper").scrollLeft -= 40;
	}
	var gallery = [{
			category: "industrial parks",
			subCategory: true,
			video: false,
			albums: [{
					album: "oragadam",
					albumSlug: "oragadam-infra",
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
							imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai5.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai6.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai7.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai8.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai9.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai10.jpg",
						},
						{

							imageURL: "<?php echo base_url(); ?>assets/images/chennai/oragadam_infra.png",
						},
						{

							imageURL: "<?php echo base_url(); ?>assets/images/chennai/orginfra2.png",
						},
					],
				},
				{
					album: "talegaon",
					albumSlug: "talegaon-infra",
					pics: [{
							imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_1.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_2.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_3.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_4.jpg",
						},
						{
							imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_5.jpg",
						},
					],
				},
			],
		},
		{
			category: "events",
			subCategory: false,
			video: false,
			albums: [{
				album: "oragadam",
				albumSlug: "oragadam-event",
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
					{
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
					{
						imageURL: "<?php echo base_url(); ?>assets/images/g6.jpg",
					},
					{
						imageURL: "<?php echo base_url(); ?>assets/images/g7.jpg",
					},
				],
			}, ],
		},
		{
			category: "videos",
			video: true,
			subCategory: false,
			albums: [{
				album: "Greenbase Video",
				albumSlug: "video",
				videoTumbnail: '<?php echo base_url(); ?>assets/images/chennai/chennai4.jpg',
				videos: [{
					videoURL: '<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/m57KlZFDaVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
					videoURL: '<iframe width="783" height="573" src="https://www.youtube.com/embed/GOtbP8BeX30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
					videoURL: '<iframe width="950" height="536" src="https://www.youtube.com/embed/dq5JUanC0wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
					videoURL: '<iframe width="950" height="534" src="https://www.youtube.com/embed/1f8azPDFTsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				}, ],
			}, ],
		},
	];

	var albums = [{
			albumName: "oragadam",
			albumSlug: "oragadam-infra",
			video: false,
			albumImage: [{
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
					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai5.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai6.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai7.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai8.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai9.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/chennai/chennai10.jpg",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/oragadam_infra.png",
				},
				{

					imageURL: "<?php echo base_url(); ?>assets/images/chennai/orginfra2.png",
				},
			],
		},
		{
			albumName: "talegaon",
			albumSlug: "talegaon-infra",
			video: false,
			albumImage: [{
					imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_1.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_2.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_3.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_4.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/talegaon/talegaon_Image_5.jpg",
				},
			],
		},
		{
			albumName: "oragadam",
			albumSlug: "oragadam-event",
			video: false,
			albumImage: [{
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
				{
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
				{
					imageURL: "<?php echo base_url(); ?>assets/images/g6.jpg",
				},
				{
					imageURL: "<?php echo base_url(); ?>assets/images/g7.jpg",
				},
			],
		},
		{
			albumName: "GreenBase Video",
			albumSlug: "video",
			video: true,
			albumImage: [{
					imageURL: '<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/qcGK6gh6W9U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
				{
					imageURL: '<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/m57KlZFDaVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
				{
					imageURL: '<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/GOtbP8BeX30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
				{
					imageURL: '<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/dq5JUanC0wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
				{
					imageURL: '<iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/1f8azPDFTsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
				},
			],
		},
	];
	let theInterval;

	function startSlide() {
		theInterval = setInterval(() => showSlides((slideIndex += 1)), 3000)
	}
	// Logic to get all the images from the object and add it in one array
	var allImages = [];
	gallery.map(categorys => categorys.albums.map((albums, idx) => albums.pics && albums.pics.map(images => allImages.push(images))))
	var galleryCategoryList = gallery.map((finaldata, index) => {
		if (finaldata.subCategory === true) {
			return `<div class="gallery-list-wrpper" data-index="${index}">
					<li>
						<a href="javascript:void(0)" class="main-list " onClick="albumCategory('${finaldata.category}')" data-name= ${finaldata.category.replace(/[, ]+/g,"-")} data-index=${index}>${finaldata.category}</a>
					</li>
                    <div class="gallery__subListContainer">
						<ul>
						${finaldata.albums.map((subFinalList, index) => {
								return `<li><a href="javascript:void(0)" class="gallery_subList captalize" data-name="${subFinalList.albumSlug}" onClick="albumOpen('${subFinalList.albumSlug}')">${subFinalList.album}</a></li>`;
							}).join("")}
						</ul>
					</div>
				</div>`
		} else {
			return `<div class="gallery-list-wrpper" data-index="${index}">
					<li>
						<a href="javascript:void(0)" class="main-list " onClick="albumCategory('${finaldata.category}')" data-name= ${finaldata.category.replace(/[, ]+/g,"-")} data-index=${index}>${finaldata.category}</a>
					</li>
				</div>`
		}
	}).join("");

	document.getElementById("gallery-list").innerHTML = galleryCategoryList;

	var galleryCategoryListMobile = gallery.map((finaldata, index) => {
		return `<option value=${finaldata.category.replace(/[, ]+/g,"-")} class="text-uppercase">${finaldata.category}</option>`
	}).join("");

	document.getElementById("mobile-select-category").innerHTML = galleryCategoryListMobile;



	let initialCarousel = allImages.map((images, idx) => {
		index = Math.floor(Math.random() * allImages.length);
		return `<div class="carousel-item ${idx === 0 ? "active" : ""}">
					<img class="d-block w-100 h-100" src=${allImages[index].imageURL} alt="First slide"/>
				</div>`
	}).join("");
	document.getElementById("carouselPop").innerHTML = initialCarousel;



	function albumCategory(categoryName) {
		
		mainContainer.style.display = "block";
		lightContainer.classList.add("d-none");
		var categoryCarousel = gallery.map((galleryData, idx) => {
			if (categoryName === galleryData.category && !galleryData.video && galleryData.subCategory) {
				$("#videoSection").hide();
				return galleryData.albums[0].pics.map((albums, index) => {
						return `<div class="carousel-item ${index === 0 ? "active" : ""}">
								<img class="d-block w-100 h-100" src=${albums.imageURL} alt="First slide" />
							</div>`;
					})
					.join("");
			}
			if (categoryName === galleryData.category && !galleryData.video && galleryData.subCategory === false) {
				$("#videoSection").hide();
				albumOpen("oragadam-event")
			}
			if (categoryName === galleryData.category && galleryData.video && galleryData.subCategory === false) {
				$("#videoSection").show();
				albumOpen("video")
			}
		}).join("");
		document.getElementById("carouselPop").innerHTML = categoryCarousel;
	}

	var slideIndex = 1;

	function albumOpen(albumName) {
		console.log("albumName",albumName)
		mainContainer.style.display = "none";
		lightContainer.classList.remove("d-none");
		var lightBox = albums.map((albumData, idx) => {
			console.log("albumData",albumData)
			if (albumData.albumSlug === albumName && albumData.video === false) {
				$("#lightContainer").show();
				return albumData.albumImage.map((albums, index) => {
					return `<div class="mx-1 videoContainer">
								<img onclick="currentSlide(${index + 1})" class="d-block w-100 h-100" src=${albums.imageURL} alt="First slide" style="object-fit:cover"/>
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
		showSlides(slideIndex);
	}

	// showSlides(slideIndex);
	function plusSlides(n) {
		showSlides((slideIndex += n));
		clearInterval(theInterval);
	}
	$(document).keydown(function(e) {
		if (e.keyCode === 37) {
			// Previous
			plusSlides(-1)
			startSlide()
			return false;
		}
		if (e.keyCode === 39) {
			// Next
			plusSlides(1)
			startSlide()
			return false;
		}
	});

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
			slides[i].classList.remove("lighBox-Car-Active")
		}
		slides[slideIndex - 1].classList.add("lighBox-Car-Active")
	}

	startSlide()

	$(".carouselPop").mouseover(function() {
		clearInterval(theInterval);
	})
	$(".carouselPop").mouseleave(function() {
		startSlide();
	})

	// Mobile gallery logic industrial-parks
	mobileDropDown('industrial-parks')
	$('#mobile-select-category').change(function() {
		mobileDropDown($(this).val())
	})
	$('#mobile-select-album').change(function() {
		albumOpen($(this).val())
	})
	function mobileDropDown(value){
		var vals = gallery.find(({category}) =>  category.replace(/[, ]+/g,"-") === value)
		if(vals.subCategory){
			document.getElementById("mobile-select-album").classList.add('d-block')
			document.getElementById("mobile-select-album").classList.remove('d-none')
			var galleryAlbumListMobile = vals.albums.map((finaldata, index) => {
				return `<option value=${finaldata.albumSlug.replace(/[, ]+/g,"-")} class="text-uppercase">${finaldata.album}</option>`
			}).join("");
			document.getElementById("mobile-select-album").innerHTML = galleryAlbumListMobile;
			albumCategory(vals.category)
		}else{
			document.getElementById("mobile-select-album").classList.remove('d-block')
			document.getElementById("mobile-select-album").classList.add('d-none')
			albumCategory(vals.category)
		}
	}
</script>