<?php 

/**
 * @category   DeFine
 * @package    DeFine_Overlay
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author     Philipp Plappert <Email>
 */

class DeFine_Overlay_Block_Overlay extends Mage_Core_Block_Template
{
		
	/**
	 * Is overlay module enabled
	 * 
	 * @var bool
	 */
	protected $_enableOverlay = false;
	
	/**
	 * Check is overlay module enabled in global config
	 *  
	 * @return boolean
	 */			
	public function getEnableOverlay()
	{
		$status = Mage::getStoreConfig('overlay_options/general/status');
		if($status === '1'){
			$this->_enableOverlay= true;
		}		
		return $this->_enableOverlay;
	}
			
}