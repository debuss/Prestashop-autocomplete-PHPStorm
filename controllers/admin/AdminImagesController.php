<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/**
 * @property ImageType $object
 */
class AdminImagesController extends AdminController
{

    protected $start_time = 0;
    protected $max_execution_time = 7200;
    protected $display_move;

    public function __construct()
    {
    }

    public static function printEntityActiveIcon($value, $object)
    {
    }

    public function postProcess()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function initContent()
    {
    }

    /**
     * Init display for the thumbnails regeneration block
     */
    public function initRegenerate()
    {
    }

    /**
     * Init display for move images block
     */
    public function initMoveImages()
    {
    }

    protected function _regenerateThumbnails($type = 'all', $deleteOldImages = false)
    {
    }

    /* Hook watermark optimization */

    /**
     * Delete resized image then regenerate new one with updated settings
     *
     * @param string $dir
     * @param array $type
     * @param bool $product
     * @return bool
     */
    protected function _deleteOldImages($dir, $type, $product = false)
    {
    }

    /**
     * Regenerate images
     *
     * @param $dir
     * @param $type
     * @param bool $productsImages
     * @return bool|string
     */
    protected function _regenerateNewImages($dir, $type, $productsImages = false)
    {
    }

    protected function _regenerateWatermark($dir, $type = null)
    {
    }

    /**
     * Regenerate no-pictures images
     *
     * @param $dir
     * @param $type
     * @param $languages
     * @return bool
     */
    protected function _regenerateNoPictureImages($dir, $type, $languages)
    {
    }

    /**
     * Move product images to the new filesystem
     */
    protected function _moveImagesToNewFileSystem()
    {
    }

    protected function _childValidation()
    {
    }
}
