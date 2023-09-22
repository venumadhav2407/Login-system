<?php

    require_once '../../bll/registration/registration.php';
    
    class cltregistration{

        
        
        public function Save(){
            $oRegstration = new registration();
            if(!empty($_POST['Attribute'])){
                $attribute = json_decode($_POST['Attribute']);
                $Result = $oRegstration->FillData( $attribute );
                echo json_encode($Result);
            }
        }

    }



    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $oReg = new cltregistration();
        if($_POST['Mode'] == 'SAVE'){
            $oReg->Save();
        }

    }

    


 




?>