<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>

    <div class="container">
        <h1>Edit Leads</h1>

        <form method="post" action="/updatelead/<?=$leads['leadid']?>">

            <label for="firstname">First Name: </label>
            <input type="text" name="firstname" value="<?=$leads['first_name']?>">

            <label for="lastname">Last Name: </label>
            <input type="text" name="lastname" value="<?=$leads['last_name']?>">

            <label for="email">Email: </label>
            <input type="text" name="email" value="<?=$leads['email']?>">

            <label for="phone">Phone: </label>
            <input type="text" name="phone" value="<?=$leads['phone']?>">

            <label for="leadsource">Lead Source: </label>
            <input type="text" name="leadsource" value="<?=$leads['lead_source']?>">

            <label for="leadstatus">Lead Status: </label>
            <input type="text" name="leadstatus" value="<?=$leads['lead_status']?>">

            <label for="assignedsalesperson">Assigned Salesperson: </label>
            <input type="text" name="assignedsalesperson" value="<?=$leads['assigned_salesperson']?>">

            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>