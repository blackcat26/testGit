<?php $this->_compileInclude('header'); ?><body><?php $this->_compileInclude('nav'); ?><div class="container-fluid">	<div class="row-fluid">		<div class="main">			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">				<?php $this->_compileInclude('menu'); ?>			</div>			<div class="col-xs-10" id="datacontent">				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">					<div class="col-xs-12">						<ol class="breadcrumb">							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>							<li><a href="index.php?user-master-user">用户管理</a></li>							<li class="active">修改用户</li>						</ol>					</div>				</div>				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">					<h4 class="title"><?php echo $this->tpl_var['user']['username']; ?></h4>					<div id="tabs-694325" class="tabbable" style="margin-top:20px;">						<ul class="nav nav-tabs">							<li class="active">								<a href="#panel-344373" data-toggle="tab">用户资料</a>							</li>							<li>								<a href="#panel-788842" data-toggle="tab">修改角色</a>							</li>							<li>								<a href="#panel-788885" data-toggle="tab">修改密码</a>							</li>							<a class="pull-right btn btn-primary" href="index.php?user-master-user">用户列表</a>						</ul>						<div class="tab-content" style="margin-top:20px;">							<div id="panel-344373" class="tab-pane active">								<form action="index.php?user-master-user-modify" method="post" class="form-horizontal">									<fieldset>										<?php $fid = 0;
 foreach($this->tpl_var['forms'] as $key => $form){ 
 $fid++; ?>										<div class="form-group">											<label for="<?php echo $form['id']; ?>" class="control-label col-sm-2"><?php echo $form['title']; ?>：</label>											<div class="col-sm-9">											<?php echo $form['html']; ?>											</div>										</div>										<?php } ?>										<div class="form-group">											<label class="control-label col-sm-2"></label>											<div class="col-sm-9">												<button class="btn btn-primary" type="submit">提交</button>												<input type="hidden" name="userid" value="<?php echo $this->tpl_var['user']['userid']; ?>"/>												<input type="hidden" name="modifyuserinfo" value="1"/>												<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>												<?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>												<input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>												<?php } ?>											</div>										</div>									</fieldset>								</form>							</div>							<div id="panel-788842" class="tab-pane">								<form action="index.php?user-master-user-modify" method="post" class="form-horizontal">									<fieldset>										<div class="form-group">											<label class="control-label col-sm-2">电子邮箱：</label>											<div class="col-sm-9"><span class="help-block"><?php echo $this->tpl_var['user']['useremail']; ?></span></div>										</div>										<div class="form-group">											<label for="groupid" class="control-label col-sm-2">用户角色：</label>											<div class="col-sm-3">												<select class="form-control" name="groupid" id="groupid">													<?php $gid = 0;
 foreach($this->tpl_var['groups'] as $key => $group){ 
 $gid++; ?>													<option value="<?php echo $group['groupid']; ?>"<?php if($this->tpl_var['user']['usergroupid'] == $group['groupid']){ ?>selected<?php } ?>><?php echo $group['groupname']; ?></option>													<?php } ?>												</select>											</div>										</div>										<div class="form-group">											<label class="control-label col-sm-2"></label>											<div class="col-sm-9">												<button class="btn btn-primary" type="submit">提交</button>												<input type="hidden" name="userid" value="<?php echo $this->tpl_var['user']['userid']; ?>"/>												<input type="hidden" name="modifyusergroup" value="1"/>												<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>												<?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>												<input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>												<?php } ?>											</div>										</div>									</fieldset>								</form>							</div>							<div id="panel-788885" class="tab-pane">								<form action="index.php?user-master-user-modify" method="post" class="form-horizontal">									<fieldset>										<div class="form-group">											<label for="passowrd1" class="control-label col-sm-2">新密码：</label>											<div class="col-sm-4">												<input class="form-control" id="passowrd1" type="password" name="args[password]" needle="true" datatype="password" msg="密码字数必须在6位以上"/>											</div>										</div>										<div class="form-group">											<label for="password2" class="control-label col-sm-2">重复密码：</label>											<div class="col-sm-4">												<input class="form-control" id="password2" type="password" name="args[password2]" needle="true" equ="passowrd1" msg="前后两次密码必须一致且不能为空"/>											</div>										</div>										<div class="form-group">											<label class="control-label col-sm-2"></label>											<div class="col-sm-9">												<button class="btn btn-primary" type="submit">提交</button>												<input type="hidden" name="userid" value="<?php echo $this->tpl_var['user']['userid']; ?>"/>												<input type="hidden" name="modifyuserpassword" value="1"/>												<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>												<?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>												<input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>												<?php } ?>											</div>										</div>									</fieldset>								</form>							</div>						</div>					</div>				</div>			</div>		</div>	</div></div><?php $this->_compileInclude('footer'); ?></body></html>