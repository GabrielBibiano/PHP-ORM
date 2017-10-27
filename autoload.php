<?php
    spl_autoload_register(function ($class) {
        $prefix = 'Erp\\';
        $base_dir = __DIR__ ;
        $len = strlen($prefix);
        
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }
        
        $relative_class = substr($class, $len);
        
        if( $relative_class !== "PDO" ){
            $file = $base_dir . '/' . str_replace('\\', '/', $relative_class) . '.class.php';
            if (file_exists($file)) {
                require $file;
            }
        }
    });

    use Erp\Database;
    
    $DB = new Database();
?>