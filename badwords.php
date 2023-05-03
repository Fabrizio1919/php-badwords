<?php

// VARIABILI CHE PRENDIAMO DA INDEX.HTML 
$text = $_POST['text'];
$badword = $_POST['badword'];


$final_text = str_ireplace($badword, '***', $text);
$length_text = strlen($text);
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
    <h3 class="info">Testo censurato:</h3>
    <div class="text">
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