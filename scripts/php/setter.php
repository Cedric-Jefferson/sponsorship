<?php 


include 'functions.php';

// if(isset($_POST['set']))

$bdd = bdd_access();

	try{

		$nbre_eleve = $bdd->query("SELECT count(*) FROM filleuls")->fetchColumn();

		for ($i=0; $i<$nbre_eleve ; $i++) { 
			//récupérer un parrain au hasard et attribuer à un élève
			$random = $bdd->query("SELECT * FROM parrains WHERE appaired=0 order by rand() limit 1 ") ;
			$random_parrain=$random->fetch();

			var_dump($random_parrain);
			//si tous les parrains ont été attribués on remet tous les apparies à 0 et on recommence à apparier
			if(!$random_parrain){
            //comme une sorte de raccourci pour value
				$req=$bdd->prepare('UPDATE parrains SET appaired = 0 WHERE appaired = :val');
				$req->execute(array("val"=> 1));
				--$i;
				continue;
			}

			$req=$bdd->prepare('UPDATE filleuls SET parrain_id = :parrain WHERE id_filleul = :filleul');
			$req->execute(array("parrain"=> $random_parrain['id_parrain'], "filleul"=>$i+1));

			$req=$bdd->prepare('UPDATE parrains SET appaired = 1 WHERE id_parrain = :parrain');
			$req->execute(array("parrain"=> $random_parrain['id_parrain']));

			$random_parrain=null;

		}

	}
	catch(Exception $e){
		die("erreur de connection a pdo".$e->getMessage());

	}
	finally{
		die("C'est ok !!!");
	}

 ?>