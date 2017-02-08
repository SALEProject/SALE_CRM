<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 *
 * Description: Defines the Romanian language pack for the base application.
 * Contributor: Belghir Raul Cristian
 ********************************************************************************/






//the left value is the key stored in the db and the right value is the display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'RO Romanian',
  'moduleList' =>
  array (
    'Home' => 'Start',
    'Dashboard' => 'Grafice',
    'Contacts' => 'Contacte',
    'Accounts' => 'Organizaţii',
    'Opportunities' => 'Afaceri',
    'Cases' => 'Cazuri',
    'Notes' => 'Note',
    'Calls' => 'Apeluri',
    'Emails' => 'Emailuri',
    'Meetings' => 'Întâlniri',
    'Tasks' => 'Sarcini',
    'Calendar' => 'Calendar',
    'Leads' => 'Referinţe',











	'Activities' => 'Activităţi',
    'Bugs' => 'Defecte',
    'Feeds' => 'RSS',
    'iFrames'=>'Siteuri',
    'TimePeriods'=>'Perioade',
    'Project'=>'Proiecte',
    'ProjectTask'=>'Lucrări',
    'Campaigns'=>'Campanii',
    'Documents'=>'Documente',
    'Sync'=>'Sincronizare',






    'Users' => 'Utilizatori',
    'Releases' => 'Distribuţii',    
    'Prospects' => 'Prospecte',
    'Queues' => 'Cozi de aşteptare',
    'EmailMarketing' => 'Marketing prin email',
    'EmailTemplates' => 'Şabloane de email',
    'ProspectLists' => 'Asocieri',
    'SavedSearch' => 'Căutări salvate',
        ),
  'moduleListSingular' =>
  array (
    'Home' => 'Start',
    'Dashboard' => 'Grafic',
    'Contacts' => 'Contact',
    'Accounts' => 'Organizaţie',
    'Opportunities' => 'Afacere',
    'Cases' => 'Caz',
    'Notes' => 'Notă',
    'Calls' => 'Apel',
    'Emails' => 'Email',
    'Meetings' => 'Întâlnire',
    'Tasks' => 'Sarcină',
    'Calendar' => 'Calendar',
    'Leads' => 'Referinţă',









    'Activities' => 'Activitate',
    'Bugs' => 'Defect',
    'Feeds' => 'RSS',
    'iFrames'=>'Site',
    'TimePeriods'=>'Perioadă',
    'Project'=>'Proiect',
    'ProjectTask'=>'Lucrare',
    'Campaigns'=>'Campanie',
    'Documents'=>'Document',
    'Sync'=>'Sincronizare',






    'Users' => 'Utilizator'
        ),        
 
  'checkbox_dom'=> array(
  	''=>'',
  	'1'=>'Da',
  	'2'=>'Nu',
  ),

 //e.g. en fran�ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Analist',
    'Competitor' => 'Concurent',
    'Customer' => 'Client',
    'Integrator' => 'Integrator',
    'Investor' => 'Investitor',
    'Partner' => 'Partener',
    'Press' => 'Presă',
    'Prospect' => 'Prospect',
    'Reseller' => 'Reseller',
    'Other' => 'Altele',
  ),
  //e.g. en espa�ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Textile',
    'Banking' => 'Bănci',
    'Biotechnology' => 'Biotehnologie',
    'Chemicals' => 'Industria chimică',
    'Communications' => 'Comunicaţii',
    'Construction' => 'Construcţii',
    'Consulting' => 'Consultanţă',
    'Education' => 'Educaţie',
    'Electronics' => 'Electronică',
    'Energy' => 'Energie',
    'Engineering' => 'Inginerie',
    'Entertainment' => 'Divertisment',
    'Environmental' => 'Mediu',
    'Finance' => 'Finanţe',
    'Government' => 'Guvern',
    'Healthcare' => 'Sănătate',
    'Hospitality' => 'Spitale',
    'Insurance' => 'Asigurări',
    'Machinery' => 'Industria grea',
    'Manufacturing' => 'Industria manufacturieră',
    'Media' => 'Media',
    'Not For Profit' => 'Nonprofit',
    'Recreation' => 'Turism',
    'Retail' => 'Vânzări',
    'Shipping' => 'Curierat',
    'Technology' => 'Tehnologie',
    'Telecommunications' => 'Telecomunicaţii',
    'Transportation' => 'Transporturi',
    'Utilities' => 'Servicii',
    'Other' => 'Altele',
  ),
  'source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Apel telefonic',
    'Existing Customer' => 'Client existent',
    'Self Generated' => 'Autogenerat',
    'Employee' => 'Angajat',
    'Partner' => 'Partener',
    'Public Relations' => 'Relaţii cu publicul',
    'Direct Mail' => 'Email direct',
    'Conference' => 'Conferinţă',
    'Trade Show' => 'Salon de prezentare',
    'Web Site' => 'Site web',
    'Word of mouth' => 'Recomandare',
    'Email' => 'Email',
    'Other' => 'Altele',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Afacere existentă',
    'New Business' => 'Afacere nouă',
  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Factor decizional principal',
    'Business Decision Maker' => 'Factor decizional executiv',
    'Business Evaluator' => 'Evaluator executiv',
    'Technical Decision Maker' => 'Factor decizional tehnic',
    'Technical Evaluator' => 'Evaluator tehnic',
    'Executive Sponsor' => 'Sponsor executiv',
    'Influencer' => 'Factor influent',
    'Other' => 'Altele',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Contact principal',
    'Alternate Contact' => 'Contact alternativ',
  ),
  'payment_terms' =>
  array (
  	'' => '', 
	'Net 15' => 'Net 15',
	'Net 30' => 'Net 30',
  ),  
  'sales_stage_default_key' => 'Prospecting',
  'sales_stage_dom' =>
  array (
    'Prospecting' => 'Planificat',
    'Qualification' => 'Alegere',
    'Needs Analysis' => 'Necesită analiză',
    'Value Proposition' => 'Propunere ofertă',
    'Id. Decision Makers' => 'Identificare decidenţi',
    'Perception Analysis' => 'Evaluarea percepţiei',
    'Proposal/Price Quote' => 'Cotaţie',
    'Negotiation/Review' => 'Negociere',
    'Closed Won' => 'Câştig',
    'Closed Lost' => 'Pierdere',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'Apel',
    'Meeting' => 'Întâlnire',
    'Task' => 'Sarcină',
    'Email' => 'Email',
    'Note' => 'Notă',
  ),
  'salutation_dom' =>
  array (
    '' => '',
    'Mr.' => 'Dl.',
    'Ms.' => 'Dra.',
    'Mrs.' => 'Dna.',
    'Dr.' => 'Doc.',
    'Prof.' => 'Prof.',
  ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time'=>3600,
  'reminder_time_options' => array( 60=> 'înainte cu un minut',
  								  300=> '5 minute înainte',
  								  600=> '10 minute înainte',
  								  900=> '15 minute înainte',
  								  1800=> '30 minute înainte',
  								  3600=> 'o oră înainte',
								 ),	

  'task_priority_default' => 'Medium',
  'task_priority_dom' =>
  array (
    'High' => 'Nivel ridicat',
    'Medium' => 'Nivel mediu',
    'Low' => 'Nivel scăzut',
  ),
  'task_status_default' => 'Not Started',
  'task_status_dom' =>
  array (
    'Not Started' => 'Neîncepută',
    'In Progress' => 'În curs',
    'Completed' => 'Terminată',
    'Pending Input' => 'În aşteptare',
    'Deferred' => 'Amânată',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Planificată',
    'Held' => 'Confirmată',
    'Not Held' => 'Anulată',
  ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Planificat',
    'Held' => 'Desfăşurat',
    'Not Held' => 'Anulat',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Intrare',
    'Outbound' => 'Ieşire',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'Nouă',
    'Assigned' => 'Atribuită',
    'In Process' => 'În curs',
    'Converted' => 'Convertită',
    'Recycled' => 'Reciclată',
    'Dead' => 'Defunctă',
  ),
  'lead_status_noblank_dom' =>
  array (
    'New' => 'Nouă',
    'Assigned' => 'Atribuită',
    'In Process' => 'În proces',
    'Converted' => 'Convertită',
    'Recycled' => 'Reciclată',
    'Dead' => 'Defunctă',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'New',
  'case_status_dom' =>
  array (
    'New' => 'Nou',
    'Assigned' => 'Atribuit',
    'Closed' => 'Închis',
    'Pending Input' => 'În aşteptare',
    'Rejected' => 'Respins',
    'Duplicate' => 'Duplicat',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'Nivel ridicat',
    'P2' => 'Nivel mediu',
    'P3' => 'Nivel scăzut',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Activ',
    'Inactive' => 'Inactiv',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Activ',
    'Terminated' => 'Inactiv',
    'Leave of Absence' => 'Absent',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),

	'project_task_priority_options' => array (
		'High' => 'Nivel ridicat',
		'Medium' => 'Nivel mediu',
		'Low' => 'Nivel scăzut',
	),
	'project_task_status_options' => array (
		'Not Started' => 'Neîncepută',
		'In Progress' => 'În curs',
		'Completed' => 'Terminată',
		'Pending Input' => 'În aşteptare',
		'Deferred' => 'Amânată',
	),
	'project_task_utilization_options' => array (
		'0' => 'zero',
		'25' => '25',
		'50' => '50',
		'75' => '75',
		'100' => '100',
	),
  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Accounts',
  'record_type_display' =>
  array (
    'Accounts' => 'Organizaţii',
    'Opportunities' => 'Afaceri',
    'Cases' => 'Cazuri',
    'Leads' => 'Referinţe',
    'Contacts' => 'Contacte', // cn (11/22/2005) added to support Emails




    'Bugs' => 'Defecte',
    'Project' => 'Proiect',
    'ProjectTask' => 'Lucrare',
    'Tasks' => 'Sarcini',
  ),

  'record_type_display_notes' =>
  array (
    'Accounts' => 'Organizaţii',
	'Contacts' => 'Contacte',
    'Opportunities' => 'Afaceri',
    'Cases' => 'Cazuri',
    'Leads' => 'Referinţe',






    'Bugs' => 'Defecte',
    'Emails' => 'Emailuri',
    'Project' => 'Proiect',
    'ProjectTask' => 'Lucrări',
    'Meetings' => 'Întâlniri',
    'Calls' => 'Apeluri'
  ),







































  'quote_type_dom' =>
  array (
    'Quotes' => 'Cotaţii',
    'Orders' => 'Comenzi',
  ),
  'default_quote_stage_key' => 'Draft',
  'quote_stage_dom' =>
  array (
    'Draft' => 'Schiţă',
    'Negotiation' => 'Negociere',
    'Delivered' => 'Trimisă',
    'On Hold' => 'În aşteptare',
    'Confirmed' => 'Confirmată',
    'Closed Accepted' => 'Acceptată',
    'Closed Lost' => 'Pierdută',
    'Closed Dead' => 'Defunctă',
  ),
  'default_order_stage_key' => 'Pending',
  'order_stage_dom' =>
  array (
    'Pending' => 'În aşteptare',
    'Confirmed' => 'Confirmată',
    'On Hold' => 'Oprită temporar',
    'Shipped' => 'Livrată',
    'Cancelled' => 'Anulată',
  ),

//Note:  do not translate quote_relationship_type_default_key
//       it is the key for the default quote_relationship_type_dom value
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'quote_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Factor decizional principal',
    'Business Decision Maker' => 'Factor decizional executiv',
    'Business Evaluator' => 'Evaluator executiv',
    'Technical Decision Maker' => 'Factor decizional tehnic',
    'Technical Evaluator' => 'Evaluator tehnic',
    'Executive Sponsor' => 'Sponsor executiv',
    'Influencer' => 'Factor influent',
    'Other' => 'Altul',
  ),
  'layouts_dom' =>
  array (
    'Standard' => 'Propunere',
    'Invoice' => 'Factură',
    'Terms' => 'Termeni'
  ),

  'bug_priority_default_key' => 'Medium',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Urgent',
    'High' => 'Nivel ridicat',
    'Medium' => 'Nivel mediu',
    'Low' => 'Nivel scăzut',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
  	'' => '',
  	'Accepted' => 'Acceptat',
    'Duplicate' => 'Duplicat',
    'Fixed' => 'Corectat',
    'Out of Date' => 'Expirat',
    'Invalid' => 'Invalid',
    'Later' => 'Amânat',
  ),
  'bug_status_default_key' => 'New',
  'bug_status_dom' =>
  array (
    'New' => 'Nou',
    'Assigned' => 'Atribuit',
    'Closed' => 'Închis',
    'Pending' => 'În aşteptare',
    'Rejected' => 'Respins',
  ),
   'bug_type_default_key' => 'Bug',
  'bug_type_dom' =>
  array (
    'Bug' => 'Problemă',
    'Feature' => 'Recomandare',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
	'' => '',
  	'Internal' => 'Intern',
  	'Forum' => 'Forum',
  	'Web' => 'Web',
  	'InboundEmail' => 'Email'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
	'' => '',
  	'Accounts' => 'Organizaţii',
  	'Activities' => 'Activităţi',
  	'Bug Tracker' => 'Defecte',
  	'Calendar' => 'Calendar',
  	'Calls' => 'Apeluri',
  	'Campaigns' => 'Campanii',
  	'Cases' => 'Cazuri',
  	'Contacts' => 'Contacte',
  	'Currencies' => 'Valute',
  	'Dashboard' => 'Grafice',
  	'Documents' => 'Documente',
  	'Emails' => 'Emailuri',
  	'Feeds' => 'RSS',
  	'Forecasts' => 'Previziuni',  	
  	'Help' => 'Ajutor',
  	'Home' => 'Start',
  	'Leads' => 'Referinţe',
  	'Meetings' => 'Întâlniri',
  	'Notes' => 'Note',
  	'Opportunities' => 'Afaceri',
  	'Outlook Plugin' => 'Plugin Outlook',
  	'Product Catalog' => 'Catalog de produse', 
  	'Products' => 'Produse',  	
  	'Projects' => 'Proiecte',  	
  	'Quotes' => 'Cotaţii',
  	'Releases' => 'Distribuţii',
  	'RSS' => 'RSS',
  	'Studio' => 'Studio',
  	'Upgrade' => 'Upgrade',
  	'Users' => 'Utilizatori',
  ),

  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
    	'' => '',
        'Planning' => 'Planificată',
        'Active' => 'Activă',
        'Inactive' => 'Inactivă',
        'Complete' => 'Completă',
        'In Queue' => 'În aşteptare',
        'Sending'=> 'Se trimite',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Teleshop',
        'Mail' => 'Curier',
        'Email' => 'Email',
        'Print' => 'Print',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'TV',
        ),



  'notifymail_sendtype' =>
  array (
    'sendmail' => 'sendmail',
    'SMTP' => 'SMTP',
  ),
  'dom_timezones' => array('-12' => '(GMT - 12) Occidentale',
  							'-11'=>'(GMT - 11) Samoa',
  							'-10'=>'(GMT - 10) Hawaii',
  							'-9'=>'(GMT - 9) Alaska',
  							'-8'=>'(GMT - 8) San Francisco',
  							'-7'=>'(GMT - 7) Phoenix',
  							'-6'=>'(GMT - 6) Saskatchewan',
  							'-5'=>'(GMT - 5) New York',
  							'-4'=>'(GMT - 4) Santiago',
  							'-3'=>'(GMT - 3) Buenos Aires',
  							'-2'=>'(GMT - 2) Atlantic',
  							'-1'=>'(GMT - 1) Azore',
  							'0'=>'(GMT)',
  							'1'=>'(GMT + 1) Madrid',
  							'2'=>'(GMT + 2) Athena',
  							'3'=>'(GMT + 3) Moscova',
  							'4'=>'(GMT + 4) Kabul',
  							'5'=>'(GMT + 5) Ekaterinburg',
  							'6'=>'(GMT + 6) Astana',
  							'7'=>'(GMT + 7) Bangkok',
  							'8'=>'(GMT + 8) Perth',
  							'9'=>'(GMT + 9) Seul',
  							'10'=>'(GMT + 10) Brisbane',
  							'11'=>'(GMT + 11) Solomon',
  							'12'=>'(GMT + 12) Auckland',
  							),
      'dom_cal_month_long'=>array(
						    '0'=>"",
						    '1'=>"Ianuarie",
						    '2'=>"Februarie",
						    '3'=>"Martie",
						    '4'=>"Aprilie",
						    '5'=>"Mai",
						    '6'=>"Iunie",
						    '7'=>"Iulie",
						    '8'=>"August",
						    '9'=>"Septembrie",
						    '10'=>"Octombrie",
						    '11'=>"Noiembrie",
						    '12'=>"Decembrie",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"am",
                'pm'=>"pm"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'AM',
                 'PM'=>'PM'
        ),
    'dom_report_types'=>array(
                'tabular'=>'Rânduri şi coloane',
                'summary'=>'Selecţie',
                'detailed_summary'=>'Selecţie cu detalii',
        ),
	'dom_email_types'=> array(
		'out'		=> 'Ieşit',
		'archived'	=> 'Arhivat',
		'draft'		=> 'Schiţă',
		'inbound'	=> 'Intrat',
	),
	'dom_email_status' => array (
		'archived'	=> 'Arhivat',
		'unread'	=> 'Necitit',
		'read'		=> 'Citit',
		'replied'	=> 'Răspuns',
		'closed'	=> 'Închis',
		'sent'		=> 'Trimis',
		'send_error'=> 'Eroare de trimitere',
		'draft'		=> 'Schiţă',
	),
		
	'dom_email_server_type' => array(	''			=> '-- Alegeţi --',
										'imap'		=> 'IMAP',
										'pop3'		=> 'POP3',
	),
	'dom_mailbox_type'		=> array(/*''			=> '-- Alegeţi --',*/
									 'pick'		=> 'Alege acţiune',
									 'bug'		=> 'Nou defect',
					 				 'support'	=> 'Nou caz',
					 				 'contact'  => 'Nou contact',
					 				 'sales'	=> 'Nouă referinţă',
					 				 'task'		=> 'Nouă sarcină',
					 				 'bounce'	=> 'Tratare email respins',
	),
	'dom_email_distribution'=> array(''				=> '-- Alegeţi --',
									 'direct'		=> 'Atribuire directă',
									 'roundRobin'	=> 'Pe rând',
									 'leastBusy'	=> 'Cel mai liber',
	),
	'dom_email_errors'		=> array(1 => 'Selectaţi un singur utilizator la atribuirea directă.',
									 2 => 'Trebuie să selectaţi doar elementele bifate la atribuirea directă.',
	),
	'dom_email_bool'		=> array('bool_true' => 'Da',
								 	 'bool_false' => 'Nu',
	),
	'dom_int_bool'			=> array(1 => 'Da',
								 	 0 => 'Nu',
	),
	'dom_switch_bool'		=> array ('on' => 'Da',
										'off' => 'Nu',
										'' => 'Nu', ),
	'dom_email_link_type'	=> array(	''			=> 'Client de email iniţial',
										'sugar'		=> 'Client de email din SugarCRM',
										'mailto'	=> 'Client de email extern'),

	'dom_email_editor_option'=> array(	''			=> 'Format de email iniţial',
										'html'		=> 'Email în format XHTML',
										'plain'		=> 'Email în format text'),


	'schedulers_times_dom'	=> array(	'not run'		=> 'Nu se execută',
										'ready'			=> 'Pregătit',
										'in progress'	=> 'În curs',
										'failed'		=> 'Ratat',
										'completed'		=> 'Desfăşurat',
										'no curl'		=> 'Nu se execută: cURL indisponibil',
	),

	'forecast_schedule_status_dom' =>
  	array (
    'Active' => 'Activ',
    'Inactive' => 'Inactiv',
  ),
	'forecast_type_dom' =>
  	array (
    'Direct' => 'Direct',
    'Rollup' => 'Remontat',
  ),  
	
	'document_category_dom' =>
  	array (
  	'' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Bază de cunoştinţe',
    'Sales' => 'Vânzări',
  ),  

	'document_subcategory_dom' =>
  	array (
  	'' => '',
    'Marketing Collateral' => 'Documente de marketing',
    'Product Brochures' => 'Broşuri de produse',
	'FAQ' => 'Întrebări frecvente',
  ),  
  
	'document_status_dom' =>
  	array (
    'Active' => 'Activ',
    'Draft' => 'Schiţă',
	'FAQ' => 'De comentat',
	'Expired' => 'Expirat',
	'Under Review' => 'În discuţie',
	'Pending' => 'În aşteptare',
  ),
  'document_template_type_dom' =>
  array(
  	''=>'',
  	'mailmerge'=>'Preluare email',
  	'eula'=>'EULA',
  	'nda'=>'NDA',
  	'license'=>'Licenţiat',
  ),
	'dom_meeting_accept_options' =>
  	array (
	'accept' => 'Acceptă',
	'decline' => 'Refuză',
	'tentative' => 'Incert',
  ),
	'dom_meeting_accept_status' =>
  	array (
	'accept' => 'Acceptat',
	'decline' => 'Refuzat',
	'tentative' => 'Incert',
	'none'		=> 'Nimic',
  ),




















































































































































































































































































































































































































// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
	'Users' => 'Users',



	'Mailbox' => 'Mailbox',
),		   
*/

//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => 'Iniţială',
    'seed' => 'Începută',
    'exempt_domain' => 'Excludere - După domeniu',
    'exempt_address' => 'Excludere - După email',
    'exempt' => 'Excludere - După ID',
    'test' => 'Test',
  ),
  
  'email_marketing_status_dom' => 
  array (
  	'' => '',
  	'active'=>'Activ',
  	'inactive'=>'Inactiv'
  ),

  'campainglog_activity_type_dom' =>
  array (
  	''=>'',
    'targeted' => 'Email trimis/încercat',
    'send error'=>'Email respins, altele',
    'invalid email'=>'Mesaj respins sau invalid',
    'link'=>'Legătură din mesaj accesat',
    'viewed'=>'Mesaj vizualizat',
    'removed'=>'Şters',
    'lead'=>'Referinţe create',
    'contact'=>'Contacte create',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Contacte',
    'Users'=>'Utilizatori',
    'Prospects'=>'Prospecte',
    'Leads'=>'Referinţe',
  ),
  
  'merge_operators_dom' => array (
    'like'=>'Contains',
    'exact'=>'Exactly',
    'start'=>'Starts With',
  ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Disabled',
        1=>'Enabled',





  ),
   
  'navigation_paradigms' => array(
        'm'=>'Modules',
        'gm'=>'Grouped Modules',
  ),










































);

