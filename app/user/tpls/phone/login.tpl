        <header class="container-fluid" style="border-bottom:1px solid #ccc;">
            <!--
            <h5 class="text-center">
                <em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
                用户登录
                <em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
            </h5>
            -->
        </header>
		<div class="container-fluid">
			<div style="width:100%;margin:auto;margin-bottom:1rem;overflow:hidden;">
				<h2 class="text-center" style="margin:35px 0 30px;">
					<img src="app/core/styles/img/logo_new.jpg">
				</h2>
				<!--
				<h4 class="text-center" style="padding:1rem;">用户登录</h4>
				-->
				<form class="col-xs-12" method="post" action="index.php?user-phone-login">
					<div class="form-group input-group">
						<span class="input-group-addon" id="basic-addon1" style="background-color:#ccc;"><a class="glyphicon glyphicon-credit-card" style="font-size:24px;"></a></span>
						<input class="form-control input-lg" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" placeholder="请输入用户名">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" id="basic-addon2" style="background-color:#ccc;"><a class="glyphicon glyphicon-lock" style="font-size:24px;"></a></span>
						<input class="form-control input-lg"  name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" placeholder="请输入密码" type="password">
					</div>
					<input type="hidden" value="1" name="userlogin"/>
					<button type="submit" class="btn btn-primary btn-block btn-lg">登录</button>
					<a class="btn btn-default btn-block btn-lg ajax" href="index.php?user-phone-register" data-target="user" data-page="user" style="margin-top:10px;">注册账号</a>
				</form>
			</div>
		</div>