<ul class="list-group">	<li class="list-group-item <?php if($this->tpl_var['method'] == 'index'){ ?> active<?php } ?>">		<?php if($this->tpl_var['method'] == 'index'){ ?>首页		<?php } else { ?>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master">首页</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'orders'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'orders'){ ?>订单管理		<?php } else { ?>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-orders">订单管理</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'coupon'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'coupon'){ ?>代金券管理		<?php } else { ?>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-coupon">代金券管理</a>		<?php } ?>	</li></ul>