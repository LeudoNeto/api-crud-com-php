<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>API CRUD</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

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