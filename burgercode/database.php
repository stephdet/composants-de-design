<?php
class Database

{
            private static $dbHost="localhost";
            private static $dbName="bxlfood";
            private static $dbUser="root";
            private static $dbPass="user";
            private static $connection = null;
            public static function connect ()

          {
                  try
                  {
                       self::$connection =  new PDO('mysql:host=localhost;dbname=bxlfood', 'root', 'user');
                  }

                  //si erreur message
                   catch (PDOException $e)
                   {
                       die($e->getMessage());
                    }
                    return self::$connection;
            }

            public static function disconnect ()
            {
                      self::$connection = null ;

            }

}







Database::connect();

?>
