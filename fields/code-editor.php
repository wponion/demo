<?php
$cm_themes = array(
	'default',
	'3024-day',
	'3024-night',
	'abcdef',
	'ambiance',
	'base16-dark',
	'base16-light',
	'bespin',
	'blackboard',
	'cobalt',
	'colorforth',
	'darcula',
	'dracula',
	'duotone-dark',
	'duotone-light',
	'eclipse',
	'elegant',
	'erlang-dark',
	'gruvbox-dark',
	'hopscotch',
	'icecoder',
	'idea',
	'isotope',
	'lesser-dark',
	'liquibyte',
	'lucario',
	'material',
	'mbo',
	'mdn-like',
	'midnight',
	'monokai',
	'neat',
	'neo',
	'night',
	'nord',
	'oceanic-next',
	'panda-syntax',
	'paraiso-dark',
	'paraiso-light',
	'pastel-on-dark',
	'railscasts',
	'rubyblue',
	'seti',
	'shadowfox',
	'solarized dark',
	'solarized light',
	'the-matrix',
	'tomorrow-night-bright',
	'tomorrow-night-eighties',
	'ttcn',
	'twilight',
	'vibrant-ink',
	'xq-dark',
	'xq-light',
	'yeti',
	'yonce',
	'zenburn',
);
$return    = array();

$return[] = wpo_field( 'code_editor', 'code_editor_1', __( 'Code Editor' ) );
$return[] = wpo_field( 'code_editor', 'code_editor_2', __( 'Code Editor' ), array(
	'settings' => array(
		'theme' => 'shadowfox',
		'mode'  => 'htmlmixed',
	),
	'default'  => '<div class="wrapper">
  <h1>Hello world</h1>
  <p>Lorem <strong>ipsum</strong> dollar.</p>
</div>',
) )->desc( '**HTML Editor** Using: theme: `shadowfox` and mode: `htmlmixed`' );

$return[] = wpo_field( 'code_editor', 'code_editor_3', __( 'Code Editor' ), array(
	'settings' => array(
		'theme' => 'dracula',
		'mode'  => 'javascript',
	),
	'default'  => ';(function( $, window, document, undefined ) {
  "use strict";

  $(document).ready( function() {

    // do stuff

  });

})( jQuery, window, document );',
) )->desc( '**JS Editor** Using: theme: `dracula` and mode: `javascript`' );

$return[] = wpo_field( 'code_editor', 'code_editor_4', array(
	'settings' => array(
		'theme' => 'mbo',
		'mode'  => 'css',
	),
	'default'  => '.wrapper {
  font-family: "Open Sans";
  font-size: 13px;
  width: 250px;
  height: 100px;
  color: #fff;
  background-color: #555;
}',
) )->before( '<p>**CSS Editor** Using: theme: `dracula` and mode: `javascript`</p>' );


$cm_theme = rand( 0, count( $cm_themes ) - 1 );
$cm_theme = ( isset( $cm_themes[ $cm_theme ] ) ) ? $cm_themes[ $cm_theme ] : $cm_themes[0];
$return[] = wpo_field( 'code_editor', 'code_editor_5', __( 'Random Editor Themes' ), array(
	'settings' => array(
		'theme' => $cm_theme,
	),
	'default'  => '<div class="wrapper">
  <h1>Hello world</h1>
  <p>Lorem <strong>ipsum</strong> dollar.</p>
</div>',
) )->desc( 'Used Theme `' . $cm_theme . '`' );

return $return;
