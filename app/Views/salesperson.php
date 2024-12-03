<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<body>
    <center>
        <br><br><br><br><br>
        <h1>SALESPERSON MODULE</h1>
        <a href='/addsalespersons' text="#ffffff">
            <button type="submit" class="action-btn add-btn">Add New Sales Person</button></a>
        <br><br>
        <table border="1">
            <tr>
                <th>Salesperson ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Hire Date</th>
                <th>Sales Target</th>
                <th>Actions</th>
            </tr>
            <?php foreach($salespersons as $s): ?>
            <tr>
                <th><?=$s['salespersonid']?></th>
                <th><?=$s['first_name']?></th>
                <th><?=$s['last_name']?></th>
                <th><?=$s['email']?></th>
                <th><?=$s['phone']?></th>
                <th><?=$s['hire_date']?></th>
                <th><?=$s['sales_target']?></th>
                <th>
                    <form action="/editsalesperson/<?= $s['salespersonid'] ?>" method="get" style="display: inline;">
                        <button type="submit" class="action-btn edit-btn">Edit</button>
                    </form>

                    <form action="/deleteSalesperson/<?= $s['salespersonid'] ?>" method="post" style="display: inline;">
                        <button type="submit" class="action-btn delete-btn">Delete</button>
                    </form>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
</body>

<?= $this->endSection() ?>