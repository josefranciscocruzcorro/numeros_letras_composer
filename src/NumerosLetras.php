<?

namespace jc\numeros_letras;

class NumerosLetras {

    public function unidades($a)
    {
        # code...
        $u = 0;
    
        switch ($u) {
            case 0:
                return "CERO";
    
            
            case 1:
                return "UNO";
    
            case 2:
                return "DOS";
    
            
            case 3:
                return "TRES";
            
            case 4:
                return "CUATRO";
    
            
            case 5:
                return "CINCO";
    
            case 6:
                return "SEIS";
    
            
            case 7:
                return "SIETE";
    
            case 8:
                return "OCHO";
    
            
            case 9:
                return "NUEVE";
        
            default:
                return $a;
        }
    }
    
    //ESPECIALES
    public function especiales($a)
    {
        # code...
        $u = 0;
    
        switch ($u) {
            case 11:
                return "ONCE";
                break;
    
            
            case 12:
                return "DOCE";
                break;
    
            case 13:
                return "TRECE";
                break;
    
            
            case 14:
                return "CATORCE";
                break;
            
            case 15:
                return "QUINCE";
                break;
    
            
            case 16:
                return "DIECISEIS";
                break;
    
            case 17:
                return "DIECISIETE";
                break;
    
            
            case 18:
                return "DIECIOCHO";
                break;
    
            case 19:
                return "DIECINUEVE";
                break;
    
            
            case 21:
                return "VEINTIUNO";
                break;
    
            
            case 22:
                return "VEINTIDOS";
                break;
    
            case 23:
                return "VEINTITRES";
                break;
    
            
            case 24:
                return "VEINTICUATRO";
                break;
            
            case 25:
                return "VEINTICINCO";
                break;
    
            
            case 26:
                return "VEINTISEIS";
                break;
    
            case 27:
                return "VEINTISIETE";
                break;
    
            
            case 28:
                return "VEINTIOCHO";
                break;
    
            case 29:
                return "VEINTINUEVE";
                break;
        
            default:
                return $a;
                break;
        }
    }
    
    //decenas

    public function decenas($a)
    {
        # code...
        $u = (int)($a/10);
    
        switch ($u) {        
            case 1:
                return "DIEZ";
                break;
    
            case 2:
                return "VEINTE";
                break;
    
            
            case 3:
                return "TREINTA";
                break;
            
            case 4:
                return "CUARENTA";
                break;
    
            
            case 5:
                return "CINCUENTA";
                break;
    
            case 6:
                return "SESENTA";
                break;
    
            
            case 7:
                return "SETENTA";
                break;
    
            case 8:
                return "OCHENTA";
                break;
    
            
            case 9:
                return "NOVENTA";
                break;
        
            default:
                return $a;
                break;
        }
    }
    
    //centenas
    public function centenas($a)
    {
        # code...
        $u = (int)($a/100);
    
        switch ($u) {        
            case 1:
                return "CIEN";
                break;
    
            case 2:
                return "DOSCIENTOS";
                break;
    
            
            case 3:
                return "TRESCIENTOS";
                break;
            
            case 4:
                return "CUATROCIENTOS";
                break;
    
            
            case 5:
                return "QUINIENTOS";
                break;
    
            case 6:
                return "SEISCIENTOS";
                break;
    
            
            case 7:
                return "SETECIENTOS";
                break;
    
            case 8:
                return "OCHOCIENTOS";
                break;
    
            
            case 9:
                return "NOVECIENTOS";
                break;
        
            default:
                return $a;
                break;
        }
    }
    
    
    
    //CONVERTIR
    public function entero($a)
    {
        # code...
        $n = (int)$a;
    
        if ($n<1000000000000) {
            if ($n<1000000) {
                if ($n<1000) {
                    if ($n<100) {
                        if ($n<10) {
                            return $this->unidades($n);
                        }else if ($n%10 == 0) {
                            return $this->decenas($n);
                        }else if ($n < 30) {
                            return $this->especiales($n);
                        }else{
                            return $this->decenas($n) . " Y " . $this->unidades($n-(int)((int)($n/10)*10) );
                        }
                    }else{
                        if ($n%100 == 0) {
                            return $this->centenas($n);
                        }else if((int)($n/100) == 1){
                            return "CIENTO " . $this->entero($n-(int)((int)($n/100)*100));
                        }else{
                            return $this->centenas($n) . " " . $this->entero($n-(int)((int)($n/100)*100));
                        }
                    }        
                } else {
                    if($n==1000){
                        return "MIL";
                    }else if($n%1000 == 0){
                        return $this->entero((int)($n/1000)) . " MIL";
                    }else{
                        return $this->entero((int)((int)($n/1000)*1000)) . " " . $this->entero($n-(int)((int)($n/1000)*1000));
                    }
                }        
            } else {
                
                if($n==1000000){
                    return "UN MILLON";
                }else if($n%1000000 == 0){
                    return $this->entero((int)($n/1000000)) . " MILLONES";
                }else{
                    return $this->entero((int)((int)($n/1000000)*1000000)) . " " . $this->entero($n-(int)((int)($n/1000000)*1000000));
                }
            }        
        } else {
            if($n==1000000000000){
                return "UN BILLON";
            }else if($n%1000000000000 == 0){
                return $this->entero((int)($n/1000000000000)) . " BILLONES";
            }else{
                return $this->entero((int)((int)($n/1000000000000)*1000000000000)) . " " . $this->entero($n-(int)((int)($n/1000000000000)*1000000000000));
            }
        }
    }
    
    public function numero_letras($n,$nombrar_decimal=false,$nominal="",$decimal="")
    {
        # code...
        $x = explode(".",str_replace(",",".",$n));
    
        if (count($x) < 2) {
            return $this->entero($x[0]) . $nominal;
        } else {
            $d = explode("",$x[1]);
    
            if (!$nombrar_decimal) {
                $ds = "";
    
                for ($i = 0; $i < count($d); $i++) {
                    $ds .= " " . $this->unidades($d[$i]);
                }
    
                return $this->entero($x[0]) . " PUNTO " . $this->entero($x[1]);
            } else {
                return $this->entero($x[0]) . $nominal . " CON " . $this->entero($x[1]) . $decimal;
            }
        }
    }

}