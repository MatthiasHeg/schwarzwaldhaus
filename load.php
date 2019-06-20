<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=Ft8GucJHvx;port=3306', 'Ft8GucJHvx', '3mt7Pu17Ql');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>
