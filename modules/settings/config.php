<?php
	
	/*
	* Copyright 2015 Hamilton City School District	
	* 		
	* This program is free software: you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation, either version 3 of the License, or
    * (at your option) any later version.
	* 
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    * GNU General Public License for more details.
	* 
    * You should have received a copy of the GNU General Public License
    * along with this program.  If not, see <http://www.gnu.org/licenses/>.
    */
    
    //Required configuration files
	require(dirname(__FILE__) . '/../../configuration.php'); 
	require_once(dirname(__FILE__) . '/../../core/abre_verification.php'); 
	require_once(dirname(__FILE__) . '/../../core/abre_functions.php'); 
	require(dirname(__FILE__) . '/../../core/abre_dbconnect.php');
	
	$pageview=1;
	$drawerhidden=1;
	$pageorder=1000;

?>
	

<script>

//Page locations
routie({
    'settings': function(name) {
	    $( "#navigation_top" ).hide();
	    $( "#content_holder" ).hide();
	    $( "#loader" ).show();
	    $( "#titletext" ).text("Settings");
	    document.title = '<?php echo sitesettings("sitetitle"); ?> - Settings';
		$( "#content_holder" ).load( 'modules/settings/settings.php', function() { init_page(); });
    },
    'modules': function(name) {
	    $( "#navigation_top" ).hide();
	    $( "#content_holder" ).hide();
	    $( "#loader" ).show();
	    $( "#titletext" ).text("Settings");
	    document.title = '<?php echo sitesettings("sitetitle"); ?> - Settings';
		$( "#content_holder" ).load( 'modules/settings/modules.php', function() { init_page(); });
    }
});

</script>