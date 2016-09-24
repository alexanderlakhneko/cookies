<?php
session_start();
if(isset($_POST['b'])){
    $_SESSION['b'] = $_POST['b'];
    header('Location: 3.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>
<form action="2.php" method="post">
    <label for="b">Сколько будет 5 - 2?</label><br>
    <input type="number" id="b" name="b"><br>
    <input type="submit">
</form>
</body>
</html>