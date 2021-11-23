<?php

if(isset($_POST['email']) && !empty($_POST['email'])){



$nome = addslashes($_POST['name'])
$email = addslashes($_POST['email'])
$mensagem = addslashes($_POST['message'])


$to = "rezendeanaclara@usp.br";
$subject = "Contato - Psicóloga";
$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Mensagem: ".$mensagem;
$header = "From:rezendeanaclara@usp.br"."\r\n"
            ."Replay-To:".email."\e\n"
            ."X=Mailer:PHP".phpversion();

if(mail($to,$subject,$body,$header)) {

    echo("Ëmail enviado com sucesso!")

}else{
    echo("O Email não pode ser enviado")";"
}           





}

?>