<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>API CRUD</title>
        <link rel="stylesheet" href="styles/crud.css">
    </head>
    <body>

        <a href="index.php"><img height="50" src="img/home.png"></a>

        <form>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input name="name" type="text"></td>
                    <td><input name="age" type="number"></td>
                </tr>
            </tbody>

        </table>

        <input type="submit" value="CREATE" class="crud-button">
        
        <?php
            require_once "Person.php";

            $person = new Person;

            $name = $_REQUEST["name"] ?? null;
            $age = $_REQUEST["age"] ?? null;

            if ($name !== null && $age !== null)
            {
                $person->setName($name);
                $person->setAge($age);
                $data = $person->create();
                print("<table class='styled-table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>");
        print("<tr>");
        print("<td>".$data[0]["id"]."</td>");
        print("<td>".$data[0]["name"]."</td>");
        print("<td>".$data[0]["age"]."</td>");
        print("</tr>");
            }

        ?>
    
        </form>
    </body>
</html>