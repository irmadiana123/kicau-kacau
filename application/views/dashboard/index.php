<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="container">

    <div class="topbar">
        <span>Halo, <strong><?= $username ?></strong>
            (<?= $role ?>)</span>
        <a href="<?= site_url('auth/logout') ?>" class="btn-logout">Logout</a>
    </div>

    <h3>Tabel Users</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $u): ?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->username ?></td>
                <td><?= $u->role ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="3">Belum ada data.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>

    <h3>Tabel Biodata</h3>
    <table>
        <thead>
            <tr>
                <th>ID Biodata</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($biodata)): ?>
            <?php foreach ($biodata as $b): ?>
            <tr>
                <td><?= $b->id_biodata ?></td>
                <td><?= $b->nama_biodata ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="2">Belum ada data.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>

</div>
</body>
</html>
