<?php 
	class RolDao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = DataBase::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear Rol
		public function createRolDao($rolDto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO ROLES VALUES (
							:idRol,
							:nombreRol
						)';
				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idRol',$rolDto->getCodigoRol());			
				$dbh->bindValue('nombreRol',$rolDto->getNombreRol());
				// Ejecutar la consulta
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}

		# Consultar Roles
		public function readRolDao(){
			try {
				// Crear un Arreglo Vacío
				$rolList = [];
				// Asignar una consulta al atributo $sql
				$sql = 'SELECT * FROM ROLES';
				// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
				$dbh = $this->pdo->query($sql);
				foreach ($dbh->fetchAll() as $rol) {
					$rolList[] = new RolDto(
						$rol['codigo_rol'],
						$rol['nombre_rol']						
					);
				}
				return $rolList;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		# Obtener IdRol
		public function getById($idRol){
			try {
				# Consulta
				$sql = "SELECT * FROM ROLES WHERE codigo_rol=:idRol";
				# Preparar la BBDD
				$dbh = $this->pdo->prepare($sql);
				# Vincular los datos
				$dbh->bindValue('idRol', $idRol);
				# Ejecutar la consulta
				$dbh->execute();
				# Crear un objeto del registro la BBDD
				$rolDb = $dbh->fetch();
				# Crear el objeto del modelo
				$rol = new RolDto(
					$rolDb['codigo_rol'],
					$rolDb['nombre_rol'],					
				);
				return $rol;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		# Actualizar un Rol
        public function updateRolDao($userDto){
            try {
				// Crear la Consulta
				$sql = 'UPDATE ROLES SET
							codigo_rol = :idRol,
							nombre_rol = :nombreRol
						WHERE codigo_rol = :idRol';

				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);

				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idRol', $userDto->getCodigoRol());			
				$dbh->bindValue('nombreRol', $userDto->getNombreRol());

				// Ejecutar la consulta
				$dbh->execute();
                
			} catch (Exception $e) {
				die($e->getMessage());	
			}
        }

		# Eliminar un Rol
		public function deleteRolDao($idRol){
			try {
				$sql = 'DELETE FROM ROLES WHERE codigo_rol = :idRol';
				$dbh = $this->pdo->prepare($sql);
				$dbh->bindValue('idRol', $idRol);
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
		
	}
?>