
-- LIMPAR TABELA RANKING
DELETE FROM ranking ;

-- REINSERIR DADOS DAS PARTIDAS NA TABELA RANKING
INSERT INTO ranking (usuario_idusuario,vitorias,derrotas,empates,gols_pro,gols_contr,partidas,pontos_partidas,pontos_possiveis,aproveitamento) 
SELECT u.idusuario as usuario_idusuario,
 v.vitorias,
  d.derrotas,
   e.empates,
    gp.gols_pro,
	 gs.gols_sofr as gols_contr,
	  par.partidasjogas as partidas,
	  ((v.vitorias*3) + empates) as pontos_partidas,
	  par.partidasjogas*3 as pontos_possiveis,
	  ((v.vitorias*3) + e.empates)/(par.partidasjogas*3) as aproveitamento
FROM usuario as u
LEFT JOIN 
(
-- vitorias por usuario
SELECT A.vencedor as idusuario, COUNT(A.vencedor) as vitorias
FROM (
SELECT CASE WHEN p.gols_desafiante = p.gols_desafiado then ''
			WHEN p.gols_desafiante > p.gols_desafiado then id_usuario_desafiante
			ELSE p.id_usuario_desafiado END as vencedor
FROM partida as p ) AS A GROUP BY A.idusuario) AS v on u.idusuario = v.idusuario
LEFT JOIN (
-- derrotas por usuario
SELECT A.perdedor as idusuario, COUNT(A.perdedor) as derrotas
FROM (
SELECT CASE WHEN p.gols_desafiante = p.gols_desafiado then ''
			WHEN p.gols_desafiante < p.gols_desafiado then p.id_usuario_desafiante
			ELSE p.id_usuario_desafiado END as perdedor
FROM partida as p ) AS A GROUP BY A.perdedor) AS d on u.idusuario = d.idusuario
LEFT JOIN (
-- empates por usuario
SELECT A.empatante as idusuario, COUNT(A.empatante) as empates
FROM (
SELECT  CASE WHEN p.gols_desafiante = p.gols_desafiado THEN p.id_usuario_desafiante
ELSE '' END as empatante
	FROM partida as p 
UNION ALL
SELECT  CASE WHEN p.gols_desafiante = p.gols_desafiado THEN p.id_usuario_desafiado
ELSE '' END as empatante
	FROM partida as p ) AS A GROUP BY A.empatante ) AS e ON u.idusuario = e.idusuario
	
LEFT JOIN (
-- gols pro por usuario
SELECT A.idusuario, sum(gols) as gols_pro
FROM (	
SELECT p.id_usuario_desafiante as idusuario, sum(gols_desafiante) as gols
FROM partida as p
GROUP BY p.id_usuario_desafiante
UNION ALL
SELECT p.id_usuario_desafiado as idusuario, sum(gols_desafiado) as gols
FROM partida as p
GROUP BY p.id_usuario_desafiante ) AS A 
GROUP BY A.idusuario ) as gp on u.idusuario = gp.idusuario
LEFT JOIN (
-- gols sofridos por usuario
SELECT A.idusuario, sum(golscontra) as gols_sofr
FROM (	
SELECT p.id_usuario_desafiante as idusuario, sum(gols_desafiado) as golscontra
FROM partida as p
GROUP BY p.id_usuario_desafiante
UNION ALL
SELECT p.id_usuario_desafiado as idusuario, sum(gols_desafiante) as golscontra
FROM partida as p
GROUP BY p.id_usuario_desafiante ) AS A 
GROUP BY A.idusuario ) as gs on u.idusuario = gs.idusuario
LEFT JOIN (
-- partidas por usuario
SELECT A.idusuario, COUNT(idusuario) as partidasjogas
FROM (
SELECT id_usuario_desafiante as idusuario
FROM partida as p
UNION ALL
SELECT id_usuario_desafiado as idusuario 
FROM partida as p) AS A
GROUP BY A.idusuario ) AS par on u.idusuario = par.idusuario ;
