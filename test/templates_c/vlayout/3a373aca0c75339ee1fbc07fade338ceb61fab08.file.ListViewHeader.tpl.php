<?php /* Smarty version Smarty-3.1.7, created on 2015-07-19 15:30:25
         compiled from "C:\wamp\www\vtigercrm\vtigercrm6.3\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1742055a7a7d416f336-17135873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a373aca0c75339ee1fbc07fade338ceb61fab08' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercrm\\vtigercrm6.3\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\ListViewHeader.tpl',
      1 => 1437319817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1742055a7a7d416f336-17135873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55a7a7d430ae2',
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'LISTVIEW_LINKS' => 0,
    'LISTVIEW_BASICACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a7a7d430ae2')) {function content_55a7a7d430ae2($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Groups'){?><div><?php echo vtranslate('Groups Desc',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='PickListDependency'){?><div><?php echo vtranslate('LBL_PICKLIST_DEPENDENCY_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Profiles'){?><div>Profiles provide you the fine grained access control to Ottocrat CRM. Profiles can be used to regulate, or completely disable user's access on modules, fields, and other actions (eg.Import).<ul> <li>With profiles you can set the user privileges to delete, create/edit or view data.</li><li>	Like <b><i>Sharing Access</i></b>, profiles also play vital role in ensuring security by limiting the activities on records.Please note that the *settings of the global privileges are always superior to the other privilege settings.</li<li>	Roles are based on profiles.One or more profiles can be linked to Roles.</li><li>	Ottocrat CRM comes with a set of pre-defined profiles(ex: 'Administrator') which you can use and change but not delete.</li></div><?php }?><div class="row-fluid"><span class="span8 btn-toolbar"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->key => $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = true;
?><button class="btn addButton" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:')===0){?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"' <?php }?>><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php } ?></span><span class="span4 btn-toolbar"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div><div class="clearfix"></div><div class="listViewContentDiv" id="listViewContents"><?php }} ?>