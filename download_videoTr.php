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

            // Verifica se pelo menos um dos parâmetros (video1, video2, video3) está presente na URL
            if (isset($_GET['video1']) || isset($_GET['video2']) || isset($_GET['video3'])) {
                // Define qual vídeo será baixado
                if (isset($_GET['video1'])) {
                    $video_id = $_GET['video1'];
                    $video_column = 'video1';
                } elseif (isset($_GET['video2'])) {
                    $video_id = $_GET['video2'];
                    $video_column = 'video2';
                } else {
                    $video_id = $_GET['video3'];
                    $video_column = 'video3';
                }

                // Conexão com o banco de dados
                $conexao = mysqli_connect("localhost", "u219851065_admin", "Xavier364074$", "u219851065_smiguel");

                if (!$conexao) {
                    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
                }

                // Consulta para obter o caminho do vídeo pelo ID
                $consulta_sql = "SELECT $video_column FROM ocorrencia_trafego WHERE id = ?";
                $stmt = mysqli_prepare($conexao, $consulta_sql);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "i", $video_id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $video_path);
                    mysqli_stmt_fetch($stmt);
                    mysqli_stmt_close($stmt);

                    if ($video_path) {
                        // Verifica se o arquivo existe antes de iniciar o download
                        if (file_exists($video_path)) {
                            // Define os cabeçalhos para indicar que é um arquivo de vídeo
                            header('Content-Type: video/mp4');
                            header('Content-Disposition: attachment; filename="' . basename($video_path) . '"');
                            header('Content-Length: ' . filesize($video_path));

                            // Saída do conteúdo do arquivo
                            readfile($video_path);
                            exit;
                        } else {
                            echo "Arquivo não encontrado";
                        }
                    } else {
                        echo "Vídeo não encontrado";
                    }
                } else {
                    echo "Erro na preparação da consulta: " . mysqli_error($conexao);
                }

                mysqli_close($conexao);
            } else {
                echo "Nenhum vídeo especificado.";
            }
        ?>

        <div style="display: flex;">
            <!-- Botão de volta para Dashboard -->
            <div style="margin-top: 20px;" class="print-hide">
                <a href="./deshboard-trafego.php" class="btn btn-primary">Deshboard Tráfego</a>
            </div>
        </div>
    </div>
</body>

</html>



