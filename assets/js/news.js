// Base_url
// var url =
// 	window.location.origin + "/" + window.location.pathname.split("/")[1] + "/";
// console.log(window.location.origin);

// greenbase.com
// var url = "http://stage.greenbase.com/";
var url = "http://localhost/greenbase/";
// var url = "http://greenbase.com/";
// News Articles
var newsdatas = {
	news: [
		{
			headline: "Hiranandani group to develop industrial-data centre park in Bengal",
			title: "Hiranandani-group-to-develop-industrial-data-centre-park-in-Bengal",
			headimage: url + "assets/images/news/data.jpg",
			date: "2021-02-15T22:54:12+05:30",
			time: "2:30 AM",
			headArticle:
				"The firm said it will invest around Rs 8,500 crore in the project",
		},
		{
			headline: "5 reasons why Indian logistics industry is happy",
			title: "5-reasons-why-Indian-logistics-industry-is-happy",
			headimage: url + "assets/images/news/budget.jpeg",
			date: "2021-02-02T22:54:12+05:30",
			time: "2:30 AM",
			headArticle:
				"Many logistics companies are pleased with the budget that was in line with their expectations. However, the industry is waiting to see the results of these measures in their field of work.",
		},
		{
			headline: "National infrastructure pipeline expanded to cover 7400 projects",
			title: "National-infrastructure-pipeline-expanded-to-cover-7400-projects",
			headimage: url + "assets/images/news/budget2.jpg",
			date: "2021-02-01T22:54:12+05:30",
			time: "2:30 AM",
			headArticle:
				"Many logistics companies are pleased with the budget that was in line with their expectations. However, the industry is waiting to see the results of these measures in their field of work.",
		},
		{
			headline: "Logistics sector: Covid-19 alters logistics of trade",
			title: "Logistics-sector-Covid-19-alters-logistics-of-trade",
			headimage: url + "assets/images/news/logistic.jpg",
			date: "2020-10-05T22:54:12+05:30",
			time: "2:30 AM",
			headArticle:
				"Growth in e-commerce has led to a demand for temporary warehouses, with occupiers seeking alternative sites to service customers better, even as prospects remain good for the sector",
			article:
				"With e-commerce driving the logistics sector in the time of Covid-19, there has been a spike in demand for temporary warehouses, signalling a structural shift in the approach of companies and investors even as the overall sentiment remains positive. While industrial leasing in the top eight cities of India stood at 11 million sq feet in the first half of 2020, the pandemic has led to demand growing for warehouses with a lease tenure of 6-11 months.",
		},
		{
			headline: "T.N. signs 14 MoUs to bring in ₹10,055 cr. investment",
			title: "TN-signs-14-MoUs-to-bring-in-10055-cr-investment",
			headimage: url + "assets/images/news/tamilnadu.jpg",
			date: "2020-10-13T22:54:12+05:30",
			time: "3:39 AM",
			headArticle:
				"The projects envisaged have the potential to generate employment for over 7,000 people",
			article:
				"Chief Minister Edappadi K. Palaniswami on Monday signed 14 MoUs entailing investments of ₹10,055 crore with potential to generate employment for over 7,000 people. The projects include fresh and expansion investments in locations including Chennai, Chengalpattu, Kancheepuram, Tirunelveli, Thoothukudi, Tenkasi, Ramanathapuram, Tiruppur and Tiruvannamalai districts.",
		},
		{
			headline:"Half a dozen global firms are in talks for billion-dollar deals: Hiranandani",
			title:"Half-a-dozen-global-firms-are-in-talks-for-billion-dollar-deals-Hiranandani",
			headimage: url + "assets/images/news/hiranandini.jpg",
			date: "2020-01-27T22:54:12+05:30",
			time: "2:30 AM",
			headArticle:
				"In the next 10 years, opportunity in logistics and industrial parks is going to be robust, says Niranjan Hiranandani, founder of Hiranandani group",
			article:
				"Niranjan Hiranandani, founder of real estate developer Hiranandani group, comments on his plans for expansion and diversification into logistics, as well as possible collaborations with overseas companies in real estate, which comes despite the ongoing economic slowdown.",
		},
		{
			headline:"Blackstone ties up with Hiranandani to enter warehousing business",
			title:"Blackstone-ties-up-with-Hiranandani-to-enter-warehousing-business",
			headimage: url + "assets/images/news/warehousing.jpg",
			date: "2019-12-25T22:54:12+05:30",
			time: "11:22 AM",
			headArticle:
				"The partnership would allow Blackstone to tap the growing Indian warehousing market.The Blackstone-Hiranandani platform will initially build industrial parks at various locations",
			article:
				"Global private equity firm Blackstone Group Inc has formed a joint venture with Greenbase, a Hiranandani group firm, to develop warehousing and logistics parks across the country. This marks the entry of Blackstone, a US-based company, into the Indian warehousing and logistics sector.",
		},
		{
			headline:"Hiranandani to invest Rs 1,000 crore in industrial park in Chennai",
			title:"Hiranandani-to-invest-Rs-1000-crore-in-industrial-park-in-Chennai",
			headimage: url + "assets/images/banner1.jpg",
			date: "2019-09-12T22:54:12+05:30",
			time: "3:02 PM",
			headArticle:
				"Chennai, Sep 12 () Realty firm Hiranandani group will invest about Rs 1,000 crore to develop 115-acre industrial and logistics park here and is setting up a wind turbine manufacturing unit for Vestas",
			article:
				"Realty firm Hiranandani group will invest about Rs 1,000 crore to develop 115-acre industrial and logistics park here and is setting up a wind turbine manufacturing unit for Vestas. Hiranandani group firm Green Base will create a wind turbine park and warehousing set-up for Vestas India, the leading wind turbine manufacturing multinational, at Oragadam.",
		},
		{
			headline:"Hiranandani Group's GreenBase to develop industrial & logistics park for Vestas India in Chennai",
			title:"Hiranandani-Group's-GreenBase-to-develop-industrial-&-logistics-park-for-Vestas-India-in-Chennai",
			headimage: url + "assets/images/news/vestas.jpg",
			date: "2019-09-16T22:54:12+05:30",
			time: "3:02 PM",
			headArticle:
				"Hiranandani Group's fully owned subsidiary GreenBase will develop industrial and logistics facilities of global standards spread over half a million square feet in Oragadam, Chennai for wind turbine manufacturing multinational Vestas India.",
			article:
				"The industrial and logistics park will be built on 430 acres out of the total mixed used integrated township of 115 acres. The acreage is dry land, and is suitable for industrial and logistics usage. It offers strategic advantages, including provision of STP, power substation, security cabin, boundary wall etc. Infrastructure and security for the industrial parks has been well planned and executed.",
		},
		{
			headline:"Hiranandani, Blackstone ink JV To develop industrial, logistics and warehousing assets",
			title:"Hiranandani-Blackstone-ink-JV-To-develop-industrial-logistics-and-warehousing-assets",
			headimage: url + "assets/images/news/warehousing.jpg",
			date: "2019-12-25T22:54:12+05:30",
			time: "3:02 PM",
			headArticle:
				"The JV will initially include Hiranandani Green Base’s 267 acres in Pune, 115 acres in Chennai’s industrial suburb Oragadam, 73 acres in Nashik and around 25 acres in Durgapur, West Bengal.",
			article:
				"GreenBase, a fully owned subsidiary of India’s leading real estate conglomerate, Hiranandani Group,  Niranjan Hiranandani initiative, has inked a joint venture with Blackstone Investments Group to set up a 50:50 joint venture, a Hiranandani-Blackstone pan-India platform for development of industrial, logistics and warehousing assets.",
		},
		{
			headline:"Hiranandani Group promoted GreenBase signs industrial and warehousing deal with Vestas India",
			title:"Hiranandani-Group-promoted-GreenBase-signs-industrial-and-warehousing-deal-with-Vestas-India",
			headimage: url + "assets/images/news/warehousingdeal.jpg",
			date: "2019-09-13T22:54:12+05:30",
			time: "3:02 PM",
			headArticle:
				"Vestas India is setting up an assembly and warehousing facility, which will be spread over 23 acres at the Park",
			article:
				"GreenBase, a fully owned subsidiary of India’s leading real estate conglomerate, Hiranandani Group, will create a wind turbine park and warehousing set-up for Vestas India, the leading wind turbine manufacturing multinational, at Oragadam, Chennai. The development will be spread over half a million sq-ft.",
		},
		{
			headline:"Why India is betting on big storage sheds",
			title:"Why-India-is-betting-on-big-storage-sheds",
			headimage: url + "assets/images/news/warehousingreuters.jpg",
			date: "2019-09-13T22:54:12+05:30",
			time: "3:02 PM",
			headArticle:
				"Vestas India is setting up an assembly and warehousing facility, which will be spread over 23 acres at the Park",
			article:
				"In mid-April, Albinder Dhindsa, the co-founder of grocery e-tailer Grofers, found himself in a tricky situation. The company’s top team—including the supply chain head—was stuck in a Gurugram township that got earmarked as a containment zone. And demand for grocery was skyrocketing. Initially, we could let one out of eight customers check out, Dhindsa told Mint, adding that traffic now is 25-30 times of what it was in February.",
		},
		{
			headline:"Niranjan Hiranandani: A man extraordinaire",
			title:"Niranjan-Hiranandani-A-man-extraordinaire",
			headimage: url + "assets/images/news/extraordinary.jpg",
			date: "2020-03-06T22:54:12+05:30",
			time: "3:02 PM",
			headArticle:
				"Niranjan Hiranandani, co-founder and MD, Hiranandani Group of Companies, continues to build iconic structures. But there are myriad other roles he plays in life to help the sector and mankind",
			article:
				"A mere hour with Niranjan Hiranandani is not enough. The czar of real estate has been in the business of real estate for far too long and, one can safely say, has learnt everything there is to know under the sun. He has also learnt to take everything in his stride, which is of paramount importance in the perennially shifting arena of real estate development.",
		},
		{
			headline:"Warehousing to the rescue of Indian real estate",
			title:"Warehousing-to-the-rescue-of-Indian-real-estate",
			headimage: url + "assets/images/news/warehousingreuters.jpg",
			date: "2020-07-02T22:54:12+05:30",
			time: "7:39 PM",
			headArticle:
				"Godowns are going up. As the pandemic reworks the very dynamics of the economy, India's troubled real estate sector is pinning its hopes on the till-now unglamorous segment of warehousing for a glimmer of good news.",
			article:
				"While real estate was synonymous with the housing market for a long time, the lack of growth in that area had been troubling for long. The degrowth that came as an offshoot of the global financial crash of 2008-'09, and later developments like the hyperactivity of 'fly-by-night' operators, rule changes like RERA and not to mention de-monetisation. For example, according to Anarock, sales fell by half across the top seven cities in the country in the first half of this year, compared to the last 6sixmonths of 2019.",
		},
	],
};
$(document).ready(function () {

	var newsFeeds = newsdatas.news
		.map((finalNews, index) => {
			if (finalNews.date === "February 15, 2021") {
				return `<div class="latest-news-div" id="latestNews" data-id=${index + 1}><div class="latest-left-content">
                            <img src=${finalNews.headimage} alt="latest" class="latest-img">
                        </div>
                        <div class="latest-right-content">
                            <div class="latest-news-content-div">
                                <div class="top-story">TOP STORIES</div>
                                <div class="head-line">
                                    ${finalNews.headline}
                                </div>
                                <div class="latest-para">
                                    ${finalNews.headArticle}
                                </div>
                                <div class="latest-date">${moment(finalNews.date).format('LL')}</div>
                            </div>
                        </div></div>`;
			}
		})
		.join("");
	document.getElementById("latest").innerHTML = newsFeeds;
	relatedNews(newsdatas.news)
	function relatedNews(newsData) {
		var newsRelated = newsData.length > 0 ? newsData.map((finalNews, index) => {
			return `<div class="col-md-6 cus-col6 left-related-div padding-right id" id="pressrelease" data-id=${index + 1}>
				<a href="${url}newspost/${finalNews.title}" style="color: var(--color-3)">
					<div class="related-div-img">
						<img src=${finalNews.headimage} alt="related" class="related-img">
					</div>
					<div class="press-release-div">
						<div class="press-release-top">PRESS RELEASE</div>
						<div class="press-release-head">
							${finalNews.headline}
						</div>
						<div class="press-release-date">${moment(finalNews.date).format('LL')}</div>
					</div>
					</a>
				</div>`;
	}).join(""):'<div><span>No News Found | Please select different months</span></div>'; 
		document.getElementById("related").innerHTML = newsRelated;
	}

	// latestNews
	$("#latestNews").click(function () {
		var id = $(this).data('id');
		location.href = "newspost/" + id;
	});
	$(".id").click(function () {
		var id = $(this).data('id');
		location.href = "newspost/" + id;
	});

	// NEWS MOBILE
	var newsFeedsMobile = newsdatas.news
		.map((finalNews, index) => {
			if (finalNews.date === "October 13, 2020") {
				return `<div class="news-img-wrapper" data-id=${index + 1} id="latestMobile">
							<img src=${finalNews.headimage} alt="newsimg" class="news-img">
						</div>
						<div class="news-detail-wrapper">
							<div class="latest-news-content-div">
								<div class="top-story">TOP STORIES</div>
								<div class="head-line">
									${finalNews.headline}
								</div>
								<div class="latest-para">
									${finalNews.headline}
								</div>
								<div class="latest-date">${moment(finalNews.date).format('LL')}</div>
							</div>
						</div>`;
			}
		})
		.join("");
	document.getElementById("latestMobileNews").innerHTML = newsFeedsMobile;

	m_newsrelated(newsdatas.news)
	function m_newsrelated(newsData){
		var newsRelatedMobile = newsData.length > 0 ? newsData.map((finalNews, index) => {
			if (finalNews.date !== "October 13, 2020") {
				return `<a href="${url}newspost/${finalNews.title}" style="color: var(--color-3)"><div class="news-img-wrapper" data-id=${index + 1}>
							<img src=${finalNews.headimage} alt="newsimg" class="news-img">
						</div>
						<div class="news-detail-wrapper">
							<div class="latest-news-content-div">
								<div class="top-story">PRESS RELEASE</div>
								<div class="head-line">
									${finalNews.headline}
								</div>
								<div class="latest-para">
									${finalNews.headline}
								</div>
								<div class="latest-date">${moment(finalNews.date).format('LL')}</div>
							</div>
						</div></a>`;
			}
		}).join("") : '<div><span>No News Found | Please select different months</span></div>'; 
	document.getElementById("relatedMobile").innerHTML = newsRelatedMobile;
	}

	$("#latestMobile").click(function () {
		var id = $(this).data('id');
		location.href = "newspost/" + id;
	});
	$(".id").click(function () {
		var id = $(this).data('id');
		location.href = "newspost/" + id;
	});


	$('.news-dropdown-children ul li a').on('click', function () {
		let year = $(this).parents('.news-dropdown-children').attr('data-year')
		let months = $(this).attr('data-value')
		const result = newsdatas.news.filter(newDate => moment(newDate.date).format('YYYY') === year)
		const newdata = result.filter(news => moment(news.date).format('MMM').toLowerCase() === getWords(months)[0] || moment(news.date).format('MMM').toLowerCase() === getWords(months)[1] || moment(news.date).format('MMM').toLowerCase() === getWords(months)[2])
		relatedNews(newdata)
	})
	const getWords = (str) => {
		return str.split(/\|/)
	}
	// mobile news
	var m_year;
	var m_month;
	$('#m-years').on('change', function () {
		m_year = $(this).val()
	})
	$('#m-months').on('change', function () {
		m_month = $(this).val()
		const result = newsdatas.news.filter(newDate => moment(newDate.date).format('YYYY') === m_year)
		const newdata = result.filter(news => moment(news.date).format('MMM').toLowerCase() === getWords(m_month)[0] || moment(news.date).format('MMM').toLowerCase() === getWords(m_month)[1] || moment(news.date).format('MMM').toLowerCase() === getWords(m_month)[2])
		m_newsrelated(newdata)
	})
});

