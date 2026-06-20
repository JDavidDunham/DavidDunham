/* ============================
   MOBILE NAVIGATION TOGGLE
============================ */
const menuBtn = document.querySelector('.menu-btn');
const navLinks = document.querySelector('.nav-links');

if (menuBtn) {
  menuBtn.addEventListener('click', () => {
    navLinks.classList.toggle('open');
    menuBtn.classList.toggle('open');
  });
}

/* ============================
   SCROLL REVEAL ANIMATIONS
============================ */
const revealElements = document.querySelectorAll('.reveal');

const revealOnScroll = () => {
  revealElements.forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      el.classList.add('visible');
    }
  });
};

window.addEventListener('scroll', revealOnScroll);
revealOnScroll();

/* ============================
   PROJECT CARD HOVER GLOW
============================ */
document.querySelectorAll('.project-card').forEach(card => {
  card.addEventListener('mousemove', e => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    card.style.setProperty('--x', `${x}px`);
    card.style.setProperty('--y', `${y}px`);
  });

  card.addEventListener('mouseleave', () => {
    card.style.setProperty('--x', `-9999px`);
    card.style.setProperty('--y', `-9999px`);
  });
});

/* ============================
   SMOOTH SCROLLING FOR ANCHORS
============================ */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

/* ============================
   DARK/LIGHT THEME TOGGLE
============================ */
const themeToggle = document.querySelector('.theme-toggle');
const icon = document.querySelector('.toggle-icon');

if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('light-mode');

    const isLight = document.body.classList.contains('light-mode');

    // Save preference
    localStorage.setItem('theme', isLight ? 'light' : 'dark');

    // Change icon dynamically
    icon.textContent = isLight ? "☀️" : "🌙";
  });

  // Load saved theme on page load
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'light') {
    document.body.classList.add('light-mode');
    icon.textContent = "☀️";
  } else {
    icon.textContent = "🌙";
  }
}


/* ============================
    PROJECT FILTERING
============================ */
const filterButtons = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('.project-card');

filterButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    const category = btn.dataset.filter;

    filterButtons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    projectCards.forEach(card => {
      if (category === 'all' || card.dataset.category === category) {
        card.style.display = 'block';
        setTimeout(() => card.classList.remove('hidden'), 10);
      } else {
        card.classList.add('hidden');
        setTimeout(() => (card.style.display = 'none'), 300);
      }
    });
  });
});
