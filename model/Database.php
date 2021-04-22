<?php 
	/**
	 * Class Database permet une connexion a la bd
	 */
	class Database
	{
		
		/**
		* @var pdo contient la connexion
		* */
		private $db;

		/**
		*	@param $dbname string nom de la bd
		* 	@param $user string nom d'utilisateur
		* 	@param $mdp string mot de passe de l'utilisateur
		* */
		function __construct($dbname, $user = "root", $mdp = "")
		{
			try {
				$this->db = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $mdp);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

			} catch (PDOException $e) {
				die('Erreur: '.$e->getMessage());
			}
		}

		/**
		*	@return $this->db
		* */
		public function getDB(){return $this->db;}

		public function login($email, $password)
		{
			try{
				$q = $this->getDB()->prepare('SELECT * FROM USERS WHERE email =:email AND password =:password');
				$q->execute([
					'email' => $email,
					'password' => $password
				]);
		
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}

			return $q->fetch(PDO::FETCH_OBJ);
		}

		public function addUser(User $user)
		{
			try{
				$q = $this->getDB()->prepare('INSERT INTO USERS VALUES (null, :prenom, :nom, :role, :email, :password)');
				return $q->execute([
					'prenom' => $user->prenom,
					'nom' => $user->nom,
					'role' => $user->role,
					'email' => $user->email,
					'password' => $user->password,
				]);
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}			
		}

		public function addCV(CV $cv)
		{
			try {
				$q = $this->getDB()->prepare('INSERT INTO CV VALUES (null, :prenom, :nom, :age, :adresse, :email, :tel, :level, :experience, :user_id)');
				return $q->execute([
					'prenom' => $cv->prenom,
					'nom' => $cv->nom,
					'tel' => $cv->tel,
					'email' => $cv->email,
					'adresse' => $cv->adresse,
					'age' => $cv->age,
					'level' => $cv->level,
					'experience' => $cv->experience,
					'user_id' => $cv->user_id
				]);
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}
		}

		public function editCv(CV $cv, $id)
		{
			try {
				$q = $this->getDB()->prepare('UPDATE CV 
						SET prenom=:prenom, nom=:nom, tel=:tel, email=:email, adresse=:adresse, age=:age, level=:level, experience=:experience WHERE id=:id AND user_id=:user_id)');
			return $q->execute([
				'prenom' => $cv->prenom,
				'nom' => $cv->nom,
				'tel' => $cv->tel,
				'email' => $cv->email,
				'adresse' => $cv->adresse,
				'age' => $cv->age,
				'level' => $cv->level,
				'experience' => $cv->experience,
				'user_id' => $cv->user_id,
				'id' => $id
			]);
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}
		}

		public function getCvByUserId($user_id)
		{
			try {
				$q = $this->getDB()->prepare('SELECT * FROM CV WHERE user_id =:user_id');
				$q->execute([
					'user_id' => $user_id,
				]);
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}

			return $q->fetch(PDO::FETCH_OBJ);
		}

		public function getCvById($id)
		{
			try {
				$q = $this->getDB()->prepare('SELECT * FROM CV WHERE id =:id');
				$q->execute([
					'id' => $id,
				]);
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}

			return $q->fetch(PDO::FETCH_OBJ);
		}

		public function deleteCv($id)
		{
			try {
				$q = $this->getDB()->prepare('DELETE FROM CV WHERE id = ?');
				return $q->execute([$id]);
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}
		}

		public function addEmploi(Emploi $em)
		{
			try {
				$q = $this->getDB()->prepare('INSERT INTO Emploi VALUES (null, :titre, :description, :user_id)');
				return $q->execute([
					'titre' => $em->titre,
					'description' => $em->description,
					'user_id' => $em->user_id
				]);
			} catch (PDOException $e) {
				die('Erreur: ' . $e->getMessage());
			}
		}

	public function editEmploi($id, $titre, $description)
	{
		try {
			$q = $this->getDB()->prepare('UPDATE Emploi SET titre=:titre, description=:description WHERE id =:id)');
			return $q->execute([
				'titre' => $titre,
				'description' => $description,
				'id' => $id
			]);
		} catch (PDOException $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function deleteEmploi($id)
	{
		try {
			$q = $this->getDB()->prepare('DELETE FROM Emploi WHERE id = ?');
			return $q->execute([$id]);
		} catch (PDOException $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function getEmplois()
	{
		try {
			$q = $this->getDB()->prepare('SELECT * FROM EMPLOI');
			$q->execute();
		} catch (PDOException $e) {
			die('Erreur: ' . $e->getMessage());
		}

		return $q->fetchAll(PDO::FETCH_OBJ);
	}

	public function getEmploisByUserId($user_id)
	{
		try {
			$q = $this->getDB()->prepare('SELECT * FROM EMPLOI WHERE user_id =:user_id');
			$q->execute([
				'user_id' => $user_id,
			]);
		} catch (PDOException $e) {
			die('Erreur: ' . $e->getMessage());
		}

		return $q->fetchAll(PDO::FETCH_OBJ);
	}

	public function getEmploiById($id)
	{
		try {
			$q = $this->getDB()->prepare('SELECT * FROM EMPLOI WHERE id =:id');
			$q->execute([
				'id' => $id,
			]);
		} catch (PDOException $e) {
			die('Erreur: ' . $e->getMessage());
		}

		return $q->fetch(PDO::FETCH_OBJ);
	}
}
