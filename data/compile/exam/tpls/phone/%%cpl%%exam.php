		<header class="container-fluid">
		    <!--
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				正式考试
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
			-->
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<p class="alert alert-danger" style="margin-top:1rem;">本考场开启时间
					<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?>
					<?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start']); ?> - <?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']); ?><?php } else { ?>不限<?php } ?> ；
					考试次数 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?><?php echo $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']; ?><?php } else { ?>不限<?php } ?> ；
					抽卷规则 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['selectrule']){ ?>系统随机抽卷<?php } else { ?>用户手选试卷<?php } ?>。
				</p>
				<!-- 是否设置考试开始、结束时间 -->
				<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?>
                    <!-- 现在是否在考试允许时间范围内 -->
                	<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] <= TIME && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end'] >= TIME){ ?>
                        <!-- 列出试卷选择树 -->
                        <?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
                        <div style="clear:both;overflow:hidden;margin-top:0.5rem;padding:1rem 0rem;">
                            <div class="col-xs-4">
                                <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
                                <a onclick="javascript:$.goPrePage();">
                                    <img src="app/core/styles/img/item.jpg" alt="" style="width:10rem;margin-top:0.5rem">
                                <?php } else { ?>
                                <a id="beginExamBtn" action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
                                <?php } ?>
                                </a>
                            </div>
                            <div class="col-xs-8" style="padding:0.2rem;">
                                <div class="text-left" style="padding:0.2rem;">
                                    <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
                                    <a onclick="javascript:$.goPrePage();">
                                        <h5><?php echo $exam['exam']; ?></h5>
                                        <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
                                        <p style="font-size:1rem;" class="text-danger">考试次数已用完</p>
                                        <?php } else { ?>
                                        <p style="font-size:1rem;">总分：<?php echo $exam['examsetting']['score']; ?> 及格分：<?php echo $exam['examsetting']['passscore']; ?></p>
                                        <?php } ?>
                                    <?php } else { ?>
                                    <a action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
                                    <?php } ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                	<?php } else { ?>
                		<p class="alert">本考场开放考试时间为：<?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start']); ?> - <?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']); ?>，目前不是考试时间，请在规定时间内前来考试哦。</p>
                	    <a class="text-center btn btn-warning btn-block btn-lg" onclick="javascript:$.goPrePage();">返回</a>
                	<?php } ?>
                <?php } else { ?>
                    <?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
                    <div style="clear:both;overflow:hidden;margin-top:0.5rem;padding:1rem 0rem;">
                        <div class="col-xs-4">
                            <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
                            <a onclick="javascript:$.goPrePage();">
                                <img src="app/core/styles/img/item.jpg" alt="" style="width:10rem;margin-top:0.5rem">
                            <?php } else { ?>
                            <a id="beginExamBtn" action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
                            <?php } ?>
                            </a>
                        </div>
                        <div class="col-xs-8" style="padding:0.2rem;">
                            <div class="text-left" style="padding:0.2rem;">
                                <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
                                <a onclick="javascript:$.goPrePage();">
                                    <h5><?php echo $exam['exam']; ?></h5>
                                    <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
                                    <p style="font-size:1rem;" class="text-danger">考试次数已用完</p>
                                    <?php } else { ?>
                                    <p style="font-size:1rem;">总分：<?php echo $exam['examsetting']['score']; ?> 及格分：<?php echo $exam['examsetting']['passscore']; ?></p>
                                    <?php } ?>
                                <?php } else { ?>
                                <a action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
                                <?php } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
			</div>
		</div>
		<script>
            $('#beginExamBtn').click();
		</script>