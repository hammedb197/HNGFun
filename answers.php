<?php 
//Bytenaija Entry. Do not modify
$file = realpath(__DIR__) . "/db.php"    ;
require_once $file;
global $conn;


    
if(isset($_GET['bytenaija'])){
    if(isset($_GET['train'])){
        $keyword = trim($_GET["keyword"]);
        $response = trim($_GET["response"]);
        try {
        $sql = "INSERT INTO chatbot(question, answer) VALUES ('" . $keyword . "', '" . $response . "')";
        
        $conn->exec($sql);

     $message = "Saved " . $keyword ." : " . $response;
        
        echo $message;

    }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    }else if(isset($_GET['query'])){
        
        $query = $_GET['query'];
        $str = "'%".$query."%'";
        $sql = "SELECT answer FROM chatbot WHERE question LIKE " . $str . " ORDER BY question ASC LIMIT 1";
        
      foreach ($conn->query($sql) as $row) {
            echo $row["answer"];
        } 
      
    } else if(isset($_GET['list'])){
        $sql = "SELECT COUNT(*) FROM bot";
        if ($res = $conn->query($sql)) {
             
        $string = '';
     
    /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {
            $sql = "SELECT * FROM chatbot ORDER BY question ASC";
       
      foreach ($conn->query($sql) as $row) {
            $string .= "<li>" . $row["question"] . "</li>";
        } 
         echo $string;
         return;
    }
        
     
    }
}
}
?>