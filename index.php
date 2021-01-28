<?php
    /* 
    $name = $argv[1];
    $surname = $argv[2];
    echo 'Ciao ' . $name . " " . $surname;
    */
?>

<!-- Istruzioni:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $badword = $_GET["badword"];
    $testo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae soluta ex dolore! Doloribus impedit, temporibus quas mollitia quaerat veniam eaque consequatur libero praesentium cupiditate fugiat tempora quia accusamus accusantium dolorum distinctio repudiandae voluptatem eveniet nam harum ducimus culpa ipsam ipsa. Nostrum facere tempora laudantium quidem, minus ipsam maxime voluptates sapiente.";
    $withoutBadword = str_replace($badword," ***",$testo);
    ?>

    <h1><?php echo $withoutBadword;?></h1>
    <p><?php echo 'Lunghezza testo ' . strlen($withoutBadword) . ' caratteri.'; ?></p>
</body>
</html>