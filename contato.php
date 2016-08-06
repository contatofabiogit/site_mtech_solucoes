<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>MTech Soluções</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" href="img/gt_favicon.png" />
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="sobre.html">Sobre</a></li>
                                <li><a href="servicos.html">Soluções</a></li>
                                <li><a href="equipe.html">Equipe</a></li>
                                <li class="active"><a href="contato.php">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <br />
            <br />
            <br />

            <div class="row">
                <h1><strong> Contato </strong></h1>
            </div>

            <div class="row">
                <div class="col-lg-12"><h1>Está procurando um de nosso serviço? Contate-nos!</h1></div>
            </div>

            <hr />

            <div class="row">
                <h3>
                    Peça já um orçamento, nós desenvolvemos aplicações personalizadas para
                    seu tipo de negócio.
                </h3>
            </div>

            <br />

            <div class="row">
                <div class="col-lg-6">                    
                    <form action="#" method="POST">

                        <h2>Nome:</h2>
                        <input type="text" name="nome" placeholder="Digite seu nome" class="form-control">

                        <h2>Telefone:</h2>
                        <input type="tel" name="telefone" placeholder="Digite seu telefone" class="form-control">

                        <h2>E-mail:</h2>
                        <input type="email" name="email" placeholder="Digite seu email" class="form-control">

                        <h2>Mensagem:</h2>
                        <textarea class="form-control" name="mensagem"></textarea>

                        <h2></h2>
                        <input id="enviar" type="submit" name="enviar" value="Enviar" class="btn btn-default">                        

                    </form>
                    <br />
                </div>
                <div class="col-lg-6">
                    <img src="img/contato.png" alt="" class="img-responsive">

                </div>

            </div>

            
            
            <div class="row">
                <?php
                if (isset($_POST['enviar'])) {

                    if (($_POST['nome'] != '') && ($_POST['telefone'] != '') && ($_POST['email'] != '') && ($_POST['mensagem'] != '')) {
                        $to = 'contato@mtechsolucoes.com.br';
                        $nome = $_POST['nome'];
                        $telefone = $_POST['telefone'];
                        $email = $_POST['email'];
                        $mensagem = $_POST['mensagem'];
                        $message = "Nome: $nome | Telefone: $telefone | E-mail: $email | Mensagem: $mensagem";
                        mail($to, 'Contato - Site', $message);
                        
                        echo '<div class="text-success"><h3>Mensagem enviada com sucesso!</h3></div>';                                
                    } else{
                        echo '<div class="text-danger"><h3>Preencha todos os campos!</h3></div>';
                    }

                    echo '<br />';
                    echo '<br />';
                }
                
                unset($nome, $telefone, $email, $mensagem);
                ?>
            </div>

            <div class="row">
                <footer>
                    <div class="col-md-4">
                        <a href="index.html"><img src="img/bannefooter.fw.png" class="img-responsive"></a>
                    </div>
                    <div class="col-md-4">
                        <h2 class="hroda">Fale Conosco:</h2>
                        <ul class="ulroda">
                            <li>E-mail: contato@mtechsolucoes.com.br</li>
                            <li>Horário: Segunda - Sexta: 8:00 - 18:00</li>
                        </ul>
                    </div>
                    <div class="col-md-4" >
                        <h2 class="hroda">Siga-nos:</h2>
                        <div class="row">
                            <div class="col-xs-2 col-md-4">
                                <a href="https://www.facebook.com/OficialMtechSolucoes/">
                                    <img class="img-responsive " src="img/fb-logo.png" alt="" width="50" height="50">
                                </a>
                            </div>
                            <div class="col-xs-2 col-md-4">
                                <a  href="https://www.instagram.com/oficialmtechsolucoes/">
                                    <img  class="img-responsive" src="img/instagram-camera-logo.png" alt="" width="50" height="50">
                                </a>
                            </div>
                            <div class="col-xs-2 col-md-4">
                                <a  href="contato.php">
                                    <img  class="img-responsive" src="img/communication-email-2-icon-7.png" alt="" width="50" height="50">
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="row">
                    <p class="textoroda">&copy; 2016 Todos os Direitos Reservados - Desenvolvido por <a href="index.html">MTech Soluções</a></p>
                    <br />
                </footer>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>