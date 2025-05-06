// Check for saved theme on load
if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark');
}

function toggleTheme() {
    const html = document.documentElement;
    const isDark = html.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('overlay');
  const menuIcon = document.getElementById('menu-icon');

  function openMenu() {
    mobileMenu.classList.remove('translate-x-full');
    overlay.classList.remove('hidden');
    menuIcon.classList.remove('ri-menu-line');
    menuIcon.classList.add('ri-close-line');
  }

  function closeMenu() {
    mobileMenu.classList.add('translate-x-full');
    overlay.classList.add('hidden');
    menuIcon.classList.remove('ri-close-line');
    menuIcon.classList.add('ri-menu-line');
  }

  menuToggle.addEventListener('click', () => {
    if (mobileMenu.classList.contains('translate-x-full')) {
      openMenu();
    } else {
      closeMenu();
    }
  });

  overlay.addEventListener('click', closeMenu);



  //aos animation
 