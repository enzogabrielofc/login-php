<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Email Atividade Jean</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../CSS/esqueci.css'>
</head>
<body>
    
        <div class="container">
            <h1>Atividade Jean</h1>
        <form id="form" action="../../controller/recuperaçãocontroller.php" method="POST">
        <div class="input-box">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" />
</div>

                <br>
                <br>
                <button type="submit" class="send">Verificar</button>

        </div>  

        </form>
</body>

</html>