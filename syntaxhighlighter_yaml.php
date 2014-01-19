<?php
/**
* Plugin Name: SyntaxHighlighter Evolved: Yaml Brush
* Description: Adds support for the Yaml language to the SyntaxHighlighter Evolved plugin.
* Author: Robert Hafner
* Version: 1.0.1
* Author URI: http://blog.tedivm.com/
* Plugin URI: https://github.com/tedivm/syntaxhighlighter_yaml
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_yaml_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_yaml_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_yaml_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-yaml', plugins_url( 'shBrushYaml.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_yaml_addlang( $brushes ) {
    $brushes['yaml'] = 'yaml';
    $brushes['yml'] = 'yaml';
 
    return $brushes;
}
 
?>
