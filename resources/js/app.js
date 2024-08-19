import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
document.addEventListener('DOMContentLoaded', function () {
    const navbarToggle = document.getElementById('navbar-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileDropdownButton = document.getElementById('mobile-dropdown-button');
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');

    navbarToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('opacity-100');
    });

    mobileMenuClose.addEventListener('click', function () {
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('opacity-100');
    });

    mobileDropdownButton.addEventListener('click', function () {
        mobileDropdownMenu.classList.toggle('hidden');
    });
});
