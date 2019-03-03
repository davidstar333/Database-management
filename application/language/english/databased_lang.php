<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*
*/


//shared items across the entire app
$lang['shared_click_to_expand'] = "Clic para expander";
$lang['shared_html_editor_please'] = "Editor avanzado (<b>SUBIR ARCHIVO</b>)";



//login screen
$lang['login_email_label'] = "email";
$lang['login_pw_label'] = "contrase&ntilde;a";
$lang['login_remember_me'] = "Recordarme";
$lang['login_button'] = "Entrar";
$lang['login_forgot_your_password'] = "Olvidaste tu contrase&ntilde;a?";


//forgot password screen
$lang['forgotpassword_heading'] = "Por favor escribe tu email para que puedas restablecer tu contrase&ntilde;a.";
$lang['forgotpassword_email_label'] = "Tu email";
$lang['forgotpassword_button'] = "enviarme email";


//reset password
$lang['resetpassword_label_new_password'] = "Escribe tu nueva contrase&ntilde;a";
$lang['resetpassword_label_new_password_confirm'] = "Confirma tu nueva contrase&ntilde;a";
$lang['resetpassword_button'] = "Restablecer contrase&ntilde;a";


//navigation
$lang['menu_databases'] = 'Bases';
$lang['menu_manage_databases'] = 'Administrar Bases';
$lang['menu_users'] = 'Usuarios';
$lang['menu_roles_permissions'] = 'Roles / Permisos';
$lang['menu_files'] = 'Archivos';
$lang['menu_hi'] = 'Hola';
$lang['menu_my_account'] = 'Mi cuenta';
$lang['menu_logout'] = 'Salir';


//dashboard
$lang['dashboard_heading'] = "Elegir base de datos para trabajar:";
$lang['dashboard_number_of_tables'] = "Numero de tablas:";
$lang['dashboard_work_on_this_database'] = "Trabajar en esta base de datos";

$lang['dashboard_nodbs1_heading'] = "No existen bases de datos";
$lang['dashboard_nodbs1_message'] = "Databased is not currently handling any databases. If this is a new installation, please proceed to the Database section and activate one or more existing MySQL databases or create one or more databases from scratch.";
$lang['dashboard_nodbs1_button'] = "Administrar bases de datos";

$lang['dashboard_nodbs2_heading'] = "No existen bases de datos";
$lang['dashboard_nodbs2_message'] = "Databased is not currently handling any databases or you haven't been given access to any databases. Please contact of the administrators or contact";


//database admin
$lang['admindb_error_heading'] = "Error";
$lang['admindb_success_heading'] = "Genial";

$lang['admindb_tab_all_databases'] = "Todas las bases de datos";
$lang['admindb_tab_all_create_database'] = "Crear base de datos";
$lang['admindb_heading1'] = "Todas las bases de datos";
$lang['admindb_heading2'] = "Crear base de datos";

$lang['admindb_enabledisable1_heading'] = "Habilitar/deshabilitar";
$lang['admindb_enabledisable1_message'] = "Para activar esta base de datos en <b>SAV</b>, por favor asegurate que este palomeada la casilla de abajo. Desactivar la BD significa que no estara disponible en <b>SAV</b>, pero toda la info quedara intacta al activar la BD nuevamente.";
$lang['admindb_enable_label'] = "Activar BD en <b>SAV</b>";
$lang['admindb_enabledisable2_heading'] = "Error";
$lang['admindb_enabledisable2_message'] = "Desafortunadamente, esta base de datos no se puede usar en <b>SAV</b>.";
$lang['admindb_deletedb_label'] = "Eliminar BD de forma permanente - ATENCION";

$lang['admindb_enabled_label'] = "Activar";
$lang['admindb_disabled_label'] = "Desactivar";
$lang['admindb_disabledand_label'] = "Desactivada y no se puede activar";

$lang['admindb_newdb_name'] = "Nombre";
$lang['admindb_newdb_database_name'] = "Nombre de la BD";
$lang['admindb_newdb_label'] = "Nombre de la BD *";
$lang['admindb_newdb_enabled?'] = "Activar en <b>SAV</b>?";
$lang['admindb_newdb_button'] = "Crear BD";


//my account
$lang['myaccount_error_header'] = "Error";
$lang['myaccount_success_header'] = "Perfecto";
$lang['myaccount_tab_my_profile'] = "Mi perfil";
$lang['myaccount_tab_more'] = "M&aacute;s";

$lang['myaccount_heading1'] = "Mi perfil";

$lang['myaccount_email'] = "Email";
$lang['myaccount_email_label'] = "Email";
$lang['myaccount_password'] = "Password";
$lang['myaccount_password_label'] = "Password";
$lang['myaccount_button_userpass'] = "Actualizar nombre de usuario / password";

$lang['myaccount_firstname'] = "Nombre";
$lang['myaccount_firstname_label'] = "Nombre";
$lang['myaccount_lastname'] = "Apellidos";
$lang['myaccount_lastname_label'] = "Apellidos";
$lang['myaccount_company'] = "Empresa";
$lang['myaccount_company_label'] = "Empresa";
$lang['myaccount_phone'] = "Cel";
$lang['myaccount_phone_label'] = "Cel";
$lang['myaccount_userrole'] = "Rol de usuario";
$lang['myaccount_button_updateprofile'] = "Actualizar perfil";

$lang['myaccount_moreactions_header'] = "M&aacute;s acciones para este usuario";


//revisions: cell
$lang['revisionscell_field'] = "Campo:";
$lang['revisionscell_date'] = "Fecha:";
$lang['revisionscell_revision'] = "Revisi&oacute;n:";



//roles
$lang['roles_databased_roles'] = "Roles en <b>SAV</b>";
$lang['roles_empty_message'] = "No existen roles, agrega unos cuantos.";
$lang['roles_create_button'] = "Crear nuevo rol";

$lang['roles_tab_database_permissions'] = "Permisos en la BD";
$lang['roles_tab_other'] = "Otros";

$lang['roles_heading1'] = "Configurar BD y permisos en tablas";

$lang['roles_admin_message_heading'] = "Atenci&oacute;n";
$lang['roles_admin_message'] = "El rol de <b>Administrador</b> tiene acceso a todas las BD y tablas, para limitar los permisos, hay que crear diferentes permisos";

$lang['roles_permission'] = "Permiso";
$lang['roles_create_tables_within_this_database'] = "Crear tablas dentro de esta BD";
$lang['roles_delete_tables_within_this_database'] = "Eliminar tablas dentro de esta BD";

