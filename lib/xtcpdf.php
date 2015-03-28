<?php 

require_once 'tcpdf/tcpdf.php';

class XTCPDF  extends TCPDF{ 

    var $xheadertexteng  = ''; 
    var $xheadercolor    = array(0,0,200);     
    var $headertemplate  = '';    
    var $footertemplate  = '';
    var $xheaderaddtexteng = '';
    
    public function Header(){      
        
        switch ($this->headertemplate) {
            
            case 'reciept_custom_16' : 
                //receipt 5 width = 16cm
                $this->SetMargins(20, 50 , 20);
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '4,2', 'color' => array(0, 0, 0));
                $this->Line(5, 10, 155, 10, $style);

                $this->SetFont('arial', '', 11);
                $this->Text(55,15,$this->xheadertexteng ); 
                $this->SetFont('arial', '', 8);
                $this->Text(70,21,'(BARODA PARISH)'); 
                $this->Text(52,25,'Tandalja Road. Baroda - 3900020 Ph.: 2336948'); 
                $this->Text(54,30,'TRUST Regn. No F-254 BARODA Dt. 7-7-79');
                $this->Text(52,35,'Society Regn. No GUJ 496 BARODA Dt. 7-7-79');
                
                $this->Line(5, 43, 155, 43, $style);
                    
                break;
            
            case 'reciept_half_page' : 
                //receipt 4 //half width(12 cm)
                $this->SetMargins(20, 46 , 20);
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '4,2', 'color' => array(0, 0, 0));
                $this->Line(5, 10, 115, 10, $style);

                $this->SetFont('arial', '', 11);
                $this->Text(35,15,$this->xheadertexteng ); 
                $this->SetFont('arial', '', 8);
                $this->Text(50,21,'(BARODA PARISH)'); 
                $this->Text(32,25,'Tandalja Road. Baroda - 3900020 Ph.: 2336948'); 
                $this->Text(34,30,'TRUST Regn. No F-254 BARODA Dt. 7-7-79');
                $this->Text(32,35,'Society Regn. No GUJ 496 BARODA Dt. 7-7-79');
                
                $this->Line(5, 43, 115, 43, $style);
                    
                break;
            
