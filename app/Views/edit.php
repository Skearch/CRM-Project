<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>

    <div class="container">
        <h1>Edit Customers</h1>

        <form method="post" action="/updatecustomer/<?=$customers['customerid']?>">

            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="<?=$customers['first_name']?>">

            <label for="lastname">Last Name: </label>
            <input type="text" name="lastname" value="<?=$customers['last_name']?>">

            <label for="email">Email: </label>
            <input type="text" name="email" value="<?=$customers['email']?>">

            <label for="phone">Phone: </label>
            <input type="text" name="phone" value="<?=$customers['phone']?>">

            <label for="address">Address: </label>
            <input type="text" name="address" value="<?=$customers['address']?>">

            <label for="registrationdate">Registration Date: </label>
            <input type="date" name="registration" value="<?=$customers['registration_date']?>">

            <label for="assignedsalesperson">Assigned Salesperson: </label>
            <input type="text" name="assigned" value="<?=$customers['assigned_salesperson']?>">

            <input type="submit" value="Save">
        </form>
    </div>

</body>
<?= $this->endSection() ?>