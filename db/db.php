<?php




try{
    $conn = new PDO("mysql:host=localhost;dbname=institutotutor_461;port=3306","institutotutor_461","");
    
} catch(PDOException $err){
    $error_message = $err->getMessage();
    echo $error_message;
    
}
?>

