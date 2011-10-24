<?php
	require("./pdf/fpdf.php");
	if (isset($_GET["Type"])) 
	{
		$type = $_GET["Type"];
	}

	if (isset($_POST["outputHeaders"])) 
	{
		$headers = $_POST["outputHeaders"];
	}

	if (isset($_POST["outputItems"])) 
	{
		$items = $_POST["outputItems"];
		$tab_item = split(",",$items);
		$itemCount = count($tab_item);
	}
	
	if ($type == "excel")
	{
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=exported-list.xls ");
		header("Content-Transfer-Encoding: binary ");
		xlsBOF();
		
		$tab_header = split("\|",$headers);		
		$valueCount = count($tab_header);
		for ($z = 0; $z < $valueCount-1; $z++)
		{
				$tab_header[$z] = iconv("UTF-8","ISO-8859-9",$tab_header[$z]);
				xlsWriteLabel(0,$z,$tab_header[$z]);
		}
		for ($x = 0; $x < $itemCount; $x++)
		{
			$tab_value = split("\|",$tab_item[$x]);
			$valueCount = count($tab_value);
			for ($z = 0; $z < $valueCount-1; $z++)
			{
				$tab_value[$z] = iconv("UTF-8","ISO-8859-9",$tab_value[$z]);
				xlsWriteLabel($x+1,$z,$tab_value[$z]);

			//	xlsWriteNumber($xlsRow,0,"5");
			}
		}
		xlsEOF();
	}
	if ($type == "word")
	{
		header("Content-Type: application/vnd.ms-word");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("content-disposition: attachment;filename=exported-list.doc");
		
		$output = "<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">";
		$output .= '<table width="100%" cellspacing="0" cellpadding="0" >';
		$output .= '<tr><td align="left" >';
		$output .= '<table width="100%" cellspacing="0" cellpadding="0" style="padding:5px;border:solid 1px #AABBDD;" >';
		
		$tab_header = split("\|",$headers);		
		$valueCount = count($tab_header);
		$data="";
		for ($z = 0; $z < $valueCount-1; $z++)
		{
			$data .= '<td style="border-bottom:solid 1px #AABBDD; background-color:#8BA4D1; color:#FFF;"><b>'.$tab_header[$z]."</b></td>";
		}
		$output .= "<tr>".$data."</tr>";
		
		for ($x = 0; $x < $itemCount; $x++)
		{
			$tab_value = split("\|",$tab_item[$x]);
			$valueCount = count($tab_value);
			$data="";
			for ($z = 0; $z < $valueCount-1; $z++)
			{
				if ($x < $itemCount)
				{
					if ($x == $itemCount-1)
						$data .= '<td style="background-color:#fff;">'.$tab_value[$z]."</td>";	
					else
						$data .= '<td style="border-bottom:solid 1px #AABBDD;background-color:#fff;" >'.$tab_value[$z]."</td>";
				}
			}
			$output .= "<tr>".$data."</tr>";
		}
		$output .= "</table>";
		$output .= "</td></tr>";
		$output .= "</table>";
		print $output;
	}
	if ($type == "pdf")
	{
		$pdf=new PDF();
		$header = array();
		
		$tab_header = split("\|",$headers);		
		$valueCount = count($tab_header);
		for ($z = 0; $z < $valueCount-1; $z++)
		{
			$header[$z] = $tab_header[$z];			
		}
		
		$data = array(array());
		for ($x = 0; $x < $itemCount; $x++)
		{
			$tab_value = split("\|",$tab_item[$x]);
			$valueCount = count($tab_value);
			for ($z = 0; $z < $valueCount-1; $z++)
			{
				$tab_value[$z] = iconv("UTF-8","ISO-8859-9",$tab_value[$z]);
				//$tab_value[$z] = utf8_decode($tab_value[$z]);
				if (strlen($tab_value[$z])>40) $tab_value[$z] = substr($tab_value[$z],0,40);
				$data[$x][$z] = $tab_value[$z];
			}
		}
		$pdf->AddFont('Verdana','','verdana.php');
		$pdf->AddFont('Verdana','B','verdanab.php');
		$pdf->SetFont('Verdana','B',9);
		$pdf->SetFont('Verdana','',9);
		$pdf->AddPage();
		$pdf->FancyTable($header,$data);
		
		$pdf->Output("exported-list.pdf","D");
	}

	if ($type == "print")
	{

		$output =  '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">'; 
		$output .= "<html>";
		$output .= "<head>";
		$output .= "<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=\"iso-8859-1\"\" >";
		$output .= "<title>GridNic</title>";
		$output .= "</head>";
		$output .= '<body onLoad="window.print();">';

		$output .= '<table width="100%" cellspacing="0" cellpadding="0" >';
		$output .= '<tr><td align="left" >';
		$output .= '<table width="100%" cellspacing="0" cellpadding="0" style="padding:5px;border:solid 1px #000;" >';
		
		$tab_header = split("\|",$headers);		
		$valueCount = count($tab_header);
		$data="";
		for ($z = 0; $z < $valueCount-1; $z++)
		{
			$data .= '<td style="border-bottom:solid 1px #000; background-color:#8BA4D1; color:#FFF;"><b>'.$tab_header[$z]."</b></td>";
		}
		$output .= "<tr>".$data."</tr>";
		for ($x = 0; $x < $itemCount; $x++)
		{
			$tab_value = split("\|",$tab_item[$x]);
			$valueCount = count($tab_value);
			$data="";
			for ($z = 0; $z < $valueCount-1; $z++)
			{
				if ($x < $itemCount)
				{
					if ($x == $itemCount-1)
						$data .= '<td style="background-color:#fff;">'.$tab_value[$z]."</td>";	
					else
						$data .= '<td style="border-bottom:solid 1px #000;background-color:#fff;" >'.$tab_value[$z]."</td>";
				}
			}
			$output .= "<tr>".$data."</tr>";
		}
		$output .= "</table>";
		$output .= "</td></tr>";
		$output .= "</table>";
		$output .= "
</body>";
		$output .= "</html>";
		print $output;
	}

	function xlsEOF() {
		echo pack("ss", 0x0A, 0x00);
		return;
	}
	function xlsBOF() {
		echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
		return;
	}
	function xlsWriteNumber($Row, $Col, $Value) {
		echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
		echo pack("d", $Value);
		return;
	}
	function xlsWriteLabel($Row, $Col, $Value ) {
		$L = strlen($Value);
		echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
		echo $Value;
		return;
	}
	
?>
