<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>API CRUD</title>
        <link rel="stylesheet" href="styles/crud.css">
    </head>
    <body>

        <a href="index.php"><img height="50" src="img/home.png"></a>

        <table class="styled-table" id="search-table">
            <thead>
            <tr>
                <th>Deleta por ID</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <form>
                <td><input type="number" name='id'><button id="search" style='border: 0px solid black; cursor: pointer;' class='edit-icon'><img height='20' src='img/delete.png' ></button></td>
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
                    <th>Select ID</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once "Person.php";

                $id = $_REQUEST["id"] ?? 0;

                $person = new Person;
                $person->setId($id);

                if ($id > 0)
                {
                    $data = $person->delete();
                }
                else
                {
                    $data = $person->read();
                }

                foreach ($data as $line)
                {
                    $line_id = $line["id"];
                    print("<tr>");
                    print("<td>".$line["id"]."</td>");
                    print("<td>".$line["name"]."</td>");
                    print("<td>".$line["age"]."</td>");
                    print("<td><form><button style='border: 0px solid black; cursor: pointer;' name='id' value='$line_id' class='edit-icon'><img height='20' src='img/delete.png' ></button></form><td>");
                    print("</tr>");
                }

            ?>
            </tbody>
        </table>
    </body>
</html>