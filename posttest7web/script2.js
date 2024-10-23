// Toggle login form display
document.getElementById("login-link").addEventListener("click", function() {
    var loginFormSection = document.getElementById("login-form-section");
    if (loginFormSection.style.display === "none") {
        loginFormSection.style.display = "block";
    } else {
        loginFormSection.style.display = "none";
    }
});

// Handle form submission
document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();

    // Get form input values
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const age = document.getElementById("age").value;

    // Display input values
    const outputDiv = document.getElementById("form-output");
    outputDiv.innerHTML = `<p><strong>Username:</strong> ${username}</p>
                           <p><strong>Password:</strong> ${password}</p>
                           <p><strong>Age:</strong> ${age}</p>`;
});

// Ambil elemen yang dibutuhkan
const toggleButton = document.getElementById('toggle-mode');
const body = document.body;

// Event listener untuk tombol toggle dark mode
toggleButton.addEventListener('click', function () {
    // Toggle class 'dark-mode' pada body
    body.classList.toggle('dark-mode');
    
    // Ubah teks tombol tergantung mode
    if (body.classList.contains('dark-mode')) {
        toggleButton.textContent = 'Light Mode';
    } else {
        toggleButton.textContent = 'Dark Mode';
    }
});
