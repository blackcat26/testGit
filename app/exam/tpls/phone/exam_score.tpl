{x2;if:!$userhash}
{x2;include:header}
<body>
<div id="content">
	<div class="pages" id="paper">
{x2;endif}
		<header class="container-fluid" style="border-bottom:1px solid #ccc;">
		    <!--
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				正式考试
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
			-->
			<h5 class="text-center">
                <a class="pull-left" onclick="javascript:$.goPage($('#exam'));"><img src="app/core/styles/img/logo_new2.png" style="width:10rem;height:3.2rem;"></a>
                <a class="pull-right glyphicon glyphicon-user ajax" style="font-size:1.4em;line-height:1.8em;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
                <div style="clear:both;"></div>
            </h5>
            <!--
			<a id="goEhFun" data-target="views" data-page="views" href="index.php?exam-phone-history-view&ehid={x2;$ehid}" class="ajax"></a>
			-->
		</header>
		<div class="container-fluid" style="background-color:#e4e4e4;padding:0;">
			<div class="row-fluid">
				<div style="clear:both;overflow:hidden;background:#FFFFFF;padding:0.5rem;">
				    <!--
					<legend class="text-center"><h3>{x2;$sessionvars['examsession']}</h3></legend>
					-->
					<div class="col-xs-12">
	            		<div class="boardscore">
	            			<h1 class="text-center text-danger">{x2;$sessionvars['examsessionscore']} 分</h1>
	            		</div>
	            	</div>
	            	<div class="col-xs-12">
	            		<div><b class="text-info">考试详情：</b></div>
	          			<p>总分：<b class="text-warning">{x2;$sessionvars['examsessionsetting']['examsetting']['score']}</b>分 合格分数线：<b class="text-warning">{x2;$sessionvars['examsessionsetting']['examsetting']['passscore']}</b>分 答卷耗时：<b class="text-warning">{x2;if:$sessionvars['examsessiontime'] >= 60}{x2;if:$sessionvars['examsessiontime']%60}{x2;eval: echo intval($sessionvars['examsessiontime']/60)+1}{x2;else}{x2;eval: echo intval($sessionvars['examsessiontime']/60)}{x2;endif}分钟{x2;else}{x2;$sessionvars['examsessiontime']}秒{x2;endif}</b></p>
	              		<table class="table table-hover table-bordered">
	                      <tr class="success">
	                        <th>题型</th>
	                        <th>总题数</th>
	                        <th>答对题数</th>
	                        <th>总分</th>
	                        <th>得分</th>
	                      </tr>
	                      {x2;tree:$number,num,nid}
	                      {x2;if:v:num}
	                      <tr>
	                        <td>{x2;$questype[v:key]['questype']}</td>
	                        <td>{x2;v:num}</td>
	                        <td>{x2;$right[v:key]}</td>
	                        <td>{x2;eval: echo number_format(v:num*$sessionvars['examsessionsetting']['examsetting']['questype'][v:key]['score'],1)}</td>
	                        <td>{x2;eval: echo number_format($score[v:key],1)}</td>
	                      </tr>
	                      {x2;endif}
	                      {x2;endtree}
	                      <tr>
	                        <td colspan="5" align="left">本次考试共<b class="text-warning">{x2;$allnumber}</b>道题，总分<b class="text-warning">{x2;$sessionvars['examsessionsetting']['examsetting']['score']}</b>分，您做对<b class="text-warning">{x2;$allright}</b>道题，得到<b class="text-warning">{x2;$sessionvars['examsessionscore']}</b>分</td>
	                      </tr>
	                   </table>
	                   {x2;if:$data['currentbasic']['basicexam']['model'] != 2}
	                   <div class="text-center">
	                   		<a data-target="views" data-page="views" href="index.php?exam-phone-history-view&ehid={x2;$ehid}" class="btn btn-primary ajax">查看答案和解析</a>&nbsp;&nbsp;&nbsp;&nbsp;
	                   		<a data-target="history" data-page="history" href="index.php?exam-phone-history&ehtype=2" class="btn btn-info ajax">进入我的考试记录</a>
	                   	</div>
	            	   {x2;endif}
	            	</div>
	            </div>

	             <!--
                <div class="col-xs-12" style="background-color:#fff;">
                    <div class="row" style="margin-bottom:10px;">
                        <div class="col-xs-3 text-center" style="padding:0;height:100px;line-height:100px;">
                            <img src="app/core/styles/img/exam_result.png" />
                        </div>
                        <div class="col-xs-4" style="margin:10px 0;padding-top:10px;padding-bottom:0px;height:90px;line-height:100px;border-left:1px solid #ccc;">
                            <h4 class="list-group-item-heading" style="font-size:14px;">
                                掌握率
                            </h4>
                            <p class="list-group-item-text text-center" style="border:1px solid #f60;font-size:18px;font-weight:bold;height:50px;line-height:50px;width:50px;">
                                {x2;eval: echo $allright/$allnumber*100}%
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
                            <p class="list-group-item-text text-center" style="border:1px solid #f60;font-size:18px;font-weight:bold;height:50px;line-height:50px;width:50px;">
                                {x2;if:$sessionvars['examsessiontime'] >= 60}{x2;if:$sessionvars['examsessiontime']%60}{x2;eval: echo intval($sessionvars['examsessiontime']/60)+1}{x2;else}{x2;eval: echo intval($sessionvars['examsessiontime']/60)}{x2;endif}分钟{x2;else}{x2;$sessionvars['examsessiontime']}秒{x2;endif}
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
                 -->
			</div>
		</div>

		{x2;include:footer}
		{x2;if:!$userhash}
    </div>
</div>
</body>
</html>
{x2;endif}