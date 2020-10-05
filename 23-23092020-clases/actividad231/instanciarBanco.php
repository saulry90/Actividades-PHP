<?php
require 'clasesCuentas.php';
//Crear nuevo objeto cuenta
/* $cuenta1= new Cuenta();
$cuenta1->setNombre('Saul');
$cuenta1->setApellidos('Roldan Yusta');
$cuenta1->setDni("50908826M");
$cuenta1->setSaldo(101);
$cuenta1->setActiva(true); */

//Recoger datos form
$opciones=$_POST['opciones'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$dni=$_POST['dni'];
$activa=$_POST['activa'];
$cantidad=$_POST['cantidad'];



$cuentaUser=array();
$totalSaldo=0;


if (isset($_POST['aceptar']))
{
	if (!empty($opciones))
	{
		switch ($opciones) 
		{
			//---INGRESAR---;
			case 'ingresar':
				if (!empty($nombre)&&!empty($apellidos)&&!empty($dni)&&!empty($cantidad))
				{
					if ($nombre==$cuenta1->getNombre()&&$apellidos==$cuenta1->getApellidos()&&$dni==$cuenta1->getDni()) 
					{
						echo "<h1>INGRESAR DINERO</h1>";
						//abrir fichero para leerlo y pasarlo a array
						$fp=fopen("usercuenta.txt","r");
						while (!feof($fp)) 
						{
							$cuentaUser=explode(",",fgets($fp));
						}
						fclose($fp);
						//recorrer array para accedr a la posición cuenta activa y compararlo con el dato que que se selecciona en el radiobutton y si todo es correcto se hace el ingreso
						foreach ($cuentaUser as $datosUser => $datos) 
						{

						}
						if ($cuentaUser[4]=="1"&&$activa=="0") 
						{

							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> si que está activa. Si desea desactivarla puede hacerlo desde el panel</p>";
						}
						elseif ($cuentaUser[4]=="0"&&$activa=="1") 
						{
							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> está desactivada, primero tendrías que activarla</p>";
						}
						elseif ($cuentaUser[4]=="0"&&$activa=="0") 
						{
							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> no tiene cuenta activa en el banco.Si quieres dar de alta un usuario contacta con el administrador</p>";
						}
						else
						{
							echo "<p>Has efectuado un ingreso de <strong>".$cantidad."€</strong> a la cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong></p>";
							//abrir fichero para leerlo y pasarlo a array
							$fp=fopen("usercuenta.txt","r");
							while (!feof($fp)) 
							{
								$cuentaUser=explode(",",fgets($fp));
							}
							fclose($fp);
							//recorrer array para acceder a dato saldo para añadirle la cantidad y modificarlo
							foreach ($cuentaUser as $datosUser => $datos) 
							{

							}
							//declarar variable con posición del array que contiene el saldo y sumarle el ingreso actual
							$totalSaldo=($cuentaUser[3]+$cantidad);
							echo "<p>El saldo actual de la cuenta es de <strong>".$totalSaldo."€</strong></p>";
							//abrir archivo y escribir datos objeto cuenta mas el nuevo dato totalsaldo
							$fp=fopen("usercuenta.txt","w");
							fwrite($fp,$cuenta1->getNombre());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getApellidos());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getDni());
							fwrite($fp,",");
							fwrite($fp,$totalSaldo);
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getActiva());
							fclose($fp);
						}
						?>
							<form action="form.php">
								<input type="submit" value="ACEPTAR" />
							</form>						
						<?php
					}
					else
					{
						echo "<p>Comprueba bien los datos introducidos, alguno no es correcto</p>";
					}
				}
				else 
				{
					echo "<p>Debes rellenar todos los campos</p>";
				}
			break;

			//---RESTAR---;
			case 'restar':
				if (!empty($nombre)&&!empty($apellidos)&&!empty($dni)&&!empty($cantidad))
				{
					if ($nombre==$cuenta1->getNombre()&&$apellidos==$cuenta1->getApellidos()&&$dni==$cuenta1->getDni()) 
					{
						echo "<h1>RESTAR DINERO</h1>";
						//abrir fichero para leerlo y pasarlo a array
						$fp=fopen("usercuenta.txt","r");
						while (!feof($fp)) 
						{
							$cuentaUser=explode(",",fgets($fp));
						}
						fclose($fp);
						//recorrer array para accedr a la posición cuenta activa y compararlo con el dato que que se selecciona en el radiobutton y si todo es correcto se hace el ingreso
						foreach ($cuentaUser as $datosUser => $datos) 
						{

						}
						if ($cuentaUser[4]=="1"&&$activa=="0") 
						{

							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> si que está activa. Si desea desactivarla puede hacerlo desde el panel</p>";
						}
						elseif ($cuentaUser[4]=="0"&&$activa=="1") 
						{
							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> está desactivada, primero tendrías que activarla</p>";
						}
						elseif ($cuentaUser[4]=="0"&&$activa=="0") 
						{
							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> no tiene cuenta activa en el banco.Si quieres dar de alta un usuario contacta con el administrador</p>";
						}
						else 
						{
							echo "<p>Vas a restar una cantidad de <strong>".$cantidad."€</strong> a la cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong></p>";
							//abrir fichero para leerlo y pasarlo a array
							$fp=fopen("usercuenta.txt","r");
							while (!feof($fp)) 
							{
								$cuentaUser=explode(",",fgets($fp));
							}
							fclose($fp);
							//recorrer array para acceder a dato saldo para restarle la cantidad y modificarlo
							foreach ($cuentaUser as $datosUser => $datos) 
							{

							}
							//declarar variable con posición del array que contiene el saldo y restarle el ingreso actual
							$totalSaldo=($cuentaUser[3]-$cantidad);
							echo "<p>El saldo actual de la cuenta es de <strong>".$totalSaldo."€</strong></p>";
							//abrir archivo y escribir datos objeto cuenta mas el nuevo dato totalsaldo
							$fp=fopen("usercuenta.txt","w");
							fwrite($fp,$cuenta1->getNombre());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getApellidos());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getDni());
							fwrite($fp,",");
							fwrite($fp,$totalSaldo);
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getActiva());
							fclose($fp);
						}
						?>
							<form action="form.php">
								<input type="submit" value="ACEPTAR" />
							</form>						
						<?php
					}
					else
					{
						echo "<p>Comprueba bien los datos introducidos, alguno no es correcto</p>";
					}
				}
				else 
				{
					echo "<p>Debes rellenar todos los campos</p>";
				}

			break;

			//---ACTUALIZAR---;
			case 'actualizar':
				if (!empty($nombre)&&!empty($apellidos)&&!empty($dni))
				{
					if ($nombre==$cuenta1->getNombre()&&$apellidos==$cuenta1->getApellidos()&&$dni==$cuenta1->getDni()) 
					{
						echo "<h1>ACTUALIZAR DATOS</h1>";
						//abrir fichero para leerlo y pasarlo a array
						$fp=fopen("usercuenta.txt","r");
						while (!feof($fp)) 
						{
							$cuentaUser=explode(",",fgets($fp));
						}
						fclose($fp);
						
						//recorrer array para acceder a dato cuenta activa
						foreach ($cuentaUser as $datosUser => $datos) 
						{

						}
						//Comprobar dato cuenta activa del array si es igual a true && el dato del radiobutton también es igual a true
						if ($cuentaUser[4]=="1"&&$activa=="1") 
						{
							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> ya estaba activa</p>";
							?>
							<form action="form.php">
								<input type="submit" value="ACEPTAR" />
							</form>						
							<?php						
						}
						//Comprobar dato cuenta activa del array si es igual a true && el dato del radiobutton es igual a false
						elseif($cuentaUser[4]=="1"&&$activa=="0") 
						{
							echo "<p>Vas a desactivar la cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong></p>";
							//abrir archivo y escribir datos objeto cuenta mas el dato saldo(pos3) y el nuevo dato activa
							$fp=fopen("usercuenta.txt","w");
							fwrite($fp,$cuenta1->getNombre());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getApellidos());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getDni());
							fwrite($fp,",");
							fwrite($fp,$cuentaUser[3]);
							fwrite($fp,",");
							fwrite($fp,$activa);
							fclose($fp);
							?>
							<form action="form.php">
								<input type="submit" value="ACEPTAR" />
							</form>						
							<?php
						}
						elseif($cuentaUser[4]=="0"&&$activa=="0") 
						{
							echo "<p>La cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong> ya estaba desactivada</p>";
							?>
							<form action="form.php">
								<input type="submit" value="ACEPTAR" />
							</form>						
							<?php							}
						elseif($cuentaUser[4]=="0"&&$activa=="1") 
						{
							echo "<p>Vas a activar la cuenta de <strong>".$nombre." ".$apellidos."</strong> con DNI <strong>".$dni."</strong></p>";	
							//abrir archivo y escribir datos objeto cuenta mas el dato saldo(pos3) y el nuevo dato activa
							$fp=fopen("usercuenta.txt","w");
							fwrite($fp,$cuenta1->getNombre());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getApellidos());
							fwrite($fp,",");
							fwrite($fp,$cuenta1->getDni());
							fwrite($fp,",");
							fwrite($fp,$cuentaUser[3]);
							fwrite($fp,",");
							fwrite($fp,$activa);
							fclose($fp);

							?>
							<form action="form.php">
								<input type="submit" value="ACEPTAR" />
							</form>						
							<?php					
						}
					}
					else 
				{
					echo "<p>Comprueba bien los datos introducidos, alguno no es correcto</p>";
				}
				}
				else 
				{
					echo "<p>Debes rellenar todos los campos</p>";
				}
			break;
		}
	}
	else 
	{
		echo "Elige una opción a realizar";
	}
}
?>