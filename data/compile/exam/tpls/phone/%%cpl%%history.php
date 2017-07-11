        <?php if($this->tpl_var['page']==1){ ?>
        <header class="container-fluid" style="border-bottom:1px solid #ccc;">
		    <!--
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				考试记录
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
			-->
			<h5 class="text-center">
                <a class="pull-left" onclick="javascript:$.goPage($('#exam'));"><img src="app/core/styles/img/logo_new2.png" style="width:10rem;height:3.2rem;"></a>
                <a class="pull-right glyphicon glyphicon-user ajax" style="font-size:1.4em;line-height:1.8em;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
                <div style="clear:both;"></div>
            </h5>
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;display:none;">
					<ul class="nav nav-pills">
						<li<?php if($this->tpl_var['ehtype'] == 0){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-history" class="ajax" data-target="history" data-page="history">强化训练</a>
						</li>
						<li<?php if($this->tpl_var['ehtype'] == 1){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-history&ehtype=1" class="ajax" data-target="history" data-page="history">模拟考试</a>
						</li>
						<li<?php if($this->tpl_var['ehtype'] == 2){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-history&ehtype=2" class="ajax" data-target="history" data-page="history">正式考试</a>
						</li>
					</ul>
				</div>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;display:none;">
					<blockquote class="questype" style="margin:0px;">
						<?php if($this->tpl_var['ehtype'] == 0){ ?>
						<p><span class="text-warning">提示：</span>强化训练最多记录20条信息。</p>
						<?php } elseif($this->tpl_var['ehtype'] == 1){ ?>
						<p>您完成了<b class="text-warning"><?php echo $this->tpl_var['exams']['number']; ?></b>次考试， 平均分：<b class="text-warning"><?php echo $this->tpl_var['avgscore']; ?></b>分！</p>
						<?php } elseif($this->tpl_var['ehtype'] == 2){ ?>
						<p>您完成了<b class="text-warning"><?php echo $this->tpl_var['exams']['number']; ?></b>次考试， 平均分：<b class="text-warning"><?php echo $this->tpl_var['avgscore']; ?></b>分！</p>
						<?php } ?>
					</blockquote>
				</div>
				<style>
				    #ehList:after{
                        content:url(app/core/styles/img/arrow-down.png);
                        position:relative;
                        left:-8px;
                    }
                    .ehItem{
                        border-left:5px solid #999;
                        padding:2rem 0 0 1.6rem;
                        position:relative;
                    }
                    .ehItem:last-child{
                        padding-bottom:4rem;
                    }
                    .ehItemIco{
                        width:1.8rem;
                        height:1.8rem;
                        display:inline-block;
                        border-radius:50%;
                        position:absolute;
                        left:-1.1rem;
                    }
                    .ehItemTime{
                        font-size:12px;
                        display:block;
                        color:#999;
                    }
                    .ehItemBody{
                        font-size:18px;
                        margin:0;
                    }
                    .ehDetails{
                        font-size:18px;
                        line-height:16px;
                    }
                    .ehSuccess{
                        background-color:#090;
                    }
                    .ehFail{
                        background-color:#f00;
                    }
                    .ehDefault{
                        background-color:#999;
                    }
				</style>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
				    <h4 style="margin-bottom:0;padding-bottom:1.4rem;border-bottom:1px solid #000;">测评记录</h4>
				    <div>
				        <ol id="ehList" style="list-style:none;">
        <?php } else { ?>
        <?php } ?>
				            <?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
				            <li class="ehItem">
				                <span class="ehItemIco ehDefault"></span>
				                <a href="index.php?exam-phone-history-view&ehid=<?php echo $exam['ehid']; ?>" class="ajax" data-target="views" data-page="views">
                                    <span class="ehItemTime"><?php echo date('Y.m.d H:i:s',$exam['ehstarttime']); ?></span>
                                    <p class="ehItemBody">
                                        错题数 : <?php echo $exam['errornumber']; ?> 题
                                        <span class="glyphicon glyphicon-chevron-right pull-right ehDetails"></span>
                                    </p>
                                </a>
				            </li>
				            <?php } ?>
        <?php if($this->tpl_var['page']==1){ ?>
				        </ol>
				    </div>
				</div>

                <!--
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
					<table class="table table-bordered table-hover" id="aaa">
						<tr class="info">
							<td>答题记录</td>
							<td>得分</td>
							<td>解析</td>
							<td>删除</td>
						</tr>

						<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
						<tr>
							<td><?php echo $exam['ehexam']; ?></td>
							<td><b class="red"><?php if(!$exam['ehstatus'] && $exam['ehdecide']){ ?>评分中<?php } else { ?><?php echo $exam['ehscore']; ?><?php } ?></b></td>
							<td><a href="index.php?exam-phone-history-view&ehid=<?php echo $exam['ehid']; ?>" class="ajax" data-target="views" data-page="views">解析</a></td>
							<td>
								<?php if($this->tpl_var['ehtype'] != 2){ ?>
								<a class="ajax" href="index.php?exam-phone-history-del&ehid=<?php echo $exam['ehid']; ?>">删除</a>
								<?php } else { ?>
								-
								<?php } ?>
							</td>
						</tr>
					    <?php } ?>

					</table>
					<?php if($this->tpl_var['exams']['pages'] && $this->tpl_var['ehtype']){ ?>
					<ul class="pagination pull-right"><?php echo $this->tpl_var['exams']['pages']; ?></ul>
					<?php } ?>
				</div>
				-->
			</div>
		</div>
		<script>
		var pageIndex = <?php echo $this->tpl_var['page']; ?>;
		var pageSum = <?php echo $this->tpl_var['exams']['number']; ?>;
		while(pageSum>pageIndex*10){
            pageIndex += 1;
		    $.ajax({
                url: "index.php?exam-phone-history&ehtype=2&page="+pageIndex,
                type: "get",
                cache: false,
                async: false,
                success: function (text) {
                    var ehItemHtml = $('#ehList').html() + text;
                    $('#ehList').html(ehItemHtml);
                },
                error: function (jqXhr, textStatus, errorThrown) {
                    alert(jqXhr.responseText);
                }
            })
		}
		</script>
		<?php } else { ?>
        <?php } ?>