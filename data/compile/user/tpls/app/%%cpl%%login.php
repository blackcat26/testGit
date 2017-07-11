<?php $this->_compileInclude('header'); ?>
<body style="background-color:#fff;">
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main box" style="width:480px;">
		    <div style="margin:10px auto 105px;">
		        <div class="col-xs-12" style="margin:20px 30px 0px auto;background-color:#FFFFFF;border:1px solid #ccc;padding:60px 35px 50px;">
                    <form class="col-xs-12" method="post" action="index.php?user-app-login">
                        <h4 class="title" style="display:none;">用户登录</h4>
                        <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-user" style="font-size:16px;"></a></span>
                            <input class="form-control" name="args[username]" datatype="userName" needle="needle" msg="请您输入正确的用户名" placeholder="请输入用户名" style="height:44px;line-height:24px;font-size:16px;">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-lock" style="font-size:16px;"></a></span>
                            <input class="form-control" name="args[userpassword]" datatype="password" needle="needle" msg="请您输入正确的密码" placeholder="请输入密码" type="password" style="height:44px;line-height:24px;font-size:16px;">
                        </div>
                        <input type="hidden" value="1" name="userlogin"/>
                        <button type="submit" class="btn btn-primary btn-block" style="height:44px;line-height:32px;font-size:16px;margin-top:30px;">登录</button>
                        <a class="btn btn-default btn-block" href="index.php?user-app-register" style="height:44px;line-height:32px;font-size:16px;margin-top:10px;">注册</a>
                    </form>
                </div>
                <div style="clear:both;"></div>
            </div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>