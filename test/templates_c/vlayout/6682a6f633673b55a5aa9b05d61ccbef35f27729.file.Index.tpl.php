<?php /* Smarty version Smarty-3.1.7, created on 2015-07-19 15:30:00
         compiled from "C:\wamp\www\vtigercrm\vtigercrm6.3\includes\runtime/../../layouts/vlayout\modules\Settings\Roles\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47355a7ac3cbc7f54-89266557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6682a6f633673b55a5aa9b05d61ccbef35f27729' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercrm\\vtigercrm6.3\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Roles\\Index.tpl',
      1 => 1437069764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47355a7ac3cbc7f54-89266557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55a7ac3cd4ef9',
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'ROOT_ROLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a7ac3cd4ef9')) {function content_55a7ac3cd4ef9($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr>Roles represent the hierarchical position of the individual users (employees) of your organization.<ul><li>It plays a vital role in <a id="globalSearch"><b>controlling record access</b></a>.When sharing access for a module is set to private, a user's role in the role hierarchy determines what records he/she can access.</li><li>A user can only view own records (i.e., records assigned to that user), and records assigned to users with a lower role.</li><li>Role holds a position in a company (ex:sales manager) and can be assigned to multiple users of same functionality.</li><li>A role can also be assigned to multiple profiles.This can come handy if same person holds two different positions.For instance, 'Rahul' is a Sales manager, but he also participates in support operations; therefore, you could create a role called 'sales and support manager' and assign both support and sales profiles to him.</li><li>Each role also specifies who they report to, creating a hierarchy.</li></ul><div class="clearfix treeView"><ul><li data-role="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getId();?>
"><div class="toolbar-handle"><a href="javascript:;" class="btn btn-inverse draggable droppable"><?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getName();?>
</a><div class="toolbar" title="<?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-action="modal"><span class="icon-plus-sign"></span></a></div></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROOT_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li></ul></div></div><?php }} ?>