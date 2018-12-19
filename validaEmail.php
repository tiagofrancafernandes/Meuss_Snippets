<?php
//Atualizado da versão do Thiago Belém
//http://blog.thiagobelem.net/validacao-de-e-mail-no-php-com-expressoes-regulares

// Define uma função que poderá ser usada para validar e-mails usando regexp
function validaEmail($email) {
	$conta = "/^[a-zA-Z0-9\._-]+@";
	$domino = "[a-zA-Z0-9\._-]+.[.]";
	$extensao = "([a-zA-Z]{2,4})$/";
	$pattern = $conta . $domino . $extensao;
	if (preg_match($pattern, $email)) {
		return true;
	} else {
		return false;
	}

}
// Define uma variável para testar o validador
$input = "meuemail@dominiocombr";
// Faz a verificação usando a função
if (validaEmail($input)) {
	echo "O e-mail inserido é valido!";
} else {
	echo "O e-mail inserido é invalido!";
}
echo "<hr>";
// Define uma variável para testar o validador
$input2 = "meuemail@dominio.com.br";
// Faz a verificação usando a função
if (validaEmail($input2)) {
	echo "O e-mail inserido é valido!";
} else {
	echo "O e-mail inserido é invalido!";
}
?>
