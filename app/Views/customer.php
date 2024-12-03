<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <center>
        <br><br><br><br><br>
        <h1>CUSTOMERS MODULE</h1>
        <a href='/addcustomers' text="#ffffff">
            <button type="submit" class="action-btn add-btn">Add New Customer</button></a>
        <br><br>
        <table border="1">
            <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Registration Date</th>
                <th>Assigned Salespersons</th>
                <th>Actions</th>
            </tr>
            <?php foreach($customers as $c): ?>
            <tr>
                <th><?=$c['customerid']?></th>
                <th><?=$c['first_name']?></th>
                <th><?=$c['last_name']?></th>
                <th><?=$c['email']?></th>
                <th><?=$c['phone']?></th>
                <th><?=$c['address']?></th>
                <th><?=$c['registration_date']?></th>
                <th><?=$c['assigned_salesperson']?></th>
                <th>
                    <form action="/editcustomer/<?= $c['customerid'] ?>" method="get" style="display: inline;">
                        <button type="submit" class="action-btn edit-btn">Edit</button>
                    </form>

                    <form action="/deleteCustomer/<?= $c['customerid'] ?>" method="post" style="display: inline;">
                        <button type="submit" class="action-btn delete-btn">Delete</button>
                    </form>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
</body>

<?= $this->endSection() ?>