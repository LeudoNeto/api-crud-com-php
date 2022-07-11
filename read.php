<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>API CRUD</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <a href="index.php"><img height="50" src="img/home.png"></a>

  <table class="styled-table" id="search-table">
    <thead>
      <tr>
        <th>Pesquisa por ID</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <form>
          <td><input type="number" name='id'><button id="search" style='border: 0px solid black; cursor: pointer;' class='edit-icon'><img height='20' src='img/search.png' ></button></td>
        </form>
      </tr>
    </tbody>
  </table>

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

        $id = $_REQUEST["id"] ?? 0;

        $person = new Person;
        $person->setId($id);

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