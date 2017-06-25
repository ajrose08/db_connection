<?php
$servername = "localhost";
$user = "root";
$pass = "ambunganz071587";

try {
    $dbConnection = new PDO("mysql:host=$servername;dbname=flockers", $user, $pass);
    // set the PDO error mode to exception
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>


<?php
//    class customCheckNum extends Exception {
//        public function errMessage(){
//            $errmsg = "Number must be above or equal to 100";
//            return $errmsg;
//        }
//    }
//
//    $num = 99;
//    try {
//        if ($num < 100) {
//            throw new customCheckNum($num);
//        }
//    }
//    catch(customCheckNum $n) {
//        echo 'Message: ' . $n->errMessage();
//    }
//?>