<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
    if(isset($_POST['nom']) == true ){
       ?>
    <h1><?php echo $_POST['nom'];?></h1>
    <?php 
    } else {
     ?>
    <h2>Votre nom n'a pas été rentré correctement</h2>
    <?php 
    }
    ?>

</body>


</html>