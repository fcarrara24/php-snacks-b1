<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Bonus</title>
</head>
<body>
    <a class="button btn-warning px-3" href="../index.php">index</a>
    <?php 
    $stringa = ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati modi id non asperiores aperiam explicabo blanditiis assumenda possimus. Ea repudiandae ratione illo praesentium, eius a consequuntur aperiam aspernatur neque tempora. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat voluptatibus fugit a quidem suscipit possimus. Suscipit sed quos nisi, quibusdam fuga maxime molestias nulla veniam eaque? Ut adipisci aperiam rerum?';
    
    $arrayString = explode('.', $stringa);

    foreach($arrayString as $substring){
        echo '<p>'.$substring.'.</p>';
    }
    ?>
   
</body>
</html>