CREATE TABLE tab_clientes(
    idCliente int NOT NULL,
    idRepresentante int,
    nome      varchar(255),
    telefone  varchar(255),
    email     varchar(255),
    endereco  int,
    data_cadastro TIMESTAMP,
    PRIMARY KEY (idCliente)
);

CREATE TABLE tab_venda(
    idVenda         int NOT NULL,
    idCliente       int NOT NULL,
    idRepresentante int NOT NULL,
    idProduto       int NOT NULL,
    nome_produto    varchar(255),
    data_cadastro TIMESTAMP,
    PRIMARY KEY (idVenda)
);

CREATE TABLE tab_produto(
    idProduto       int NOT NULL,
    nome_produto    varchar(255),
    descricao       varchar(255),
    preco           varchar(255),
    data_cadastro TIMESTAMP,
    PRIMARY KEY (idProduto)
);
