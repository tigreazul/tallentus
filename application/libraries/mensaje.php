<?php
/*
*************************************************************
Página/Clase    : libraries/mensaje.php
Propósito       : Mensaje para el Sistema
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
*************************************************************
*/
class Mensaje {


	public function html_mensaje_confirmacion($arr){
		$html = '
		<table cellspacing="0" cellpadding="0" width="600">
		    <tbody>
			    <tr>
			        <td align="center" valign="top">
			            <table cellspacing="0" cellpadding="0" width="100%" style="background-color:#3bcdb0">
			                <tbody>
				                <tr>
				                    <td style="background-color:#3bcdb0">
				                        <table cellspacing="0" cellpadding="0" width="100%">
				                            <tbody>
				                            	<tr>
					                                <td style="font-size:40px;font-weight:600;color:#ffffff;text-align:center">
					                                    Welcome to Tallentus
					                                    <br>
					                                </td>
					                            </tr>
				                        	</tbody>
				                        </table>
				                        <table cellspacing="0" cellpadding="0" width="100%">
				                            <tbody>
				                            	<tr>
					                                <td>
					                                    <img src="https://ci4.googleusercontent.com/proxy/hCcTt8xsUTB3ox3mRlgkIuiKXo4dVCmAW1maeHhHLPxrkbKzWyDSGPOigqUn-MEdC6g0ioWRdf4XDPiTNRCDJVcXOqKgETvEhYzZ87U=s0-d-e1-ft#https://www.filepicker.io/api/file/4BgENLefRVCrgMGTAENj" style="max-width:100%;display:block" class="CToWUd a6T" tabindex="0">
					                                </td>
					                            </tr>
				                        	</tbody>
				                        </table>
				                    </td>
				                </tr>
			            	</tbody>
			            </table>
			            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
			                <tbody>
				                <tr>
				                    <td style="background-color:#ffffff">
				                        <table width="100%" cellpadding="0" cellspacing="0">
				                            <tbody>
				                                <tr>
				                                    <td style="text-align:left">
				                                        <br>
				                                        &nbsp;&nbsp;&nbsp;&nbsp;Bienvenido/a, '.$arr['nombre'].' . 
				                                        <br>
				                                        Le damos la bienvenida a <a href="http://conectagro.pe/" target="_blank">conectagro.pe</a>, Te encuentras a pocos instantes de 
				                                        ingresar a la plataforma ecommerce. Para activar tu cuenta, haz click en el siguiente enlace:
				                                    </td>
				                                </tr>
				                            </tbody>
				                        </table>
				                        <table style="margin:0 auto" cellspacing="0" cellpadding="10" width="100%">
				                            <tbody>
				                            	<tr>
					                                <td style="text-align:center;margin:0 auto">
					                                    <br>
					                                    <div>
					                                        <a href="'.$arr['url'].'">Activar Cuenta</a>
					                                    </div>
					                                    <br>
					                                </td>
				                            	</tr>
				                        	</tbody>
				                        </table>
				                        <table width="100%" cellpadding="0" cellspacing="0">
				                            <tbody>
				                                <tr>
				                                    <td style="text-align:left">
				                                        <p>Es importante este proceso para poder verificar tu cuenta. Luego podrás ofertar y demandar los productos agricolas que desees.</p>
				                                        <br>
				                                        Tus credenciales de acceso son las siguientes:
														<br>
				                                        Correo electr&#243;nico: <strong>'.$arr['correo'].'</strong> <br>
				                                        Contrase&#241;a: <strong>La que eligio</strong>

				                                        <p>El equipo de Conectagro.pe</p>
				                                    </td>
				                                </tr>
				                            </tbody>
				                        </table>
				                    </td>
				                </tr>
				            </tbody>
				        </table>
			        </td>
			    </tr>
			</tbody>
		</table>
		';

		return $html;
	}



