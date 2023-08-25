# A Basic Introduction to PHP and MySQL

A basic walkthrough of using PHP to display content from a MySQL database. 

This walkthrough is meant to illustrate the process of using PHP to display database content in an HTML web page. This is not meant to be a tutorial, more of a quick example of the end goal of these series of PHP tutorials. 

## Code Explanation
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

> Full tutorial URL:  
> https://codeadam.ca/learning/php-big-picture.html

***

## Repo Resources

* [Visual Studio Code](https://code.visualstudio.com/)
* [Filezilla](https://filezilla-project.org/) (or any FTP program)

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
