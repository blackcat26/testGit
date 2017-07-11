<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
				<?php $this->_compileInclude('menu'); ?>
			</div>
			<div class="col-xs-10" id="datacontent">
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?core-master">全局</a></li>
							<li class="active">首页</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<div class="col-xs-12">
						<h5 class="title">
							开发者信息
						</h5>
						<p>
							武汉杰学教育科技有限公司 | 本版版本号：1.1 
						</p>
					</div>
					<div class="col-xs-12">
						<h5 class="title">
							平台信息
						</h5>
						<p>
							官方平台：<a href="http://www.pm3721.com">http://www.pm3721.com</a>
						</p>
						<p>
							微信公众号：ITEST智能测评
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>