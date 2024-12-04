<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <br><br>
        <h1>Add Leads</h1>
        <form method="post" action="/savelead">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
            <br>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>
            <br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <br>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
            <br>
            <label for="leadsource">Lead Source: </label>
            <input type="text" id="leadsource" name="leadsource" required>
            <br>
            <label for="leadstatus">Lead Status:</label>
            <input type="text" id="leadstatus" name="leadstatus">
            <br>
            <label for="assignedsalesperson"> Assigned Salesperson:</label>
            <input type="text" id="assignedsalesperson" name="assignedsalesperson">
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>