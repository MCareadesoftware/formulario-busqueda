<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=institutotutor_461;port=3306","institutotutor_461","p6-8S0u!7f");
    
} catch(PDOException $err){
    $error_message = $err->getMessage();
    echo $error_message;
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Certificados</title>
</head>
<body>
<h1 class=" py-4 text-gray-600 font-bold text-2xl md:text-4xl text-center underline ">CERTIFICADOS</h1>

   <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
        <form action="" method="POST" class="px-4 p-4 mt-12">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="numero">
                    Ingresa tu DNI:
                </label>
                <input  class="appearance-none bg-transparent border-b border-gray-500 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-900" type="text" id="dni" name="dni" placeholder="71102313" required>
            </div>
            <div class="flex items-center justify-between">
                <button name="search_certificate" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Buscar
                </button>
            </div>
        </form>
    </div>



    <?php
    if(isset($_POST['search_certificate'])){
        $dni = $_POST['dni'];
         $dni = filter_var($dni, FILTER_SANITIZE_STRING);
         echo $dni;
         
         
    if(!empty($dni)){
        $id='{"__fluent_form_embded_post_id":"6236","_fluentform_3_fluentformnonce":"a80dfcc11a","_wp_http_referer":"\/mi-cuenta\/","names":{"first_name":"sdsdsd","last_name":"sdsdsdsdsd"},"email":"cms.monstruocreatio@gmail.com","numeric-field":"74730849","phone":"920164658","password":"****** (truncado)","password_1":"****** (truncado)"}';
         $select_user = $conn->prepare("SELECT * FROM `wpwt_fluentform_submissions`  WHERE JSON_EXTRACT(response, '$.numeric-field') =  ? ");
         $select_user->execute([$dni]);

         echo 'heelo';

         echo $select_user->rowCount();
         
         if($select_user->rowCount() > 0){
            while($fetch_user= $select_user->fetch(PDO::FETCH_ASSOC)){
                $id_user= $fetch_user['user_id'];            
                echo $id_user;
                $select_course=$conn->prepare("SELECT * FROM `wpwt_stm_lms_user_quizzes` WHERE  user_id = ?  AND status = 'passed' ");
                $select_course->execute([$id_user]);

                if($select_course->rowCount() > 0){
                    while($fetch_course = $select_course->fetch(PDO::FETCH_ASSOC)){
                        $idCourse=$fetch_course['course_id'];
                        echo $idCourse;
                }

            }

            }
            


         }        
         }       

    }



?>

</body>
</html>