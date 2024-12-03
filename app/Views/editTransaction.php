<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>

    <div class="container">
        <h1>Edit Transactions</h1>


        <form method="post" action="/updatetransaction/<?=$transaction['transactionid']?>">
            <label for="transactiondate">Transaction Date: </label>
            <input type="text" name="transactiondate" value="<?=$transaction['transaction_date']?>">

            <label for="customerid">Customer ID: </label>
            <input type="text" name="customerid" value="<?=$transaction['customerid']?>">

            <label for="productid">Product ID: </label>
            <input type="text" name="productid" value="<?=$transaction['productid']?>">

            <label for="amount">Amount: </label>
            <input type="text" name="amount" value="<?=$transaction['amount']?>">

            <label for="quantity">Quantity: </label>
            <input type="text" name="quantity" value="<?=$transaction['quantity']?>">

            <label for="totalprice">Total Price: </label>
            <input type="text" name="totalprice" value="<?=$transaction['total_price']?>">

            <input type="submit" value="Save">
        </form>
    </div>
</body>
<?= $this->endSection() ?>