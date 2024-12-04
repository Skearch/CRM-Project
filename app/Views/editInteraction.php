<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>

    <div class="container">
        <h1>Edit Interaction</h1>

        <form method="post" action="/updateInteraction/<?=$interactions['interactionid']?>">
            <label for="interactiondate">Interaction Date: </label>
            <input type="text" name="interactiondate" value="<?=$interactions['interaction_date']?>">

            <label for="interactiontype">Interaction Type: </label>
            <input type="text" name="interactiontype" value="<?=$interactions['interaction_type']?>">

            <label for="notes">Notes: </label>
            <input type="text" name="notes" value="<?=$interactions['notes']?>">

            <label for="customerid">Customer ID: </label>
            <input type="text" name="customerid" value="<?=$interactions['customerid']?>">

            <label for="salespersonid">Salesperson ID: </label>
            <input type="text" name="salespersonid" value="<?=$interactions['salespersonid']?>">

            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>