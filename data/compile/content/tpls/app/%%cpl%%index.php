<?php $this->_compileInclude('header'); ?>
<body style="background-color:#fff;">
<?php $this->_compileInclude('nav'); ?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
		    <div style="margin:60px auto 84px;padding:0 5px 0 20px;">
                <div class="col-xs-7" style="height:344px;">
                    <h1 style="color:#0066CC;font:normal normal 400 60px '微软雅黑 Regular', '微软雅黑';margin-top:-4px;">ITSET，你的提分利器</h1>
                    <p style="position:absolute;bottom:0;color:#666;font:normal normal 400 24px '微软雅黑 Regular', '微软雅黑'">
                        不用下载安装APP<br/>
                        扫一扫右侧二维码<br/>
                        关注微信公众号，马上就可以用了哦！
                    </p>
                </div>
                <div class="col-xs-5 text-right">
                    <img src="app/core/styles/img/qrcode_344.jpg" alt="微信公众号" class="img-thumbnail" style="width:344px;height:344px;padding:0;">
                </div>
                <div style="clear:both;"></div>
		    </div>

            <!--
        	<h1 style="line-height:120px;text-align:center;">微信扫一扫，开始智能测评</h1>

            <div style="text-align:center">
            <img src="app/core/styles/img/qrcode_344.jpg" alt="微信公众号">
            </div>
            <br/>
			<br/>
            -->
            <?php if(!$this->tpl_var['_user']['userid']){ ?><?php } ?>
        </div>
    </div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>