$lang['roles_table'] = "Table";

$lang['roles_read_records_from_this_table'] = "Leer registros de esta tabla";
$lang['roles_delete_records_from_this_table'] = "Eliminar registros de esta tabla";
$lang['roles_insert_records_into_this_table'] = "Insertar registros en esta tabla";
$lang['roles_update_records_within_this_table'] = "Actualizar registros de esta tabla";
$lang['roles_addeditremove_columns_within_this_table'] = "Agregar/Editar/Eliminar columnas dentro de esta tabla";
$lang['roles_users_can_access_only_their_own_records'] = "Los usuarios solo pueden acceder a sus propios registros";

$lang['roles_button_save_permissions'] = "Guardar permisos";

$lang['roles_heading2'] = "Configurar otros detalles para este rol";

$lang['roles_role_name'] = "Nombre del rol";
$lang['roles_role_name_label'] = "Nombre del rol *";
$lang['roles_description'] = "Descripci&oacute;n";
$lang['roles_description_label'] = "Por favor escribe una descripci&oacute;n aqu&iacute;";
$lang['roles_allow_user_administration?'] = "Permitir la administraci&oacute;n de usuarios?";
$lang['roles_set_as_default_role?'] = "Hacer rol default?";
$lang['roles_button_update_role'] = "Actualizar rol";

$lang['roles_delete_message_heading'] = "Eliminar este rol de usuario";
$lang['roles_delete_message1'] = "Al borrar este rol, significa que los usuarios que estaban asignados a &eacute;ste, no tendr&aacute;n NING&Uacute;N acceso a ning&uacute;n registro, habr&aacute; que re asignar un rol a esos usuarios.";
$lang['roles_delete_message_confirm'] = "ENTIENDO, eliminar este rol";
$lang['roles_delete_message2'] = "No puedes eliminar este rol, porque es el default.";
$lang['roles_delete_message3'] = "Antes de borrar este rol, deber&aacute;s asignar otro rol como default. De &eacute;sta forma SAV reacomodar&aacute; a los usuarios huerfanos al rol default .";

$lang['roles_popup_heading'] = "Crear nuevo rol";
$lang['roles_popup_role_name'] = "Nombre del rol *";
$lang['roles_popup_description'] = "Descripci&oacute;n";
$lang['roles_popup_allow_user_administration'] = "Permitir super poderes de administrador?";
$lang['roles_popup_set_as_default'] = "Establecer como rol default?";
$lang['roles_popup_heading2'] = "Configurar permisos de BD y tablas";

$lang['roles_popup_button_savenewrole'] = "Guardar nuevo rol";
$lang['roles_popup_button_cancel'] = "Cancelar";


//data table view
$lang['table_error_heading'] = "Error";
$lang['table_success_heading'] = "Perfecto";

$lang['table_tab_table_data'] = "Datos de tabla";
$lang['table_tab_table_columns'] = "Columnas de tabla";
$lang['table_tab_table_notes'] = "Notas de tabla";
$lang['table_tab_more'] = "M&aacute;s";

$lang['table_button_newrecord'] = "CREAR NUEVO REGISTRO";
$lang['table_button_importdata'] = "Importar datos";

$lang['table_search_placeholder'] = "BUSCAR EN ESTA TABLA";
$lang['table_search_more_options'] = "M&aacute;s opciones";
$lang['table_search_using_advanced'] = "Usar herramientas de b&uacute;squeda avanzada";
$lang['table_search_reset_search'] = "Repetir busqueda";

$lang['table_search_advanced_heading'] = "Panel de b&uacute;squeda avanzada";
$lang['table_search_advanced_hide'] = "Ocultar";

$lang['table_search_search_item'] = "BUSCAR REGISTRO";
$lang['table_search_toggle_visibility'] = "intercambiar visibilidad";
$lang['table_search_choose_column'] = "Elegir columna";

$lang['table_search_choose_operator'] = "Elegir operador de b&uacute;squeda";
$lang['table_search_equals'] = "Es igual a";
$lang['table_search_does_not_equal'] = "No es igual a";
$lang['table_search_contains'] = "Contiene";
$lang['table_search_does_not_contain'] = "No contiene";
$lang['table_search_less_then'] = "Menor que (&lt;)";
$lang['table_search_greater_then'] = "Mayor que (&gt;)";
$lang['table_search_equals_or_less_then'] = "Igual o menor que (&lt;=)";
$lang['table_search_equals_or_greater'] = "Igual o mayor que (&gt;=)";

$lang['table_search_remove_item'] = "Eliminar elemento";

$lang['table_search_apply_search_items'] = "Aplicar b&uacute;squeda de elementos";
$lang['table_search_clear_search'] = "Nueva busqueda";
$lang['table_search_add_search_item'] = "Agregar elemento de b&uacute;squeda";

$lang['table_column_actions'] = "Editar";

$lang['table_error_noprimkey_heading'] = "Error: no existe llave primaria establecida";
$lang['table_error_noprimkey_message'] = "Parece que no hay una llave primaria establecida en esta tabla. Para que el sistema SAV funcione correctamente, debe de estar una definida.";

$lang['table_error_notables_heading'] = "Error: no hay tablas en la BD";
$lang['table_error_notables_message'] = "Parece que no existen tablas en esta BD. Click en el boton al final de la p&aacute;gina para empezar a crear tablas.";

$lang['table_columns_message_heading'] = "Importante!";
$lang['table_columns_message'] = "Define que columnas te gustaria incluir en tu VISTA de DATOS. Una vez acabado este paso, da clic en el bot&oacute;n de abajo para recargar la vista de datos y aplicar las columnas seleccionadas.";
$lang['table_columns_reload_view'] = "Recargar vista de datos";
$lang['table_columns_create_new_column'] = "Crear nueva columna";

$lang['table_columns_table_field_name'] = "Nombre del campo";
$lang['table_columns_table_column_type'] = "Tipo de columna";
$lang['table_columns_table_index'] = "Index";
$lang['table_columns_table_actions'] = "acciones";
$lang['table_columns_table_type_number'] = "N&uacute;mero";
$lang['table_columns_table_type_decimal'] = "Decimal";
$lang['table_columns_table_type_small_text'] = "Texto corto";
$lang['table_columns_table_type_big_text'] = "Texto largo";
$lang['table_columns_table_type_file'] = "Archivo";
$lang['table_columns_table_type_date'] = "Fecha";
$lang['table_columns_table_type_select'] = "Seleccionar";

