<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
        </tr>

        <?php
        $no = 1;
        foreach ($read as $row):
        ?>

        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->nama; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h1><?php echo isset($judul) ? html_escape($judul) : 'Biodata'; ?></h1>
    <?php if (empty($read)): ?>
        <p>No data.</p>
    <?php else: ?>
        <pre><?php print_r($read); ?></pre>
    <?php endif; ?>

</body>
</html>