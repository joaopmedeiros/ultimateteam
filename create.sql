--CREATE
USE ultimateteam ;

CREATE TABLE usuario (
  idusuario INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha CHAR(8) NOT NULL,
  pais VARCHAR(45) NOT NULL,
  foto_us BLOB NULL,
  PRIMARY KEY(idusuario)
);

CREATE TABLE grupo (
  idgrupo INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  foto_grupo BLOB NULL,
  PRIMARY KEY(idgrupo)
);

CREATE TABLE usuario_grupo (
  usuario_idusuario INTEGER NOT NULL,
  grupo_idgrupo INTEGER NOT NULL
);

ALTER TABLE usuario_grupo ADD CONSTRAINT fk_usuario_grupo_usuario FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario) ;
ALTER TABLE usuario_grupo ADD CONSTRAINT fk_usuario_grupo_grupo FOREIGN KEY (grupo_idgrupo) REFERENCES grupo (idgrupo) ;

CREATE TABLE time (
  idtime INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  liga VARCHAR(45) NOT NULL,
  pais VARCHAR(45) NOT NULL,
  PRIMARY KEY(idtime)
);


CREATE TABLE partida (
  idpartida INTEGER NOT NULL AUTO_INCREMENT,
  data_partida TIMESTAMP NOT NULL,
  gols_desafiante INTEGER NOT NULL,
  gols_desafiado INTEGER NOT NULL,
  idtime_desafiante INTEGER NOT NULL,
  idtime_desafiado INTEGER NOT NULL,
  id_usuario_desafiante INTEGER NOT NULL,
  id_usuario_desafiado INTEGER NOT NULL,
  PRIMARY KEY(idpartida)
);



CREATE TABLE ranking (
  idranking INTEGER PRIMARY KEY  NOT NULL AUTO_INCREMENT,
  usuario_idusuario INTEGER NOT NULL,
  vitorias INTEGER NULL,
  empates INTEGER NULL,
  derrotas INTEGER NULL,
  pontos_partidas INTEGER NULL,
  aproveitamento FLOAT NULL,
  pontos_possiveis INTEGER NULL,
  gols_pro INTEGER NULL,
  gols_contr INTEGER NULL,
  partidas INTEGER NULL,
  fp INTEGER NULL
);

ALTER TABLE ranking ADD CONSTRAINT fk_ranking_usuario FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario) ;
