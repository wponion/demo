<?php

require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/validation.php';
require_once __DIR__ . '/dependency.php';

if ( ! wponion_demo_dev() ) {
	require_once __DIR__ . '/full-accordion.php';
	require_once __DIR__ . '/full-fieldset.php';
	require_once __DIR__ . '/full-group.php';
}