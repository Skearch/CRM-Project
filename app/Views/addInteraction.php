<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <br><br>
        <h1>Add Interaction</h1>
        <form method="post" action="/saveinteraction">
            <label for="interactidate">Interaction Date:</label>
            <input type="date" id="interactiondate" name="interactiondate">
            <br>
            <label for="interactiontype">Interaction Type:</label>
            <input type="text" id="interactiontype" name="interactiontype">
            <br>
            <label for="notes">Notes:</label>
            <input type="text" id="notes" name="notes">
            <br>
            <label for="customerid">Customer ID:</label>
            <input type="text" id="customerid" name="customerid">
            <br>
            <label for="salespersonid">Salesperson ID:</label>
            <input type="text" id="salespersonid" name="salespersonid">
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>