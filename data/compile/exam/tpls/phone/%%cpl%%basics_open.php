<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div id="content">
	<div class="pages" id="basic">
<?php } ?>
        <header class="container-fluid" style="border-bottom:1px solid #ccc;">
            <!--
            <h5 class="text-center">
                <em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
                考场列表
                <em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
            </h5>
            -->
            <h5 class="text-center">
                <a class="pull-left" onclick="javascript:$.goPrePage();"><img src="app/core/styles/img/logo_new2.png" style="width:10rem;height:3.2rem;"></a>
                <a class="pull-right glyphicon glyphicon-user ajax" style="font-size:1.4em;line-height:1.8em;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
                <div style="clear:both;"></div>
            </h5>
        </header>
		<div class="container-fluid">
		    <div style="margin-top:1.67rem;">
		        <div class="col-xs-12">
		            <button class="btn btn-default btn-block" type="button" style="font-size:1.6rem;" onclick="javascript:$.goPrePage();">取消返回</button>
		        </div>
		        <div style="clear:both;"></div>
		    </div>

			<?php $bid = 0;
 foreach($this->tpl_var['basics']['data'] as $key => $basic){ 
 $bid++; ?>
			<div style="clear:both;overflow:hidden;margin-top:2rem">
				<div class="col-xs-12">
					<div style="clear:both;overflow:hidden;">
                            <?php if($this->tpl_var['data']['openbasics'][$basic['basicid']]){ ?>
					        <a href="index.php?exam-phone-basics-detail&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-page="basic" data-target="basic">
                            <?php } elseif($basic['basicdemo']){ ?>
                            <a href="index.php?exam-phone-basics-openit&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-page="exam" data-target="exam">
                            <?php } ?>
                            <div class="col-xs-5" style="padding-left:0;background:#e4e4e4;">
                                <img src="<?php if($basic['basicthumb']){ ?><?php echo $basic['basicthumb']; ?><?php } else { ?>app/exam/styles/image/paper.png<?php } ?>" style="width:10rem;height:10rem;"/>
                            </div>
                            <div class="col-xs-7" style="padding:0.2rem;background:#e4e4e4;height:10rem">
                                <div class="text-left" style="padding:0.2rem;">
                                    <h5 style="padding-left:0.8rem;overflow:hidden;max-height:2rem;line-height:1.4;font-size:18px;margin-bottom:0;">
                                        <?php echo $basic['basic']; ?>
                                        </br>
                                        <?php if($this->tpl_var['data']['openbasics'][$basic['basicid']]){ ?>
                                        <button type="button" class="btn btn-success btn-sm" style="position:absolute;bottom:1rem;left:1rem;width:7rem;">已开通</button>
                                        <?php } elseif($basic['basicdemo']){ ?>
                                        <button type="button" class="btn btn-primary btn-sm" style="position:absolute;bottom:1rem;left:1rem;width:7rem;">立即开通</button>
                                        <?php } ?>
                                    </h5>
                                    <p style="padding-left:0.8rem;overflow:hidden;max-height:2rem;line-height:1.4;font-size:18px;"><?php if($basic['basicdescribe']){ ?>（<?php echo $basic['basicdescribe']; ?>）<?php } else { ?><?php } ?></p>
                                </div>
                            </div>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php if($this->tpl_var['basics']['pages']){ ?>
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
				<div class="col-xs-12" style="padding-left:0px;">
					<ul class="pagination pull-right">
						<?php echo $this->tpl_var['basics']['pages']; ?>
					</ul>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php $this->_compileInclude('footer'); ?>
		<?php if(!$this->tpl_var['userhash']){ ?>
    </div>
</div>
</body>
</html>
<?php } ?>