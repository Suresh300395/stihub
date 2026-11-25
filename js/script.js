/**
 * STI Hub - Main JavaScript File
 * This file handles navigation, header effects, and the dynamic image gallery with a lightbox.
 */

document.addEventListener('DOMContentLoaded', () => {

    /* =========================================
       1. NAVIGATION & SMOOTH SCROLLING
       ========================================= */
    // Handle switching of active indicator on click and smooth scrolling
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId.startsWith('#')) {
                e.preventDefault();
                
                // Smooth scroll to target section
                if (targetId === '#home') {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                } else {
                    const targetSection = document.querySelector(targetId);
                    if (targetSection) {
                        const yOffset = -65; // Offset for the sticky header height
                        const y = targetSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
                        window.scrollTo({ top: y, behavior: 'smooth' });
                    }
                }

                // Update active class for menu items
                navLinks.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });

    /* =========================================
       2. STICKY HEADER EFFECT
       ========================================= */
    // Adds a shadow and fixes the header to the top when scrolling down
    const header = document.querySelector('.header-wrapper');
    const main = document.querySelector('main');
    
    if (header && main) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                main.style.paddingTop = '65px'; // Prevent layout shift by adding padding
            } else {
                header.classList.remove('scrolled');
                main.style.paddingTop = '0';
            }
        });
    }

    /* =========================================
       3. GALLERY LIGHTBOX INITIALIZATION
       ========================================= */

    /* =========================================
       4. LIGHTBOX IMPLEMENTATION
       ========================================= */
    // Create the lightbox DOM elements
    const galleryItems = document.querySelectorAll('.gallery-item');
    if (galleryItems.length > 0) {
        const lightbox = document.createElement('div');
        lightbox.id = 'lightbox';
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `
            <span class="lightbox-close">&times;</span>
            <div class="lightbox-nav lightbox-prev">&#10094;</div>
            <div class="lightbox-content-wrapper">
                <img class="lightbox-content" id="lightbox-img" src="" alt="">
                <div class="lightbox-caption" id="lightbox-caption"></div>
            </div>
            <div class="lightbox-nav lightbox-next">&#10095;</div>
        `;
        document.body.appendChild(lightbox);

        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');
        let currentIndex = 0;
        let currentAlbumImages = [];

        // Function to update the lightbox image based on index
        function showImage(index) {
            if (index < 0) index = currentAlbumImages.length - 1;
            if (index >= currentAlbumImages.length) index = 0;
            currentIndex = index;
            if (currentAlbumImages[currentIndex]) {
                lightboxImg.src = currentAlbumImages[currentIndex].src;
                lightboxImg.alt = currentAlbumImages[currentIndex].alt;
                lightboxCaption.textContent = currentAlbumImages[currentIndex].caption;
            }
        }

        // Bind click events to each gallery item
        galleryItems.forEach(item => {
            item.addEventListener('click', (e) => {
                // Get all visible gallery items on the page so user can navigate all of them in the lightbox
                let albumItems = Array.from(document.querySelectorAll('.gallery-item')).filter(ai => !ai.classList.contains('gallery-item-hidden'));

                // Extract image source and caption for all items
                currentAlbumImages = albumItems.map(ai => {
                    const img = ai.querySelector('.gallery-img');
                    const caption = ai.querySelector('.gallery-caption');
                    return {
                        src: img ? (img.getAttribute('data-fullsize') || img.getAttribute('src')) : '',
                        alt: img ? img.getAttribute('alt') : '',
                        caption: caption ? caption.textContent : ''
                    };
                });
                
                // Find index of the clicked item within visible items
                const clickedIndex = albumItems.indexOf(item);
                
                // Show the clicked image and open the lightbox
                showImage(clickedIndex);
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden'; // Disable page scrolling while lightbox is open
            });
        });

        // Close lightbox function
        const closeLightbox = () => {
            lightbox.classList.remove('active');
            document.body.style.overflow = ''; // Re-enable page scrolling
        };

        // Event listeners for closing and navigating the lightbox
        lightbox.querySelector('.lightbox-close').addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            // Close if clicked outside the image
            if (e.target === lightbox || e.target.classList.contains('lightbox-content-wrapper')) {
                closeLightbox();
            }
        });

        lightbox.querySelector('.lightbox-prev').addEventListener('click', (e) => {
            e.stopPropagation();
            showImage(currentIndex - 1); // Go to previous image
        });

        lightbox.querySelector('.lightbox-next').addEventListener('click', (e) => {
            e.stopPropagation();
            showImage(currentIndex + 1); // Go to next image
        });

        // Keyboard navigation (Escape to close, Arrows to navigate)
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
            if (e.key === 'ArrowRight') showImage(currentIndex + 1);
        });
    }

    /* =========================================
       5. SCROLL REVEAL ANIMATIONS
       ========================================= */
    const revealElements = document.querySelectorAll('.reveal');
    
    if (revealElements.length > 0) {
        // Add js-enabled class to HTML root tag immediately
        document.documentElement.classList.add('js-enabled');
        
        // Delay starting the observer and viewport checks slightly so the browser
        // completes the layout paint for the hidden state, triggering the transition.
        setTimeout(() => {
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target); // Stop observing once revealed
                    }
                });
            }, {
                threshold: 0.05, // Trigger as soon as 5% of the element is visible
                rootMargin: '0px 0px -20px 0px' // minimal offset
            });
            
            revealElements.forEach(el => {
                revealObserver.observe(el);
            });

            // Robust fallback: Immediately activate any elements already in the viewport on load
            const triggerInViewport = () => {
                revealElements.forEach(el => {
                    if (!el.classList.contains('active')) {
                        const rect = el.getBoundingClientRect();
                        // Check if element is inside the vertical viewport area
                        if (rect.top < window.innerHeight && rect.bottom > 0) {
                            el.classList.add('active');
                            revealObserver.unobserve(el);
                        }
                    }
                });
            };

            // Run fallback check immediately
            triggerInViewport();
            window.addEventListener('scroll', triggerInViewport, { passive: true });
            window.addEventListener('resize', triggerInViewport, { passive: true });
        }, 150);
    }
});

