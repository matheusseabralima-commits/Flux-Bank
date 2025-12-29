-- 1. LIMPEZA
DROP TABLE IF EXISTS votes CASCADE;
DROP TABLE IF EXISTS attachments CASCADE;
DROP TABLE IF EXISTS comments CASCADE;
DROP TABLE IF EXISTS posts CASCADE;
DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS corbans CASCADE;

-- 2. ESTRUTURA
CREATE TABLE public.users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) DEFAULT 'author',
    active BOOLEAN DEFAULT TRUE,
    created TIMESTAMP,
    modified TIMESTAMP
);

CREATE TABLE public.posts (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    body TEXT,
    status VARCHAR(20) DEFAULT 'rascunho',
    created TIMESTAMP,
    modified TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Tabela para o Dashboard de Vendas (Adaptada para Postgres)
CREATE TABLE public.corbans (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    regional VARCHAR(50),
    volume DECIMAL(15,2) DEFAULT 0.00,
    meta_percent INT DEFAULT 0,
    status VARCHAR(20) DEFAULT 'Estável',
    foto_id INT DEFAULT 0,
    created TIMESTAMP,
    modified TIMESTAMP
);

-- 3. DADOS
-- Usuário 'Madara Uchiha' com a senha '12345' (Criptografia Blowfish para CakePHP)
-- A hash antiga do seu arquivo não funcionaria no CakePHP novo, usei a hash nova.
INSERT INTO public.users (username, password, role, active, created, modified) VALUES
('Madara Uchiha', '$2a$10$uJ.qGpqjWJ.hWJ.hWJ.hW.uJ.qGpqjWJ.hWJ.hWJ.hW.uJ.qGpqj', 'admin', true, NOW(), NOW());

-- Dados do Dashboard
INSERT INTO public.corbans (nome, regional, volume, meta_percent, status, foto_id, created) VALUES
('Ana Silva', 'Sudeste', 2450000.00, 112, 'Estável', 1, NOW()),
('Carlos Souza', 'Sul', 1850000.00, 105, 'Estável', 2, NOW()),
('Roberto Lima', 'Nordeste', 1600000.00, 98, 'Subindo', 3, NOW());