$lang['table_columns_table_primary_key'] = "primary key";
$lang['table_columns_table_unique_index'] = "unique index";
$lang['table_columns_table_regular_index'] = "regular index";

$lang['table_columns_table_button_edit'] = "Editar";
$lang['table_columns_table_button_delete'] = "Eliminar";

$lang['table_notes_heading'] = "Crear nueva nota:";
$lang['table_notes_newnote_placeholder'] = "Escribir aqu&iacute; nueva nota";
$lang['table_notes_newnote_button'] = "Guardar nota";

$lang['table_notes_button_edit'] = "Editar";
$lang['table_notes_button_delete'] = "Eliminar";
$lang['table_notes_button_savenote'] = "Guardar nota";
$lang['table_notes_button_cancel'] = "Cancelar";

$lang['table_more_delete_heading'] = "Eliminar esta tabla";
$lang['table_more_delete_message'] = "Para eliminar de forma definitiva esta tabla, da clic en el bot&oacute;n de abajo. Ten en cuenta que al hacer esto toda la informaci&oacute;n de esta tabla se eliminar&aacute; PERMANENTEMENTE, la &uacute;nica forma de revertir esto, es restaurando un backup de la BD desde MySQL.";
$lang['table_more_delete_button'] = "ELIMINAR de forma permanente esta tabla";

$lang['table_more_table_name'] = "Nombre de tabla";
$lang['table_more_table_label'] = "Nombre de tabla";
$lang['table_more_table_update_button'] = "Actualizar tabla";

$lang['table_bottom_tables'] = "TABLAS";

$lang['table_popup_cell_tab_cell_data'] = "Datos";
$lang['table_popup_cell_tab_cell_revisions'] = "Revisiones";
$lang['table_popup_cell_tab_column_notes'] = "Notas";

$lang['table_popup_cell_message_connected'] = "Esta columna est&aacute; conectada a la tabla: <b>%s</b>, mostrando valores de la columna: <b>%s</b>.";
$lang['table_popup_cell_message_index'] = "Columna con index tipo: <b class='text-danger'>%s</b>.";
$lang['table_popup_cell_message_autoincrement'] = "Cuenta con \"<b>auto_increment</b>\" y no puede ser alterada (consecutivo).Puedes seguir agregando registros o cerrar la ventana";

$lang['table_popup_cell_revisions_date'] = "Fecha";
$lang['table_popup_cell_revisions_revision'] = "Revisi&oacute;n";
$lang['table_popup_cell_revisions_restore_button'] = "Restaurar";

$lang['table_popup_cell_notes_heading'] = "Crear nueva nota:";
$lang['table_popup_cell_notes_newnote_placeholder'] = "Escribir aqu&iacute; la nueva nota";
$lang['table_popup_cell_notes_on'] = "el";
$lang['table_popup_cell_notes_by'] = "por";
$lang['table_popup_cell_notes_button_edit'] = "Editar";
$lang['table_popup_cell_notes_button_delete'] = "Eliminar";
$lang['table_popup_cell_notes_button_savenote'] = "Guardar nota";
$lang['table_popup_cell_notes_button_cancel'] = "Cancelar";

$lang['table_popup_cell_button_add_new_note'] = "Agregar nueva nota";
$lang['table_popup_cell_button_update_data'] = "Actualizar informaci&oacute;n";
$lang['table_popup_cell_button_close_window'] = "Cerrar ventana";

$lang['table_popup_column_edit_column'] = "Editar columna:";
$lang['table_popup_column_tab_column_details'] = "Detalles de la columna";
$lang['table_popup_column_tab_retrictions'] = "Restricciones";
$lang['table_popup_column_tab_notes'] = "Notas";

$lang['table_popup_column_column_name'] = "Nombre de la columna:";
$lang['table_popup_column_column_name_label'] = "Nombre de la columna *";
$lang['table_popup_column_column_type'] = "Tipo de columna:";
$lang['table_popup_column_column_type_choose'] = "Elegir tipo de columna";
$lang['table_popup_column_column_type_number'] = "Numero (0, 1, 2, 3, etc.)";
$lang['table_popup_column_column_type_decimal'] = "Decimales (0.34, 5.784, etc)";
$lang['table_popup_column_column_type_small_text'] = "Texto corto (255 caracteres o menos)";
$lang['table_popup_column_column_type_large_text'] = "Texto largo (mas de 255 caracteres)";
$lang['table_popup_column_column_type_date'] = "Fecha (AAAA-MM-DD)";
$lang['table_popup_column_column_type_select'] = "Selecci&oacute;n (elegir entre las opciones dadas)";
$lang['table_popup_column_column_type_blob'] = "Objetos binarios (archivos o imagenes)";
$lang['table_popup_column_options'] = "Opciones:";
$lang['table_popup_column_options_label'] = "Por favor ingresa una opci&oacute;n por fila";
$lang['table_popup_column_column_default_value'] = "Valor por default:";
$lang['table_popup_column_column_default_value_label'] = "Valor por default";
$lang['table_popup_column_column_index'] = "Index:";
$lang['table_popup_column_column_index_label'] = "Indexada?";
$lang['table_popup_column_column_index_no_index'] = "No indexar por favor";
$lang['table_popup_column_column_index_primary_key'] = "Llave primaria";
$lang['table_popup_column_column_index_unique'] = "&Uacute;nica";
$lang['table_popup_column_column_index_index'] = "Index (index no &Uacute;nico)";
$lang['table_popup_column_column_position'] = "Posici&oacute;n de la columna:";
$lang['table_popup_column_column_position_insert'] = "Insertar entre la tabla...";
$lang['table_popup_column_column_position_at_front'] = "Al principio";
$lang['table_popup_column_column_position_at_end'] = "Al final";
$lang['table_popup_column_column_position_after'] = "Despu&eacute;s de";

$lang['table_popup_column_connection_warning_heading'] = "ATENCI&Oacute;N";
$lang['table_popup_column_connection_warning1'] = "Al conectar este campo a otra tabla, es probable que <b>SAV</b> necesite modificar esta columna donde encuentre datos invalidos.";
$lang['table_popup_column_connection_warning2'] = "Al conectar esta columna a otra tabla, esta columna solo puede contener valores de la tabla seleccionada.";

$lang['table_popup_column_connect_to'] = "Conectar a:";
$lang['table_popup_column_connect_to_none'] = "Sin conecci&oacute;n...";

