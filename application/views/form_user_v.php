<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Form Input - User</title>
</head>
<body>
<?php
    if(isset($user)){
        foreach ($user as $row) {
            $id = $row->id;
            $username = $row->username;
            $password = $row->password;
            $fullname = $row->fullname;
            $level = $row->level;
            $action = "http://ci.id/index.php/User/save_edit";
        }
    }else{
        $id = "";
        $username = "";
        $password = "";
        $fullname = "";
        $level = "";
        $action = "http://ci.id/index.php/User/add";
    }
?>
    <form action="<?php echo $action; ?>" method="post">
        <input type="hidden" name="oldid" value="<?php echo $id;?>"/>
        Username<br/>
        <input type="text" name="username" value="<?php echo $username;?>"/><br/>
        Password<br/>
        <input type="password" name="password" value="<?php echo $password;?>"/><br/>
        Fullname<br/>
        <input type="text" name="fullname" value="<?php echo $fullname;?>"/><br/>
        Level<br/>
        <select name="level">
            <option value="admin" <?php echo $level=='admin'?'selected':'';?> >Admin</option>
            <option value="user" <?php echo $level=='user'?'selected':'';?>>User</option>
        </select><br/>
        <input type="submit" value="simpan" />
    </form>
</body>
</html>