<?php require ("./header.php") ?>
<body>
    <form method="post">
        <p>Var vänligen att fyll i samtliga fält</p>
        <input type="text" name="firstname" placeholder="Firstname"> 
        <input type="text" name="lastname" placeholder="Lastname"> 
        <input type="text" name="phone" placeholder="Phone Number">
        <input type="submit" value="Submit">
    </form>
</body>

<?php
if (!empty ($_POST)) {

    $sql = "INSERT INTO lista (firstname, lastname, phone) VALUES (
        '{$conn->real_escape_string($_POST['firstname'])}',
        '{$conn->real_escape_string($_POST['lastname'])}',
        '{$conn->real_escape_string($_POST['phone'])}' )";

    $insert = $conn->query($sql);

    if ($insert) {
        echo "Sucess! Row id: {$conn->insert_id}";
    } else {
        die ("Error: {$conn->errno} : {$conn->error}");
    }
    $conn->close();
}



?>
<?php require ("./footer.php") ?>