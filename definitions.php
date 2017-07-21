<?php
# Versione corrente del DB
#define('TOSENDIT_PAFACILE_DB_VERSION', '1.4.6');
#define('TOSENDIT_PAFACILE_DB_VERSION', '1.5.0');
#define('TOSENDIT_PAFACILE_DB_VERSION', '1.5.1');
#define('TOSENDIT_PAFACILE_DB_VERSION', '1.5.2');
define('TOSENDIT_PAFACILE_DB_VERSION', '1.6.0');

# Azioni amministrarive

define('TOSENDIT_PAFACILE_DEFAULT_MIN_LEVEL', 	"read");

define('TOSENDIT_PAFACILE_EDIT', 					'-edit');
define('TOSENDIT_PAFACILE_NEW', 					'-new');
define('TOSENDIT_PAFACILE_DELETE', 				'&action=delete');

define('TOSENDIT_PAFACILE_ADMIN_HANDLER', 		'toSendItPAFacile');

define('TOSENDIT_PAFACILE_ORGANI_HANDLER',					TOSENDIT_PAFACILE_ADMIN_HANDLER .'-organi');
define('TOSENDIT_PAFACILE_ORGANI_EDIT_HANDLER',				TOSENDIT_PAFACILE_ORGANI_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_ORGANI_NEW_HANDLER',				TOSENDIT_PAFACILE_ORGANI_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_ORGANI_DELETE_HANDLER',			TOSENDIT_PAFACILE_ORGANI_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);

define('TOSENDIT_PAFACILE_ORGANIGRAMMA_HANDLER',			TOSENDIT_PAFACILE_ADMIN_HANDLER .'-organigramma');
define('TOSENDIT_PAFACILE_ORGANIGRAMMA_EDIT_HANDLER',		TOSENDIT_PAFACILE_ORGANIGRAMMA_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_ORGANIGRAMMA_NEW_HANDLER',		TOSENDIT_PAFACILE_ORGANIGRAMMA_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_ORGANIGRAMMA_DELETE_HANDLER',		TOSENDIT_PAFACILE_ORGANIGRAMMA_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);

define('TOSENDIT_PAFACILE_DELIBERE_HANDLER',				TOSENDIT_PAFACILE_ADMIN_HANDLER .'-delibere');
define('TOSENDIT_PAFACILE_DELIBERE_EDIT_HANDLER',			TOSENDIT_PAFACILE_DELIBERE_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_DELIBERE_NEW_HANDLER',			TOSENDIT_PAFACILE_DELIBERE_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_DELIBERE_DELETE_HANDLER',			TOSENDIT_PAFACILE_DELIBERE_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);

define('TOSENDIT_PAFACILE_DETERMINE_HANDLER',				TOSENDIT_PAFACILE_ADMIN_HANDLER .'-determine');
define('TOSENDIT_PAFACILE_DETERMINE_EDIT_HANDLER',			TOSENDIT_PAFACILE_DETERMINE_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_DETERMINE_NEW_HANDLER',			TOSENDIT_PAFACILE_DETERMINE_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_DETERMINE_DELETE_HANDLER',		TOSENDIT_PAFACILE_DETERMINE_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);
	
define('TOSENDIT_PAFACILE_ORDINANZE_HANDLER',				TOSENDIT_PAFACILE_ADMIN_HANDLER .'-ordinanze');
define('TOSENDIT_PAFACILE_ORDINANZE_EDIT_HANDLER',			TOSENDIT_PAFACILE_ORDINANZE_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_ORDINANZE_NEW_HANDLER',			TOSENDIT_PAFACILE_ORDINANZE_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_ORDINANZE_DELETE_HANDLER',		TOSENDIT_PAFACILE_ORDINANZE_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);

define('TOSENDIT_PAFACILE_BANDI_HANDLER',					TOSENDIT_PAFACILE_ADMIN_HANDLER.'-bandi');
define('TOSENDIT_PAFACILE_BANDI_EDIT_HANDLER',				TOSENDIT_PAFACILE_BANDI_HANDLER.TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_BANDI_NEW_HANDLER',				TOSENDIT_PAFACILE_BANDI_HANDLER.TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_BANDI_DELETE_HANDLER',			TOSENDIT_PAFACILE_BANDI_EDIT_HANDLER.TOSENDIT_PAFACILE_DELETE);

