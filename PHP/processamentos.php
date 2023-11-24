<?php
include('conexao.php');


// Coleta os dados do formulário paciente

$data = $_POST['data']
$sexo_f = $_POST['sexo_f']=="on" ? 1 : 0 ;
$sexo_m = $_POST['sexo_m']=="on" ? 1 : 0 ;
$hospital = $_POST['hospital']
$nome = $_POST['nome']
$cpf = $_POST['cpf']
$acompanhante = $_POST['acompanhante']
$idade_paciente = $_POST['idade_paciente']
$fone = $_POST['fone']
$idade_acompanhante = $_POST['idade_acompanhante']
$local_ocorrencia = $_POST['local_ocorrencia']
$n_usb = $_POST['n_usb']
$n_ocorr = $_POST['n_ocorr']
$cod_ir = $_POST['cod_ir']
$cod_ps = $_POST['cod_ps']
$desp = $_POST['desp']
$h_ch = $_POST['h_ch']
$km_final = $_POST['km_final']
$cod_sia_sus = $_POST['cod_sia_sus']


//Insere os dados na tabela de paciente
$sqlPaciente = "INSERT INTO info_paciente  VALUES (null,'$data', '$sexo_f', '$sexo_m', '$hospital', '$nome', '$cpf', '$acompanhante', '$idade_paciente', '$local_ocorrencia', 
'$n_usb', '$n_ocorr', '$cod_ir', '$cod_ps', '$desp', '$h_ch', '$km_final', '$cod_sia_sus' )";


$conn->query($sqlPaciente);

//$conn->query($sql);
=======================================================================================================================================================================================

// Coleta os dados do formulário tipo de ocorrencia
$causado_por_animais = $_POST['causado_por_animais']=="on" ? 1 : 0 ;
$por_meio_de_transporte = $_POS['por_meio_de_transporte']=="on" ? 1 : 0 ;
$desmoronamento_deslizamento = $_POST['desmoronamento_deslizamento']=="on" ? 1 : 0 ;
$emergencia_medica = $_POST['emergencia_medica']=="on" ? 1 : 0 ;
$queda_de_2M = $_POST['queda_de_2M']=="on" ? 1 : 0 ;
$tentativa_suicidio = $_POST['tentativa_suicidio']=="on" ? 1 : 0 ;
$queda_propria_altura = $_POST['queda_propria_altura']=="on" ? 1 : 0 ;
$afogamento = $_POST['afogamento']=="on" ? 1 : 0 ;
$agressao = $_POST['agressao']=="on" ? 1 : 0 ;
$atropelamento = $_POST['atropelamento']=="on" ? 1 : 0 ;
$choque_eletrico = $_POST['choque_eletrico']=="on" ? 1 : 0 ;
$desabamento = $_POST['desabamento']=="on" ? 1 : 0 ;
$domestico = $_POST['domestico']=="on" ? 1 : 0 ;
$intoxicao = $_POST['intoxicao']=="on" ? 1 : 0 ;
$queda_bicicleta = $_POST['queda_bicicleta']=="on" ? 1 : 0 ;
$queda_moto = $_POST['queda_moto']=="on" ? 1 : 0 ;
$queda_nivel_maior_2M = $_POST['queda_nivel_maior_2M']=="on" ? 1 : 0 ;
$trabalho = $_POST['trabalho']=="on" ? 1 : 0 ;
$transaferencia  = $_POST['transaferencia']=="on" ? 1 : 0 ;
$esportivo = $_POST['esportivo']=="on" ? 1 : 0 ;
$outro = $_POST['outro']



//Insere os dados na tabela tipos de ocorrencia

$sqlocorrencia = "INSERT INTO tipo_de_ocorrencia VALUES (null, '$causado_por_animais', '$por_meio_de_transporte', '$desmoronamento_deslizamento', '$emergencia_medica', '$queda_de_2M'
'$tentativa_suicidio', '$queda_propria_altura', '$afogamento', '$agressao', '$atropelamento', '$choque_eletrico', '$desabamento', '$domestico', '$intoxicao', '$queda_bicicleta'
'$queda_moto', '$queda_nivel_maior_2M', '$trabalho', '$transaferencia', '$esportivo', '$outro')";




//$conn->query($sql); 

=======================================================================================================================================================================================

