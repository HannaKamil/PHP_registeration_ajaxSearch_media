
<!DOCTYPE html>
<html>
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
<body>

<?php
$q = $_GET['q'];

echo $q;

include 'connection.php';
if (!$conn) {
    echo('Could not connect');
}

    $sql = $conn->prepare("select *
                                    from  register 
                                    WHERE country = '$q' ");


    $sql->execute();
//    $count = $sql->rowCount();
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
?>
</body>
</html>
