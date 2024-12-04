<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <center>
        <br><br><br><br><br>
        <h1>PRODUCTS MODULE</h1>
        <a href='/addproduct' text="#ffffff">
            <button type="submit" class="action-btn add-btn">Add New Lead</button></a>
        <br><br>
        <table border="1">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Actions</th>
            </tr>
            <?php foreach($products as $v): ?>
            <tr>
                <th><?=$v['productid']?></th>
                <th><?=$v['product_name']?></th>
                <th>
                    <form action="/editproduct/<?= $v['productid'] ?>" method="get" style="display: inline;">
                        <button type="submit" class="action-btn edit-btn">Edit</button>
                    </form>

                    <form action="/deleteProduct/<?= $v['productid'] ?>" method="post" style="display: inline;">
                        <button type="submit" class="action-btn delete-btn">Delete</button>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
    </center>
</body>

<?= $this->endSection() ?>