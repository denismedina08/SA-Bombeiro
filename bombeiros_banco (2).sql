-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2023 às 17:17
-- Versão do servidor: 8.0.21
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiros_banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnses_emergencia`
--

CREATE TABLE `anamnses_emergencia` (
  `id_ocorrencia` int NOT NULL,
  `sinais_sintomas` int NOT NULL,
  `quanto_tempo` varchar(50) NOT NULL,
  `problemas_saude` varchar(50) NOT NULL,
  `alergias` varchar(50) NOT NULL,
  `ingeriu_alimento_liquido` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnses_gestacional`
--

CREATE TABLE `anamnses_gestacional` (
  `id_ocorrencia` int NOT NULL,
  `periodo_gestacao` varchar(50) NOT NULL,
  `pre-natal` tinyint(1) NOT NULL,
  `nome_medico` int NOT NULL,
  `existe_complicacoes` tinyint(1) NOT NULL,
  `primeiro_filhos` tinyint(1) NOT NULL,
  `quantos_filhos` int NOT NULL,
  `horas_contracao` time NOT NULL,
  `contracao_duracao` int NOT NULL,
  `contracao_intervalo` int NOT NULL,
  `pressao_quadril` tinyint(1) NOT NULL,
  `ruptura_bolsa` tinyint(1) NOT NULL,
  `inspecao_visual` tinyint(1) NOT NULL,
  `parto_relizado` tinyint(1) NOT NULL,
  `sexo_f` tinyint(1) NOT NULL,
  `sexo_m` tinyint(1) NOT NULL,
  `hora_nascimento` time NOT NULL,
  `nome_bebe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avalicao_da_cinematica`
--

CREATE TABLE `avalicao_da_cinematica` (
  `id_ocorrencia` int NOT NULL,
  `encontrado_de_capacete` tinyint(1) NOT NULL,
  `encontrado_de_cinto` tinyint(1) NOT NULL,
  `para-brisa_avariado` tinyint(1) NOT NULL,
  `disturbio_de_comportamento` tinyint(1) NOT NULL,
  `caminhando_na_cena` tinyint(1) NOT NULL,
  `painel_avariado` tinyint(1) NOT NULL,
  `volante_torcido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int NOT NULL,
  `matricula` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nome` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `matricula`, `senha`, `nome`) VALUES
(1, 'sas', 'sa', 'albertos'),
(2, '6969', 'cotnire', 'eudoucomcalor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `características`
--

CREATE TABLE `características` (
  `id_ocorrencia` int NOT NULL,
  `tamanho` int NOT NULL,
  `idade` int NOT NULL,
  `peso` int NOT NULL,
  `acompanhante` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `decisao_transporte`
--

CREATE TABLE `decisao_transporte` (
  `id_ocorrencia` int NOT NULL,
  `critico` tinyint(1) NOT NULL,
  `instavel` tinyint(1) NOT NULL,
  `potencialmente_instavel` tinyint(1) NOT NULL,
  `estavel` tinyint(1) NOT NULL,
  `equipe_de_atendimento_m` varchar(50) NOT NULL,
  `equipe_de_atendimento_s1` varchar(50) NOT NULL,
  `equipe_de_atendimento_s2` varchar(50) NOT NULL,
  `equipe_de_atendimento_s3` varchar(50) NOT NULL,
  `equipe_de_atendimento_demandante` varchar(50) NOT NULL,
  `equipe_de_atendimento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formas_de_conducao`
--

CREATE TABLE `formas_de_conducao` (
  `id_ocorrencia` int NOT NULL,
  `deitado` tinyint(1) NOT NULL,
  `sentado` tinyint(1) NOT NULL,
  `semi-sentado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `glasgow`
--

CREATE TABLE `glasgow` (
  `abertura_ocular_maior` int NOT NULL,
  `resposta_verbal_maior` int NOT NULL,
  `resposta_motora_maior` int NOT NULL,
  `id_ocorrencia` int NOT NULL,
  `abertura_ocular` int NOT NULL,
  `resposta_verbal` int NOT NULL,
  `resposta_motora` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_paciente`
--

CREATE TABLE `info_paciente` (
  `id_ocorrencia` int NOT NULL,
  `data` date NOT NULL,
  `sexo_f` tinyint(1) NOT NULL,
  `sexo_m` tinyint(1) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `acompanhante` varchar(50) NOT NULL,
  `idade_paciente` int NOT NULL,
  `fone` int NOT NULL,
  `idade_acompanhante` int NOT NULL,
  `local_ocorrencia` varchar(50) NOT NULL,
  `n_usb` int NOT NULL,
  `n_ocorr` int NOT NULL,
  `cod_ir` int NOT NULL,
  `cod_ps` int NOT NULL,
  `desp` varchar(50) NOT NULL,
  `h_ch` int NOT NULL,
  `km_final` int NOT NULL,
  `cod_sia/sus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacao_do_trauma`
--

CREATE TABLE `localizacao_do_trauma` (
  `id_ocorrencia` int NOT NULL,
  `cabeca` tinyint(1) NOT NULL,
  `perna_direita` tinyint(1) NOT NULL,
  `perna_esquerda` tinyint(1) NOT NULL,
  `braco_direito` tinyint(1) NOT NULL,
  `braco_esquerdo` tinyint(1) NOT NULL,
  `torco` tinyint(1) NOT NULL,
  `pe_direito` tinyint(1) NOT NULL,
  `pe_esquerdo` tinyint(1) NOT NULL,
  `mao_esquerda` tinyint(1) NOT NULL,
  `mao_direita` tinyint(1) NOT NULL,
  `face_esquerda` tinyint(1) NOT NULL,
  `face_direita` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_ocorrencia` int NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_ocorrencia`, `usuario`, `senha`) VALUES
(1, 'jojo', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias_utilizados_deixados_hospital`
--

CREATE TABLE `materias_utilizados_deixados_hospital` (
  `id_ocorrencia` int NOT NULL,
  `colar_n` tinyint(1) NOT NULL,
  `colar_pp` tinyint(1) NOT NULL,
  `colar_p` tinyint(1) NOT NULL,
  `colar_m` tinyint(1) NOT NULL,
  `colar_g` tinyint(1) NOT NULL,
  `coxins_estabiliza` tinyint(1) NOT NULL,
  `ked_adul` tinyint(1) NOT NULL,
  `ked_infa` tinyint(1) NOT NULL,
  `maca_rigida` tinyint(1) NOT NULL,
  `T_T_F_adul` tinyint(1) NOT NULL,
  `T_T_F_infa` tinyint(1) NOT NULL,
  `tirante_ranha` tinyint(1) NOT NULL,
  `tirante_cabeca` tinyint(1) NOT NULL,
  `canula` tinyint(1) NOT NULL,
  `outros_deixados` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias_utilizados_descartaveis`
--

CREATE TABLE `materias_utilizados_descartaveis` (
  `id_ocorrencia` int NOT NULL,
  `ataduras_8` int NOT NULL,
  `ataduras_12` int NOT NULL,
  `ataduras_20` int NOT NULL,
  `cateter_tp_oculos` int NOT NULL,
  `compressa` int NOT NULL,
  `kits_h` int NOT NULL,
  `kits_p` int NOT NULL,
  `kits_q` int NOT NULL,
  `luvas_desc` int NOT NULL,
  `mascara_desc` int NOT NULL,
  `manto_aluminizado` int NOT NULL,
  `pas_do_dea` int NOT NULL,
  `sonda_aspiracao` int NOT NULL,
  `soro_fisiologico` int NOT NULL,
  `talas_pap_p` int NOT NULL,
  `talas_pap_g` int NOT NULL,
  `outros_utilizados` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pre-hospitalar`
--

CREATE TABLE `pre-hospitalar` (
  `id_ocorrencia` int NOT NULL,
  `causado_por_animais` tinyint(1) NOT NULL,
  `por_meio_de_transporte` tinyint(1) NOT NULL,
  `desmoronamento_deslizamento` tinyint(1) NOT NULL,
  `emergencia_medica` tinyint(1) NOT NULL,
  `queda_de_2M` tinyint(1) NOT NULL,
  `tentativa_suicidio` tinyint(1) NOT NULL,
  `queda_propria_altura` tinyint(1) NOT NULL,
  `afogamento` tinyint(1) NOT NULL,
  `agressao` tinyint(1) NOT NULL,
  `atropelamento` tinyint(1) NOT NULL,
  `choque_eletrico` tinyint(1) NOT NULL,
  `desabamento` tinyint(1) NOT NULL,
  `domestico` tinyint(1) NOT NULL,
  `intoxicao` tinyint(1) NOT NULL,
  `queda_bicicleta` tinyint(1) NOT NULL,
  `queda_moto` tinyint(1) NOT NULL,
  `queda_nivel_maior_2M` tinyint(1) NOT NULL,
  `trabalho` tinyint(1) NOT NULL,
  `transaferencia` tinyint(1) NOT NULL,
  `esportivo` tinyint(1) NOT NULL,
  `ouro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `problemas_encontrados_suspeitos`
--

CREATE TABLE `problemas_encontrados_suspeitos` (
  `id_ocorrencia` int NOT NULL,
  `psiquiatrico` int NOT NULL,
  `respiratorio_dpoc` int NOT NULL,
  `respiratorio_inalacao_fumacao` int NOT NULL,
  `diabetes_hiperglicemia` int NOT NULL,
  `diabetes_hipoglicemia` int NOT NULL,
  `outros_problemas` int NOT NULL,
  `obstetrico_parto_emergencial` int NOT NULL,
  `obstetrico_gestante` int NOT NULL,
  `obstetrico_hemor_excessiva` int NOT NULL,
  `transporte_aereo` int NOT NULL,
  `transporte_clinico` int NOT NULL,
  `transporte_emergencial` int NOT NULL,
  `transporte_pos-trauma` int NOT NULL,
  `transporte_samu` int NOT NULL,
  `transporte_outro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento_efetuado`
--

CREATE TABLE `procedimento_efetuado` (
  `id_ocorrencia` int NOT NULL,
  `aspiracao` tinyint(1) NOT NULL,
  `avaliacao_inicial` tinyint(1) NOT NULL,
  `avaliacao_dirigida` tinyint(1) NOT NULL,
  `avaliacao_continua` tinyint(1) NOT NULL,
  `chave_rautek` tinyint(1) NOT NULL,
  `canula_guedel` tinyint(1) NOT NULL,
  `desobstrucao_v_a` tinyint(1) NOT NULL,
  `emprego_d_e_a` tinyint(1) NOT NULL,
  `gerenciamento_risco` tinyint(1) NOT NULL,
  `limpeza_ferimento` tinyint(1) NOT NULL,
  `curativo` tinyint(1) NOT NULL,
  `compressivo` tinyint(1) NOT NULL,
  `encravamento` tinyint(1) NOT NULL,
  `ocular` tinyint(1) NOT NULL,
  `queimadura` tinyint(1) NOT NULL,
  `simples` tinyint(1) NOT NULL,
  `3_pontos` tinyint(1) NOT NULL,
  `imobilizacoes` tinyint(1) NOT NULL,
  `membro_inf_dir` tinyint(1) NOT NULL,
  `membro_inf_esq` tinyint(1) NOT NULL,
  `membro_sup_dir` tinyint(1) NOT NULL,
  `membro_sup_esq` tinyint(1) NOT NULL,
  `quadril` tinyint(1) NOT NULL,
  `cervical` tinyint(1) NOT NULL,
  `maca_sobre_rodas` tinyint(1) NOT NULL,
  `macas_rigidas` tinyint(1) NOT NULL,
  `ponte` tinyint(1) NOT NULL,
  `retirado_capacete` tinyint(1) NOT NULL,
  `r_c_p` tinyint(1) NOT NULL,
  `rolamento_90` tinyint(1) NOT NULL,
  `rolamento_180` tinyint(1) NOT NULL,
  `tomada_decisao` tinyint(1) NOT NULL,
  `tratado_choque` tinyint(1) NOT NULL,
  `uso_canula` tinyint(1) NOT NULL,
  `uso_colar` varchar(1) NOT NULL,
  `uso_ked` tinyint(1) NOT NULL,
  `uso_ttf` tinyint(1) NOT NULL,
  `ventilacao_suporte` tinyint(1) NOT NULL,
  `oxigeniterapia` varchar(10) NOT NULL,
  `renimador` varchar(10) NOT NULL,
  `meios_auxiliares` tinyint(1) NOT NULL,
  `celesc` tinyint(1) NOT NULL,
  `def_civil` tinyint(1) NOT NULL,
  `igp_pc` tinyint(1) NOT NULL,
  `policia_civil` tinyint(1) NOT NULL,
  `policial_militar` tinyint(1) NOT NULL,
  `policial_pre` tinyint(1) NOT NULL,
  `policia_prf` tinyint(1) NOT NULL,
  `samu` tinyint(1) NOT NULL,
  `usa` tinyint(1) NOT NULL,
  `usb` tinyint(1) NOT NULL,
  `cit` tinyint(1) NOT NULL,
  `outros_procedimentos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinais_sintomas`
--

CREATE TABLE `sinais_sintomas` (
  `id_ocorrencia` int NOT NULL,
  `abdomen_sensivel/rigido` tinyint(1) NOT NULL,
  `afundamento_cranio` tinyint(1) NOT NULL,
  `agitacao` tinyint(1) NOT NULL,
  `amnesia` tinyint(1) NOT NULL,
  `angina_de_peito` tinyint(1) NOT NULL,
  `apineia` tinyint(1) NOT NULL,
  `bradicadia` tinyint(1) NOT NULL,
  `bradipneia` tinyint(1) NOT NULL,
  `bronco-aspirando` tinyint(1) NOT NULL,
  `cefaleia` tinyint(1) NOT NULL,
  `cianose_labial` tinyint(1) NOT NULL,
  `cianose_extremidade` tinyint(1) NOT NULL,
  `convulsao` tinyint(1) NOT NULL,
  `descorticacao` tinyint(1) NOT NULL,
  `deformidade` tinyint(1) NOT NULL,
  `descerebracao` tinyint(1) NOT NULL,
  `desmaio` tinyint(1) NOT NULL,
  `desvio_traqueia` tinyint(1) NOT NULL,
  `dispneia` tinyint(1) NOT NULL,
  `dor_local` tinyint(1) NOT NULL,
  `adema_generalizada` tinyint(1) NOT NULL,
  `adema_localizada` tinyint(1) NOT NULL,
  `enfisema_subcutaneo` tinyint(1) NOT NULL,
  `estade_jugular` tinyint(1) NOT NULL,
  `face_palida` tinyint(1) NOT NULL,
  `hemorragia_interna` tinyint(1) NOT NULL,
  `hemorragia_externa` tinyint(1) NOT NULL,
  `hipertensao` tinyint(1) NOT NULL,
  `hipotensia` tinyint(1) NOT NULL,
  `nauseas_vomitos` tinyint(1) NOT NULL,
  `nasoragia` tinyint(1) NOT NULL,
  `obito` tinyint(1) NOT NULL,
  `otorreia` tinyint(1) NOT NULL,
  `otorragia` tinyint(1) NOT NULL,
  `o_v_a_c_e` tinyint(1) NOT NULL,
  `parada_cardiaca` tinyint(1) NOT NULL,
  `parada_respiratoria` tinyint(1) NOT NULL,
  `priaprismo` tinyint(1) NOT NULL,
  `prurido_pele` tinyint(1) NOT NULL,
  `pupilas_ansocoria` tinyint(1) NOT NULL,
  `pupilas_isocoria` tinyint(1) NOT NULL,
  `pupilas_miose` tinyint(1) NOT NULL,
  `pupilas_midriase` tinyint(1) NOT NULL,
  `pupilas_regente` tinyint(1) NOT NULL,
  `pupilas_n_reagente` tinyint(1) NOT NULL,
  `sede` tinyint(1) NOT NULL,
  `sinal_battle` tinyint(1) NOT NULL,
  `sinal_guaxinim` tinyint(1) NOT NULL,
  `sudorese` tinyint(1) NOT NULL,
  `taquiapneia` tinyint(1) NOT NULL,
  `taquicardia` tinyint(1) NOT NULL,
  `tontura` tinyint(1) NOT NULL,
  `outro_sinais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinais_vitais`
--

CREATE TABLE `sinais_vitais` (
  `id_ocorrencia` int NOT NULL,
  `pressao_arterial_sistolica` int NOT NULL,
  `pressao_arterial_diastolica` int NOT NULL,
  `pulso` int NOT NULL,
  `repiracao` int NOT NULL,
  `temperatura` int NOT NULL,
  `perfusao_menor_2` tinyint(1) NOT NULL,
  `perfusao_maior_2` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitima_era`
--

CREATE TABLE `vitima_era` (
  `id_ocorrencia` int NOT NULL,
  `ciclista` tinyint(1) NOT NULL,
  `condutor_moto` tinyint(1) NOT NULL,
  `ps_moto` tinyint(1) NOT NULL,
  `condutor_carro` tinyint(1) NOT NULL,
  `ps_bco_frente` tinyint(1) NOT NULL,
  `ps_bco_tras` tinyint(1) NOT NULL,
  `gestante` tinyint(1) NOT NULL,
  `clinico` tinyint(1) NOT NULL,
  `trauma` tinyint(1) NOT NULL,
  `pedestre` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anamnses_emergencia`
--
ALTER TABLE `anamnses_emergencia`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `anamnses_gestacional`
--
ALTER TABLE `anamnses_gestacional`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `avalicao_da_cinematica`
--
ALTER TABLE `avalicao_da_cinematica`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- Índices para tabela `características`
--
ALTER TABLE `características`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `decisao_transporte`
--
ALTER TABLE `decisao_transporte`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `formas_de_conducao`
--
ALTER TABLE `formas_de_conducao`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `glasgow`
--
ALTER TABLE `glasgow`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `info_paciente`
--
ALTER TABLE `info_paciente`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `localizacao_do_trauma`
--
ALTER TABLE `localizacao_do_trauma`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `materias_utilizados_deixados_hospital`
--
ALTER TABLE `materias_utilizados_deixados_hospital`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `materias_utilizados_descartaveis`
--
ALTER TABLE `materias_utilizados_descartaveis`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `pre-hospitalar`
--
ALTER TABLE `pre-hospitalar`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `problemas_encontrados_suspeitos`
--
ALTER TABLE `problemas_encontrados_suspeitos`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `procedimento_efetuado`
--
ALTER TABLE `procedimento_efetuado`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `sinais_sintomas`
--
ALTER TABLE `sinais_sintomas`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `sinais_vitais`
--
ALTER TABLE `sinais_vitais`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `vitima_era`
--
ALTER TABLE `vitima_era`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anamnses_emergencia`
--
ALTER TABLE `anamnses_emergencia`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anamnses_gestacional`
--
ALTER TABLE `anamnses_gestacional`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avalicao_da_cinematica`
--
ALTER TABLE `avalicao_da_cinematica`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `glasgow`
--
ALTER TABLE `glasgow`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `info_paciente`
--
ALTER TABLE `info_paciente`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `materias_utilizados_deixados_hospital`
--
ALTER TABLE `materias_utilizados_deixados_hospital`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `materias_utilizados_descartaveis`
--
ALTER TABLE `materias_utilizados_descartaveis`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `procedimento_efetuado`
--
ALTER TABLE `procedimento_efetuado`
  MODIFY `id_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `ocorrencia_ibfk_1` FOREIGN KEY (`id_ocorrencia`) REFERENCES `anamnses_emergencia` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_10` FOREIGN KEY (`id_ocorrencia`) REFERENCES `login` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_11` FOREIGN KEY (`id_ocorrencia`) REFERENCES `pre-hospitalar` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_12` FOREIGN KEY (`id_ocorrencia`) REFERENCES `problemas_encontrados_suspeitos` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_13` FOREIGN KEY (`id_ocorrencia`) REFERENCES `sinais_sintomas` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_14` FOREIGN KEY (`id_ocorrencia`) REFERENCES `sinais_vitais` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_15` FOREIGN KEY (`id_ocorrencia`) REFERENCES `vitima_era` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_16` FOREIGN KEY (`id_ocorrencia`) REFERENCES `materias_utilizados_deixados_hospital` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_17` FOREIGN KEY (`id_ocorrencia`) REFERENCES `materias_utilizados_descartaveis` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_18` FOREIGN KEY (`id_ocorrencia`) REFERENCES `procedimento_efetuado` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_19` FOREIGN KEY (`id_ocorrencia`) REFERENCES `info_paciente` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_2` FOREIGN KEY (`id_ocorrencia`) REFERENCES `anamnses_gestacional` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_3` FOREIGN KEY (`id_ocorrencia`) REFERENCES `avalicao_da_cinematica` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_4` FOREIGN KEY (`id_ocorrencia`) REFERENCES `cadastro` (`id_cadastro`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_5` FOREIGN KEY (`id_ocorrencia`) REFERENCES `características` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_6` FOREIGN KEY (`id_ocorrencia`) REFERENCES `decisao_transporte` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_7` FOREIGN KEY (`id_ocorrencia`) REFERENCES `formas_de_conducao` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_8` FOREIGN KEY (`id_ocorrencia`) REFERENCES `glasgow` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocorrencia_ibfk_9` FOREIGN KEY (`id_ocorrencia`) REFERENCES `localizacao_do_trauma` (`id_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
