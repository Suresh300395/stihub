<?php
require_once __DIR__ . '/config.php';
$active_page = isset($active_page) ? $active_page : '';
?>
<!-- Header / Navigation Bar -->
<header class="header-wrapper">
    <div class="header-container">
        <!-- Left Logo -->
        <a href="<?= BASE_URL ?>/index" class="header-logo-left">
            <img src="<?= BASE_URL ?>/images/aus_logo.png" alt="Aditya University Logo" class="nav-logo-img">
        </a>

        <!-- Center Menu -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="<?= BASE_URL ?>/index" class="nav-link<?php echo $active_page === 'home' ? ' active' : ''; ?>">
                    <i class="bi bi-house nav-icon"></i>
                    <span>HOME</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL ?>/about" class="nav-link<?php echo $active_page === 'about' ? ' active' : ''; ?>">
                    <i class="bi bi-person nav-icon"></i>
                    <span>ABOUT</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL ?>/objective" class="nav-link<?php echo $active_page === 'objective' ? ' active' : ''; ?>">
                    <i class="bi bi-tools nav-icon"></i>
                    <span>INTERVENTIONS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL ?>/teams" class="nav-link<?php echo $active_page === 'teams' ? ' active' : ''; ?>">
                    <i class="bi bi-people nav-icon"></i>
                    <span>TEAMS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL ?>/achivement" class="nav-link<?php echo $active_page === 'achivement' ? ' active' : ''; ?>">
                    <i class="bi bi-trophy nav-icon"></i>
                    <span>ACHIEVEMENT</span>
                </a>
            </li>
        </ul>

        <!-- Right Logo -->
        <div class="header-logo-right">
            <img src="<?= BASE_URL ?>/images/Nav_ministry.svg?v=<?php echo time(); ?>" alt="Ministry of Science and Technology Logo" class="nav-logo-img">
        </div>
    </div>
</header>
