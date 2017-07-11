		<header class="container-fluid" style="border-bottom:1px solid #ccc;">
			<!--
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				<?php echo $this->tpl_var['sessionvars']['examsession']; ?>
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
			-->

			<h5 class="text-center">
                <a class="pull-left" onclick="javascript:$.goPage($('#exam'));"><img src="app/core/styles/img/logo_new2.png" style="width:10rem;height:3.2rem;"></a>
                <a class="pull-right glyphicon glyphicon-user ajax" style="font-size:1.4em;line-height:1.8em;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
                <div style="clear:both;"></div>
            </h5>
		</header>
		<!--
		<div class="container-fluid" style="background-color:#e4e4e4;padding:0 0 10px;">
            <div class="row-fluid">
                <div class="col-xs-12" style="background-color:#fff;">
                    <div class="row" style="margin-bottom:10px;">
                        <div class="col-xs-3 text-center" style="padding:0;height:100px;line-height:100px;">
                            <img src="app/core/styles/img/exam_result.png" />
                        </div>
                        <div class="col-xs-4" style="margin:10px 0;padding-top:10px;padding-bottom:0px;height:90px;line-height:100px;border-left:1px solid #ccc;">
                            <h4 class="list-group-item-heading" style="font-size:14px;">
                                掌握率
                            </h4>
                            <p class="list-group-item-text text-center" style="border:1px solid #f60;font-size:18px;font-weight:bold;height:50px;line-height:50px;">
                                100%
                            </p>
                        </div>
                        <div class="col-xs-5" style="padding:12px 0 0;">
                            <ul class="list-group" style="margin-bottom:10px;">
                                <li class="list-group-item" style="padding:6px 0 0;background-color:transparent;border:0;">
                                    测试知识点:
                                    <strong class="text-danger">41</strong>
                                    个
                                </li>
                                <li class="list-group-item" style="padding:6px 0 0;background-color:transparent;border:0;">
                                    平均掌握率:
                                    <strong class="text-danger">69</strong>
                                    %
                                </li>
                                <li class="list-group-item" style="padding:6px 0 0;background-color:transparent;border:0;">
                                    您击败
                                    <strong class="text-danger">69</strong>
                                    %的测试者
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12" style="background-color:#fff;margin-top:10px;">
                    <div class="row" style="margin-bottom:10px;">
                        <div class="col-xs-3 text-center" style="padding:0;height:100px;line-height:100px;">
                            <img src="app/core/styles/img/exam_result2.png" />
                        </div>
                        <div class="col-xs-4" style="margin:10px 0;padding-top:10px;padding-bottom:0px;height:90px;line-height:100px;border-left:1px solid #ccc;">
                            <h4 class="list-group-item-heading" style="font-size:14px;">
                                所用时长
                            </h4>
                            <p class="list-group-item-text text-center" style="border:1px solid #f60;font-size:18px;font-weight:bold;height:50px;line-height:50px;">
                                30分钟
                            </p>
                        </div>
                        <div class="col-xs-5" style="padding:12px 0 0;">
                            <ul class="list-group" style="margin-bottom:10px;">
                                <li class="list-group-item" style="padding:6px 0 0;background-color:transparent;border:0;">
                                    建议用时长:
                                    <strong class="text-danger">60</strong>
                                    秒
                                </li>
                                <li class="list-group-item" style="padding:6px 0 0;background-color:transparent;border:0;">
                                    平均用时长:
                                     <strong class="text-danger">69</strong>
                                     秒
                                </li>
                                <li class="list-group-item" style="padding:6px 0 0;background-color:transparent;border:0;">
                                    您击败
                                    <strong class="text-danger">69</strong>
                                    %的测试者
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>
        -->
		<div class="container-fluid" style="padding-bottom:60px;">
			<div class="row-fluid">
				<div class="col-xs-12" style="padding:0px;">
					<?php $oid = 0; ?>
					<?php $qcid = 0; ?>
					<?php $qid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questypelite'] as $key => $lite){ 
 $qid++; ?>
					<?php if($lite){ ?>
					<?php $quest = $key; ?>
					<?php if($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] || $this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]){ ?>
					<?php $oid++; ?>
					<h4 class="title questionpanel" id="questype_<?php echo $quest; ?>"><?php echo $this->tpl_var['ols'][$oid]; ?>、<?php echo $this->tpl_var['questype'][$quest]['questype']; ?><?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questype'][$quest]['describe']; ?></h4>
					<?php $tid = 0; ?>
	                <?php $qnid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] as $key => $question){ 
 $qnid++; ?>
	                <?php $tid++; ?>
	                <?php $qcid++; ?>
					<div class="paperexamcontent" id="questions_<?php echo $question['questionid']; ?>" rel="<?php echo $quest; ?>" style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
						<h4 class="title">
							第<?php echo $tid; ?>题
							<span class="pull-right">
								<a class="btn text-primary qicon"><i class="glyphicon glyphicon-heart-empty"></i></a>
								<a name="question_<?php echo $question['questionid']; ?>">
								<input id="time_<?php echo $question['questionid']; ?>" type="hidden" name="time[<?php echo $question['questionid']; ?>]"/>
							</span>
						</h4>
						<div class="choice">
							</a><?php echo html_entity_decode($this->ev->stripSlashes($question['question'])); ?>
						</div>
						<?php if(!$this->tpl_var['questype'][$quest]['questsort']){ ?>
						<?php if($question['questionselect'] && $this->tpl_var['questype'][$quest]['questchoice'] != 5){ ?>
						<div class="choice" style="padding-bottom:0.5rem;">
	                    	<?php echo html_entity_decode($this->ev->stripSlashes($question['questionselect'])); ?>
	                    </div>
	                    <?php } ?>
	                    <?php } ?>
						<div class="decidediv" style="position:relative;">
		                	<?php if($this->tpl_var['sessionvars']['examsessionscorelist'][$question['questionid']] && $this->tpl_var['sessionvars']['examsessionscorelist'][$question['questionid']] == $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questype'][$quest]['score']){ ?><div class="right"></div><?php } else { ?><div class="wrong"></div><?php } ?>
		                	<table class="table table-hover table-bordered">
	            				<tr>
		                			<th style="border-top:0px;">本题得分：<?php echo $this->tpl_var['sessionvars']['examsessionscorelist'][$question['questionid']]; ?>分<?php if($this->tpl_var['sessionvars']['examsessiontimelist'][$question['questionid']]){ ?> &nbsp;&nbsp;做题时间：<?php echo date('Y-m-d H:i:s',$this->tpl_var['sessionvars']['examsessiontimelist'][$question['questionid']]); ?><?php } ?></th>
		                		</tr>
		                		<tr class="info">
		                    		<td>正确答案：</td>
		                    	</tr>
		                		<tr>
		                    		<td><?php echo html_entity_decode($this->ev->stripSlashes($question['questionanswer'])); ?></td>
		                    	</tr>
		                    	<tr class="info">
		                    		<td>您的答案：</td>
		                    	</tr>
		                		<tr>
		                        	<td><?php if(is_array($this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])){ ?><?php echo implode('',$this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]); ?><?php } else { ?><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])); ?><?php } ?></td>
		                    	</tr>
		                    	<tr class="info">
		                    		<td>所在章：</td>
		                    	</tr>
		                		<tr>
		                    		<td><?php $kid = 0;
 foreach($question['questionknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalsections'][$this->tpl_var['globalknows'][$knowsid['knowsid']]['knowssectionid']]['section']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
		                    	</tr>
		                    	<tr class="info">
		                    		<td>知识点：</td>
		                    	</tr>
		                		<tr>
		                    		<td><?php $kid = 0;
 foreach($question['questionknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalknows'][$knowsid['knowsid']]['knows']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
		                    	</tr>
		                    	<tr class="info">
		                    		<td>答案解析：</td>
		                    	</tr>
		                		<tr>
		                    		<td><?php echo html_entity_decode($this->ev->stripSlashes($question['questiondescribe'])); ?></td>
		                    	</tr>
		                	</table>
		                </div>
					</div>
					<?php } ?>
					<?php $qrid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest] as $key => $questionrow){ 
 $qrid++; ?>
	                <?php $tid++; ?>
					<div class="paperexamcontent" id="questions_<?php echo $data['questionid']; ?>" rel="<?php echo $quest; ?>" style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
						<h4 class="title">第<?php echo $tid; ?>题
							<span class="pull-right">
								<a class="btn text-primary qicon"><i class="glyphicon glyphicon-heart-empty"></i></a>
								<a name="question_<?php echo $data['questionid']; ?>"></a>
								<input id="time_<?php echo $data['questionid']; ?>" type="hidden" name="time[<?php echo $data['questionid']; ?>]"/>
							</span>
						</h4>
						<div class="choice">
							<?php echo html_entity_decode($this->ev->stripSlashes($questionrow['qrquestion'])); ?>
						</div>
						<?php $did = 0;
 foreach($questionrow['data'] as $key => $data){ 
 $did++; ?>
		            	<?php $qcid++; ?>
		                <hr />
		                <div style="padding:0rem 1.5rem;margin-top:1rem;">
							<div class="choice">
								<span class="badge badge-primary"><?php echo $did; ?></span><?php echo html_entity_decode($this->ev->stripSlashes($data['question'])); ?>
							</div>
							<?php if(!$this->tpl_var['questype'][$quest]['questsort']){ ?>
							<?php if($data['questionselect'] && $this->tpl_var['questype'][$quest]['questchoice'] != 5){ ?>
							<div class="choice" style="padding-bottom:0.5rem;">
		                    	<?php echo html_entity_decode($this->ev->stripSlashes($data['questionselect'])); ?>
		                    </div>
		                    <?php } ?>
		                    <?php } ?>
							<div class="decidediv" style="position:relative;">
			                	<?php if($this->tpl_var['sessionvars']['examsessionscorelist'][$data['questionid']] && $this->tpl_var['sessionvars']['examsessionscorelist'][$data['questionid']] == $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questype'][$quest]['score']){ ?><div class="right"></div><?php } else { ?><div class="wrong"></div><?php } ?>
			                	<table class="table table-hover table-bordered">
		            				<tr>
			                			<th style="border-top:0px;">本题得分：<?php echo $this->tpl_var['sessionvars']['examsessionscorelist'][$data['questionid']]; ?>分<?php if($this->tpl_var['sessionvars']['examsessiontimelist'][$data['questionid']]){ ?> &nbsp;&nbsp;做题时间：<?php echo date('Y-m-d H:i:s',$this->tpl_var['sessionvars']['examsessiontimelist'][$data['questionid']]); ?><?php } ?></th>
			                		</tr>
			                		<tr class="info">
			                    		<td>正确答案：</td>
			                    	</tr>
		                			<tr>
			                    		<td><?php echo html_entity_decode($this->ev->stripSlashes($data['questionanswer'])); ?></td>
			                    	</tr>
			                    	<tr class="info">
			                    		<td>您的答案：</td>
			                    	</tr>
		                			<tr>
			                        	<td><?php if(is_array($this->tpl_var['sessionvars']['examsessionuseranswer'][$data['questionid']])){ ?><?php echo implode('',$this->tpl_var['sessionvars']['examsessionuseranswer'][$data['questionid']]); ?><?php } else { ?><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['sessionvars']['examsessionuseranswer'][$data['questionid']])); ?><?php } ?></td>
			                    	</tr>
			                    	<tr class="info">
			                    		<td>所在章：</td>
			                    	</tr>
		                			<tr>
			                    		<td><?php $kid = 0;
 foreach($questionrow['qrknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalsections'][$this->tpl_var['globalknows'][$knowsid['knowsid']]['knowssectionid']]['section']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
			                    	</tr>
			                    	<tr class="info">
			                    		<td>知识点：</td>
			                    	</tr>
		                			<tr>
			                    		<td><?php $kid = 0;
 foreach($questionrow['qrknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalknows'][$knowsid['knowsid']]['knows']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
			                    	</tr>
			                    	<tr class="info">
			                    		<td>答案解析：</td>
			                    	</tr>
		                			<tr>
			                    		<td><?php echo html_entity_decode($this->ev->stripSlashes($data['questiondescribe'])); ?></td>
			                    	</tr>
			                	</table>
			                </div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
					<?php } ?>
					<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="padding:4px 0;position:fixed;bottom:0;border-top:1px solid #ccc;width:100%;background-color:#fff;">
            <div class="row-fluid">
                <div class="col-xs-6" style="border-right:1px solid #999;padding:0;">
                    <a class="btn btn-block btn-default btn-lg" style="border:0;" onclick="javascript:$.goPage($('#exam'));">再测一次</a>
                </div>
                <div class="col-xs-6" style="padding:0;">
                    <a data-target="history" data-page="history" href="index.php?exam-phone-history&ehtype=2" class="btn btn-block btn-default btn-lg ajax" style="border:0;">测评记录</a>
                </div>
            </div>
        </div>