            case 'reciept_full_page' : 
                //full page (width = 24cm)
                $this->SetMargins(20, 46 , 20);
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '4,2', 'color' => array(0, 0, 0));
                $this->Line(10, 10, 190, 10, $style);

                $this->SetFont('arial', '', 11);
                $this->Text(70,15,$this->xheadertexteng ); 
                $this->SetFont('arial', '', 8);
                $this->Text(85,21,'(BARODA PARISH)'); 
                $this->Text(67,25,'Tandalja Road. Baroda - 3900020 Ph.: 2336948'); 
                $this->Text(69,30,'TRUST Regn. No F-254 BARODA Dt. 7-7-79');
                $this->Text(67,35,'Society Regn. No GUJ 496 BARODA Dt. 7-7-79');
                
                $this->Line(10, 43, 190, 43, $style);
                    
                break;
            
            case 'reciept_12' :                 
                $this->SetMargins(2, 60 , 95);
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '4,2', 'color' => array(0, 0, 0));
                $this->Line(5, 10, 118, 10, $style);

                $this->SetFont('arial', '', 13);
                $this->Text(33,15,$this->xheadertexteng ); 
                $this->SetFont('arial', '', 8);
                $this->Text(52,24,'(BARODA PARISH)'); 
                $this->Text(34,29,'Tandalja Road. Baroda - 3900020 Ph.: 2336948'); 
                $this->Text(36,34,'TRUST Regn. No F-254 BARODA Dt. 7-7-79');
                $this->Text(34,39,'Society Regn. No GUJ 496 BARODA Dt. 7-7-79');
                
                $this->Line(5, 47, 118, 47, $style);
                    
                break;
            
            case 'reciept_10' :                 
                $this->SetMargins(2, 60 , 95);
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '4,2', 'color' => array(0, 0, 0));
                $this->Line(5, 10, 113, 10, $style);

                $this->SetFont('arial', '', 13);
                $this->Text(30,15,$this->xheadertexteng ); 
                $this->SetFont('arial', '', 8);
                $this->Text(49,24,'(BARODA PARISH)'); 
                $this->Text(32,29,'Tandalja Road. Baroda - 3900020 Ph.: 2336948'); 
                $this->Text(34,34,'TRUST Regn. No F-254 BARODA Dt. 7-7-79');
                $this->Text(32,39,'Society Regn. No GUJ 496 BARODA Dt. 7-7-79');
                
                $this->Line(5, 47, 113, 47, $style);
                    
                break;
            
            case 'reciept' : 
                $this->SetMargins(10, 60 , 10);
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '4,2', 'color' => array(0, 0, 0));
                $this->Line(10, 10, 200, 10, $style);

                $this->SetFont('arial', '', 20);
                $this->Text(59,15,$this->xheadertexteng ); 
                $this->SetFont('arial', '', 10);
                $this->Text(86,24,'(BARODA PARISH)'); 
                $this->Text(62,29,'Tandalja Road. Baroda - 3900020 Ph.: 2336948'); 
                $this->Text(67,34,'TRUST Regn. No F-254 BARODA Dt. 7-7-79');
                $this->Text(63,39,'Society Regn. No GUJ 496 BARODA Dt. 7-7-79');

                $this->Line(10, 47, 200, 47, $style);                   
                    
                break;
            
            case 'birthday_list' : 
                    $this->SetMargins(0, 20 , 0);
                    $this->SetFont('arial', '', 12);
                    $this->Text(10,10,$this->xheadertexteng);

                break;
            
            case 'announcements' : 
                    $this->SetMargins(0, 20 , 0);
                
                    $this->SetFont('arial', '', 12);
                    $this->Text(45,10,$this->xheadertexteng);

                break;
            
            case 'yearly_arrears_report' : 
                    $this->SetMargins(0, 20 , 0);
                
                    $this->SetFont('arial', '', 12);
                    $this->Text(90,10,$this->xheadertexteng);

                break;
            case 'election_header' : 
                $this->SetMargins(0, 20 , 0);
                
                $this->SetFont('arial', '', 12);
                $this->Text(22,10,$this->xheadertexteng);                
                
                break;
            
            case 'small_header':
                
                $this->SetMargins(0, 20 , 0);
                
                $this->SetFont('arial', '', 11);
                $this->Text(10,10,$this->xheadertexteng);                
            default:
                break;
        }
        
     } 
     
    public function Footer() {
        switch ($this->footertemplate) {
             case 'birthday_list'  :
                 $this->SetY(-15);
                // Set font
                $this->SetFont('dejavusans', '', 8);
                // Page number
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
                $this->Line(5, 285, 205, 285, $style);
//                $this->MultiCell(60, 0, 'Page '.$this->getAliasNumPage().' Of '.$this->getAliasNbPages(), 0, 'L', 0, 0, 5, 288, true, 0, false, true, 0);
                $this->MultiCell(55, 0, 'Page '.$this->getAliasNumPage().' Of '.$this->getAliasNbPages(), 0, 'R', 0, 0, 170, 288, true, 0, false, true, 0);
                
                break;
            case 'landscape_footer'  :
                // Set font
                $this->SetFont('dejavusans', '', 8);
                // Page number
                $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
                $this->Line(5, 190, 292, 190, $style);
                $this->MultiCell(55, 0, 'Page '.$this->getAliasNumPage().' Of '.$this->getAliasNbPages(), 0, 'R', 0, 0, 260, 195, true, 0, false, true, 0);
                
                break;
        }
    }
    
    public function GenerateHeader($header,$width){
        for($i = 0 ; $i < count($header);$i++){
            $this->SetFont('arial','B',8);
            $num_headers = count($header[$i]);
            
            for($j = 0; $j < $num_headers; ++$j) {                
                $this->Cell($width[$i][$j], 7, $header[$i][$j]['name'], 0 , 0,$header[$i][$j]['align'], FALSE);
            }
            
            $this->Ln();
        }
    }
    
    public function DataStructure($header,$width,$data = array(),$pageAgrs = array()){       
        
        $this->GenerateHeader($header, $width);
        $page   = 1;
   
        for($i = 0 ; $i < count($data) ; $i++ ) {
            $this->SetFont('arial', '',8);
            $num_data    = count($data[$i]);   
            
            for($j = 0;$j< $num_data;++$j){
                $this->Cell($width[count($width)-1][$j], 7, $data[$i][$j]['name'], 0 ,0, $data[$i][$j]['align'], FALSE);
            }
            
            if(!empty($pageAgrs)){
                if($i == $pageAgrs['count']){                
                    $this->AddPage($pageAgrs['orientation'],$pageAgrs['page']); 
                    $this->GenerateHeader($header, $width);
                    $page++;
                }else if(($page * $pageAgrs['count']) == $i && ($i < (count($data)-1))){
                    $this->AddPage($pageAgrs['orientation'],$pageAgrs['page']); 
                    $this->GenerateHeader($header, $width);
                    $page++;
                }
            }
            
            $this->Ln(); 

        }      
    }

} 