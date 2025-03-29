// Initialize AOS
document.addEventListener('DOMContentLoaded', function () {
  // Initialize AOS with improved performance settings
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    startEvent: 'DOMContentLoaded'
  });

  // Mobile menu toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }

  // Navbar scroll effect
  const navbar = document.getElementById('navbar');

  if (navbar) {
    // Initial check on page load
    if (window.scrollY > 50) {
      navbar.classList.add('nav-scrolled');
    }

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('nav-scrolled');
      } else {
        navbar.classList.remove('nav-scrolled');
      }
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');

      // Only proceed if the target element exists
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();

        targetElement.scrollIntoView({
          behavior: 'smooth'
        });

        // Close mobile menu if open
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
        }
      }
    });
  });
});
