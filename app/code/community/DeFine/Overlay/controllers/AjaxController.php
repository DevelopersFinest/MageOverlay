<?php 
/**
 * @category   DeFine
 * @package    DeFine_Overlay
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author     Philipp Plappert <Email>
 */

class DeFine_Overlay_AjaxController extends Mage_Core_Controller_Front_Action
{
	/**
	 * HTML-content of the static block selected in global config
	 * 
	 * @var string/HTML
	 */	
	protected $_overlayContent;
	
	/**
	 * Get the HTML-content of static block selected in global config
	 * 
	 * Output string/HTML 
	 */
	public function getContentAction()
	{
				
		$blockId = Mage::getStoreConfig('overlay_options/general/content');
		
		if(!$blockId){
			$this->_overlayContent = " ";
		}else{
			$layout = $this->getLayout();
			$block = $layout->createBlock('cms/block')->setBlockId($blockId);
			$this->_overlayContent = $block->toHTML();				 
		}
		echo $this->_overlayContent;
	}
		
	
}
