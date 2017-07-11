<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div id="content">
	<div class="pages" id="exam">
<?php } ?>
		<header class="container-fluid" style="border-bottom:1px solid #ccc;">
		    <!--
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				我的考场
				<a style="font-size:2rem;color:#FFFFFF;" class="pull-right glyphicon glyphicon-plus ajax" href="index.php?exam-phone-basics-open" data-target="page2" data-page="page2"></a>
			</h5>
			-->
			<h5 class="text-center">
                <a class="pull-left" onclick="javascript:$.goPage($.currentPage);"><img src="app/core/styles/img/logo_new2.png" style="width:10rem;height:3rem;"></a>
                <a class="pull-right glyphicon glyphicon-user ajax" style="font-size:1.4em;line-height:1.8em;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
                <div style="clear:both;"></div>
            </h5>
		</header>
		<div class="container-fluid" style="padding-bottom:30px;">
			<?php $bid = 0;
 foreach($this->tpl_var['basics'] as $key => $basic){ 
 $bid++; ?>
			<div style="clear:both;overflow:hidden;margin-top:2rem">
                <div class="col-xs-12">
                    <div style="clear:both;overflow:hidden;">
                        <a data-markPrepage="no" href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-page="basic" data-target="basic">
                            <div class="col-xs-5" style="padding-left:0;background:#e4e4e4;">
                                <img src="<?php if($basic['basicthumb']){ ?><?php echo $basic['basicthumb']; ?><?php } else { ?>app/exam/styles/image/paper.png<?php } ?>" style="width:10rem;height:10rem;" />
                            </div>
                            <div class="col-xs-7" style="padding:0.2rem;background:#e4e4e4;height:10rem">
                                <div class="text-left" style="padding:0.2rem;">
                                    <h5 style="padding-left:0.8rem;overflow:hidden;max-height:2rem;line-height:1.4;font-size:18px;margin-bottom:0;">
                                        <?php echo $basic['basic']; ?>
                                    </h5>
                                    <p style="padding-left:0.8rem;overflow:hidden;max-height:4rem;line-height:1.4;font-size:18px;"><?php if($basic['basicdescribe']){ ?>（<?php echo $basic['basicdescribe']; ?>）<?php } else { ?><?php } ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			<?php } ?>

			<div>
                <div class="col-xs-12">
                    <div class="text-center" style="margin-top:2.4rem;">
                        <a style="display:block;color:#999;border:0.167rem dashed #ccc;font-size:7rem;background-color:#f2f2f2;" class="ajax text-center btn btn-default" href="index.php?exam-phone-basics-open" data-target="page2" data-page="page2">
                            +
                        </a>
                    </div>
                </div>
            </div>
		</div>
		<?php $this->_compileInclude('footer'); ?>
	<?php if(!$this->tpl_var['userhash']){ ?>
    </div>
</div>
</body>
</html>
<?php } ?>