<?php
class FichePerso{

	private $Classe;
	private $Nom;
	private $Age;
	public $Niveau;
	private $Arme;
	private $Force;

	public function setClasse($Classe){
		$this->Classe = $Classe;
	}

	public function getClasse(){
		return $this->Classe;
	}

	
	public function setNom($Nom){
		$this->Nom = $Nom;
	}

	public function getNom(){
		return $this->Nom;
	}


	public function setAge($Age){
		$this->Age = $Age;
	}

	public function getAge(){
		return $this->Age;
	}
	
	public function setNiveau($Niveau){
		$this->Niveau = $Niveau;
	}

	public function getNiveau(){
		return $this->Niveau;
	}

	public function setArme($Arme){
		$this->Arme = $Arme;
	}

	public function getArme(){
		return $this->Arme;
	}
	
	public function setForce($Force){
		$this->Force = $Force;
	}

	public function getForce(){
		return $this->Force;
	}
}

$user = new FichePerso();
$user->setClasse("Guerrier");
$user->setNom("Rat");
$user->setAge(20);
$user->setNiveau(2);
$user->setArme("Hache");
$user->setForce(100);
echo "Classe : ".$user->getClasse()."</br>Nom : ".$user->getNom()."</br>Age: ". $user->getAge()."</br>Niveau actuel : ".$user->getNiveau()."</br>Arme : ".$user->getArme()."</br>Force : ".$user->getForce();


	function levelUp($Niveau, $Force){
		$Niveau++;
		$Force =+ 50;
	}
	if(array_key_exists('levelUp', $_POST)){	
		$x += 1;
		$y += 50;
		levelUp($x, $y);
	}

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Question3</title>
</head>
<body>
	<?php
	?>
	
	<form method="post">
		<input type="submit" name="levelUp" class="button" value="levelUp" />
	</form>
		
</body>
</html>
