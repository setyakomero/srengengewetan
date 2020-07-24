<?php

    namespace App\MyApp;

    class Form {

        public function __construct(){

        }

        static public function inputNullable($val = null){
            if($val == null){
                return NULL;
            }else{
                return $val;
            }
        }

        static public function responInformation($case = null, $message = null){
            if($case == 'success'){
                $result = array(
                    'type'      => $case,
                    'title'     => '<i class="fas fa-check-circle"></i> Success.',
                    'message'   => $message != null ? $message : 'Has been saved.'
                );
                return $result;
            }else if($case == 'warning'){
                $result = array(
                    'type'      => $case,
                    'title'     => '<i class="fas fa-exclamation-triangle"></i> Warning!',
                    'message'   => $message != null ? $message : 'Check your input again!'
                );
                return $result;
            }else{
                return $result = null;
            }
        }

    }