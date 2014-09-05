<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Entrar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</HEAD>
<body>

    <div class="brand">Sistema de Avaliação Online</div>
    <div class="address-bar">Belém | Pará | Brasil</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="sobre.html">Sobre</a>
                    </li>
                    <li>
                        <a href="quemsomos.html">Quem somos</a>
                    </li>
                    <li>
                        <a href="contato.html">contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Entre
                        <strong>Agora!</strong>
                    </h2>
                    <hr>
                </div>
<center>

<?
     $login=$_POST["login"];
     $senha=$_POST["senha"];

     include "connection.php";
	 
	 if( isset( $_POST['entrar'] ) ):

     $busca=mysql_query ("Select login, senha from usuarios where login='$login'")
         or die ("<h1>Não foi possível realizar as buscas!</h1>".mysql_error());

while (mysql_fetch_assoc($busca))
      {
      $login_db= $reg["login"];
      $senha_db= $reg["senha"];
      }

if ($login=="" || $senha=="")
      {
      echo "<BR><BR><center><h2>Os campos login e senha não podem
           ter valores nulos</h2></center>";
      echo "<BR><center><a href=\"entrar.html\">Clique aqui para
           tentar novamente</a>";
      }

else
    {
    if($login_db==$login && $senha_db==$senha)
    {
       echo "<center><h2>Login realizado com sucesso!</center></h2>";
       echo "<BR><center><a href=\"home_page.php\">Clique aqui para
             acessar o sistema</a>";
    }
    
    else
        {
        echo "<BR><BR><BR><BR><center><h2>O login não pode ser realizado
              <BR><BR> login inexistente ou senha incorreta</h2></center>";
        echo "<BR><BR><center><a href=\"entrar.html\">Clique aqui para tentar
              novamente</a>";
        }
    }

mysql_free_result ($busca);
mysql_close ($link);
?>

</center>
</div>
                <div class="clearfix"></div>
            </div>
        </div>


       

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Desenvolvido por Eduardo e Cristiano &copy; 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
