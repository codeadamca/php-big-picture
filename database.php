<?php

// Connect to the database
$connect = mysqli_connect('<DB_HOST>', '<DB_USER>', '<DB_PASSWORD>', '<DB_DATABASE>');

?>
<!doctype html>
<html>
  <head>
    
    <title>Displaying MySQL Database Content</title>
    
  </head>
  <body>
  
    <h1>Displaying MySQL Database Content</h1>
  
    <?php 
    
    // Select all records from the topics table
    $query = 'SELECT *
      FROM topics
      ORDER BY name';
    $result = mysqli_query( $connect, $query );
    
    // Loop through each record
    while( $record = mysqli_fetch_assoc( $result ) )
    {
      
      // Display each record
      echo '<hr>';
      echo '<h2>'.$record['name'].'</h2>';
      echo '<a href="'.$record['website'].'">'.$record['website'].'</a>';
      echo '<br>';
      echo '<img src="'.$record['image'].'">';
      
    }
    
    ?>
    
    <hr>
    
  </body>
</html>
