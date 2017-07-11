<?php
/*
 * Created on 2016-5-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class action extends app
{
	public function display()
	{
		$action = $this->ev->url(3);
		if(!method_exists($this,$action))
		$action = "index";
		$this->$action();
		exit;
	}

	private function index()
	{
		$appid = 'user';
		$app = $this->G->make('apps','core')->getApp($appid);
		$this->tpl->assign('app',$app);

		//增加微信学情报告登录判断，原本的仅为else部分
        if($this->ev->get('wxreport'))
        {
            //此时是从微信学情报告处进入系统，并进行登录操作
            if($this->ev->get('userlogin'))
            {
                //此时进行登录操作，由于是从微信学情报告入口进行登录，登录页面会传递wxreport=2的参数进行告知
                $tmp = $this->session->getSessionValue();
                if(TIME - $tmp['sessionlasttime'] < 1)
                {
                    $message = array(
                        'statusCode' => 300,
                        "message" => "操作失败"
                    );
                    exit(json_encode($message));
                }
                $args = $this->ev->get('args');
                $user = $this->user->getUserByUserName($args['username']);
                if($user['userid'])
                {
                    //此时用户账号正确
                    if($user['userpassword'] == md5($args['userpassword']))
                    {
                        //此时登录验证成功，在设置完相应的session后，页面将跳转到学情报告界面
                        if($app['appsetting']['loginmodel'] == 1)
                            $this->session->offOnlineUser($user['userid']);
                        $this->session->setSessionUser(array('sessionuserid'=>$user['userid'],'sessionpassword'=>$user['userpassword'],'sessionip'=>$this->ev->getClientIp(),'sessiongroupid'=>$user['usergroupid'],'sessionlogintime'=>TIME,'sessionusername'=>$user['username']));

                        //微信判断部分
                        if($this->ev->get('wxreport')==2)
                        {
                            //此时一切正常，跳转到学情报告界面
                            exit(header("location:/wechat/report/report3.php"));
                        }
                        else
                        {
                            //从微信学情报告入口进入，但登录界面并未传递相应值，有异常
                            $message = array(
                                'statusCode' => 300,
                                "message" => "操作失败，发生异常"
                            );
                            exit(json_encode($message));
                        }
                    }
                    else
                    {
                        //此时账号密码不正确，操作失败，重新输入
                        $message = array(
                            'statusCode' => 300,
                            'errorinput' => 'args[username]',
                            "message" => "操作失败"
                        );
                        exit(json_encode($message));
                    }
                }
                else
                {
                    //此时用户账号不正确，操作失败，重新输入
                    $message = array(
                        'statusCode' => 300,
                        'errorinput' => 'args[username]',
                        "message" => "操作失败"
                    );
                    exit(json_encode($message));
                }
            }
            else
            {
                //此时是从微信学情报告入口进入登录界面的阶段，设置wxreport=1的参数，告知登录界面
                $this->tpl->assign('wxreport',1);
                $this->tpl->display('login');
            }
        }
        else
        {
            //此时是从其他入口进入系统
            if($this->ev->get('userlogin'))
            {
                $tmp = $this->session->getSessionValue();
                if(TIME - $tmp['sessionlasttime'] < 1)
                {
                    $message = array(
                        'statusCode' => 300,
                        "message" => "操作失败"
                    );
                    exit(json_encode($message));
                }
                $args = $this->ev->get('args');
                $user = $this->user->getUserByUserName($args['username']);
                if($user['userid'])
                {
                    if($user['userpassword'] == md5($args['userpassword']))
                    {
                        if($app['appsetting']['loginmodel'] == 1)
                        $this->session->offOnlineUser($user['userid']);
                        $this->session->setSessionUser(array('sessionuserid'=>$user['userid'],'sessionpassword'=>$user['userpassword'],'sessionip'=>$this->ev->getClientIp(),'sessiongroupid'=>$user['usergroupid'],'sessionlogintime'=>TIME,'sessionusername'=>$user['username']));
                        $message = array(
                            'statusCode' => 200,
                            "message" => "操作成功",
                            "callbackType" => 'forward',
                            "forwardUrl" => "index.php?exam-phone"
                        );
                        if($this->ev->get('userhash'))
                        exit(json_encode($message));
                        else
                        exit(header("location:{$message['forwardUrl']}"));
                    }
                    else
                    {
                        $message = array(
                            'statusCode' => 300,
                            'errorinput' => 'args[username]',
                            "message" => "操作失败"
                        );
                        exit(json_encode($message));
                    }
                }
                else
                {
                    $message = array(
                        'statusCode' => 300,
                        'errorinput' => 'args[username]',
                        "message" => "操作失败"
                    );
                    exit(json_encode($message));
                }
            }
            else
            {
                $this->tpl->display('login');
            }
        }
	}
}


?>
