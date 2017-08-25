<?php 
/**
 * Content Source Model
 * 
 * @category   DeFine
 * @package    DeFine_Overlay
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software Licence 3.0 (OSL-3.0)
 * @author     Philipp Plappert <Email>
 */
class DeFine_Overlay_Model_System_Config_Content
{
	public function toOptionArray()
	{
		$options = array(array('value' => '', 'label' => ''));
		
		$staticBlocks = Mage::getModel('cms/block')
			->getCollection();
		
			foreach ($staticBlocks as $staticBlock)
			{
				$options[] = array(
						'value' => $staticBlock['block_id'],
						'label' => $staticBlock['identifier'],
				);
			}
		return $options;
	}
}