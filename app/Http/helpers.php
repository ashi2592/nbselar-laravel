<?php
if (! function_exists('getErrorMessage')) {

function getErrorMessage($code){

        $data = DB::table('error_codes')

            ->select('error_message')

            ->where([

                ['error_code',$code]

            ])

            ->first();

        if($data){

            return $data->error_message;

        }

        else{

            return null;

        }

       

}

}
?>