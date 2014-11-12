<?php
# Alert the user that this is not a valid access point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
        echo <<<EOT
			To install this Extension, put the following line in LocalSettings.php: require_once( "\$IP/extensions/tempothree/tempothree.php" );
EOT;
        exit( 1 );
}
 
$wgExtensionCredits[ 'specialpage' ][] = array(
        'path' => __FILE__,
        'name' => 'tempothree',
        'author' => 'Richir Outreach',
        'url' => 'http://www.reddit.com',
        'description' => 'amazing',
        'version' => '0.0.3',
);
 
$wgAutoloadClasses[ 'Specialtempothree' ] = __DIR__ . '/Specialtempothree.php'; # Location of the SpecialMyExtension class (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'tempothree' ] = __DIR__ . '/tempothree.i18n.php'; # Location of a messages file (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'TempothreeAlias' ] = __DIR__ . '/tempothree.alias.php'; # Location of an aliases file (Tell MediaWiki to load this file)
$wgSpecialPages[ 'Tempothree' ] = 'SpecialTempothree'; # Tell MediaWiki about the new special page and its class name
$wgSpecialPageGroups[ 'Tempothree' ] = 'other';

$wgResourceModules['Tempothree'] = array(
	'localBasePath'=>__DIR__,
	'styles'=>'/modules/tempostyles.css',
);