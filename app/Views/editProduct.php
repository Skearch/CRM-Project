<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body class="mainbody">

    <div class="container">
        <h1>Edit Product</h1>

        <form method="post" action="/updateproduct/<?=$products['productid']?>">

            <label for="productname">Product Name:</label>
            <input type="text" name="productname" value="<?=$products['product_name']?>">

            <input type="submit" value="Save">
        </form>
    </div>

</body>
<?= $this->endSection() ?>