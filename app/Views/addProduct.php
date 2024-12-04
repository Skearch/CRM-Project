<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <br><br>
        <h1>Add Product</h1>
        <form method="post" action="/saveproduct">
            <label for="productname">Product Name:</label>
            <input type="text" id="productname" name="productname" required>
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>