<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <h1>Add Transaction</h1>

        <form method="post" action="/savetransaction">
            <label for="transactiondate">Transaction Date:</label>
            <input type="date" id="transactiondate" name="transactiondate">

            <label for="customerid">Customer ID</label>
            <input type="text" id="customerid" name="customerid">

            <label for="productid">Product ID</label>
            <input type="text" id="productid" name="productid">

            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount">

            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity">

            <label for="totalprice">Total Price:</label>
            <input type="text" id="totalprice" name="totalprice">

            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>