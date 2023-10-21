// nome do banco e 'crud'

CREATE TABLE clientes(
	id INT AUTO_INCREMENT,
	nome VARCHAR(255),
	email VARCHAR(255),
	tele INT,
	nascimento DATE,
	grupo VARCHAR(255),
	PRIMARY KEY(id)
);