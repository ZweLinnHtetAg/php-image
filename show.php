
<?php
 include("config.php");
 $result = mysqli_query($conn, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <img src="upload/<?php echo $row['name'] ?>"  />  
    <?php endwhile; ?>  

    <a href="index.php">Add</a>
</body>
</html>