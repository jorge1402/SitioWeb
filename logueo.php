<?php
//$Usuario=$_POST["USUARIO"];
//extract($_POST);
//$clave=$_POST["PASSWORD"];
session_start();
if (!empty($_POST)) {
	extract($_POST);

if($Usuario=="ADMIN" && $clave=="ADMIN"){
	$_SESSION["INICIOSESION"]=1;
	header("Location:formulario.php");
} else echo "USUARIO o contraseña no valida";
}
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE> LOGUEO CON HTML5 </TITLE>
	</HEAD>
	<BODY>
		<STYLE>
			FIELDSET{
				MARGIN-LEFT: AUTO;
				MARGIN-RIGHT: AUTO;
				WIDTH: 200PX;
			}
			H1{
				MARGIN-TOP:150PX;
				TEXT-ALIGN: CENTER;
			}
			/* SOLO SE APLICA A LAS ETIQUETAS INPUT DE TIPO TEXTO Y A LOS LABEL */
			INPUT[TYPE="TEXT"],INPUT[TYPE="PASSWORD"],LABEL{
				WIDTH:100%;
			}
			.DERECHO{
				TEXT-ALIGN:RIGHT;
			}
		</STYLE>
		<H1> BODEGUITA GARAVITO </H1>
		<FIELDSET>
			<LEGEND> Ingrese sus Datos </LEGEND>
			<FORM METHOD="POST">
				<LABEL> Usuario </LABEL>
				<INPUT TYPE="TEXT" NAME="Usuario"/>
				<INPUT TYPE="PASSWORD" NAME="clave"/>
				<DIV CLASS="DERECHO">
					<INPUT TYPE="CHECKBOX" NAME="RECORDAR"/>		
					<LABEL> Recordar </LABEL>
				</DIV>
				<DIV STYLE="TEXT-ALIGN:CENTER; MARGIN-TOP:10PX;">
					<INPUT STYLE="WIDTH:90%;" TYPE="SUBMIT" NAME="ENVIAR" VALUE="INICIAR SESION"/>
				</DIV>
			</FORM>
		</FIELDSET>
	</BODY>
</HTML>