$lang['table_popup_column_retrictions_message_heading'] = "Restricciones de Columna";
$lang['table_popup_column_retrictions_message'] = "Existe una variedad de restricciones que se pueden aplicar a cada columna:";
$lang['table_popup_column_retrictions_message_button'] = "Restricciones disponibles";
$lang['table_popup_column_retrictions_restriction'] = "Restricci&oacute;n";
$lang['table_popup_column_retrictions_restriction_select'] = "Elige una restricci&oacute;n";
$lang['table_popup_column_retrictions_restriction_required'] = "Required";
$lang['table_popup_column_retrictions_restriction_min_length'] = "min_length";
$lang['table_popup_column_retrictions_restriction_max_length'] = "max_length";
$lang['table_popup_column_retrictions_restriction_exact_length'] = "exact_length";
$lang['table_popup_column_retrictions_restriction_greater_than'] = "greater_than";
$lang['table_popup_column_retrictions_restriction_less_than'] = "less_than";
$lang['table_popup_column_retrictions_restriction_alpha'] = "alpha";
$lang['table_popup_column_retrictions_restriction_alpha_numeric'] = "alpha_numeric";
$lang['table_popup_column_retrictions_restriction_alpha_dash'] = "alpha_dash";
$lang['table_popup_column_retrictions_restriction_numeric'] = "numeric";
$lang['table_popup_column_retrictions_restriction_integer'] = "integer";
$lang['table_popup_column_retrictions_restriction_is_natural'] = "is_natural";
$lang['table_popup_column_retrictions_restriction_is_natural_no_zero'] = "is_natural_no_zero";
$lang['table_popup_column_retrictions_restriction_valid_email'] = "valid_email";
$lang['table_popup_column_retrictions_restriction_valid_emails'] = "valid_emails";
$lang['table_popup_column_retrictions_restriction_valid_ip'] = "valid_ip";

$lang['table_popup_column_retrictions_value'] = "Valor:";
$lang['table_popup_column_retrictions_button_remove'] = "Remover restricci&oacute;n";

$lang['table_popup_column_retrictions_add_restriction'] = "Agregar otra restricci&oacute;n";

$lang['table_popup_column_notes_headingnew'] = "Crear nueva nota:";

$lang['table_popup_column_notes_button_addnewnote'] = "Agregar nueva nota";
$lang['table_popup_column_notes_button_updatecolumn'] = "Actualizar columna";
$lang['table_popup_column_notes_button_closewindow'] = "Cerrar ventana";

$lang['table_popup_import_heading'] = "Importar Datos";
$lang['table_popup_import_message1'] = "Use the form below to import a CSV file from your computer. Importing CSV files can be tricky, please make sure that:";
$lang['table_popup_import_message2'] = "<li>The number of fields per row in your CSV files matches with the number of columns in the Databased table.</li>
<li>The values in the primary key fields in your CSV file are unique. If Databased detects primary key values which already exist in your Databased table, the import will fail.</li>";
$lang['table_popup_import_select_file'] = "Select file";
$lang['table_popup_import_change'] = "Change";
$lang['table_popup_import_remove'] = "Remove";
$lang['table_popup_import_advanced_options'] = "Advanced options";
$lang['table_popup_import_columns_separated_by'] = "Columns separated by (default is ','):";
$lang['table_popup_import_columns_enclosed_by'] = "Columns enclosed by (single character, default is '\"'):";

$lang['table_popup_import_button_importdata'] = "Import Data";
$lang['table_popup_import_button_closewindow'] = "Close Window";


$lang['table_popup_newcolumn_heading'] = "Agregar columna";
$lang['table_popup_newcolumn_tab_column_details'] = "Detalles de la columna";
$lang['table_popup_newcolumn_tab_column_restrictions'] = "Restricciones";

$lang['table_popup_newcolumn_button_addcolumn'] = "Agregar columna";
$lang['table_popup_newcolumn_button_closewindow'] = "Cerrar ventana";

$lang['table_popup_newrecord_heading'] = "NUEVO REGISTRO";
$lang['table_popup_newrecord_button_createrecord'] = "Crear registro";
$lang['table_popup_newrecord_button_cancel'] = "Cancelar";


$lang['table_popup_newtable_heading'] = "Crear Tabla";
$lang['table_popup_newtable_tab_buildtable'] = "Construir Tabla";
$lang['table_popup_newtable_tab_importdata'] = "Importar Datos";
$lang['table_popup_newtable_table_name'] = "Nombre de tabla:";
$lang['table_popup_newtable_table_name_label'] = "Nombre de tabla *";
$lang['table_popup_newtable_table_columns'] = "Columnas:";
$lang['table_popup_newtable_table_column'] = "Columnas";
$lang['table_popup_newtable_table_column_name_label'] = "Nombre de la Columna *";

$lang['table_popup_newtable_column_remove'] = "remover";
$lang['table_popup_newtable_column_column'] = "Columna";
$lang['table_popup_newtable_column_primary_message'] = "La primera columna de tu nueva tabla automaticamente se convertir&aacute; en la llave primaria. Se sugiere establecer esta columna con auto incremento \"auto-increment\".";
$lang['table_popup_newtable_column_autoincrement?'] = "Establecer columna con auto incremento \"auto-increment\"?";

$lang['table_popup_newtable_column_add_column'] = "Agregar otra columna";
$lang['table_popup_newtable_permissions'] = "Permisos:";
$lang['table_popup_newtable_keep_private'] = "Mantener esta tabla privada (solo t&uacute; y los admins tendr&aacute;n acceso a ella)";
$lang['table_popup_newtable_share_with_group'] = "Compartir con mi grupo (%s)";
$lang['table_popup_newtable_share_with_all'] = "Compartir con todos";

$lang['table_popup_newtable_import_message'] = "Use the form below to import a CSV file from your computer. <b>Databased</b> will turn this file into a table after uploading it.";
$lang['table_popup_newtable_import_table_name_label'] = "Table name *";
$lang['table_popup_newtable_import_first_row'] = "First row contains column names";

$lang['table_popup_newtable_button_addtable'] = "Add Table";
$lang['table_popup_newtable_button_import'] = "Import file and create table";
$lang['table_popup_newtable_button_closewindow'] = "Close Window";

$lang['table_popup_record_tab_recorddata'] = "Valor del registro";
$lang['table_popup_record_tab_recordrevisions'] = "Revisiones del registro";
$lang['table_popup_record_tab_recordnotes'] = "Notas del registro";

$lang['table_popup_record_revisions_fields'] = "Campo(s)";
$lang['table_popup_record_revisions_field'] = "Campo";
$lang['table_popup_record_revisions_value'] = "Valor";
$lang['table_popup_record_revisions_button_restore'] = "Restaurar los campos seleccionados";

