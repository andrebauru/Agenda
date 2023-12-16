import os

# Estrutura de pastas do projeto
folders = [
    'projeto/css',
    'projeto/js',
    'projeto/php'
]

# Cria as pastas
for folder in folders:
    os.makedirs(folder, exist_ok=True)

# Cria arquivos vazios ou com conteúdo inicial
with open('projeto/index.html', 'w') as file:
    file.write('<!-- Seu HTML aqui -->')

with open('projeto/css/style.css', 'w') as file:
    file.write('body { background: linear-gradient(to right, yellow, black); } #calendar { max-width: 900px; margin: 40px auto; }')

with open('projeto/js/main.js', 'w') as file:
    pass  # Arquivo JavaScript inicialmente vazio

with open('projeto/php/conexao.php', 'w') as file:
    file.write("<?php\n$servername = 'nome_do_servidor';\n$username = 'nome_de_usuario';\n$password = 'senha';\n$dbname = 'nome_do_banco_de_dados';\n\n// Criando conexão\n$conn = new mysqli($servername, $username, $password, $dbname);\n\n// Verificando conexão\nif ($conn->connect_error) {\n    die('Conexão falhou: ' . $conn->connect_error);\n}\n?>")

with open('projeto/php/funcoes.php', 'w') as file:
    pass  # Arquivo PHP de funções inicialmente vazio
