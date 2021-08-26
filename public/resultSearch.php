<?php
    include 'header.php';
    include 'search.php';
?>

<div class ="cconceito-container">
    <div class="conceito-container">
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `conceito` WHERE idConceito=$id"; 
    $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)){
        echo "ID: " . $row['idConceito']. "<br>";
        echo "<h4>Título do Conceito Preferêncial: </h4> <h5>" . $row['prefLabel'] . "</h5>";
        echo "<h4>Título do Conceito Alternativo A: </h4> <h5>" . $row['altLabelA'] . "</h5>";
        echo "<h4>Definição Acadêmica: </h4> <h5>" . $row['definitionA'] . "</h5>";
    }
    ?>
    </div>
</div>