// Coleta os dados do formulário problemas_encontrados_suspeitos
$psiquiatrico = $_POST['psiquiatrico']=="on" ? 1 : 0 ;
$respiratorio_dpoc = $_POST['respiratorio_dpoc']=="on" ? 1 : 0 ;
$respiratorio_inalacao_fumacao = $_POST['respiratorio_inalacao_fumacao']=="on" ? 1 : 0 ;
$diabetes_hiperglicemia = $_POST['diabetes_hiperglicemia']=="on" ? 1 : 0 ;
$diabetes_hipoglicemia = $_POST['diabetes_hipoglicemia']=="on" ? 1 : 0 ;
$outros_problemas = $_POST['outros_problemas']=="on" ? 1 : 0 ;
$obstetrico_parto_emergencial = $_POST['obstetrico_parto_emergencial']=="on" ? 1 : 0 ;
$obstetrico_gestante = $_POST['obstetrico_gestante']=="on" ? 1 : 0 ;
$obstetrico_hemor_excessiva = $_POST['transporte_aereo']=="on" ? 1 : 0 ;
$transporte_clinico = $_POST['transporte_clinico']=="on" ? 1 : 0 ;
$transporte_emergencial = $_POST['transporte_emergencial']=="on" ? 1 : 0 ;
$transporte_pos_trauma = $_POST['transporte_pos_trauma']=="on" ? 1 : 0 ;
$transporte_samu = $_POST['transporte_outro']=="on" ? 1 : 0 ;
$transporte_outro = $_POST['transporte_outro']

//Insere os dados na tabela problemas_encontrados_suspeitos

$sqlsuspeitos = "INSERT INTO problemas_encontrados_suspeitos VALUES( null, '$psiquiatrico', '$$respiratorio_dpoc', '$respiratorio_inalacao_fumacao', '$diabetes_hiperglicemia', '$diabetes_hipoglicemia',
'$outros_problemas', '$obstetrico_parto_emergencial', '$obstetrico_gestante', '$obstetrico_hemor_excessiva', '$transporte_clinico', '$transporte_emergencial', '$transporte_pos_trauma',
'$transporte_samu', '$transporte_outro')";


//$conn->query($sql); 

=======================================================================================================================================================================================




// Coleta os dados do formulário sinais e sintomas

