<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>

    <div class="container">
        <h1>Edit Transaction</h1>


        <form method="post" action="/updatetransaction/<?=$transactions['transactionid']?>">
            <label for="transactiondate">Transaction Date: </label>
            <input type="date" name="transactiondate" value="<?=$transactions['transaction_date']?>">

            <label for="customerid">Customer ID: </label>
            <input type="text" name="customerid" value="<?=$transactions['customerid']?>">

            <label for="productid">Product ID: </label>
            <input type="text" name="productid" value="<?=$transactions['productid']?>">

            <label for="amount">Amount: </label>
            <input type="text" name="amount" value="<?=$transactions['amount']?>">

            <label for="quantity">Quantity: </label>
            <input type="text" name="quantity" value="<?=$transactions['quantity']?>">

            <label for="totalprice">Total Price: </label>
            <input type="text" name="totalprice" value="<?=$transactions['total_price']?>">

            <input type="submit" value="Save">
        </form>
    </div>
</body>
<?= $this->endSection() ?>