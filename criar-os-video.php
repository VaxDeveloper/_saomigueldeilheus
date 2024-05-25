<?php
session_start();

// Verifica se o usuário não está logado
if (!isset($_SESSION['user'])) {
    header("Location: index.php"); // Redireciona para a página de login se não estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>São Miguel-AD</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/footer/Footer-Dark-icons.css">
    <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements-custom.css">
    <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements.css">
    <link rel="stylesheet" href="assets/css/tela-login/Login-with-overlay-image.css">
</head>

<body>
    <div class="container-logout">
        <div class="container container-logout-content">
            <div class="font-monospace d-flex justify-content-between container-logout-values">
                <p class="font-monospace d-xl-flex" id="text-logout" style="height: auto;">Bem vindo, <?php echo $_SESSION['user']; ?>! você está logado em Lançamento - VÍDEO</p><a id="btn-logout" class="btn btn-info d-xl-flex align-items-xl-center" role="button" href="../logout.php">SAIR</a>
            </div>
        </div>
    </div>
    <div id="container-logout"></div>
    <div class="d-flex" id="container-principal">
        <div class="container-menu">
            <div id="title-menu"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                    viewBox="0 0 16 16" class="bi bi-camera-video-fill fs-2">
                    <path fill-rule="evenodd"
                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z">
                    </path>
                </svg>
                <h4>Deshboard</h4>
                <p class="fs-6">CMV</p>
                <div style="border-bottom-width: 2px;border-bottom-style: solid;"></div>
                <div class="d-xl-flex justify-content-xl-center section-menu">
                    <div
                        class="d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between align-items-xl-center justify-content-xxl-between itens-menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-folder-minus fs-4" style="color: rgb(231,231,239);">
                            <path
                                d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z">
                            </path>
                            <path d="M11 11.5a.5.5 0 0 1 .5-.5h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1-.5-.5"></path>
                        </svg><a class="fs-6 link-light menu-link" href="painel.php">Painel</a>
                    </div>
                </div>
                <div class="d-xl-flex justify-content-xl-center section-menu">
                    <div
                        class="d-flex justify-content-sm-between justify-content-md-between justify-content-lg-between align-items-xl-center justify-content-xxl-between itens-menu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                            fill="currentColor" class="fs-4" style="color: rgb(231,231,239);">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M24 32c13.3 0 24 10.7 24 24V408c0 13.3 10.7 24 24 24H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H72c-39.8 0-72-32.2-72-72V56C0 42.7 10.7 32 24 32zM128 136c0-13.3 10.7-24 24-24l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24zm24 72H296c13.3 0 24 10.7 24 24s-10.7 24-24 24H152c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 96H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H152c-13.3 0-24-10.7-24-24s10.7-24 24-24z">
                            </path>
                        </svg><a class="fs-6 link-light menu-link" href="deshboard-video.php">Desh</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-dados">
            <section class="position-relative py-4 py-xl-5">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-9">
                            <div class="card mb-5" style="background: rgba(231,231,239,0.2);">
                                <div class="card-body p-sm-5">
                                    <h3 class="text-center text-light mb-4">Lançamento das Ocorrências</h3>
                                    <form method="post" enctype="multipart/form-data" action="./envia.php">
                                        <div class="d-flex mb-3">
                                            <input class="form-control" type="date" name="data" required>
                                            <input class="form-control input-form-os" type="time" name="horario" required>
                                        </div>
                                        <div class="d-flex mb-3"><select class="form-select" name="motorista">
                                                <optgroup label="Informe o Motorista:">
                                                    <option value="">Informe o motorista:</option>
                                                    <option value="0054">54 - MILTON DA CONCEICAO MENDES</option>
                                                    <option value="0257">257 - WILTON COSTA DA SILVA</option>
                                                    <option value="0341">341 - WILSON CONCEICAO PEREIRA</option>
                                                    <option value="0350">350 - MARTIAL MENEZES DA ANUNCIACAO</option>
                                                    <option value="0366">366 - JOSE LEANDRO BRITO</option>
                                                    <option value="0511">511 - JOSE DOS SANTOS ANDRADE</option>
                                                    <option value="0542">542 - VALDECK DOS SANTOS CELIS</option>
                                                    <option value="0558">558 - ANTONIO MARCOS SANTOS DE JESUS</option>
                                                    <option value="0558">634 - EROTILDES DA SILVA MIRANDA</option>
                                                    <option value="0668">668 - MARCILIO DE ALMEIDA BARROS</option>
                                                    <option value="0670">670 - ANTONIO CARLOS GOMES DA SILVA</option>
                                                    <option value="0691">691 - GRIMALDO ALVES FAGUNDES</option>
                                                    <option value="0691">691 - GRIMALDO ALVES FAGUNDES</option>
                                                    <option value="0730">730 - MARCELO OTAVIO MAYER PEROTTI</option>
                                                    <option value="0779">779 - JAIRO FREIRE SANTANA</option>
                                                    <option value="0783">783 - GINELVAN SANTOS DE MATOS</option>
                                                    <option value="0872">872 - RAIMUNDO PEREIRA DOS SANTOS</option>
                                                    <option value="0931">931 - JOSE SANTOS DA SILVA</option>
                                                    <option value="0945">945 - ANDREIA FERREIRA MATOS</option>
                                                    <option value="0954">954 - EDUARDO RIBEIRO DOS SANTOS</option>
                                                    <option value="1052">1052 - JOSE CARLOS SANTOS DA SILVA</option>
                                                    <option value="1067">1067 - JOSE DOMINGOS COSTA</option>
                                                    <option value="1072">1072 - JOSE RENATO DE SOUZA SILVA</option>
                                                    <option value="1158">1158 - AURINO OLIVEIRA SANTOS</option>
                                                    <option value="1160">1160 - EDVANDO RAIMUNDO DOS SANTOS</option>
                                                    <option value="1165">1165 - ANTONIO SANTOS DE JESUS</option>
                                                    <option value="1169">1169 - ALDO NASCIMENTO LEITAO</option>
                                                    <option value="1211">1211 - MARCIO SANTOS DE JESUS</option>
                                                    <option value="1239">1239 - ALEX SANDRO RIBEIRO DOS SANTOS</option>
                                                    <option value="1267">1267 - JORGE JOSE LOPES GOES</option>
                                                    <option value="1269">1269 - MOISES COSTA DOS SANTOS</option>
                                                    <option value="1270">1270 - EDUARDO LIMA DOS SANTOS</option>
                                                    <option value="1273">1273 - JOSE NILTON DE JESUS SOUSA</option>
                                                    <option value="1286">1286 - ADAILTON FELIX DOS SANTOS</option>
                                                    <option value="1290">1290 - VALDIR DE SOUZA</option>
                                                    <option value="1309">1309 - ILDEVAN DEMETRIO DOS SANTOS</option>
                                                    <option value="1338">1338 - NILSON LEANDRO BRITO</option>
                                                    <option value="1339">1339 - DAVID DE JESUS SANTIAGO</option>
                                                    <option value="1341">1341 - LUIZ CARLOS DA SILVA SANTO</option>
                                                    <option value="1359">1359 - PEDRO NASCIMENTO DA PAIXAO</option>
                                                    <option value="1411">1411 - JOSE HAMILTON NINCK DOS SANTOS</option>
                                                    <option value="1425">1425 - WALFREDO JOSE DE SANTANA NETO</option>
                                                    <option value="1449">1449 - JANILDO RODRIGUES DA SILVA</option>
                                                    <option value="1486">1486 - JOSIAS DA COSTA SILVA</option>
                                                    <option value="1489">1489 - NADSON SILVA COSTA</option>
                                                    <option value="1502">1502 - EDNALDO SILVA SANTOS</option>
                                                    <option value="1508">1508 - JOSE RAIMUNDO VIANA SANTOS</option>
                                                    <option value="1509">1509 - AGNALDO SOUZA DA COSTA</option>
                                                    <option value="1518">1518 - GIVALDO SANTOS DE MATOS</option>
                                                    <option value="1555">1555 - JOSE MESSIAS SANTOS SOUZA</option>
                                                    <option value="1589">1589 - ENOCK SILVA SOUZA</option>
                                                    <option value="1594">1594 - JOSE DOMINGOS DA PAIXAO NASCIMENTO</option>
                                                    <option value="1598">1598 - IDELMAR SANTOS LIMA</option>
                                                    <option value="1604">1604 - ALEXANDRE PEREIRA DOS SANTOS</option>
                                                    <option value="1622">1622 - DANILO BOMFIM DE OLIVEIRA</option>
                                                    <option value="1633">1633 - JOSE NILTON RIBEIRO ALVES</option>
                                                    <option value="1658">1658 - WALACE ROCHA DOS SANTOS</option>
                                                    <option value="1683">1683 - CARLOS ALBERTO DA HORA SANTOS</option>
                                                    <option value="1695">1695 - AECIO DE ASSUNCAO BOMFIM</option>
                                                    <option value="1696">1696 - JOSE ROBERTO DOS SANTOS VIDAL</option>
                                                    <option value="1706">1706 - JOSEMAR DE OLIVEIRA SANTOS</option>
                                                    <option value="1709">1709 - CRISPINIANO NINCK DOS SANTOS</option>
                                                    <option value="1739">1739 - CLAUDIO SENA DA SILVA</option>
                                                    <option value="1741">1741 - VALDIVINO NASCIMENTO DOS SANTOS</option>
                                                    <option value="1788">1788 - NEILTON FERREIRA DE OLIVEIRA</option>
                                                    <option value="1791">1791 - JOCEMIR REIS SANTOS</option>
                                                    <option value="1793">1793 - ANDERSON BORGES DOS SANTOS</option>
                                                    <option value="1808">1808 - JAIME DE ARAUJO PACHECO</option>
                                                    <option value="1810">1810 - BRUNO LEONARDO DA SILVA INACIO</option>
                                                    <option value="1814">1814 - ALAN SENA SILVA</option>
                                                    <option value="1841">1841 - AILTON ANTONIO DOS SANTOS FILHO</option>
                                                    <option value="1876">1876 - ROBERTO OLIVEIRA SANTOS</option>
                                                    <option value="1882">1882 - RONALDO CONCEICAO DOS SANTOS</option>
                                                    <option value="1891">1891 - JOSE MARCOS NASCIMENTO DE SOUZA</option>
                                                    <option value="1894">1894 - CARLOS EDUARDO SILVA DOS SANTOS</option>
                                                    <option value="1913">1913 - GEDEON BARBOSA DE MELO</option>
                                                    <option value="1925">1925 - ANDERSON FELIPE LONGO SANTOS</option>
                                                    <option value="1926">1926 - FABRICIO LESSA DOS SANTOS</option>
                                                    <option value="1955">1955 - LINDOMAR BISPO DOS SANTOS</option>
                                                    <option value="1956">1956 - ERIVALDO DOS SANTOS DE OLIVEIRA</option>
                                                    <option value="1958">1958 - ELTON ALMEIDA DA SILVA</option>
                                                    <option value="1959">1959 - OSMUNDO PEREIRA SANTOS</option>
                                                    <option value="1963">1963 - JODMARC SILVA DOS SANTOS</option>
                                                    <option value="1965">1965 - ANDRE LOPES SILVA</option>
                                                    <option value="1966">1966 - GILDEVAN SILVA SANTOS</option>
                                                    <option value="1967">1967 - GILMAR DA SILVA PEREIRA</option>
                                                    <option value="1968">1968 - MAICON SILVA SOUZA</option>
                                                    <option value="1969">1969 - JAILTON SILVA LIMA</option>
                                                    <option value="1973">1973 - ANDERSON SANTOS OLIVEIRA</option>
                                                    <option value="1974">1974 - ROGERIO FELIX RIBEIRO</option>
                                                    <option value="1975">1975 - REINALDO DA SILVA SANTOS</option>
                                                    <option value="1976">1976 - LEONARDO SANTOS DE OLIVEIRA</option>
                                                    <option value="1980">1980 - MILKSON ALMEIDA SANTOS</option>
                                                    <option value="1981">1981 - LUCAS DOS SANTOS TEIXEIRA</option>
                                                    <option value="1982">1982 - GILMAR SOUZA TEIXEIRA</option>
                                                    <option value="1983">1983 - JEFFESON CARDOSO DO ROSARIO</option>
                                                    <option value="1987">1987 - COSME DIAS DE OLIVEIRA</option>
                                                    <option value="1988">1988 - LEANDRO CERQUEIRA MEIRELES</option>
                                                    <option value="2002">2002 - LUCIANO VIEIRA COSTA</option>
                                                    <option value="2003">2003 - CLAUDIO SANTOS DA SILVA</option>
						                            <option value="2004">2004 - CLAYTON MARTINS DE FRANÇA</option>
                                                    <option value="2009">2009 - IVANILDO RODRIGUES DE JESUS</option>
                                                    <option value="2010">2010 - CARLOS HENRIQUE SILVA SANTOS</option>
                                                    <option value="2011">2011 - WILLIAN SANTOS PORTELA</option>
                                                    <option value="2012">2012 - LEUANDSON PACHECO DOS SANTOS</option>
                                                </optgroup>
                                            </select></div>
                                        <div class="d-flex mb-3">
                                            </select><select class="form-select" name="linha" required>
                                                <optgroup label="This is a group">
                                                    <option value="">Informe a Linha:</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="05">05</option>
                                                    <option value="07">07</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="29">29</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="53">53</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                    <option value="60">60</option>
                                                    <option value="61">61</option>
                                                    <option value="63">63</option>
                                                    <option value="71">71</option>
                                                </optgroup>
                                            </select><select class="form-select input-form-os" name="carro" required>
                                                <optgroup label="This is a group">
                                                    <option value="">Informe o Veículo</option>
                                                    <option value="925">925</option>
                                                    <option value="927">927</option>
                                                    <option value="1112">1112</option>
                                                    <option value="1115">1115</option>
                                                    <option value="1116">1116</option>
                                                    <option value="1117">1117</option>
                                                    <option value="1118">1118</option>
                                                    <option value="1120">1120</option>
                                                    <option value="1122">1122</option>
                                                    <option value="1301">1301</option>
                                                    <option value="1302">1302</option>
                                                    <option value="1303">1303</option>
                                                    <option value="1304">1304</option>
                                                    <option value="1305">1305</option>
                                                    <option value="1501">1501</option>
                                                    <option value="1502">1502</option>
                                                    <option value="1503">1503</option>
                                                    <option value="1504">1504</option>
                                                    <option value="1505">1505</option>
                                                    <option value="1506">1506</option>
                                                    <option value="1507">1507</option>
                                                    <option value="1508">1508</option>
                                                    <option value="1509">1509</option>
                                                    <option value="1510">1510</option>
                                                    <option value="1511">1511</option>
                                                    <option value="1512">1512</option>
                                                    <option value="1513">1513</option>
                                                    <option value="1514">1514</option>
                                                    <option value="1515">1515</option>
                                                    <option value="1516">1516</option>
                                                    <option value="1601">1601</option>
                                                    <option value="1602">1602</option>
                                                    <option value="1801">1801</option>
                                                    <option value="1802">1802</option>
                                                    <option value="1803">1803</option>
                                                    <option value="1804">1804</option>
                                                    <option value="1805">1805</option>
                                                    <option value="1806">1806</option>
                                                    <option value="1807">1807</option>
                                                    <option value="1808">1808</option>
                                                    <option value="1810">1810</option>
                                                    <option value="1901">1901</option>
                                                    <option value="1902">1902</option>
                                                    <option value="1903">1903</option>
                                                    <option value="1904">1904</option>
                                                    <option value="1905">1905</option>
                                                    <option value="1906">1906</option>
                                                    <option value="1907">1907</option>
                                                    <option value="1908">1908</option>
                                                    <option value="2301">2301</option>
                                                    <option value="2302">2302</option>
                                                    <option value="2303">2303</option>
                                                    <option value="2304">2304</option>
                                                    <option value="2305">2305</option>
                                                    <option value="2306">2306</option>
                                                    <option value="2307">2307</option>
                                                </optgroup>
                                            </select></div>
                                        <div class="d-flex mb-3"><select class="form-select" name="fiscal" required>
                                                <optgroup label="This is a group">
                                                    <option value="">Identifique-se:</option>
                                                    <option value="1252">1252</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                </optgroup>
                                            </select><select class="form-select input-form-os" name="ocorrencia" required>
                                                <optgroup label="This is a group">
                                                    <option value="">Selecione uma ocorrência!!!</option>
                                                    <option value="Acidente de Trânsito">Acidente de Trânsito</option>
                                                    <option value="Assalto">Assalto</option>
                                                    <option value="Camera com Defeito">Camera com Defeito</option>
                                                    <option value="Cliente sentado no capô">Cliente sentado no capô</option>
                                                    <option value="Criança maior de 6 anos">Criança maior de 6 anos</option>
                                                    <option value="DVR com Defeito">DVR com Defeito</option>
                                                    <option value="Discussão com cliente">Discussão com cliente</option>
                                                    <option value="Evasão">Evasão</option>
                                                    <option value="Motorista sem cinto">Motorista sem cinto</option>
                                                    <option value="Motorista tira a mão do volante">Motorista tira a mão do volante</option>
                                                    <option value="Motorista fazendo uso do celular">Motorista fazendo uso do celular</option>
                                                    <option value="Motorista utilizando fone de ouvido">Motorista utilizando fone de ouvido</option>
                                                    <option value="Motorista na contra mão">Motorista na contra mão</option>
                                                    <option value="Motorista comendo e dirigindo">Motorista comendo e dirigindo</option>
                                                    <option value="Motorista atrasando viagem">Motorista atrasando viagem</option>
                                                    <option value="Motorista adiantando viagem">Motorista adiantando viagem</option>
                                                    <option value="Motorista parado">Motorista parado</option>
                                                    <option value="Motorista Urinando">Motorista Urinando</option>
                                                    <option value="Passageiro no degrau dianteiro">Passageiro no degrau dianteiro</option>
                                                    <option value="Queda no interior do veículo">Queda no interior do veículo</option>
                                                    <option value="Queda fora do veículo">Queda fora do veículo</option>
                                                    <option value="Vandalismo & Pula Catraca">Vandalismo & Pula Catraca</option>
                                                </optgroup>
                                            </select></div>
                                        <div class="d-flex mb-3"><input class="form-control" type="file" name="video" required></div>
                                        <div class="mb-3"><textarea class="form-control" id="message-2" name="descricao"
                                                rows="6" placeholder="Message"></textarea></div>
                                        <div><button class="btn btn-primary d-block w-100" type="submit" style="font-size:20px">Enviar dados para o Servidor</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
</body>

</html>