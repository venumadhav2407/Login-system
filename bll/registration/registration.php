<?php

    class registration{
        
    
        public function FillData( $data){

            if($data->Name == ''){
                $Result['message'] = 'Name feild is Empty!';
                return $Result;
            }
            if($data->Mobile == ''){
                $Result['message'] = 'Mobile feild is Empty!';
                return $Result;
            }
            if($data->Email == ''){
                $Result['message'] = 'Email feild is Empty!';
                return $Result;
            }
            if($data->Password == ''){
                $Result['message'] = 'Password feild is Empty!';
                return $Result;
            }
            if($data->ConfirmPasswd == ''){
                $Result['message'] = 'ConfirmPasswd feild is Empty!';
                return $Result;
            }

        }
    }














?>