$lang['table_popup_record_button_addnote'] = "Agregar nueva nota";
$lang['table_popup_record_button_update'] = "Actualizar registro";
$lang['table_popup_record_button_closewindow'] = "Cerrar ventana";


//USERS
$lang['users_databased_users'] = "Usuarios de <b>SAV</b>";
$lang['users_empty_message'] = "Sin usuarios, agrega algunos.";
$lang['users_button_newuser'] = "Crear nuevo usuario";

$lang['users_error_heading'] = "Error";
$lang['users_success_heading'] = "Perfecto";

$lang['users_tab_userprofile'] = "Perfil de usuario";
$lang['users_tab_more'] = "M&aacute;s";

$lang['users_user_profile_heading'] = "Perfil de usuario";
$lang['users_user_profile_email'] = "Email";
$lang['users_user_profile_email_label'] = "Email *";
$lang['users_user_profile_password'] = "Contrase&ntilde;a";
$lang['users_user_profile_password_label'] = "Contrase&ntilde;a *";
$lang['users_user_profile_button_update'] = "Actualizar nombre de usuario / Contrase&ntilde;a";

$lang['users_user_profile_firstname'] = "Nombre(s)";
$lang['users_user_profile_firstname_label'] = "Nombre(s)";
$lang['users_user_profile_lastname'] = "Apellidos";
$lang['users_user_profile_lastname_label'] = "Apellidos";
$lang['users_user_profile_company'] = "Empresa";
$lang['users_user_profile_company_label'] = "Empresa";
$lang['users_user_profile_phone'] = "Cel";
$lang['users_user_profile_phone_label'] = "Cel";
$lang['users_user_profile_user_role'] = "Rol de usuario";
$lang['users_user_profile_user_role_choose'] = "Elige un rol de usuario";
$lang['users_user_profile_button_update'] = "Actualizar perfil";

$lang['users_user_more_actions_heading'] = "M&aacute;s acciones para este usuario";
$lang['users_user_more_actions_delete_heading'] = "Eliminar a este usuario (%s %s)";
$lang['users_user_more_actions_delete_message'] = "Al eliminar a este usuario o cualquier otro, todas sus notas se eliminar&aacute;n";
$lang['users_user_more_actions_button_delete'] = "ENTIENDO, por favor eliminar a este usuario";

$lang['users_user_popup_heading'] = "Crear nuevo usuario";
$lang['users_user_popup_first_name_label'] = "Nombre(s) *";
$lang['users_user_popup_last_name_label'] = "Apellidos *";
$lang['users_user_popup_email_label'] = "Email *";
$lang['users_user_popup_password_label'] = "Contrase&ntilde;a *";
$lang['users_user_popup_company_label'] = "Empresa";
$lang['users_user_popup_phone_label'] = "Cel";
$lang['users_user_popup_choose_role'] = "Elige un rol de usuario *";

$lang['users_user_popup_button_createuser'] = "Crear usuario";
$lang['users_user_popup_button_cancel'] = "Cancelar";

$lang['files_message_no_files'] = "No existen archivos actualmente";
$lang['files_error_heading'] = "Error!";
$lang['files_success_heading'] = "Perfecto!";
$lang['files_nr_of_files'] = "N&uacute;mero de archivos:";

$lang['files_table_heading_name'] = "Nombre";
$lang['files_table_heading_date'] = "Fecha";
$lang['files_table_heading_size'] = "Tamano";
$lang['files_table_heading_actions'] = "Acciones";
$lang['files_table_bytes'] = "Bytes";
$lang['files_button_delete'] = "Eliminar selecci&oacute;n";



//MESSAGES IN CONTROLLERS

//account.php
$lang['account_update_login_no_permission'] = "<h1>No est&aacute;s autorizado para realizar esta acci&oacute;n.</h1>";
$lang['account_update_login_success_message'] = "Tu email / Contrase&ntilde;a ha sido actualizado";

$lang['account_update_no_permission'] = "<h1>No est&aacute;s autorizado para realizar esta acci&oacute;n.</h1>";
$lang['account_update_success_message'] = "Tu perfil de usuario ha sido actualizado";


//admin.php
$lang['admin_enabledb_error1_heading'] = "Error!";
$lang['admin_enabledb_error1'] = "Algunos detalles de conexi&oacute;n con la BD no aparecen, por favor recarga la p&aacute;gina e intenta nuevamente.";
$lang['admin_enabledb_error2_heading'] = "Error!";
$lang['admin_enabledb_error2'] = "Necesitas ser Administrador para realizar esta acci&oacute;n.";
$lang['admin_enabledb_error3_heading'] = "Error!";
$lang['admin_enabledb_error3'] = "The database you're trying to enable seems to have some issues; most likely not all tables have a primary key set.";
$lang['admin_enabledb_success_heading'] = "Perfecto!";
$lang['admin_enabledb_success'] = "The selected database is now part of <b>Databased</b>. Please keep in mind that non-administrator users won't have access to this table unless it's given to them.";

$lang['admin_disabledb_error1_heading'] = "Error!";
$lang['admin_disabledb_error1'] = "Algunos detalles de conexi&oacute;n con la BD no aparecen, por favor recarga la p&aacute;gina e intenta nuevamente.";
$lang['admin_disabledb_error2_heading'] = "Error!";
$lang['admin_disabledb_error2'] = "Necesitas ser Administrador para realizar esta acci&oacute;n.";
$lang['admin_disabledb_success_heading'] = "Perfecto!";
$lang['admin_disabledb_success'] = "The selected database has been removed from <b>Databased</b>. All data has been maintained and the database can be moved back at any moment.";

$lang['admin_newdb_error1'] = "<h1>No est&aacute;s autorizado para realizar esta acci&oacute;n</h1>";
$lang['admin_newdb_error2_heading'] = "Error!";
$lang['admin_newdb_error2'] = "El nombre de tu BD debe ser &uacute;nico.";
$lang['admin_newdb_success'] = "La nueva base de datos ha sido creada correctamente, bien!";

$lang['admin_deletedb_error1'] = "<h1>No est&aacute;s autorizado para realizar esta acci&oacute;n</h1>";
$lang['admin_deletedb_error2_heading'] = "Error!";
$lang['admin_deletedb_error2'] = "Informaci&oacute;n importante esta extraviada, por favor regresa a la p&aacute;gina anterior, recarga la p&aacute;gina e intenta de nuevo, gracias.";
$lang['admin_deletedb_success'] = "La nueva base de datos ha sido eliminada correctamente!";

