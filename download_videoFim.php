<?php
// Inicia a sessão
session_start();

if (isset($_GET['video1'])) {
    $video_id = $_GET['video1'];

    // Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "u219851065_admin", "Xavier364074$", "u219851065_smiguel");

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Consulta para obter o caminho do vídeo pelo ID
    // Aqui estou assumindo que você quer buscar em uma tabela específica. Altere conforme necessário.
    $consulta_sql = "SELECT video1 FROM ocorrencia_finalizada WHERE id = ?";
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
                // Defina os cabeçalhos para indicar que é um arquivo de vídeo
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
}
?>
