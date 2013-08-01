<?php /* This file is generated from C:\Users\IPivnenko\Documents\NetBeansProjects\crud_limb/lib//limb/cms/template/admin_text_block/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor57385b96ddc7b0713564e13fe4743846', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/i18n/src/charset/driver.inc.php');
require_once('limb/core/src/lmbArrayHelper.class.php');
class MacroTemplateExecutor57385b96ddc7b0713564e13fe4743846 extends lmbMacroTemplateExecutor {
function render($args = array()) {
if($args) extract($args);
$this->_init();
$this->__staticInclude1('admin_page_layout.phtml', 'admin_page_layout.phtml'); ?>

<?php 
}

function __staticInclude1($file,$file) {
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Powered by LIMB | http://www.limb-project.com/ -->
<!-- Designed by BIT | http://www.bit-creative.com/ -->
<?php  $this->static_files_version = lmb_env_get('CMS_STATIC_FILES_VERSION'); ?>
<html>
<head>
  <title><?php 
    echo lmb_i18n('Control panel','cms');
         ?></title>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <!--[if IE]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/shared/cms/styles/cp_ie6.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" /><![endif]-->
  <link rel="stylesheet" type="text/css" href="/shared/cms/styles/thickbox.css?<?php echo htmlspecialchars($this->static_files_version,3); ?>" />
  <?php if(isset($this->__slot_handlers_header_zone)) {foreach($this->__slot_handlers_header_zone as $__slot_handler_header_zone) {call_user_func_array($__slot_handler_header_zone, array(array()));}}$this->__slotHandlerdf29ffdb335a7ed9ebde86cee867142b(array()); ?>

  <style type="text/css">
    <?php if(isset($this->__slot_handlers_css_zone)) {foreach($this->__slot_handlers_css_zone as $__slot_handler_css_zone) {call_user_func_array($__slot_handler_css_zone, array(array()));}}$this->__slotHandler047bad6db46df1afb97318cc78723738(array()); ?>

  </style>
</head>
<body>
  <div id="wrapper">

    <?php $this->__staticInclude2('_admin/notify_zone.phtml'); ?>


    <div id='admin_panel'>
      <a href="/admin"><img src="/shared/cms/images/logo.limb.png"  alt='LIMB' id='logo_project'/></a>
      <ul id='user_data'>
        <li><?php $BH='';
$BI = $this->toolkit;
if((is_array($BI) || ($BI instanceof ArrayAccess)) && isset($BI['cms_user'])) { $BH = $BI['cms_user'];
if((is_array($BH) || ($BH instanceof ArrayAccess)) && isset($BH['login'])) { $BH = $BH['login'];
}else{ $BH = '';}
}else{ $BH = '';}
echo htmlspecialchars($BH,3); ?> [ <?php $BJ='';
$BK = $this->toolkit;
if((is_array($BK) || ($BK instanceof ArrayAccess)) && isset($BK['cms_user'])) { $BJ = $BK['cms_user'];
if((is_array($BJ) || ($BJ instanceof ArrayAccess)) && isset($BJ['name'])) { $BJ = $BJ['name'];
}else{ $BJ = '';}
}else{ $BJ = '';}
echo htmlspecialchars($BJ,3); ?> ]</li>
        <li><a href='/cms_user/logout' class='logout'><?php 
    echo lmb_i18n('Exit','cms');
         ?></a></li>
      </ul>
    </div>

    <div id='main_col'>
      <div id="main_col_content">
        <?php if(isset($this->__slot_handlers_content_zone)) {foreach($this->__slot_handlers_content_zone as $__slot_handler_content_zone) {call_user_func_array($__slot_handler_content_zone, array(array()));}}$this->__slotHandler5f4afce164840fc16a60d408b6789784(array()); ?>

      </div>
    </div>

    <div id='sidebar'>
      <?php
        lmb_require('limb/cms/src/fetcher/lmbCmsAdminNavigationFetcher.class.php');
        $this->navigation=new lmbCmsAdminNavigationFetcher();
        $this->navigation=$this->navigation->fetch();
      ?>
      <dl id='main_menu'>
      <?php $CO = 0;$CQ = $this->navigation;

if(!is_array($CQ) && !($CQ instanceof Iterator) && !($CQ instanceof IteratorAggregate)) {
$CQ = array();}
$CP = $CQ;
foreach($CP as $item) {if($CO == 0) { ?>

        <?php } ?>

        <dt class='<?php $CS='';
$CT = $item;
if((is_array($CT) || ($CT instanceof ArrayAccess)) && isset($CT['id'])) { $CS = $CT['id'];
}else{ $CS = '';}
echo htmlspecialchars($CS,3); ?>'><img src='<?php $CU='';
$CV = $item;
if((is_array($CV) || ($CV instanceof ArrayAccess)) && isset($CV['icon'])) { $CU = $CV['icon'];
}else{ $CU = '';}
echo htmlspecialchars($CU,3); ?>'/> <?php $CW='';
$CX = $item;
if((is_array($CX) || ($CX instanceof ArrayAccess)) && isset($CX['title'])) { $CW = $CX['title'];
}else{ $CW = '';}
echo htmlspecialchars($CW,3); ?> </dt>
        <dd>
          <?php $CY='';
$CZ = $item;
if((is_array($CZ) || ($CZ instanceof ArrayAccess)) && isset($CZ['children'])) { $CY = $CZ['children'];
}else{ $CY = '';}
$DC = 0;$DE = $CY;

if(!is_array($DE) && !($DE instanceof Iterator) && !($DE instanceof IteratorAggregate)) {
$DE = array();}
$DD = $DE;
foreach($DD as $sub_item) {if($DC == 0) { ?>

            <ul>
              <?php } ?>

              <li>
                <img src='<?php $DG='';
$DH = $sub_item;
if((is_array($DH) || ($DH instanceof ArrayAccess)) && isset($DH['icon'])) { $DG = $DH['icon'];
}else{ $DG = '';}
echo htmlspecialchars($DG,3); ?>'/> <a href='<?php $DI='';
$DJ = $sub_item;
if((is_array($DJ) || ($DJ instanceof ArrayAccess)) && isset($DJ['url'])) { $DI = $DJ['url'];
}else{ $DI = '';}
echo htmlspecialchars($DI,3); ?>'><?php $DK='';
$DL = $sub_item;
if((is_array($DL) || ($DL instanceof ArrayAccess)) && isset($DL['title'])) { $DK = $DL['title'];
}else{ $DK = '';}
echo htmlspecialchars($DK,3); ?></a>
              </li><?php $DC++;}if($DC > 0) { ?>

            </ul>
          <?php } ?>

        </dd>
        <?php $CO++;}if($CO > 0) { ?>

      <?php } ?>

      </dl>
      <?php if(isset($this->__slot_handlers_context_help)) {foreach($this->__slot_handlers_context_help as $__slot_handler_context_help) {call_user_func_array($__slot_handler_context_help, array(array()));}}$this->__slotHandlera1f16c02eb113f371620d72d18c344f8(array()); ?>

    </div>

  </div>

  <script src="<?php  echo lmb_env_get('JQUERY_FILE_URL'); ?>?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/url.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/flash.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/window.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/forms.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/js/js/limb/form_elements.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/tabs.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/auto_tabs.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/thickbox.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <script src="/shared/cms/js/cp.js?<?php echo htmlspecialchars($this->static_files_version,3); ?>"></script>
  <?php if(isset($this->__slot_handlers_js_include)) {foreach($this->__slot_handlers_js_include as $__slot_handler_js_include) {call_user_func_array($__slot_handler_js_include, array(array()));}}$this->__slotHandlerfb169da88d322600b86ba512f8190977(array()); ?>


  <script type="text/javascript">
    <?php if(isset($this->__slot_handlers_js)) {foreach($this->__slot_handlers_js as $__slot_handler_js) {call_user_func_array($__slot_handler_js, array(array()));}}$this->__slotHandler905c3ee65fd2c5171025ed694ef1ce66(array()); ?>


    jQuery(window).ready(function()
    {
      <?php if(isset($this->__slot_handlers_js_ready)) {foreach($this->__slot_handlers_js_ready as $__slot_handler_js_ready) {call_user_func_array($__slot_handler_js_ready, array(array()));}}$this->__slotHandler47e3c7393efa3eb5899c4369918bdb77(array()); ?>


      thickboxInit();

      function thickboxInit()
      {
        jQuery("a.thickbox").each(function()
        {
          if(this.href.indexOf('TB_iframe') > 0)
            return;

          var sep = (this.href.indexOf('?') > 0) ? '&' : '?';
          this.href = this.href + sep + 'TB_iframe=true&width=640&height=480';
        });

        tb_init('a.thickbox');                                    //pass where to apply thickbox
        imgLoader = new Image();                                  // preload image
        imgLoader.src = "/shared/cms/images/icons/loading.gif";
      }
    });
  </script>

</body>
</html>


  

  
<?php 
}

function __slotHandlerdf29ffdb335a7ed9ebde86cee867142b($I= array()) {
if($I) extract($I);
}

function __slotHandler047bad6db46df1afb97318cc78723738($J= array()) {
if($J) extract($J); ?>

    td.status{text-align:center;}
  <?php 
}

function __staticInclude2($file) {
 ?>


<?php 
  $flashbox = $this->toolkit->getFlashBox();
  if($flashbox->hasErrors() || $flashbox->hasMessages()){ ?>
    <div id="flashbox" class="flashbox">
      <ul>
        <?php $K='';
$L = $flashbox;
$K = $L->getErrors();
$this->_template923e52a94a080b0a2fdad1302b8aae6e(array('template' => 'flashbox','messages' => $K,'box_class' => 'error',)); ?>

        <?php $V='';
$W = $flashbox;
$V = $W->getMessages();
$this->_templateed592764fd9bc7dbb52de05b83a5b6be(array('template' => 'flashbox','messages' => $V,'box_class' => 'message',)); ?>

      </ul>
      <a href="javascipt:void(0)" href="javascript:void(0)" class='close' onclick="this.parentNode.style.display = 'none'; return false;">
        <?php 
    echo lmb_i18n('Close','cms');
         ?>

      </a>
    </div>
    <?php 
    $flashbox->reset();
   }
?><?php 
}

function _template923e52a94a080b0a2fdad1302b8aae6e($M= array()) {
if($M) extract($M); ?>

  <?php $P = 0;$R = $messages;

if(!is_array($R) && !($R instanceof Iterator) && !($R instanceof IteratorAggregate)) {
$R = array();}
$Q = $R;
foreach($Q as $item) {if($P == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $P++;}if($P > 0) { ?>

  <?php } ?>

<?php 
}

function _templateed592764fd9bc7dbb52de05b83a5b6be($X= array()) {
if($X) extract($X); ?>

  <?php $BB = 0;$BD = $messages;

if(!is_array($BD) && !($BD instanceof Iterator) && !($BD instanceof IteratorAggregate)) {
$BD = array();}
$BC = $BD;
foreach($BC as $item) {if($BB == 0) { ?>

    <?php } ?>

      <li><?php echo htmlspecialchars($item,3); ?></li>
    <?php $BB++;}if($BB > 0) { ?>

  <?php } ?>

<?php 
}

function __slotHandler5f4afce164840fc16a60d408b6789784($BL= array()) {
if($BL) extract($BL); ?>


    <div id="header">
      <h1>Текстовые блоки</h1>
    </div>

    <div id="body">

      <?php $BQ = 0;$BS = $this->blocks;

if(!is_array($BS) && !($BS instanceof Iterator) && !($BS instanceof IteratorAggregate)) {
$BS = array();}
$BR = $BS;
foreach($BR as $item) {$parity = (( ($BQ + 1) % 2) ? "odd" : "even");if($BQ == 0) { ?>


        <?php $this->__staticInclude3('_admin_object/actions.phtml'); ?>


        <div class="list">
          <table>
            <tr>
              <th>Статус</th>
              <th width="20%">Заголовок</th>
              <th width="80%">Содержимое</th>
              <th>Действия</th>
            </tr>
            <?php } ?>

            <tr class='<?php echo htmlspecialchars($parity,3); ?>'>
              <td class="status">
                <?php  if ($item['exists']) { ?>
                  <img src='/shared/cms/images/icons/flag_green.png' alt="есть" title="Используется установленное пользователем значение"/>
                <?php  } else { ?>
                  <img src='/shared/cms/images/icons/flag_red.png' alt="нет" title="Используется значение по-умлочанию"/>
                <?php  } ?>
              </td>
              <td><?php $BW='';
$BX = $item;
if((is_array($BX) || ($BX instanceof ArrayAccess)) && isset($BX['title'])) { $BW = $BX['title'];
}else{ $BW = '';}
echo htmlspecialchars($BW,3); ?></td>
              <td><b>ID</b>: <?php $BY='';
$BZ = $item;
if((is_array($BZ) || ($BZ instanceof ArrayAccess)) && isset($BZ['identifier'])) { $BY = $BZ['identifier'];
}else{ $BY = '';}
echo htmlspecialchars($BY,3); ?><br/>
              <b>Текст</b>: <?php $CA='';
$CB = $item;
if((is_array($CB) || ($CB instanceof ArrayAccess)) && isset($CB['content'])) { $CA = $CB['content'];
}else{ $CA = '';}
echo lmb_substr(strip_tags($CA),0,'150'); ?> ...
              </td>
              <td class='actions'>
                <a href='<?php $CC='';
$CD = $item;
if((is_array($CD) || ($CD instanceof ArrayAccess)) && isset($CD['identifier'])) { $CC = $CD['identifier'];
}else{ $CC = '';}
$CF = array();
$CE = lmbArrayHelper :: explode(',',':', sprintf('action:preview,id:%s',$CC));
foreach($CE as $key => $value) $CF[trim($key)] = trim($value);
$CG = false;
echo lmbToolkit :: instance()->getRoutesUrl($CF, '', $CG);
 ?>' title="Предварительный просмотр" class="thickbox"><img src='/shared/cms/images/icons/eye.png' alt="Предпросмотр"/></a>                <a href='<?php $CH='';
$CI = $item;
if((is_array($CI) || ($CI instanceof ArrayAccess)) && isset($CI['identifier'])) { $CH = $CI['identifier'];
}else{ $CH = '';}
$CK = array();
$CJ = lmbArrayHelper :: explode(',',':', sprintf('action:edit,id:%s',$CH));
foreach($CJ as $key => $value) $CK[trim($key)] = trim($value);
$CL = false;
echo lmbToolkit :: instance()->getRoutesUrl($CK, '', $CL);
 ?>' title="Редактирование" class="thickbox"><img src='/shared/cms/images/icons/layout_edit.png' alt="Редактирование"/></a>
              </td>
              </tr>
            <?php $BQ++;}if($BQ > 0) { ?>

            
          </table>
        </div>

      <?php }if($BQ == 0) { ?>

              <div class="empty_list">Текстовые блоки отсутствуют</div>
            <?php } ?>


    </div>

  <?php 
}

function __staticInclude3($file) {
 ?>








<?php 
}

function __slotHandlera1f16c02eb113f371620d72d18c344f8($DM= array()) {
if($DM) extract($DM);
}

function __slotHandlerfb169da88d322600b86ba512f8190977($EJ= array()) {
if($EJ) extract($EJ);
}

function __slotHandler905c3ee65fd2c5171025ed694ef1ce66($EK= array()) {
if($EK) extract($EK);
}

function __slotHandler47e3c7393efa3eb5899c4369918bdb77($EL= array()) {
if($EL) extract($EL);
}

}
}
$macro_executor_class='MacroTemplateExecutor57385b96ddc7b0713564e13fe4743846';