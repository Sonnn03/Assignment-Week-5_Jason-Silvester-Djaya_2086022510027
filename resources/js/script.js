
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
const toggleOpen = document.getElementById('toggleOpen');
const toggleClose = document.getElementById('toggleClose');
const menu = document.getElementById('collapseMenu');

let lastFocusedElement = null;

function openMenu() {
    lastFocusedElement = document.activeElement;
    menu.classList.remove('hidden');
    toggleOpen.setAttribute('aria-expanded', 'true');

    // Move focus into menu
    menu.focus();
}

function closeMenu() {
    menu.classList.add('hidden');
    toggleOpen.setAttribute('aria-expanded', 'false');

    // Restore focus
    lastFocusedElement?.focus();
}

toggleOpen.addEventListener('click', openMenu);
toggleClose.addEventListener('click', closeMenu);

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
        closeMenu();
    }
});
