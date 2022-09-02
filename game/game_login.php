<?php
session_start();
ini_set('session.save_path','SOME WRITABLE PATH');
date_default_timezone_set('America/Sao_Paulo');
header('Content-Type: text/html; charset=utf-8');

function __autoload($class){
	$raiz = $_SERVER['DOCUMENT_ROOT'];
	include_once $raiz."/class/".$class.".class.php";
}

$conn = new Conexao();

#-> Verifica se esta logado
$mr_u = null;
if(isset($_SESSION['mr_usuario'])){
   if($_SESSION['mr_usuario'] != ""){
       $mr_u = $_SESSION['mr_usuario'];
   } 
}

if($mr_u != null){
    header("location:/game");
}

#-> Efetua login
if(isset($_POST['logEmail'])){
    $lm = $_POST['logEmail'];
    $ls = md5("mirollickonet".$_POST['logSenha']);
    
    $conn->consultar("SELECT * FROM usuarios WHERE email = '$lm' AND senha = '$ls'");
    
    if($conn->nResultados()==1){
        $dados = $conn->escrever();
        //if($dados['status'] == 'Ativo' || strpos($dados['status'],'Novo') != false){
            $_SESSION['mr_cod'] = $dados['cod'];
            $_SESSION['mr_usuario'] = $dados['email'];
            $_SESSION['mr_nome'] = $dados['nome'];
            header("location:/rocket"); 
        //}else{
            header("location:/login/erroativo");
        //}
    }else{
        header("location:/login/erro");
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Million Rocket - Login</title>
	<link rel="icon" href="/img/ico.png">
   
<script src="/js/jquery.js"></script>
<script src="/js/default.js"></script>
	
	<link href="/css/reset.css" rel="stylesheet" type="text/css">
	<link href="/css/default.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	body,td,th {
	font-family: "Open Sans", Helvetica, sans-serif;
}
    </style>
	
<script src="https://kit.fontawesome.com/2e5f444afc.js" crossorigin="anonymous"></script>
</head>

<body class="forms">
    <span class="frm_box_titulo">
        <img class="frm_logo" src="/img/ico_azul.png">
        <h1 class="tituloCLR">Login</h1>
    </span>
    <form class="frmCLR" method="post" action="">
        <?php
            if(isset($_GET['loginerro'])){
                echo "<p>Email e(ou) senha invalido(s)!</p>";
            }
            if(isset($_GET['loginerroativo'])){
                echo "<p>Você não validou seu email! <br> Enviamos um link em seu email para ativação</p>";
            }
        ?>
        <label for="logEmail">E-mail</label>
        <input type="email" name="logEmail" id="logEmail" equired>
        <label for="logSenha">Senha</label>
        <input type="password" name="logSenha" id="logSenha" required>
        <input type="submit" value="Entrar" class="frmBt">
        <span class="center">
            <a class="btCadastrese" href="/cadastro">Cadastre-se</a> | <a class="btCadastrese" href="/recsenha">Esqueci minha senha</a>
        </span>
    </form>
    <script>frmCLRlabel();</script>
</body>
</html>