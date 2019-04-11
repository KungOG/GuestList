<?php require ("./header.php") ?>

<?php

$sql = "SELECT id, firstname, lastname FROM lista";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href= name.php?id=".$row["id"]."> - Name: ".$row["firstname"]."</a>"."<br>";
    }
} else {
    echo "0 results";
}

?>

<?php require ("./footer.php") ?>