<?php
/*
 * Limb PHP Framework
 *
 * @link http://limb-project.com
 * @copyright  Copyright &copy; 2004-2009 BIT(http://bit-creative.com)
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 */

/**
 * @package web_app
 * @version $Id: setup.php 8131 2010-02-15 19:45:22Z conf $
 */
set_include_path(implode(PATH_SEPARATOR,
  array(
    dirname(__FILE__) . '/lib/',
    dirname(__FILE__),
    get_include_path()
  )
));

require_once('limb/core/common.inc.php');

if(file_exists(dirname(__FILE__) . '/setup.override.php'))
  require_once(dirname(__FILE__) . '/setup.override.php');

lmb_package_require('cms'); //lmb_package_require('web_app');

lmb_env_setor('LIMB_VAR_DIR', dirname(__FILE__) . '/var/');
lmb_env_setor('LIMB_APP_MODE' , 'devel');
lmb_env_set("LIMB_PASSW_SALT", 'f0ixnlcPIVtYjmR1WKBINO');
lmb_env_setor('PRODUCT_IMAGES_DIR', dirname(__FILE__) . '/www/images/');

lmb_require('src/model/*.class.php');

lmb_require('src/toolkit/ShopTools.class.php');
lmbToolkit::merge(new ShopTools());

//Подключим наиболее популярные файлы
lmb_require('limb/web_app/src/controller/lmbController.class.php');
lmb_require('limb/active_record/src/lmbActiveRecord.class.php');