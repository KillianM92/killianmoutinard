<?php require("data/data.inc.php"); ?>

<?php 

// Requêtes SQL pour l'id_formation 1

$result1 = $pdo->query("SELECT lieu FROM formation WHERE id_formation = 1 AND deletion_flag IS NULL");
$lieu1 = $result1->fetch(PDO::FETCH_OBJ); 

$result2 = $pdo->query("SELECT filiere FROM formation WHERE id_formation = 1 AND deletion_flag IS NULL");
$filiere1 = $result2->fetch(PDO::FETCH_OBJ); 

$result3 = $pdo->query("SELECT description_1 FROM formation WHERE id_formation = 1 AND deletion_flag IS NULL");
$description1 = $result3->fetch(PDO::FETCH_OBJ);

$result4 = $pdo->query("SELECT description_2 FROM formation WHERE id_formation = 1 AND deletion_flag IS NULL");
$description2 = $result4->fetch(PDO::FETCH_OBJ);

$result5 = $pdo->query("SELECT description_3 FROM formation WHERE id_formation = 1 AND deletion_flag IS NULL");
$description3 = $result5->fetch(PDO::FETCH_OBJ);

$result6 = $pdo->query("SELECT date FROM formation WHERE id_formation = 1 AND deletion_flag IS NULL");
$date1 = $result6->fetch(PDO::FETCH_OBJ);


// Requêtes SQL pour l'id_formation 2

$result7 = $pdo->query("SELECT lieu FROM formation WHERE id_formation = 2 AND deletion_flag IS NULL");
$lieu2 = $result7->fetch(PDO::FETCH_OBJ); 

$result8 = $pdo->query("SELECT filiere FROM formation WHERE id_formation = 2 AND deletion_flag IS NULL");
$filiere2 = $result8->fetch(PDO::FETCH_OBJ); 

$result9 = $pdo->query("SELECT description_1 FROM formation WHERE id_formation = 2 AND deletion_flag IS NULL");
$description4 = $result9->fetch(PDO::FETCH_OBJ);

$result10 = $pdo->query("SELECT description_2 FROM formation WHERE id_formation = 2 AND deletion_flag IS NULL");
$description5 = $result10->fetch(PDO::FETCH_OBJ);

$result11 = $pdo->query("SELECT description_3 FROM formation WHERE id_formation = 2 AND deletion_flag IS NULL");
$description6 = $result11->fetch(PDO::FETCH_OBJ);

$result12 = $pdo->query("SELECT description_4 FROM formation WHERE id_formation = 2 AND deletion_flag IS NULL");
$description7 = $result12->fetch(PDO::FETCH_OBJ);

$result13 = $pdo->query("SELECT date FROM formation WHERE id_formation = 2 AND deletion_flag IS NULL");
$date2 = $result13->fetch(PDO::FETCH_OBJ);

?>