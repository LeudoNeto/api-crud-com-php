<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>API CRUD</title>
    <link rel="stylesheet" href="styles/crud.css">
  </head>
  <body>

  <a href="index.php"><img height="50" src="https://cdn-icons.flaticon.com/png/512/4880/premium/4880639.png?token=exp=1657406846~hmac=faeaa56c6e3dd7b3fd2f37da6b9c5680"></a>

    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once "Person.php";

        $person = new Person;

        $data = $person->read();

        foreach ($data as $line)
        {
            print("<tr>");
            print("<td>".$line["id"]."</td>");
            print("<td>".$line["name"]."</td>");
            print("<td>".$line["age"]."</td>");
            print("</tr>");
        }


        ?>
        </tbody>
    </table>

  </body>
</html>