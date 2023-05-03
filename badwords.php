<?php

// VARIABILI CHE PRENDIAMO DA INDEX.HTML 
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];

$final_text = str_ireplace($lastname, '***', $name);
$length_text = strlen($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwors</title>
</head>
<body>
<div class="container">
 <div class="mb-3">
    <h3 class="name">Testo censurato:</h3>
    <div class="lastname">
        <?php echo $final_text ?>
    </div>
 </div>
<div class="start">
    <h3>Lunghezza testo:</h3>
    <?php echo $length_text ?>
</div>
</div>
</body>
</html>