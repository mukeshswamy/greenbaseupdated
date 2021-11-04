<section class="newspost-section">
    <div class="container-fluid cus-newspost-fluid">
        <div class="row">
            <div class="col-md-12 mb-2 col-sm-6 col-6 m-back-center">
                <div class="back">
                    <a class="d-flex item-center no-underline" href=<?php echo base_url('news'); ?>> 
                        <img src=<?php echo base_url('assets/images/prev_black.svg'); ?> alt="back" class="back_img mr-2">
                        <div class="back_div no-underline" id="newBack">Back</div>
                    </a>
                </div>
            </div>
            <div class="col-md-12 mb-2 col-sm-6 col-6  m-d-block d-d-none">
                <div class="heading-wrapper text-end mb-0">
                    <div class="top-stories">
                        TOP STORIES
                    </div>
                    <div class="new-social-icon">
                        <a><img src=<?php echo base_url('assets/images/twitter.svg'); ?> alt="twitter"
                                        class="socio-icon"></a>
                        <a><img src=<?php echo base_url('assets/images/insta.svg'); ?> alt="insta"
                                        class="socio-icon"></a>
                        <a><img src=<?php echo base_url('assets/images/fb.svg'); ?> alt="fb"
                                        class="socio-icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-6 col-6">
                <div class="date-publised-news top-date">
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="">
                    <h2 class="headline mb-0"></h2>
                </div>
            </div>
            <div class="col-md-3 m-d-none">
                <div class="heading-wrapper text-end mb-0">
                    <div class="top-stories">
                        TOP STORIES
                    </div>
                    <div class="new-social-icon">
                        <a><img src=<?php echo base_url('assets/images/twitter.svg'); ?> alt="twitter"
                                        class="socio-icon"></a>
                        <a><img src=<?php echo base_url('assets/images/insta.svg'); ?> alt="insta"
                                        class="socio-icon"></a>
                        <a><img src=<?php echo base_url('assets/images/fb.svg'); ?> alt="fb"
                                        class="socio-icon"></a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="cus-hr">
        <div class="row">
            <div class="col-md-12">
                <div class="main-newspost-headlines">
                </div>
            </div>
            <div class="col-md-8">
                <div class="main-newspost-wrapper borderMobile">
                    <div class="main-newspost">
                        <img src="" alt="news_post" class="newspost-img">
                    </div>
                    <div class="main-newspost-content" id="newsContent">
                    </div>
                </div>
            </div>
            <div class="col-md-4 relatedNewsPostDiv">
                <div class="related-news-block">
                    RELATED NEWS
                </div>
                <!-- POST 1 -->
                <div class="related-news-wrapper" id="relatedNews">
                    <div class="related-post-block">
                        <div class="related-post-container">
                            <img src=<?php echo base_url('assets/images/related_news.jpg'); ?> alt="related-post" class="related-news-img">
                        </div>
                        <div class="related-newspost-div">
                            <div class="related-newspost-heading">
                                LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING
                            </div>
                            <div class="related-newspost-date">
                                May 20, 2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END OF NEWS POSTS -->
