<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements | Science Technology & Innovation Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css?v=<?php echo time(); ?>">
    <script>document.documentElement.classList.add('js-enabled');</script>
</head>
<body>

    <!-- Header / Navigation Bar -->
    <?php
    $active_page = 'achivement';
    include __DIR__ . '/navbar.php';
    ?>

    <!-- Main Content -->
    <main>
        <section class="coming-soon-section">
            <div class="coming-soon-content reveal">
                <h1 class="coming-soon-title">Achievements</h1>
                <div class="coming-soon-divider"></div>
                <p class="coming-soon-text">Achievements Coming Soon</p>
                <a href="<?= BASE_URL ?>/index" class="coming-soon-btn">Back to Home</a>
            </div>
        </section>
    </main>

    <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>
</html>
