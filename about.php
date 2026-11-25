<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Science Technology & Innovation Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css?v=<?php echo time(); ?>">
    <script>document.documentElement.classList.add('js-enabled');</script>
</head>
<body>

    <!-- Header / Navigation Bar -->
    <?php
    $active_page = 'about';
    include __DIR__ . '/navbar.php';
    ?>

    <!-- Main Content -->
    <main>
        <section class="about-page-section">
            <div class="about-page-container">
                <!-- Top Section: Header & Text (Full Width) -->
                <div class="about-header-block">
                    <div class="about-page-header reveal reveal-down">
                        <div class="about-page-title-block">
                            <h2 class="about-page-title">ABOUT<br>PROJECT</h2>
                        </div>
                        <div class="about-page-divider"></div>
                        <div class="about-page-subtitle-block">
                            <p class="about-page-subtitle">Improving Scheduled Caste Livelihoods,<br>Education & Sustainability</p>
                        </div>
                    </div>
                    <div class="about-page-text reveal">
                        <p>The Science, Technology and Innovation (STI) Hub is a transformative initiative established to empower Scheduled Caste communities in Bhatnavilli and Samanasa villages of Amalapuram Mandal through technology-driven livelihood development.</p>
                        <p>The hub focuses on strengthening existing occupations, creating sustainable income opportunities, and improving socio-economic conditions through innovation, skill development, entrepreneurship, and community participation.</p>
                    </div>
                </div>
                
                <!-- Project Duration Section -->
                <div class="about-duration-wrapper reveal">
                    <div class="project-duration-bar">
                        <i class="bi bi-calendar3 duration-icon"></i>
                        <span>Project Duration: <strong>36 Months</strong></span>
                    </div>
                </div>
                
                
                <!-- Bottom Section: Map Cards Grid -->
                <div class="map-cards-grid">
                    <!-- Card 1 -->
                    <div class="map-card reveal reveal-left">
                        <div class="map-card-tab">1. DISTRICT MAP</div>
                        <div class="map-card-image-box">
                            <img src="<?= BASE_URL ?>/images/Ap.svg" alt="District Map of Dr. B. R. Ambedkar Konaseema" class="map-card-img">
                        </div>
                        <p class="map-card-caption">District map of Dr. B. R. Ambedkar Konaseema highlighting revenue divisions.</p>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="map-card reveal reveal-up">
                        <div class="map-card-tab">2. AMALAPURAM MANDALS</div>
                        <div class="map-card-image-box">
                            <img src="<?= BASE_URL ?>/images/amalapuram.png" alt="Amalapuram Mandal with Highlighted Villages" class="map-card-img">
                        </div>
                        <p class="map-card-caption">Amalapuram Mandal with highlighted villages Samanasa and Bhatnavilli.</p>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="map-card reveal reveal-right">
                        <div class="map-card-tab">3. TARGET VILLAGE LOCATIONS</div>
                        <div class="map-card-image-box">
                            <img src="<?= BASE_URL ?>/images/villages.png" alt="Location Map of Target Villages" class="map-card-img">
                        </div>
                        <p class="map-card-caption">Location map showing proximity of target villages to the STI Hub at Amalapuram.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Focus Areas -->
        <section class="about-focus-section">
            <div class="about-focus-container">
                <h3 class="about-focus-title reveal">Key Focus Areas</h3>
                <div class="about-focus-grid reveal">
                    <div class="about-focus-item">
                        <i class="bi bi-check-circle-fill focus-icon"></i>
                        <span>Agricultural and horticultural value addition</span>
                    </div>
                    <div class="about-focus-item">
                        <i class="bi bi-check-circle-fill focus-icon"></i>
                        <span>Post-harvest processing technologies</span>
                    </div>
                    <div class="about-focus-item">
                        <i class="bi bi-check-circle-fill focus-icon"></i>
                        <span>Coconut and banana waste utilization</span>
                    </div>
                    <div class="about-focus-item">
                        <i class="bi bi-check-circle-fill focus-icon"></i>
                        <span>Coir-based enterprise development</span>
                    </div>
                    <div class="about-focus-item">
                        <i class="bi bi-check-circle-fill focus-icon"></i>
                        <span>Mushroom cultivation and food processing</span>
                    </div>
                    <div class="about-focus-item">
                        <i class="bi bi-check-circle-fill focus-icon"></i>
                        <span>Skill development and entrepreneurship training</span>
                    </div>
                    <div class="about-focus-item">
                        <i class="bi bi-check-circle-fill focus-icon"></i>
                        <span>Health, nutrition, and livelihood enhancement</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>
</html>