// Since Version 1.1.0
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_HANDLER',			TOSENDIT_PAFACILE_ADMIN_HANDLER .'-alboPretorio');
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_EDIT_HANDLER',		TOSENDIT_PAFACILE_ALBO_PRETORIO_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_NEW_HANDLER',		TOSENDIT_PAFACILE_ALBO_PRETORIO_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_DELETE_HANDLER',	TOSENDIT_PAFACILE_ALBO_PRETORIO_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_DRAFT_HANDLER',		TOSENDIT_PAFACILE_ALBO_PRETORIO_EDIT_HANDLER .'&status=0');
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_PUBLISHED_HANDLER',	TOSENDIT_PAFACILE_ALBO_PRETORIO_EDIT_HANDLER .'&status=1,2,3');
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_ABORTED_HANDLER',	TOSENDIT_PAFACILE_ALBO_PRETORIO_EDIT_HANDLER .'&status=9');

// Since version 1.4.2
define('TOSENDIT_PAFACILE_ALBO_PRETORIO_REGISTRO_HANDLER',	TOSENDIT_PAFACILE_ALBO_PRETORIO_EDIT_HANDLER .'-registro');

// Since Version 1.2.0
define('TOSENDIT_PAFACILE_INCARICHI_PROF_HANDLER',			TOSENDIT_PAFACILE_ADMIN_HANDLER .'-incarichiProfessionali');
define('TOSENDIT_PAFACILE_INCARICHI_PROF_EDIT_HANDLER',		TOSENDIT_PAFACILE_INCARICHI_PROF_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_INCARICHI_PROF_NEW_HANDLER',		TOSENDIT_PAFACILE_INCARICHI_PROF_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_INCARICHI_PROF_DELETE_HANDLER',	TOSENDIT_PAFACILE_INCARICHI_PROF_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);


// Since Version 1.5.6
define('TOSENDIT_PAFACILE_TIPO_ATTO_HANDLER',			TOSENDIT_PAFACILE_ADMIN_HANDLER .'-tipoAtto');
define('TOSENDIT_PAFACILE_TIPO_ATTO_EDIT_HANDLER',		TOSENDIT_PAFACILE_TIPO_ATTO_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_TIPO_ATTO_NEW_HANDLER',		TOSENDIT_PAFACILE_TIPO_ATTO_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_TIPO_ATTO_DELETE_HANDLER',	TOSENDIT_PAFACILE_TIPO_ATTO_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);

