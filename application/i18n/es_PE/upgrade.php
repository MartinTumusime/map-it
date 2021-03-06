<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2014-09-27 05:34+0000
// PO revision date:  2014-07-16 23:29+0000
$lang = array(
	'upgrade' => array(
		'between' => 'Dato de entrada inválido. Puede ser 0 para No o 1 para Si.',
	) ,
	'upgrade_automatic' => 'Actualización automática',
	'upgrade_available' => 'Actualizaciones disponibles',
	'upgrade_continue_btn_text' => 'Continuar',
	'upgrade_db_btn_text' => 'Actualizar',
	'upgrade_db_text_1' => 'Entonces, voy a actualizar su base de datos desde la versión',
	'upgrade_db_text_2' => 'para la nueva versión de la base de datos',
	'upgrade_db_text_3' => 'Haga click en el botón "Actualizar" y solo relájate mientras realizo la magia.',
	'upgrade_db_text_4' => 'Adicionalmente, si quieres respaldar tu base de datos, marca el checkbox de abajo y yo lo haré en un instante.',
	'upgrade_db_text_5' => '¿Respaldar base de datos antes de la actualización? (<strong style="color:#FF0000;">Altamente recomendado</strong>)',
	'upgrade_db_title' => 'Base de datos de Ushahidi actualizada',
	'upgrade_db_info' => 'Ushahidi ha sido actualizado! Antes de continuar, necesitas actualizar tu base de datos a la nueva versión (%s).',
	'upgrade_db_up_to_date' => 'Tu versión de base de datos está actualizada',
	'upgrade_failed' => 'La actualización ha fallado en algún punto',
	'upgrade_manual' => 'Actualización manual',
	'upgrade_status' => 'Estatus de actualización de Ushahidi',
	'upgrade_text_1' => 'Estas instrucciones lo guiarán para actualizar manualmente Ushahidi',
	'upgrade_text_2' => '<dl><dt><strong>Descarga</strong></dt>',
	'upgrade_text_3' => '<dd>- Descarga la más reciente versión de Ushahidi desde ',
	'upgrade_text_4' => '<dt><strong>Respaldo</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php y ./applications/config/auth.php files. </dd><dd>- Por si algo sale mal, es recomendable que hagas un respaldo completo de tu implementacion de Ushahidi.</dd><dt><strong>Copiar archivos</strong></dt><dd>- Extraer el zip descargado</dd><dd>- Dependiendo del sistema operativo de tu servidor, usa tu herramienta o modo favorito (p.e. Telnet, FTP, SSH) para entrar en el servidor y reemplazar los contenidos de todas las carpetas con los ficheros de la compilación más reciente.</dd><dt><strong>Actualizar Base de datos</strong></dt><dd>- Primero determina la version del esquema de tu base de datos mirando el valor <strong>db_version</strong> en la tabla de configuración o mira en la información de la actualización de Ushahidi al principio de esta página. </dd><dd>- Si tienes la version 25, necesitas actualizar de 25-26, 26-27, 27-28 y así sucesivamente hasta el último archivo SQL en el directorio <strong>/sql</strong>.</dd><dd>- Con tu cliente de base de datos, actualiza la base de datos ejecutando el archivo upgradex-x.sql apropiado.</dd></dl>',
	'upgrade_tables' => '<strong>Paso 3:</strong> Mira dentro de la carpeta <strong>sql</strong>. Ejecuta manualmente el archivo<xx>-<xx>.sql iniciando desde el actual versión de la base de datos de su instalación hasta el archivo final de upgrade sql.',
	'upgrade_text_5' => '<strong>Paso 4:</strong> Click en <strong>"Continuar"</strong> botón para actualizar las tablas necesarias.',
	'upgrade_text_6' => 'Para una actualización automática, click en el siguiente botón',
	'upgrade_title_text' => 'Actualmente estás usando Ushahidi v%1$s con una versión de base de datos %2$d corriendo en %3$s',
	'upgrading' => 'Actualizando',
	'upgrade_ftp_text' => 'Para continuar con la actualización sencilla, la siguiente información es requerida para el servidor FTP que su sitio web posee.',
	'upgrade_ftp_hostname' => 'Nombre del host FTP: <span>Ejemplo: "localhost"</span>',
	'upgrade_ftp_password' => 'Contraseña de FTP',
	'upgrade_ftp_username' => 'Nombre de usuario FTP',
	'upgrade_status_info' => 'Tienes la última versión de Ushahidi',
	'upgrade_status_info_2' => 'No necesitas actualizar',
	'upgrade_db_version' => 'Versión de base de datos: %d',
	'upgrade_warning_software_version' => 'Atención: La versión del software en version.php y la base de datos no coinciden.',
	'upgrade_warning_db_version' => 'Atención: La versión de la base de datos en version.php y la base de datos no coinciden.',
	'upgrade_database' => 'Base de datos:',
	'ushahidi_release_version' => 'Ushahidi %s',
	'beta' => '¡BETA!',
	'download' => 'Descargando la última versión de Ushahidi...',
	'log_file' => 'Log File',
	'successfully_downloaded' => 'Descarga exitosa, desempaquetando...',
	'failed_downloading' => 'Error mientras se descargaba',
	'successfully_unpacked' => 'Desempaquetado con éxito. Copiando archivos...',
	'failed_unpacking' => 'Error mientras se desempaquetaba',
	'successfully_copied' => 'Copia exitosa, actualizando la base de datos...',
	'failed_copying' => 'Error copiando archivos',
	'backup_success' => 'El backup y actualización de la base de datos ha sido exitosa.',
	'backup_failed' => 'Falla en el backup de la Base de datos.',
	'dbupgrade_success' => 'Base de datos actualizada exitosamente ',
	'deleting_files' => 'Eliminando archivos descargados',
	'upgrade_success' => 'ACTUALIZACIÓN EXITOSA. Ver <a href="%s" target="_blank">Log File</a>',
);
