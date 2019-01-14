<?php

return array(
	array(
		'type'       => 'change_log',
		'change_log' => array(
			'0.0.7 <span class="badge badge-warning">Pre Release</span>' => array(
				'date'    => '25-08-2018',
				'added'   => array(
					'Admin Bar',
					'Custom Meta box Support',
					'WP Nav Menu',
					'Dashboard , Admin Page & Settings Modules now supports WP Network (#6)',
					'Composer Support',
					'Field Compile Time Recorder',
					'Added Option To Set Dynamic Heading in Group Field',
				),
				'changed' => array(
					'Updated Taxonomy & User Profile Fields To Work with Custom Meta boxes',
					'Updated Fresh Theme To Work With WPOnion Modules API',
					'Accordion / Group / Field set Not saving properly',
					'Customize able Group / KeyValue / Cloner error Msg (#11)',
					'<code>option_value</code> to <code>option_label</code> in query_args',
				),
				'removed' => array(
					'PrettyCheckbox',
					'AnimateCSS',
					'ValueAPI And its functions',
				),
			),
			'0.2'                                                        => array(
				'date'    => '30-05-2017',
				'removed' => array(
					'CSS : FontAwesome',
					'CSS : TypIcons',
					'CSS : BoxIcons',
					'',
					'JS : OverLayScrollBars',
					'JS : InputToArray',
					'JS : Bootstrap-MaxLenght',
					'JS : jQuery.Actual',
				),
				'changed' => array(
					'2 New functions in Javascript Fields API (<code>js_id</code>,<code>save_arg</code>)',
					'PHP Array : GoogleFonts',
					'PHP Array : AnimateCSS',
					'PHP Array : Countries',
					'PHP Array : Continents',
					'PHP Array : States',
					'PHP Array : Currency & Symbol',
					'PHP Array : Materiel Colors',
					'PHP Lib : Markdown Parser',
					'WPOnion Now works on <code>after_setup_theme</code> instead of init hook',
					'Migrated All JSON Files into PHP Array and saved them in <code>data/</code> folder to make it bit faster',
					'Icon Field Now has option to enable / disable ceratin icon libs',
				),
				'added'   => array(
					'JS Libs : Flatpickr',
					'JS Libs : jquery-interdependencies',
				),
			),
			'0.1'                                                        => array(
				'date'  => '29-05-2017',
				'added' => array(
					'First Release',
				),
			),
		),
	),
);
