<?php

class Application_Model_Validator {
    public static function myIsSet(){
        $numargs = func_num_args();
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            if(!isset($arg_list[$i]) && $arg_list[$i] == '')
                return false;
        }
        return true;
    }
}