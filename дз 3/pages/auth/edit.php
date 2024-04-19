<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
    </head>
    <body>
        <h1>Edit</h1>

        <?php
            require_once '..\..\config.php';

            $sqlrequest = $pdo->prepare("SELECT *  FROM `users` WHERE `id` = :id");
            $sqlrequest->execute(['id'=>$_GET['id']]);
            $user = $sqlrequest->fetch(PDO::FETCH_ASSOC);
        ?>
    
        <form method="post" action="do_edit.php">
            <?php echo '<label>id:<input readonly type="number" id="id" name="id" value="'.$user["id"].'"> </label><br>'?>
            <?php echo '<label>name:<input readonly type="text" id="name" name="name" value="'.$user["username"].'"> </label><br>'?>
            <label>avatar:<input type="file" id="avatar_img" name="avatar_img"> </label><br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>