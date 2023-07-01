/* POSTGRES */
CREATE TABLE viagem (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255),
    descricao VARCHAR(1024),
    path_imagem VARCHAR(1024),
);

/* MYSQL */
CREATE TABLE viagem (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    descricao VARCHAR(1024),
    path_imagem VARCHAR(1024),
);