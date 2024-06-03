<?php
// Conectar ao banco de dados
$conexao = mysqli_connect("localhost", "u219851065_admin", "Xavier364074$", "u219851065_smiguel");

// Verificar se o ID do vídeo foi fornecido na URL
if(isset($_GET['id'])) {
    // Obter o ID do vídeo da URL e sanitizar para evitar SQL Injection
    $id = intval($_GET['id']);

    // Consultar o banco de dados para obter os nomes dos arquivos de vídeo com base no ID
    $consulta_sql = "SELECT video1, video2, video3 FROM ocorrencia_video WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $consulta_sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $resultado_consulta = mysqli_stmt_get_result($stmt);

    // Verificar se a consulta foi bem-sucedida
    if($resultado_consulta) {
        // Obter os nomes dos arquivos do resultado da consulta
        $linha = mysqli_fetch_assoc($resultado_consulta);

        // Iterar sobre cada campo de vídeo para excluir arquivos se existirem
        $videos = ['video1', 'video2', 'video3'];
        $erro = false;

        foreach ($videos as $video) {
            if (!empty($linha[$video])) {
                $caminho_arquivo = $linha[$video];

                // Verificar se o arquivo existe
                if (file_exists($caminho_arquivo)) {
                    // Excluir o arquivo
                    if (!unlink($caminho_arquivo)) {
                        echo "Erro ao excluir o arquivo de vídeo: " . $caminho_arquivo;
                        $erro = true;
                    }
                }
            }
        }

        // Se não houve erro na exclusão dos arquivos, exclua também a entrada no banco de dados
        if (!$erro) {
            $sql_excluir = "DELETE FROM ocorrencia_video WHERE id = ?";
            $stmt_excluir = mysqli_prepare($conexao, $sql_excluir);
            mysqli_stmt_bind_param($stmt_excluir, "i", $id);
            if(mysqli_stmt_execute($stmt_excluir)) {
                echo "Vídeo(s) excluído(s) com sucesso.";
            } else {
                echo "Erro ao excluir o vídeo do banco de dados: " . mysqli_error($conexao);
            }
        }

    } else {
        echo "Erro ao consultar o banco de dados: " . mysqli_error($conexao);
    }

    // Fechar a consulta preparada
    mysqli_stmt_close($stmt);
} else {
    echo "ID do vídeo não fornecido na URL.";
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>

<!-- Botão de volta para Dashboard -->
<div style="margin-top: 20px;">
    <a href="./deshboard-video.php" class="btn btn-primary">Voltar para Dashboard</a>
</div>
