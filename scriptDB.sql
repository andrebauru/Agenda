-- Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS ProjetoCalendario;
USE ProjetoCalendario;

-- Criação da Tabela de Usuários
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL, -- Senhas devem ser armazenadas com hash
    email VARCHAR(100)
);

-- Criação da Tabela de Compromissos
CREATE TABLE IF NOT EXISTS compromissos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    nome VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    observacoes TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Você pode inserir dados de teste aqui, se necessário
-- INSERT INTO users (username, password, email) VALUES ('usuario_teste', 'senha_hash', 'email@teste.com');
-- INSERT INTO compromissos (user_id, nome, data, hora, observacoes) VALUES (1, 'Reunião', '2023-01-01', '10:00:00', 'Reunião com a equipe');
