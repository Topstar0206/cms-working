<?php
/* Smarty version 3.1.32, created on 2018-09-12 10:44:55
  from 'F:\XAMPP\htdocs\cms\ui\theme\default\leads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b992667988227_72376737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc3938c4b701bd0d59307f9b9edc7bdab4f12f36' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\cms\\ui\\theme\\default\\leads.tpl',
      1 => 1532317432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b992667988227_72376737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3577301785b99266797f277_11848646', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_3577301785b99266797f277_11848646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3577301785b99266797f277_11848646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                    <a href="#" class="btn btn-primary add_item waves-effect waves-light" id="add_item"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Lead'];?>
</a>
                    
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">


                    <div class="row">
                        <div class="col-md-3 col-sm-6">

                            <form>

                                <div class="form-group">
                                    <label for="filter_first_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['First Name'];?>
</label>
                                    <input type="text" id="filter_first_name" name="filter_first_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="filter_middle_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Middle Name'];?>
</label>
                                    <input type="text" id="filter_middle_name" name="filter_middle_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="filter_last_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Name'];?>
</label>
                                    <input type="text" id="filter_last_name" name="filter_last_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="filter_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                    <input type="email" id="filter_email" name="filter_email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="filter_salutation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Salutation'];?>
</label>
                                    <input type="text" id="filter_salutation" name="filter_salutation" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="filter_company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
                                    <input type="text" id="filter_company" name="filter_company" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="filter_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                    <input type="text" id="filter_phone" name="filter_phone" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="filter_status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>
                                    <input type="text" id="filter_status" name="filter_status" class="form-control">
                                </div>








                                <button type="submit" id="ib_filter" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</button>

                                <br>
                            </form>


                        </div>
                        <div class="col-md-9 col-sm-6 ib_right_panel">


                            <div class="table-responsive" id="ib_data_panel">


                                <table class="table table-bordered table-hover display" id="ib_dt">
                                    <thead>
                                    <tr class="heading">
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['ID'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</th>

                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>

                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</th>

                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                    </tr>
                                    </thead>




                                </table>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary waves-effect waves-light add_item" href="#">
            <i class="fa fa-plus"></i>
        </a>
    </div>

<?php
}
}
/* {/block "content"} */
}