$abdomen_sensivel_rigido = $_POST['abdomen_sensivel/rigido']=="on" ? 1 : 0 ;
$agitacao = $_POST['agitacao']=="on" ? 1 : 0 ;
$amnesia = $_POST['amnesia']=="on" ? 1 : 0 ;
$angina_de_peito = $_POST['angina_de_peito']=="on" ? 1 : 0 ;
$apineia = $_POST['apineia']=="on" ? 1 : 0 ;
$bradicadia = $_POST['bradicadia']=="on" ? 1 : 0 ;
$bradipneia = $_POST['bradipneia']=="on" ? 1 : 0 ;
$bronco_aspirando = $_POST['bronco_aspirando']=="on" ? 1 : 0 ;
$cefaleia = $_POST['cefaleia']=="on" ? 1 : 0 ;
$cianose_labial = $_POST['cianose_labial']=="on" ? 1 : 0 ;
$cianose_extremidade = $_POST['cianose_extremidade']=="on" ? 1 : 0 ;
$convulsao = $_POST['convulsao']=="on" ? 1 : 0 ;
$descorticacao = $_POST['descorticacao']=="on" ? 1 : 0 ;
$deformidade = $_POST['deformidade']=="on" ? 1 : 0 ;
$descerebracao = $_POST['descerebracao']=="on" ? 1 : 0 ;
$desmaio = $_POST['desmaio']=="on" ? 1 : 0 ;
$desvio_traqueia = $_POST['desvio_traqueia']=="on" ? 1 : 0 ;
$dispneia = $_POST['dispneia']=="on" ? 1 : 0 ;
$dor_local = $_POST['dor_local']=="on" ? 1 : 0 ;
$adema_generalizada = $_POST['adema_generalizada']=="on" ? 1 : 0 ;
$adema_localizada = $_POST['adema_localizada']=="on" ? 1 : 0 ;
$enfisema_subcutaneo = $_POST['enfisema_subcutaneo']=="on" ? 1 : 0 ;
$estade_jugular = $_POST['estade_jugular']=="on" ? 1 : 0 ;
$face_palida = $_POST['face_palida']=="on" ? 1 : 0 ;
$hemorragia_interna = $_POST['hemorragia_interna']=="on" ? 1 : 0 ;
$hemorragia_externa = $_POST['hemorragia_externa']=="on" ? 1 : 0 ;
$hipertensao = $_POST['hipertensao']=="on" ? 1 : 0 ;
$hipotensia = $_POST['hipotensia']=="on" ? 1 : 0 ;
$nauseas_vomitos = $_POST['nauseas_vomitos']=="on" ? 1 : 0 ;
$nasoragia = $_POST['nasoragia']=="on" ? 1 : 0 ;
$obito = $_POST['obito']=="on" ? 1 : 0 ;
$otorreia = $_POST['otorreia']=="on" ? 1 : 0 ;
$otorragia = $_POST['otorragia']=="on" ? 1 : 0 ;
$o_v_a_c_e = $_POST['o_v_a_c_e']=="on" ? 1 : 0 ;
$parada_cardiaca = $_POST['parada_cardiaca']=="on" ? 1 : 0 ;
$parada_respiratoria = $_POST['parada_respiratoria']=="on" ? 1 : 0 ;
$priaprismo = $_POST['priaprismo']=="on" ? 1 : 0 ;
$prurido_pele = $_POST['prurido_pele']=="on" ? 1 : 0 ;
$pupilas_ansocoria = $_POST['pupilas_ansocoria']=="on" ? 1 : 0 ;
$pupilas_isocoria = $_POST['pupilas_isocoria']=="on" ? 1 : 0 ;
$pupilas_miose = $_POST['pupilas_miose']=="on" ? 1 : 0 ;
$pupilas_midriase = $_POST['pupilas_midriase']=="on" ? 1 : 0 ;
$pupilas_regente = $_POST['pupilas_regente']=="on" ? 1 : 0 ;
$pupilas_n_reagente = $_POST['pupilas_n_reagente']=="on" ? 1 : 0 ;
$sede = $_POST['sede']=="on" ? 1 : 0 ;
$sinal_battle = $_POST['sinal_battle']=="on" ? 1 : 0 ;
$sinal_guaxinim = $_POST['sinal_guaxinim']=="on" ? 1 : 0 ;
$sudorese = $_POST['sudorese']=="on" ? 1 : 0 ;
$taquiapneia = $_POST['taquiapneia']=="on" ? 1 : 0 ;
$taquicardia = $_POST['taquicardia']=="on" ? 1 : 0 ;
$tontura = $_POST['tontura']=="on" ? 1 : 0 ;
$outro_sinais = $_POST['outro_sinais']=="on" ? 1 : 0 ;
//53

//Insere os dados na tabela sinais e sintomas

$sqlsintomas = "INSERT INTO sinais e sintomas VALUES( null, '$abdomen_sensivel_rigido', '$agitacao', '$amnesia', '$angina_de_peito', '$apineia', '$bradicadia', '$bradipneia', '$bronco_aspirando',
'$cefaleia', '$cianose_labial', '$convulsao', '$descorticacao', '$deformidade', '$descerebracao', '$desmaio', '$desvio_traqueia', '$dispneia', '$dor_local', '$adema_generalizada',
'$adema_localizada', '$enfisema_subcutaneo', '$estade_jugular', '$face_palida', '$hemorragia_interna', '$hemorragia_externa', '$hipertensao', '$hipotensia', '$nauseas_vomitos', '$nasoragia'
, '$obito', '$otorreia', '$otorragia', '$o_v_a_c_e', '$parada_cardiaca', '$parada_respiratoria', '$priaprismo', '$prurido_pele', '$pupilas_ansocoria', '$pupilas_isocoria', '$pupilas_miose',
'$pupilas_midriase', '$pupilas_regente', '$pupilas_n_reagente', '$sede', '$sinal_battle', '$sinal_guaxinim', '$sudorese', '$taquiapneia', '$taquicardia', '$tontura', '$outro_sinais')";
//$conn->query($sql); 


=======================================================================================================================================================================================



// Coleta os dados do formulário localizacao_do_trauma

