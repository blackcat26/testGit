<?php $this->_compileInclude('header'); ?>
<body style="background-color:#fff;">
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
	    <div style="margin-top:35px;">
            <div class="main" style="border:1px solid #ccc;">
                <div class="col-xs-2" style="padding:0;margin-bottom:0px;">
                    <?php $this->_compileInclude('menu'); ?>
                </div>
                <div class="col-xs-10" id="datacontent" style="padding:0;margin:0;">
                    <div class="box itembox" style="padding:0;margin:0;border-left:1px solid #ccc;">
                        <h4 id="itembox_h4id" style="padding-left:1em;margin:0;border-bottom:1px solid #ccc;line-height:62px;"></h4>
                        <div style="padding:12px 38px 48px;min-height:526px;">
                            <div id="panel-344373" style="display:none;">
                                <form action="index.php?user-center-privatement&panel=344373" method="post" class="form-horizontal" style="padding:20px;">
                                    <fieldset>
                                        <?php $fid = 0;
 foreach($this->tpl_var['forms'] as $key => $form){ 
 $fid++; ?>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="<?php echo $form['id']; ?>"><?php echo $form['title']; ?>：</label>
                                            <div class="col-sm-10"><?php echo $form['html']; ?></div>
                                        </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button class="btn btn-primary" type="submit">提交</button>
                                                <input type="hidden" name="modifyuserinfo" value="1"/>
                                                <input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
                                                <?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>
                                                <input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
                                                <?php } ?>
                                            </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div id="panel-788885" style="display:none;">
                                <form action="index.php?user-center-privatement&panel=788885" method="post" class="form-horizontal" style="padding:10px 40px;">
                                    <fieldset>
                                        <table width="100%">
                                            <tr style="line-height:3em;">
                                                <td width="20%"><label for="oldpassowrd" class="control-label">旧密码：</label></td>
                                                <td><input id="oldpassowrd" type="password" name="oldpassword" needle="true" datatype="password" msg="密码字数必须在6位以上"/></td>
                                            </tr>
                                            <tr style="line-height:3em;">
                                                <td width="20%"><label for="passowrd1" class="control-label">新密码：</label></td>
                                                <td><input id="passowrd1" type="password" name="args[password]" needle="true" datatype="password" msg="密码字数必须在6位以上"/></td>
                                            </tr>
                                            <tr style="line-height:3em;">
                                                <td width="20%"><label for="oldpassowrd" class="control-label">重复密码：</label></td>
                                                <td><input id="password2" type="password" name="args[password2]" needle="true" equ="passowrd1" msg="前后两次密码必须一致且不能为空"/></td>
                                            </tr>
                                            <tr style="line-height:3em;">
                                                <td></td>
                                                <td>
                                                    <button class="btn btn-primary" type="submit">提交</button>
                                                    <input type="hidden" name="modifyuserpassword" value="1"/>
                                                    <input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
                                                    <?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>
                                                    <input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
	</div>
</div>
<script>
$('.form-horizontal :input').not("button").addClass("form-control").css("max-width","240px");
(function(){
    var key = window.location.search.match(/panel=(\w){6}/);
    key = key==null?'344373':key[0].slice(6);
    var h4value = key=='344373'?'个人资料':'修改密码';
    $('#itembox_h4id').append(h4value);
    $('#panel-' + key).show();
    key = null;
    h4value = null;
})();
</script>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>