$lang['admin_delete_file_error1_heading'] = "Error!";
$lang['admin_delete_file_error1'] = "No has especificado que archivo quieres eliminar";
$lang['admin_delete_file_success'] = "El archivo ha sido eliminado.";
$lang['admin_delete_file_error2'] = "Ha ocurrido un error y no se ha podido eliminar el archivo";

$lang['admin_delete_files_error1'] = "Ha ocurrido un error y no se han podido eliminar los archivos :(";
$lang['admin_delete_files_success'] = "Los archivos han sido eliminados.";
$lang['admin_delete_files_error1'] = "Por favor elige uno o m&aacute;s archivos para eliminar.";


//columnnotes.php
$lang['columnnotes_getcolumnnotes_error1_heading'] = "Error!";
$lang['columnnotes_getcolumnnotes_error1'] = "Algunos detalles de conexi&oacute;n con la BD no aparecen, por favor recarga la p&aacute;gina e intenta nuevamente.";
$lang['columnnotes_getcolumnnotes_error2_heading'] = "Error!";
$lang['columnnotes_getcolumnnotes_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['columnnotes_newnote_error1_heading'] = "Error!";
$lang['columnnotes_newnote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['columnnotes_newnote_error2_heading'] = "Error!";
$lang['columnnotes_newnote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['columnnotes_newnote_error3_heading'] = "Error!";
$lang['columnnotes_newnote_error3'] = "Ha ocurrido un error al tratar de guardar tu registro, por favor ve los detalles a continuaci&oacute;n y toma nota:<br>";
$lang['columnnotes_newnote_success_heading'] = "Perfecto!";
$lang['columnnotes_newnote_success'] = "La nueva columna ha sido agregada!";

$lang['columnnotes_deletenote_error1_heading'] = "Error!";
$lang['columnnotes_deletenote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['columnnotes_deletenote_error2_heading'] = "Error!";
$lang['columnnotes_deletenote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['columnnotes_deletenote_error3'] = "Alas!, no eres el autor de esta nota, por lo tanto no la puedes eliminar.";
$lang['columnnotes_deletenote_success_heading'] = "Perfecto!";
$lang['columnnotes_deletenote_success'] = "La nota de columna ha sido eliminada!";
$lang['columnnotes_deletenote_error4'] = "De alg&uacute;n modo, el ID de la nota no se encuentra, por favor intenta nuevamente.";

$lang['columnnotes_updatenote_error1_heading'] = "Error!";
$lang['columnnotes_updatenote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['columnnotes_updatenote_error2_heading'] = "Error!";
$lang['columnnotes_updatenote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['columnnotes_updatenote_error3'] = "No, alto!, no eres el autor de esta nota, por lo tanto no la puedes editar.";
$lang['columnnotes_updatenote_error4_heading'] = "Error!";
$lang['columnnotes_updatenote_error4'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['columnnotes_updatenote_success_heading'] = "Perfecto!";
$lang['columnnotes_updatenote_success'] = "La nota de columna ha sido actualizada correctamente!";


//columns.php
$lang['colums_getdetails_error1_heading'] = "Error!";
$lang['colums_getdetails_error1'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['colums_getdetails_error2_heading'] = "Error!";
$lang['colums_getdetails_error2'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";

$lang['colums_update_error1_heading'] = "Error!";
$lang['colums_update_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['colums_update_error2_heading'] = "Error!";
$lang['colums_update_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['colums_update_error3_heading'] = "Error!";
$lang['colums_update_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['colums_update_error4_heading'] = "Error!";
$lang['colums_update_error4'] = "Por favor asegurate de elegir un nombre de columna &uacute;nico, gracias!";
$lang['colums_update_success_heading'] = "Excelente!";
$lang['colums_update_success'] = "Los detalles de la columna han sido actualizados.";

$lang['colums_column_check_message'] = 'El campo %s no puede llamarse la palabra "column"';

$lang['colums_delete_error1_heading'] = "Error!";
$lang['colums_delete_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['colums_delete_error2_heading'] = "Error!";
$lang['colums_delete_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['colums_addcolumn_error1_heading'] = "Error!";
$lang['colums_addcolumn_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['colums_addcolumn_error2_heading'] = "Error!";
$lang['colums_addcolumn_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['colums_addcolumn_error3_heading'] = "Error!";
$lang['colums_addcolumn_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['colums_addcolumn_error4_heading'] = "Error!";
$lang['colums_addcolumn_error4'] = "Por favor asegurate de elegir un nombre de columna &uacute;nico, gracias!";
$lang['colums_addcolumn_success_heading'] = "Muy bien!";
$lang['colums_addcolumn_success'] = 'La columna ha sido creada, para ver esta columna en vista de datos, necesitaras presionar el boton debajo de este mensaje para recargar la p&aacute;gina:<br><a class="btn btn-info btn-embossed" href="%s">recargar p&aacute;gina</a>';


//db.php
$lang['db_index_error1_heading'] = "Error!";
$lang['db_index_error1'] = "Parece que deseas cargar una base que no existe. Favor de contactar al Administrador (1540) Gracias.";
$lang['db_index_error2_heading'] = "Error!";
$lang['db_index_error2'] = "Parece que deseas cargar una tabla que no existe. Favor de contactar al Administrador (1540) Gracias.";

$lang['db_savefield_error1_heading'] = "Error!";
$lang['db_savefield_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_savefield_error2_heading'] = "Error!";
$lang['db_savefield_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['db_savefield_error3_heading'] = "Error!";
$lang['db_savefield_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['db_savefield_error4_heading'] = "Error!";
$lang['db_savefield_error4'] = "Has ingresado un valor duplicado como tu llave primaria, por favor escribe un valor &uacute;nico para todas las llaves primarias de columnas, ty";

$lang['db_getrecord_error1_heading'] = "Error!";
$lang['db_getrecord_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_getrecord_error2_heading'] = "Error!";
$lang['db_getrecord_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['db_updaterecord_error1_heading'] = "Error!";
$lang['db_updaterecord_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_updaterecord_error2_heading'] = "Error!";
$lang['db_updaterecord_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['db_updaterecord_error3_heading'] = "Error!";
$lang['db_updaterecord_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['db_updaterecord_error4_heading'] = "Error!";
$lang['db_updaterecord_error4'] = "Has ingresado un valor duplicado como tu llave primaria, por favor escribe un valor &uacute;nico para todas las llaves primarias de columnas";
$lang['db_updaterecord_success_heading'] = "Perfecto!";
$lang['db_updaterecord_success'] = "Congrats! Your record was saved successfully!";

$lang['db_newrecord_error1_heading'] = "Error!";
$lang['db_newrecord_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_newrecord_error2_heading'] = "Error!";
$lang['db_newrecord_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['db_newrecord_error3_heading'] = "Error!";
$lang['db_newrecord_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['db_newrecord_success_heading'] = "Perfecto!";
$lang['db_newrecord_success'] = "El registro ha sido ingresado correctamente.";

$lang['db_deleterecord_error1_heading'] = "Error!";
$lang['db_deleterecord_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_deleterecord_error2_heading'] = "Error!";
$lang['db_deleterecord_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['db_deleterecord_success'] = "El registro ha sido eliminado correctamente.";

$lang['db_newtable_error1_heading'] = "Error!";
$lang['db_newtable_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_newtable_error2_heading'] = "Error!";
$lang['db_newtable_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['db_newtable_error3_heading'] = "Error!";
$lang['db_newtable_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['db_newtable_error4_heading'] = "Error!";
$lang['db_newtable_error4'] = "The table name <b>%s</b> is already taken. Please use a unqiue name.";
$lang['db_newtable_error5_heading'] = "Error!";
$lang['db_newtable_error5'] = "todos los nombes de columnas deben ser &uacute;nicos";
$lang['db_newtable_success_heading'] = "Perfecto!";
$lang['db_newtable_success'] = "Muy bien!, Tu nueva tabla ha sido creada correctamente, click abajo para recargar la p&aacute;gina <br><a href='%s' class='btn btn-info btn-embossed'>recargar p&aacute;gina</a>";

$lang['db_deletetable_error1_heading'] = "Error!";
$lang['db_deletetable_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_deletetable_error2_heading'] = "Error!";
$lang['db_deletetable_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['db_deletetable_error3_heading'] = "Error!";
$lang['db_deletetable_error3_part1'] = "No puedes eliminar esta tabla ahora, debido a que est&aacute; vinculada a otras tablas. Please see below which tables and columns are referencing this table:";
$lang['db_deletetable_error3_part2'] = "You will need to remove these references before you can delete this table.<br><a href='%s' class='btn btn-info btn-block'><span class='fui-arrow-left'></span> Return to %s</a>";
$lang['db_deletetable_success'] = "The table has been permanently deleted.";

$lang['db_column_check_message'] = 'The %s field can not be the word "column"';

$lang['db_getcell_error1_heading'] = "Error!";
$lang['db_getcell_error1'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['db_updatetable_error1_heading'] = "Error!";
$lang['db_updatetable_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_updatetable_error2_heading'] = "Error!";
$lang['db_updatetable_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['db_updatetable_error3'] = "Ha ocurrido un error con los datos que se capturaron, ver detalles abajo de este texto y tomar nota:<br>";
$lang['db_updatetable_error4'] = "El nombre de la tabla %s ya esta siendo usado, por favor elige otro nombre.";
$lang['db_updatetable_success'] = "La tabla ha sido actualizada correctamente.";

$lang['db_uploadcsv_error1_heading'] = "Error!";
$lang['db_uploadcsv_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_uploadcsv_error2_heading'] = "Error!";
$lang['db_uploadcsv_error2'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['db_uploadcsv_error3_heading'] = "Error!";
$lang['db_uploadcsv_error3'] = "El nombre de la tabla debe ser &uacute;nico, al parecer este nombre (%s) ya existe.";
$lang['db_uploadcsv_error4_heading'] = "Error!";
$lang['db_uploadcsv_error4'] = "Ha ocurrido un error al subir el archivo: <br>";
$lang['db_uploadcsv_error5_heading'] = "Error!";
$lang['db_uploadcsv_error5'] = "Parece que ha habido un error con los valores para la tabla, para evitar errores, se ha truncado la creacion de la tabla.";
$lang['db_uploadcsv_success_heading'] = "Perfecto!";
$lang['db_uploadcsv_success'] = "Excelente! Tu nueva tabla ha sido creada correctamente! Clic abajo para recargar la p&aacute;gina<br><a href='%s' class='btn btn-info btn-embossed'>recargar p&aacute;gina</a>";

$lang['db_importcsv_error1_heading'] = "Error!";
$lang['db_importcsv_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['db_importcsv_error2_heading'] = "Error!";
$lang['db_importcsv_error2'] = "Ha ocurrido un error con el archivo que intentas subir: <br>";
$lang['db_importcsv_error3_heading'] = "Error!";
$lang['db_importcsv_error3'] = "Parece que ha habido un error con los valores para la tabla, para evitar errores, se ha truncado la creacion de la tabla.";
$lang['db_importcsv_success_heading'] = "Perfecto!";
$lang['db_importcsv_success'] = "Perfecto!, tus datos se han importado de forma satisfactoria! Clic en el boton de abajo para recargar la p&aacute;gina<br><a href='%s' class='btn btn-info btn-embossed'>recargar p&aacute;gina</a>";
$lang['db_importcsv_error4_heading'] = "Error!";
$lang['db_importcsv_error4'] = "No se ha podido importar la informaci&oacute;n, es muy probable que tu archivo CSV no tenga el formato correcto. Por favor revisa tu archivo CSV e intenta de nuevo.";


//recordnotes.php
$lang['recordnotes_getrecordnotes_error1_heading'] = "Error!";
$lang['recordnotes_getrecordnotes_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['recordnotes_getrecordnotes_error2_heading'] = "Error!";
$lang['recordnotes_getrecordnotes_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['recordnotes_newnote_error1_heading'] = "Error!";
$lang['recordnotes_newnote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['recordnotes_newnote_error2_heading'] = "Error!";
$lang['recordnotes_newnote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['recordnotes_newnote_error3_heading'] = "Error!";
$lang['recordnotes_newnote_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['recordnotes_newnote_success_heading'] = "Excelente!";
$lang['recordnotes_newnote_success'] = "Tu nueva nota ha sido creada.";

$lang['recordnotes_updatenote_error1_heading'] = "Error!";
$lang['recordnotes_updatenote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['recordnotes_updatenote_error2_heading'] = "Error!";
$lang['recordnotes_updatenote_error2'] = "Upss, tu no eres el autor de esta nota, por lo tanto no puedes editarla.";
$lang['recordnotes_updatenote_error3_heading'] = "Error!";
$lang['recordnotes_updatenote_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['recordnotes_updatenote_success_heading'] = "Perfecto!";
$lang['recordnotes_updatenote_success'] = "La nota de registro ha sido actualizada!";

$lang['recordnotes_deletenote_error1_heading'] = "Error!";
$lang['recordnotes_deletenote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['recordnotes_deletenote_error2_heading'] = "Error!";
$lang['recordnotes_deletenote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['recordnotes_deletenote_error3_heading'] = "Error!";
$lang['recordnotes_deletenote_error3'] = "Upss, tu no eres el autor de esta nota, por lo tanto no puedes eliminarla.";
$lang['recordnotes_deletenote_success_heading'] = "Perfecto!";
$lang['recordnotes_deletenote_success'] = "La nota de registro ha sido eliminada!";


//revisions.php
$lang['revisions_index_error1_heading'] = "Error!";
$lang['revisions_index_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['revisions_index_error2_heading'] = "Error!";
$lang['revisions_index_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['revisions_loadrecordrevisions_error1_heading'] = "Error!";
$lang['revisions_loadrecordrevisions_error1'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['revisions_removerevision_error1_heading'] = "Error!";
$lang['revisions_removerevision_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['revisions_removerevision_error2_heading'] = "Error!";
$lang['revisions_removerevision_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['revisions_removerevision_success_heading'] = "Perfecto!";
$lang['revisions_removerevision_success'] = "La revision ha sido removida correctamente.";

$lang['revisions_restorerevision_error1_heading'] = "Error!";
$lang['revisions_restorerevision_error1'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['revisions_restorerevision_success_heading'] = "Perfecto";
$lang['revisions_restorerevision_success'] = "Se ha removido la revisi&oacute;n de forma correcta.";

$lang['revisions_viewcell_error1_heading'] = "Error!";
$lang['revisions_viewcell_error1'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['revisions_viewcell_error2'] = "<h1>No se encuentra el ID de la revisi&oacute;n</h1>";

$lang['revisions_viewrecord_error1_heading'] = "Error!";
$lang['revisions_viewrecord_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['revisions_viewrecord_error2_heading'] = "Error!";
$lang['revisions_viewrecord_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";

$lang['revisions_restorerecordrevision_error1_heading'] = "Error!";
$lang['revisions_restorerecordrevision_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['revisions_restorerecordrevision_success_heading'] = "Perfecto!";
$lang['revisions_restorerecordrevision_success'] = "El registro ha sido restaurado a su versi&oacute;n anterior.";
$lang['revisions_restorerecordrevision_error2_heading'] = "Error!";
$lang['revisions_restorerecordrevision_error2'] = "algo est&aacute; mal con los datos que se han introducido, por favor recarga la p&aacute;gina e intenta nuevamente.";

$lang['revisions_deleterecordrevision_error1_heading'] = "Error!";
$lang['revisions_deleterecordrevision_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['revisions_deleterecordrevision_error2_heading'] = "Error!";
$lang['revisions_deleterecordrevision_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['revisions_deleterecordrevision_success_heading'] = "Perfecto!";
$lang['revisions_deleterecordrevision_success'] = "La revision del registro ha sido eliminada del sistema; %s revisiones se han removido.";
$lang['revisions_deleterecordrevision_error3_heading'] = "Error!";
$lang['revisions_deleterecordrevision_error3'] = "Algo est&aacute; mal con los datos que se han introducido, por favor recarga la p&aacute;gina e intenta nuevamente.";


//roles.php
$lang['roles_create_error'] = "Algo est&aacute; mal con los datos que se han introducido, ver detalles a continuaci&oacute;n:<br>";
$lang['roles_create_success'] = "El nuevo rol de usuario se ha creado correctamente, yeah!";

$lang['roles_update_success'] = "El rol de usuario se ha actualizado correctamente! Yeah!";
$lang['roles_update_error'] = "Falta informaci&oacute;n importante y no se pudo actualizar el rol.";

$lang['roles_delete_error'] = "Por favor selecciona un rol DEFAULT antes de borrar uno.";
$lang['roles_delete_success'] = "el rol de usuario ha sido eliminado correctamente! Yeah!";


//tablenotes.php
$lang['tablenotes_newnote_error1_heading'] = "Error!";
$lang['tablenotes_newnote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['tablenotes_newnote_error2_heading'] = "Error!";
$lang['tablenotes_newnote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['tablenotes_newnote_error3_heading'] = "Error!";
$lang['tablenotes_newnote_error3'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['tablenotes_newnote_success_heading'] = "Perfecto!";
$lang['tablenotes_newnote_success'] = "La nueva nota de tabla ha sido agregada!";

$lang['tablenotes_deletenote_error1_heading'] = "Error!";
$lang['tablenotes_deletenote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['tablenotes_deletenote_error2_heading'] = "Error!";
$lang['tablenotes_deletenote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['tablenotes_deletenote_error3'] = "Upss, no eres el autor de esta nota, por lo tanto no puedes eliminarla.";
$lang['tablenotes_deletenote_success_heading'] = "Perfecto!";
$lang['tablenotes_deletenote_success'] = "La nota de tabla ha sido eliminada!";

$lang['tablenotes_updatenote_error1_heading'] = "Error!";
$lang['tablenotes_updatenote_error1'] = "La conexi&oacute;n con la base de datos ha tenido un error, por favor recarga de nuevo la p&aacute;gina e intenta de nuevo.";
$lang['tablenotes_updatenote_error2_heading'] = "Error!";
$lang['tablenotes_updatenote_error2'] = "No est&aacute;s autorizado para realizar esta acci&oacute;n.";
$lang['tablenotes_updatenote_error3'] = "Upss, no eres el autor de esta nota, por lo tanto no puedes modificarla.";
$lang['tablenotes_updatenote_error4_heading'] = "Error!";
$lang['tablenotes_updatenote_error4'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['tablenotes_updatenote_success_heading'] = "Muy bien!";
$lang['tablenotes_updatenote_success'] = "La nota de tabla ha sido actualizada correctamente!";


//users.php
$lang['users_create_error1'] = "Ha sucedido un error al tratar de guardar tus datos, favor de ver los detalles que aparecen abajo de este mensaje y tomar nota, gracias:<br>";
$lang['users_create_success'] = "Se ha creado correctamente el usuario!";

$lang['users_updatelogin_success'] = "Bien! el email / contrase&ntilde;a se ha actualizado correctamente!";

$lang['users_update_success'] = "Los detalles del perfil han sido actualizados correctamente, perfecto!";

$lang['users_delete_success'] = "El usuario selecionado y toda la informacion asociada a &eacute;ste, ha sido eliminada.";