$cabeca = $_POST['cabeca']=="on" ? 1 : 0 ;
$perna_direita = $_POST['perna_direita']=="on" ? 1 : 0 ;
$perna_esquerda = $_POST['braco_direito']=="on" ? 1 : 0 ;
$braco_direito = $_POST['braco_direito']=="on" ? 1 : 0 ;
$braco_esquerdo = $_POST['braco_esquerdo']=="on" ? 1 : 0 ;
$torco = $_POST['torco']=="on" ? 1 : 0 ;
$pe_direito = $_POST['pe_direito']=="on" ? 1 : 0 ;
$pe_esquerdo = $_POST['pe_esquerdo']=="on" ? 1 : 0 ;
$mao_esquerda = $_POST['mao_esquerda']=="on" ? 1 : 0 ;
$mao_direita = $_POST['mao_direita']=="on" ? 1 : 0 ;
$face_esquerda = $_POST['face_esquerda']=="on" ? 1 : 0 ;
$face_direita = $_POST['face_direita']=="on" ? 1 : 0 ;



//Insere os dados na tabela localizacao_do_trauma

$sqltrauma = "INSERT INTO localizacao_do_trauma VALUES ( null, '$cabeca', '$perna_direita', '$perna_esquerda', '$braco_direito', '$braco_esquerdo', '$torco', '$pe_direito', '$pe_esquerdo',
'$mao_esquerda', '$mao_direita', '$face_esquerda', '$face_direita' )";

//$conn->query($sql); 

=======================================================================================================================================================================================



// Coleta os dados do formulário glasgow

$abertura_ocular_maior = $_POST['abertura_ocular_maior']=="on" ? 1 : 0 ; 
$resposta_verbal_maior = $_POST['resposta_verbal_maior']=="on" ? 1 : 0 ;
$resposta_motora_maior = $_POST['resposta_verbal_maior']=="on" ? 1 : 0 ;
$abertura_ocular = $_POST['abertura_ocular']=="on" ? 1 : 0 ;
$resposta_verbal = $_POST['resposta_verbal']=="on" ? 1 : 0 ;
$resposta_motora = $_POST['resposta_motora']=="on" ? 1 : 0 ;

//Insere os dados na tabela glasgow

$sqlglasgow = "INSERT INTO glasgow VALUES ( null , '$abertura_ocular_maior', '$resposta_verbal_maior', '$resposta_motora_maior', '$abertura_ocular', '$resposta_verbal', '$resposta_motora' )";


//$conn->query($sql); 

=======================================================================================================================================================================================

// Coleta os dados do formulário sinais_vitais

$pressao_arterial_sistolica = $_POST['pressao_arterial_sistolica']=="on" ? 1 : 0 ;
$pressao_arterial_diastolica = $_POST['pressao_arterial_diastolica']=="on" ? 1 : 0 ;
$pulso = $_POST['pulso']=="on" ? 1 : 0 ;
$respiracao = $_POST['repiracao']=="on" ? 1 : 0 ;
$temperatura = $_POST['temperatura']=="on" ? 1 : 0 ;
$perfusao_menor_2 = $_POST['perfusao_menor_2']=="on" ? 1 : 0 ;
$perfusao_maior_2 = $_POST['perfusao_maior_2']=="on" ? 1 : 0 ;


//Insere os dados na tabela sinais_vitais

$sqlvitais = "INSERT INTO sinais_vitais VALUES (null , '$pressao_arterial_sistolica', '$pressao_arterial_diastolica', '$pulso', '$respiracao', '$temperatura', '$perfusao_menor_2',
'$perfusao_maior_2')";


//$conn->query($sql); 

=======================================================================================================================================================================================

// Coleta os dados do formulário formas_de_conducao

$deitado = $_POST['deitado']=="on" ? 1 : 0 ;
$sentado = $_POST['sentado']=="on" ? 1 : 0 ;
$semi_sentado = $_POST['semi-sentado']=="on" ? 1 : 0 ;

//Insere os dados na tabela formas_de_conducao

$sqlconducao = "INSERT INTO formas_de_conducao VALUES (null , '$deitado', '$sentado', '$semi_sentado')";


//$conn->query($sql); 

=======================================================================================================================================================================================

// Coleta os dados do formulário decisao_transporte

$critico = $_POST['critico']=="on" ? 1 : 0 ;
$instavel = $_POST['instavel']=="on" ? 1 : 0 ;
$potencialmente_instavel = $_POST['potencialmente_instavel']=="on" ? 1 : 0 ;
$estavel = $_POST['estavel']=="on" ? 1 : 0 ;
$equipe_de_atendimento_m = $_POST['equipe_de_atendimento_m']=="on" ? 1 : 0 ;
$equipe_de_atendimento_s1 = $_POST['equipe_de_atendimento_s1']=="on" ? 1 : 0 ;
$equipe_de_atendimento_s2 = $_POST['equipe_de_atendimento_s2']=="on" ? 1 : 0 ;
$equipe_de_atendimento_s3 = $_POST['equipe_de_atendimento_s3']=="on" ? 1 : 0 ;
$equipe_de_atendimento_demandante = $_POST['equipe_de_atendimento_demandante']=="on" ? 1 : 0 ;
$equipe_de_atendimento = $_POST['equipe_de_atendimento']=="on" ? 1 : 0 ;

