<?php
include "db/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulario de Búsqueda</title>
</head>

<body>
<div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
        <form action="procesar.php" method="POST" class="px-4 py-2">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="numero">
                    Ingrese el DNI:
                </label>
                <input class="appearance-none bg-transparent border-b border-gray-500 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-900" type="text" id="numero" name="numero" placeholder="12345678" pattern="[0-9]{8}" required>
                <p class="text-red-500 text-xs italic">"Texto para advertencia"</p>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</body>

</html>