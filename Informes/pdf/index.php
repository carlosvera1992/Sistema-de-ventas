<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	//$query = "SELECT p.idProducto, p.descripcion, p.stock, p.precio, p.disponible, c.descripcion as categoriap FROM producto AS p INNER JOIN categoria AS c ON p.idCategoria=c.idCategoria;";
	$query = "SELECT c.codcerdo, c.fechanacimiento, c.sexo, c.estado, c.precio, co.nombre as cerdoCorral FROM cerdo AS c INNER JOIN corral AS co ON c.codcorral=co.codcorral;";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF('P','mm','Legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'Codigo',1,0,'C',1);
	$pdf->Cell(45,6,'Fecha nacimiento',1,0,'C',1);
	$pdf->Cell(20,6,'Sexo',1,0,'C',1);
	$pdf->Cell(20,6,'Estado',1,0,'C',1);
	$pdf->Cell(30,6,'Precio',1,0,'C',1);
	$pdf->Cell(30,6,'Corral',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,($row['codcerdo']),1,0,'C');
		$pdf->Cell(45,6,$row['fechanacimiento'],1,0,'C');
		$pdf->Cell(20,6,($row['sexo']),1,0,'C');
		$pdf->Cell(20,6,$row['estado'],1,0,'C');
		$pdf->Cell(30,6,$row['precio'],1,0,'C');
		$pdf->Cell(30,6,$row['cerdoCorral'],1,1,'C');
	}
	$pdf->Output();
?>