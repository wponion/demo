<?php
$element = '<a href="#goo">' . __( 'My Element' ) . '</a>';
$e       = wponion_tooltip( array(
	'arrow'   => false,
	'element' => $element,
	'content' => __( 'ToolTip Content' ),
) );
$b       = wponion_inline_ajax( array(), $e->element() );


wpo_tooltip( __( 'Click To View Large Image' ), array(
	'arrow' => true,
), wponion_image_popup( 'https://i.ytimg.com/vi/HKu1J2xIS98/hqdefault.jpg', 'https://i.ytimg.com/vi/2LeOH9AGJQM/maxresdefault.jpg' ) );


$return           = array();
$faq              = \WPO\Field::create( 'faq' );
$faq['options']   = array();
$faq['options'][] = array(
	'heading' => 'So what is WPOnion , exactly?',
	'content' => 'WPOnion is a simple yet powerful framework that helps developers build custom meta boxes and custom fields in WordPress fast and easily.

The framework lets you define custom meta boxes and custom fields via arrays and handles everything behind the scene automatically. It has a wide range of field types, field settings and supports not only post meta but also term meta, user meta, comment meta, settings pages and custom tables.',
);
$faq['options'][] = array(
	'heading' => 'How To Install ?',
	'content' => $e . '
The preferred way to install this extension is through <a href="http://getcomposer.org/download/">Composer</a>.

To install **[wpo_tooltip theme="google" placement="bottom" content="Best Framework In The World"]WPOnion library[/wpo_tooltip]**, simply: `$ composer require wponion/wponion`

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

```
$ composer require wponion/wponion --prefer-source
```

You can also **clone the complete repository** with Git:

```
$ git clone https://github.com/wponion/wponion.git
```
',
);
$faq['options'][] = array(
	'tooltip' => true,
	'heading' => 'Are we alone in the universe?',
	'content' => 'Perhaps not. Astronomers have been scouring the universe for places where water worlds might have given rise to life, from Europa and Mars in our solar system to planets many light years away. Radio telescopes have been eavesdropping on the heavens and in 1977 a signal bearing the potential hallmarks of an alien message was heard. Astronomers are now able to scan the atmospheres of alien worlds for oxygen and water. The next few decades will be an exciting time to be an alien hunter with up to 60bn potentially habitable planets in our Milky Way alone.',
);

$return[] = $faq;

return $return;