$app_strings = array (

















	'ERR_CREATING_FIELDS' => 'Eroare la crearea de câmpuri: ',
	'ERR_CREATING_TABLE' => 'Eroare la crearea tabelei: ',
	'ERR_DELETE_RECORD' => 'Un număr trebuie specificat pentru a şterge înregistrarea.',
	'ERR_EXPORT_DISABLED' => 'Exporturi dezactivate.',
	'ERR_EXPORT_TYPE' => 'Eroare la export ',
	'ERR_INVALID_AMOUNT' => 'Introduceţi o sumă validă.',
	'ERR_INVALID_DATE_FORMAT' => 'Formatul de dată trebuie să fie: ',
	'ERR_INVALID_DATE' => 'Introduceţi o dată validă.',
	'ERR_INVALID_DAY' => 'Introduceţi o zi validă.',
	'ERR_INVALID_EMAIL_ADDRESS' => 'Adresă de email invalidă.',
	'ERR_INVALID_FILE_REFERENCE' => 'Referinţă invalidă de fişier',
	'ERR_INVALID_HOUR' => 'Introduceţi o oră validă.',
	'ERR_INVALID_MONTH' => 'Introduceţi o lună validă.',
	'ERR_INVALID_TIME' => 'Introduceţi timpul corect.',
	'ERR_INVALID_YEAR' => 'Introduceţi un an valid din 4 cifre.',
	'ERR_NEED_ACTIVE_SESSION' => 'O sesiune activă este necesară pentru a exporta conţinut.',
	'ERR_NOT_ADMIN' => "Acces de administrare neautorizat.",
	'ERR_MISSING_REQUIRED_FIELDS' => 'Câmpurile necesare lipsesc: ',
	'ERR_INVALID_VALUE' => 'Valoare invalidă:',
	'ERR_NO_SUCH_FILE' =>'Fişierul nu există în sistem',
	'ERR_NO_SINGLE_QUOTE' => 'Nu se pot folosi ghilimele simple pentru ',
	'ERR_NOTHING_SELECTED' =>'Faceţi o alegere înainte de a continua.',
	'ERR_OPPORTUNITY_NAME_DUPE' => 'O afacere cu numele %s există deja. Alegeţi mai jos alt nume.',
	'ERR_OPPORTUNITY_NAME_MISSING' => 'Un nume de afacere nu a fost introdus. Introduceţi mai jos un nume.',
	'ERR_POTENTIAL_SEGFAULT' => 'S-a detectat o potenţială eroare de segmentare în Apache. Cereţi administratorului acestui sistem să confirme problema şi să o raporteze la SugarCRM.',
	'ERR_SELF_REPORTING' => 'Utilizatorul nu poate să raporteze lui însuşi.',
	'ERR_SINGLE_QUOTE'	=> 'Folosirea ghilimelelor simple nu este permisă în acest câmp. Introduceţi altă valoare.',
	'ERR_SQS_NO_MATCH_FIELD' => 'Nu s-au găsit înregistrări pentru câmpul: ',
	'ERR_SQS_NO_MATCH' =>'Nu s-au găsit înregistrări',


	'LBL_ACCOUNT'=>'Organizaţie',
	'LBL_ACCOUNTS'=>'Organizaţii',
	'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
	'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Sumar',
	'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Sumar [Alt+H]',
	'LBL_ADD_BUTTON_KEY' => 'A',
	'LBL_ADD_BUTTON_TITLE' => 'Adaugă [Alt+A]',
	'LBL_ADD_BUTTON' => 'Adaugă',
	'LBL_ADD_DOCUMENT' => 'Adaugă document',
	'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
	'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Adaugă la asociere',
	'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Adaugă la asociere',
	'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Daţi click pentru a închide',
	'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Închide',
	'LBL_ADDITIONAL_DETAILS' => 'Detalii adiţionale',
	'LBL_ADMIN' => 'Administrare',
	'LBL_ALT_HOT_KEY' => 'Alt+',
	'LBL_ARCHIVE' => 'Arhivează',
	'LBL_ASSIGNED_TO_USER'=>'Atribuit utilizatorului',
	'LBL_ASSIGNED_TO' => 'Atribuit lui:',
	'LBL_BACK' => 'Înapoi',
	'LBL_BILL_TO_ACCOUNT'=>'Facturare la organizaţie',
	'LBL_BILL_TO_CONTACT'=>'Facturare la contact',
	'LBL_BROWSER_TITLE' => 'SugarCRM - Aplicaţie Open Source pentru gestiunea relaţiilor cu clienţii',
	'LBL_BUGS'=>'Defecte',
	'LBL_BY' => 'de',
	'LBL_CALLS'=>'Apeluri',
	'LBL_CAMPAIGNS_SEND_QUEUED' => 'Trimite emailurile pregătite pentru campanie.',
	'LBL_CANCEL_BUTTON_KEY' => 'X',
	'LBL_CANCEL_BUTTON_LABEL' => 'Închide',
	'LBL_CANCEL_BUTTON_TITLE' => 'Închide [Alt+X]',
	'LBL_CASE'=>'Caz',
	'LBL_CASES'=>'Cazuri',
	'LBL_CHANGE_BUTTON_KEY' => 'G',
	'LBL_CHANGE_BUTTON_LABEL' => 'Modifică',
	'LBL_CHANGE_BUTTON_TITLE' => 'Modifică [Alt+G]',
	'LBL_CHARSET' => 'UTF-8',
	'LBL_CHECKALL' => 'Bifează tot',
	'LBL_CLEAR_BUTTON_KEY' => 'C',
	'LBL_CLEAR_BUTTON_LABEL' => 'Anulează',
	'LBL_CLEAR_BUTTON_TITLE' => 'Anulează [Alt+C]',
	'LBL_CLEARALL' => 'Anulează tot',
	'LBL_CLOSE_WINDOW'=>'Închide',
	'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
	'LBL_CLOSEALL_BUTTON_LABEL' => 'Închide tot',
	'LBL_CLOSEALL_BUTTON_TITLE' => 'Închide tot [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Închide şi adaugă nou',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Închide şi adaugă nou [Alt+C]',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',    
	'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
	'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Compune email',
	'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Compune email [Alt+L]',
	'LBL_CONTACT_LIST' => 'Lista de contacte',
	'LBL_CONTACT'=>'Contact',
	'LBL_CONTACTS'=>'Contacte',
	'LBL_CREATE_BUTTON_LABEL' => 'Creează',
	'LBL_CREATED_BY_USER'=>'Creat de utilizator',
	'LBL_CREATED' => 'Creat de',
	'LBL_CURRENT_USER_FILTER' => 'Doar ce este al meu:',
	'LBL_DATE_ENTERED' => 'Creat:',
	'LBL_DATE_MODIFIED' => 'Modificat:',
	'LBL_DELETE_BUTTON_KEY' => 'D',
	'LBL_DELETE_BUTTON_LABEL' => 'Şterge',
	'LBL_DELETE_BUTTON_TITLE' => 'Şterge [Alt+D]',
	'LBL_DELETE_BUTTON' => 'Şterge',
	'LBL_DELETE' => 'Şterge',
	'LBL_DELETED'=>'Şters',
	'LBL_DIRECT_REPORTS'=>'Raport direct',
	'LBL_DONE_BUTTON_KEY' => 'X',
	'LBL_DONE_BUTTON_LABEL' => 'Terminare',
	'LBL_DONE_BUTTON_TITLE' => 'Terminare [Alt+X]',
	'LBL_DST_NEEDS_FIXIN' => 'Aplicaţia are nevoie să fie reparată pentru funcţionarea corectă a schimbării de oră vară/iarnă. Mergeţi la <a href="index.php?module=Administration&action=DstFix">Repară</a> din consola de administrare şi aplicaţi patch-ul.',
	'LBL_DUPLICATE_BUTTON_KEY' => 'U',
	'LBL_DUPLICATE_BUTTON_LABEL' => 'Copiază',
	'LBL_DUPLICATE_BUTTON_TITLE' => 'Copiază [Alt+U]',
	'LBL_DUPLICATE_BUTTON' => 'Copiază',
	'LBL_EDIT_BUTTON_KEY' => 'E',
	'LBL_EDIT_BUTTON_LABEL' => 'Editează',
	'LBL_EDIT_BUTTON_TITLE' => 'Editează [Alt+E]',
	'LBL_EDIT_BUTTON' => 'Editează',
	'LBL_VIEW_BUTTON_KEY' => 'V',
	'LBL_VIEW_BUTTON_LABEL' => 'Vizualizează',
	'LBL_VIEW_BUTTON_TITLE' => 'Vizualizează [Alt+V]',
	'LBL_VIEW_BUTTON' => 'Vizualizează',
	'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
	'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Trimite prin email ca PDF',
	'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Trimite prin email ca PDF [Alt+M]',
	'LBL_EMAILS'=>'Emailuri',
	'LBL_EMPLOYEES' => 'Angajaţi',
	'LBL_ENTER_DATE' => 'Introduceţi data',
	'LBL_EXPORT_ALL' => 'Exportă tot',
	'LBL_EXPORT' => 'Exportă',
    'LBL_GO_BUTTON_LABEL' => 'Start',
	'LBL_HIDE'=>'Ascunde',
	'LBL_ID'=>'ID',
	'LBL_IMPORT_PROSPECTS'=>'Importă prospecte',
	'LBL_IMPORT' => 'Importă',
    'LBL_IMPORT_STARTED' => 'Import pornit: ',    
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Trebuie specificat un delimitator personalizat.',
	'LBL_LAST_VIEWED' => 'Accesate recent',
	'LBL_LEADS'=>'Referinţe',

	'LBL_LIST_ACCOUNT_NAME' => 'Nume organizaţie',
	'LBL_LIST_ASSIGNED_USER' => 'Utilizator',
	'LBL_LIST_CONTACT_NAME' => 'Nume contact',
	'LBL_LIST_CONTACT_ROLE' => 'Rol contact',
	'LBL_LIST_EMAIL' => 'Email',
	'LBL_LIST_NAME' => 'Nume',
	'LBL_LIST_OF' => 'din',
	'LBL_LIST_PHONE' => 'Telefon',
	'LBL_LIST_USER_NAME' => 'Utilizator',
	'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Sunteţi sigur(ă) că vreţi să actualizati întreaga listă?',
	'LBL_LISTVIEW_NO_SELECTED' => 'Alegeţi cel puţin o înregistrare  pentru a continua.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Alegeţi cel puţin două înregistrări  pentru a continua.',    
	'LBL_LISTVIEW_OPTION_CURRENT' => 'Pagina curentă',
	'LBL_LISTVIEW_OPTION_ENTIRE' => 'Lista întreagă',
	'LBL_LISTVIEW_OPTION_SELECTED' => 'Înregistrările selectate',
	'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selectate: ',
	
	'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Ion',
	'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Popescu',
	'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dl.',
	'LBL_LOGOUT' => 'Ieşire',
	'LBL_MAILMERGE_KEY' => 'M',
	'LBL_MAILMERGE' => 'Preluare email',
	'LBL_MASS_UPDATE' => 'Actualizare selecţie',
	'LBL_MEETINGS'=>'Întâlniri',
	'LBL_MEMBERS'=>'Membri',
	'LBL_MODIFIED_BY_USER'=>'Modificat de',
	'LBL_MODIFIED' => 'Modificat de',
	'LBL_MY_ACCOUNT' => 'Preferinţe',
	'LBL_NAME' => 'Nume',
	'LBL_NEW_BUTTON_KEY' => 'N',
	'LBL_NEW_BUTTON_LABEL' => 'Creează',
	'LBL_NEW_BUTTON_TITLE' => 'Creează [Alt+N]',
	'LBL_NEXT_BUTTON_LABEL' => 'Următor',
	'LBL_NONE' => '-- Neselectat --',
	'LBL_NOTES'=>'Note',
	'LBL_OPENALL_BUTTON_KEY' => 'O',
	'LBL_OPENALL_BUTTON_LABEL' => 'Deschide tot',
	'LBL_OPENALL_BUTTON_TITLE' => 'Deschide tot [Alt+O]',
	'LBL_OPENTO_BUTTON_KEY' => 'T',
	'LBL_OPENTO_BUTTON_LABEL' => 'Deschide la: ',
	'LBL_OPENTO_BUTTON_TITLE' => 'Deschide la: [Alt+T]',
	'LBL_OPPORTUNITIES'=>'Afaceri',
	'LBL_OPPORTUNITY_NAME' => 'Nume afacere',
	'LBL_OPPORTUNITY'=>'Afacere',
	'LBL_OR' => 'SAU',
	'LBL_PERCENTAGE_SYMBOL' => '%',
	'LBL_PRODUCT_BUNDLES'=>'Pachete de produse',
	'LBL_PRODUCT_BUNDLES'=>'Pachete de produse',
	'LBL_PRODUCTS'=>'Produse',
	'LBL_PROJECT_TASKS'=>'Lucrări',
	'LBL_PROJECTS'=>'Proiecte',
	'LBL_PROJECTS'=>'Proiecte',
	'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
	'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Creează afacere din cotaţie',
	'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Creează afacere din cotaţie [Alt+O]',
	'LBL_QUOTES_SHIP_TO'=>'Cotaţie trimisă la',
	'LBL_QUOTES'=>'Cotaţii',
	'LBL_RELATED_RECORDS' => 'Înregistrări asociate',
	'LBL_REMOVE' => 'Şterge',
	'LBL_REQUIRED_SYMBOL' => '*',
	'LBL_SAVE_BUTTON_KEY' => 'S',
	'LBL_SAVE_BUTTON_LABEL' => 'Salvează',
	'LBL_SAVE_BUTTON_TITLE' => 'Salvează [Alt+S]',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Salvează ca',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Salvează ca [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formular complet',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formular complet [Alt+F]',
	'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
	'LBL_SAVE_NEW_BUTTON_LABEL' => 'Salvează & creează nou',
	'LBL_SAVE_NEW_BUTTON_TITLE' => 'Salvează & creează nou [Alt+V]',
	'LBL_SEARCH_BUTTON_KEY' => 'Q',
	'LBL_SEARCH_BUTTON_LABEL' => 'Caută',
	'LBL_SEARCH_BUTTON_TITLE' => 'Caută [Alt+Q]',
	'LBL_SEARCH' => 'Caută',
	'LBL_SELECT_BUTTON_KEY' => 'T',
	'LBL_SELECT_BUTTON_LABEL' => 'Selectează',
	'LBL_SELECT_BUTTON_TITLE' => 'Selectează [Alt+T]',
	'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
	'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Selectează contact',
	'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Selectează contact [Alt+T]',
	'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Selectează rapoarte',
	'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Selectează rapoarte',
	'LBL_SELECT_USER_BUTTON_KEY' => 'U',
	'LBL_SELECT_USER_BUTTON_LABEL' => 'Selectează utilizator',
	'LBL_SELECT_USER_BUTTON_TITLE' => 'Selectează utilizator [Alt+U]',
	'LBL_SERVER_RESPONSE_RESOURCES' => 'Resursele folosite pentru construirea paginii',
	'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secunde.',
	'LBL_SERVER_RESPONSE_TIME' => 'Timp de răspuns:',
	'LBL_SHIP_TO_ACCOUNT'=>'Livrare la organizaţia',
	'LBL_SHIP_TO_CONTACT'=>'Livrare la contact',
	'LBL_SHORTCUTS' => 'Scurtături',
	'LBL_SHOW'=>'Arată',
	'LBL_SQS_INDICATOR' => '',
	'LBL_STATUS_UPDATED'=>'Statusul dumneavoastră pentru acest eveniment a fost modificat!',
	'LBL_STATUS'=>'Status:',
	'LBL_SUBJECT' => 'Subiect',
	'LBL_SYNC' => 'Sync',
	'LBL_SYNC' => 'Sync',
    'LBL_TABGROUP_ALL' => 'Toate',
    'LBL_TABGROUP_ACTIVITIES' => 'Activităţi',
    'LBL_TABGROUP_COLLABORATION' => 'Colaborare',
    'LBL_TABGROUP_HOME' => 'Start',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Portal',
    'LBL_TABGROUP_OTHER' => 'Altele',
    'LBL_TABGROUP_REPORTS' => 'Rapoarte',
    'LBL_TABGROUP_SALES' => 'Vânzări',
    'LBL_TABGROUP_SUPPORT' => 'Suport',
    'LBL_TABGROUP_TOOLS' => 'Utilitare',
	'LBL_TASKS'=>'Sarcini',
	'LBL_TEAMS_LINK'=>'Echipe',
	'LBL_THOUSANDS_SYMBOL' => 'K',
	'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
	'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhivează email',
	'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhivează email [Alt+K]',
	'LBL_UNAUTH_ADMIN' => 'Acces neautorizat la administrare',
	'LBL_UNDELETE_BUTTON_LABEL' => 'Recuperează',
	'LBL_UNDELETE_BUTTON_TITLE' => 'Recuperează [Alt+D]',
	'LBL_UNDELETE_BUTTON' => 'Recuperează',
	'LBL_UNDELETE' => 'Recuperează',
	'LBL_UNSYNC' => 'Desincronizează',
	'LBL_UPDATE' => 'Actualizează',
	'LBL_USER_LIST' => 'Lista utilizatori',
	'LBL_USERS_SYNC'=>'Sincronizare utilizatori',
	'LBL_USERS'=>'Utilizatori',
	'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
	'LBL_VIEW_PDF_BUTTON_LABEL' => 'Tipăreşte în PDF',
	'LBL_VIEW_PDF_BUTTON_TITLE' => 'Tipăreşte în PDF [Alt+P]',

	'LNK_ABOUT' => 'Despre',
	'LNK_ADVANCED_SEARCH' => 'Căutare avansată',
	'LNK_BASIC_SEARCH' => 'Căutare simplă',
    'LNK_SAVED_VIEWS' => 'Căutări salvate',
	'LNK_DELETE_ALL' => 'şterge tot', 
	'LNK_DELETE' => 'şterge',
	'LNK_EDIT' => 'editează',
	'LNK_GET_LATEST'=>'Get latest',
	'LNK_GET_LATEST_TOOLTIP'=>'Înlocuieşte cu ultima versiune',
	'LNK_HELP' => 'Ajutor',
	'LNK_LIST_END' => 'Sfârşit',
	'LNK_LIST_NEXT' => 'Următor',
	'LNK_LIST_PREVIOUS' => 'Anterior',
	'LNK_LIST_RETURN' => 'Înapoi la listă',
	'LNK_LIST_START' => 'Start',
	'LNK_LOAD_SIGNED'=>'Semnează',
	'LNK_LOAD_SIGNED_TOOLTIP'=>'Înlocuieşte cu documentul semnat',
	'LNK_PRINT' => 'Tipăreşte',
	'LNK_REMOVE' => 'şterge',
	'LNK_RESUME' => 'Continuă',
	'LNK_VIEW_CHANGE_LOG' => 'Jurnal de modificări',
    
	
	'NTC_CLICK_BACK' => 'Întoarceţi-vă şi reparaţi eroarea.',
	'NTC_DATE_FORMAT' => '(aaaa-ll-zz)',
	'NTC_DATE_TIME_FORMAT' => '(aaaa-ll-zz 24:00)',
	'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Sunteţi sigur(ă) că vreţi să ştergeţi înregistrările selectate?',
	'NTC_DELETE_CONFIRMATION' => 'Sunteţi sigur(ă) că vreţi să ştergeţi înregistrarea selectată?',
	'NTC_LOGIN_MESSAGE' => 'Autentificaţi-vă.',
	'NTC_NO_ITEMS_DISPLAY' => 'Nimic de afişat',
	'NTC_REMOVE_CONFIRMATION' => 'Sunteţi sigur(ă) că vreţi să ştergeţi relaţia?',
	'NTC_REQUIRED' => 'Câmpuri obligatorii',
	'NTC_SUPPORT_SUGARCRM' => 'Ajutaţi proiectul SugarCRM printr-o donaţie PayPal - Este rapid, gratuit şi sigur!',
	'NTC_TIME_FORMAT' => '(24:00)',
	'NTC_WELCOME' => 'Bine ai venit',
	'NTC_YEAR_FORMAT' => '(aaaa)',
	'LOGIN_LOGO_ERROR'=> 'Înlocuiţi logo-urile SugarCRM.',
	'ERROR_FULLY_EXPIRED'=> "Licenţa pentru SugarCRM a expirat de mai bine de 30 de zile şi trebuie actualizată. Doar administratorii se pot autentifica.",
	'ERROR_LICENSE_EXPIRED'=> "Licenţa pentru SugarCRM a expirat şi trebuie actualizată. Doar administratorii se pot autentifica.",
	'ERROR_LICENSE_VALIDATION'=> "Licenţa pentru SugarCRM trebuie validată. Doar administratorii se pot autentifica.",
	'ERROR_NO_RECORD' => 'Eroare de acces la înregistrare. Aceasta este ştearsă sau nu sunteţi autorizat să o accesaţi.',
	'LBL_DUP_MERGE'=>'Găseşte duplicate',
	// Ajax status strings
	'LBL_LOADING' => 'Încărcare ...',
	'LBL_SAVING_LAYOUT' => 'Salvare ...',
    'LBL_SAVED_LAYOUT' => 'Aranjarea în pagină s-a salvat.',
    'LBL_SAVED' => 'Salvat',
    'LBL_SAVING' => 'Salvare',
    'LBL_FAILED' => 'Eroare!',
    'LBL_DISPLAY_COLUMNS' => 'Afişază coloanele',
    'LBL_HIDE_COLUMNS' => 'Ascunde coloanele',
    'LBL_SEARCH_CRITERIA' => 'Criterii de căutare',
    'LBL_SAVED_VIEWS' => 'Vederi salvate',
    'LBL_PROCESSING_REQUEST'=>'Procesare ...',
    'LBL_REQUEST_PROCESSED'=>'Terminat',





    'LBL_MERGE_DUPLICATES'  => 'Suprascrie duplicate',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Căutări salvate',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Căutare pe baza formularului de mai sus',
    'LBL_DETAILVIEW'=>'Detalii', 
    'LBL_LISTVIEW'=>'Lista', 
    'LBL_EDITVIEW'=>'Editare',
    'LBL_SEARCHFORM'=>'Formulare de căutare',
    'LBL_SAVED_SEARCH_ERROR' => 'Daţi un nume acestei vederi.',

);
?>