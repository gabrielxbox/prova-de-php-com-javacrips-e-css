<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript">
    
    function valida() {
        var login1 = document.getElementById("email").value;
        var senha1 = document.getElementById("senha").value;
         
         if(login1 === "" ||  senha1 === "" ){
          alert('todos os caompos sao obrigatorio');
         }
    }
    </script>
</head>
<body>
    <form action="login.php" method="GET">
        <center>
        <h4>tela Login</h4>
            <table  >
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="email" placeholder="exenplo@email.com" /></td>
    </tr>
    

  
    <tr>
        <td>Senha</td>
        <td><input type="password" name="senha" id="nome" placeholder="senha"/></td>
    </tr>
</table>

<input type="submit" name="login" value="login"  onclick="valida()" />

</center>
    </form>
</body>
</html>