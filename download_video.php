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
    $consulta_sql = "SELECT $video_column FROM ocorrencia_video WHERE id = ?";
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
