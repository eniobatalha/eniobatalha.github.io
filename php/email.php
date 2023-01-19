<?php
if(isset($_POST['submit'])) {
    $to = "eniobatalha@gmail.com"; // Alterar para o endereço de e-mail desejado
    $from = $_POST['email'];
    $nome = $_POST['nome'];
    $assunto = "Envio de formulário";
    $assunto2 = "Cópia do seu envio de formulário";
    $mensagem = $nome . " escreveu o seguinte:" . "\n\n" . $_POST['detalhes'];
    $mensagem2 = "Aqui está uma cópia da sua mensagem " . $nome . "\n\n" . $_POST['detalhes'];
    $headers = "De:" . $from;
    $headers2 = "De:" . $to;
    mail($to,$assunto,$mensagem,$headers);
    mail($from,$assunto2,$mensagem2,$headers2); // Envia uma cópia para o remetente
    echo "E-mail enviado. Obrigado " . $nome . ", entraremos em contato em breve.";
    // você também pode usar header('Location: obrigado.php'); para redirecionar para uma página de agradecimento
}
?>