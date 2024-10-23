<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<header>
    <h1>Product Management</h1>
</header>

<main>
    <section>
        <h2>Add New Product</h2>
        <form id="product-form">
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description" required><br><br>
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" required><br><br>
            <button type="submit">Add Product</button>
        </form>
    </section>

    <section>
        <h2>Product List</h2>
        <table border="1" id="product-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Product rows will be inserted here -->
            </tbody>
        </table>
    </section>
</main>

<script src="crud.js"></script>
</body>
</html>
