<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$subject = "Contato com a MTech Soluções";
$message = "<strong> Nome: </strong>$nome <br />"
        . "<strong> Telefone: </strong>$telefone <br />"
        . "<strong> E-mail: </strong>$email <br />"
        . "<strong> Mensagem: </strong>$mensagem";
$header = "MIME-Version: 1.0\n";
$header = "Content-type: text/html; charset=iso-8859-1\n";
$header = "From: $email\n";

mail($to, $subject, $message, $header);

echo '<div class="modal fade" tabindex="-1" role="dialog">';
echo ' <div class="modal-dialog" role="document">';
echo ' <div class="modal-content">';
echo ' <div class="modal-header">';
echo ' <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
echo ' </div>';
echo ' <div class="modal-body">';
echo ' <h2> Mensagem enviada com sucesso! </h2>';
echo ' </div>';
echo ' <div class="modal-footer">';
echo ' <button type="button" class="btn btn-primary">Fechar</button>';
echo ' </div>';
echo ' </div><!-- /.modal-content -->';
echo ' </div><!-- /.modal-dialog -->';
echo '</div><!-- /.modal -->';

header("Location: ../contato.php");
?>
</body>
</html>