<script type="text/javascript">
    // var url = <?php echo base_url() ?>
    // console.log(url);
    // 	window.location.origin + "/" + window.location.pathname.split("/")[1] + "/";
    var id = '<?php print_r($id) ?>';
    // News Articles
    var newsdatas = {
        news: [
            {
                headline: "Hiranandani group to develop industrial-data centre park in Bengal",
                title: "Hiranandani-group-to-develop-industrial-data-centre-park-in-Bengal",
                headimage: "<?php echo base_url(); ?>assets/images/news/data.jpg",
                date: "February 15, 2021",
                time: "2:30 AM",
                headArticle: "The firm said it will invest around Rs 8,500 crore in the project",
                article: [
                    "Mumbai-based The Hiranandani Group on Monday said it will invest around Rs 8,500 crore to develop industrial and data centre parks in West Bengal.",
                    "The group has entered into an MoU (memorandum of understanding) in the state of West Bengal to set up logistics and hyperscale data center parks in the region, a company statement said.",
                    "It has signed an MoU to acquire a 100-acre land at Uttarpara, Kolkata to set up an integrated logistics and hyperscale data center park by group companies GreenBase and Yotta respectively.",
                    "The combined investment by the group and their customers is estimated to cross Rs 10,000 crore, the statement said.",
                    "When contacted, the company spokesperson said the investment by the group will be around Rs 8,500 crore.",
                    "GreenBase will develop 3 million square feet of industrial and warehousing space, while Yotta, Hiranandani's hyperscale data centre division, will build six hyper connected data centre buildings bringing in 250MW of cutting edge data centre capacity over the next several years.",
                    "Darshan Hiranandani, Group Chief Executive Officer - Hiranandani Group said, Kicking off this project would not have been possible without the tremendous support of the Government of West Bengal",
                    "West Bengal is the gateway to the east. It is an ideal hub for logistics and industrial development with excellent road, rail and riverine connectivity, he added.",
                    "Simultaneously, Darshan said the data centre business will benefit from the digitisation revolution, the upcoming Silicon Valley at New Town at Rajarhat and excellent fibre connectivity on land and the new submarine cable coming up at Tajpur.",
                    "By setting up a data center park in Kolkata, we will not only serve the customers of the state but the entire eastern region including neighbouring countries, he said.",
                    "In 2020, Yotta inaugurated its Asia's largest and World's second-largest Uptime Institute Tier IV certified data center in Navi Mumbai. It has recently announced development of data centre parks in Greater Noida and Chennai.",
                    "Greenbase is a joint venture (JV) between Hiranandani Group and global private equity firm Blackstone. It is developing industrial and logistics parks across Mumbai MMR region, Pune, Nashik, Chennai and Bengaluru with a plan to deliver 15 million sq ft of space Pan India in the next five years, having an investment outlay of USD 500 million.",
                ]
            },
            {
                headline: "5 reasons why Indian logistics industry is happy",
                title: "5-reasons-why-Indian-logistics-industry-is-happy",
                headimage: "<?php echo base_url(); ?>assets/images/news/budget.jpeg",
                date: "February 2, 2021",
                time: "2:30 AM",
                headArticle: "Many logistics companies are pleased with the budget that was in line with their expectations. However, the industry is waiting to see the results of these measures in their field of work.",
                article: [
                    "The union budget 2021-22 presented by finance minister Nirmala Sitharaman in the parliament increased the infrastructure spending significantly with focus on new economic corridors, improved road, railway infrastructure and push towards digitalisation.",
                    "Many logistics companies are pleased with the budget that was in line with their expectations. However, the industry is waiting to see the results of these measures in their field of work. The proposed solutions include a succinct focus on improving road and railway infrastructure; investments in national highway corridors and economic corridors will aid in the speedy movement of goods and improve turnaround time which, in the long run, will bring down logistics costs significantly.",
                    "Rajiv Agarwal, CEO and MD, Essar Ports, said, “The Infrastructure spending is going up by 34 percent through NIP and a welcome focus on boost in the road and railway infrastructure with new economic corridors planned will certainly help the growth of the logistics sector and will lead to enhancing trade in the country.”",
                    "“The announcement of the launch of the National Asset Monetisation Pipeline which will include Transmission lines of Power Grid, oil and gas pipelines, airports, toll roads etc will be a game-changer. Government's increased focus on the infrastructure sector will certainly bring in positive measures for the holistic growth of the logistics and maritime sector. No new tax is a very big positive in these times,” he added.",
                    "1. New economic corridors, better road infrastructure Shashi Kiran Shetty, chairman, Allcargo Logistics, ECU Worldwide and Gati, said, “Proposals to boost operational contingencies of road infrastructure and build more economic corridors have the potential to increase efficiencies across the logistics ecosystem and simulate regional economies to encourage local entrepreneurial initiatives.”",
                    "K Satyanarayana, co-founder & director, Ecom Express, expressed, “We are encouraged to see the government’s commitment towards ensuring smooth logistics services by creating an outlay budget for national highway projects to the tune of ₹1.18 lakh crore of 8,500 km by March 2022 and an additional 11,000 km of the national highway corridor.”",
                    "Aneel Gambhir, CFO, Blue Dart, noted, “The national highway work planned in Tamil Nadu, Kerala, West Bengal, Assam will further assist in the final goal of last-mile delivery and we are eager to see its results on our business.”",
                    "Vishal Sharma CEO, cluster India and Indian sub-continent, DB Schenker, said, “The fund allocation for the infrastructure development of transport sector, including roads and railways, is definitely a positive push for the logistics industry and will have a long-term impact on last-mile deliveries.”",
                    "Avinash Raghav, co-founder & MD, Shift Freight, said, “The new economic corridor to boost road infrastructure and the decision to award 13,000 km of roads under the Bharatmala project are welcome moves by the centre. This will not only create better connectivity but will add to job opportunities at the grassroot levels. Better connectivity will translate into better service to customers looking for quick and seamless service from logistics support providers.”",
                    "Anjani Mandal, CEO, 4TiGo Logistics, noted, The budget announcements were in line with expectations. There is a continuance of large outlay on infrastructure creation, building & improving large tracts of highways to facilitate road transportation, all of which support the logistics industry directly & indirectly.",
                    "“When seen in combination with the record budgetary allocation for rail infrastructure toward the freight corridors, the importance of rail & road multi-modal will become increasingly important,” he added.",
                    "2. More money for Dedicated Freight Corridors Deepal Shah, chief financial officer, Allcargo Logistics, said, “Placing a priority on the commissioning of the eastern and western dedicated freight corridors (DFCs) has been one of the key highlights (for the logistics sector) of budget 2021 presented by the finance minister. Expediting the completion of the DFC’s will decongest highly saturated road networks in the country, facilitate speedier freight transportation and help in reducing logistics costs. The construction of industrial corridors and logistics parks in proximity holds the potential to create local economies and generate employment opportunities on a large scale and push Make in India.”",
                    "Prem Kishan Dass Gupta, chairman & managing director, Gateway Distriparks, noted, “With road and rail connectivity being an indispensable factor of the economic development, and allocation of ₹1,10,055 crore for railways has been made where the eastern and western dedicated freight corridors will be commissioned by June 2022. This will help in bringing down the logistics cost as well as ensure smooth connectivity between different points of the country and ensure easy and faster freight movement.”",
                    "Abhijit Malkani, co-CEO & country head, ESR India, said, “National infrastructure pipeline extended to cover over 7,000 projects is a welcome move towards driving economic growth. The commissioning of eastern and western dedicated freight corridors by 2022 and 3 new dedicated freight corridors will boost connectivity and will have an impact towards lowering the logistics cost as a percentage of GDP and provide momentum to the industrial and warehousing sector.”",
                    "Mandal informed, “In the medium term, the share of railways in overall goods transportation will increase substantially and it will enhance the competitiveness of Indian supply chain across industries by lowering the cost of transportation and also improve connectivity between production and consumption markets - mainly domestic but also global.",
                    "Dhruvil Sanghvi, chief executive officer, LogiNext, said, “The proposals to set up freight corridors across the country, as well as the proposal for a future-ready rail system, along with the development of national highways, will bridge the gaps that currently exist, bringing in better connectivity between production and consumption markets.”",
                    "3. Digital technology got a push",
                    "Satyanarayana said, “In particular, we welcome the continued focus of a digital India with the introduction of a ₹1,500 crore-scheme on digital payment which will help smoothen the customer interface for logistics companies like us.",
                    "Sanghvi, expressed, “Furthermore, the push towards digitisation along with proposals of the one year tax holiday for startups and extending cap gains tax exemption for investment into start-ups shows the intent towards making it easier to do business in India and push forward on the technology wave.”",
                    "Shah of Allcargo Logistics said, “Enabling time-bound tax assessments and the extension of faceless assessment to the Income Tax Administrative Tribunal will play a key role in ensuring transparency, accountability and boosting taxpayer confidence.",

                ]
            },
            {
                headline: "National infrastructure pipeline expanded to cover 7400 projects",
                title: "National-infrastructure-pipeline-expanded-to-cover-7400-projects",
                headimage: "<?php echo base_url(); ?>assets/images/news/budget2.jpg",
                date: "February 1, 2021",
                time: "2:30 AM",
                article: [
                    "The government has extended its Rs 111-lakh-crore ($1.5 trillion) National Infrastructure Pipeline to cover more projects by 2025 in an effort to shore up economic growth as the nation recovers from the pandemic-induced recession.",
                    "“The National Infrastructure Pipeline, which was launched with 6,835 projects, has now expanded to 7,400 projects. Around 217 projects worth Rs 1.10 lakh crore under some key infrastructure ministries have been completed,” Finance Minister Nirmala Sitharaman said in her Budget 2021 speech on Feb. 1, 2021.",
                    "The programme will require an increase in funding from the government as well as the financial sector, she said. For this, the government is proposing to take three concrete steps:",
                    "Building new roads, rail links and other social and economic infrastructure is key for attracting investments and making India a $5-trillion economy. The NIP—jointly funded by the central government (39%), state government (40%) and the private sector (21%)—aims to invest in projects spanning across sectors such as energy, social and commercial infrastructure, communication, water and sanitation.",
                    "Besides, the government will set up a new development finance institution called the National Bank for Financing Infrastructure and Development. This will be set up on a capital base of Rs 20,000 crore and will have a lending target of Rs 5 lakh crore in three years, Sitharaman said.",
                    "“Infrastructure needs long-term debt financing. A professionally managed development financial institution is necessary to act as provider, enabler and catalyst for infrastructure financing,” the finance minister said.",
                ]
            },
            {
                headline: "Logistics sector: Covid-19 alters logistics of trade",
                title: "Logistics-sector-Covid-19-alters-logistics-of-trade",
                headimage: "<?php echo base_url(); ?>assets/images/news/logistic.jpg",
                date: "October 5, 2020",
                time: "2:30 AM",
                headArticle: "Growth in e-commerce has led to a demand for temporary warehouses, with occupiers seeking alternative sites to service customers better, even as prospects remain good for the sector",
                article: [
                    "With e-commerce driving the logistics sector in the time of Covid-19, there has been a spike in demand for temporary warehouses, signalling a structural shift in the approach of companies and investors even as the overall sentiment remains positive. While industrial leasing in the top eight cities of India stood at 11 million sq feet in the first half of 2020, the pandemic has led to demand growing for warehouses with a lease tenure of 6-11 months",
                    "Occupiers are looking for alternative locations as it helps in continuity of business and mitigates delays in delivery. The urban logistics sector is thus considering conventional retail spaces, banquet and marriage halls for alternative use as city warehouses. Besides there are upcoming markets like Guwahati, Lucknow, Patna, Jaipur, Coimbatore, Rajpura, Indore, Vijayawada, Hosur and Kochi on which the sector is focussing, seeking to enlarge its footprint. Growth prospects for these markets have brightened with the government unveiling the Atmanirbhar Bharat programme which aims at self-reliance.",
                    "Yogesh Shevade, head — Industrial Services, JLL India, an investment and real estate management firm, says the challenge posed by Covid-19 has made large companies consider outsourcing supply chain management for the sake of efficiency. With realtors shifting their focus to development of logistics real estate, manufacturing firms are trying to get space on lease, seeking ‘ready to occupy and built to suit industrial spaces’ with higher specifications and pre-approved usage.",
                    "As for investors, there is a growing trend towards acquisition of logistics platforms rather than individual assets. The investment of Rs 380 crore by global private equity (PE) giant Blackstone in the Mumbai-based AllCargo Logistics and the PE company’s tie-up with the Hiranandani Group’s GreenBase to build industrial warehousing across India, entailing an investment of Rs 2,500 crore, illustrate this trend. Although these deals were struck before the lockdown, the mood guiding them has persisted, albeit with some change in approach. Investors are trying to gain captive tenant networks and achieve scale, the scope for which is large in India.",
                    "Says Ramesh Nair, CEO and country head India, JLL, “while growth of the logistics sector in value terms is likely to slow down and there may be yield contraction in some markets, investor confidence and capital values are expected to remain intact.” In fact, the growth of internet penetration rates, expansion of online grocery and omni-channel retailing and integration of technology with warehousing and storage which the pandemic has fuelled, augurs well for logistics real estate as an asset class. At $195 billion, industrial and logistics real estate is already the second largest asset class globally.",
                    "According to a JLL report, the reimagination of the logistics sector is making occupiers embrace technology, innovative solutions, modern processes and digital transformation to meet evolving consumer habits. Vital in this context is the low e-commerce penetration in India– a mere 5%, as against online retail sale accounting for 14% of global retail sales in 2019. Its rapid growth in the coming years will push the creation of suburb warehouses, in-city warehouses, tier-1 and tier-2 city warehouses and multi-storied warehouses, the report says. For instance, this trend is on ample display at Dulaghar in Howrah—which is growing fast as a global trading hub for readymade garments— with a number of multi-storied warehouses having come up and many more at the development stage.",

                ]
            },
            {
                headline: "T.N. signs 14 MoUs to bring in ₹10,055 cr. investment",
                title: "TN-signs-14-MoUs-to-bring-in-10055-cr-investment",
                headimage: "<?php echo base_url(); ?>assets/images/news/tamilnadu.jpg",
                date: "October 13, 2020",
                time: "3:39 AM",
                headArticle: "The projects envisaged have the potential to generate employment for over 7,000 people",
                article: [
                    "Chief Minister Edappadi K. Palaniswami on Monday signed 14 MoUs entailing investments of ₹10,055 crore with potential to generate employment for over 7,000 people. The projects include fresh and expansion investments in locations including Chennai, Chengalpattu, Kancheepuram, Tirunelveli, Thoothukudi, Tenkasi, Ramanathapuram, Tiruppur and Tiruvannamalai districts.",
                    "Tamil Nadu Industries Secretary N. Muruganandam said that at a time when the world economy is gradually recovering from the adverse fallout of the COVID-19 pandemic, Tamil Nadu has been taking all steps to accelerate industrial development by attracting investments. “During 2020 (up to September), the State has signed 42 MoUs worth ₹31,464 crore,” he added.",
                    "A senior official said the Strengthening Guidance (Tamil Nadu’s nodal agency for investment promotion and single window facilitation) team has helped the State bring in more investments. “The CM has been personally viewing each project or firm that evinces interest to invest in Tamil Nadu. These two formulas have worked out well,” he said. According to Neeraj Mittal, MD and CEO of Guidance, “The teams (Guidance, Industries Department and Sipcot) have been working 24/7 and we have broadened the scope of picking up leads. The CM is also reviewing all investment proposals that come in. And this has helped bring in more investment.”",
                    "Tamil Nadu’s excellent industrial ecosystem, trained manpower, connectivity, connected supply chains and pragmatic policies allows investors to take advantage of global realignment of value chains, he said.",
                    "On Monday, the biggest investment deal of ₹6,300 crore came in from JSW Renew Energy Limited for a hybrid renewable project for 810 MW in Thoothukudi, Tenkasi, Tirunelveli and Tiruppur and 50 MW captive wind energy project in Rameswaram. An estimated 2,420 persons could get jobs.",
                    "Greenbase Industrial Parks, a part of the Hiranandani Group, would establish an Industrial Logistics Park in Oragadam at an investment of ₹750 crore.",
                    "Mantra Data Center (Spain) has agreed to invest ₹750 crore in a data centre project near Chennai. Hong Kong-based Aosheng Hitech Ltd (₹200 crore) will manufacture carbon fiber plates. Vans Chemistry, Singapore has proposed to establish an e-waste management facility for dismantling, recycling and precious metals refining project at ₹50 crore.",
                    "Inox Air Products, which the State said played a significant role in supplying oxygen for COVID patients, has signed an MoU for manufacturing of liquid oxygen in Hosur. And Counter Measures Technologies would invest ₹ 51 crore in a project in the Tamil Nadu Defence Industrial Corridor.",
                    "A few companies signed deals for expansion. Apollo Tyres has proposed to establish a ₹505 crore expansion project in SIPCOT Oragadam Industrial Park. TPI Composites, USA has proposed a ₹300 crore expansion plan for manufacture of wind blades in Oragadam. Biscuit manufacturer Britannia has ₹250 crore expansion plans at SIPCOT Gangaikondan. Hyundai Wia, South Korea, will expand its facility in Sriperumbudur at ₹109 crore.",
                    "Li-Energy (₹300 crore) has proposed manufacturing of EV battery packs; LS Automotive Pvt Ltd (₹ 250 crore), South Korea has proposed manufacture of automotive switches in Tiruvallur; and Grin Tech Motors & Services (₹90 crore) has proposed manufacturing of Battery and BMS in Ambattur.",

                ]
            },
            {
                headline: "Half a dozen global firms are in talks for billion-dollar deals: Hiranandani",
                title:"Half-a-dozen-global-firms-are-in-talks-for-billion-dollar-deals-Hiranandani",
                headimage: "<?php echo base_url(); ?>assets/images/news/hiranandini.jpg",
                date: "Jan 27, 2020",
                time: "2:30 AM",
                headArticle: "In the next 10 years, opportunity in logistics and industrial parks is going to be robust, says Niranjan Hiranandani, founder of Hiranandani group",
                article: [
                    " Niranjan Hiranandani, founder of real estate developer Hiranandani group, comments on his plans for expansion and diversification into logistics, as well as possible collaborations with overseas companies in real estate, which comes despite the ongoing economic slowdown.",
                    "In December 2019, Greenbase, a unit of Hiranandani group, entered into an equal joint venture with Blackstone Investments Group for the development of logistics and industrial parks across India. Edited excerpts:",
                    "Post the implementation of the goods and services tax (GST), we thought that there is an opportunity for logistics platforms. We ourselves put three projects into the platform. One was in Talegaon in Pune, which was 250 acres or thereof. The second project is of 110 acres in Chennai at Oragadam.",
                    "The third project is in Nashik, which is of 77 acres. Now we are going to put new projects in four more locations into the platform—Ahmedabad, Kolkata, Gurugram and Durgapur.",
                    "These are logistics parks, which will have warehousing and also be industrial parks. We have already signed one agreement with (wind-turbine maker) Vestas for 30 acres in Chennai (suburb) Oragadam. We have finalized an industrial park with them, which will come up in the next one year. We are in the process of signing two transactions in Pune. In the next 10 years, opportunity in logistics and industrial parks is going to be robust. Blackstone was very enthusiastic to join hands with us and we expect to invest ₹2,500 crore in the next two years on this platform. Every e-commerce player is interested in logistics. Even other sectors are looking interesting. Let us look at people such as Ikea. They would like to see deliveries done the next day for all the CKD (completely knocked down) goods that are there.",
                    "We think Blackstone has enough relationships to bring in any global best practices to us (in logistics). Brookfield invested a billion dollars in 2017 and we expect that in the next one or two years we will have some more foreign funds co-invest with us in projects other than Blackstone. So may be about half a dozen or so are in talks with us. None of the transactions are likely to be of less than half a billion to a billion dollars. We think there are possibilities of investments coming in of more than a billion dollars. It could be as soon as 12 months. Deals may be signed any time worthy offerings are made. All these are in the real estate space.",
                    "As far as the volume of money is concerned I don’t think that has reduced. However, maybe in the last two years it has not increased. Earlier it would increase every year.",
                ]
            },
            {
                headline: "Blackstone ties up with Hiranandani to enter warehousing business",
                title:"Blackstone-ties-up-with-Hiranandani-to-enter-warehousing-business",
                headimage: "<?php echo base_url(); ?>assets/images/news/warehousing.jpg",
                date: "Dec 25, 2019",
                time: "11:22 AM",
                headArticle: "The partnership would allow Blackstone to tap the growing Indian warehousing market.The Blackstone-Hiranandani platform will initially build industrial parks at various locations",
                article: [
                    "Global private equity firm Blackstone Group Inc has formed a joint venture with Greenbase, a Hiranandani group firm, to develop warehousing and logistics parks across the country. This marks the entry of Blackstone, a US-based company, into the Indian warehousing and logistics sector.",
                    "The equal joint venture plans to invest ₹2500 crore to develop around 12 million sqft of industrial and warehousing assets across the country in three to four years, said Niranjan Hiranandani, founder and managing director, Hiranandani Group.",
                    "“We have a very bullish view on the economy in the long term. Logistics and warehousing will be one of the major beneficiaries of this growth. The joint venture’s investment will also contribute to economic growth as well as employment generation in the relevant locations, Hiranandani said.",
                    "The Blackstone-Hiranandani platform will initially build industrial parks at Greenbase’s 267 acres land in Pune, 115 acres in Chennai’s industrial suburb Oragadam, 73 acres in Nashik, and 25 acres in Durgapur.",
                    "The company has successfully closed customer transactions of about 1 million-square-foot for built-to-suit (BTS) space with end-users such as Coopers (for Talegaon) and Vestas (at Oragadam), according to Shridhar, group director and chief executive officer of infrastructure (industrial and logistics), Greenbase.",
                    "The partnership would allow Blackstone to tap the growing Indian warehousing market. Blackstone has been expanding its commercial real estate portfolio rapidly in India, However, it has also been looking for opportunities to enter into the industrial warehousing business.",
                    "A spokesperson with Blackstone chose not to comment on the development."
                ]
            },
            {
                headline: "Hiranandani to invest Rs 1,000 crore in industrial park in Chennai",
                title:"Hiranandani-to-invest-Rs-1000-crore-in-industrial-park-in-Chennai",
                headimage: "<?php echo base_url(); ?>assets/images/banner1.jpg",
                date: "Sep 12, 2019",
                time: "3:02 PM",
                headArticle: "Chennai, Sep 12 () Realty firm Hiranandani group will invest about Rs 1,000 crore to develop 115-acre industrial and logistics park here and is setting up a wind turbine manufacturing unit for Vestas",
                article: [
                    "Realty firm Hiranandani group will invest about Rs 1,000 crore to develop 115-acre industrial and logistics park here and is setting up a wind turbine manufacturing unit for Vestas. Hiranandani group firm Green Base will create a wind turbine park and warehousing set-up for Vestas India, the leading wind turbine manufacturing multinational, at Oragadam,Chennai.",
                    "The ground breaking ceremony for the 'built to suit' unit for Vestas was held here.",
                    "Vestas India is setting up an assembly and warehousing facility, which will be spread over 23 acres at this industrial and logistics park. The development will be spread over half a million sq ft.",
                    "We will invest around Rs 1,000 crore over the next 2-3 years on the development of this park, Hiranandani group MD Niranjan Hiranandani told",
                    "As part of the business diversification, he said the group has ventured into industrial and logistics park segment which has huge growth potential.",
                    "The government has granted infrastructure status to the logistics industry, making it an even more positive situation, Hiranandani said.",
                    "The group has allocated 115 acres for the industrial and logistics park out of 430 acres of mixed used integrated township, Hiranandani Parks here.",
                    "Apart from our land bank measuring over 500 acres, we are in the process of acquiring new land banks, either directly or through partnerships /JVs across India for the Green Base platform, said N Shridhar, Group Director & CEO - Infrastructure (Industrial & Logistics).",
                    "Our ongoing projects as also 'planning in progress' are located across Pune, Oragadam in Chennai, Nashik, Bhiwandi, Durgapur, Kolkata and Bengaluru. We are targeting close to 12 million sq ft over the next 5 to 7 years. This portfolio is a good yield asset class, which most probably will be available for retail participation through a REIT/InvIT platform, he added Denmark-based Vestas is the energy industry's global partner on sustainable energy solutions. It is into designing, manufacture, installation, and servicing wind turbines across the globe.",

                ]
            },
            {
                headline: "Hiranandani Group's GreenBase to develop industrial & logistics park for Vestas India in Chennai",
                title:"Hiranandani-Group's-GreenBase-to-develop-industrial-&-logistics-park-for-Vestas-India-in-Chennai",
                headimage: "<?php echo base_url(); ?>assets/images/news/vestas.jpg",
                date: "Sep 16, 2019",
                time: "3:02 PM",
                headArticle: "Hiranandani Group's fully owned subsidiary GreenBase will develop industrial and logistics facilities of global standards spread over half a million square feet in Oragadam, Chennai for wind turbine manufacturing multinational Vestas India.",
                article: [
                    "Hiranandani Group's fully owned subsidiary GreenBase will develop industrial and logistics facilities of global standards spread over half a million square feet in Oragadam, Chennai for wind turbine manufacturing multinational Vestas India",
                    "The industrial and logistics park will be built on 430 acres out of the total mixed used integrated township of 115 acres. The acreage is dry land, and is suitable for industrial and logistics usage. It offers strategic advantages, including provision of STP, power substation, security cabin, boundary wall etc. Infrastructure and security for the industrial parks has been well planned and executed.",
                    "GreenBase will ‘built-to-suit’ a wind turbine park and warehousing set-up for which the ground breaking ceremony took place at the industrial and logistics park located within Hiranandani Parks, Oragadam, Chennai on September 12.",
                    "Vestas India will set up an assembly and warehousing facility spread over 23 acres at the industrial and logistics park being developed by GreenBase. The project will create new jobs and business opportunities for allied and ancillary industrial units, and will give a big fillip to development of the industrial and manufacturing sector in Oragadam, said Dr Niranjan Hiranandani, co-founder and MD, Hiranandani Group.",
                    "“The Indian government has also granted infrastructure status to the logistic industry; making it an even more positive situation. These are favourable reasons, which provide an impetus to diversify and foray into the industrial and logistics sector,” he added",
                    "The operating model of industrial and logistics parks by GreenBase include built-to-suit industrial facilities, cold storage, built-to-suit warehouses for end customers, as well for large 3PL players. For businesses that opt for plug-and-play operations, and need warehousing and logistics solutions, GreenBase will offer larger space options. It will also play the role of a partner, assisting the customer with end-to-end solutions like land acquisition, master planning, optimising design and also build-to-suit and a project management consultant.",
                    "“Hiranandani Group’s intrinsic strength in infrastructure development and township development gives GreenBase natural advantage over competition, to build and deliver world-class industrial and logistics parks. Apart from our land bank measuring over 500 acres, we are in the process of acquiring new land banks, either directly or through partnerships /JVs across pan-India for the GreenBase platform,” said N Shridhar, Group director & CEO – Infrastructure (Industrial & Logistics).",
                    "“Our on-going projects as also ‘planning in progress’ are located across Pune, Oragadam in Chennai, Nashik, Bhiwandi, Durgapur, Kolkata and Bengaluru. We are targeting close to 12 million sq. ft. over the next 5 to 7 years. This portfolio is a good yield asset class, which most probably will be available for retail participation through a REIT/InvIT platform,” he added.",
                ]
            },
            {
                headline: "Hiranandani, Blackstone ink JV To develop industrial, logistics and warehousing assets",
                title:"Hiranandani-Blackstone-ink-JV-To-develop-industrial-logistics-and-warehousing-assets",
                headimage: "<?php echo base_url(); ?>assets/images/news/warehousing.jpg",
                date: "Dec 25, 2019",
                time: "3:02 PM",
                headArticle: "The JV will initially include Hiranandani Green Base’s 267 acres in Pune, 115 acres in Chennai’s industrial suburb Oragadam, 73 acres in Nashik and around 25 acres in Durgapur, West Bengal.",
                article: [
                    "GreenBase, a fully owned subsidiary of India’s leading real estate conglomerate, Hiranandani Group,  Niranjan Hiranandani initiative, has inked a joint venture with Blackstone Investments Group to set up a 50:50 joint venture, a Hiranandani-Blackstone pan-India platform for development of industrial, logistics and warehousing assets.",
                    "The strategic move comes in sync with opportunities created by structural reforms like GST, improved road infrastructure as also the Make in India initiative among others, which augur well for the industrial and logistics sector. “There could be short-term hiccups, which happens in every economy, but we are certainly on path for India to become a $5 trillion economy,” said Niranjan Hiranandani, founder & MD, Hiranandani Group. “We have a very bullish view on the economy in the long term. Logistics and warehousing will be one of the major beneficiaries of this growth. The JV’s investment (estimated to be Rs 2,500 crores over the next 3-4 years) will also contribute to economic growth as well as employment generation in the relevant locations,” he added.",
                    "The JV will initially include Hiranandani Green Base’s 267 acres in Pune, 115 acres in Chennai’s industrial suburb Oragadam, 73 acres in Nashik and around 25 acres in Durgapur, West Bengal.",
                    "The quantum of investment projected through the JV is estimated as both the entities investing over Rs 2,500 crores initially to develop the 12 million sq-ft industrial and warehousing assets portfolio of Hiranandani’s logistics venture GreenBase and additional assets to be built up coming through acquisitions of land or warehousing assets in other locations.The USP will be ‘customer delight’, which is true to our tradition, said N Shridhar, group director and CEO, infrastructure (industrial and logistics). “Greenbase has got into this business since the last two years to build ‘grade A’, world class infrastructure and BTS assets. Greenbase over the last year, has successfully closed customer transactions worth 1 million sq-ft for BTS at our locations, with end-users such as Coopers (for Talegaon) and Vestas (at Oragadam), while a few others are on the drawing board - some more to follow,” he added.",
                    "Given that logistics cost which at 13 % of GDP in India, is higher as compared to the western world where it is at 8% of GDP or so, there is ample opportunity in this sector to deliver optimised supply chain solutions and logistics/warehousing solutions, which bring down the cost and add value to the customers as well as corporates.",
                    "Hiranandani along with Blackstone will usher in an excellent value proposition to the end customers and deliver quality infrastructure at optimised value, effectively, creating value for the entity as well for the country.",
                ]
            },
            {
                headline: "Hiranandani Group promoted GreenBase signs industrial and warehousing deal with Vestas India",
                title:"Hiranandani-Group-promoted-GreenBase-signs-industrial-and-warehousing-deal-with-Vestas-India",
                headimage: "<?php echo base_url(); ?>assets/images/news/warehousingdeal.jpg",
                date: "Sep 13, 2019",
                time: "3:02 PM",
                headArticle: "Vestas India is setting up an assembly and warehousing facility, which will be spread over 23 acres at the Park",
                article: [
                    "GreenBase, a fully owned subsidiary of India’s leading real estate conglomerate, Hiranandani Group, will create a wind turbine park and warehousing set-up for Vestas India, the leading wind turbine manufacturing multinational, at Oragadam, Chennai. The development will be spread over half a million sq-ft.",
                    "The ground breaking ceremony for the ‘built to suit’ set-up took place on 12 September 2019 at the Industrial and Logistics Park, located within Hiranandani Parks, Oragadam, Chennai.",
                    "The newly established vertical ‘GreenBase’, the brain-child of Dr Niranjan Hiranandani will provide industrial and logistics parks which will be more customer-centric and build optimisation and efficiency for the end user. At Oragadam, GreenBase is creating and facilitating an industrial and logistics park of global standards. Given the Hiranandani Group’s track record in terms of its rich legacy and strength in developing mega, mixed-use integrated townships along with development of core infrastructure, the new development in the Logistics sector by GreenBase will dove-tail perfectly into the Group’s activities.",
                    "Vestas India is setting up an assembly and warehousing facility, which will be spread over 23 acres at the Park. This project by Vestas will result in creation of new jobs as also business opportunities for allied and ancillary industrial units, and will give a big fillip to development of the industrial and manufacturing sector in Oragadam, said Dr iranjan Hiranandani, co-founder and MD, Hiranandani Group.",
                    "“The Indian Government has also granted infrastructure status to the logistic industry, making it an even more positive situation. These are favorable reasons, which provide an impetus to diversify and foray into the industrial and logistics sector,” he added.",
                    "The Group has allocated 115 acres for the Industrial and Logistics Park out of 430 acres of the mixed used integrated township, Hiranandani Parks in Oragadam, Chennai. The acreage is dry land, and is suitable for industrial and logistics usage. It offers strategic advantages, including provision of STP, power substation, security cabin, boundary wall etc. Infrastructure and security for the industrial parks has been well planned and executed.",
                    "For end-users, the required core infrastructure in form of required water and uninterrupted power are available at the Industrial and Logistics Park. The development also opens up potential for attracting further investment through Vestas vendors within the Hiranandani Industrial & Logistics Park.",
                    "“Hiranandani Group’s intrinsic strength in infrastructure development and township development gives Green Base natural advantage over competition, to build and deliver world-class Industrial and Logistics Parks. Apart from our land bank measuring over 500 acres, we are in the process of acquiring new land banks, either directly or through partnerships/JVs across Pan-India for the Green Base platform,” said N Shridhar, group director & CEO – infrastructure (Industrial & Logistics).",
                    "“Our on-going projects as also ‘planning in progress’ are located across Pune, Oragadam in Chennai, Nashik, Bhiwandi, Durgapur, Kolkata and Bengaluru. We are targeting close to 12 million sq-ft over the next 5 to 7 years. This portfolio is a good yield asset class, which most probably will be available for retail participation through a REIT/InvIT platform,” he added.",
                    "The operating model of Industrial and Logistics Parks by GreenBase include built-to-suit industrial facilities, cold storage, built to suit warehouses for end customers as well for large 3PL players.",
                    "For businesses that opt for ‘plug and play’ operations, and need warehousing and logistics solutions, GreenBase will offer larger space options It will also play the role of a ‘partner’, assisting the customer with an ‘end-to-end solution’, which would include land acquisition, master planning, optimising design as also build to suit and a project management consultant.",
                ]
            },
            {
                headline: "Why India is betting on big storage sheds",
                title:"Why-India-is-betting-on-big-storage-sheds",
                headimage: "<?php echo base_url(); ?>assets/images/news/warehousingreuters.jpg",
                date: "Sep 13, 2019",
                time: "3:02 PM",
                headArticle: "Vestas India is setting up an assembly and warehousing facility, which will be spread over 23 acres at the Park",
                article: [
                    "In mid-April, Albinder Dhindsa, the co-founder of grocery e-tailer Grofers, found himself in a tricky situation. The company’s top team—including the supply chain head—was stuck in a Gurugram township that got earmarked as a containment zone. And demand for grocery was skyrocketing. “Initially, we could let one out of eight customers check out, Dhindsa told Mint, adding that “traffic now is 25-30 times of what it was in February.",
                    "The Grofers management team worked remotely, scrambling to add both workforce and warehousing capacity over the following weeks. The company ran 26 warehouses before the lockdown. It quickly added three more as demand spiked in April. Another five will open over the next two weeks. “These are smaller facilities. The warehouses were already built, which we are repurposing for our use, Dhindsa said.",
                    "Warehousing, or sheds where goods are stored, have become crucial in the post-covid world. Inside, storage racks can go up to five levels. If you can’t store enough, you cannot meet the demand and neither can you deliver fast. Most crucially, additional warehouses will now allow firms such as Grofers to create a buffer of goods.",
                    "Many warehousing complexes are expected to come up across India, more so in the post-covid world. Many e-commerce categories are expected to boom, as people make a behavioural shift from buying offline to shopping online.",
                    "Also, over the next couple of years, industrial warehousing is expected to see a sunrise as (as some expect) manufacturing shifts out of China. India wants to be prepared—developers, particularly. They are building warehouses at a frantic pace, often with private equity (PE) booty.",
                    "As things stand, across eight Indian cities—NCR, Mumbai, Bengaluru, Pune, Kolkata, Chennai, Hyderabad and Ahmedabad—quality warehousing stock totalled 211 million sq. ft in 2019. The stock is expected to rise to 253 million sq. ft this year and further to nearly 300 million sq. ft in 2021, JLL, a real estate services firm, projected.",
                    "“There is little vacancy. Of the 211 million sq. ft, about 21 million sq. ft is vacant today, said Chandranath Dey, head of industrial operations, business development and industrial consulting at JLL India. Who stands to gain from this warehousing rush? And how real, and long-lasting are the assumptions behind this investment spree to build large sheds across India?",
                    "Much of the new warehouses going live this year are sophisticated top-quality stuff. Such quality comes at a cost and increasingly, warehousing is becoming a big boy’s club. In April 2019, the Hiranandani Group set up a new company, GreenBase, which has entered into a joint venture with PE major Blackstone Group to build logistics and warehousing assets. The company has invested ₹500 crore.",
                ]
            },
            {
                headline: "Niranjan Hiranandani: A man extraordinaire",
                title:"Niranjan-Hiranandani-A-man-extraordinaire",
                headimage: "<?php echo base_url(); ?>assets/images/news/extraordinary.jpg",
                date: "Mar 6, 2020",
                time: "3:02 PM",
                headArticle: "Niranjan Hiranandani, co-founder and MD, Hiranandani Group of Companies, continues to build iconic structures. But there are myriad other roles he plays in life to help the sector and mankind",
                article: [
                    "A mere hour with Niranjan Hiranandani is not enough. The czar of real estate has been in the business of real estate for far too long and, one can safely say, has learnt everything there is to know under the sun. He has also learnt to take everything in his stride, which is of paramount importance in the perennially shifting arena of real estate development.",
                    "What makes him distinct in the unsporting world of real estate is his ability to be direct and outspoken. Be it government rules or the dynamically shifting nature of the development business, Hiranandani has remained true to his conscience at all times. Perhaps, it’s this reason that also makes him much sought after across industries. Besides being co-founder and MD at the Hiranandani Group, and CMD of Hiranandani Communities, he is also the national president of Naredco, the president of the apex industry body Assocham (The Associated Chambers of Commerce and Industry of India) and in January was appointed as one of the board members to find a resolution for Unitech. He considers this role as a public service to resolve the issues of numerous stranded home buyers.",
                    "All the above responsibilities, while being a feather in his cap, rests lightly on his able shoulders.",
                    "Set up in 1978, the Hiranandani Group is perchance the only developer to have a reputation for building an entire ’district’, Hiranandani Gardens, what is also known as Powai. Not only did it create townships and give citizens their early taste for luxury apartments, it also offered, and continues to offer, buyers a lifestyle option that was hitherto absent. Strangely, people in the 80s and 90s had not realised its absence. Hiranandani says, “That’s the beauty of townships. It offers people alternatives from the routine lifestyle they had been used to. It helps them grow and learn as an individual and as a family. As a Group, we will continue to focus on development of townships, while building on iconic structures that we are known for.”",
                    "Today, the Group has a presence in Chennai, Gujarat, and Maharashtra, and there is constant search for new locations that will fit in with its hallmark design mantra.",
                    "Over the years, the Group has diversified to education, hospitality, healthcare, retail and entertainment. Hiranandani believes in moving with the times. Moreover, his belief also stems from not only doing the right thing at the right time, but doing it well.",

                ]
            },
            {
                headline: "Warehousing to the rescue of Indian real estate",
                title:"Warehousing-to-the-rescue-of-Indian-real-estate",
                headimage: "<?php echo base_url(); ?>assets/images/news/warehousingreuters.jpg",
                date: "July 2, 2020",
                time: "7:39 PM",
                headArticle: "Godowns are going up. As the pandemic reworks the very dynamics of the economy, India's troubled real estate sector is pinning its hopes on the till-now unglamorous segment of warehousing for a glimmer of good news.",
                article: [
                    "While real estate was synonymous with the housing market for a long time, the lack of growth in that area had been troubling for long. The degrowth that came as an offshoot of the global financial crash of 2008-'09, and later developments like the hyperactivity of 'fly-by-night' operators, rule changes like RERA and not to mention de-monetisation. For example, according to Anarock, sales fell by half across the top seven cities in the country in the first half of this year, compared to the last 6sixmonths of 2019.",
                    "As an overall slowdown in the Indian economy took roots, the category had come to rely on the rising demand in office space in the past couple of years. But COVID-19 might just have put paid to that. With Work-From-Home, staggered attendance proving themselves to be more than just a passing fad, it is all but clear that the good times are over for big ticket office deals in the real estate space.",
                    "Enter, warehousing. Yes, the very same previously-considered dull segment of godowns and storage complexes are suddenly the new stars on the block. According to a report unveild by Knight Frank on Thursday, warehousing transactions have risen by leaps and bounds in the recent past. Demand growth has been healthy in all leading Indian cities, with growth in cities like Patna and Jaipur at over 200 per cent in 2020. ",
                    "The national capital region, the biggest market for warehousing, saw the largest volume absorption of warehousing space, with Mumbai and Pune not too far behind. According to the report, existing space under warehousing in India is presently just above 300 million sq ft, with a potential to add another 193 million sq ft. Cities with the most potential include Chennai, Hyderabad and Ahmedabad.",

                ]

            },
        ],
    };

    $(document).ready(function() {
        var newPost = newsdatas.news.find(newsData => newsData.title === id)
        console.log(newPost)
        $(".top-date").text(newPost.date);
        $(".headline").text(newPost.headline);
        $(".main-newspost-headlines").text(newPost.headArticle);
        $(".main-newspost img").attr('src', newPost.headimage);
        var con = newPost.article;
        var newscontent = con.map((content) => {
            return `<div>${content}</div>`
        }).join('');
        document.getElementById("newsContent").innerHTML = newscontent;

        var newRelated = newsdatas.news.map((relatedNews, index) => {
            var newsRelateds = `
                    <div class="related-post-block" data-id="${index + 1}">
                        <div class="related-post-container">
                            <img src=${relatedNews.headimage} alt="related-post"
                                class="related-news-img">
                        </div>
                        <div class="related-newspost-div">
                            <div class="related-newspost-heading">
                                ${relatedNews.headline}
                            </div>
                            <div class="related-newspost-date">
                                ${relatedNews.date}
                            </div>
                        </div>
                    </div>
                
        `;
            return newsRelateds;
        }).join('');
        document.getElementById("relatedNews").innerHTML = newRelated;

        $(".related-post-block").click(function() {
            var id = $(this).data('id');
            window.location.href = "<?php echo base_url() ?>newspost/" + id;
        });
    });
</script>