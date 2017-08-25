<?php 
/**
 * Status Source Model
 * 
 * @category   DeFine
 * @package    DeFine_Overlay
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author     Philipp Plappert <Email>
 */
class DeFine_Overlay_Model_System_Config_Status
{
	public function toOptionArray()
	{
		return array(
				array('value'=>1, 'label'=>Mage::helper('overlay')->__('Enabled')),
				array('value'=>2, 'label'=>Mage::helper('overlay')->__('Disabled')),
				
		);
	}
}