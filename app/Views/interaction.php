<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <center>
        <br><br><br><br><br>
        <h1>INTERACTIONS MODULE</h1>
        <a href='/addinteraction' text="#ffffff">
            <button type="submit" class="action-btn add-btn">Add New Interaction</button></a>
        <br><br>
        <table border="1">
            <tr>
                <th>Interaction ID</th>
                <th>Interaction Date</th>
                <th>Interaction Type</th>
                <th>Notes</th>
                <th>Customer ID</th>
                <th>Salesperson ID</th>
                <th>Actions</th>
            </tr>
            <?php foreach($interactions as $i): ?>
            <tr>
                <th><?=$i['interactionid']?></th>
                <th><?=$i['interaction_date']?></th>
                <th><?=$i['interaction_type']?></th>
                <th><?=$i['notes']?></th>
                <th><?=$i['customerid']?></th>
                <th><?=$i['salespersonid']?></th>
                <th>
                    <form action="/editinteraction/<?= $i['interactionid'] ?>" method="get" style="display: inline;">
                        <button type="submit" class="action-btn edit-btn">Edit</button>
                    </form>

                    <form action="/deleteinteraction/<?= $i['interactionid'] ?>" method="post" style="display: inline;">
                        <button type="submit" class="action-btn delete-btn">Delete</button>
                    </form>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
</body>

<?= $this->endSection() ?>