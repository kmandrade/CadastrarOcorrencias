<?php
 session_start();
 include("../responsivo/banco/conexao.php");

 $consulta = "SELECT * FROM ordemdeservico";
//selecionou a tabela e vai executar a query
 $con= $conexao ->query($consulta) or die ($mysqli->error);
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../responsivo/css/estilo.css">
    

    <title>Menu Responsivo</title>
</head>
<style>


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
        <div class="menu-side">
            <nav class="nav-menu">
                <div class="profile">
                    <span class="texto-menu">
                        Central
                    </span>

                </div>
                <ul class="list-nav">

                        <li class="item-nav">
                            
                            <a class="link-nav" href="#"> 
                                <i class="fa fa-home icon" aria-hidden="true"></i>
                                Inicio
                            </a>
                        </li>
                        
                        <li class="item-nav">
        
                            <a class="link-nav link-nav-ordem" href="#">
                                <i class="fa fa-envelope icon" aria-hidden="true"></i>

                                  Ordem de Serviço</a>
                        </li>
                            <ul class="list-nav-ordem">
                                <li class="item-nav-second ">
                                    <a href="#"> Buscar</a>
                                </li>
                                <li class="item-nav-second ">
                                    <a href="#"> Incluir</a>
                                </li>
                                <li class="item-nav-second ">
                                    <a href="#"> Excluir</a>
                                </li>
                            </ul>

                            
                        <li class="item-nav">
                            
                            <a class="link-nav link-nav-cliente" href="#">  
                                <i class="fa fa-user icon" aria-hidden="true"></i>

                                Area do Cliente
                            </a>
                        </li>
                            <ul class="list-nav-cliente">
                                <li class="item-nav-second">
                                    <a href="#"> Buscar</a>
                                </li>
                                <li class="item-nav-second">
                                    <a href="#"> Incluir</a>
                                </li>
                                <li class="item-nav-second">
                                    <a href="#"> Excluir</a>
                                </li>
                            </ul>

                        <li class="item-nav">
                            
                            <a class="link-nav" href="#"> 
                                <i class="fa fa-calendar icon" aria-hidden="true"></i>

                                 Lista Técnica</a>
                        </li>   

                </ul>


            </nav><!-- fim nav -->


        </div><!-- fim menu -->

        <div class="content">
            
                    <div class="lembrete"><h3>LEMBRETES</h3></div><br>

                    <div class="lista_chamado" id="lista_chamado">
                            <div class="header_lista"> <p>Lista de Chamados:</p></div><!--fim header-->
                            <div class="lista_body">
                                <table border="1px">
                                    <tr>
                                        <td>ID</td>
                                        <td>Data</td>
                                        <td>Nome</td>
                                        <td>Endereco</td>
                                        <td>PPOE</td>
                                        <td>Ação</td>
                                    </tr>
                                    <!--//pega cada uma das colunas e amarzena numa variavel-->
                                    <?php while($dado = $con->fetch_array()){ ?> 
                                    <tr>
                                        <td><?php echo $dado["ID"];?></td>
                                        <td><?php echo $dado["Data"];?></td>
                                        <td><?php echo $dado["NomeCliente"];?></td>
                                        <td><?php echo $dado["EnderecoCliente"];?></td>
                                        <td><?php echo $dado["PPOE"];?></td>
                                        <td><a href="../responsivo/site_editar_os.php?ID=<?php echo $dado["ID"]; ?>">Editar</a> |
                                         <a href=" javascript: if(confirm('Tem certeza que deseja deletar?'))
                                         location.href= '../responsivo/deletar_OS.php?ID=<?php echo $dado["ID"];?> ';">Excluir</a></td>
                                    </tr>
                                    <?php } ?>
                                    
                                </table>
                                
                            </div><!--fim lita_body-->
                        
                        
                       
                        
                    
                    
                    </div>


        </div><!--fim do content-->
        <footer class="menu-footer">
            <div class="icones-footer">
                <a href="../responsivo/cadastro.php">
                    <i class="fas fa-plus fa-4x "></i>


                </a>
            </div>
            
        </footer>



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../responsivo/js/app.js"></script>
    <script src="https://kit.fontawesome.com/83513a7a48.js" crossorigin="anonymous"></script>
    
    
</body>
</html>