<?php
    include "navbar.php";
?>

<br>
<br>
<br>

<?php


    include 'connection.php';
    $sql = $conn->prepare("SELECT * FROM register");
    $sql->execute();
    $rows = $sql->fetchAll();

    echo "<div><h3>All Useres Data:</h3></div>";
echo "<table class='table table-dark'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>FName</th>";
echo "<th scope='col'>LName</th>";
echo "<th scope='col'>Email</th>";
echo "<th scope='col'>Phone</th>";
echo "<th scope='col'>Country</th>";
echo "<th scope='col'>Url</th>";

echo "</tr>";
echo "</thead>";
    foreach ($rows as $row) {


    echo "<tbody>";
    echo "<tr>";
        echo "<td>" .  $row['first_name'] . "</td>";
        echo "<td>" .  $row['last_name'] . "</td>";
        echo "<td>" .  $row['mail'] . "</td>";
        echo "<td>" .  $row['phone'] . "</td>";
        echo "<td>" .  $row['country'] . "</td>";
        echo "<td>" .  $row['url'] . "</td>";
    echo "</tr>";
    echo "</tbody>";
}

echo "</table>";

?>


  <!-- Footer -->
<?php
include "footer.php";
?>
