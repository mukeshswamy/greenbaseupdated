<section class="news-section content setMaxWidth">
	<div class="container-fluid cus-container-fluid-news">
		<div class="row">
			<div class="col-md-2 cus-col3 margin10">
				<div class="news-head-wrapper">
					<div class="newsheader__head">
						<div class="news-head">NEWS</div>
					</div>
					<div class="news-dropdown-wrapper">
						<ul>
							<div class="news-dropdown-list-wrapper" data-index="0">
								<li>
									<a href="#" id="year">2021</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="0">
									<ul>
										<li><a href="#">Jan - Feb - Mar</a></li>
										<li><a href="#">Apr - May - Jun</a></li>
										<li><a href="#">Jul - Aug - Sept</a></li>
										<li><a href="#">Oct - Nov - Dec</a></li>
									</ul>
								</div>
							</div>
							<div class="news-dropdown-list-wrapper" data-index="1">
								<li>
									<a href="#" id="year">2020</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="0">
									<ul>
										<li><a href="#">Jan - Feb - Mar</a></li>
										<li><a href="#">Apr - May - Jun</a></li>
										<li><a href="#">Jul - Aug - Sept</a></li>
										<li><a href="#">Oct - Nov - Dec</a></li>
									</ul>
								</div>
							</div>
							<div class="news-dropdown-list-wrapper" data-index="2">
								<li>
									<a href="#" id="year">2019</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="1">
									<ul>
										<li><a href="#">Jan - Feb - Mar</a></li>
										<li><a href="#">Apr - May - Jun</a></li>
										<li><a href="#">Jul - Aug - Sept</a></li>
										<li><a href="#">Oct - Nov - Dec</a></li>
									</ul>
								</div>
							</div>
							<div class="news-dropdown-list-wrapper" data-index="3">
								<li>
									<a href="#" id="year">2018</a>
									<span>
										<img src=<?php echo base_url('assets/images/dropdown_arrow.svg'); ?> alt="dparrow" class="dparrow">
									</span>
								</li>
								<div class="news-dropdown-children" id="dropdownchildren" data-index="2">
									<ul>
										<li><a href="#">Jan - Feb - Mar</a></li>
										<li><a href="#">Apr - May - Jun</a></li>
										<li><a href="#">Jul - Aug - Sept</a></li>
										<li><a href="#">Oct - Nov - Dec</a></li>
									</ul>
								</div>
							</div>
						</ul>
					</div>
					<!-- Mobile DropDown -->
					<div class="newsheader__yearMobile">
						<select name="years" id="years">
							<option value="2020">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
						</select>
					</div>
					<div class="newsheader__monthsMobile">
						<select name="months" id="months">
							<option value="jan">Jan-Feb-Mar</option>
							<option value="april">April-May-June</option>
							<option value="july">July-Aug-Sep</option>
							<option value="oct">Oct-Nov-Dec</option>
						</select>
					</div>
					
				</div>
			</div>
			<!-- DESKTOP -->
			<div class="col-md-10 pad0 desktop-main-news-section" id="latest">
				<div class="latest-news-div" id="latestNews">
				</div>
			</div>
			<div class="col-md-2 reduceindex"></div>
			<div class="col-md-10 pad0 desktop-main-news-section">
				<!-- Latest News -->

				<!-- Related News -->
				<div class="row cus-row" id="related">
				</div>
			</div>
			<!-- MOBILE -->
			<div class="mobile-main-news-section">
				<!-- Latest -->
				<div class="news-card-wrapper " id="latestMobileNews">
				</div>
				<!-- Related -->
				<div class="news-card-wrapper" id="relatedMobile">
				</div>
			</div>
		</div>
	</div>
</section>
<script src=<?php echo base_url('assets/js/news.js'); ?>></script>
<script type="text/javascript">
	$.ajax({
		type: "get",
		url: "<?php echo base_url(); ?>News/read_news/",
		processData: false,
		contentType: false,
		success: function(responce) {
			if (responce.message === "News Data") {
				var tablebody = responce.data?.map((news, index) => {
					console.log(news);
					})
					.join("");
			}
		},
		error: function(errorResponce) {
			console.log(errorResponce.responseJSON);
		},
	});
</script>