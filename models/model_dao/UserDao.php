<?php 
	class UserDao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = DataBase::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear User
		public function createUser($UserDto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO USUARIOS VALUES (
							:idRol,
							:codigoUser,
							:nombresUser,
							:apellidosUser,							
							:correoUser
						)';
				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idRol',$UserDto->getCodigoRol());			
				$dbh->bindValue('codigoUser',$UserDto->getCodigoUser());
				$dbh->bindValue('nombresUser',$UserDto->getNombresUser());
				$dbh->bindValue('apellidosUser',$UserDto->getApellidosUser());
				$dbh->bindValue('correoUser',$UserDto->getCorreoUser());
				// Ejecutar la consulta
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}
		/*
		# Consultar Useres
		public function readUserDao(){
			try {
				// Crear un Arreglo Vacío
				$UserList = [];
				// Asignar una consulta al atributo $sql
				$sql = 'SELECT * FROM UserES';
				// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
				$dbh = $this->pdo->query($sql);
				foreach ($dbh->fetchAll() as $User) {
					$UserList[] = new UserDto(
						$User['codigo_User'],
						$User['nombre_User']						
					);
				}
				return $UserList;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		# Obtener IdUser
		public function getById($idUser){
			try {
				# Consulta
				$sql = "SELECT * FROM UserES WHERE codigo_User=:idUser";
				# Preparar la BBDD
				$dbh = $this->pdo->prepare($sql);
				# Vincular los datos
				$dbh->bindValue('idUser', $idUser);
				# Ejecutar la consulta
				$dbh->execute();
				# Crear un objeto del registro la BBDD
				$UserDb = $dbh->fetch();
				# Crear el objeto del modelo
				$User = new UserDto(
					$UserDb['codigo_User'],
					$UserDb['nombre_User'],					
				);
				return $User;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		# Actualizar un User
        public function updateUserDao($userDto){
            try {
				// Crear la Consulta
				$sql = 'UPDATE UserES SET
							codigo_User = :idUser,
							nombre_User = :nombreUser
						WHERE codigo_User = :idUser';

				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);

				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idUser', $userDto->getCodigoUser());			
				$dbh->bindValue('nombreUser', $userDto->getNombreUser());

				// Ejecutar la consulta
				$dbh->execute();
                
			} catch (Exception $e) {
				die($e->getMessage());	
			}
        }

		# Eliminar un User
		public function deleteUserDao($idUser){
			try {
				$sql = 'DELETE FROM UserES WHERE codigo_User = :idUser';
				$dbh = $this->pdo->prepare($sql);
				$dbh->bindValue('idUser', $idUser);
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
		*/
	}
?>