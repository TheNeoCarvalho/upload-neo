<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Enviar arquivo</button>
    </form>

    <hr>

    <h3>Uploads</h3>
        
    <?php
        require_once('funcoes/verificaTipoDoArquivo.php');
        $arquivos = scandir('uploads');
        foreach($arquivos as $arquivo){
            if(!($arquivo == "." || $arquivo == "..") ){
                VerificaTipoDoArquivo($arquivo);
            }    
        }

        
    ?>



</body>
</html>
