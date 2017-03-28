<?php

require('../fpdf/fpdf.php');
require('conexion2.php');
class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}

function Header()
{

	$this->Image('../colores.png',20,20,250,40,'');
	$this->SetFont('Arial','',12);
	$this->SetTextColor(73,155,234,1);
	$this->Text(20,20,'Expediente Clinico Nutri-Saludable');
	$this->Ln(30);
}

function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','B',8);
	$this->SetTextColor(0,0,0);
	$this->Cell(100,10,'Nutri-Saludable licenciada Grecia Karina Vargas Acevedo',0,0,'L');
	$this->Cell(100,10,'Calle Tampico #479 Fracc. Ampliacion Industrial C.P 87018 Cd.Victoria Tamaulipas',0,0,'L');

}

}

	$paciente= $_GET['id'];
	$con = new DB;
	$pacientes = $con->conectar();	
	
	$strConsulta = "SELECT datos_personales.*, antecedentes_salud.*, aspectos_ginecologicos.*, dario_actividades.*, bioquimica.*, acta_diabetico.* FROM datos_personales INNER JOIN antecedentes_salud ON datos_personales.id_paciente = antecedentes_salud.id_antecedente INNER JOIN aspectos_ginecologicos ON antecedentes_salud.id_antecedente = aspectos_ginecologicos.id_ginecologico INNER JOIN dario_actividades ON aspectos_ginecologicos.id_ginecologico = dario_actividades.id_actividad INNER JOIN bioquimica ON dario_actividades.id_actividad = bioquimica.id_bioquimica INNER JOIN acta_diabetico ON bioquimica.id_bioquimica = acta_diabetico.id_diabetico WHERE datos_personales.id_paciente =  '$paciente'";
	
	$pacientes = mysql_query($strConsulta);
	
	$fila = mysql_fetch_array($pacientes);

	$pdf=new PDF('L','mm','Letter');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(20,20,20);
	$pdf->Ln(10);
	$pdf->Image('../logito.png',160,70,50,40,'');
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(102,204,51);
    $pdf->SetTextColor(0);
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->CELL(0,5,'DATOS PERSONALES',0,1);
    $pdf->Cell(0,5,'Clave del Paciente:'.$fila['id_paciente'].'      Nombre:'.$fila['nombre_paciente'],0,1);
    $pdf->Cell(0,5,'Edad:'.$fila['edad'].'                          Fecha de naciemiento:'.$fila['fecha_nacimiento'],0,1); 
    $pdf->Cell(0,5,'Sexo:'.$fila['sexo'].'              Direccion: '.$fila['direccion'],0,1); 
    $pdf->Cell(0,5,'Telefono: '.$fila['telefono'].'   Email: '.$fila['email'],0,1);
    $pdf->Cell(0,5,'Motivo de Consulta: '.$fila['motivo_consulta'].'  Fecha de Elaboracion: '.$fila['fecha_elaboracion'],0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->CELL(0,5,'ANTECEDENTES DE SALUD',0,1);
    $pdf->Cell(0,5,'Diarrea: '.$fila['diarrea'].'       Estrenimiento: '.$fila['estrenimiento'].'      Gastritis: '.$fila['gastritis'].'      Ulcera: '.$fila['ulcera'],0,2);
    $pdf->Cell(0,5,'Nausea:'.$fila['nausea'].'          Pirosis: '.$fila['pirosis'].'                  Vomito:'.$fila['vomito'].'        Colitis: '.$fila['colitis'],0,1); 
    $pdf->Cell(0,5,'Dentadura: '.$fila['dentadura'].'       Otros: '.$fila['otros'].'      Observaciones: '.$fila['observaciones'],0,2);
    $pdf->Cell(0,5,'Enfermedad Diagnosticar: '.$fila['enfermedad_diagnosticada'].'         Enfermedad Importante: '.$fila['enfermedad_importante'],0,1);  
    $pdf->Cell(0,5,'Medicamento: '.$fila['medicamento'].'      Cual Medicamento: '.$fila['cual'].'  Dosis Medicamento: '.$fila['dosis'],0,2);
    $pdf->Cell(0,5,'Desde Cuando: '.$fila['desde_cuando'].'   Laxantes: '.$fila['laxantes'].'    Diureticos: '.$fila['diureticos'].'    Antiacidos: '.$fila['antiacidos'].'    Analgesicos: '.$fila['analgesicos'].'    Cirugia: '.$fila['cirugia'],0,2); 
    $pdf->Cell(0,5,'Obesidad: '.$fila['obesidad'].'   Diabetis: '.$fila['diabetis'].'    Hta: '.$fila['hta'].'    Cancer: '.$fila['cancer'].'    Hipercolesterolemia: '.$fila['hipercolesterolemia'].'    hipertrigliceridemia: '.$fila['hipertrigliceridemia'],0,2);
    $pdf->Cell(0,5,'',0,1); 
    $pdf->CELL(0,5,'Aspectos Ginecologicos',0,1);
    $pdf->Cell(0,5,'Embarazo:'.$fila['embarazo'].'              						Referido del Paciente:'.$fila['referido_paciente'],0,1);
    $pdf->Cell(0,5,'Por Fum:'.$fila['por_fum'].'                   						Anticonceptivos Orales:'.$fila['anticonceptivos_orales'],0,1); 
    $pdf->Cell(0,5,'Cual Anticonceptivo:'.$fila['cual_anticonceptivo'].'              Dosis del Anticonceptivo: '.$fila['dosis_anticonceptivo'],0,1); 
    $pdf->Cell(0,5,'Climaterio: '.$fila['climaterio'].'           						Fecha: '.$fila['fecha'],0,1);
    $pdf->Cell(0,5,'Terapia Hormonal: '.$fila['terapia_hormonal'].'       				Cual Hormona: '.$fila['cual_hormonal'].'     Dosis Hormona: '.$fila['dosis_hormonal'],0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->Cell(0,5,'',0,1); 
    $pdf->CELL(0,5,'Diario de Actividades',0,1);
    $pdf->Cell(0,5,'Actividad Desayuno: '.$fila['actividad_desayuno'].'     Actividad Comida: '.$fila['actividad_comida'],0,2);
    $pdf->Cell(0,5,'Actividad Dormir:'.$fila['actividad_dormir'].'          Actictividad Diaria: '.$fila['actictividad_diaria'],0,2); 
    $pdf->Cell(0,5,'Tipo de Ejercicio: '.$fila['tipo_ejercicio'].'       Frecuencia de Ejercicio: '.$fila['frecuencia_ejercicio'].'      Duracion de Ejercicio: '.$fila['duracion_ejercicio'],0,2);
    $pdf->Cell(0,5,'Inicio de Ejercicio: '.$fila['inicio_ejercicio'].'         Consume Alcohol: '.$fila['consumo_alcohol'],0,1);  
    $pdf->Cell(0,5,'Consume Tabaco: '.$fila['consumo_tabaco'].'      Consume Cafe: '.$fila['consumo_cafe'].'  Aspecto General: '.$fila['aspecto_general'],0,2);
    $pdf->Cell(0,5,'Presion Arterial: '.$fila['presion_arterial'].'   Tipo de Presion: '.$fila['tipo_presion'].'    Hora de Registro: '.$fila['hora_registro'].'    Brazo Derecho: '.$fila['brazo_derecho'],0,2); 
    $pdf->Cell(0,5,'',0,1);
    $pdf->CELL(0,5,'Bioquimica',0,1);
    $pdf->Cell(0,5,'Bioquimica Relevante: '.$fila['bioquimico_relevante'].'       Solicitud de Analisis: '.$fila['solicitud_analisis'].'      Tipo de Analisis: '.$fila['tipo_analisis'],0,2);
    $pdf->Cell(0,5,'',0,1);
    $pdf->CELL(0,5,'Acta Diabetico',0,1);
	$pdf->Cell(0,5,'Comidas al Dia:'.$fila['comidas_dia'].'      Comidas en Casa:'.$fila['comidas_casa'].'      Comidas Fuera:'.$fila['comidas_fuera'].'            Horario de Comida:'.$fila['horario_comida'],0,1);
	$pdf->Cell(0,5,'Prepara el Alimento:'.$fila['prepara_alimento'].'              Come entre Comidas: '.$fila['come_entrecomidas'].'      Que Come:'.$fila['que_come'].'            Modificacion Alimentaria:'.$fila['modificacion_alimentaria'],0,1);
	$pdf->Cell(0,5,'Motivo Modificacion:'.$fila['motivo_modificacion'].'              Como Modifico: '.$fila['como_modificacion'].'      Apetito Alimentario:'.$fila['apetito_alimentacion'].'            Hora del Hambre:'.$fila['hora_ambre'],0,1);
	$pdf->Cell(0,5,'Alimento Preferido:'.$fila['alimento_preferido'].'              Alimento no Preferido: '.$fila['alimento_nopreferido'].'      Alimento de Malestar:'.$fila['alimento_malestar'].'            Alergia de Alimento:'.$fila['alergia_alimento'],0,1);
	$pdf->Cell(0,5,'Suplemento de Complemento:'.$fila['suplemento_complemento'].'              Cual Suplemento: '.$fila['cual_suplemento'].'      Dosis del Suplemento:'.$fila['dosis_suplemento'].'            Motivo del Suplemento:'.$fila['motivo_suplemento'],0,1);
	$pdf->Cell(0,5,'Actitud del Paciente:'.$fila['actitud_paciente'].'              Motivo de Actitud: '.$fila['motivo_actitud'].'      Sal en la Comida:'.$fila['sal_comida'].'            Grasa en Casa:'.$fila['grasa_casa'],0,1);
	$pdf->Cell(0,5,'Dieta Especial:'.$fila['dieta_especial'].'              Cuantas Dietas: '.$fila['cuantas_dieta'].'      Tipo de Dieta:'.$fila['tipo_dieta'].'            Hace Dieta:'.$fila['hace_dieta'],0,1);
	$pdf->Cell(0,5,'Tiempo de Dieta:'.$fila['tiempo_dieta'].'              Razon de Dieta: '.$fila['razon_dieta'].'      Apego a Dieta:'.$fila['apego_dieta'].'            Resultado de la Dieta:'.$fila['resultado_dieta'],0,1);
	$pdf->Cell(0,5,'Cuales Medicamentos:'.$fila['cuales_medicamentos'],0,1);
	$pdf->Cell(0,5,'Desayuno:'.$fila['desayuno_acta'],0,1); 
	$pdf->Cell(0,5,'Colacion:'.$fila['colacion_desayuno'],0,1); 
	$pdf->Cell(0,5,'Comida:'.$fila['comida_acta'],0,1);
	$pdf->Cell(0,5,'',0,1);
	$pdf->Cell(0,5,'',0,1);
	$pdf->Cell(0,5,'',0,1);
	$pdf->Cell(0,5,'',0,1);
	$pdf->Cell(0,5,'',0,1);
	$pdf->Cell(0,5,'Colacion:'.$fila['colacion_comida'],0,1); 
	$pdf->Cell(0,5,'Cena:'.$fila['cena_acta'],0,1); 
	$pdf->Cell(0,5,'Colacion:'.$fila['colacion_cena'],0,1);
	$pdf->Cell(0,5,'Vaso de Agua:'.$fila['vasos_agua'].'       Vaso de Bebida:'.$fila['vasos_bebida'],0,1); 
	$pdf->Cell(0,5,'Cambio en Fin de Semana:'.$fila['cambios_fin_semana'],0,1);  

   
    
$pdf->Output();
?>
