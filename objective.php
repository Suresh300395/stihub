<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Overview & Objectives | Science Technology & Innovation Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css?v=<?php echo time(); ?>">
    <script>document.documentElement.classList.add('js-enabled');</script>
</head>
<body>

    <!-- Header / Navigation Bar -->
    <?php
    $active_page = 'objective';
    include __DIR__ . '/navbar.php';
    ?>

    <!-- Main Content -->
    <main>
        <section class="overview-page-section">
            <div class="overview-page-container">
                <div class="overview-page-header reveal reveal-down">
                    <div class="overview-page-title-block">
                        <h2 class="overview-page-title">PROJECT<br>OVERVIEW</h2>
                    </div>
                    <div class="overview-page-divider"></div>
                    <div class="overview-page-subtitle-block">
                        <p class="overview-page-subtitle">Improving Scheduled Caste Livelihoods,<br>Education & Sustainability</p>
                    </div>
                </div>

                <div class="project-overview-grid">
                    <!-- Left: Details -->
                    <div class="project-details reveal reveal-left">
                        <h3 class="details-section-title">SUMMARY OF THE PROJECT</h3>
                        
                        <div class="detail-item">
                            <span class="detail-label">Project Title –</span>
                            <p class="detail-value">Science Technology & Innovation Hub for Development of Schedule Caste Communities (STI Hub)</p>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">Institutions –</span>
                            <p class="detail-value">Aditya University, Surampalem, Andhra Pradesh</p>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">Funding Agency –</span>
                            <p class="detail-value">Department of Science & Technology<br>DST/SEED/SCSP/STI/2022/970</p>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">Principal Investigators –</span>
                            <p class="detail-value">Dr. K V S Ramachandra Murthy, Professor<br>Department of Electrical & Electronics Engineering<br>Aditya Engineering College, Surampalem</p>
                        </div>
                        
                        <div class="detail-item">
                            <span class="detail-label">Project Operation Area –</span>
                            <p class="detail-value">Samanasa, Bhatnavilli Villages, Amalapuram Mandal, Dr. B R Ambedkar Konaseema District, Andhra Pradesh</p>
                        </div>
                    </div>
                    
                    <!-- Right: Photo & SDGs -->
                    <div class="project-visuals reveal reveal-right">
                        <img src="<?= BASE_URL ?>/images/konaseema_landscape.png" alt="Project Region - Konaseema" class="project-overview-img">
                        
                        <div class="sdg-row">
                            <!-- SDG 1 -->
                            <div class="sdg-card">
                                <img src="<?= BASE_URL ?>/images/sdg-en-01.png" alt="SDG 1: No Poverty" class="sdg-card-img">
                            </div>
                            
                            <!-- SDG 2 -->
                            <div class="sdg-card">
                                <img src="<?= BASE_URL ?>/images/sdg-en-02.png" alt="SDG 2: Zero Hunger" class="sdg-card-img">
                            </div>
                            
                            <!-- SDG 3 -->
                            <div class="sdg-card">
                                <img src="<?= BASE_URL ?>/images/sdg-en-03.png" alt="SDG 3: Good Health and Well-being" class="sdg-card-img">
                            </div>
                            
                            <!-- SDG 4 -->
                            <div class="sdg-card">
                                <img src="<?= BASE_URL ?>/images/sdg-en-04.png" alt="SDG 4: Quality Education" class="sdg-card-img">
                            </div>
                            
                            <!-- SDG 8 -->
                            <div class="sdg-card">
                                <img src="<?= BASE_URL ?>/images/sdg-en-08.png" alt="SDG 8: Decent Work and Economic Growth" class="sdg-card-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Interventions Section -->
        <section class="interventions-section">
            <div class="interventions-container">
                <div class="interventions-header reveal">
                    <div class="interventions-title-block">
                        <h2 class="interventions-title">PROJECT<br>INTERVENTIONS</h2>
                    </div>
                    <div class="interventions-divider"></div>
                    <div class="interventions-subtitle-block">
                        <p class="interventions-subtitle">Technology-Based Interventions for<br>Sustainable Livelihood Development</p>
                    </div>
                </div>
                
                <p class="interventions-intro reveal">
                    A Science Technology and Innovation Hub is proposed to be established for addressing the above-mentioned issues for strengthening the existing livelihoods and well as creating new livelihood option through simple solutions, either by adapting existing technologies or modulating the existing solutions by downscaling the existing equipment. These interventions will improve the livelihood of small and marginalized communities in the selected villages. The details of proposed interventions along with justification is given below.
                </p>
            </div>
        </section>

        <!-- Proposed Technologies Full-Width Section -->
        <section class="proposed-technologies-section reveal" style="background-color: #F8FAFC; padding: 4rem 0; width: 100%;">
            <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem;">
                <h4 class="tech-section-title" style="display: flex; align-items: center; gap: 0.5rem;">
                    Details of Technologies Proposed / To be Proposed
                </h4>
                <ul class="tech-proposed-list" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 1.5rem;">
                    <li style="display: flex; gap: 1.25rem; align-items: flex-start;">
                        <span style="background-color: #174772; color: #FFFFFF; font-size: 0.85rem; font-weight: 700; min-width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 2px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">a</span>
                        <div style="line-height: 1.7; color: #4A5568; text-align: justify;">
                            <strong style="color: #174772;">Community Level Mango Pulp Extractor:</strong> A low-cost infrared assisted solar dryer will be designed and developed to use at community level. The proposed intervention will help in maintain the quality of the product. The proposed machine will help in controlling the pathogen load thereby improving the shelf life of the product.
                        </div>
                    </li>
                    <li style="display: flex; gap: 1.25rem; align-items: flex-start;">
                        <span style="background-color: #174772; color: #FFFFFF; font-size: 0.85rem; font-weight: 700; min-width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 2px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">b</span>
                        <div style="line-height: 1.7; color: #4A5568; text-align: justify;">
                            <strong style="color: #174772;">Mushroom Cultivation with Banana Pseudo stems and Coir Waste:</strong> The pseudo stem, petiole and midrib of banana, which are usually abandoned to rot will be used as substrate. The method is less expensive owing to the easy availability of residue and offers double the yield compared to the use of straw for mushroom production. Additionally, coir pith will also be used as substrate to grow mushrooms.
                        </div>
                    </li>
                    <li style="display: flex; gap: 1.25rem; align-items: flex-start;">
                        <span style="background-color: #174772; color: #FFFFFF; font-size: 0.85rem; font-weight: 700; min-width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 2px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">c</span>
                        <div style="line-height: 1.7; color: #4A5568; text-align: justify;">
                            <strong style="color: #174772;">Design and Development of low-cost pyrolysis kiln for production of activated charcoal</strong>
                        </div>
                    </li>
                    <li style="display: flex; gap: 1.25rem; align-items: flex-start;">
                        <span style="background-color: #174772; color: #FFFFFF; font-size: 0.85rem; font-weight: 700; min-width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 2px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">d</span>
                        <div style="line-height: 1.7; color: #4A5568; text-align: justify;">
                            <strong style="color: #174772;">Development of mini semi-automatic fiber extractor and grader</strong>
                        </div>
                    </li>
                    <li style="display: flex; gap: 1.25rem; align-items: flex-start;">
                        <span style="background-color: #174772; color: #FFFFFF; font-size: 0.85rem; font-weight: 700; min-width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 2px solid #FFFFFF; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">e</span>
                        <div style="line-height: 1.7; color: #4A5568; text-align: justify;">
                            <strong style="color: #174772;">Design and Development of Adjustable Hydraulic Harvester for Oil Palm:</strong> A light weight adjustable hydraulic harvester with camera and pulley – will help prevent falling of unnecessary bunches and harvesting of ripened bunches.
                        </div>
                    </li>
                </ul>

                <!-- Divider -->
                <hr style="border: 0; border-top: 1px solid #E2E8F0; margin: 3.5rem 0;">

                <h4 class="tech-section-title reveal">
                    Expected Benefits to the Target Groups/Population (5-6 Clear Cut Deliverables)
                </h4>
                <ul class="benefits-target-list reveal">
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">Improvement in socioeconomic condition of SC population of target area</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">New and Alternative technologies</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">Alternate Livelihood options</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">Greater access to resources, education, health, infrastructure and other minimum requirements</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">Increase in knowledge of people, improvement in skill and capacity building</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">Increase household income levels</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">Improved habitat and environment conditions</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start;">
                        <i class="bi bi-check-circle-fill" style="color: #FD752C; font-size: 1.15rem; flex-shrink: 0; margin-top: 0.1rem;"></i>
                        <span style="line-height: 1.6; color: #4A5568;">Greater access to markets.</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Interventions Section (Cards Grid & Accordion) -->
        <section class="interventions-section" style="padding-top: 4rem;">
            <div class="interventions-container">
                <!-- 4-Card Grid -->
                <div class="interventions-grid">
                    <!-- Card 1 -->
                    <div class="intervention-card reveal reveal-delay-1" onclick="scrollToAccordion(1)">
                        <div class="card-badge">01</div>
                        <div class="card-img-box">
                            <img src="<?= BASE_URL ?>/images/mango_extractor.png" alt="Community Level Mango Pulp Extractor">
                        </div>
                        <h3 class="card-title">Design and Development of Community Level Mango Pulp Extractor</h3>
                        <p class="card-desc">Low-cost community-level mango pulp extractor with integrated solar drying technology for better quality and extended shelf life.</p>
                        <span class="card-link">View Details <i class="bi bi-arrow-right"></i></span>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="intervention-card reveal reveal-delay-2" onclick="scrollToAccordion(2)">
                        <div class="card-badge">02</div>
                        <div class="card-img-box">
                            <img src="<?= BASE_URL ?>/images/mushroom_cultivation.png" alt="Mushroom Cultivation">
                        </div>
                        <h3 class="card-title"> Mushroom Cultivation with Banana Pseudo stems and Coco Peat</h3>
                        <p class="card-desc">Design and development of low-cost mushroom cultivation technology using banana pseudo stems and coco peat as sustainable growing substrates.</p>
                        <span class="card-link">View Details <i class="bi bi-arrow-right"></i></span>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="intervention-card reveal reveal-delay-3" onclick="scrollToAccordion(3)">
                        <div class="card-badge">03</div>
                        <div class="card-img-box">
                            <img src="<?= BASE_URL ?>/images/coconut_waste.png" alt="Coconut Waste Processing">
                        </div>
                        <h3 class="card-title">Byproducts by Processing of Coconut Waste</h3>
                        <p class="card-desc">Development of value-added products from coconut waste, including activated charcoal, coir fiber, biodegradable pots, and other eco-friendly materials.</p>
                        <span class="card-link">View Details <i class="bi bi-arrow-right"></i></span>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="intervention-card reveal reveal-delay-4" onclick="scrollToAccordion(4)">
                        <div class="card-badge">04</div>
                        <div class="card-img-box">
                            <img src="<?= BASE_URL ?>/images/oil_palm_harvester.png" alt="Adjustable Hydraulic Harvester">
                        </div>
                        <h3 class="card-title">Design and Development of Adjustable Hydraulic Harvester for Oil Palm</h3>
                        <p class="card-desc">Design and development of an adjustable hydraulic harvester with camera-assisted operation for safe, efficient, and ergonomic oil palm harvesting.</p>
                        <span class="card-link">View Details <i class="bi bi-arrow-right"></i></span>
                    </div>
                </div>
                
                <!-- Detailed Accordion Accordion -->
                <div class="interventions-accordion reveal">
                    <!-- Item 1 -->
                    <div class="accordion-item" id="accordion-1">
                        <div class="accordion-header" onclick="toggleAccordion(1)">
                            <div class="accordion-header-left">
                                <span class="accordion-number">01</span>
                                <h4 class="accordion-title">Design and Development of Community Level Mango Pulp Extractor</h4>
                            </div>
                            <i class="bi bi-dash accordion-toggle-icon"></i>
                        </div>
                        <div class="accordion-content active" style="display: block;">
                            <!-- Full-Width Overview on Top -->
                            <div class="accordion-overview-fullwidth">
                                <!-- Sub Panel 1: Overview -->
                                <div class="sub-panel">
                                    <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                        <div class="sub-panel-header-left">
                                            <i class="bi bi-info-circle-fill sub-panel-icon"></i>
                                            <span>Overview</span>
                                        </div>
                                        <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                    </div>
                                    <div class="sub-panel-body active" style="display: block;">
                                        <p style="margin-bottom: 0.8rem;">Currently, mango jelly preparation involves manual extraction of pulp by squeezing the ripen mangoes.  This process is inefficient and laborious, often leads to contamination and severe physical stress on workers and mango jelly is sun dried and is often of low quality and has less shelf life due to flies and other insect infestations.</p>
                                        <p style="margin-bottom: 0.8rem;">To improve the quality of jelly, and to increase the shelf life, a low-cost infrared assisted solar dryer will be designed and developed to use at community level.   Technology can be extended to pulping of locally available fruits such as Cashew apple, palm fruit and other seasonal fruits.</p>
                                        <p style="margin-bottom: 0.8rem;">Ripe fruits which are free from defects and spoilage are selected and washed.   Pulp is extracted in the pulping machine.  It is canned and pasteurised.  Pulp is layered on trays dried in infra red light assisted Solar drier. Temperature and humidity are maintained to prevent maillard reactions and over heating.</p>
                                        <p>The proposed intervention will strengthen the already existing cottage industry on mango pulp and will also open up new avenues for people working as agricultural labor to take this up as an alternate livelihood activity.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 2-Column Grid Below for Details & Diagrams -->
                            <div class="accordion-content-grid" style="padding-top: 1rem;">
                                <div class="accordion-details">
                                    <!-- Sub Panel 2 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-exclamation-triangle-fill sub-panel-icon"></i>
                                                <span>Problem Statement</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>Traditional mango pulp processing relies heavily on manual extraction and open sun drying, resulting in high labor requirements, lower processing efficiency, hygiene concerns, inconsistent product quality, and reduced shelf life.</p>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 3 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-lightbulb-fill sub-panel-icon"></i>
                                                <span>Proposed Technology</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>A low-cost community-level mango pulp extraction system integrated with an infrared-assisted solar dryer is proposed to enhance processing efficiency, maintain product quality, improve hygiene, and extend shelf life.</p>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 4 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-shield-fill-check sub-panel-icon"></i>
                                                <span>Key Features</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="features-list">
                                                <li><i class="bi bi-check-circle-fill"></i><span>Semi-automatic pulp extraction</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Infrared assisted solar drying</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Improved hygiene and quality control</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Enhanced product shelf life</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Suitable for mango, cashew apple, palm fruit, guava and other seasonal fruits</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 5 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-graph-up-arrow sub-panel-icon"></i>
                                                <span>Expected Benefits</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="benefits-list">
                                                <li><i class="bi bi-check-circle-fill"></i><span>Reduced labour and processing time</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Improved product quality and safety</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Extended shelf life of processed products</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Enhanced income generation for rural communities</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Increased entrepreneurship and self-employment opportunities</span></li>
                                                <li><i class="bi bi-check-circle-fill"></i><span>Strengthening of cottage and small-scale food processing industries</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-diagrams">
                                    <h5 class="diagrams-section-title">Technology Concept</h5>
                                    <div class="diagrams-grid">
                                        <div class="diagram-box full-width" style="border: none; box-shadow: none; background: transparent; padding: 0;">
                                            <img src="<?= BASE_URL ?>/images/Interventions machinary/mango_jelly_machinary_1.png" alt="Mango Jelly Machinery 1" style="border: none; box-shadow: none; max-height: 450px; width: 100%; object-fit: contain;">
                                        </div>
                                        <div class="diagram-box full-width" style="border: none; box-shadow: none; background: transparent; padding: 0;">
                                            <img src="<?= BASE_URL ?>/images/Interventions machinary/mango_jelly_machinary_2.png" alt="Mango Jelly Machinery 2" style="border: none; box-shadow: none; max-height: 450px; width: 100%; object-fit: contain;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="accordion-item" id="accordion-2">
                        <div class="accordion-header" onclick="toggleAccordion(2)">
                            <div class="accordion-header-left">
                                <span class="accordion-number">02</span>
                                <h4 class="accordion-title">Mushroom Cultivation with Banana Pseudo stems and Coco Peat</h4>
                            </div>
                            <i class="bi bi-plus accordion-toggle-icon"></i>
                        </div>
                        <div class="accordion-content" style="display: none;">
                            <!-- Full-Width Overview on Top -->
                            <div class="accordion-overview-fullwidth">
                                <!-- Sub Panel 1: Overview -->
                                <div class="sub-panel">
                                    <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                        <div class="sub-panel-header-left">
                                            <i class="bi bi-info-circle-fill sub-panel-icon"></i>
                                            <span>Overview</span>
                                        </div>
                                        <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                    </div>
                                    <div class="sub-panel-body active" style="display: block;">
                                        <p style="margin-bottom: 0.8rem;">Banana is predominantly cultivated in the district after coconut and yields high residual waste after banana harvesting. The substrate based on banana pseudo-stem is the most recommended for oyster mushroom cultivation. The banana farmers will be encouraged to take up mushroom cultivation for augmenting the exiting income sources.  The pseudo stem, petiole and midrib of banana, which are usually abandoned to rot will be used as substrate. The method is less expensive owing to the easy availability of residue and offers double the yield compared to the use of straw for mushroom production. The cultivation also assures house hold nutritional security and assures more income with less investment. The daily agricultural wage labourers will also be formed as SHGs and will be encourage to take up this alternate income generation activity. Though the standardization of this intervention we will assure maximum returns to the SC community without much investment. The SC communities will also be trained on spawn production and maintain the quality of the spawn.</p>
                                        <p style="margin-bottom: 0.8rem;">Three types of income generation models are associated with this intervention.  One is Spawn production which is also sold to the house holds to cultivate mushrooms directly.  Second one is mushroom cultivation and the third model is segregation of mushrooms based on their size.</p>
                                        <p>Beneficiaries will collect the fresh banana stem.  Spawn is collected from the centralized spawn production unit.  Specifically acclimatized spawn is added to the pasteurised material and beds formed.  Humidity, temperature are controlled and mycelium growth is visualised.   Pins heads sprout from the mycelial knots and grow into the fruiting bodies which are harvested.   Fresh mushrooms are sorted, cleaned and packed asceptically. Mushrooms are graded depending on the size.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2-Column Grid Below for Details & Diagrams -->
                            <div class="accordion-content-grid" style="padding-top: 1rem;">
                                <div class="accordion-details">
                                    <!-- Sub Panel 2 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-exclamation-triangle-fill sub-panel-icon"></i>
                                                <span>Problem Statement</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>Large quantities of banana pseudo stems and coconut residues are often discarded or burned, leading to environmental pollution and resource wastage. At the same time, rural communities require low-cost, sustainable technologies for income generation and employment opportunities.</p>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 3 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-lightbulb-fill sub-panel-icon"></i>
                                                <span>Proposed Technology</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>A low-cost mushroom cultivation system is proposed using banana pseudo stem and coco peat as sustainable growing substrates. The technology includes controlled sterilization, optimized cropping rooms, and incubation facilities suitable for cottage-scale enterprises.</p>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 4 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-shield-fill-check sub-panel-icon"></i>
                                                <span>Key Features</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="features-list">
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Eco-friendly substrate preparation using agricultural residues</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Temperature-controlled sterilization chamber</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Optimized spawning and incubation techniques</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Low-cost humidified cropping rooms</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Suitable for cottage and small-scale mushroom enterprises</span></li>
                                             </ul>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 5 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-graph-up-arrow sub-panel-icon"></i>
                                                <span>Expected Benefits</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="benefits-list">
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Value-added utilization of agricultural waste</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Production of nutritious, high-protein mushrooms</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Income generation within a short cultivation cycle (30–45 days)</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Low investment and space requirements</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Employment and entrepreneurship opportunities for rural communities</span></li>
                                             </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-diagrams">
                                    <h5 class="diagrams-section-title">Technology Concept</h5>
                                    <div class="diagrams-grid">
                                        <div class="diagram-box full-width" style="border: none; box-shadow: none; background: transparent; padding: 0;">
                                            <img src="<?= BASE_URL ?>/Machinary/mashroom cutivations.png" alt="Mushroom Cultivation" style="border: none; box-shadow: none; max-height: 450px; width: 100%; object-fit: contain;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="accordion-item" id="accordion-3">
                        <div class="accordion-header" onclick="toggleAccordion(3)">
                            <div class="accordion-header-left">
                                <span class="accordion-number">03</span>
                                <h4 class="accordion-title">Byproducts by Processing of Coconut Waste</h4>
                            </div>
                            <i class="bi bi-plus accordion-toggle-icon"></i>
                        </div>
                        <div class="accordion-content" style="display: none;">
                            <!-- Full-Width Overview on Top -->
                            <div class="accordion-overview-fullwidth">
                                <!-- Sub Panel: Overview -->
                                <div class="sub-panel">
                                    <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                        <div class="sub-panel-header-left">
                                            <i class="bi bi-info-circle-fill sub-panel-icon"></i>
                                            <span>Overview</span>
                                        </div>
                                        <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                    </div>
                                    <div class="sub-panel-body active" style="display: block;">
                                        <p style="margin-bottom: 0.8rem;">Coconut being the predominant crop in the area, there exist lot of bye products of coconut which will be put into maximum use. There is a huge demand for activated charcoal in the nearby industries and gold smiths. This will open up new income generation activities in the area. Mini semi-automatic fiber extractor and grader (downscaling) will also be developed for house-hold operation to further strengthen the existing livelihood on coir rope making in the SC communities. Efforts will also be made to use coir pith as substrate for mushroom cultivation and the entire process will be standardized for further replication.</p>
                                        
                                        <p style="margin-bottom: 0.8rem;"><strong>Existing Technique of utilization of coconut:</strong><br>
                                        Coconut Husk used for extraction of fiber and coco peat, coconut fiber is converted to ropes, mats and other conventional products by semi mechanized methods. Coconut shell is under utilized.</p>
                                        
                                        <p style="margin-bottom: 0.8rem;"><strong>Novelty in the proposed solution:</strong><br>
                                        Semi automatic coconut husk processing line with fiber grading and rope making machine. Coconut shell shall be converted to Powder and Granular Activated carbon for use in Industry. Coco pith shall be converted to Bio-potash (fertilizer). The proposed technological intervention can be extended to Toddy Palms, date palms and Palm oil industry wastes which are in abundance in the region and are presently burnt off creating pollution issues.</p>
                                        
                                        <p style="margin-bottom: 0.8rem;"><strong>Biopotash:</strong><br>
                                        Coir Pith is rich in ProAnthocyanidins and Potassium. These constituents are removed traditionally by steeping in water. In the proposed intervention the leaching is enhanced by extraction in hot water. The hot water is rich in the two components and the water is evaporated using the waste heat. The condensate is further used to extract a fresh batch of coir pitch. The concentrated liquor is further dried and crystallized and used as Biopotash which meets the Organic fertilizer grade as per FCO.</p>
                                        
                                        <p>Coconut shells are shredded, cleaned and pyrolyzed in a designated unit. Syngas generated in the process shall be used in the extractor to extract and concentrate bio potash. Low heat pyrolysis and steam explosion will provide high quality activated carbon and provide a high value product.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 2-Column Grid Below for Details & Diagrams -->
                            <div class="accordion-content-grid" style="padding-top: 1rem;">
                                <div class="accordion-details">
                                    <!-- Sub Panel 1 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-exclamation-triangle-fill sub-panel-icon"></i>
                                                <span>Problem Statement</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>Large quantities of coconut shells, coir fiber, and coir dust are generated as waste by processing units and local vendors. Improper disposal and open burning cause environmental pollution, while the slow decomposition of coir waste limits its effective utilization.</p>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 2 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-lightbulb-fill sub-panel-icon"></i>
                                                <span>Proposed Technology</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>Establishing coconut waste processing units equipped with shell carbonization and coir fiber extraction technologies to convert waste materials into charcoal briquettes, coir products, organic compost, bio-potash, and other value-added products.</p>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 3 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-shield-fill-check sub-panel-icon"></i>
                                                <span>Key Features</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="features-list">
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Eco-friendly retort carbonization kiln</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Hydraulic charcoal briquette extrusion system</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Automated coir fiber and coir dust separation</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Bio-potash production from coconut waste ash</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Integrated waste-to-value processing approach</span></li>
                                             </ul>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 4 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-graph-up-arrow sub-panel-icon"></i>
                                                <span>Expected Benefits</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="benefits-list">
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Productive utilization of coconut processing waste</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Reduction in environmental pollution and waste burning</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Generation of sustainable livelihood opportunities</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Production of eco-friendly value-added products</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Enhanced income through local and export markets</span></li>
                                             </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-diagrams">
                                    <h5 class="diagrams-section-title">Technology Concept</h5>
                                    <div class="diagrams-grid">
                                        <div class="diagram-box full-width" style="border: none; box-shadow: none; background: transparent; padding: 0;">
                                            <img src="<?= BASE_URL ?>/Machinary/coconut wast processing.png" alt="Carbonizer Kiln" style="border: none; box-shadow: none; max-height: 450px; width: 100%; object-fit: contain;">
                                        </div>
                                        <div class="diagram-box full-width" style="border: none; box-shadow: none; background: transparent; padding: 0;">
                                            <img src="<?= BASE_URL ?>/Machinary/coconut machines.png" alt="Briquette Press" style="border: none; box-shadow: none; max-height: 450px; width: 100%; object-fit: contain;">
                                        </div>
                                        <div class="diagram-box full-width" style="border: none; box-shadow: none; background: transparent; padding: 0;">
                                            <img src="<?= BASE_URL ?>/Machinary/3bio potash.png" alt="Bio Potash Extraction" style="border: none; box-shadow: none; max-height: 450px; width: 100%; object-fit: contain;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="accordion-item" id="accordion-4">
                        <div class="accordion-header" onclick="toggleAccordion(4)">
                            <div class="accordion-header-left">
                                <span class="accordion-number">04</span>
                                <h4 class="accordion-title">Design and Development of Adjustable Hydraulic Harvester for Oil Palm</h4>
                            </div>
                            <i class="bi bi-plus accordion-toggle-icon"></i>
                        </div>
                        <div class="accordion-content" style="display: none;">
                            <!-- Full-Width Overview on Top -->
                            <div class="accordion-overview-fullwidth">
                                <!-- Sub Panel: Overview -->
                                <div class="sub-panel">
                                    <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                        <div class="sub-panel-header-left">
                                            <i class="bi bi-info-circle-fill sub-panel-icon"></i>
                                            <span>Overview</span>
                                        </div>
                                        <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                    </div>
                                    <div class="sub-panel-body active" style="display: block;">
                                        <p style="margin-bottom: 0.8rem;">The villages adjoining the target villages has huge production of oil palm where the SC communities go as labourers for harvesting the oil palm manually which involve lot of drudgery and occupational hazards. The proposed intervention will help in harvesting with ease and safety.</p>
                                        <p style="margin-bottom: 0.8rem;">Manual plucking by workers is done by using a long stick connected with a sickle to cut the fruit bunch. Because of this, workers of palm oil harvesting suffer from severe neck and shoulder pain and frequently immature fruit bunches are also harvested leading to poor quality of harvest.</p>
                                        <p>A light weight adjustable hydraulic harvester with camera and pulley attached will be developed which can also tether the bunches to prevent falling of bunches and damage of fruits is prevented. Operator can check whether the fruit bunch is ready to harvest or not and safely retrieve the bunches.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 2-Column Grid Below for Details & Diagrams -->
                            <div class="accordion-content-grid" style="padding-top: 1rem;">
                                <div class="accordion-details">
                                    <!-- Sub Panel 1 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-exclamation-triangle-fill sub-panel-icon"></i>
                                                <span>Problem Statement</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>Harvesting oil palm fresh fruit bunches is labor-intensive, physically demanding, and associated with significant safety risks. Dependence on manual harvesting tools and skilled labor often results in delayed harvesting, increased operational costs, and reduced productivity.</p>             </div>
                                    </div>
                                    <!-- Sub Panel 2 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-lightbulb-fill sub-panel-icon"></i>
                                                <span>Proposed Technology</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <p>An adjustable hydraulic harvesting system equipped with camera-assisted monitoring is proposed to enable safe, efficient, and precise harvesting of oil palm fresh fruit bunches by a single operator from ground level.</p>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 3 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-shield-fill-check sub-panel-icon"></i>
                                                <span>Key Features</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="features-list">
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Telescopic hydraulic arm with extended reach capability</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Camera-assisted monitoring and control system</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Wireless joystick-based operation</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>High-strength steel cutting mechanism</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Mountable on light utility vehicles and tractors</span></li>
                                             </ul>
                                        </div>
                                    </div>
                                    <!-- Sub Panel 4 -->
                                    <div class="sub-panel">
                                        <div class="sub-panel-header" onclick="toggleSubPanel(this)">
                                            <div class="sub-panel-header-left">
                                                <i class="bi bi-graph-up-arrow sub-panel-icon"></i>
                                                <span>Expected Benefits</span>
                                            </div>
                                            <i class="bi bi-chevron-up sub-panel-arrow"></i>
                                        </div>
                                        <div class="sub-panel-body active" style="display: block;">
                                            <ul class="benefits-list">
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Enhanced operator safety by eliminating climbing risks</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Faster and more efficient harvesting operations</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Reduced labor dependency and operational costs</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Increased harvesting productivity and yield</span></li>
                                                 <li><i class="bi bi-check-circle-fill"></i><span>Promotion of custom hiring and rural entrepreneurship models</span></li>
                                             </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-diagrams">
                                    <h5 class="diagrams-section-title">Technology Concept</h5>
                                    <div class="diagrams-grid">
                                        <div class="diagram-box full-width" style="border: none; box-shadow: none; background: transparent; padding: 0;">
                                            <img src="<?= BASE_URL ?>/Machinary/4 design.png" alt="Adjustable Hydraulic Harvester Design" style="border: none; box-shadow: none; max-height: 450px; width: 100%; object-fit: contain;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Expected Impact Sub-section -->
                <div class="exp-impact-section reveal">
                    <div class="exp-impact-header">
                        <div class="exp-impact-title-block">
                            <h2 class="exp-impact-title">EXPECTED<br>IMPACT</h2>
                        </div>
                        <div class="exp-impact-divider"></div>
                        <div class="exp-impact-subtitle-block">
                            <p class="exp-impact-subtitle">Socio-Economic Benefits &amp;<br>Community Livelihood Improvements</p>
                        </div>
                    </div>
                    
                    <div class="exp-impact-row reveal">
                        <!-- Impact 1 -->
                        <div class="exp-impact-card-box exp-impact-c1">
                            <div class="exp-impact-icon-box">
                                <i class="bi bi-houses-fill"></i>
                            </div>
                            <p class="exp-impact-card-desc">Improved socio-economic conditions</p>
                        </div>
                        
                        <!-- Impact 2 -->
                        <div class="exp-impact-card-box exp-impact-c2">
                            <div class="exp-impact-icon-box">
                                <i class="bi bi-tree"></i>
                            </div>
                            <p class="exp-impact-card-desc">Creation of alternative livelihood</p>
                        </div>
                        
                        <!-- Impact 3 -->
                        <div class="exp-impact-card-box exp-impact-c3">
                            <div class="exp-impact-icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <p class="exp-impact-card-desc">Increased household income</p>
                        </div>
                        
                        <!-- Impact 4 -->
                        <div class="exp-impact-card-box exp-impact-c4">
                            <div class="exp-impact-icon-box">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <p class="exp-impact-card-desc">Enhanced skill development</p>
                        </div>
                        
                        <!-- Impact 5 -->
                        <div class="exp-impact-card-box exp-impact-c5">
                            <div class="exp-impact-icon-box">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <p class="exp-impact-card-desc">Better access to technologies</p>
                        </div>
                        
                        <!-- Impact 6 -->
                        <div class="exp-impact-card-box exp-impact-c6">
                            <div class="exp-impact-icon-box">
                                <i class="bi bi-recycle"></i>
                            </div>
                            <p class="exp-impact-card-desc">Improved environmental sustainability</p>
                        </div>
                        
                        <!-- Impact 7 -->
                        <div class="exp-impact-card-box exp-impact-c7">
                            <div class="exp-impact-icon-box">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <p class="exp-impact-card-desc">Greater community empowerment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= BASE_URL ?>/js/script.js"></script>
    <script>

        // Accordion functionality
        function toggleAccordion(id) {
            const items = document.querySelectorAll('.accordion-item');
            items.forEach(item => {
                const itemId = parseInt(item.id.replace('accordion-', ''));
                const content = item.querySelector('.accordion-content');
                const icon = item.querySelector('.accordion-toggle-icon');
                
                if (itemId === id) {
                    if (content.style.display === 'block') {
                        content.style.display = 'none';
                        content.classList.remove('active');
                        icon.className = 'bi bi-plus accordion-toggle-icon';
                    } else {
                        content.style.display = 'block';
                        content.classList.add('active');
                        icon.className = 'bi bi-dash accordion-toggle-icon';
                        
                        // Open all sub-panels within this accordion item by default
                        const subPanels = content.querySelectorAll('.sub-panel');
                        subPanels.forEach(subPanel => {
                            const subBody = subPanel.querySelector('.sub-panel-body');
                            const subArrow = subPanel.querySelector('.sub-panel-arrow');
                            if (subBody && subArrow) {
                                subBody.style.display = 'block';
                                subBody.classList.add('active');
                                subArrow.className = 'bi bi-chevron-up sub-panel-arrow';
                            }
                        });
                    }
                } else {
                    content.style.display = 'none';
                    content.classList.remove('active');
                    icon.className = 'bi bi-plus accordion-toggle-icon';
                }
            });
        }

        function scrollToAccordion(id) {
            // Open the accordion
            const items = document.querySelectorAll('.accordion-item');
            items.forEach(item => {
                const itemId = parseInt(item.id.replace('accordion-', ''));
                const content = item.querySelector('.accordion-content');
                const icon = item.querySelector('.accordion-toggle-icon');
                
                if (itemId === id) {
                    content.style.display = 'block';
                    content.classList.add('active');
                    icon.className = 'bi bi-dash accordion-toggle-icon';
                    
                    // Open all sub-panels within this accordion item by default
                    const subPanels = content.querySelectorAll('.sub-panel');
                    subPanels.forEach(subPanel => {
                        const subBody = subPanel.querySelector('.sub-panel-body');
                        const subArrow = subPanel.querySelector('.sub-panel-arrow');
                        if (subBody && subArrow) {
                            subBody.style.display = 'block';
                            subBody.classList.add('active');
                            subArrow.className = 'bi bi-chevron-up sub-panel-arrow';
                        }
                    });
                } else {
                    content.style.display = 'none';
                    content.classList.remove('active');
                    icon.className = 'bi bi-plus accordion-toggle-icon';
                }
            });
            
            // Scroll to the accordion item
            const target = document.getElementById(`accordion-${id}`);
            if (target) {
                const offset = 100; // Offset for sticky navbar
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = target.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }

        // Sub Panel Collapsible Functionality
        function toggleSubPanel(headerElement) {
            const body = headerElement.nextElementSibling;
            const arrow = headerElement.querySelector('.sub-panel-arrow');
            
            if (body.style.display === 'block' || body.classList.contains('active')) {
                body.style.display = 'none';
                body.classList.remove('active');
                arrow.className = 'bi bi-chevron-down sub-panel-arrow';
            } else {
                body.style.display = 'block';
                body.classList.add('active');
                arrow.className = 'bi bi-chevron-up sub-panel-arrow';
            }
        }
    </script>
</body>
</html>
