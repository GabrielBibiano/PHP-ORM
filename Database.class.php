<?php
    namespace Erp;
    use PDO;
    
    class Database {
        public function conn ( $host, $database, $user, $pass, $callback = '' ) {
            try {
                $dbh = new PDO( "mysql:host=$host;dbname=$database", $user, $pass );
                if( is_callable( $callback ) !== true ) {
                    if( $callback !== '' ){
                        throw new Exception( "O callback não é uma função" ); 
                    }
                } else {
                    return $callback();
                }
            } catch ( PDOException $e ) {
                print "Error!: " . $e->getMessage();
                die();
            }
        }
    }
?>