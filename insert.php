<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=Ft8GucJHvx;port=3306', 'Ft8GucJHvx', '3mt7Pu17Ql');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events
 (title, start_event, end_event)
 VALUES (:title, :start_event, :end_event)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}


?>
