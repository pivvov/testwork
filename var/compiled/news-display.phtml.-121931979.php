<?php /* This file is generated from C:\Users\IPivnenko\Documents\NetBeansProjects\crud_limb/template/news/display.phtml*/?><?php
if(!class_exists('MacroTemplateExecutor9c3bbebffce10630325f075f5f96f295', false)){
require_once('limb/macro/src/compiler/lmbMacroTemplateExecutor.class.php');
require_once('limb/macro/src/tags/form/lmbMacroFormWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroInputWidget.class.php');
require_once('limb/macro/src/tags/form/lmbMacroTextAreaWidget.class.php');
class MacroTemplateExecutor9c3bbebffce10630325f075f5f96f295 extends lmbMacroTemplateExecutor {

function _init() {
$this->form_news_form = new lmbMacroFormWidget('news_form');
$this->form_news_form->setAttributes(array (
  'id' => 'news_form',
  'name' => 'news_form',
  'method' => 'post',
));
$this->input_id001 = new lmbMacroInputWidget('title');
$this->input_id001->setAttributes(array (
  'name' => 'title',
  'type' => 'text',
  'size' => '60',
  'title' => 'Title',
));
$this->input_id001->setForm($this->form_news_form);
$this->form_news_form->addChild($this->input_id001);
$this->input_id002 = new lmbMacroInputWidget('date');
$this->input_id002->setAttributes(array (
  'name' => 'date',
  'type' => 'text',
  'size' => '15',
  'title' => 'Date',
));
$this->input_id002->setForm($this->form_news_form);
$this->form_news_form->addChild($this->input_id002);
$this->textarea_id003 = new lmbMacroTextAreaWidget('annotation');
$this->textarea_id003->setAttributes(array (
  'name' => 'annotation',
  'rows' => '2',
  'cols' => '40',
  'title' => 'Annotation',
));
$this->textarea_id003->setForm($this->form_news_form);
$this->form_news_form->addChild($this->textarea_id003);
$this->textarea_id004 = new lmbMacroTextAreaWidget('content');
$this->textarea_id004->setAttributes(array (
  'name' => 'content',
  'rows' => '5',
  'cols' => '40',
));
$this->textarea_id004->setForm($this->form_news_form);
$this->form_news_form->addChild($this->textarea_id004);
$this->input_id005 = new lmbMacroFormElementWidget('id001');
$this->input_id005->setAttributes(array (
  'type' => 'submit',
  'value' => 'Create',
  'runtime_id' => 'id001',
));
$this->input_id005->setForm($this->form_news_form);
$this->form_news_form->addChild($this->input_id005);

}
function render($args = array()) {
if($args) extract($args);
$this->_init();
 ?><!doctype html>
<html>
    <head>
        <title>Limb3 tutorial</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="/css/Header.css" />
        <link rel="stylesheet" type="text/css" href="/css/Menu.css" />
        <link rel="stylesheet" type="text/css" href="/css/Footer.css" />
        <link rel="stylesheet" type="text/css" href="/css/Style.css" />        
    </head>
    <body bgcolor="#FFFFFF" text="#000000" >

        <h1>Create news</h1>

            <?php if(isset($this->form_news_form_datasource))$this->form_news_form->setDatasource($this->form_news_form_datasource);
if(isset($this->form_news_form_error_list))$this->form_news_form->setErrorList($this->form_news_form_error_list);
 ?><form<?php $this->form_news_form->renderAttributes(); ?>>
                <table class="contentTable">
                    <tr>
                        <td class='tdCaption'>
                            Title:
                        </td>                    
                        <td>
                            <input<?php $this->input_id001->renderAttributes(); ?> />
                        </td>                        
                    </tr>
                    <tr>
                        <td class='tdCaption'>
                            Date:
                        </td>
                        <td>
                            <input<?php $this->input_id002->renderAttributes(); ?> />
                        </td>
                    </tr>
                    <tr>
                        <td class='tdCaption'>
                            Annotation:
                        </td>
                        <td>
                            <textarea<?php $this->textarea_id003->renderAttributes(); ?>><?php echo htmlspecialchars($this->textarea_id003->getValue(), ENT_QUOTES);
 ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class='tdCaption'>
                            Content:
                        </td>
                        <td>
                            <textarea<?php $this->textarea_id004->renderAttributes(); ?>><?php echo htmlspecialchars($this->textarea_id004->getValue(), ENT_QUOTES);
 ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2' class='tdCaption'>
                            <input<?php $this->input_id005->renderAttributes(); ?> />
                        </td>
                    </tr>
                </table>
            </form>

    </body>
</html>
<?php 
}

}
}
$macro_executor_class='MacroTemplateExecutor9c3bbebffce10630325f075f5f96f295';