CREATE TABLE categoria (
    id_categoria SERIAL NOT NULL,
    nome character varying(10) NOT NULL,
    descricao character varying(500) NOT NULL
);

CREATE TABLE receitas (
    id_receita SERIAL NOT NULL,
    titulo character varying(100) NOT NULL,
    id_categoria integer NOT NULL,
    id_tipo integer NOT NULL,
    receita text NOT NULL
);

CREATE TABLE tipo (
    id_tipo SERIAL NOT NULL,
    tipo character varying(10) NOT NULL
);

CREATE TABLE usuarios (
    id_usuario SERIAL NOT NULL,
    nome character varying(50) NOT NULL,
    usuario character varying(10) NOT NULL,
    email character varying(50) NOT NULL,
    senha character (34) NOT NULL
);

ALTER TABLE categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (id_categoria);

ALTER TABLE receita
    ADD CONSTRAINT receita_pkey PRIMARY KEY (id_receita);

ALTER TABLE tipo
    ADD CONSTRAINT tipo_pkey PRIMARY KEY (id_tipo);

ALTER TABLE usuarios
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);

ALTER TABLE receita
    ADD CONSTRAINT receita_id_categoria_fkey FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria);

ALTER TABLE receita
    ADD CONSTRAINT receita_id_tipo_fkey FOREIGN KEY (id_tipo) REFERENCES tipo(id_tipo);

INSERT INTO tipo (tipo) VALUES ('Salgada');
INSERT INTO tipo (tipo) VALUES ('Doce');

INSERT INTO categoria (nome, descricao) VALUES ('Massas', 'Receitas de massas');
INSERT INTO categoria (nome, descricao) VALUES ('Carnes', 'Receitas com carnes');
INSERT INTO categoria (nome, descricao) VALUES ('Saladas', 'Receita de saladas');
INSERT INTO categoria (nome, descricao) VALUES ('Sopas', 'Receita de sopas');
INSERT INTO categoria (nome, descricao) VALUES ('Doces', 'Receitas de doces');
INSERT INTO categoria (nome, descricao) VALUES ('Bolos', 'Receitas de Bolos e sobremesas');

INSERT INTO receitas (titulo, id_categoria, id_tipo, receita) VALUES ('Receita de teste', 5, 2, '<h2>Apenas teste</h2><p>1 ingrediente</p><p>2 ingredientes</p><p>3 ingredientes</p>')
INSERT INTO receitas (titulo, id_categoria, id_tipo, receita) VALUES ('Receita de testes fritos', 5, 1, '<h2>Apenas teste</h2><p>1 ingrediente</p><p>2 ingredientes</p><p>3 ingredientes</p>')
INSERT INTO receitas (titulo, id_categoria, id_tipo, receita) VALUES ('Receita para teste com teste', 2, 1, '<h2>Apenas outro teste</h2><p>1 ingrediente</p><p>2 ingredientes</p><p>3 ingredientes</p>')
