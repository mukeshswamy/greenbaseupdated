// JAVASCRIPT
// JQUERY
$(document).ready(function () {
	var disclaimerModal = document.getElementById("disclaimer-modal");
	var disclaimer = document.getElementById("disclaimer");
	disclaimer.onclick = function () {
		disclaimerModal.style.display = "block";
	};
	var disclaimerMobile = document.getElementById("disclaimerMobile");
	disclaimerMobile.onclick = function () {
		disclaimerModal.style.display = "block";
	};
	// disclaimerModal.style.display = "block";
	// if ($.cookie("pop") == null) {
	// 	disclaimerModal.style.display = "block";
	// 	$.cookie("pop", "1");
	// }
	// FOOTER MODAL
	var modal1 = document.getElementById("modalContact");
	var contactModalBtn = document.getElementById("contact-modal");
	var cancelcontactModalBtn = document.getElementById("cancel-modal");
	var cancelDisclaimerModalBtn = document.getElementById(
		"closeDisclaimerModal"
	);

	// When the user clicks the button, open the modal
	contactModalBtn.onclick = function () {
		modal1.style.display = "block";
	};
	// When the user clicks the Cancel, close the modal
	cancelcontactModalBtn.onclick = function () {
		modal1.style.display = "none";
	};
	cancelDisclaimerModalBtn.onclick = function () {
		disclaimerModal.style.display = "none";
	};

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function (event) {
		if (event.target == modal1) {
			modal1.style.display = "none";
		}
	};

	// MOBILE SIDENAV
	var burger = document.getElementById("burger");
	// When the user clicks the button, open the sidebar background-color: rgb(0, 0, 0); /* Fallback color */
	burger.onclick = function () {
		var checkBox = document.getElementById("nav-toogle");
		if (checkBox.checked == true) {
			document.getElementById("mySidenav").style.width = "45%";
			document.getElementById("fulloverlay").style.display = "block";
			document.getElementById("fulloverlay").style.backgroundColor =
				"rgba(0,0,0,0.4)";
		} else {
			document.getElementById("mySidenav").style.width = "0%";
			document.getElementById("fulloverlay").style.display = "none";
			document.getElementById("fulloverlay").style.backgroundColor =
				"rgba(0,0,0,0.4)";
		}
	};

	// ABOUT US PAGE CEO's DETAILS LIFT
	$(".down-arrow").click(function () {
		var parentelements = $(this).parent().parent();
		$(".about-ceos-detail").removeClass("paraDivTop");
		parentelements.children(".about-ceos-detail").addClass("paraDivTop");
		$(".img-overlay-about").removeClass("img-overlay-animate");
		parentelements
			.children(".img-overlay-about")
			.addClass("img-overlay-animate");
		$(".about-ceos-detail").children("p").removeClass("showdiv");
		parentelements
			.children(".about-ceos-detail")
			.children("p")
			.addClass("showdiv");
	});
	// ABOUT US PAGE CEO's DETAILS LIFT
	$(".down-arrow").hover(function () {
		var parentelements = $(this).parent().parent();
		$(".about-ceos-detail").removeClass("paraDivTop");
		parentelements.children(".about-ceos-detail").addClass("paraDivTop");
		$(".img-overlay-about").removeClass("img-overlay-animate");
		parentelements
			.children(".img-overlay-about")
			.addClass("img-overlay-animate");
		$(".about-ceos-detail").children("p").removeClass("showdiv");
		parentelements
			.children(".about-ceos-detail")
			.children("p")
			.addClass("showdiv");
	});

	// TEMPORARY LOCATION FOR FOOTER
	var base_url = window.location.origin;
	if (window.location.href === base_url + "/greenbase/gallery") {
		$(".mobile__footer").addClass("footerDown");
	}
	// GALLERY
	var previousActiveTabIndex = 0;
	$(".gallery-list-wrpper").on("click", function (event) {
		event.preventDefault();
		$(".gallery-list li a").removeClass("gallery-list-active");
		$(".imageGrid, .imageGridEvent").hide();
		$(".album, .albumEvents").show();
		$(this).find(".main-list").addClass("gallery-list-active");
		$(".gallery__subListContainer").removeClass(
			"gallery__subListContainer__Show"
		);
		$(this).find(".gallery__subListContainer").addClass("gallery__subListContainer__Show");
		var getid = $(this).data("index");
		if (getid != previousActiveTabIndex) {
			$(".content-container-gallery .tab-container-gallery").each(function () {
				if ($(this).data("index") == getid) {
					$(".tab-container-gallery").hide();
					$(this).show();
					previousActiveTabIndex = $(this).data("index");
					return;
				}
			});
		}
	});
	// GALLERY IMAGE ALBUMS
	// var prevDataID;
	// $(".infrastructure").click(function () {
	// 	$(".album").hide();
	// 	var getid = $(this).data("index");
	// 	if (getid != prevDataID) {
	// 		$(".imageGrid").each(function () {
	// 			if ($(this).data("index") == getid) {
	// 				$(".imageGrid").hide();
	// 				$(this).show();
	// 				prevDataID = $(this).data("index");
	// 				return;
	// 			}
	// 		});
	// 	}
	// });
	// var prevDataID2;
	// $(".event").click(function () {
	// 	$(".albumEvents").hide();
	// 	var getid = $(this).data("index");
	// 	if (getid != prevDataID2) {
	// 		$(".imageGridEvent").each(function () {
	// 			if ($(this).data("index") == getid) {
	// 				$(".imageGridEvent").hide();
	// 				$(this).show();
	// 				prevDataID2 = $(this).data("index");
	// 				return;
	// 			}
	// 		});
	// 	}
	// });
	// NEWS
	var yeartab = 1;
	$(".news-dropdown-list-wrapper").on("click", function (event) {
		event.preventDefault();
		$(".news-dropdown-list-wrapper li a").removeClass("yearActive");
		$(this).find("#year").addClass("yearActive");
		$(".dparrow").removeClass("news-dropdown-arrow-rotate");
		$(this).find("img").addClass("news-dropdown-arrow-rotate");
		var getid = $(this).data("index");
		$(".news-dropdown-wrapper #dropdownchildren").removeClass(
			"news-dropdown-children-show"
		);
		$(this).find("div").addClass("news-dropdown-children-show");
	});
	// NAV BAR
	$(".main-nav-ul li a").on("click", function () {
		$(".main-nav-ul li a").removeClass("navActive");
		$(this).addClass("navActive");
	});
	// CAROUSEL HOME
	var previousActiveTabIndex;
	$(".capabilitie-content-2-ul li a, .overview-list li a").on(
		"click",
		function () {
			$(".capabilitie-content-2-ul li a, .overview-list li a").removeClass(
				"carouselLinkActive"
			);
			$(".capabilitie-content-2-1").removeClass("capabilitie-content-2-1-none");
			// $(".content-2-1").addClass("content-2-1-none");
			$(".content-2-1").addClass("visible");
			$(".content-2-1").addClass("content-2-1-none");
			$(".capabilitie-content-2-ul").addClass("pushup");
			$(".capabilitie-content-2-1").addClass("pushup");
			$(this).addClass("carouselLinkActive");
			var getid = $(this).data("index");
			if (getid != previousActiveTabIndex) {
				$(".capabilitie-content-2-1 div, .overview-content div").each(
					function () {
						if ($(this).data("index") == getid) {
							$(".capabilitie-content-2-1 div, .overview-content div").hide();
							$(this).show();
							previousActiveTabIndex = $(this).data("index");
							return;
						}
					}
				);
				$(".carousel-item-home").each(function () {
					if ($(this).data("index") == getid) {
						$(".carousel-item-home").hide();
						$(this).show();
						previousActiveTabIndex = $(this).data("index");
						return;
					}
				});
				$(".carousel-item-about").each(function () {
					if ($(this).data("index") == getid) {
						$(".carousel-item-about").hide();
						$(this).show();
						previousActiveTabIndex = $(this).data("index");
						return;
					}
				});
			}
		}
	);
	$(".ourcapabilitiesmain").on("click", function () {
		$(".capabilitie-content-2-1").addClass("capabilitie-content-2-1-none");
		$(".content-2-1").removeClass("content-2-1-none");
		$(".capabilitie-content-2-ul li a").removeClass("carouselLinkActive");
		var getid = $(this).data("index");
		if (getid == 0) {
			$(".carousel-item-home").each(function () {
				if ($(this).data("index") == getid) {
					$(".carousel-item-home").hide();
					$(this).show();
					return;
				}
			});
		}
	});
	// CAROUSEL ABOUT
	var previousActiveTabIndex2 = 0;
	$(".vision_mission_ul li a").on("click", function () {
		$(".vision_mission_ul li a").removeClass("carouselLinkActive");
		$(this).addClass("carouselLinkActive");
		var getid = $(this).data("index");
		if (getid != previousActiveTabIndex2) {
			$(".vision-mission").each(function () {
				if ($(this).data("index") == getid) {
					$(".vision-mission").hide();
					$(this).show();
					previousActiveTabIndex2 = $(this).data("index");
					return;
				}
			});
			$(".carousel-item-vison").each(function () {
				if ($(this).data("index") == getid) {
					$(".carousel-item-vison").hide();
					$(this).show();
					previousActiveTabIndex2 = $(this).data("index");
					return;
				}
			});
		}
	});
	// WHYS MODAL
	$(".whysusedge .col-md-4 h5").on("click", function () {
		var getids = $(this).data("index");
		$(".modal-know-more1").each(function () {
			if ($(this).data("index") == getids) {
				$(".modal-know-more1").hide();
				$(this).show();
				return;
			}
		});
	});
	$(".valuePROPOSITION .col-md-4 h5").on("click", function () {
		var getids = $(this).data("index");
		$(".modal-know-more2").each(function () {
			if ($(this).data("index") == getids) {
				$(".modal-know-more2").hide();
				$(this).show();
				previousActiveTabIndex4 = $(this).data("index");
				return;
			}
		});
	});
	
	$(".cancel").on("click", function () {
		$(".modal-know-more").hide();
	});
	// HOME PAGE VIDEO
	$("#playbuttons").on("click", function () {
		$("#myVideo2").trigger("play");
		$(".video-overlay").addClass("overlaydisplay");
		$(".playbutton").addClass("overlaydisplay");
	});
	$("#myVideo2").on("click", function () {
		$("#myVideo2").trigger("pause");
		$(".video-overlay").removeClass("overlaydisplay");
		$(".playbutton").removeClass("overlaydisplay");
	});

	// CLIENTS PAGE VIDEO
	// VIDEO PLAY LOGIC
	$(".playbuttonTestimony").on("click", function () {
		var videoID = $(this).parent().children("video").data("id");
		var playButtonID = $(this).data("id");
		$("video").trigger("pause");
		$(".video-overlay").removeClass("overlaydisplay");
		$(".playbuttonTestimony").removeClass("overlaydisplay");
		if(playButtonID === videoID){
			$(this).parent().children("video").trigger("play");
			$(this).parent().children(".video-overlay").addClass("overlaydisplay");
			$(this).addClass("overlaydisplay");
		}
	});
	// VIDEO PAUSE LOGIC
	$(".myVideoTestimony").on("click", function () {
		$(this).trigger("pause");
		$(".video-overlay").removeClass("overlaydisplay");
		$(".playbuttonTestimony").removeClass("overlaydisplay");
	});
	// Directors Mobile 
	$(".directorsKnowmore").on("click", function(){
		$(".mobile-ceo-images").removeClass("addHeight");
		$(this).parent().parent().parent().children("img").addClass("addHeight");
		// $(this).siblings("ceo-detail").addClass("d-block");
		$(".ceo-detail").removeClass("d-block");
		$(".modile-ceo-detail-wrapper").removeClass("addTopPX");
		$(this).parent().children('div.ceo-detail').addClass("d-block");
		$(this).parent().parent().addClass("addTopPX");
	})
});
