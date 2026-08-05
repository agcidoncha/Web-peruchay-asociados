<?php
// Copia este archivo como "config.php" en este mismo directorio DIRECTAMENTE EN EL SERVIDOR
// (por FTP, a mano, una sola vez). No lo subas nunca a git ni lo escribas en el chat con
// las credenciales reales: config.php está en .gitignore y excluido del despliegue automático
// precisamente para que la contraseña real de la base de datos nunca pase por el repositorio.

return [
	'db_host' => 'localhost',
	'db_name' => 'pya',
	'db_user' => 'TU_USUARIO_DE_BASE_DE_DATOS',
	'db_pass' => 'TU_CONTRASEÑA_DE_BASE_DE_DATOS',

	'smtp_host' => 'mail.peruchayasociados.com',
	'smtp_port' => 587,
	'smtp_user' => 'info@peruchayasociados.com',
	'smtp_pass' => 'TU_CONTRASEÑA_DE_LA_CUENTA_DE_CORREO',
	'smtp_from_name' => 'Perucha & Asociados',
	'smtp_to' => 'info@peruchayasociados.com',
];
