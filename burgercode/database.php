<?php
class Database
{

            private static $dbHost="localhost";
             private static $dbName="bugersbxl";
             private static $dbUser="root";
             private static $dbPass="root";
            private static $connection = null;

            public static function connect ()
          {
                  try
                  {
                       self::$connection = new PDO("mysql:host=" . self::$dbhost  .  "; dbname= " . self::$dbName ,self:: $dbUser, self::$dbPass);
                       //$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                  }

                  //si erreur message
                   catch (Exception $e)
                   {
                       die('Erreur : ' $e->getMessage() );
                    }
                    return self::$onnection;
            }

            public static function disconnect ()
            {
                      self::$connection = null ;

            }

}







// Database::connect();

?>
