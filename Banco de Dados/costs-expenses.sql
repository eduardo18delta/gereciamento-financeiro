# Desenvolvido por: Eduardo Henrique
# Data de Criação: 31/08/2018 - 15:30

# Criação da tabela de USUAŔIOS
CREATE TABLE t_users(
	u_id_users INT NOT NULL AUTO_INCREMENT,
	u_username VARCHAR(30) NOT NULL,
	u_password VARCHAR(32) NOT NULL,
	u_email VARCHAR(70) NOT NULL,
	u_pessoafk INT(2) NOT NULL,
	u_datacad datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(u_id_users) 
);
# Criação da tabela de PESSOAS
CREATE TABLE t_ppessoa(
	p_id_pessoa INT NOT NULL AUTO_INCREMENT,
	p_nome VARCHAR(70) NOT NULL,
	p_dtnasc DATE NOT NULL,
	p_cpf VARCHAR (11) NOT NULL,
	p_rg VARCHAR(11) NOT NULL, 
	p_sexo VARCHAR(1) NOT NULL,
	p_enderecoFK INT(2) NOT NULL,
	p_nacionalidade VARCHAR(30) NOT NULL,
	p_datacad datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(p_id_pessoa)
);
# Criação da tabela de ENDERECOS
CREATE TABLE t_endereco(
	e_id_endereco INT NOT NULL AUTO_INCREMENT,
	e_rua VARCHAR(60) NOT NULL,
	e_numero INT NOT NULL,
	e_complemento VARCHAR(30) NOT NULL,
	e_bairro VARCHAR(30) NOT NULL,
	e_estado VARCHAR(30) NOT NULL,
	e_cidade VARCHAR(39) NOT NULL,
	e_cep VARCHAR(8) NOT NULL,	
	e_datacad datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(e_id_endereco)
);

# Adicionando chave estrangeira na tabela de USUÁRIOS(t_users) referenciando da tabela pessoa(t_ppessoa)
ALTER TABLE t_users ADD FOREIGN KEY(u_pessoafk) REFERENCES t_ppessoa(p_id_pessoa);

# Adicionando chave estrangeira na tabela de PESSOAS(t_ppessoa) referenciando da tabela ENDEREÇOS(t_endereco)
ALTER TABLE t_ppessoa ADD FOREIGN KEY(p_enderecoFK) REFERENCES t_endereco(e_id_endereco);



