<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bombeiros";

$conn =   mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
 die("Conexão falhou: " . $conn->connect_error);
}

// Coleta os dados do formulário
$aspiracao = $_POST['aspiracao'];
$avaliacao_inicial = $_POST['avaliacao_inicial'];
$avaliacao_dirigida =$_POST['avaliacao_dirigida'];
$avaliacao_continua =$_POST['avaliacao_continua'];
$chave_rautek =$_POST['chave_rautek'];
$canula_guedel =$_POST['canula_guedel'];
$desobstrucao_v_a =$_POST['desobstrucao_v_a'];
$emprego_d_e_a =$_POST['emprego_d_e_a'];
$gerenciamento_risco =$_POST['gerenciamento_risco'];
$limpeza_ferimento =$_POST['limpeza_ferimento'];
$curativo =$_POST['curativo'];
$compressivo =$_POST['compressivo'];
$encravamento =$_POST['encravamento'];
$ocular =$_POST['ocular'];
$queimadura =$_POST['queimadura'];
$simples =$_POST['simples'];
$pontos =$_POST['3_pontos'];
$imobilizacoes =$_POST['imobilizacoes'];
$membro_inf_dir =$_POST['membro_inf_dir'];
$membro_inf_esq =$_POST['membro_inf_esq'];
$membro_sup_dir =$_POST['membro_sup_dir'];
$membro_sup_esq =$_POST['membro_sup_esq'];
$quadril =$_POST['quadril'];
$cervical =$_POST['cervical'];
$maca_sobre_rodas =$_POST['maca_sobre_rodas'];
$macas_rigidas =$_POST['macas_rigidas'];
$ponte =$_POST['ponte'];
$retirado_capacete =$_POST['retirado_capacete'];
$r_c_p =$_POST['r_c_p'];
$rolamento_90 =$_POST['rolamento_90'];
$rolamento_180 =$_POST['rolamento_180'];
$tomada_decisao =$_POST['tomada_decisao'];
$tratado_choque =$_POST['tratado_choque'];
$uso_canula =$_POST['uso_canula'];
$uso_colar =$_POST['uso_colar'];
$uso_ked =$_POST['uso_ked'];
$uso_ttf =$_POST['uso_ttf'];
$ventilacao_suporte =$_POST['ventilacao_suporte'];
$oxigeniterapia =$_POST['oxigeniterapia'];
$renimador =$_POST['renimador'];
$meios_auxiliares =$_POST['meios_auxiliares'];
$celesc =$_POST['celesc'];
$def_civil =$_POST['def_civil'];
$igp_pc =$_POST['igp_pc'];
$policia_civil =$_POST['policia_civil'];
$policial_militar =$_POST['policial_militar'];
$policial_pre =$_POST['policial_pre'];
$policia_prf =$_POST['policia_prf'];
$samu =$_POST['samu'];
$usa =$_POST['usa'];
$usb =$_POST['usb'];
$cit =$_POST['cit'];
$outro_sinais =$_POST['outro_sinais'];




// Insere os dados na tabela de usuários
$sql = "INSERT INTO procedimentos_efetuados  VALUES ('$aspiracao', '$avaliacao_inicial', '$avaliacao_dirigida', '$avaliacao_continua', '$chave_rautek',
 '$canula_guedel','$desobstrucao_v_a' ,'$emprego_d_e_a', '$gerenciamento_risco', '$limpeza_ferimento', '$curativo', '$compressivo',
 '$encravamento', '$ocular', '$queimadura', '$simples', '$pontos', '$imobilizacoes', '$membro_inf_dir', '$membro_inf_esq', '$membro_sup_dir',
 '$membro_sup_esq', '$quadril', '$cervical', '$maca_sobre_rodas', '$macas_rigidas', '$ponte', '$retirado_capacete', '$r_c_p', '$rolamento_90', 
 '$rolamento_180', '$tomada_decisao', '$tratado_choque', '$uso_canula', '$uso_colar', '$uso_ked', '$uso_ttf', '$ventilacao_suporte', '$oxigeniterapia',
 '$renimador', '$meios_auxiliares', '$celesc', '$def_civil', '$igp_pc', '$policia_civil', '$policial_militar', '$policial_pre', '$policia_prf',
 '$samu', '$usa', '$cit', '$outro_sinais')";