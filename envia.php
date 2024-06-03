<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Smiguel-ADM</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap">
    <link rel="stylesheet" href="assets/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/footer/Footer-Dark-icons.css">
    <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements-custom.css">
    <link rel="stylesheet" href="assets/css/FPE-Gentella-form-elements.css">
    <link rel="stylesheet" href="assets/css/tela-login/Login-with-overlay-image.css">

    <style>
        /* Oculta o botão de voltar ao dashboard ao imprimir */
        @media print {
            .print-hide {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="container" style="margin-bottom:50px; margin-top: 20px">
            <img src="assets/img/logo.png" alt="logo" style="width:145px; filter: invert(45%);">
            <h3 style="margin-top: 20px">Transporte Urbano São Miguel de Ilhéus</h3>
        </div>
    </nav>

    <div class="container">
        <?php
        // Inicia a sessão
        session_start();

        $conexao = mysqli_connect("localhost", "u219851065_admin", "Xavier364074$", "u219851065_smiguel");

        if (!$conexao) {
            echo "<div class='fs-6'>NÃO CONECTADO AO BANCO DE DADOS</div>";
        } else {
            echo "<div class='fs-6'>CONECTADO AO BANCO DE DADOS</div>";

            $data = mysqli_real_escape_string($conexao, $_POST['data']);
            $horario = mysqli_real_escape_string($conexao, $_POST['horario']);
            $motorista = mysqli_real_escape_string($conexao, $_POST['motorista']);
            $linha = mysqli_real_escape_string($conexao, $_POST['linha']);
            $carro = mysqli_real_escape_string($conexao, $_POST['carro']);
            $fiscal = mysqli_real_escape_string($conexao, $_POST['fiscal']);
            $ocorrencia = mysqli_real_escape_string($conexao, $_POST['ocorrencia']);
            $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);

            $videos = ['video1', 'video2', 'video3'];
            $videos_paths = ['', '', '']; // Inicializa com string vazia
            $mensagens = [];

            foreach ($videos as $index => $video) {
                if (isset($_FILES[$video]) && $_FILES[$video]['error'] === UPLOAD_ERR_OK) {
                    $video_temp = $_FILES[$video]['tmp_name'];
                    $video_nome = mysqli_real_escape_string($conexao, $_FILES[$video]['name']);

                    // Define o caminho para salvar o vídeo
                    $caminho_video = "../bkp/_saomigueldeilheus/videos/{$video_nome}";

                    // Move o arquivo temporário para o local desejado
                    if (move_uploaded_file($video_temp, $caminho_video)) {
                        $videos_paths[$index] = $caminho_video;
                        $mensagens[] = "Vídeo " . ($index + 1) . " salvo com sucesso!";
                    } else {
                        $mensagens[] = "Erro ao mover o arquivo de vídeo " . ($index + 1) . " para o diretório destinado.";
                    }
                } elseif (isset($_FILES[$video])) {
                    $mensagens[] = "Não existe o arquivo do vídeo " . ($index + 1) . ": " . $_FILES[$video]['error'];
                } else {
                    $mensagens[] = "Vídeo " . ($index + 1) . " - não existe.";
                }
            }

            // Preparação da consulta SQL com verificação se o caminho é string vazia
            $sql = "INSERT INTO u219851065_smiguel.ocorrencia_video(data, horario, motorista, linha, carro, fiscal, ocorrencia, descricao, video1, video2, video3) VALUES ('$data', '$horario', '$motorista', '$linha', '$carro', '$fiscal', '$ocorrencia', '$descricao', " . ($videos_paths[0] === '' ? "NULL" : "'{$videos_paths[0]}'") . ", " . ($videos_paths[1] === '' ? "NULL" : "'{$videos_paths[1]}'") . ", " . ($videos_paths[2] === '' ? "NULL" : "'{$videos_paths[2]}'") . ")";
            $resultado = mysqli_query($conexao, $sql);

            if ($resultado) {
                $linhas_afetadas = mysqli_affected_rows($conexao);

                if ($linhas_afetadas > 0) {
                    echo "<div class='fs-6'>OCORRÊNCIA CADASTRADA COM SUCESSO!!!</div><br>";
                } else {
                    echo "<div class='fs-6'>NENHUMA LINHA AFETADA. Verifique se os dados foram inseridos corretamente.</div><br>";
                }
            } else {
                echo "<div class='fs-6'>ERRO AO INSERIR DADOS: </div>" . mysqli_error($conexao);
            }

            // Exibe as mensagens sobre o status dos vídeos
            foreach ($mensagens as $mensagem) {
                echo "<div class='fs-6'>{$mensagem}</div>";
            }
        }

        mysqli_close($conexao);
        ?>

        <div style="display: flex;">
            <!-- Botão de volta para Dashboard -->
            <div style="margin-top: 20px;" class="print-hide">
                <a href="./criar-os-video.php" class="btn btn-primary">Voltar Cadastro</a>
            </div>
        </div>
    </div>
</body>

</html>
