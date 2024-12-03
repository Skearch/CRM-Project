<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <center>
        <br><br><br><br><br>
        <h1>LEADS MODULE</h1>
        <a href='/addleads' text="#ffffff">
            <button type="submit" class="action-btn add-btn">Add New Lead</button></a>
        <br><br>
        <table border="1">
            <tr>
                <th>Lead ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Lead Source</th>
                <th>Lead Status</th>
                <th>Assigned Salespersons</th>
                <th>Actions</th>
            </tr>
            <?php foreach($leads as $l): ?>
            <tr>
                <th><?=$l['leadid']?></th>
                <th><?=$l['first_name']?></th>
                <th><?=$l['last_name']?></th>
                <th><?=$l['email']?></th>
                <th><?=$l['phone']?></th>
                <th><?=$l['lead_source']?></th>
                <th><?=$l['lead_status']?></th>
                <th><?=$l['assigned_salesperson']?></th>
                <th>
                    <form action="/editlead/<?= $l['leadid'] ?>" method="get" style="display: inline;">
                        <button type="submit" class="action-btn edit-btn">Edit</button>
                    </form>

                    <form action="/deletelead/<?= $l['leadid'] ?>" method="post" style="display: inline;">
                        <button type="submit" class="action-btn delete-btn">Delete</button>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
    </center>
</body>

<?= $this->endSection() ?>