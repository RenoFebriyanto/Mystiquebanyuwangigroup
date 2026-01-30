import './bootstrap';
import Alpine from 'alpinejs';

// Make Alpine available globally
window.Alpine = Alpine;

// Alpine.js Global Store for shared state
Alpine.store('site', {
    mobileMenuOpen: false,
    scrolled: false,

    toggleMobileMenu() {
        this.mobileMenuOpen = !this.mobileMenuOpen;
    },

    closeMobileMenu() {
        this.mobileMenuOpen = false;
    },
});

// Alpine.js Global Data
document.addEventListener('alpine:init', () => {

    // Navbar Component
    Alpine.data('navbar', () => ({
        scrolled: false,
        mobileMenuOpen: false,

        init() {
            window.addEventListener('scroll', () => {
                this.scrolled = window.pageYOffset > 20;
            });
        },

        toggleMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
        },
    }));

    // Dropdown Component
    Alpine.data('dropdown', () => ({
        open: false,

        toggle() {
            this.open = !this.open;
        },

        close() {
            this.open = false;
        },
    }));

    // Gallery Component
    Alpine.data('gallery', () => ({
        currentImage: null,
        lightboxOpen: false,

        openLightbox(imageUrl) {
            this.currentImage = imageUrl;
            this.lightboxOpen = true;
            document.body.style.overflow = 'hidden';
        },

        closeLightbox() {
            this.lightboxOpen = false;
            document.body.style.overflow = 'auto';
        },
    }));

    // Booking Form Component
    Alpine.data('bookingForm', () => ({
        packageType: 'resort',
        guests: 1,
        checkIn: '',
        checkOut: '',

        calculateNights() {
            if (this.checkIn && this.checkOut) {
                const start = new Date(this.checkIn);
                const end = new Date(this.checkOut);
                const nights = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
                return nights > 0 ? nights : 0;
            }
            return 0;
        },

        validateDates() {
            if (this.checkIn && this.checkOut) {
                const start = new Date(this.checkIn);
                const end = new Date(this.checkOut);
                return end > start;
            }
            return true;
        },
    }));

    // Contact Form Component
    Alpine.data('contactForm', () => ({
        name: '',
        email: '',
        message: '',
        submitting: false,
        success: false,
        error: null,

        async submit() {
            this.submitting = true;
            this.error = null;

            try {
                // Replace with your actual API endpoint
                const response = await fetch('/api/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        name: this.name,
                        email: this.email,
                        message: this.message,
                    }),
                });

                if (response.ok) {
                    this.success = true;
                    this.name = '';
                    this.email = '';
                    this.message = '';
                } else {
                    throw new Error('Failed to submit form');
                }
            } catch (error) {
                this.error = 'Failed to send message. Please try again.';
            } finally {
                this.submitting = false;
            }
        },
    }));

    // Back to Top Component
    Alpine.data('backToTop', () => ({
        showTop: false,

        init() {
            window.addEventListener('scroll', () => {
                this.showTop = window.pageYOffset > 500;
            });
        },

        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth',
            });
        },
    }));

    // Newsletter Form
    Alpine.data('newsletterForm', () => ({
        email: '',
        submitting: false,
        success: false,
        error: null,

        async subscribe() {
            if (!this.email) {
                this.error = 'Please enter your email address';
                return;
            }

            this.submitting = true;
            this.error = null;

            try {
                // Replace with your actual API endpoint
                const response = await fetch('/api/newsletter/subscribe', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        email: this.email,
                    }),
                });

                if (response.ok) {
                    this.success = true;
                    this.email = '';
                    setTimeout(() => {
                        this.success = false;
                    }, 5000);
                } else {
                    throw new Error('Failed to subscribe');
                }
            } catch (error) {
                this.error = 'Failed to subscribe. Please try again.';
            } finally {
                this.submitting = false;
            }
        },
    }));

    // Image Lazy Loading
    Alpine.data('lazyImage', () => ({
        loaded: false,

        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.loaded = true;
                        observer.unobserve(entry.target);
                    }
                });
            });

            observer.observe(this.$el);
        },
    }));
});

// Start Alpine
Alpine.start();

// Smooth Scroll for anchor links
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');

            if (href === '#') {
                e.preventDefault();
                return;
            }

            const target = document.querySelector(href);

            if (target) {
                e.preventDefault();
                const navHeight = document.querySelector('nav')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - navHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth',
                });

                // Close mobile menu if open
                if (Alpine.store('site')) {
                    Alpine.store('site').closeMobileMenu();
                }
            }
        });
    });
});

// Add loading animation on page transitions
window.addEventListener('beforeunload', () => {
    document.body.classList.add('opacity-0');
});

// Parallax Effect (Optional)
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    parallaxElements.forEach(element => {
        const speed = element.dataset.parallax || 0.5;
        element.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Console Welcome Message
console.log('%c🏝️ Welcome to Red Island Tourism', 'font-size: 20px; font-weight: bold; color: #CDB885;');
console.log('%cBuilt with Laravel & Alpine.js', 'font-size: 14px; color: #ACBAC4;');