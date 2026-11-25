<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Science Technology & Innovation Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css?v=<?php echo time(); ?>">
    <script>document.documentElement.classList.add('js-enabled');</script>
</head>
<body>

    <!-- Header / Navigation Bar -->
    <?php
    $active_page = 'gallery';
    include __DIR__ . '/navbar.php';
    ?>

    <!-- Main Content -->
    <main>
        <section class="gallery-section" style="background-color: #FFFFFF; min-height: 85vh; padding-top: 5rem;">
            <div class="gallery-container">
                <!-- Gallery Header -->
                <div class="gallery-header reveal">
                    <div class="gallery-title-block">
                        <h1 class="gallery-title">PHOTO<br>GALLERY</h1>
                    </div>
                    <div class="gallery-divider"></div>
                    <div class="gallery-subtitle-block">
                        <p class="gallery-subtitle">A collection of photographs highlighting local community development, technical training workshops, agricultural innovations, and livelihood empowerment activities at Samanasa and Bhatnavilli villages under Amalapuram STI Hub.</p>
                    </div>
                </div>

                <!-- Gallery Grid -->
                <div class="gallery-grid">
                    <?php
                    $dir = __DIR__ . '/images/Gallary_stihub';
                    if (is_dir($dir)) {
                        $files = scandir($dir);
                        $count = 0;
                        foreach ($files as $file) {
                            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                            if (in_array($ext, ['webp', 'jpg', 'jpeg', 'png', 'gif'])) {
                                $caption = 'STI Hub Activity';
                                $imgPath = BASE_URL . '/images/Gallary_stihub/' . $file;
                                $thumbPath = get_thumbnail($file);
                                
                                if ($count < 40) {
                                    // Initially visible
                                    ?>
                                    <div class="gallery-item reveal">
                                        <img src="<?php echo htmlspecialchars($thumbPath); ?>" data-fullsize="<?php echo htmlspecialchars($imgPath); ?>" alt="Gallery Image" class="gallery-img" loading="lazy">
                                        <div class="gallery-caption"><?php echo htmlspecialchars($caption); ?></div>
                                    </div>
                                    <?php
                                } else {
                                    // Initially hidden, data-src is used to optimize loading
                                    ?>
                                    <div class="gallery-item gallery-item-hidden reveal" style="display: none;">
                                        <img data-src="<?php echo htmlspecialchars($thumbPath); ?>" data-fullsize="<?php echo htmlspecialchars($imgPath); ?>" alt="Gallery Image" class="gallery-img" loading="lazy">
                                        <div class="gallery-caption"><?php echo htmlspecialchars($caption); ?></div>
                                    </div>
                                    <?php
                                }
                                $count++;
                            }
                        }
                    }
                    ?>
                </div>

                <!-- Load More Button -->
                <?php if ($count > 40): ?>
                <div class="load-more-container" style="display: flex; justify-content: center; margin-top: 3rem; margin-bottom: 2rem;">
                    <button id="btn-load-more" class="btn-pill">VIEW MORE</button>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <script src="<?= BASE_URL ?>/js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btnLoadMore = document.getElementById('btn-load-more');
            if (btnLoadMore) {
                btnLoadMore.addEventListener('click', () => {
                    // Find all hidden gallery items
                    const hiddenItems = document.querySelectorAll('.gallery-item-hidden');
                    
                    // Show next 40 items
                    const limit = Math.min(hiddenItems.length, 40);
                    for (let i = 0; i < limit; i++) {
                        const item = hiddenItems[i];
                        const img = item.querySelector('img');
                        
                        // Load image by moving data-src to src
                        if (img && img.hasAttribute('data-src')) {
                            img.src = img.getAttribute('data-src');
                            img.removeAttribute('data-src');
                        }
                        
                        // Show the item
                        item.style.display = 'inline-block';
                        item.classList.remove('gallery-item-hidden');
                        
                        // Trigger CSS scroll reveal animations with staggered fade in
                        setTimeout(() => {
                            item.classList.add('active');
                        }, 50 * i);
                    }
                    
                    // Trigger scroll event to let IntersectionObserver catch any changes
                    window.dispatchEvent(new Event('scroll'));
                    
                    // If no more hidden items, hide the button container
                    if (document.querySelectorAll('.gallery-item-hidden').length === 0) {
                        btnLoadMore.parentNode.style.display = 'none';
                    }
                });
            }
        });
    </script>
</body>
</html>
