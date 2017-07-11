		<header class="container-fluid" style="border-bottom:1px solid #ccc;">
            <!--
            <h5 class="text-center">
                <em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
                用户注册
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
                <h4 class="text-center" style="padding:1rem;">用户注册</h4>
                -->
                <form class="col-xs-12" method="post" action="index.php?user-phone-register">
                    <div class="form-group input-group">
                        <span class="input-group-addon" id="basic-addon1" style="background-color:#ccc;"><a class="glyphicon glyphicon-credit-card" style="font-size:24px;"></a></span>
                        <input type="hidden" value="1" name="userregister"/>
                        <input class="form-control input-lg" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" placeholder="请输入用户名">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon" id="basic-addon1" style="background-color:#ccc;"><a class="glyphicon glyphicon-envelope" style="font-size:24px;"></a></span>
                        <input type="hidden" value="1" name="userregister"/>
                        <input class="form-control input-lg" name="args[useremail]" datatype="email" needle="needle" msg="请你输入邮箱" placeholder="请输入邮箱">
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon" id="basic-addon1" style="background-color:#ccc;"><a class="glyphicon glyphicon-lock" style="font-size:24px;"></a></span>
                        <input class="form-control input-lg"  name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" placeholder="请输入密码" type="password">
                        <!--
                        <span class="input-group-addon" id="basic-addon1" style="background-color:#ccc;"><a class="glyphicon glyphicon-eye-open" style="font-size:24px;"></a></span>
                        -->
                    </div>
                    <!--
                    <div class="form-group input-group">
                        <span class="input-group-addon" id="basic-addon1" style="background-color:#ccc;"><a class="glyphicon glyphicon-lock" style="font-size:24px;"></a></span>
                        <input class="form-control input-lg"  name="repeatpassword" datatype="password" needle="needle" msg="请再次输入密码" placeholder="请再次输入密码" type="password">
                    </div>
                    -->
                    <button type="submit" class="btn btn-warning btn-block btn-lg">注册</button>
                    <a class="btn btn-default btn-block btn-lg ajax" href="index.php?user-phone-login" data-target="user" data-page="user" style="margin-top:10px;">登录</a>
                </form>
            </div>
		</div>