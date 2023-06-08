const button = document.querySelector('#menu-button'); // Hamburger Icon
const menu = document.querySelector('#menu'); // Menu
const icon = document.querySelector('#icon');

button.addEventListener('click', () => {
  menu.classList.toggle('hidden');
  icon.classList.toggle('hidden');
});