//Insere os dados na tabela decisao_transporte

$sqltransporte = "INSERT INTO decisao_transporte VALUES (null, '$critico', '$instavel', '$potencialmente_instavel', '$estavel', '$equipe_de_atendimento_m', '$equipe_de_atendimento_s1',
'$equipe_de_atendimento_s2', '$equipe_de_atendimento_s3', '$equipe_de_atendimento_demandante', '$equipe_de_atendimento')";

//$conn->query($sql); 

=======================================================================================================================================================================================

// Coleta os dados do formulário vitima_era

$ciclista = $_POST['ciclista']=="on" ? 1 : 0 ;
$condutor_moto = $_POST['condutor_moto']=="on" ? 1 : 0 ;
$ps_moto = $_POST['ps_moto']=="on" ? 1 : 0 ;
$condutor_carro = $_POST['condutor_carro']=="on" ? 1 : 0 ;
$ps_bco_frente = $_POST['ps_bco_frente']=="on" ? 1 : 0 ;
$ps_bco_tras = $_POST['ps_bco_tras']=="on" ? 1 : 0 ;
$gestante = $_POST['gestante']=="on" ? 1 : 0 ;
$clinico = $_POST['clinico']=="on" ? 1 : 0 ;
$trauma = $_POST['trauma']=="on" ? 1 : 0 ;
$pedestre = $_POST['pedestre']=="on" ? 1 : 0 ;

//Insere os dados na tabela vitima_era

$sqlvitima = "INSERT INTO vitima_era VALUES ( null , '$ciclista', '$condutor_moto', '$ps_moto', '$condutor_carr', '$ps_bco_frente', '$ps_bco_tras', '$gestante',
 '$clinico', '$trauma', '$pedestre' )";


//$conn->query($sql); 

=======================================================================================================================================================================================


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

=======================================================================================================================================================================================

// Coleta os dados do formulário materias_utilizados_descartaveis
$ataduras_8 =$_POST ['ataduras_8']=="on" ? 1 : 0 ;
$ataduras_10 =$_POST ['ataduras_12']=="on" ? 1 : 0 ;=="on" ? 1 : 0 ;
$ataduras_20 =$_POST ['ataduras_20']=="on" ? 1 : 0 ;
$cateter_tp_oculos =$_POST ['cateter_tp_oculos']=="on" ? 1 : 0 ;
$compressa =$_POST ['compressa']=="on" ? 1 : 0 ;
$kits_h =$_POST ['kits_h']=="on" ? 1 : 0 ;
$kits_p =$_POST ['kits_p']=="on" ? 1 : 0 ;
$kits_q =$_POST ['kits_q']=="on" ? 1 : 0 ;
$luvas_desc =$_POST ['luvas_desc']=="on" ? 1 : 0 ;
$mascara_desc =$_POST ['mascara_desc']=="on" ? 1 : 0 ;
$manto_aluminizado =$_POST ['manto_aluminizado']=="on" ? 1 : 0 ;
$pas_do_dea =$_POST ['pas_do_dea']=="on" ? 1 : 0 ;
$sonda_aspiracao =$_POST ['sonda_aspiracao']=="on" ? 1 : 0 ;
$soro_fisiologico =$_POST ['soro_fisiologico']=="on" ? 1 : 0 ;
$talas_pap_p =$_POST ['talas_pap_p']=="on" ? 1 : 0 ;
$talas_pap_g =$_POST ['talas_pap_g']=="on" ? 1 : 0 ;
$outros_utilizados =$_POST ['outros_utilizados']

//Insere os dados na tabela materias_utilizados_descartaveis

$sqlutilizados_descartaveis = "INSERT INTO materias_utilizados_descartaveis VALUES (null, '$ataduras_8', '$ataduras_12', '$ataduras_8',
'$ataduras_20', '$cateter_tp_oculos', '$compressa', '$kits_h', '$kits_p', '$kits_q', '$luvas_desc', '$manto_aluminizado', '$pas_do_dea',
'$sonda_aspiracao', '$soro_fisiologico', '$talas_pap_p', '$talas_pap_g', '$outros_utilizados')";


