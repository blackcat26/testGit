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
                        <h4 style="padding-left:1em;margin:0;border-bottom:1px solid #ccc;line-height:62px;">账户信息</h4>
                        <div style="padding:12px 38px 48px;min-height:526px;">
                            <table width="100%">
                                <tr>
                                    <td width="30%">
                                        <div class="thumbnail" style="width:80%;border:0;">
                                            <img style="max-width:240px;margin-top:30px;" alt="300x200" src="<?php if($this->tpl_var['_user']['photo']){ ?><?php echo $this->tpl_var['_user']['photo']; ?><?php } else { ?>app/exam/styles/image/paper.png<?php } ?>" />
                                        </div>
                                    </td>
                                    <td width="35%" style="padding:10px;">
                                        <h3><?php echo $this->tpl_var['_user']['username']; ?></h3>
                                        <p>注册日期：<?php echo date('Y-m-d',$this->tpl_var['_user']['userregtime']); ?></p>
                                        <p>注册IP：<?php echo $this->tpl_var['_user']['userregip']; ?></p>
                                        <p>您现有积分：<?php echo $this->tpl_var['_user']['usercoin']; ?></p>
                                        <p>&nbsp;</p>
                                        <p><a class="btn btn-primary" href="index.php?user-center-payfor">充值</a></p>
                                    </td>
                                    <td style="padding:10px;">
                                        <p>用户组：<?php echo $this->tpl_var['groups'][$this->tpl_var['_user']['usergroupid']]['groupname']; ?></p>
                                        <p>真实姓名：<?php echo $this->tpl_var['_user']['usertruename']; ?></p>
                                        <p>邮箱：<?php echo $this->tpl_var['_user']['useremail']; ?></p>
                                        <p>&nbsp;</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>