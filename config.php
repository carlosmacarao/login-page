<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
           $dbHost = 'Localhost';
           $dbUsername = 'root';
           $dbPassword = '';
           $dbName = 'formulario-carlos';

           $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
           /* 
           if ($conexao -> connect_errno) {
               echo "Erro";
           } else {
               echo "Conexão efetuada com sucesso.";
           }
           */
          
        ?>   
    </div>
</body>
</html>         