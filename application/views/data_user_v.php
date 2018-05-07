<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Data User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <a href="http://ci.id/index.php/User/form">Input Data</a>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Fullname</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            foreach ($users as $row) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->password; ?></td>
            <td><?php echo $row->fullname; ?></td>
            <td><?php echo $row->level; ?></td>
            <td>
                <a href="http://ci.id/index.php/User/del/<?php echo $row->id;?>">Hapus</a> | 
                <a href="http://ci.id/index.php/User/edit/<?php echo $row->id;?>">Edit</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>