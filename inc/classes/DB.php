<?php
if(!defined('__CONFIG__')){
    exit('you dont have access biiiiiiitch');

}
class DB{

    protected static  $con;

    private function __construct(){

        try {

            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'users','1Apple!23');
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);



        } catch(PDOException $e){

            echo "could not connect to database."; 
            echo $e; exit;
        }



    }
    public static function getConnection(){

        if(!self::$con) {
            new DB();
        }
        return self::$con;
    }





}