//$conn->query($sql); 

=======================================================================================================================================================================================
// Coleta os dados do formulário materias_utilizados_deixados_hospital

$colar_n =$_POST ['colar_n']=="on" ? 1 : 0 ;
$colar_pp =$_POST ['colar_pp']=="on" ? 1 : 0 ;
$colar_p =$_POST ['colar_p']=="on" ? 1 : 0 ;
$colar_m =$_POST['colar_m']=="on" ? 1 : 0 ;
$colar_g =$_POST ['colar_g']=="on" ? 1 : 0 ;
$coxins_estabiliza =$_POST ['coxins_estabiliza']=="on" ? 1 : 0 ;
$ked_adul =$_POST ['ked_adul']=="on" ? 1 : 0 ;
$ked_infa =$_POST ['ked_infa']=="on" ? 1 : 0 ;
$maca_rigida =$_POST ['maca_rigida']=="on" ? 1 : 0 ;
$T_T_F_adul =$_POST ['T_T_F_adul']=="on" ? 1 : 0 ;
$T_T_F_infa =$_POST ['T_T_F_infa']=="on" ? 1 : 0 ;
$tirante_ranha =$_POST ['tirante_ranha']=="on" ? 1 : 0 ;
$tirante_cabeca =$_POST ['tirante_cabeca']=="on" ? 1 : 0 ;
$canula =$_POST ['canula']=="on" ? 1 : 0 ;
$outros_deixados =$_POST ['outros_deixados']


//Insere os dados na tabela materias_utilizados_deixados_hospital

$sqldeixados_hospital = "INSERT INTO materias_utilizados_deixados_hospital values(null, '$colar_n', '$colar_pp', '$colar_p', '$colar_m',
'$colar_g', '$coxins_estabiliza', '$ked_adul', '$ked_infa', '$maca_rigida', '$T_T_F_adul', '$T_T_F_infa', '$tirante_ranha',
'$tirante_cabeca', '$canula', '$outros_deixados')";

//$conn->query($sql);

=======================================================================================================================================================================================

// Coleta os dados do formulário anamnses_emergencia

$sinais_sintomas =$_POST ['sinais_sintomas']=="on" ? 1 : 0 ;
$quanto_tempo =$_POST ['quanto_tempo'] 
$problemas_saude =$_POST ['problemas_saude']
$alergias =$_POST ['alergias']
$ingeriu_alimento_liquido =$_POST ['ingeriu_alimento_liquido']

//Insere os dados na tabela anamnses_emergencia

$sqlemergencia = "INSERT INTO anamnses_emergencia values(null, '$sinais_sintomas', '$quanto_tempo', '$problemas_saude', '$alergias', '$ingeriu_alimento_liquido')";

//$conn->query($sql);

=======================================================================================================================================================================================
// Coleta os dados do formulário avalicao_da_cinematica

$encontrado_de_capacete =$_POST ['encontrado_de_capacete']
$encontrado_de_cinto =$_POST ['encontrado_de_cinto']=="on" ? 1 : 0 ;
$para_brisa_avariado =$_POST ['para_brisa_avariado']=="on" ? 1 : 0 ;
$disturbio_de_comportamento =$_POST ['disturbio_de_comportamento']=="on" ? 1 : 0 ;
$caminhando_na_cena =$_POST ['caminhando_na_cena']=="on" ? 1 : 0 ;
$painel_avariado =$_POST ['painel_avariado']=="on" ? 1 : 0 ;
$volante_torcido =$_POST ['volante_torcido']=="on" ? 1 : 0 ;

//Insere os dados na tabela avalicao_da_cinematica

$sqlcinematica = "INSERT INTO avalicao_da_cinematica values(null, '$encontrado_de_capacete', '$encontrado_de_cinto', '$para_brisa_avariado', '$disturbio_de_comportamento',
'$caminhando_na_cena', '$painel_avariado', '$volante_torcido')";

//$conn->query($sql);

=======================================================================================================================================================================================


// if ($conn->query($sql) === TRUE) {
//   echo "informaçoes salvas";
//  } else {
//   echo "Erro ao salvar as info " . $conn->error;
//  }
   


 $conn->close();
?>