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
// Function to edit the product
function editProduct(button) {
    const productCard = button.closest('.product-card');
    const productName = productCard.querySelector('h3').innerText;
    const productDescription = productCard.querySelector('p').innerText;
    const productPrice = productCard.querySelector('.price').innerText;

    // Remove currency symbol and convert price to number
    const priceValue = parseInt(productPrice.replace('Rp ', '').replace('.', ''));

    // Fill the update form with product data
    document.getElementById('update-name').value = productName;
    document.getElementById('update-description').value = productDescription;
    document.getElementById('update-price').value = priceValue;

    // Store the product card for later use
    document.getElementById('update-product-form').dataset.productCard = productCard.outerHTML;
    document.getElementById('update-product-form').dataset.productElement = productCard;
}

// Function to update the product
function updateProduct(event) {
    event.preventDefault(); // Prevent form submission

    const productCard = document.getElementById('update-product-form').dataset.productElement;
    const productName = document.getElementById('update-name').value;
    const productDescription = document.getElementById('update-description').value;
    const productPrice = document.getElementById('update-price').value;

    // Update the product card with new data
    productCard.querySelector('h3').innerText = productName;
    productCard.querySelector('p').innerText = productDescription;
    productCard.querySelector('.price').innerText = 'Rp ' + parseInt(productPrice).toLocaleString();

    // Clear the form
    document.getElementById('update-product-form').reset();
}
// Function to edit the product
function editProduct(button) {
    const productCard = button.closest('.product-card');
    const productName = productCard.querySelector('h3').innerText;
    const productDescription = productCard.querySelector('p').innerText;
    const productPrice = productCard.querySelector('.price').innerText;

    // Remove currency symbol and convert price to number
    const priceValue = parseInt(productPrice.replace('Rp ', '').replace('.', ''));

    // Fill the update form with product data
    document.getElementById('update-name').value = productName;
    document.getElementById('update-description').value = productDescription;
    document.getElementById('update-price').value = priceValue;

    // Store the product card for later use
    document.getElementById('update-product-form').dataset.productCard = productCard.outerHTML;
    document.getElementById('update-product-form').dataset.productElement = productCard;
}

// Function to update the product
function updateProduct(event) {
    event.preventDefault(); // Prevent form submission

    const productCard = document.getElementById('update-product-form').dataset.productElement;
    const productName = document.getElementById('update-name').value;
    const productDescription = document.getElementById('update-description').value;
    const productPrice = document.getElementById('update-price').value;

    // Update the product card with new data
    productCard.querySelector('h3').innerText = productName;
    productCard.querySelector('p').innerText = productDescription;
    productCard.querySelector('.price').innerText = 'Rp ' + parseInt(productPrice).toLocaleString();

    // Clear the form
    document.getElementById('update-product-form').reset();
}
