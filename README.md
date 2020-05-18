# php-big-picture
A basic walkthrough of using PHP to display content from a MySQL database. 

This tutorial will provide a basic walk through of creating a MySQL database and using PHP do display the database content in an HTML page.
 
This block of code will connect our PHP file to the MySQL database:
 
```php
<?php 

$connect = mysqli_connect( 'localhost', 'root', 'root', 'sandbox' );

?>
```

This block of code will execute an SQL query and display the result using basic HTML:

```php
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
```

Tutorial requirements:

* Brackets (or any code editor) http://brackets.io/
* WAMP (or any PHP server) https://www.mamp.info/

Full tutorial URL: https://professoradamthomas.com/learning/php/php-big-picture.html

<a href="https://professoradamthomas.com">
<img src="https://professoradamthomas.com/images/code-block.png" width="100">
</a>