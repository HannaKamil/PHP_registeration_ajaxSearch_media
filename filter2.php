<?php
include "navbar.php";
?>

<br>
<br>
<br>

<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
    if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("txtHint").innerHTML=this.responseText;
        }
    }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>

<body>

<?php
include 'connection.php';

$sql = $conn->prepare("SELECT distinct country FROM register");
$sql->execute();
$count = $sql->rowCount();
if ($count) {

    $rows = $sql->fetchAll();
    echo "<form>";
    echo "<select name='users' onchange='showUser(this.value)'>";
    foreach ($rows as $row) {
       $c= $row['country'];
        echo "<option value= '$c'>" . $row['country'] . "</option>";
    }
    echo "</select>";
    echo "</form>";
    echo "<br>";
    echo "<div id='txtHint'><b>Person info will be listed here.</b></div>";
}

?>

</body>
</html>

