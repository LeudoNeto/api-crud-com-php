<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>API CRUD</title>
    <link rel="stylesheet" href="styles/index.css">
  </head>
  <body>

    <div class="content">
      <h1>SELECIONE A AÇÃO:</h1>
      <a href="create.php" style="text-decoration: none;"><button class="create-button" role="button"><span class="text">CREATE</span></button></a>
      <a href="read.php" style="text-decoration: none;"><button class="read-button" role="button"><span class="text">READ</span></button></a>
      <a href="update.php" style="text-decoration: none;"><button class="update-button" role="button"><span class="text">UPDATE</span></button></a>
      <a href="delete.php" style="text-decoration: none;"><button class="delete-button" role="button"><span class="text">DELETE</span></button></a>
    </div>

  </body>
</html>


<?php
// require_once "Person.php";

// header("Content_Type: application/json");
// $data = [];

// $fn = $_REQUEST["fn"] ?? null;
// $id = $_REQUEST["id"] ?? 0;
// $name = $_REQUEST["name"] ?? null;
// $age = $_REQUEST["age"] ?? null;

// $person = new Person;
// $person->setId($id);

// if ($fn === "create" && $name !== null && $age !== null)
// {
//     $person->setName($name);
//     $person->setAge($age);
//     $data["person"] = $person->create();
// }

// if ($fn === "read") 
// {
//     $data["person"] = $person->read();
// }

// if ($fn === "update" && $name !== null && $age !== null)
// {
//     $person->setName($name);
//     $person->setAge($age);
//     $data["person"] = $person->update();
// }

// if ($fn === "delete" && $id > 0)
// {
//     $data["person"] = $person->delete();
// }


// die(json_encode($data));

?>