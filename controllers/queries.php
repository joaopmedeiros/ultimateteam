<?php
require_once("class/Conexao.php");

function createConfronto($user1,$user2) {
	$sqlDropTableConfronto = "DROP TABLE IF EXISTS confrontos_diretos";

	$sqlCreateTableConfronto = "CREATE TABLE IF NOT EXISTS confrontos_diretos (
	data_partida TIMESTAMP,
	gols_desafiado INT,
	gols_desafiante INT,
	id_usuario_desafiado INT,
	id_usuario_desafiante INT,
	idpartida INT,
	idtime_desafiado INT,
	idtime_desafiante INT );";

	// Posições:
	// 1 = $user1
	// 2 = $user2
	// 3 = $user1
	// 4 = $user2
	$sqlInsertConfronto = "INSERT INTO confrontos_diretos
	SELECT DISTINCT
	p.data_partida,
	p.gols_desafiado,
	p.gols_desafiante,
	p.id_usuario_desafiado,
	p.id_usuario_desafiante,
	p.idpartida,
	p.idtime_desafiado,
	p.idtime_desafiante 
	FROM partida as p
	WHERE (p.id_usuario_desafiado = ? or p.id_usuario_desafiado = ?)
	AND
	(p.id_usuario_desafiante = ? or p.id_usuario_desafiante = ?);";

	$sqlDropTableRkConfronto = "DROP TABLE IF EXISTS rk_confrontos_diretos;";

	$sqlCreateTableRkConfronto = "CREATE TABLE rk_confrontos_diretos (
		aproveitamento FLOAT,
		derrotas INT,
		empates INT,
		fp INT,
		gols_contr INT,
		gols_pro INT,
		idranking INT,
		partidas INT,
		pontos_partidas INT,
		pontos_possiveis INT,
		usuario_idusuario INT,
		vitorias INT );";

	// Posições:
	// 1 - $user1
	// 2 - $user2
	$sqlInsertRkConfronto = "INSERT INTO rk_confrontos_diretos (usuario_idusuario,vitorias,derrotas,empates,gols_pro,gols_contr,partidas,pontos_partidas,pontos_possiveis,aproveitamento)
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
	FROM confrontos_diretos as p ) AS A GROUP BY A.idusuario) AS v on u.idusuario = v.idusuario
	LEFT JOIN (
	-- derrotas por usuario
	SELECT A.perdedor as idusuario, COUNT(A.perdedor) as derrotas
	FROM (
	SELECT CASE WHEN p.gols_desafiante = p.gols_desafiado then ''
				WHEN p.gols_desafiante < p.gols_desafiado then p.id_usuario_desafiante
				ELSE p.id_usuario_desafiado END as perdedor
	FROM confrontos_diretos as p ) AS A GROUP BY A.perdedor) AS d on u.idusuario = d.idusuario
	LEFT JOIN (
	-- empates por usuario
	SELECT A.empatante as idusuario, COUNT(A.empatante) as empates
	FROM (
	SELECT  CASE WHEN p.gols_desafiante = p.gols_desafiado THEN p.id_usuario_desafiante
	ELSE '' END as empatante
		FROM confrontos_diretos as p 
	UNION ALL
	SELECT  CASE WHEN p.gols_desafiante = p.gols_desafiado THEN p.id_usuario_desafiado
	ELSE '' END as empatante
		FROM confrontos_diretos as p ) AS A GROUP BY A.empatante ) AS e ON u.idusuario = e.idusuario
		
	LEFT JOIN (
	-- gols pro por usuario
	SELECT A.idusuario, sum(gols) as gols_pro
	FROM (  
	SELECT p.id_usuario_desafiante as idusuario, sum(gols_desafiante) as gols
	FROM confrontos_diretos as p
	GROUP BY p.id_usuario_desafiante
	UNION ALL
	SELECT p.id_usuario_desafiado as idusuario, sum(gols_desafiado) as gols
	FROM confrontos_diretos as p
	GROUP BY p.id_usuario_desafiante ) AS A 
	GROUP BY A.idusuario ) as gp on u.idusuario = gp.idusuario
	INNER JOIN (
	-- gols sofridos por usuario
	SELECT A.idusuario, sum(golscontra) as gols_sofr
	FROM (  
	SELECT p.id_usuario_desafiante as idusuario, sum(gols_desafiado) as golscontra
	FROM confrontos_diretos as p
	GROUP BY p.id_usuario_desafiante
	UNION ALL
	SELECT p.id_usuario_desafiado as idusuario, sum(gols_desafiante) as golscontra
	FROM confrontos_diretos as p
	GROUP BY p.id_usuario_desafiante ) AS A 
	GROUP BY A.idusuario ) as gs on u.idusuario = gs.idusuario
	LEFT JOIN (
	-- partidas por usuario
	SELECT A.idusuario, COUNT(idusuario) as partidasjogas
	FROM (
	SELECT id_usuario_desafiante as idusuario
	FROM confrontos_diretos as p
	UNION ALL
	SELECT id_usuario_desafiado as idusuario 
	FROM confrontos_diretos as p) AS A
	GROUP BY A.idusuario ) AS par on u.idusuario = par.idusuario
	WHERE u.idusuario in (? , ?) ;";

	try {
		$cConexao = new Conexao();
		$pdo = $cConexao->Conectar();

		$q1 = $pdo->prepare($sqlDropTableConfronto);
		$q1->execute();

		$q2 = $pdo->prepare($sqlCreateTableConfronto);
		$q2->execute();

		$q3 = $pdo->prepare($sqlInsertConfronto);
		$q3->bindValue(1, $user1, PDO::PARAM_STR);
		$q3->bindValue(2, $user2, PDO::PARAM_STR);
		$q3->bindValue(3, $user1, PDO::PARAM_STR);
		$q3->bindValue(4, $user2, PDO::PARAM_STR);
		$q3->execute();

		$q4 = $pdo->prepare($sqlDropTableRkConfronto);
		$q4->execute();

		$q5 = $pdo->prepare($sqlCreateTableRkConfronto);
		$q5->execute();

		$q6 = $pdo->prepare($sqlInsertRkConfronto);
		$q6->bindValue(1, $user1, PDO::PARAM_STR);
		$q6->bindValue(2, $user2, PDO::PARAM_STR);
		$q6->execute();
	} catch(PDOException $e) {
		die($e->getMessage());
	}
}

function getConfrontos() {
	try {
		$cConexao = new Conexao();
		$pdo = $cConexao->Conectar();
		$q1 = $pdo->prepare("SELECT * FROM rk_confrontos_diretos");
		$q1->execute();
		$result = $q1->fetchAll();
		return $result;
	} catch(PDOException $e) {
		die($e->getMessage());
	}
}


function updateRanking(){
	$sqlAtualizaRanking = "DELETE FROM ranking;
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
	GROUP BY A.idusuario ) AS par on u.idusuario = par.idusuario ;";

	try {
		$cConexao = new Conexao();
		$pdo = $cConexao->Conectar();
		$q1 = $pdo->prepare($sqlAtualizaRanking);
		$q1->execute();
	} catch(PDOException $e) {
		die($e->getMessage());
	}
}

function getRanking() {
	try {
		$cConexao = new Conexao();
		$pdo = $cConexao->Conectar();
		$q1 = $pdo->prepare("SELECT * FROM ranking");
		$q1->execute();
		$result = $q1->fetchAll();
		return $result;
	} catch(PDOException $e) {
		die($e->getMessage());
	}
}
?>