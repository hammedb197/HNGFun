<?php

/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */

 ###########################################
 #   WE KNOW YOU MIGHT NEED TO EDIT THIS   #
 #    FILE WHEN YOU'RE WORKING LOCALLY.    #
 # PLEASE DO WELL TO UNCOMMENT AND COMMENT #
 # THE APPROPRIATE FILES WHEN YOU'RE DONE  #
 #             THANKS!!                    #
 ###########################################

# LOCAL ENVIRONMENT
# require_once 'config.php';

<<<<<<< HEAD
//<<<<<<< HEAD
require_once 'config.php';
//=======
# PRODUCTION
//require_once '../config.php';
//>>>>>>> 7b1b8d9655ab6d4304112710d1afcc7a66ae1d35
=======
# PRODUCTION
require_once '../config.php';
>>>>>>> fd9b122a5b6f212003a947cab91714cde2dd93da

try {
    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

?>
