


<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
</head>
<?php
include "navbar.php";
?>

<br>
<br>
<br>

<?php

    include 'connection.php';

    $search_value = $_POST["search"];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = $conn->prepare("select *
                                         from  register 
                                         WHERE first_name LIKE '%$search_value%' 
                                         or  last_name LIKE '%$search_value%' 
                                          or  phone LIKE '%$search_value%'");


        $sql->execute();
        $count = $sql->rowCount();
        if ($count) {
            echo '<b style="color: red;">' . $count . '</b>' . " of results found of: " . '<b style="color: blue;">' . $search_value . '</b>';

            $rows = $sql->fetchAll();



            echo "<table>
                <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Url</th>
                <th>Country</th>
                </tr>";

            foreach ($rows as $row) {

                echo "<tr>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['mail'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['url'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        } else {
            echo "<b style='color: red;'> No results found, Try again..";
echo "<br>";echo "<br>";
           echo "<button><a style='text-decoration: none;' href='index.php'>Back Home</a></button>";


        }


    }