CREATE TABLE cliente (
    id INTEGER(5) PRIMARY KEY,
    nome VARCHAR(100),
    cpf VARCHAR(15),
    telefone VARCHAR(15),
    endereco VARCHAR(100)
);

CREATE TABLE advogado (
    id INTEGER (5) PRIMARY KEY,
    nome VARCHAR(100),
    cpf VARCHAR(15),
    telefone VARCHAR(15),
    especialidade VARCHAR(30)
);

CREATE TABLE processos (
    id INTEGER(5) PRIMARY KEY,
    nome VARCHAR(100),
    fk_advogado_id INTEGER (5)
);

CREATE TABLE tem (
    fk_cliente_id INTEGER(5),
    fk_processos_id INTEGER(5)
);
 
ALTER TABLE processos ADD CONSTRAINT FK_processos_2
    FOREIGN KEY (fk_advogado_id)
    REFERENCES advogado (id)
    ON DELETE RESTRICT;
 
ALTER TABLE tem ADD CONSTRAINT FK_tem_1
    FOREIGN KEY (fk_cliente_id)
    REFERENCES cliente (id)
    ON DELETE RESTRICT;
 
ALTER TABLE tem ADD CONSTRAINT FK_tem_2
    FOREIGN KEY (fk_processos_id)
    REFERENCES processos (id)
    ON DELETE RESTRICT;