<ul class="list-group">	<li class="list-group-item <?php if($this->tpl_var['method'] == 'index'){ ?> active<?php } ?>">		<?php if($this->tpl_var['method'] == 'index'){ ?>首页		<?php } else { ?>		<a href="index.php?core-master">首页</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'apps'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'apps'){ ?>模块管理		<?php } else { ?>		<a href="index.php?core-master-apps">模块管理</a>		<?php } ?>	</li></ul>