<?php																																										
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$message = $_POST['message'];

$arquivo = "
  <style type='text/css'>
  body {
  margin:10px;
  font-family:Arial;
  font-size:12px;
  color: black;
  }
  a{
  color: black;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  td {padding:10px}
  </style>
    <html>
        <table width='100%' border='1' cellpadding='1' cellspacing='1' bgcolor='#FEFEFE'>
          <tr>
            <td width='80%'>Nome Completo:$nome</td>
          </tr>
          <tr>
            <td width='80%'>Telefone:<b>$telefone</b></td>
          </tr>
          <tr>
            <td width='80%'>Email:<b>$email</b></td>
          </tr>
          <tr>
            <td width='80%'>Assunto:<b>$assunto</b></td>
          </tr>
          <tr>
            <td width='80%'>Estado:<b>$estado</b></td>
          </tr>
          <tr>
            <td width='80%'>Cidade:<b>$cidade</b></td>
          </tr>
          <tr>
            <td width='80%'>Mensagem:<b>$message</b></td>
          </tr>
        </table>
    </html>
  ";

//enviar

// emails para quem será enviado o formulário
$emailenviar = "site@valedoleite.com.br";
$destino = $emailenviar;
$assuntoemail = "Contato Site- Vale do leite";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From: Sites cairofelipedev <cairofelipedev@gmail.com>";
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assuntoemail, $arquivo, $headers);
if ($enviaremail) {
  echo ("<script type= 'text/javascript'>alert('Obrigado, cadastro concluido com sucesso, em breve nossa equipe de especialista entra em contato com você');</script>
  <script>window.location = 'index.php';</script>");
} else {
  echo ("<script type= 'text/javascript'>alert('Erro ao enviar! Tente novamente');</script>
            <script>window.location = 'index.php';</script>");
}
