<?php
session_start();

// Verifica se o usuário está logado e tem permissão (status 2 OU 10)
if (!isset($_SESSION['user']) || ($_SESSION['status'] != 2 && $_SESSION['status'] != 10 && $_SESSION['status'] != 11)) {
    // Se não estiver logado ou não tiver permissão, redireciona para a página de login
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>São Miguel-ADM</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/footer/Footer-Dark-icons.css">
    <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements-custom.css">
    <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements.css">
    <link rel="stylesheet" href="assets/css/tela-login/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark bg-opacity-50 py-3 nav-mobile" data-bs-theme="dark" style="backdrop-filter: opacity(1);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img id="logo" data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="300" src="assets/img/logo.png"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-6"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-6">
                <div class="d-md-none my-3">
                    <a id="btn-logout" class="btn btn-sm btn-info d-xl-flex align-items-xl-center" role="button" href="logout.php">SAIR</a>
                    <a id="btn-logout" class="btn btn-sm btn-secondary d-xl-flex align-items-xl-center" role="button" href="deshboard-trafego.php">Deshboard</a>
                    <a class="btn btn-sm btn-primary" role="button" href="solicitacoes.php" style="font-family: Poppins, sans-serif;">Relatar problemas</a>
                </div>
            </div>
            <div class="d-none d-md-block"><a class="btn btn-primary" role="button" href="solicitacoes.php" style="font-family: Poppins, sans-serif;">Relatar problemas</a></div>
        </div>
    </nav>

    <div class="container-logout Front-desk">
        <div class="container container-logout-content">
            <div class="font-monospace d-flex justify-content-between container-logout-values">
                <p class="font-monospace d-xl-flex" id="text-logout" style="height: auto;">Bem vindo, <?php echo $_SESSION['user']; ?>! você está logado em Deshboard - TRÁFEGO</p><a id="btn-logout" class="btn btn-info d-xl-flex align-items-xl-center" role="button" href="logout.php">SAIR</a>
            </div>
        </div>
    </div>
    <div class="d-flex" id="container-principal">
        <div class="container-menu">
            <div id="title-menu"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-video-fill fs-2">
                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z"></path>
                </svg>
                <h4>Deshboard</h4>
                <p class="fs-6">TRÁFEGO</p>
                <div style="border-bottom-width: 2px;border-bottom-style: solid;"></div>
                <div class="d-xl-flex justify-content-xl-center section-menu">
                    <div class="d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between align-items-xl-center justify-content-xxl-between itens-menu"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-folder-minus fs-4" style="color: rgb(231,231,239);">
                            <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"></path>
                            <path d="M11 11.5a.5.5 0 0 1 .5-.5h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1-.5-.5"></path>
                        </svg><a class="fs-6 link-light menu-link" href="painel.php">Painel</a></div>
                </div>
                <div class="d-xl-flex justify-content-xl-center section-menu">
                    <div class="d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between align-items-xl-center justify-content-xxl-between itens-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-4" style="color: rgb(231,231,239);">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"></path>
                        </svg><a class="fs-6 link-light menu-link" href="deshboard-trafego.php">Desch</a></div>
                </div>
                <div class="d-xl-flex justify-content-xl-center section-menu">
                    <div class="d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between align-items-xl-center justify-content-xxl-between itens-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-4" style="color: rgb(231,231,239);">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"></path>
                        </svg><a class="fs-6 link-light menu-link" href="#">Relatório</a></div>
                </div>
                <div class="d-xl-flex justify-content-xl-center section-menu">
                    <div class="d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between align-items-xl-center justify-content-xxl-between itens-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-4" style="color: rgb(231,231,239);">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"></path>
                        </svg><a class="fs-6 link-light menu-link" href="#">Evasão</a></div>
                </div>
                <div>
                
            </div>
        </div>
    </div>
        <div class="container-dados" style="border-width: 1px;border-style: solid;">
            <div class="table-responsive border rounded-0 border-secondary" style="height: 100%;width: 100%;background: #3a5774;">

                <?php
                    // Verifica se o ID da ocorrência foi passado na URL
                    if (isset($_GET['id'])) {
                        $id_ocorrencia = $_GET['id'];

                        // Conecta ao banco de dados
                        $conexao = mysqli_connect("localhost", "u219851065_admin", "Xavier364074$", "u219851065_smiguel");

                        // Prepara e executa a consulta para obter os detalhes da ocorrência com base no ID
                        $consulta_sql = "SELECT * FROM u219851065_smiguel.ocorrencia_trafego WHERE id = $id_ocorrencia";
                        $resultado_consulta = mysqli_query($conexao, $consulta_sql);

                        // Verifica se a consulta retornou resultados
                        if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
                            // Recupera os detalhes da ocorrência
                            $detalhes_ocorrencia = mysqli_fetch_assoc($resultado_consulta);
                            // Aqui você pode exibir os detalhes da ocorrência dentro de uma caixa de texto
                            echo "<div class='container detalhes-ocorrencia'>";
                            echo "<h1 class='mt-4 detalhes'>Detalhes da Ocorrência:</h1>";
                            echo "<div class='row my-4' style='color: #adb5bd;'>";
                            echo "<div class='col-4 detalhes-info-1' style='border-right: solid 1px #6c757d;'>";
                            echo "<p><strong>ID Ocorrência:</strong> " . $detalhes_ocorrencia['id'] . "</p>";
                            echo "<p><strong>Data:</strong> " . $detalhes_ocorrencia['data'] . "</p>";
                            echo "<p><strong>Horário:</strong> " . $detalhes_ocorrencia['horario'] . "</p>";

                            // Constrói o caminho do arquivo de vídeo
                            $caminho_arquivo = "../bkp/_saomigueldeilheus/videos/{$detalhes_ocorrencia['video']}";

                            echo "<div class='d-flex'>";
                            echo "<p><strong>Vídeo:</strong></p>";
                            // Adiciona um link para download do vídeo
                            echo "<a class='mt-1 mx-3 link-warning' href='download_videoTr.php?video={$detalhes_ocorrencia['id']}'>Vídeo-1</a>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='col-8 detalhes-info-2'>";
                            echo "<p><strong>Motorista:</strong> " . $detalhes_ocorrencia['motorista'] . "</p>";
                            echo "<p><strong>Ocorrência:</strong> " . $detalhes_ocorrencia['ocorrencia'] . "</p>";
                            echo "<p class='text-wrap w-100'><strong>Descrição:</strong> " . $detalhes_ocorrencia['descricao'] . "</p>";
                            echo "<p><strong>Ação:</strong> " . $detalhes_ocorrencia['acao'] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";

                            // Adiciona uma linha separadora
                            echo "<div style='border-top: 1px solid #6c757d;'></div>";
                            
                            // Adicionar um formulário para enviar as informações do motorista, ação e observações
                            echo "<div class='container p-3'>";
                            echo "<form action='atualizaTr.php' method='post'>";
                            
                            // Continuação do formulário...

                            
                            // Div para o campo de seleção de motorista
                            echo "<div class='row my-4'>";
                            echo "<div class='col-6 select-group'>";
                            echo "<p for='motorista'></p>";
                            echo "<select class='form-select' name='motorista' id='motorista'>";
                            echo "<option value=''>Informe o Motorista</option>";
                            // Exemplo de opções de motoristas
                            echo "<option value='0054'>54 - MILTON DA CONCEICAO MENDES</option>";
                            echo "<option value='0257'>257 - WILTON COSTA DA SILVA</option>";
                            echo "<option value='0341'>341 - WILSON CONCEICAO PEREIRA</option>";
                            echo "<option value='0350'>350 - MARTIAL MENEZES DA ANUNCIACAO</option>";
                            echo "<option value='0366'>366 - JOSE LEANDRO BRITO</option>";
                            echo "<option value='0511'>511 - JOSE DOS SANTOS ANDRADE</option>";
                            echo "<option value='0542'>542 - VALDECK DOS SANTOS CELIS</option>";
                            echo "<option value='0558'>558 - ANTONIO MARCOS SANTOS DE JESUS</option>";
                            echo "<option value='0558'>634 - EROTILDES DA SILVA MIRANDA</option>";
                            echo "<option value='0668'>668 - MARCILIO DE ALMEIDA BARROS</option>";
                            echo "<option value='0670'>670 - ANTONIO CARLOS GOMES DA SILVA</option>";
                            echo "<option value='0691'>691 - GRIMALDO ALVES FAGUNDES</option>";
                            echo "<option value='0691'>691 - GRIMALDO ALVES FAGUNDES</option>";
                            echo "<option value='0730'>730 - MARCELO OTAVIO MAYER PEROTTI</option>";
                            echo "<option value='0779'>779 - JAIRO FREIRE SANTANA</option>";
                            echo "<option value='0783'>783 - GINELVAN SANTOS DE MATOS</option>";
                            echo "<option value='0872'>872 - RAIMUNDO PEREIRA DOS SANTOS</option>";
                            echo "<option value='0931'>931 - JOSE SANTOS DA SILVA</option>";
                            echo "<option value='0945'>945 - ANDREIA FERREIRA MATOS</option>";
                            echo "<option value='0954'>954 - EDUARDO RIBEIRO DOS SANTOS</option>";
                            echo "<option value='1052'>1052 - JOSE CARLOS SANTOS DA SILVA</option>";
                            echo "<option value='1067'>1067 - JOSE DOMINGOS COSTA</option>";
                            echo "<option value='1072'>1072 - JOSE RENATO DE SOUZA SILVA</option>";
                            echo "<option value='1158'>1158 - AURINO OLIVEIRA SANTOS</option>";
                            echo "<option value='1160'>1160 - EDVANDO RAIMUNDO DOS SANTOS</option>";
                            echo "<option value='1165'>1165 - ANTONIO SANTOS DE JESUS</option>";
                            echo "<option value='1169'>1169 - ALDO NASCIMENTO LEITAO</option>";
                            echo "<option value='1211'>1211 - MARCIO SANTOS DE JESUS</option>";
                            echo "<option value='1239'>1239 - ALEX SANDRO RIBEIRO DOS SANTOS</option>";
                            echo "<option value='1267'>1267 - JORGE JOSE LOPES GOES</option>";
                            echo "<option value='1269'>1269 - MOISES COSTA DOS SANTOS</option>";
                            echo "<option value='1270'>1270 - EDUARDO LIMA DOS SANTOS</option>";
                            echo "<option value='1273'>1273 - JOSE NILTON DE JESUS SOUSA</option>";
                            echo "<option value='1286'>1286 - ADAILTON FELIX DOS SANTOS</option>";
                            echo "<option value='1290'>1290 - VALDIR DE SOUZA</option>";
                            echo "<option value='1309'>1309 - ILDEVAN DEMETRIO DOS SANTOS</option>";
                            echo "<option value='1338'>1338 - NILSON LEANDRO BRITO</option>";
                            echo "<option value='1339'>1339 - DAVID DE JESUS SANTIAGO</option>";
                            echo "<option value='1341'>1341 - LUIZ CARLOS DA SILVA SANTO</option>";
                            echo "<option value='1359'>1359 - PEDRO NASCIMENTO DA PAIXAO</option>";
                            echo "<option value='1411'>1411 - JOSE HAMILTON NINCK DOS SANTOS</option>";
                            echo "<option value='1425'>1425 - WALFREDO JOSE DE SANTANA NETO</option>";
                            echo "<option value='1449'>1449 - JANILDO RODRIGUES DA SILVA</option>";
                            echo "<option value='1486'>1486 - JOSIAS DA COSTA SILVA</option>";
                            echo "<option value='1489'>1489 - NADSON SILVA COSTA</option>";
                            echo "<option value='1502'>1502 - EDNALDO SILVA SANTOS</option>";
                            echo "<option value='1508'>1508 - JOSE RAIMUNDO VIANA SANTOS</option>";
                            echo "<option value='1509'>1509 - AGNALDO SOUZA DA COSTA</option>";
                            echo "<option value='1518'>1518 - GIVALDO SANTOS DE MATOS</option>";
                            echo "<option value='1555'>1555 - JOSE MESSIAS SANTOS SOUZA</option>";
                            echo "<option value='1589'>1589 - ENOCK SILVA SOUZA</option>";
                            echo "<option value='1594'>1594 - JOSE DOMINGOS DA PAIXAO NASCIMENTO</option>";
                            echo "<option value='1598'>1598 - IDELMAR SANTOS LIMA</option>";
                            echo "<option value='1604'>1604 - ALEXANDRE PEREIRA DOS SANTOS</option>";
                            echo "<option value='1622'>1622 - DANILO BOMFIM DE OLIVEIRA</option>";
                            echo "<option value='1633'>1633 - JOSE NILTON RIBEIRO ALVES</option>";
                            echo "<option value='1658'>1658 - WALACE ROCHA DOS SANTOS</option>";
                            echo "<option value='1683'>1683 - CARLOS ALBERTO DA HORA SANTOS</option>";
                            echo "<option value='1695'>1695 - AECIO DE ASSUNCAO BOMFIM</option>";
                            echo "<option value='1696'>1696 - JOSE ROBERTO DOS SANTOS VIDAL</option>";
                            echo "<option value='1706'>1706 - JOSEMAR DE OLIVEIRA SANTOS</option>";
                            echo "<option value='1709'>1709 - CRISPINIANO NINCK DOS SANTOS</option>";
                            echo "<option value='1739'>1739 - CLAUDIO SENA DA SILVA</option>";
                            echo "<option value='1741'>1741 - VALDIVINO NASCIMENTO DOS SANTOS</option>";
                            echo "<option value='1788'>1788 - NEILTON FERREIRA DE OLIVEIRA</option>";
                            echo "<option value='1791'>1791 - JOCEMIR REIS SANTOS</option>";
                            echo "<option value='1793'>1793 - ANDERSON BORGES DOS SANTOS</option>";
                            echo "<option value='1808'>1808 - JAIME DE ARAUJO PACHECO</option>";
                            echo "<option value='1810'>1810 - BRUNO LEONARDO DA SILVA INACIO</option>";
                            echo "<option value='1814'>1814 - ALAN SENA SILVA</option>";
                            echo "<option value='1841'>1841 - AILTON ANTONIO DOS SANTOS FILHO</option>";
                            echo "<option value='1876'>1876 - ROBERTO OLIVEIRA SANTOS</option>";
                            echo "<option value='1882'>1882 - RONALDO CONCEICAO DOS SANTOS</option>";
                            echo "<option value='1891'>1891 - JOSE MARCOS NASCIMENTO DE SOUZA</option>";
                            echo "<option value='1894'>1894 - CARLOS EDUARDO SILVA DOS SANTOS</option>";
                            echo "<option value='1913'>1913 - GEDEON BARBOSA DE MELO</option>";
                            echo "<option value='1925'>1925 - ANDERSON FELIPE LONGO SANTOS</option>";
                            echo "<option value='1926'>1926 - FABRICIO LESSA DOS SANTOS</option>";
                            echo "<option value='1955'>1955 - LINDOMAR BISPO DOS SANTOS</option>";
                            echo "<option value='1956'>1956 - ERIVALDO DOS SANTOS DE OLIVEIRA</option>";
                            echo "<option value='1958'>1958 - ELTON ALMEIDA DA SILVA</option>";
                            echo "<option value='1959'>1959 - OSMUNDO PEREIRA SANTOS</option>";
                            echo "<option value='1963'>1963 - JODMARC SILVA DOS SANTOS</option>";
                            echo "<option value='1965'>1965 - ANDRE LOPES SILVA</option>";
                            echo "<option value='1966'>1966 - GILDEVAN SILVA SANTOS</option>";
                            echo "<option value='1967'>1967 - GILMAR DA SILVA PEREIRA</option>";
                            echo "<option value='1968'>1968 - MAICON SILVA SOUZA</option>";
                            echo "<option value='1969'>1969 - JAILTON SILVA LIMA</option>";
                            echo "<option value='1973'>1973 - ANDERSON SANTOS OLIVEIRA</option>";
                            echo "<option value='1974'>1974 - ROGERIO FELIX RIBEIRO</option>";
                            echo "<option value='1975'>1975 - REINALDO DA SILVA SANTOS</option>";
                            echo "<option value='1976'>1976 - LEONARDO SANTOS DE OLIVEIRA</option>";
                            echo "<option value='1980'>1980 - MILKSON ALMEIDA SANTOS</option>";
                            echo "<option value='1981'>1981 - LUCAS DOS SANTOS TEIXEIRA</option>";
                            echo "<option value='1982'>1982 - GILMAR SOUZA TEIXEIRA</option>";
                            echo "<option value='1983'>1983 - JEFFESON CARDOSO DO ROSARIO</option>";
                            echo "<option value='1987'>1987 - COSME DIAS DE OLIVEIRA</option>";
                            echo "<option value='1988'>1988 - LEANDRO CERQUEIRA MEIRELES</option>";
                            echo "<option value='2002'>2002 - LUCIANO VIEIRA COSTA</option>";
                            echo "<option value='2003'>2003 - CLAUDIO SANTOS DA SILVA</option>";
                            echo "<option value='2009'>2009 - IVANILDO RODRIGUES DE JESUS</option>";
                            echo "<option value='2010'>2010 - CARLOS HENRIQUE SILVA SANTOS</option>";
                            echo "<option value='2011'>2011 - WILLIAN SANTOS PORTELA</option>";
                            echo "<option value='2012'>2012 - LEUANDSON PACHECO DOS SANTOS</option>";
                            // Adicione mais opções conforme necessário
                            echo "</select>";
                            
                            // Div para o campo de seleção de ação
                            echo "<p for='acao'></p>";
                            echo "<select class='form-select' name='acao' id='acao'>";
                            echo "<option value=''>Informe a Ação tomada</option>";
                            echo "<option value='Advertência'>Advertência</option>";
                            echo "<option value='Cobrança e Orientação'>Cobrança e Orientação</option>";
                            echo "<option value='Cobrança e Advertência'>Cobrança e Advertência</option>";
                            echo "<option value='Cobrança e Suspenção 1 DIA'>Cobrança e Suspenção 1 DIA</option>";
                            echo "<option value='Cobrança e Suspenção 3 DIA'>Cobrança e Suspenção 3 DIA</option>";
                            echo "<option value='Desconsiderar'>Desconsiderar</option>";
                            echo "<option value='Fazer Reparo'>Fazer Reparo</option>";
                            echo "<option value='Orientação'>Orientação</option>";
                            echo "<option value='Suspenção um dia'>Suspenção um dia</option>";
                            echo "<option value='Suspenção três dias'>Suspenção três dias</option>";
                            // Adicione mais opções conforme necessário
                            echo "</select>";
                            echo "</div>";
                            echo "<div class='col-6 mt-3 Front-desk'>";
                            echo "<p for='acao' style='font-size: 1.3em;'>1) Preencha os campos em aberto da ocorrência.</p>";
                            echo "<p for='acao' style='font-size: 1.3em;'>2) Clique no botão 'ATRUALIZAR E FINALIZAR' para que os dados sejam registrados e finalizados.</p>";
                            echo "</div>";
                            echo "</div>";
                            
                            // Div para o campo de texto de observações
                            echo "<div class='text-center'>";
                            echo "<p for='observacoes'>Observações:</p>";
                            echo "<div class='row'>";
                            echo "<div class='col-2'>";
                            echo "</div>";
                            echo "<div class='col-8'>";
                            echo "<textarea class='form-control' name='observacoes' id='observacoes' rows='4' cols='50'></textarea>";
                            echo "</div>";
                            echo "<div class='col-2'>";
                            echo "</div>";
                            echo "</div>";
                            
                            // Adicionar um campo oculto para enviar o ID da ocorrência
                            echo "<input type='hidden' name='id_ocorrencia' value='" . $id_ocorrencia . "'>";
                            
                             // Botão de envio do formulário
                            echo "<input class='btn btn-outline-danger mt-3' type='submit' value='>>> ATUALIZAR e FINALIZAR <<<'>";
                            echo "</form>";
                            echo "</div>";
                            
                        } else {
                            // Se não houver resultados para o ID especificado, exiba uma mensagem de erro
                            echo "Ocorrência não encontrada.";
                        }

                        // Fecha a conexão com o banco de dados
                        mysqli_close($conexao);
                    } else {
                        // Se o ID da ocorrência não foi passado na URL, redireciona para a página anterior
                        header("Location: pagina_anterior.php"); // Substitua "pagina_anterior.php" pelo nome da página anterior
                        exit();
                    }
                    ?>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>
