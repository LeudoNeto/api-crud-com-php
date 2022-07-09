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
            }

        ?>
    
        </form>
    </body>
</html>