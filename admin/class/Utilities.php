<?php 
class Utilities{
    public static function get($key, $defaultValue='')
    {
        $data = isset($_GET[$key])?$_GET[$key]:$defaultValue;
        return $data;

    }

    public static function post($key, $defaultValue='')
    {
        return isset($_POST[$key])?$_POST[$key]:$defaultValue;
      
    }
    //p=1234
    public static function encryption($p)
    {
        $s1='@QnL'; $s2=')*%R.';//salt
        $p = $s1.$p.$s2;///  '@QnL1234)*%R.' 
        return md5($p);

    }

}