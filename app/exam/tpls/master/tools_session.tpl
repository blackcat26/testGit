{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
				{x2;include:menu}
			</div>
			<div class="col-xs-10" id="datacontent">
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?{x2;$_app}-master">{x2;$apps[$_app]['appname']}</a></li>
							<li class="active">批量删除测评记录</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						批量删除测评记录
					</h4>
					<form action="index.php?exam-master-tools-clearouttimeexamsession" method="post" id="qstool">
						<table class="table">
							<tr>
								<td width="300">
									会话时间（将删除早于这个时间的会话）：
								</td>
								<td>
									<input class="datetimepicker form-control" data-link-format="yyyy-mm-dd" data-date="" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="4" id="stime" value="{x2;$search['stime']}"/>
								</td>
								<td>
									<button class="btn btn-primary" type="submit">删除</button>
									<input type="hidden" value="1" name="search[argsmodel]" />
								</td>
								<td colspan="4"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{x2;include:footer}
</body>
</html>