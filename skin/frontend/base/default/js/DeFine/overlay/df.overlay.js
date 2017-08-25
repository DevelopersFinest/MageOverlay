/**
 * @category   DeFine
 * @package    DeFine_Overlay
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author     Philipp Plappert <Email>
 */

var $j = jQuery.noConflict();
var baseUrl = $j("#baseUrl").val();


$j(document).ready(function(){	
	 $j.ajax({
		 url: baseUrl+'overlay/ajax/getContent', 
		 success: function(result){ 
			 $j('#overlay').html(result).modal();
			 },	
	 	 error: function(xhr){
	 		 //custom error handling
	 		 }
	 });
	 
	 return false;
});
