<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <br><br>
        <h1>Add Transaction</h1>
        <form method="post" action="/savetransaction">
            <label for="transactiondate">Transaction Date:</label>
            <input type="date" id="transactiondate" name="transactiondate">
            <br>
            <label for="customerid">Customer ID</label>
            <input type="text" id="customerid" name="customerid">
            <br>
            <label for="productid">Product ID</label>
            <input type="text" id="productid" name="productid">
            <br>
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount">
            <br>
            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity">
            <br>
            <label for="totalprice">Total Price:</label>
            <input type="text" id="totalprice" name="totalprice">
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>