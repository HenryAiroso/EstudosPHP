<?php
include("classVisitas.php");
$Visitas=new ClassVisitas();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Visitante</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="tela" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="Style.css" rel="stylesheet">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body id="general">
    <div class="container">
        <div class="row" id="block">
            <div class="container">

                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 id="titulo" class="display-3"> Registro de Acesso </h1>  
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            

                            <button class=btnGenerate value="Clique Aqui" onclick="clickMe()" onmousedown="window.location.reload()" id="button"> CLique p/ registrar</button>

                            <script>    
                            function clickMe(){
                            var result = "<?php $Visitas->VerifyUser(); ?>"
                            document.return(result);

                            }
                            </script>

                            

                            

                        </div>
                    </div>    
                
                </div>

            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript 
    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>