<?php


/**
* 
*/
class Reparaciones extends Controller
{
	public function index()
	{
        if ($this->isLogin()==false){
            header('Location: http://localhost/proyectobd/public/login/');
            return false;
        }else{
            $this->view('reparaciones/index');
            // INSERTAR
            if (isset($_POST['enviar'])) {

                $fechaRec=$_POST['inputfechaRec'];
                $imei=$_POST['inputImei'];
                $descripcion=$_POST['inputDescrip'];
               
                $observacion='';
                $cedulaTec=$_POST['inputCedulaTec'];

                $cnx = $this->conectarBD();
                $query = "select imei from reparacion where fecha_recibido='$fechaRec' and imei='$imei'";
                $rs = pg_query($cnx, $query);
                $row1 = pg_fetch_row($rs);

                $query = "select cedula from tecnico where cedula='$cedulaTec'";
                $rs = pg_query($cnx, $query);
                $row2 = pg_fetch_row($rs);

                $query = "select imei from dispositivo where imei='$imei'";
                $rs = pg_query($cnx, $query);
                $row3 = pg_fetch_row($rs);
                if ($row3!=null){
                    if ($row1==null)
                    {
                        if ($row2!=null){

                            $this->insertarReparacion($imei,$fechaRec,$descripcion,$observacion,"hola",$cedulaTec);
                        }else{
                            echo '<script language="javascript">';
                            echo 'error_msg("Tecnico no registrado");';
                            echo '</script>';

                        }
                    }else{
                        echo '<script language="javascript">';
                        echo 'error_msg("Esa reparacion ya existe.");';
                        echo '</script>';
                    }
                }else {

                    echo '<script language="javascript">';
                    echo 'error_msg("El dispositivo no esta registrado.");';
                    echo '</script>';
                }

            }
            // MODIFICAR
            if (isset($_POST['enviar2'])) {

                $fechaRec=$_POST['inputfechaRec2'];
                $imei=$_POST['inputImei2'];
                $descripcion=$_POST['inputDescrip2'];
                $historia=$_POST['inputHist2'];
                $estado=$_POST['inputEstado2'];
                $observacion=$_POST['inputObser2'];
                $cedulaTec=$_POST['inputCedulaTec2'];
                $this->modificarReparacion($imei,$fechaRec,$descripcion,$estado,$observacion,$historia,$cedulaTec);
            }
        }
    }
	

	 public function show()
    {
        echo $reparacion = $this->getReparacion();

    }

}