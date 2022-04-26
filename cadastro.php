<?php
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastroOS</title>
    <link rel="stylesheet" href="../responsivo/css/estilo.css">
</head>

<style>
    body{
        background-color: rgb(216, 241, 241);
    }
    .header{
        background-color: white;
    }
    
    .formulario{
        background-color: white;
        text-align: center;
        max-width: 500px;
        width: 70%;
        padding: 20px;
        position: absolute;
        left: 50%;
        top: 53%;
        transform: translate(-50%,-50%);
        
    }
    .formulario h2{
        text-align: center;
        color: #5F7C8A;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    form input[type=text]{
        width: 100%;
        height: 20px;
        border: 1px solid #CCC;
        margin: 5px 0;
        font-size: medium;
    }
    form input[type=submit]{
        width: 100%;
        height: 30px;
        cursor: pointer;
        background: #6e8c9b;
        color: white;
        border: 0;
        border-radius: 20px;
    }
    .token{
    position: relative;
    left: 10%;
    text-align: center;
    }
    
</style>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../responsivo/img/logo1.png" alt="Logotipo">
            </div>
            <div class="alerta">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
            </div>
            
            <div class="icon-menu">
                <svg width="21.999999999999996" height="20" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <line stroke="#000" class="firstLine" y2="4.146656" x2="25.477124" y1="4.146656" x1="-1.973854"
                            stroke-width="3.5" />
                        <line stroke="#000" class="secondLine" y2="11.151682" x2="25.607844" y1="11.020963" x1="-2.104574"
                            stroke-width="3.5" />
                        <line stroke="#000" class="thirdLine" y2="17.804165" x2="24.852663" y1="17.673446" x1="-1.683284"
                            stroke-width="3.5" />
                    </g>
                </svg>
            </div>
        </header><!-- fim header -->
        <main class="content">
            <div class="formulario">
                    
                <form method="POST" action="../responsivo/Cadastra_OS.php" >
                    <h2>Cadastro de Ocorrencia</h2>
                    <input type="text" name="Data" placeholder="Insira a data da ocorrencia"><br>
                    <input type="text" name="Telefone" placeholder="Insira o telefone do cliente"><br>
                    <input type="text" name="Nome" placeholder="Insira o nome do cliente"><br>
                    <input type="text" name="Endereco" placeholder="Insira o endereco"><br>
                    <input type="text" name="PPOE" placeholder="Insira o Login e Senha PPOE "><br>
                    <input type="text" name="megas" placeholder="Quantidade de megas"><br>
                    <input type="text" name="Tipo" placeholder="Tipo te instalação"><br>
                    <input type="text" name="Horario" placeholder="Horario da visita técnica"><br>
                    <input type="submit"  value="Cadastrar" >
                </form>
                <div class="token">
                        <?php
                        if(isset($_SESSION['msg'])){
                            echo($_SESSION['msg']);
                            unset ($_SESSION['msg']);
                        }
            ?>
                    </div>

            </div>

        </main><!--fim do conteudo-->
        <footer class="menu-footer">
            <div class="icones-footer">
                <a href="../responsivo/index.php">
                    <i class="fas fa-arrow-circle-left fa-4x"></i>
                </a>
            </div>
            
        </footer>    



    </div><!--fim do container-->  

    <script src="https://kit.fontawesome.com/83513a7a48.js" crossorigin="anonymous"></script>

</body>
</html>