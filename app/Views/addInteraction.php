<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <h1>Add Interaction</h1>
        <form method="post" action="/saveinteraction">
            <label for="interactidate">Interaction Date:</label>
            <input type="text" id="interactiondate" name="interactiondate">

            <label for="interactiontype">Interaction Type:</label>
            <input type="text" id="interactiontype" name="interactiontype">

            <label for="notes">Notes:</label>
            <input type="text" id="notes" name="notes">

            <label for="customerid">Customer ID:</label>
            <input type="text" id="customerid" name="customerid">

            <label for="salespersonid">Salesperson:</label>
            <input type="text" id="salespersonid" name="salespersonid">

            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>