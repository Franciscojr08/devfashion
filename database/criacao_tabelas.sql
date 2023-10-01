create table cle_cliente
(
    cle_id              SMALLINT unsigned PRIMARY KEY auto_increment,
    cle_nome            VARCHAR(100) NOT NULL,
    cle_cpf             VARCHAR(11)  NOT NULL,
    cle_data_nascimento DATE         NOT NULL,
    cle_email           VARCHAR(50)  NOT NULL,
    cle_telefone        VARCHAR(11)  NOT NUll,
    cle_cep             VARCHAR(11)  NOT NULL,
    cle_logradouro      VARCHAR(100) NOT NULL,
    cle_bairro          VARCHAR(50)  NOT NULL,
    cle_estado          VARCHAR(50)  NOT NULL,
    cle_cidade          VARCHAR(50)  NOT NULL,
    cle_complemento     VARCHAR(100) NOT NULL,
    cle_data_cadastro   DATE         NOT NULL,
    cle_senha           VARCHAR(100) NOT NULL
);

create table rpa_roupa
(
    rpa_id             SMALLINT unsigned PRIMARY KEY auto_increment,
    rpa_nome           VARCHAR(50)    NOT NULL,
    rpa_preco          DECIMAL(10, 2) NOT NULL,
    rpa_tipo           TINYINT(1)     NOT NULL,
    rpa_caminho_imagem varchar(50)    not null
);

create table pdo_pedido
(
    pdo_id    SMALLINT unsigned PRIMARY KEY auto_increment,
    pdo_valor DECIMAL(10, 2)    NOT NULL,
    cle_id    SMALLINT unsigned NOT NULL
);

ALTER TABLE pdo_pedido ADD CONSTRAINT fk_pdo_cle1 FOREIGN KEY (cle_id) REFERENCES cle_cliente (cle_id);

create table rpo_roupa_pedido
(
    rpo_id SMALLINT unsigned PRIMARY KEY auto_increment,
    rpa_id SMALLINT unsigned NOT NULL,
    pdo_id SMALLINT unsigned NOT NULL
);

ALTER TABLE rpo_roupa_pedido ADD CONSTRAINT fk_rpo_rpa1 FOREIGN KEY (rpa_id) REFERENCES rpa_roupa (rpa_id);
ALTER TABLE rpo_roupa_pedido ADD CONSTRAINT fk_rpo_pdo1 FOREIGN KEY (pdo_id) REFERENCES pdo_pedido (pdo_id);

create table cro_carrinho
(
    cro_id SMALLINT unsigned PRIMARY KEY auto_increment,
    cle_id SMALLINT unsigned NOT NULL
);

ALTER TABLE cro_carrinho ADD CONSTRAINT fk_cro_cle1 FOREIGN KEY (cle_id) REFERENCES cle_cliente (cle_id);

create table cra_carrinho_roupa
(
    cra_id SMALLINT unsigned PRIMARY KEY auto_increment,
    cro_id SMALLINT unsigned NOT NULL,
    rpa_id SMALLINT unsigned NOT NULL
);

ALTER TABLE cra_carrinho_roupa ADD CONSTRAINT fk_cra_cro1 FOREIGN KEY (cro_id) REFERENCES cro_carrinho (cro_id);
ALTER TABLE cra_carrinho_roupa ADD CONSTRAINT fk_cra_rpa1 FOREIGN KEY (rpa_id) REFERENCES rpa_roupa (rpa_id);

create table lss_lista_desejos
(
    lss_id SMALLINT unsigned PRIMARY KEY auto_increment,
    cle_id SMALLINT unsigned NOT NULL
);

ALTER TABLE lss_lista_desejos ADD CONSTRAINT fk_lss_cle1 FOREIGN KEY (cle_id) REFERENCES cle_cliente (cle_id);

create table lsa_lista_desejos_cliente
(
    lsa_id SMALLINT unsigned PRIMARY KEY auto_increment,
    lss_id SMALLINT unsigned NOT NULL,
    rpa_id SMALLINT unsigned NOT NULL
);

ALTER TABLE lsa_lista_desejos_cliente ADD CONSTRAINT fk_lsa_lss1 FOREIGN KEY (lss_id) REFERENCES lss_lista_desejos (lss_id);
ALTER TABLE lsa_lista_desejos_cliente ADD CONSTRAINT fk_lsa_rpa1 FOREIGN KEY (rpa_id) REFERENCES rpa_roupa (rpa_id);

insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Camisa Manga Longa",159.60,1,"roupas/masculino/masc_01");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Terno Azul Marinho",1254.00,1,"roupas/masculino/masc_02");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Camisa Essentials",180.00,1,"roupas/masculino/masc_03");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("T-Shirt",99.90,1,"roupas/masculino/masc_04");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Calsa Com Suspensório",354.80,1,"roupas/masculino/masc_05");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Camisa Hera",129.90,1,"roupas/masculino/masc_06");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Terno Dark",1599.90,1,"roupas/masculino/masc_07");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Camisa Social Com Gravata",280.00,1,"roupas/masculino/masc_08");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Calsa Rasgada Com Caveira",780.00,1,"roupas/masculino/masc_09");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Suéter Manga Comprida",59.90,1,"roupas/masculino/masc_10");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Suéter Dark Manga Comprida",79.90,1,"roupas/masculino/masc_11");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Jaqueta de Couro",400.00,1,"roupas/masculino/masc_12");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Terno Laranja",1480.00,1,"roupas/masculino/masc_13");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Camisa Listrada",129.90,1,"roupas/masculino/masc_14");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Sobretudo",999.90,1,"roupas/masculino/masc_15");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Camisa Dark",129.90,1,"roupas/masculino/masc_16");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Camisa Crazy Man",149.90,1,"roupas/masculino/masc_17");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Sobretudo Com Luvas",1259.90,1,"roupas/masculino/masc_18");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Conjunto GHFGD",799.90,1,"roupas/masculino/masc_19");
insert into rpa_roupa (rpa_nome, rpa_preco, rpa_tipo, rpa_caminho_imagem) values ("Calsa Branca",399.90,1,"roupas/masculino/masc_20");