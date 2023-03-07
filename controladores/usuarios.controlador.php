<?php





class ControladorUsuarios
{


    static public function ctrIngresoUsuario()
    {
        $key='$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$';

        if (isset($_POST["ingUsuario"])) {

            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])
            ) {

                $encriptar = crypt($_POST["ingPassword"], $key);

                $tabla = "usuarios";

                $item = "nombre_usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                if ($respuesta["nombre_usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar) {

                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre_usuario"] = $respuesta["nombre_usuario"];
                        $_SESSION["correo"] = $respuesta["correo"];
                        $_SESSION["tipo_usuario"] =$respuesta["tipo_usuario"];
                        $_SESSION['password']= crypt($respuesta['password'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                     
                        

                           echo '<script>

                            window.location = "inicio";

                        </script>';
                        
                  
                } else {

                    echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                }
                //print_r($respuesta);
            }
        }
    }


    /*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";

		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;
	}
}
