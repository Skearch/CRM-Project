<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
        <h1>Login</h1>
        <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
        <?php endif; ?>

        <form action="/login" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <div />
</body>

<?= $this->endSection() ?>