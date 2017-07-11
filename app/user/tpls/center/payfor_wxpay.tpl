{x2;include:header}
<body style="background-color:#fff;">
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
	    <div style="margin-top:35px;">
            <div class="main" style="border:1px solid #ccc;">
                <div class="col-xs-2" style="padding:0;margin-bottom:0px;">
                    {x2;include:menu}
                </div>
                <div class="col-xs-10" id="datacontent" style="padding:0;margin:0;">
                    <!--<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
                        <div class="col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="index.php">首页</a></li>
                                <li><a href="index.php?{x2;$_app}-app">用户中心</a></li>
                                <li><a href="index.php?{x2;$_app}-center-payfor">积分充值</a></li>
                                <li class="active">微信支付</li>
                            </ol>
                        </div>
                    </div>-->
                    <div class="box itembox" style="padding:0;margin:0;border-left:1px solid #ccc;">
                        <h4 style="padding-left:1em;margin:0;border-bottom:1px solid #ccc;line-height:62px;">微信支付</h4>
                        <div style="padding:12px 38px 48px;min-height:526px;">
                            <h5>订单号：{x2;$order['ordersn']}</h5>
                            <div style="margin-top:100px;">
                                {x2;if:$order['orderstatus'] == 2}
                                <p class="text-center">
                                    此订单已经成功支付！<br />
                                    <a class="btn btn-success" href="index.php?user-center-payfor-orderdetail&ordersn={x2;$order['ordersn']}">查看此订单</a>
                                    <a class="btn btn-primary" href="index.php?user-center-payfor">返回订单列表</a>
                                </p>
                                {x2;else}
                                <p class="text-center">
                                    {x2;if:$order['orderstatus'] == 1}
                                        {x2;if:$result['code_url']}
                                        <img src="index.php?core-api-index-qrcode&data={x2;eval: echo urlencode($result['code_url']);}">
                                        <br />
                                        请使用手机打开微信，选择扫一扫，扫描上方二维码即可进行支付。
                                        <br />
                                        <a class="btn btn-success" href="index.php?user-center-payfor-wxpay&ordersn={x2;$order['ordersn']}" target="_blank">查看是否成功支付</a>
                                        <a class="btn btn-primary" href="index.php?user-center-payfor-orderdetail&ordersn={x2;$order['ordersn']}">使用其他方式支付</a>
                                        {x2;else}
                                        出现错误，错误原因是{x2;$result['err_code_des']}。
                                        <br />
                                        <a class="btn btn-success" href="index.php?user-center-payfor-orderdetail&ordersn={x2;$order['ordersn']}">查看此订单</a>
                                        <a class="btn btn-primary" href="index.php?user-center-payfor">返回订单列表</a>
                                        {x2;endif}
                                    {x2;else}
                                        <a class="btn">{x2;$orderstatus[$order['orderstatus']]}</a>
                                    {x2;endif}
                                </p>
                                {x2;endif}
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
	</div>
</div>
{x2;include:footer}
</body>
</html>