
INSERT INTO time (idtime, nome, liga, pais) VALUES(1,'Arsenal','Premier League','inglaterra');
INSERT INTO time (idtime, nome, liga, pais) VALUES(2,'AS Monaco','Ligue 1','franca');
INSERT INTO time (idtime, nome, liga, pais) VALUES(3,'Atletico Madrid','LaLiga Santander','espanha');
INSERT INTO time (idtime, nome, liga, pais) VALUES(4,'Borussia Dortmund','Bundesliga','alemanha');
INSERT INTO time (idtime, nome, liga, pais) VALUES(5,'Chelsea FC','Premier League','inglaterra');
INSERT INTO time (idtime, nome, liga, pais) VALUES(6,'FC Barcelona','LaLiga Santander','espanha');
INSERT INTO time (idtime, nome, liga, pais) VALUES(7,'FC Bayern Munchen','Bundesliga','alemanha');
INSERT INTO time (idtime, nome, liga, pais) VALUES(8,'FC Schalke 04','Bundesliga','alemanha');
INSERT INTO time (idtime, nome, liga, pais) VALUES(9,'Inter','Calcio A','italia');
INSERT INTO time (idtime, nome, liga, pais) VALUES(10,'Juventus','Calcio A','italia');
INSERT INTO time (idtime, nome, liga, pais) VALUES(11,'Liverpool','Premier League','inglaterra');
INSERT INTO time (idtime, nome, liga, pais) VALUES(12,'Manchester City','Premier League','inglaterra');
INSERT INTO time (idtime, nome, liga, pais) VALUES(13,'Manchester United','Premier League','inglaterra');
INSERT INTO time (idtime, nome, liga, pais) VALUES(14,'Milan','Calcio A','italia');
INSERT INTO time (idtime, nome, liga, pais) VALUES(15,'Olympique Lyonnais','Ligue 1','franca');
INSERT INTO time (idtime, nome, liga, pais) VALUES(16,'Paris-Saint-Germain','Ligue 1','franca');
INSERT INTO time (idtime, nome, liga, pais) VALUES(17,'Real Madrid CF','LaLiga Santander','espanha');
INSERT INTO time (idtime, nome, liga, pais) VALUES(18,'Roma','Calcio A','italia');
INSERT INTO time (idtime, nome, liga, pais) VALUES(19,'SL Benfica','Liga NOS','portugal');
INSERT INTO time (idtime, nome, liga, pais) VALUES(20,'Sporting CP','Liga NOS','portugal');



INSERT INTO usuario (idusuario, nome, email, senha, pais, foto_us) VALUES(1, 'calebe', 'calebe@acad.pucrs.br', '12345678', 'Porto Alegre - RS', '');
INSERT INTO usuario (idusuario, nome, email, senha, pais, foto_us) VALUES(2, 'gabriel', 'gabriel@acad.pucrs.br', '12345678', 'Porto Alegre - RS', '');
INSERT INTO usuario (idusuario, nome, email, senha, pais, foto_us) VALUES(3, 'jhonata', 'jhonata@acad.pucrs.br', '12345678', 'Porto Alegre - RS', '');
INSERT INTO usuario (idusuario, nome, email, senha, pais, foto_us) VALUES(4, 'joao', 'joao@acad.pucrs.br', '12345678', 'Porto Alegre - RS', '');
INSERT INTO usuario (idusuario, nome, email, senha, pais, foto_us) VALUES(5, 'marcelo', 'marcelo@acad.pucrs.br', '12345678', 'Porto Alegre - RS', '');

INSERT INTO grupo (idgrupo, nome, foto_grupo) VALUES(1, 'Engenharia de Software', '');

INSERT INTO usuario_grupo (usuario_idusuario, grupo_idgrupo) VALUES(1, 1);
INSERT INTO usuario_grupo (usuario_idusuario, grupo_idgrupo) VALUES(2, 1);
INSERT INTO usuario_grupo (usuario_idusuario, grupo_idgrupo) VALUES(3, 1);
INSERT INTO usuario_grupo (usuario_idusuario, grupo_idgrupo) VALUES(4, 1);
INSERT INTO usuario_grupo (usuario_idusuario, grupo_idgrupo) VALUES(5, 1);

INSERT INTO partida (idpartida, gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(1, 1, 3, 1, 9, 3, 1);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(2,  2, 3, 4, 20, 2, 3);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(3,  0, 2, 6, 2, 4, 2);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(4,  1, 1, 13, 4, 2, 5);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(5,  3, 2, 16, 11, 5, 4);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(6,  1, 1, 4, 2, 4, 5);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(7,  2, 2, 3, 8, 3, 2);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(8,  3, 0, 2, 16, 2, 1);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(9,  0, 1, 7, 8, 3, 4);
INSERT INTO partida (idpartida,  gols_desafiante, gols_desafiado, idtime_desafiante, idtime_desafiado, id_usuario_desafiante, id_usuario_desafiado) VALUES(10,  2, 0, 19, 20, 1, 5);
