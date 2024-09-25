// Dark mode toggle
const toggleButton = document.getElementById('toggle-mode');
const body = document.body;

toggleButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    if (body.classList.contains('dark-mode')) {
        toggleButton.textContent = 'Light Mode';
    } else {
        toggleButton.textContent = 'Dark Mode';
    }
});

// Hamburger menu
const burger = document.getElementById('burger');
const searchBar = document.querySelector('.search-bar');
const formBtn = document.querySelector('.form-btn');
const authBtns = document.querySelector('.auth-btns');

burger.addEventListener('click', () => {
    searchBar.classList.toggle('active');
    formBtn.classList.toggle('active');
    authBtns.classList.toggle('active');
});
