{x2;if:!$userhash}
{x2;include:header}
<body>
<div id="content">
	<div class="pages" id="basic">
{x2;endif}
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

			{x2;tree:$basics['data'],basic,bid}
			<div style="clear:both;overflow:hidden;margin-top:2rem">
				<div class="col-xs-12">
					<div style="clear:both;overflow:hidden;">
                            {x2;if:$data['openbasics'][v:basic['basicid']]}
					        <a href="index.php?exam-phone-basics-detail&basicid={x2;v:basic['basicid']}" class="ajax" data-page="basic" data-target="basic">
                            {x2;elseif:v:basic['basicdemo']}
                            <a href="index.php?exam-phone-basics-openit&basicid={x2;v:basic['basicid']}" class="ajax" data-page="exam" data-target="exam">
                            {x2;endif}
                            <div class="col-xs-5" style="padding-left:0;background:#e4e4e4;">
                                <img src="{x2;if:v:basic['basicthumb']}{x2;v:basic['basicthumb']}{x2;else}app/exam/styles/image/paper.png{x2;endif}" style="width:10rem;height:10rem;"/>
                            </div>
                            <div class="col-xs-7" style="padding:0.2rem;background:#e4e4e4;height:10rem">
                                <div class="text-left" style="padding:0.2rem;">
                                    <h5 style="padding-left:0.8rem;overflow:hidden;max-height:2rem;line-height:1.4;font-size:18px;margin-bottom:0;">
                                        {x2;v:basic['basic']}
                                        </br>
                                        {x2;if:$data['openbasics'][v:basic['basicid']]}
                                        <button type="button" class="btn btn-success btn-sm" style="position:absolute;bottom:1rem;left:1rem;width:7rem;">已开通</button>
                                        {x2;elseif:v:basic['basicdemo']}
                                        <button type="button" class="btn btn-primary btn-sm" style="position:absolute;bottom:1rem;left:1rem;width:7rem;">立即开通</button>
                                        {x2;endif}
                                    </h5>
                                    <p style="padding-left:0.8rem;overflow:hidden;max-height:2rem;line-height:1.4;font-size:18px;">{x2;if:v:basic['basicdescribe']}（{x2;v:basic['basicdescribe']}）{x2;else}{x2;endif}</p>
                                </div>
                            </div>
						</a>
					</div>
				</div>
			</div>
			{x2;endtree}
			{x2;if:$basics['pages']}
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
				<div class="col-xs-12" style="padding-left:0px;">
					<ul class="pagination pull-right">
						{x2;$basics['pages']}
					</ul>
				</div>
			</div>
			{x2;endif}
		</div>
		{x2;include:footer}
		{x2;if:!$userhash}
    </div>
</div>
</body>
</html>
{x2;endif}