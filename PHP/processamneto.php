<?php
include('conexao.php');


// Coleta os dados do formulário paciente

//Insere os dados na tabela de paciente
$sqlPaciente = "INSERT INTO info_paciente  VALUES (null)";


$conn->query($sqlPaciente);

//$conn->query($sql);


// Coleta os dados do formulário ...

// Coleta os dados do formulário procedimento efetuado
$aspiracao = $_POST['aspiracao']=="on" ? 1 : 0 ;
$avaliacao_inicial = $_POST['avaliacao_inicial']=="on" ? 1 : 0 ;
$avaliacao_dirigida =$_POST['avaliacao_dirigida' ]=="on" ? 1 : 0 ;
$avaliacao_continua =$_POST['avaliacao_continua' ]=="on" ? 1 : 0 ;
$chave_rautek =$_POST['chave_rautek' ]=="on" ? 1 : 0 ;
$canula_guedel =$_POST['canula_guedel' ]=="on" ? 1 : 0 ;
$desobstrucao_v_a =$_POST['desobstrucao_v_a' ]=="on" ? 1 : 0 ;
$emprego_d_e_a =$_POST['emprego_d_e_a' ]=="on" ? 1 : 0 ;
$gerenciamento_risco =$_POST['gerenciamento_risco' ]=="on" ? 1 : 0 ;
$limpeza_ferimento =$_POST['limpeza_ferimento' ]=="on" ? 1 : 0 ;
$curativo =$_POST['curativo' ]=="on" ? 1 : 0 ;
$compressivo =$_POST['compressivo' ]=="on" ? 1 : 0 ;
$encravamento =$_POST['encravamento' ]=="on" ? 1 : 0 ;
$ocular =$_POST['ocular' ]=="on" ? 1 : 0 ;
$queimadura =$_POST['queimadura' ]=="on" ? 1 : 0 ;
$simples =$_POST['simples' ]=="on" ? 1 : 0 ;
$pontos =$_POST['3_pontos' ]=="on" ? 1 : 0 ;
$imobilizacoes =$_POST['imobilizacoes' ]=="on" ? 1 : 0 ;
$membro_inf_dir =$_POST['membro_inf_dir' ]=="on" ? 1 : 0 ;
$membro_inf_esq =$_POST['membro_inf_esq' ]=="on" ? 1 : 0 ;
$membro_sup_dir =$_POST['membro_sup_dir' ]=="on" ? 1 : 0 ;
$membro_sup_esq =$_POST['membro_sup_esq' ]=="on" ? 1 : 0 ;
$quadril =$_POST['quadril' ]=="on" ? 1 : 0 ;
$cervical =$_POST['cervical' ]=="on" ? 1 : 0 ;
$maca_sobre_rodas =$_POST['maca_sobre_rodas' ]=="on" ? 1 : 0 ;
$macas_rigidas =$_POST['macas_rigidas' ]=="on" ? 1 : 0 ;
$ponte =$_POST['ponte' ]=="on" ? 1 : 0 ;
$retirado_capacete =$_POST['retirado_capacete' ]=="on" ? 1 : 0 ;
$r_c_p =$_POST['r_c_p' ]=="on" ? 1 : 0 ;
$rolamento_90 =$_POST['rolamento_90' ]=="on" ? 1 : 0 ;
$rolamento_180 =$_POST['rolamento_180' ]=="on" ? 1 : 0 ;
$tomada_decisao =$_POST['tomada_decisao' ]=="on" ? 1 : 0 ;
$tratado_choque =$_POST['tratado_choque' ]=="on" ? 1 : 0 ;
$uso_canula =$_POST['uso_canula' ]=="on" ? 1 : 0 ;
$uso_colar =$_POST['uso_colar' ]=="on" ? 1 : 0 ;
$uso_ked =$_POST['uso_ked' ]=="on" ? 1 : 0 ;
$uso_ttf =$_POST['uso_ttf' ]=="on" ? 1 : 0 ;
$ventilacao_suporte =$_POST['ventilacao_suporte' ]=="on" ? 1 : 0 ;
$oxigeniterapia =$_POST['oxigeniterapia' ]=="on" ? 1 : 0 ;
$renimador =$_POST['renimador' ]=="on" ? 1 : 0 ;
$meios_auxiliares =$_POST['meios_auxiliares' ]=="on" ? 1 : 0 ;
$celesc =$_POST['celesc' ]=="on" ? 1 : 0 ;
$def_civil =$_POST['def_civil' ]=="on" ? 1 : 0 ;
$igp_pc =$_POST['igp_pc' ]=="on" ? 1 : 0 ;
$policia_civil =$_POST['policia_civil' ]=="on" ? 1 : 0 ;
$policial_militar =$_POST['policial_militar' ]=="on" ? 1 : 0 ;
$policial_pre =$_POST['policial_pre' ]=="on" ? 1 : 0 ;
$policia_prf =$_POST['policia_prf' ]=="on" ? 1 : 0 ;
$samu =$_POST['samu' ]=="on" ? 1 : 0 ;
$usa =$_POST['usa' ]=="on" ? 1 : 0 ;
$usb =$_POST['usb' ]=="on" ? 1 : 0 ;
$cit =$_POST['cit' ]=="on" ? 1 : 0 ;
$outro_sinais =$_POST['outro_sinais' ]=="on" ? 1 : 0 ;


//Insere os dados na tabela de procedimento_efetuado

$sqlProcedimentos = "INSERT INTO procedimento_efetuado  VALUES (null,'$aspiracao', '$avaliacao_inicial', '$avaliacao_dirigida', '$avaliacao_continua', '$chave_rautek',
 '$canula_guedel','$desobstrucao_v_a' ,'$emprego_d_e_a', '$gerenciamento_risco', '$limpeza_ferimento', '$curativo', '$compressivo',
 '$encravamento', '$ocular', '$queimadura', '$simples', '$pontos', '$imobilizacoes', '$membro_inf_dir', '$membro_inf_esq', '$membro_sup_dir',
 '$membro_sup_esq', '$quadril', '$cervical', '$maca_sobre_rodas', '$macas_rigidas', '$ponte', '$retirado_capacete', '$r_c_p', '$rolamento_90', 
 '$rolamento_180', '$tomada_decisao', '$tratado_choque', '$uso_canula', '$uso_colar', '$uso_ked', '$uso_ttf', '$ventilacao_suporte', '$oxigeniterapia',
 '$renimador', '$meios_auxiliares', '$celesc', '$def_civil', '$igp_pc', '$policia_civil', '$policial_militar', '$policial_pre', '$policia_prf',
 '$samu', '$usa', '$usb', '$cit', '$outro_sinais')"; //52

$conn->query($$sqlProcedimentos);




// if ($conn->query($sql) === TRUE) {
//   echo "informaçoes salvas";
//  } else {
//   echo "Erro ao salvar as info " . $conn->error;
//  }
   


 $conn->close();
?>