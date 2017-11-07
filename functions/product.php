<?php 

function getProducts($pdo){
	$sql = "SELECT *  FROM produtos ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($pdo, $ids) {
	$sql = "SELECT * FROM produtos WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}