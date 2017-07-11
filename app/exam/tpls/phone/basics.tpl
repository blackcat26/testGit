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
                {x2;$data['currentbasic']['basic']}
                <em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
            </h5>
            -->
            <h5 class="text-center">
                <a class="pull-left" onclick="javascript:$.goPage($('#exam'));"><img src="app/core/styles/img/logo_new2.png" style="width:10rem;height:3.2rem;"></a>
                <a class="pull-right glyphicon glyphicon-user ajax" style="font-size:1.4em;line-height:1.8em;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
                <div style="clear:both;"></div>
            </h5>
        </header>
        <div class="container-fluid" style="padding-bottom:30px;">
            <div>
                <div class="col-xs-12" style="padding:0.8rem 15px 0;">
                    <div class="text-center" style="margin-top:2.4rem;">
                        <a style="display:block;background-color:#ccc;" class="ajax text-center btn btn-default" href="index.php?exam-phone-exam" data-target="exams" data-page="exams">
                            <span class="glyphicon glyphicon-edit" style="color:#666;font-size:5rem;line-height:9rem;vertical-align:middle;padding-right:1rem;"></span>
                            <i style="color:#000;font-size:2.8rem;vertical-align:middle;font-style:normal;">开始测评</i>
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div>
                <div class="col-xs-12" style="padding:0.8rem 15px 0;">
                    <div class="text-center" style="margin-top:2.4rem;">
                        <a style="display:block;background-color:#ccc;" class="ajax text-center btn btn-default" href="index.php?exam-phone-history&ehtype=2" data-target="history" data-page="history">
                            <span class="glyphicon glyphicon-time" style="color:#666;font-size:5rem;line-height:9rem;vertical-align:middle;padding-right:1rem;"></span>
                            <i style="color:#000;font-size:2.8rem;vertical-align:middle;font-style:normal;">测评记录</i>
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            <!--
            <div>
                <div class="col-xs-12" style="padding:0.8rem 15px 0;">
                    <div class="text-center" style="margin-top:2.4rem;">
                        <a style="display:block;background-color:#ccc;" class="ajax text-center btn btn-default" href="index.php?exam-phone-basics-open" data-target="page2" data-page="page2">
                            <span class="glyphicon glyphicon-list-alt" style="color:#666;font-size:5rem;line-height:9rem;vertical-align:middle;padding-right:1rem;"></span>
                            <i style="color:#000;font-size:2.8rem;vertical-align:middle;font-style:normal;">成绩排名</i>
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            -->
        </div>


        <!--
        <h4 style="overflow:hidden;clear:both;padding-top:0.2rem;">
			<span class="pull-left" style="width:35%"><hr /></span>
			<span class="col-xs-4 text-center" style="width:30%;line-height:4rem;">学习考试</span>
			<span class="pull-right" style="width:35%"><hr /></span>
		</h4>
		<div class="container-fluid">
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
				{x2;if:!$data['currentbasic']['basicexam']['model'] || $data['currentbasic']['basicexam']['model'] == 1}
				<div class="col-xs-4">
					<a href="index.php?exam-phone-lesson" class="thumbnail ajax" style="border:0px;" data-target="lesson" data-page="lesson">
						<img src="app/core/styles/img/t1.png" alt="" width="100%">
					</a>
					<h5 class="text-center">课后练习</h5>
				</div>
				<div class="col-xs-4">
					<a href="index.php?exam-phone-exercise" class="thumbnail ajax" style="border:0px;" data-target="exercise" data-page="exercise">
						<img src="app/core/styles/img/t4.png" alt="" width="100%">
					</a>
					<h5 class="text-center">强化训练</h5>
				</div>
				<div class="col-xs-4">
					<a href="index.php?exam-phone-exampaper" class="thumbnail ajax" style="border:0px;" data-target="exampaper" data-page="exampaper">
						<img src="app/core/styles/img/t2.png" alt="" width="100%">
					</a>
					<h5 class="text-center">模拟考试</h5>
				</div>
				{x2;endif}
				{x2;if:!$data['currentbasic']['basicexam']['model'] || $data['currentbasic']['basicexam']['model'] == 2}
				<div class="col-xs-4">
					<a href="index.php?exam-phone-exam" class="thumbnail ajax" style="border:0px;" data-target="exams" data-page="exams">
						<img src="app/core/styles/img/t3.png" alt="" width="100%">
					</a>
					<h5 class="text-center">正式考试</h5>
				</div>
				{x2;endif}
			</div>
		</div>
		<h4 style="overflow:hidden;clear:both;padding-top:0.2rem;">
			<span class="pull-left" style="width:35%"><hr /></span>
			<span class="col-xs-4 text-center" style="width:30%;line-height:4rem;">改错复习</span>
			<span class="pull-right" style="width:35%"><hr /></span>
		</h4>
		<div class="container-fluid">
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;margin-bottom:0.5rem">
				<div class="col-xs-4">
					<a href="index.php?exam-phone-history" class="thumbnail ajax" style="border:0px;" data-target="history" data-page="history">
						<img src="app/core/styles/img/t5.png" alt="" width="100%">
					</a>
					<h5 class="text-center">考试记录</h5>
				</div>
				<div class="col-xs-4">
					<a href="index.php?exam-phone-favor" class="thumbnail ajax" style="border:0px;" data-target="favor" data-page="favor">
						<img src="app/core/styles/img/t6.png" alt="" width="100%">
					</a>
					<h5 class="text-center">习题收藏</h5>
				</div>
				<div class="col-xs-4">
					<a href="index.php?exam-phone-score" class="thumbnail ajax" style="border:0px;" data-target="scores" data-page="scores">
						<img src="app/core/styles/img/t8.png" alt="" width="100%">
					</a>
					<h5 class="text-center">成绩单</h5>
				</div>
			</div>
		</div>
		-->
		{x2;include:footer}
	{x2;if:!$userhash}
    </div>
</div>
</body>
</html>
{x2;endif}