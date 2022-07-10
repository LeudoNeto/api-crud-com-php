<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>API CRUD</title>
        <link rel="stylesheet" href="styles/crud.css">
    </head>
    <body>

        <a href="index.php"><img height="50" src="https://cdn-icons.flaticon.com/png/512/4880/premium/4880639.png?token=exp=1657406846~hmac=faeaa56c6e3dd7b3fd2f37da6b9c5680"></a>

        <form>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input name="id" type="text" value="<?php
                    $id = $_REQUEST["id"] ?? 0;
                    if ($id != 0)
                    {
                        print($id);
                    }
                    
                    ?>"></td>
                    <td><input name="name" type="text"></td>
                    <td><input name="age" type="number"></td>
                </tr>
            </tbody>

        </table>

        <input type="submit" value="UPDATE" class="crud-button">
        
        </form>

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

        $person = new Person;
        $person->setId($id);
        $name = $_REQUEST["name"] ?? null;
        $age = $_REQUEST["age"] ?? null;

        if ($name !== null && $age !== null)
        {
            $person->setName($name);
            $person->setAge($age);
            $data = $person->update();
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
            print("<td><form><button style='border: 0px solid black; cursor: pointer;' name='id' value='$line_id' class='edit-icon'><img height='20' src='https://cdn-icons-png.flaticon.com/512/1160/1160758.png' ></button></form><td>");
            print("</tr>");
        }

        ?>
        </tbody>
    </table>

    </body>
</html>