	public function html_mensaje($arr){
		$html = '
		<table cellspacing="0" cellpadding="0" width="600">
		    <tbody>
			    <tr>
			        <td align="center" valign="top">
			            <table cellspacing="0" cellpadding="0" width="100%" style="background-color:#3bcdb0">
			                <tbody>
				                <tr>
				                    <td style="background-color:#3bcdb0">
				                        <table cellspacing="0" cellpadding="0" width="100%">
				                            <tbody>
				                            	<tr>
					                                <td style="font-size:40px;font-weight:600;color:#ffffff;text-align:center">
					                                    Welcome to Tallentus
					                                    <br>
					                                </td>
					                            </tr>
				                        	</tbody>
				                        </table>
				                        <table cellspacing="0" cellpadding="0" width="100%">
				                            <tbody>
				                            	<tr>
					                                <td>
					                                    <img src="https://ci4.googleusercontent.com/proxy/hCcTt8xsUTB3ox3mRlgkIuiKXo4dVCmAW1maeHhHLPxrkbKzWyDSGPOigqUn-MEdC6g0ioWRdf4XDPiTNRCDJVcXOqKgETvEhYzZ87U=s0-d-e1-ft#https://www.filepicker.io/api/file/4BgENLefRVCrgMGTAENj" style="max-width:100%;display:block" class="CToWUd a6T" tabindex="0">
					                                </td>
					                            </tr>
				                        	</tbody>
				                        </table>
				                    </td>
				                </tr>
			            	</tbody>
			            </table>
			            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
			                <tbody>
				                <tr>
				                    <td style="background-color:#ffffff">
				                        <table width="100%" cellpadding="0" cellspacing="0">
				                            <tbody>
				                                <tr>
				                                    <td style="text-align:left">
				                                        <br>
				                                        &nbsp;&nbsp;&nbsp;&nbsp;Bienvenido/a, '.$arr['nombre'].' . 
				                                        <br>
				                                        Le damos la bienvenida a <a href="http://tallentus.com/" target="_blank">tallentus.com</a>
				                                    </td>
				                                </tr>
				                            </tbody>
				                        </table>
				                        <table width="100%" cellpadding="0" cellspacing="0">
				                            <tbody>
				                                <tr>
				                                    <td style="text-align:left">
				                                        <p>Tus credenciales de acceso son las siguientes:</p>
														<br>
				                                        Correo electr&#243;nico: <strong>'.$arr['correo'].'</strong> <br>
				                                        Contrase&#241;a: <strong>La que eligio</strong>

				                                        <p>El equipo de tallentus.com</p>
				                                    </td>
				                                </tr>
				                            </tbody>
				                        </table>
				                    </td>
				                </tr>
				            </tbody>
				        </table>
			        </td>
			    </tr>
			</tbody>
		</table>
		';
		return $html;
	}
	
	public function html_suscripcion($arr){
		$html = '
		<table cellspacing="0" cellpadding="0" width="600">
		    <tbody>
			    <tr>
			        <td align="center" valign="top">
			            <table cellspacing="0" cellpadding="0" width="100%" style="background-color:#3bcdb0">
			                <tbody>
				                <tr>
				                    <td style="background-color:#3bcdb0">
				                        <table cellspacing="0" cellpadding="0" width="100%">
				                            <tbody>
				                            	<tr>
					                                <td style="font-size:40px;font-weight:600;color:#ffffff;text-align:center">
					                                    Welcome to Tallentus
					                                    <br>
					                                </td>
					                            </tr>
				                        	</tbody>
				                        </table>
				                        <table cellspacing="0" cellpadding="0" width="100%">
				                            <tbody>
				                            	<tr>
					                                <td>
					                                    <img src="https://ci4.googleusercontent.com/proxy/hCcTt8xsUTB3ox3mRlgkIuiKXo4dVCmAW1maeHhHLPxrkbKzWyDSGPOigqUn-MEdC6g0ioWRdf4XDPiTNRCDJVcXOqKgETvEhYzZ87U=s0-d-e1-ft#https://www.filepicker.io/api/file/4BgENLefRVCrgMGTAENj" style="max-width:100%;display:block" class="CToWUd a6T" tabindex="0">
					                                </td>
					                            </tr>
				                        	</tbody>
				                        </table>
				                    </td>
				                </tr>
			            	</tbody>
			            </table>
			            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
			                <tbody>
				                <tr>
				                    <td style="background-color:#ffffff">
				                        <table width="100%" cellpadding="0" cellspacing="0">
				                            <tbody>
				                                <tr>
				                                    <td style="text-align:left">
				                                        <br>
				                                        Hola <strong>'.$arr['correo'].'</strong> <br>
				                                        Le damos la bienvenida a <a href="http://tallentus.com/" target="_blank">tallentus.com</a>
				                                        Muchas gracias por suscribirte
				                                    </td>
				                                </tr>
				                            </tbody>
				                        </table>
				                        <table width="100%" cellpadding="0" cellspacing="0">
				                            <tbody>
				                                <tr>
				                                    <td style="text-align:left">
				                                        <p>El equipo de tallentus.com</p>
				                                    </td>
				                                </tr>
				                            </tbody>
				                        </table>
				                    </td>
				                </tr>
				            </tbody>
				        </table>
			        </td>
			    </tr>
			</tbody>
		</table>
		';
		return $html;
	}

}