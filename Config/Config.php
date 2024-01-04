<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	//le quite el /
	const BASE_URL = "http://localhost/demo.tiendavirtual/";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexi�1�7�1�7n a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "bd_demo";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/ ";

	//Datos envio de correo
	//NOMBRE DE LA EMPRESA EN LA QUE SE ESTA DESARROLLAND
	const NOMBRE_REMITENTE = "Codware";
	// CORREO DE LA EMPRESA DONDE LLEGARA
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPRESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.codware.com";
	

	const CAT_SLIDER = "1,2,3,4,5"; // slider banner promociones
	const CAT_BANNER = "1,2,3,4,5,6"; // banner categorias
	const CATEGORIAS_HEADER = "1,2,3,4,5,6,7,8,9,10"; // categorias en el header



	const CAT_BANNER_PRO = "1,2,3"; //falta verlo


 ?>