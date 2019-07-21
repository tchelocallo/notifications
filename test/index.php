<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notifications\Email;


$novoEmail = new Email(2, "smtp.sao.terra.com.br", "tchelocallo@terra.com.br", "Uto0946h", "tls", "587", "tchelocallo@terra.com.br", "Equipe MPSDesign");
$novoEmail->sendEmail("Queremos saber sua opinião", "<p>Esse é um e-mail de <b>teste</b></p>", "tchelocallo@terra.com.br", "Marcelo Silva", "tchelocallo36@gmail.com", "Marcelo");

var_dump($novoEmail);



