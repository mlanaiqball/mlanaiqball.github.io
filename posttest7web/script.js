// Night Mode Toggle
const toggleButton = document.getElementById('toggle-mode');
const body = document.body;

// Load saved mode preference
const savedMode = localStorage.getItem('mode');
if (savedMode === 'dark') {
    body.classList.add('dark-mode');
    toggleButton.textContent = 'Light Mode';
}

toggleButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    
    if (body.classList.contains('dark-mode')) {
        toggleButton.textContent = 'Light Mode';
        localStorage.setItem('mode', 'dark');  // Save preference
    } else {
        toggleButton.textContent = 'Dark Mode';
        localStorage.setItem('mode', 'light'); // Save preference
    }
});
