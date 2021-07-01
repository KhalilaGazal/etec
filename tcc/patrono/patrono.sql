-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2019 às 04:20
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patrono`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` text,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`, `data_cadastro`) VALUES
(1, 'Nome', 'nome@gmail.com', 'Assunto', 'Teste', '2019-12-06 12:18:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localidade`
--

CREATE TABLE `localidade` (
  `id` int(11) NOT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `preco_min` varchar(255) DEFAULT NULL,
  `preco_max` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `horario` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `localidade`
--

INSERT INTO `localidade` (`id`, `latitude`, `longitude`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `preco_min`, `preco_max`, `nome`, `descricao`, `horario`, `telefone`, `celular`, `email`, `link`, `data_cadastro`) VALUES
(1, '-23.555198', '-46.724651', 'Av. Professor Mello de Morais', '1721', '', 'Butantã', 'São Paulo', 'São Paulo', '05508-030', '0', '0', 'Instituto de Psicologia da USP', 'Os atendimentos e práticas em psicologia do Instituto de Psicologia são públicos, gratuitos e oferecidos à comunidade USP e ao público geral residentes no entorno da universidade, campus Butantã.', '', '(11) 3091-4178', '', '', 'http://www.ip.usp.br/site/servicos-a-comunidade/', '2019-12-05 15:04:15'),
(2, '-23.570182', '-46.639055', 'Rua Apeninos', '595', '', 'Aclimação', 'São Paulo', 'São Paulo', '01533-000', '0', '0', 'Clínica de Psicologia UNIP Vergueiro', 'Triagem: agendamento de horário pelo telefone e triagem pessoalmente.', 'de 2ª a 6ª feira, das 7h às 22h, e sábados, das 8h às 13h', '(11) 3341-4250', '', '', 'https://www.unip.br/presencial/universidade/clinicas/cpa.aspx', '2019-12-05 15:14:55'),
(3, '-23.531281', '-46.563579', 'Rua Antonio de Macedo', '170', '', 'Parque São Jorge', 'São Paulo', 'São Paulo', '03087-010', '0', '0', 'Clínica de Psicologia UNIP Tatuapé', 'Triagem: agendamento de horário pelo telefone e triagem pessoalmente.', '', '(11) 2098-0415', '', '', 'https://www.unip.br/presencial/universidade/clinicas/cpa.aspx', '2019-12-05 22:28:29'),
(5, '-23.200998', '-45.892770', 'Av. Dr. Adhemar de Barros', '1010', '', 'Jardim Sao Dimas', 'São José dos Campos', 'São Paulo', '12245-011', '0', '0', 'Clínica de Psicologia UNIP São José dos Campos', 'Triagem: agendamento de horário pelo telefone e triagem pessoalmente.', '', '(12) 3921-5774', '', '', 'https://www.unip.br/presencial/universidade/clinicas/cpa.aspx', '2019-12-05 22:48:56'),
(6, '-23.506774', '-47.469579', 'Rua Gustavo Teixeira', '285', '', 'Jardim Paulistano', 'Sorocaba', 'São Paulo', '18040-323', '0', '0', 'Clínica de Psicologia UNIP Sorocaba', 'Triagem: agendamento de horário pelo telefone e triagem pessoalmente.', '', '(15) 3221-7970', '', '', 'https://www.unip.br/presencial/universidade/clinicas/cpa.aspx', '2019-12-05 22:52:04'),
(7, '-23.524518', '-46.682958', 'Rua Carlos Vicari', '124', '', 'Pompéia', 'São Paulo', 'São Paulo', '05033-070', '0', '0', 'Clínica de Psicologia UNIP Pompeia', 'Triagem: Pessoalmente e agendamento por telefone.', '', '(11) 3865-4282', '', '', 'https://www.unip.br/presencial/universidade/clinicas/cpa.aspx', '2019-12-05 22:56:51'),
(8, '-23.51302570', '-46.60928340', 'Rua Amazonas da Silva', '737', '', 'Vila Guilherme', 'São Paulo', 'São Paulo', '02051-001', '0', '0', 'Clínica de Psicologia UNIP Norte', 'Triagem: agendamento de horário pelo telefone e triagem pessoalmente.', 'de 2ª a 6ª feira, das 13h às 21h, e sábado, das 9h às 13h', '(11) 2790-1550', '', '', 'https://www.unip.br/presencial/universidade/clinicas/cpa.aspx', '2019-12-06 12:23:12'),
(9, '-23.495615', '-46.843189', 'Alameda Amazonas', '458', '', 'Alphaville', 'Barueri', 'São Paulo', '06454-070', '0', '0', 'Clínica de Psicologia UNIP Alphaville', 'Triagem: agendamento de horário pelo telefone.', '', '(11) 4191-1078', '', '', 'https://www.unip.br/presencial/universidade/clinicas/cpa.aspx', '2019-12-06 12:31:31'),
(10, '-23.55042715', '-46.59960758', 'Rua Taquari', '549', '', 'Mooca', 'São Paulo', 'São Paulo', '03166-000', '0', '0', 'CAPS Infanto Juvenil Mooca', '', '', '(11) 2694-4628', '', '', '', '2019-12-06 12:34:46'),
(11, '-23.547582', '-46.597178', 'Rua Jaibarás', '251', '', 'Belenzinho', 'São Paulo', 'São Paulo', '03163-040', '0', '0', 'CAPS AD II Mooca', '', 'de 2ª a 6ª feira, das 7h às 18h30min', '(11) 2694-6364', '', '', '', '2019-12-06 12:41:37'),
(12, '-22.930933', '-45.463711', 'Rua Major José dos Santos Moreira', '28', '', 'Vila Rica', 'Pindamonhangaba', 'São Paulo', '12422-370', '0', '0', 'Caps AD Pindamonhangaba', '', 'de 2ª a 6ª feira, das 8h às 17h', '', '', '', '', '2019-12-06 12:57:00'),
(13, '-15.74190875', '-47.90283219', 'W5 Norte / SGAN 916', 'Lote 01', '', 'Setor Noroeste', 'Brasília', 'Distrito Federal', '70770-535', '0', '0', 'Universidade Católica de Brasília', '', '', '(61) 3356-9000', '', '', 'https://ucb.catolica.edu.br/', '2019-12-06 13:03:33'),
(14, '-15.76439490', '-47.85603918', 'Estrada Parque das Nações', 's/n', '', 'Asa Norte', 'Brasília', 'Distrito Federal', '70910-900', '0', '0', 'Universidade de Brasília', 'O Centro de Atendimento e Estudos Psicológicos (CAEP) é um centro vinculado ao Instituto de Psicologia (IP) da Universidade de Brasília (UnB) e tem como função apoiar os Departamentos na realização das atividades práticas necessárias à formação profissional e acadêmica dos alunos de graduação e de pós-graduação, em especial estágios supervisionados, programas de extensão e de pesquisa, por meio da prestação de serviço psicológicos à comunidade.', '', '(61) 3107-9102', '', 'asscaep@unb.br', 'http://www.ip.unb.br/index.php?option=com_content&view=article&id=462&Itemid=470', '2019-12-08 23:39:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `descricao` text,
  `titulo_link` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descricao_imagem` text,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id`, `titulo`, `id_categoria`, `descricao`, `titulo_link`, `link`, `descricao_imagem`, `data_cadastro`) VALUES
(1, '', 13, 'O CVV – Centro de Valorização da Vida realiza apoio emocional e prevenção do suicídio, atendendo voluntária e gratuitamente todas as pessoas que querem e precisam conversar, sob total sigilo por telefone, email e chat 24 horas todos os dias. Ligue 188.', 'Centro de Valorização da Vida (CVV)', 'https://www.cvv.org.br/', '', '2019-12-05 12:49:43'),
(2, '', 13, 'Uma iniciativa independente contra o suicídio, dedicada a ajudar pessoas que se veem perdidas na depressão, automutilação, pensamentos suicidas e conflitos interiores.', 'SOS Jovem', 'http://sosjovem.com.br/', '', '2019-12-05 12:52:09'),
(3, '', 14, '', 'Encontre locais com atendimento gratuito ou de baixo custo!', '/patrono/index.php', '', '2019-12-05 12:52:45'),
(4, '', 12, '', 'Ao público em geral', 'https://www.cvv.org.br/wp-content/uploads/2017/09/folheto-popula-o.pdf', '', '2019-12-05 12:55:12'),
(5, '', 12, '', 'Para professores e educadores', 'https://www.who.int/mental_health/prevention/suicide/en/suicideprev_educ_port.pdf', '', '2019-12-05 12:55:59'),
(6, '', 12, '', 'Para pais e educadores', 'https://www.cvv.org.br/wp-content/uploads/2017/05/guia_CVV_pais_educadores_DIGITAL.pdf', '', '2019-12-05 12:56:40'),
(7, '', 11, '', 'Falando abertamente sobre suicídio', 'https://www.cvv.org.br/wp-content/uploads/2017/05/af2_cvv_cartilha-suicidio_a4-com-188.pdf', '', '2019-12-05 12:58:05'),
(8, '', 12, '', 'Para profissionais da mídia', 'https://www.who.int/mental_health/prevention/suicide/en/suicideprev_media_port.pdf', '', '2019-12-05 13:03:05'),
(9, '', 11, '', 'Como falar de forma segura sobre suicídio', 'https://vitaalere.com.br/download/como-falar-de-forma-segura-sobre-suicidio/?wpdmdl=29010&refresh=5d77ff988c4921568145304', '', '2019-12-05 13:13:10'),
(10, '', 9, '', 'Prevenção do suicídio: sinais para saber e agir', 'http://www.saude.gov.br/saude-de-a-z/suicidio', '', '2019-12-05 13:14:22'),
(11, '', 9, '', 'Centro de Atenção Psicossocial (CAPS) ', 'http://www.saude.gov.br/noticias/693-acoes-e-programas/41146-centro-de-atencao-psicossocial-caps', '', '2019-12-05 13:19:40'),
(12, '', 9, '', 'Centro de Valorização da Vida (CVV)', 'https://www.cvv.org.br/', '', '2019-12-05 13:21:06'),
(13, '', 9, '', 'SOS Jovem', 'http://sosjovem.com.br/', '', '2019-12-05 13:21:26'),
(14, '', 9, '', 'Instituto Vita Alere de Prevenção e Posvenção do Suicídio', 'https://vitaalere.com.br/', '', '2019-12-05 13:21:53'),
(15, '', 10, '', 'Prevenção Suicídio', 'https://www.prevencaosuicidio.blog.br/', '', '2019-12-05 13:24:41'),
(16, '', 7, 'No Brasil, são mais de 11 mil casos anualmente, e muitas dúvidas surgem quando nos vemos na necessidade de ajudar uma pessoa que está pensando em suicídio.', 'Como ajudar uma pessoa que está pensando em suicídio?', 'https://drauziovarella.uol.com.br/reportagens/ajudar-uma-pessoa-que-esta-pensando-em-suicidio/', '', '2019-12-05 13:25:32'),
(17, '', 7, 'Falar sobre suicídio é a melhor forma de prevenção: veja como ajudar quem pensa em cometê-lo.', 'É preciso quebrar o tabu', 'https://www.uol.com.br/vivabem/especiais/suicidio/index.htm#e-preciso-quebrar-o-tabu', '', '2019-12-05 13:28:29'),
(36, '', 10, '', 'CVV', 'https://www.cvv.org.br/blog/', '', '2019-12-05 14:00:43'),
(37, '', 10, '', 'SOS Jovem', 'http://sosjovem.com.br/blog/', '', '2019-12-05 14:03:05'),
(38, '', 8, 'Lançado em 2000, O demônio do meio-dia continua sendo uma referência sobre a depressão, para leigos e especialistas. Com rara humanidade, sabedoria e erudição, o premiado autor Andrew Solomon convida o leitor a uma jornada sem precedentes pelos meandros de um dos temas mais espinhosos e complexos de nossos dias.', 'O demônio do meio-dia: Uma anatomia da depressão', 'https://www.amazon.com.br/dp/B00M25ZZ7O', 'Capa do livro O demônio do meio-dia: Uma anatomia da depressão', '2019-12-05 14:09:33'),
(39, '', 9, '', 'Associação Brasileira de Saúde Mental', 'https://www.abrasme.org.br/', '', '2019-12-05 14:12:45'),
(40, '', 8, 'Uma seleção inédita de textos do extraordinário autor de O demônio do meio-dia e Longe da árvore, que discutem com sensibilidade e empatia os vários aspectos do suicídio e da depressão.\r\nO demônio do meio-dia foi um livro divisor de águas sobre a depressão. Seu autor, Andrew Solomon, tratou de forma singular e inédita sobre esse mal que afeta milhões de pessoas no mundo, mas que, muitas vezes, ainda não é tratado com a seriedade devida. O suicídio é o extremo a que a doença pode levar, e é muito mais comum do que imaginamos: a cada quarenta segundos, alguém tira a própria vida.', 'Um crime da solidão: Reflexões sobre o suicídio', 'https://www.amazon.com.br/Um-crime-solid%C3%A3o-Reflex%C3%B5es-suic%C3%ADdio-ebook/dp/B07JC12CLS', 'Capa do livro Um crime da solidão: Reflexões sobre o suicídio', '2019-12-05 14:15:23'),
(41, '', 8, 'Um livro motivador da aclamada e premiada criadora e produtora executiva de grandes sucessos televisivos. “Você nunca diz “sim” para nada.” Foram essas seis palavras, ditas pela irmã de Shonda durante uma ceia de Ação de Graças, que levaram a autora a repensar a maneira como estava levando sua vida. Apesar da timidez e da introversão, Shonda decidiu encarar o desafio de passar um ano dizendo “sim” para as oportunidades que surgiam. Os “sins” iam desde cuidar melhor de sua saúde até aceitar convites para participar de talk shows e discursos em público. Além disso, Shonda deu um difícil passo: dizer sim ao amor próprio e ao seu empoderamento.', 'O ano em que disse sim', 'https://www.amazon.com.br/ano-que-disse-sim-ebook/dp/B01IW2KLF6', 'Capa do livro O ano em que disse sim', '2019-12-05 14:20:22'),
(42, '', 5, '', '', 'https://www.youtube.com/watch?v=gJBlY3opAVU', '', '2019-12-05 14:25:09'),
(43, '', 5, '', '', 'https://www.youtube.com/watch?v=aQqWTXPbg-4', '', '2019-12-05 14:26:20'),
(44, '', 5, '', '', 'https://www.youtube.com/watch?v=I2iv6SVZcz8', '', '2019-12-05 14:26:52'),
(45, '', 5, '', '', 'https://www.youtube.com/watch?v=MOZXI54mRao', '', '2019-12-05 14:27:09'),
(46, '', 5, '', '', 'https://www.youtube.com/watch?v=S4C-3k7Capg', '', '2019-12-05 14:31:10'),
(50, '', 2, 'Amanda Ramalho apresenta o Esquizofrenoias, um programa sobre desgraçamentos mentais e muita informação sobre saúde mental. Na primeira temporada, ela recebe convidados como Ronald Rios, Daiana Garbin, Luciana Vendramini, Alexandre Nickel e outros.', 'Esquizofrenoias', 'https://open.spotify.com/show/2g1dO4bAiWtx5Bdip8gQLk', '', '2019-12-05 14:40:50'),
(51, '', 2, 'Entrementes é o podcast do Portal Drauzio Varella sobre questões psiquiátricas, criado para abordar de forma transparente um universo cercado de estigmas.', 'Entrementes', 'https://open.spotify.com/show/7c9GwDLbj0Su90btBg9qkA', '', '2019-12-05 14:45:23'),
(52, '', 9, '', '#EuEstou', 'https://www.facebook.com/EuEstou', '', '2019-12-05 14:46:31'),
(53, '', 7, 'Para te ajudar nas horas mais difíceis.', '76 posts do BuzzFeed para cuidar da sua saúde mental', 'https://www.buzzfeed.com/br/davirocha/posts-buzzfeed-saude-mental', '', '2019-12-05 15:32:50'),
(54, '', 7, 'Sobreviventes de tentativas de suicídio usam as redes sociais para relatar como suas vidas melhoraram após a recuperação. Entre os relatos, pessoas que conquistaram empregos dos sonhos, encontraram a sua alma gêmea ou apenas descobriram que é possível sim encontrar prazer nas pequenas coisas da vida.', 'Sobreviventes de tentativas de suicídio compartilham quão feliz sua vida se tornou enfim', 'https://www.hypeness.com.br/2019/10/sobreviventes-de-tentativas-de-suicidio-compartilham-quao-feliz-sua-vida-se-tornou-enfim/', '', '2019-12-05 15:48:21'),
(55, '', 3, 'As Vantagens de Ser Invisível é um filme de drama norte-americano de 2012, escrito e dirigido por Stephen Chbosky, baseado no romance de mesmo nome de 1999 de Chbosky. Logan Lerman estrela como um adolescente chamado Charlie, que escreve para um amigo sem nome, e essas epístolas narram suas provações, tribulações e triunfos enquanto ele passa pelo primeiro ano do ensino médio. O filme retrata sua depressão e ansiedade enquanto ele percorre sua jornada no ensino médio, fazendo novos amigos. ', 'As Vantagens de Ser Invisível', 'https://play.google.com/store/movies/details/As_vantagens_de_ser_invis%C3%ADvel?id=lrQ_qiqM-L0&hl=pt_BR', 'Pôster do filme As Vantagens de Ser Invisível', '2019-12-05 16:01:25'),
(56, '', 4, 'Um grupo de estudantes do ensino médio lida com diferentes situações típicas da idade como drogas, sexo, busca pela identidade, traumas, comportamento nas redes sociais e amizade.', 'Euphoria', 'https://www.hbobrasil.com/modal/series/euphoria/14795/TTL897452', 'Poster da série Euphoria', '2019-12-05 16:07:20'),
(57, '', 4, '13 Reasons Why é uma série de televisão americana baseada no livro Thirteen Reasons Why, de Jay Asher, e adaptado por Brian Yorkey para a Netflix. A série gira em torno de uma estudante que se mata após uma série de falhas culminantes, provocadas por indivíduos selecionados dentro de sua escola. Uma caixa de cassetes gravadas por Hannah antes de se suicidar relata treze motivos pelas quais ela tirou sua própria vida. ', '13 Reasons Why', 'https://www.netflix.com/br/title/80117470', 'Poster da série 13 Reasons Why', '2019-12-05 16:09:49'),
(58, '', 3, 'Crescer pode ser uma jornada turbulenta, e com Riley não é diferente. Conforme ela e suas emoções, Alegria, Medo, Raiva, Nojinho e Tristeza se esforçam para adaptar-se à uma nova vida, uma enorme agitação toma conta do centro de controle em sua mente. Embora Alegria, a principal e mais importante emoção de Riley, tente se manter positiva, as emoções entram em conflitos, às vezes muito divertidos, sobre qual a melhor maneira de viver em uma nova cidade, casa e escola.', 'Divertida Mente', 'https://www.netflix.com/br/title/80030684', 'Poster do filme Divertida Mente', '2019-12-05 16:18:23'),
(59, '', 3, 'Craig de 16 anos de idade estressado com as demandas de ser um adolescente se interna em um clínica de saúde mental, onde aprende mais sobre a vida, o amor e as pressões do amadurecimento. Às vezes, o que se passa na sua cabeça não é tão louco quanto você imagina... essa é uma verdade para Craig, um estressado adolescente que decide se internar numa clínica psiquiátrica por um tempo. Mas, ao contrário do que esperava, o que ele realmente encontra é um problemático mentor, um novo amor e a oportunidade de recomeçar.', 'Se enlouquecer, não se apaixone', 'https://www.netflix.com/br/title/70135879', '', '2019-12-05 16:20:53'),
(60, '', 3, 'Uma jovem de 20 anos sofrendo de anorexia embarca em uma emocionante jornada de autodescoberta em um grupo liderado por um médico pouco convencional.', 'O Mínimo para Viver', 'https://www.netflix.com/br/title/80171659', 'Poster do filme O Mínimo para Viver', '2019-12-05 16:30:27'),
(61, '', 7, '\"No milésimo em que a minha mão soltou da grade, surgiu o arrependimento instantâneo.\"', 'Esse cara pulou da ponte Golden Gate e sobreviveu para contar a história', 'https://www.buzzfeed.com/br/lizzwarner/esse-cara-pulou-da-ponte-golden-gate-e-sobreviveu#.vgJqwd2ge', '', '2019-12-05 21:30:13'),
(62, '', 5, '', '', 'https://www.youtube.com/watch?v=7CIq4mtiamY', '', '2019-12-05 21:31:08'),
(63, '', 7, 'Excesso de referências sobre suicídio tornou o assunto uma \"catarse coletiva\", diz professora ', 'Suicídio: como falar sobre o ato sem promovê-lo', 'https://www.bbc.com/portuguese/geral-39714347', '', '2019-12-05 21:34:43'),
(64, '', 7, 'Yayoi Kusama superou trauma infantil, preconceitos e um transtorno mental antes de se tornar uma sensação mundial', 'Como Yayoi Kusama superou trauma e transtorno mental para se tornar a artista mais vendida no mundo', 'https://www.bbc.com/portuguese/vert-cul-46127953', '', '2019-12-05 21:41:42'),
(65, '', 8, 'Publicado originalmente em 1963, esta edição, com tradução de Chico Mattoso, traz nova capa e desenhos da autora. Lançado semanas antes da morte de Sylvia, o livro é repleto de referências autobiográficas, e a narrativa é inspirada nos acontecimentos do verão de 1952, quando Silvia Plath tentou o suicídio e foi internada em uma clínica psiquiátrica. Esther Greenwood é uma jovem que sai do subúrbio de Boston para trabalhar em uma prestigiosa revista de moda em Nova York. Assim como a protagonista, a autora foi uma estudante com um histórico exemplar que sofreu uma grave depressão. Muitas questões de Esther retratam as preocupações de uma geração pré-revolução sexual, em que as mulheres ainda precisavam escolher se priorizavam a profissão ou a família. Além da elegância da prosa de Plath, o livro extrai sua força da forma corajosa como trata a depressão. Mais que um relato sobre problemas mentais, A redoma de vidro é uma narrativa singular acerca das dores do amadurecimento.', 'A redoma de vidro', 'https://www.amazon.com.br/redoma-vidro-Nova-edição-ebook/dp/B07PR1H8SC/', 'Capa do livro A redoma de vidro', '2019-12-08 23:05:24'),
(67, '', 8, 'Nós passamos a maior parte de nossas vidas pensando no passado e fazendo planos para o futuro. Ignoramos ou negamos o presente e adiamos nossas conquistas para algum dia distante, quando conseguiremos tudo o que desejamos e seremos, finalmente, felizes. Mas, se queremos realmente mudar nossas vidas, precisamos começar neste momento. Essa é a mensagem simples, mas transformadora de Eckhart Tolle: viver no Agora é o melhor caminho para a felicidade e a iluminação. Para compreender a jornada em direção a O Poder do Agora, a primeira coisa a fazer é deixar para trás nossa mente analítica e nosso falso ego. Combinando conceitos do cristianismo, do budismo, do hinduísmo, do taoísmo e de outras tradições espirituais, Tolle elaborou um guia de grande eficiência para a descoberta do nosso potencial interior. Esse livro é um manual prático que nos ensina a tomar consciência dos pensamentos e das emoções que nos impedem de vivenciar plenamente a alegria e a paz que estão dentro de nós mesmos.', 'O Poder do Agora: Um guia para a iluminação espiritual', 'https://www.amazon.com.br/Poder-Agora-guia-iluminação-espiritual-ebook/dp/B00A3D0EF0/', 'Capa do livro O Poder do Agora: Um guia para a iluminação espiritual', '2019-12-08 23:10:55'),
(68, '', 3, 'Pat Solitano Jr. perdeu a sua casa e arruinou o seu casamento. Depois de tratamento médico - mas ainda instável, conhece Tiffany, que causará mudanças na sua vida.', 'O Lado Bom da Vida', 'https://play.google.com/store/movies/details/O_Lado_Bom_da_Vida?id=zAmmr9mH9y4&hl=pt_BR', 'Poster do filme O Lado Bom da Vida', '2019-12-09 00:06:33'),
(69, '', 3, 'Um cientista prova a existência de vida após a morte, causando uma onda de suicídios. Ao mesmo tempo, seu filho se apaixona por uma mulher com uma série de problemas.', 'The Discovery', 'https://www.netflix.com/br/title/80115857', 'Poster do filme The Discovery', '2019-12-09 00:16:51'),
(70, '', 3, 'O fim do mundo está próximo e é anunciado por um homem fantasiado de coelho a Donnie, um adolescente tido como problemático. Aos pais, o psiquiatra diz que o garoto apresenta sintomas de esquizofrenia. Donnie passa a se questionar sobre suas visões, enquanto eventos misteriosos começam a acontecer em sua cidade. ', 'Donnie Darko', 'https://play.google.com/store/movies/details/Donnie_Darko?id=Kl91Xikasi0&hl=pt', 'Poster do filme Donnie Darko', '2019-12-09 00:19:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `material_categoria`
--

CREATE TABLE `material_categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `material_categoria`
--

INSERT INTO `material_categoria` (`id`, `nome`) VALUES
(2, 'Podcast'),
(3, 'Filme'),
(4, 'Série'),
(5, 'Vídeo'),
(7, 'Texto'),
(8, 'Livro'),
(9, 'Link útil'),
(10, 'Blog'),
(11, 'Cartilha'),
(12, 'Manual de prevenção do suicídio'),
(13, 'Atendimento online'),
(14, 'Atendimento presencial'),
(15, 'Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `id_nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `usuario`, `senha`, `data_cadastro`, `id_nivel`) VALUES
(1, 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2019-12-07 06:36:37', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_nivel`
--

CREATE TABLE `usuario_nivel` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_nivel`
--

INSERT INTO `usuario_nivel` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Moderador'),
(3, 'Usuário');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localidade`
--
ALTER TABLE `localidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `material_categoria`
--
ALTER TABLE `material_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nivel` (`id_nivel`);

--
-- Indexes for table `usuario_nivel`
--
ALTER TABLE `usuario_nivel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `localidade`
--
ALTER TABLE `localidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `material_categoria`
--
ALTER TABLE `material_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario_nivel`
--
ALTER TABLE `usuario_nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `material_categoria` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_nivel`) REFERENCES `usuario_nivel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
