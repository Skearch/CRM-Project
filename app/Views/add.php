<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <br><br><br><br>
        <h1>Add Customers</h1>
        <form method="post" action="/savecustomer">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="registration">Registration Date:</label>
            <input type="date" id="registration" name="registration" required>

            <label for="assigned">Assigned Salesperson:</label>
            <input type="text" id="assigned" name="assigned" required>

            <input type="submit" value="Save">
        </form>
    </div>
</body>

<?= $this->endSection() ?>