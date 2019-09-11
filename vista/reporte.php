<?php
	$id = ($_GET['varid']);
	require('../assets/fpdf/fpdf.php');
	header("Content-Type: text/html; charset=iso-8859-1 ");
	//include 'plantilla.php';
	class PDF extends FPDF { 
		function Header(){
		    // Logo
		    $this->Image('../images/icon/logo-t.png',10,8,50);
		    // Arial bold 15
		    $this->SetFont('Arial','B',15);
		    // Movernos a la derecha
		    $this->Cell(40);
		    // Título
		    $this->Ln(10);
		    $this->Cell(270,10,'ESTADO DE CUENTA DE CLIENTES AL:',0,0,'C');
		    $this->Ln(5);
		    $this->Cell(270,10,date('d/m/Y'),0,0,'C');
		    $this->Ln(10);
		}
		function Footer(){
		    // Posición: a 1,5 cm del final
		    $this->SetY(-15);
		    // Arial italic 8
		    $this->SetFont('Arial','I',8);
		    // Número de página
		    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
		}
		function vcell($c_width,$c_height,$x_axis,$text){ 
			$w_w=$c_height/3; 
			$w_w_1=$w_w+2; 
			$w_w1=$w_w+$w_w+$w_w+3; 
			$len=strlen($text);// check the length of the cell and splits the text into 7 character each and saves in a array 
			if($len>37){ 
				$w_text=str_split($text,37); 
				$this->SetX($x_axis); 
				$this->Cell($c_width,$w_w_1,$w_text[0],'','',''); 
				$this->SetX($x_axis); 
				$this->Cell($c_width,$w_w1,$w_text[1],'','',''); 
				$this->SetX($x_axis); 
				$this->Cell($c_width,$c_height,'','LTRB',0,'L',0); 
			} 
			else{ 
	    		$this->SetX($x_axis); 
	    		$this->Cell($c_width,$c_height,$text,'LTRB',0,'L',0);
	    	} 
	    	} 
	} 

	$pdf = new PDF(); 
	$pdf->AliasNbPages();
	$pdf->AddPage('L');

    // Arial 12
    $pdf->SetFont('Arial','B',11);
    // Color de fondo
    $pdf->SetFillColor(232,232,232);
    // Título
    foreach($this->modelo1->Reporte_Empresa($id) as $row){
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,6,utf8_decode($row['nombre_empresa']),0,1,'L',true);
    $pdf->Cell(0,6,$row['ruc_empresa'],0,1,'L',true);
    // Salto de línea
    $pdf->Ln(4);
    break;
	}

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(30,6,utf8_decode('PÓLIZA'),1,0,'C',1);
	$pdf->Cell(30,6,'RUC',1,0,'C',1);
	$pdf->Cell(70,6,'RAZON SOCIAL',1,0,'C',1);
	$pdf->Cell(20,6,'EST.',1,0,'C',1);
	$pdf->Cell(30,6,'FEC. DOCUM. ',1,0,'C',1);
	$pdf->Cell(30,6,'FEC. VENC.',1,0,'C',1);
	$pdf->Cell(10,6,'MON',1,0,'C',1);
	$pdf->Cell(20,6,'IMPORTE',1,0,'C',1);
	$pdf->Cell(20,6,'SALDO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',8);
	$total_prima = 0;
	$total_saldo = 0;
	foreach($this->modelo->Reporte_Empresa($id) as $row){
		$pdf->Cell(30,6,$row['cod_cartafianza'],1,0,'C');
		$pdf->Cell(30,6,$row['ruc_empresa'],1,0,'C');
		$x_axis=$pdf->getx(); 
		$c_width=70; 
		$c_height=6; 
		$pdf->vcell($c_width,$c_height,$x_axis,utf8_decode($row['nombre_empresa'])); 
		//$pdf->Cell(70,6,$row['nombre_empresa'],1,0,'C');
		if ($row["tramite_estado"] == 1)
        	$pdf->Cell(20,6,"VIG",1,0,'C');
        else
            $pdf->Cell(20,6,"CANC",1,0,'C');
		$pdf->Cell(30,6,date('d/m/Y', strtotime($row["fecha_emision"])),1,0,'C');
		$pdf->Cell(30,6,date('d/m/Y', strtotime($row["fecha_venc"])),1,0,'C');
		$pdf->Cell(10,6,"S/.",1,0,'C');
		$pdf->Cell(20,6,number_format($row["prima"], 2, ".", ","),1,0,'R');
		$pdf->Cell(20,6,number_format($row["saldo"], 2, ".", ","),1,1,'R');
		$total_prima += $row["prima"];
		$total_saldo += $row["saldo"];
	}
	$pdf->Ln(4);
	$pdf->Ln(4);
	
		$pdf->Cell(210,6,"TOTAL",1,0,'C');
		$pdf->Cell(10,6,"S/.",1,0,'C');
		$pdf->Cell(20,6,number_format($total_prima, 2, ".", ","),1,0,'R');
		$pdf->Cell(20,6,number_format($total_saldo, 2, ".", ","),1,0,'R');
	
	$pdf->Output();
?>