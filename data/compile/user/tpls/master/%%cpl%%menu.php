<ul class="list-group">	<li class="list-group-item <?php if($this->tpl_var['method'] == 'index'){ ?> active<?php } ?>">		<?php if($this->tpl_var['method'] == 'index'){ ?>首页		<?php } else { ?>		<a href="index.php?user-master">首页</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'user'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'user'){ ?>用户管理		<?php } else { ?>		<a href="index.php?user-master-user">用户管理</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'actor'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'actor'){ ?>角色管理		<?php } else { ?>		<a href="index.php?user-master-actor">角色管理</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'config'){ ?> active<?php } ?>">		<?php if($this->tpl_var['method'] == 'config'){ ?>模块设置		<?php } else { ?>		<a href="index.php?user-master-config">模块设置</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'module'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'module'){ ?>模型管理		<?php } else { ?>		<a href="index.php?user-master-module">模型管理</a>		<?php } ?>	</li></ul>