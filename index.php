<?php
//echo 'HELLO MOZAMMEL';
#this is also single line comment
/*this is multiple-line comment 
blocks that spands over multiple 
lines*/

$txt = 'hello world !';
$x = 5;
$y = 10.5;
echo $txt.$x.$y
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php page</title>
</head>
<body>
<form action = "name.php" method = "post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</form>
    <h1>
    <br>
    Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php
define("$txt","hello world");
$txt = 7;
$x = 5;
$y = 10.5;
echo $txt.$x.$y ; 
</h1>
</body>
</html>
<br>


<?php 
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo("<br>"."<br>".max(0, 150, 30, 20, -8, -200)."<br>");
?>


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
