<div class="container-fluid box" style="margin:0px auto;overflow:visible;border-bottom:1px solid #e4e4e4;">
	<div class="row-fluid">
		<div class="main">
		    <!--
			<div class="col-xs-3">
				<h2><a href="index.php"><img src="app/core/styles/img/logo.png" style="height:48px;margin-top:-5px;"/>&nbsp;ITEST智能测评</a></h2>
			</div>
			-->
			<div class="col-xs-3">
			    <h2><a href="index.php" title="ITEST智能测评"><img src="app/core/styles/img/logo_new.jpg" alt="ITEST智能测评"/></a></h2>
                <!--<h2 style="margin-top:16px;"><a href="index.php" style="font-size:44px;letter-spacing:2px;color:#000;"><img src="app/core/styles/img/logo.png" style="height:46px;width:46px;margin-top:-8px;margin-right:14px;"/>ITEST</a><strong style="display:block;font-size:12px;margin-top:8px;font-weight:normal;color:#6b6b6b;margin-left:2px;">中国领先的智能测评与自适应学习平台</strong></h2>-->
            </div>
            <!--
            <div class="col-xs-3">
                <h2><a href="index.php"><img src="app/core/styles/img/logo_web.jpg" style="width:214px;height:80px;"/></a></h2>
            </div>
            -->
			<div class="col-xs-1">
			</div>
			<div class="col-xs-6" style="padding-top:22px;">
				<!--<div class="form-inline">
					<div class="form-group">
						<input type="text" style="width:380px;" class="form-control" id="keyword" placeholder="搜索课程/资料">
					</div>
					<button type="button" class="btn btn-info" onclick="javascript:window.location='index.php?content-app-search&keyword='+$('#keyword').val();">搜资料</button>
					<button type="button" class="btn btn-primary" onclick="javascript:window.location='index.php?course-app-search&keyword='+$('#keyword').val();">搜课程</button>
				</div>-->
			</div>
			<div class="col-xs-2 text-right" style="line-height:94px;">
				<ul class="list-unstyled list-inline text-right">
					<?php if($this->tpl_var['_user']['userid']){ ?>
					<li>
						<div class="btn-group">
							<button type="button" class="btn btn-info"><em class="glyphicon glyphicon-user"></em> <?php echo $this->tpl_var['_user']['username']; ?></button>
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="index.php?user-center"><em class="glyphicon glyphicon-user"></em> 用户中心</a></li>
								<?php if($this->tpl_var['_user']['teacher_subjects']){ ?><li><a href="index.php?exam-teach"><em class="glyphicon glyphicon-book"></em> 测评管理</a></li><?php } ?>
								<?php if($this->tpl_var['_user']['groupid'] == 1){ ?><li><a href="index.php?core-master"><em class="glyphicon glyphicon-dashboard"></em> 后台管理</a></li><?php } ?>
								<li><a class="ajax" href="index.php?user-app-logout"><em class="glyphicon glyphicon-log-out"></em> 退出</a></li>
							</ul>
						</div>
					</li>
					<?php } else { ?>
					<li><span class="glyphicon glyphicon-user" style="vertical-align:middle;"></span></li>
					<li><a href="index.php?user-app-login" class="btn btn-default" style="border-color:transparent;padding:0;margin-left:-6px;background-color:transparent;">登录</a></li>
					<li><a href="index.php?user-app-register" class="btn btn-default" style="border-color:transparent;padding:0;margin-left:7px;background-color:transparent;padding-right:6px;">注册</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--<div class="container-fluid navbar" style="margin-top:0px;margin-bottom:0px;padding-top:10px;background-color:#337AB7;">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-12">
				<ul class="list-unstyled list-inline">
					<li class="menu col-xs-1 active"><a href="index.php" class="icon">首页</a></li>
					<li class="menu col-xs-1"><a href="index.php?course">课程</a></li>
					<li class="menu col-xs-1"><a href="index.php?exam">考试</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>-->