// Since Version 1.5.8
define('TOSENDIT_PAFACILE_TIPO_ORGANO_HANDLER',			TOSENDIT_PAFACILE_ADMIN_HANDLER .'-tipoOrgano');
define('TOSENDIT_PAFACILE_TIPO_ORGANO_EDIT_HANDLER',	TOSENDIT_PAFACILE_TIPO_ORGANO_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_TIPO_ORGANO_NEW_HANDLER',		TOSENDIT_PAFACILE_TIPO_ORGANO_HANDLER .TOSENDIT_PAFACILE_NEW);

// Since Version 2.5
define('TOSENDIT_PAFACILE_SOVVENZIONI_HANDLER',			TOSENDIT_PAFACILE_ADMIN_HANDLER .'-sovvenzioni');
define('TOSENDIT_PAFACILE_SOVVENZIONI_EDIT_HANDLER',	TOSENDIT_PAFACILE_SOVVENZIONI_HANDLER .TOSENDIT_PAFACILE_EDIT);
define('TOSENDIT_PAFACILE_SOVVENZIONI_NEW_HANDLER',		TOSENDIT_PAFACILE_SOVVENZIONI_HANDLER .TOSENDIT_PAFACILE_NEW);
define('TOSENDIT_PAFACILE_SOVVENZIONI_DELETE_HANDLER',	TOSENDIT_PAFACILE_SOVVENZIONI_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);

# Refuso nella definizione della costante
define('TOSENDIT_PAFACILE_TIPO_ORGANO_DELETE_HANDLER',	TOSENDIT_PAFACILE_TIPO_ORGANO_EDIT_HANDLER .TOSENDIT_PAFACILE_DELETE);



define('TOSENDIT_PAFACILE_ROLE_ORGANI',			'Gestore organi istituzionali');
define('TOSENDIT_PAFACILE_ROLE_ORGANIGRAMMA',	'Gestore organigramma');
define('TOSENDIT_PAFACILE_ROLE_DELIBERE',		'Gestore delibere');
define('TOSENDIT_PAFACILE_ROLE_DETERMINE',		'Gestore determine');
define('TOSENDIT_PAFACILE_ROLE_ORDINANZE',		'Gestore ordinanze');
define('TOSENDIT_PAFACILE_ROLE_BANDI_GARE',		'Gestore bandi');

// Since Version 1.1.0
define('TOSENDIT_PAFACILE_ROLE_ALBO_PRETORIO','Gestore albo pretorio');

// Since Version 1.2.0
define('TOSENDIT_PAFACILE_ROLE_INCARICHI_PROFESSIONALI','Gestore incarichi professionali');

// Since Version 1.4
define('TOSENDIT_PAFACILE_ROLE_EDITORE_ALBO_PRETORIO','Editore Albo');

// Since Version 2.5
define('TOSENDIT_PAFACILE_ROLE_SOVVENZIONI',	'Gestore sovvenzioni');

# Nome della tabella nel DB relativa ai componenti i vari organi comunali
if(!defined('TOSENDIT_DB_ATTACHS')) define('TOSENDIT_DB_ATTACHS', 'tosendit_attachs');

define('TOSENDIT_PAFACILE_DB_ORGANI', 					'pa_organi' );
define('TOSENDIT_PAFACILE_DB_DELIBERE', 				'pa_delibere' );
define('TOSENDIT_PAFACILE_DB_ORDINANZE', 				'pa_ordinanze' );
define('TOSENDIT_PAFACILE_DB_DETERMINE', 				'pa_determine' );
define('TOSENDIT_PAFACILE_DB_BANDI', 					'pa_bandi' );
define('TOSENDIT_PAFACILE_DB_ORGANIGRAMMA',				'pa_organigramma');
define('TOSENDIT_PAFACILE_DB_USERS_TO_ORGANIGRAMMA',	'pa_users2org');

// Since version 1.1.0
define('TOSENDIT_PAFACILE_DB_ALBO_PRETORIO',			'pa_albopretorio');

// Since version 1.2.0
define('TOSENDIT_PAFACILE_DB_INCARICHI',				'pa_incarichi');

// Since version 1.4.0
if(!defined('TOSENDIT_DB_AUDIT_TRAIL')) define('TOSENDIT_DB_AUDIT_TRAIL', 'tosendit_log');

// Since version 1.5.0
define('TOSENDIT_PAFACILE_DB_TIPO_ATTO',				'pa_tipo_atto');

// Since version 1.5.8
define('TOSENDIT_PAFACILE_DB_TIPO_ORGANO',				'pa_tipo_org');

// Since Version 2.5
define('TOSENDIT_PAFACILE_DB_SOVVENZIONI',				'pa_sovvenzioni');


define('TOSENDIT_PAFACILE_PLUGIN_URL',		toSendItGenericMethods::pluginDirectory());

# Marcatori per il filtro "the_content"
define('TOSENDIT_PAFACILE_CONTENT_ORGANIGRAMMA',		'organigramma');
define('TOSENDIT_PAFACILE_CONTENT_DETERMINE',			'determine');
define('TOSENDIT_PAFACILE_CONTENT_ORDINANZE',			'ordinanze');
define('TOSENDIT_PAFACILE_CONTENT_DELIBERE',			'delibere');
define('TOSENDIT_PAFACILE_CONTENT_ORGANI',				'organi');
// Since version 1.1.0
define('TOSENDIT_PAFACILE_CONTENT_ALBO_PRETORIO',		'albopretorio');

// Since versione 1.1.1
!defined('TOSENDIT_PAGING_RECORDS') && define('TOSENDIT_PAGING_RECORDS',		20);

// Since version 1.2.0
define('TOSENDIT_PAFACILE_CONTENT_INCARICHI',			'incarichi');

// Since version 2.5.0
define('TOSENDIT_PAFACILE_CONTENT_SOVVENZIONI',			'sovvenzioni');

// Since version 1.4.2
define('TOSENDIT_PAFACILE_ATTO_BOZZA', 		'0');	# Atto in bozza
define('TOSENDIT_PAFACILE_ATTO_PREPARATO', 	'8');	# Pronto per la pubblicazione
define('TOSENDIT_PAFACILE_ATTO_PUBBLICATO', '1');
define('TOSENDIT_PAFACILE_ATTO_PROROGATO', 	'2');
define('TOSENDIT_PAFACILE_ATTO_ANNULLATO', 	'9');

?>