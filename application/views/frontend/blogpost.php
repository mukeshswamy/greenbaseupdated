<section class="section-blog-posts">
	<div class="main-plog-post-wrapper">
		<img src=<?php echo base_url('assets/images/blog_1.jpg');?>
		alt="blog-post" class="blog-post-img"/>
		<div class="blog-post-date" id="createdDate"></div>
	</div>
</section>
<section class="mt-bot">
	<div class="container-fluid custom-container-fluid-blogpost">
		<div class="row">
			<div class="col-md-12">
				<h2 class="blogheadline"></h2>
				<!-- <div class="blogpost-paragraph">
					Lorem Ipsum has been the industry's standard dummy text ever since the
					1500s, when an unknown printer took a galley of type and scrambled it
					to make a type specimen book. It has survived not only five centuries,
					but also the leap into electronic typesetting, remaining essentially
					unchanged. It was popularised in the 1960s with the release of
					Letraset sheets containing Lorem Ipsum passages, and more recently
					with desktop publishing software like Aldus PageMaker including
					versions of Lorem Ipsum.
				</div>
				<div class="blogpost-paragraph">
					Contrary to popular belief, Lorem Ipsum is not simply random text. It
					has roots in a piece of classical Latin literature from 45 BC, making
					it over 2000 years old. Richard McClintock, a Latin professor at
					Hampden-Sydney College in Virginia, looked up one of the more obscure
					Latin words, co "de Finibus Bonorum et Malorum" (The Extremes of Good
					and Evil) by Cicero, written in 45 BC. This book is a treatise on the
					theory of ethics, very popular during the Renaissance. The first line
					of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
					section 1.10.32.
				</div> -->
				<div class="blogpost-paragraph" id="blogpost-paragraph"></div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
var url =
	window.location.origin + "/" + window.location.pathname.split("/")[1] + "/";
	var id = '<?php print_r($id)?>';
	// News Articles
	var blogsData = {
		blogs: [
			{
				headline: "A Walk in the Industrial Park",
				headimage: url + "assets/images/blogs/blog1.jpg",
				createdat: "Dec 21, 2020",
				article:[
                "Through Greenbase, we are capitalising on our existing land bank at strategic growth corridors to develop mixed-use, efficient and world-class industrial and logistics parks.",
                "Greenbase is establishing an assembly and warehousing facility spread over 20 acres at the Greenbase Industrial and Logistics Park at Oragadam for the Danish company Vestas. The project will generate employment for more than 600 people (directly and indirectly). This industrial township project shall provide a thrust to Oragadam’s industrial and manufacturing sector and is designed to contribute to the overall economic progress of Tamil Nadu.",
                "Greenbase Industrial and Logistics Parks at Talegaon is a 258-acre industrial township notified as Integrated Industrial Area (IIA) by the Industries Department, Government of Maharashtra. Greenbase is setting up a manufacturing unit for Cooper Standard Automotive, the leading global supplier of systems and components for the automotive industry.",
                "This will be an environment-friendly facility, producing energy efficient and sustainable automobile parts.",
                "The manufacturing facility will cater to auto part requirements of the vehicle manufacturing plants located in the auto hub of Talegaon-Chakan industrial area. It will meet the needs of India’s leading automobile manufacturers such as Volkswagen, Tata Motors, Mahindra, and other companies that have their plants located in Pune.",

            ]
			},
			{
				headline: "Optimizing the country’s logistics supply chain network",
				headimage: url + "assets/images/blogs/blog2.jpg",
				createdat: "Sep 11 , 2020",
				article:[
                "Logistics infrastructure in India – insufficient and inefficient, leading to high costs, impacting business performance and inflating product prices. A complex taxation structure and the immense skills required to build logistics parks so far posed a hurdle to greater efficiency.",
                "The introduction of GST was a watershed moment, making the entire country one big single market, unleashing the demand for large scale industrial parks.",
                "We realised the need and forayed into the Industrial and logistics space, a natural progression of our domain expertise in the infrastructure space and understanding of customer requirement.",
                "Leveraging our decades of construction experience and execution skills, we began building efficient industrial and warehousing spaces across the country. We brought in learnings from our successful township projects to design integrated residential facilities, world-class amenities and infrastructure. With optimum design and right location, these parks will ensure high productivity.",
            ]
			},
			{
				headline: "Greenbase at The India Warehousing & Logistics Show 2018",
				headimage: url + "assets/images/blogs/blog3.png",
				createdat: "Nov 14, 2018",
				article:[
                "The warehousing and logistics community of Western and Southern India have come together at the ‘India Warehousing and Logistics Show 2018’ to experience, compare and purchase various land banks, products and services required to run a highly successful light industries and supply-chain operations. In its 6th year of existence, the show takes pride in being the leading platform to identify new trends, showcase a wide range of products, network with peers and gather competitive intelligence; all of this in the business and trading capital of India - Pune.",
                "At the ‘India Warehousing & Logistics Show 2018’, Greenbase is proud to be associated as the ‘VIP Partners’ for the event. A Nidar - Hiranandani Group exclusive, Greenbase will soon have its presence across India and have a major say in the expected 839 million sq. ft. light industrial & warehousing segment in India by 2020.",
                "“The customers here are corporate & industrial clients, expecting speed and quality of delivery; and we at Hiranandani are committed to the same” quotes Mr. N Shridhar, Group Director and Chief Investment & Strategy Officer, the Nidar Group.",
                "Our Nidar - Hiranandani group‘s inherent strength in infrastructure development & township development, gives ‘Greenbase’ a natural advantage over the competition to build and deliver world class Industrial and Logistics Parks. With already existing land banks, new tracts of land being considered for acquisition, the proven engineering and construction domain expertise, Greenbase is poised to deliver world class infrastructure, amenities and more for our industrial parks, across India. In fact, our group is very close to finalizing nearly 1 million sq.ft. of built to suit structures for tenants in our Talegaon (Pune) and Oragadam (Chennai) Industrial Parks.",

            ]
			},
		],
	};
	
	
	$(document).ready(function(){
    var ids = (parseInt(id) - 1);
    $(".blogheadline").text(blogsData.blogs[ids].headline);
    $("#createdDate").text(blogsData.blogs[ids].createdat);
	$(".main-plog-post-wrapper img").attr('src', blogsData.blogs[ids].headimage);
	var con = blogsData.blogs[ids].article;
    var newscontent = con.map((content) => {
            return `<div class="blogContentContainer">${content}</div>`
    }).join('');
    document.getElementById("blogpost-paragraph").innerHTML = newscontent;

   
});
</script>
