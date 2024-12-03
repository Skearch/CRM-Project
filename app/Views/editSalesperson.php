<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>

    <div class="container">
        <h1>Edit Salespersons</h1>

        <form method="post" action="/updatesalesperson/<?=$salespersons['salespersonid']?>">

            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="<?=$salespersons['first_name']?>">

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" value="<?=$salespersons['last_name']?>">

            <label for="email">Email: </label>
            <input type="text" name="email" value="<?=$salespersons['email']?>">

            <label for="phone">Phone: </label>
            <input type="text" name="phone" value="<?=$salespersons['phone']?>">

            <label for="hiredate">Hire Date: </label>
            <input type="text" name="hiredate" value="<?=$salespersons['hire_date']?>">

            <label for="salestarget">Sales Target: </label>
            <input type="text" name="salestarget" value="<?=$salespersons['sales_target']?>">

            <input type="submit" value="Save">
        </form>
    </div>
</body>
<?= $this->endSection() ?>