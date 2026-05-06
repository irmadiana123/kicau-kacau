<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="login-wrapper">
    <div class="login-box">
        <h2>Login</h2>

        <?php if ($this->session->flashdata('error')): ?>
            <p class="error"><?= $this->session->flashdata('error') ?></p>
        <?php endif; ?>

        <form action="<?= site_url('auth/login') ?>" method="post">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Masuk</button>
        </form>
    </div>
</div>

</body>
</html>
