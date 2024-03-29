<?php
/**
 * This file is part of the FIREGENTO project.
 *
 * FireGento_GermanSetup is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_Pdf
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2012 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     0.1.0
 */
/**
 * Dropdown for Logo Position
 *
 * @category  FireGento
 * @package   FireGento_Pdf
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2012 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     0.1.0
 */

class FireGento_Pdf_Model_System_Config_Source_Dropdown_Values
{

    /**
     * Dropdown Values for Logo Position
     *
     * @return array Dropdown Values
     */
    public function toOptionArray()
    {
		$helper = Mage::helper('firegento_pdf');
		
        return array(
            array(
                'value' => 'left',
                'label' => $helper->__('Left'),
            ),
            array(
                'value' => 'center',
                'label' => $helper->__('Center'),
            ),
			array(
                'value' => 'right',
                'label' => $helper->__('Right'),
            ),
        );
    }
}