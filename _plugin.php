<?php
/*
Plugin Name: 	plugin-empty
Plugin URI: 	https://github.com/pinecone-dot-io/plugin-empty
Description: 	a little bit of structure for your wordpress plugin
Author: 		pinecone-dot-io
Text Domain:	plugin-empty
Domain Path:	/lang
Version:		0.0.2
Author URI: 	http://pinecone.io
*/

register_activation_hook( __FILE__, create_function("", '$ver = "5.3"; if( version_compare(phpversion(), $ver, "<") ) die( "This plugin requires PHP version $ver or greater be installed." );') );

require __DIR__.'/index.php';