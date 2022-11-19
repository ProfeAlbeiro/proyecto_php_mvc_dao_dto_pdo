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

		# Registrar o Crear Usuario
		public function createRol($userDto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO roles VALUES (
							:idRol,
							:nombreRol
						)';
				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idRol',$userDto->getCodigoRol());			
				$dbh->bindValue('nombreRol',$userDto->getNombreRol());
				// Ejecutar la consulta
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}
		
	}
?>