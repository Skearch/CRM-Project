<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <center>
        <br><br><br><br><br>
        <h1>TRANSACTIONS MODULE</h1>
        <a href='/addtransaction' text="#ffffff">
            <button type="submit" class="action-btn add-btn">Add New Transaction</button></a>
        <br><br>
        <table border="1">
            <tr>
                <th>Transaction ID</th>
                <th>Transaction Date</th>
                <th>Customer ID</th>
                <th>Product ID</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
            <?php foreach($transactions as $t): ?>
            <tr>
                <th><?=$t['transactionid']?></th>
                <th><?=$t['transaction_date']?></th>
                <th><?=$t['customerid']?></th>
                <th><?=$t['productid']?></th>
                <th><?=$t['amount']?></th>
                <th><?=$t['quantity']?></th>
                <th><?=$t['total_price']?></th>
                <th>
                    <form action="/edittransaction/<?= $t['transactionid'] ?>" method="get" style="display: inline;">
                        <button type="submit" class="action-btn edit-btn">Edit</button>
                    </form>

                    <form action="/deletetransaction/<?= $t['transactionid'] ?>" method="post" style="display: inline;">
                        <button type="submit" class="action-btn delete-btn">Delete</button>
                    </form>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
</body>

<?= $this->endSection() ?>