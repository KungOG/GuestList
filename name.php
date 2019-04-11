<?php require ('./header.php') ?>

<body>
    <div>

        <?php
        
        $sql = "SELECT id, firstname, lastname FROM lista WHERE id =" . $_GET["id"];
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
                echo " - Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
            }
        } else {
            echo "0 results";
        }
        ?>

    </div>
</body>


<?php require ('./footer.php') ?>