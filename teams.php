<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Team | Science Technology & Innovation Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css?v=<?php echo time(); ?>">
    <script>document.documentElement.classList.add('js-enabled');</script>
</head>
<body>

    <!-- Header / Navigation Bar -->
    <?php
    $active_page = 'teams';
    include __DIR__ . '/navbar.php';
    ?>

    <!-- Main Content -->
    <main>
        <section class="teams-section">
            <div class="teams-container">
                <h1 class="teams-main-title reveal reveal-down">Meet Our Team</h1>
                <p class="teams-subtitle reveal reveal-delay-1">Empowering teams with Knowledge,<br>Innovation, and Excellence!</p>
                
                <div class="teams-yellow-bar"></div>
                <h2 class="teams-institution reveal reveal-down">Aditya University</h2>

                <div class="teams-grid">
                    <!-- Member 1 -->
                    <div class="team-member-card reveal reveal-delay-1">
                        <div class="team-member-img-wrapper has-photo">
                            <img src="<?= BASE_URL ?>/images/Murthy.jpg" alt="Dr. K V S Ramachandra Murthy" class="team-member-img">
                        </div>
                        <h5 class="team-member-designation">Principal Investigator</h5>
                        <div class="team-member-name-group">
                            <h3 class="team-member-name">Dr. K V S Ramachandra Murthy</h3>
                            <p class="team-member-job">Professor</p>
                        </div>
                        <p class="team-member-role">Dept. of EEE<br>Aditya Engineering College</p>
                    </div>
 
                    <!-- Member 2 -->
                    <div class="team-member-card reveal reveal-delay-3">
                        <div class="team-member-img-wrapper has-photo">
                            <img src="<?= BASE_URL ?>/images/sarath.webp" alt="Dr V Renu Sarath Babu" class="team-member-img">
                        </div>
                        <h5 class="team-member-designation">Co-Investigator</h5>
                        <div class="team-member-name-group">
                            <h3 class="team-member-name">Dr V Renu Sarath Babu</h3>
                            <p class="team-member-job">Professor</p>
                        </div>
                        <p class="team-member-role">Dept. of Basic Science and Humanities<br>Aditya Engineering College</p>
                    </div>
                    <div class="team-member-card reveal reveal-delay-2">
                        <div class="team-member-img-wrapper has-photo">
                            <img src="<?= BASE_URL ?>/images/rama_reddy.webp" alt="Dr. T Rama Reddy" class="team-member-img">
                        </div>
                        <h5 class="team-member-designation">Co-Investigator</h5>
                        <div class="team-member-name-group">
                            <h3 class="team-member-name">Dr. T Rama Reddy</h3>
                            <p class="team-member-job">Professor</p>
                        </div>
                        <p class="team-member-role">Dept. of CSE<br>Aditya Engineering College</p>
                    </div>
 
                    <!-- Member 3 -->

                    <div class="team-member-card reveal reveal-delay-2">
                        <div class="team-member-img-wrapper has-photo">
                            <img src="<?= BASE_URL ?>/images/jd_chakravathy.jpg" alt="Mr J D Venkatesh" class="team-member-img">
                        </div>
                        <h5 class="team-member-designation">Co-Investigator</h5>
                        <div class="team-member-name-group">
                            <h3 class="team-member-name">Mr J D Venkatesh</h3>
                            <p class="team-member-job">Professor</p>
                        </div>
                        <p class="team-member-role">Dept. of ME<br>Aditya Engineering College</p>
                    </div>
                    <div class="team-member-card reveal reveal-delay-3">
                        <div class="team-member-img-wrapper has-photo">
                            <img src="<?= BASE_URL ?>/images/pritamdas.jpg" alt="Dr. Pritam Kumar Das" class="team-member-img">
                        </div>
                        <h5 class="team-member-designation">Co-Investigator</h5>
                        <div class="team-member-name-group">
                            <h3 class="team-member-name">Dr. Pritam Kumar Das</h3>
                            <p class="team-member-job">Associate Professor</p>
                        </div>
                        <p class="team-member-role">Dept. of ME<br>Aditya Engineering College</p>
                    </div>
 
                    <!-- Member 4 -->
                    <div class="team-member-card reveal reveal-delay-1">
                        <div class="team-member-img-wrapper has-photo">
                            <img src="<?= BASE_URL ?>/images/krishnakanth.jpg" alt="Dr. B. Krishna Kanth" class="team-member-img">
                        </div>
                        <h5 class="team-member-designation">Co-Investigator</h5>
                        <div class="team-member-name-group">
                            <h3 class="team-member-name">Dr. B Krishna Kanth</h3>
                            <p class="team-member-job">Assistant Professor</p>
                        </div>
                        <p class="team-member-role">Dept. of Ag.E<br>Aditya Engineering College</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>
</html>
