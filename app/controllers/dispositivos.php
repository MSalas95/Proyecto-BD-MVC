<?php


/**
* 
*/
class Dispositivos extends Controller
{

	public function index()
	{
        if ($this->isLogin()==false){
            header('Location: http://localhost/proyectobd/public/login/');
            return false;
        }else{
            $dispositivos = $this->getDispositivo();
    		$this->view('dispositivos/index',[$dispositivos]);
        // INSERTAR
            if (isset($_POST['enviar'])) {

                $marca=$_POST['inputMarca'];
                $modelo=$_POST['inputModelo'];
                $imei=$_POST['inputImei'];
                $descripcion=$_POST['inputDescrip'];
                $ced_cli=$_POST['inputCedulaCli'];

                $cnx = $this->conectarBD();
                $query = "select imei from dispositivo where imei='$imei'";
                $rs = pg_query($cnx, $query);
                $row1 = pg_fetch_row($rs);

                $query = "select cedula from cliente where cedula='$ced_cli'";
                $rs = pg_query($cnx, $query);
                $row2 = pg_fetch_row($rs);
                if ($row1==null)
                {
                    if ($row2!=null){
                        $this->insertarDispositivo($marca,$modelo,$imei,$descripcion,$ced_cli);
                    }else{
                        echo '<script language="javascript">';
                        echo 'success_msg("Cliente no registrado, Por favor registrar");';
                        echo '</script>';

                    }
                }else{
                    echo '<script language="javascript">';
                    echo 'success_msg("IMEI del dispositivo ya esta Registrado.");';
                    echo '</script>';
                }
                

            }
        // MODIFICAR
            if (isset($_POST['enviar2'])) {

                $marca=$_POST['inputMarca2'];
                $modelo=$_POST['inputModelo2'];
                $imei=$_POST['inputImei2'];
                $descripcion=$_POST['inputDescrip2'];
                $ced_cli=$_POST['inputCedulaCli2'];
                $this->modificarDispositivo($imei,$marca,$modelo,$descripcion,$ced_cli);
            }
        }
	}

	public function show()
    {
        echo $dispositivo = $this->getDispositivo();
    }

}