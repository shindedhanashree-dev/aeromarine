AOS.init({
  duration: 900,
  easing: 'ease-out-cubic',
  once: true,
  offset: 80
});

// Mobile menu and Products dropdown
const menuToggle = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");
const menuIcon = document.getElementById("menuIcon");
const closeIcon = document.getElementById("closeIcon");

const mobileLayout = window.matchMedia("(max-width: 1279px)");

const productsDropdown = document.querySelector(".products-dropdown");
const productsToggle = document.getElementById("productsToggle");
const productsMenu = document.getElementById("productsMenu");

function setProductsOpen(open) {
  productsToggle.setAttribute("aria-expanded", String(open));
  productsMenu.hidden = !open;
}

function setMenuOpen(open) {
  navMenu.classList.toggle("is-open", open);

  menuToggle.setAttribute("aria-expanded", String(open));
  menuToggle.setAttribute(
    "aria-label",
    open ? "Close navigation" : "Open navigation"
  );

  menuIcon.hidden = open;
  closeIcon.hidden = !open;

  if (!open) {
    setProductsOpen(false);
  }
}

// Open or close the main mobile menu
menuToggle.addEventListener("click", () => {
  const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
  setMenuOpen(!isOpen);
});

// Open or close Products
productsToggle.addEventListener("click", () => {
  const isOpen = productsToggle.getAttribute("aria-expanded") === "true";
  setProductsOpen(!isOpen);
});

// Close menus when a navigation link is selected
navMenu.addEventListener("click", (event) => {
  if (event.target.closest("a")) {
    setMenuOpen(false);
  }
});

// Close when clicking outside
document.addEventListener("click", (event) => {
  if (!productsDropdown.contains(event.target)) {
    setProductsOpen(false);
  }

  if (!event.target.closest(".navbar")) {
    setMenuOpen(false);
  }
});

// Escape closes Products first, then the main mobile menu
document.addEventListener("keydown", (event) => {
  if (event.key !== "Escape") return;

  if (productsToggle.getAttribute("aria-expanded") === "true") {
    setProductsOpen(false);
    productsToggle.focus();
    return;
  }

  if (menuToggle.getAttribute("aria-expanded") === "true") {
    setMenuOpen(false);
    menuToggle.focus();
  }
});

// Close Products when keyboard focus leaves its dropdown
productsDropdown.addEventListener("focusout", (event) => {
  if (!productsDropdown.contains(event.relatedTarget)) {
    setProductsOpen(false);
  }
});

// Reset menus when switching between desktop and mobile layouts
mobileLayout.addEventListener("change", () => {
  setMenuOpen(false);
});

    // Background video
    const video = document.getElementById("heroVideo");
    const videoToggle = document.getElementById("videoToggle");
    const playIcon = document.getElementById("playIcon");
    const pauseIcon = document.getElementById("pauseIcon");
    const reducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    );

    function updateVideoButton() {
        const paused = video.paused;

        playIcon.hidden = !paused;
        pauseIcon.hidden = paused;

        videoToggle.setAttribute(
            "aria-label",
            paused ? "Play background video" : "Pause background video"
        );
    }

    async function playVideo() {
        try {
            video.muted = true;
            await video.play();
        } catch (error) {
            // Keep the poster and play button if playback is blocked.
        }

        updateVideoButton();
    }

    videoToggle.addEventListener("click", () => {
        if (video.paused) {
            playVideo();
        } else {
            video.pause();
        }
    });

    video.addEventListener("play", updateVideoButton);
    video.addEventListener("pause", updateVideoButton);

    video.addEventListener("error", () => {
        videoToggle.hidden = true;
    });

    reducedMotion.addEventListener("change", (event) => {
        if (event.matches) video.pause();
    });

    if (!reducedMotion.matches) {
        playVideo();
    }

    updateVideoButton();

    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            heading: ['Montserrat', 'sans-serif'],
          },
          colors: {
            brand: {
              purple: '#5E2788',       /* Deep Logo Purple */
              purpleDark: '#4A156B',   /* Darker Purple Hover */
              purpleLight: '#F8F2FC',  /* Purple Tint */
              lime: '#6BB228',         /* Vibrant Logo Lime Green */
              limeDark: '#4D8B18',     /* Accent Dark Lime */
              limeLight: '#F3FAEB',    /* Light Tint Lime */
              dark: '#1A1024'
            }
          }
        }
      }
    }

            tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: '#2e6fa6',
                            hover: '#235885',
                            light: '#eef5fb',
                            dark: '#1b4569',
                            muted: '#527c9e'
                        },
                        darkText: '#1d3557'
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif']
                    }
                }
            }
        }

        function scrollProducts(direction) {
      const container = document.getElementById('productScrollContainer');
      const scrollAmount = 320;
      container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
      });
    }


    // Footer 
    tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#050B14',
                            slate: '#0B1325',
                            card: '#0F1C35',
                            gold: '#4598e1',
                            'gold-hover': '#1f6db1',
                            cyan: '#00F0FF',
                            accent: '#1E3A8A'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif']
                    }
                }
            }
        }

 // Update current year dynamically
        document.getElementById('current-year').textContent = new Date().getFullYear();
        

    // Back to Top Button Reference
    // const backToTopBtn = document.getElementById('cargoBackToTop');

    // Show button when user scrolls down 150px
    // window.addEventListener('scroll', function() {
    //   if (window.scrollY > 150) {
    //     backToTopBtn.classList.add('show');
    //   } else {
    //     backToTopBtn.classList.remove('show');
    //   }
    // });

    document.addEventListener("DOMContentLoaded", function () {
      const backToTopBtn = document.getElementById("backToTopBtn");

      // Show/Hide button based on scroll distance (150px)
      window.addEventListener("scroll", function () {
        if (window.scrollY > 150) {
          backToTopBtn.classList.add("show");
        } else {
          backToTopBtn.classList.remove("show");
        }
      });

      // Smooth scroll back to top when clicked
      backToTopBtn.addEventListener("click", function (e) {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });
    });

    // Smooth Back to Top Scroll
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }


 // Function to open the popup
function openPopup() {
    document.querySelector('.popup-form').classList.add('bc');
}

// Function to close the popup
function closePopup(event) {
    if (event) {
        event.preventDefault(); // Prevent default action, if required
    }
    
    document.querySelector('.popup-form').classList.remove('bc');
}

// Open the popup automatically on page load
window.onload = openPopup;
