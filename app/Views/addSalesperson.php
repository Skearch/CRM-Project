<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <div class="container">
        <br><br>
        <h1>Add Salesperson</h1>
        <form method="post" action="/savesalesperson">
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
            <label for="hiredate">Hire Date:</label>
            <input type="date" id="hiredate" name="hiredate">
            <br>
            <label for="salestarget">Sales Target:</label>
            <input type="text" id="salestarget" name="salestarget">
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
<?= $this->endSection() ?>