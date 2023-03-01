<?php

namespace AtinabWeb;

class Validation {

    public function IsMobileValid($mobile){
        if(preg_match("/^09[0-9]{9}$/", $mobile)) {
            return true;
         }
         return false;
    }

    public function IsEmailValid($email){
        if (preg_match("/^([\w\-]+\@[\w\-]+\.[\w\-]+)$/",$email))
        {
            return true;
        }
        return false;
    }

    public function IsIMEIValid($imei){
        if (preg_match("/^\d{15}$/",$imei))
        {
            return true;
        }
        return false;
    }

    public function IsNationalCodeValid($national_code){
        if (preg_match("/^\d{10,15}$/",$national_code))
        {
            return true;
        }
        return false;
    }
}

class Helper{

    //String Support
    public function HasValue($object){
        if(isset($object) && !empty($object))
        {
            return true;
        }
        return false;
    }
}

?>