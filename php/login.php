<?php
session_start(); // Inicia a sessão

include 'conexao.php'; // Inclui o script de conexão com o banco de dados

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepara a consulta SQL
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    // Vincula parâmetros
    $stmt->bind_param("s", $username);

    // Executa a consulta
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verifica se o usuário existe e se a senha está correta
    if ($user && password_verify($password, $user['password'])) {
        // Cria a sessão do usuário
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redireciona para a página principal
        header("Location: index.html");
        exit;
    } else {
        // Mensagem de erro
        echo "Usuário ou senha inválidos!";
    }

    // Fecha a conexão
    $stmt->close();
    $conn->close();
}
?>
