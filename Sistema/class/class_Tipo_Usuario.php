<?php

	class TipoUsuario{

		private $codigoUsuario;
		private $nombreTipoUsuario;
		private $fotografia;

		public function __construct($codigoUsuario,
					$nombreTipoUsuario,
					$fotografia){
			$this->codigoUsuario = $codigoUsuario;
			$this->nombreTipoUsuario = $nombreTipoUsuario;
			$this->fotografia = $fotografia;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getNombreTipoUsuario(){
			return $this->nombreTipoUsuario;
		}
		public function setNombreTipoUsuario($nombreTipoUsuario){
			$this->nombreTipoUsuario = $nombreTipoUsuario;
		}
		public function getFotografia(){
			return $this->fotografia;
		}
		public function setFotografia($fotografia){
			$this->fotografia = $fotografia;
		}
		public function toString(){
			return "CodigoUsuario: " . $this->codigoUsuario . 
				" NombreTipoUsuario: " . $this->nombreTipoUsuario . 
				" Fotografia: " . $this->fotografia;
		}
		public static function generarListaTipoUsuario($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_tipo_usuario, nombre_tipo_usuario 
				FROM tbl_tipo_usuarios")			
			);
			echo '<select name="" id="slc-tipo_usuario" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_tipo_usuario"].'">'.
					$fila["nombre_tipo_usuario"].'</option>';
			}
			echo '</select>';
		}
	}
?>