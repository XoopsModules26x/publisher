<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Publisher
 *
 * @copyright    XOOPS Project (http://xoops.org)
 * @license      GNU GPL V2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package      Publisher
 * @since        1.0
 * @author       Mage, Mamba
 */

include_once __DIR__ . '/admin_header.php';

$xoops = Xoops::getInstance();
$xoops->header();

$indexAdmin = new \Xoops\Module\Admin();
$indexAdmin->displayNavigation('index.php');

$indexAdmin->addConfigBoxLine('thumbnail', 'service');
$indexAdmin->displayIndex();


$xoops->footer();
