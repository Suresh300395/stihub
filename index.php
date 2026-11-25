<?php
require_once __DIR__ . '/config.php';
$base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($base_dir !== '/') {
    $base_dir = rtrim($base_dir, '/');
}
$request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($base_dir !== '/' && strpos($request_path, $base_dir) === 0) {
    $route = substr($request_path, strlen($base_dir));
} else {
    $route = $request_path;
}
$route = trim($route, '/');

if ($route !== '' && $route !== 'index') {
    $file = __DIR__ . '/' . $route . '.php';
    if (file_exists($file)) {
        include $file;
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STI Hub | Aditya Engineering College</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css?v=<?php echo time(); ?>">
    <script>document.documentElement.classList.add('js-enabled');</script>
</head>
<body>

    <!-- Header / Navigation Bar -->
    <?php
    $active_page = 'home';
    include __DIR__ . '/navbar.php';
    ?>

    <!-- Main Content -->
    <main>
        <!-- Home Section -->
        <section id="home" class="home-section">
            <!-- Video Background -->
            <video autoplay muted loop playsinline class="home-video-bg">
                <source src="<?= BASE_URL ?>/images/hero.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="home-overlay"></div>

            <div class="home-container">
                <div class="home-content reveal">
                    <h1 class="home-title">Science Technology & Innovation Hub for Development of Schedule Caste Communities</h1>
                    <p class="home-subtitle">
                        in Amalapuram Mandal, Dr. B R Ambedkar Konaseema District, Andhra Pradesh <span class="ministry-tag">(Ministry of Science and Technology, Govt. of India)</span>
                    </p>
                </div>
            </div>
        </section>

        <!-- About / Project Overview Section -->
        <section id="about" class="about-section">
            <div class="about-container">
                <div class="overview-header reveal">
                    <div class="overview-title-block">
                        <h2 class="overview-title">PROJECT<br>OVERVIEW</h2>
                    </div>
                    <div class="overview-divider"></div>
                    <div class="overview-subtitle-block">
                        <p class="overview-subtitle">Empowering SC Communities,<br>Innovation & Sustainability</p>
                    </div>
                </div>
                <div class="overview-content reveal">
                    <p class="overview-text">
                        Samanasa, Bhatnavilli villages of Amalapuram Mandal, in the Dr. B R Ambedkar Konaseema District of Andhra Pradesh, focuses on improving the socio-economic status of Scheduled Caste (SC) communities. To address this, the Science Technology & Innovation (STI) Hub, supported by the Ministry of Science and Technology, Govt. of India, is establishing modern training and livelihood infrastructure. This hub aims to empower SC communities through skill development, agricultural machinery training, value addition, and sustainable enterprise initiatives, fostering a brighter and resilient future for the region.
                    </p>
                    <div class="overview-buttons">
                        <a href="<?= BASE_URL ?>/about" class="btn-pill">KNOW MORE</a>
                        <!-- <a href="#" class="btn-pill">PROJECT BROCHURE</a> -->
                    </div>
                </div>

                <!-- Impact Section -->
                <div class="impact-section reveal">
                    <div class="impact-header">
                        <h2 class="impact-title">IMPACT</h2>
                        <p class="impact-desc">With more than 1000 direct beneficiaries, the STI hubs will indirectly benefit 40% of the SC population in the Amalapuram District selected villages Samanasa, Bhatnavilli through Community Participation and Knowledge Dissemination.</p>
                    </div>
                </div>

                <!-- Statistics Row -->
                <div class="stats-row reveal">
                    <div class="stat-item">
                        <div class="stat-number">1000</div>
                        <div class="stat-divider"></div>
                        <div class="stat-label">Targeted<br>Trainees</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">2</div>
                        <div class="stat-divider"></div>
                        <div class="stat-label">Targeted Villages<br><span class="stat-sublabel">Samanasa, Bhatnavilli</span></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50</div>
                        <div class="stat-divider"></div>
                        <div class="stat-label">Cottage<br>Industries</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">₹ 2.26</div>
                        <div class="stat-divider"></div>
                        <div class="stat-label">Crores<br>Project</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Objective / Interventions Section -->
        <section id="objective" class="objective-section">
            <div class="objective-container">
                <div class="objective-header reveal">
                    <div class="objective-title-block">
                        <h2 class="objective-title">AMALAPURAM STI HUB<br>KEY OBJECTIVES</h2>
                    </div>
                    <div class="objective-divider"></div>
                    <div class="objective-subtitle-block">
                        <p class="objective-subtitle">Empowering SC Communities through Technical Interventions</p>
                    </div>
                </div>
                
                <div class="objective-grid">
                    <!-- Card 1 -->
                    <div class="objective-card reveal reveal-delay-1">
                        <h3 class="card-title">Livelihood Empowerment</h3>
                        <ul class="card-list">
                            <li>Create new livelihoods and strengthen existing livelihoods through capacity building and skill development.</li>
                            <li>Provide training to community members for making sustainable, value-added products.</li>
                            <li>Develop practical skill modules to ensure long-term knowledge transfer.</li>
                        </ul>
                    </div>
                    <!-- Card 2 -->
                    <div class="objective-card reveal reveal-delay-2">
                        <h3 class="card-title">Agricultural Interventions</h3>
                        <ul class="card-list">
                            <li>Establish training facilities for modern agricultural machinery.</li>
                            <li>Introduce advanced farming practices to increase yield and reduce physical labor.</li>
                            <li>Foster sustainable agricultural initiatives tailored to local conditions.</li>
                        </ul>
                    </div>
                    <!-- Card 3 -->
                    <div class="objective-card reveal reveal-delay-3">
                        <h3 class="card-title">Enterprise & Support</h3>
                        <ul class="card-list">
                            <li>Support local cottage industries and small business startups.</li>
                            <li>Provide databank resources and technology access to rural populations.</li>
                            <li>Organize capacity building programs to promote local entrepreneurship.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collaborating Partners Section -->
        <section id="partners" class="partners-section">
            <div class="partners-container">
                <div class="partners-grid">
                    <!-- Left: Image -->
                    <div class="partners-image-block reveal reveal-left">
                        <img src="<?= BASE_URL ?>/images/konaseema_landscape.png" alt="Konaseema Landscape" class="partners-img">
                    </div>
                    
                    <!-- Right: Content -->
                    <div class="partners-content-block reveal reveal-right">
                        <div class="partners-header">
                            <h2 class="partners-title">COLLABORATING<br>PARTNERS</h2>
                            <div class="partners-divider"></div>
                            <p class="partners-subtitle">To improve the livelihood and health of the SC population in the targeted villages</p>
                        </div>
                        
                        <div class="partners-logos-row">
                            <img src="<?= BASE_URL ?>/images/Dept%20of%20Science%20%26%20Tech.svg?v=<?php echo time(); ?>" alt="Ministry of Science & Technology, Govt of India" class="partner-logo-img partner-logo-dst">
                            <img src="<?= BASE_URL ?>/images/aus_logo.png" alt="Collaborating Institution" class="partner-logo-img partner-logo-aditya">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="gallery-section">
            <div class="gallery-container">
                <div class="gallery-header reveal">
                    <div class="gallery-title-block">
                        <h2 class="gallery-title">GALLERY</h2>
                    </div>
                    <div class="gallery-divider"></div>
                    <div class="gallery-subtitle-block">
                        <p class="gallery-subtitle">Improving Scheduled Caste Livelihoods,<br>Education & Sustainability</p>
                    </div>
                </div>

                <div class="gallery-grid">
                    <?php
                    $dir = __DIR__ . '/images/Gallary_stihub';
                    if (is_dir($dir)) {
                        $files = scandir($dir);
                        $count = 0;
                        foreach ($files as $file) {
                            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                            if (in_array($ext, ['webp', 'jpg', 'jpeg', 'png', 'gif'])) {
                                if ($count >= 20) {
                                    break;
                                }
                                $count++;
                                $caption = 'STI Hub Activity';
                                $imgPath = BASE_URL . '/images/Gallary_stihub/' . $file;
                                $thumbPath = get_thumbnail($file);
                                ?>
                                <div class="gallery-item reveal">
                                    <img src="<?php echo htmlspecialchars($thumbPath); ?>" data-fullsize="<?php echo htmlspecialchars($imgPath); ?>" alt="Gallery Image" class="gallery-img" loading="lazy">
                                    <div class="gallery-caption"><?php echo htmlspecialchars($caption); ?></div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>

                <div class="gallery-more-container reveal">
                    <a href="<?= BASE_URL ?>/gallery" class="btn-pill">VIEW MORE</a>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>
</html>