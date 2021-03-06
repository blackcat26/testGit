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
        //增加微信学情报告登录判断，原本的仅为else部分
        if($this->ev->get('wxreport'))
		{
            //此时是从微信学情报告处进入系统，并进行注册操作
            if($this->ev->get('userregister'))
            {
                $fob = array('admin','管理员','站长');
                $args = $this->ev->get('args');
                $defaultgroup = $this->user->getDefaultGroup();
                if(!$defaultgroup['groupid'] || !trim($args['username']))
                {
                    $message = array(
                        'statusCode' => 300,
                        "message" => "用户不能注册"
                    );
                    exit(json_encode($message));
                }
                $username = $args['username'];
                foreach($fob as $f)
                {
                    if(strpos($username,$f) !== false)
                    {
                        $message = array(
                            'statusCode' => 300,
                            'errorinput' => 'args[username]',
                            "message" => "用户已经存在"
                        );
                        exit(json_encode($message));
                    }
                }
                $user = $this->user->getUserByUserName($username);
                if($user)
                {
                    $message = array(
                        'statusCode' => 300,
                        'errorinput' => 'args[username]',
                        "message" => "用户已经存在"
                    );
                    exit(json_encode($message));
                }
                $email = $args['useremail'];
                $user = $this->user->getUserByEmail($email);
                if($user)
                {
                    $message = array(
                        'statusCode' => 300,
                        'errorinput' => 'args[username]',
                        "message" => "邮箱已经被注册"
                    );
                    exit(json_encode($message));
                }
                $id = $this->user->insertUser(array('username' => $username,'usergroupid' => $defaultgroup['groupid'],'userpassword' => md5($args['userpassword']),'useremail' => $email));
                $this->session->setSessionUser(array('sessionuserid'=>$id,'sessionpassword'=>md5($args['userpassword']),'sessionip'=>$this->ev->getClientIp(),'sessiongroupid'=>$defaultgroup['groupid'],'sessionlogintime'=>TIME,'sessionusername'=>$username));

                $message = array(
                    'statusCode' => 200,
                    "message" => "操作成功",
                    "callbackType" => 'forward',
                    "forwardUrl" => "index.php?exam-phone"
                );
                exit(json_encode($message));
            }
            else
            {
                //此时是从微信学情报告入口进入登录界面后再进入注册界面的阶段，设置wxreport=3的参数，告知注册界面
                $this->tpl->assign('wxreport',3);
                $this->tpl->display('register');
            }
		}
		else
		{
            if($this->ev->get('userregister'))
            {
                $fob = array('admin','管理员','站长');
                $args = $this->ev->get('args');
                $defaultgroup = $this->user->getDefaultGroup();
                if(!$defaultgroup['groupid'] || !trim($args['username']))
                {
                    $message = array(
                        'statusCode' => 300,
                        "message" => "用户不能注册"
                    );
                    exit(json_encode($message));
                }
                $username = $args['username'];
                foreach($fob as $f)
                {
                    if(strpos($username,$f) !== false)
                    {
                        $message = array(
                            'statusCode' => 300,
                            'errorinput' => 'args[username]',
                            "message" => "用户已经存在"
                        );
                        exit(json_encode($message));
                    }
                }
                $user = $this->user->getUserByUserName($username);
                if($user)
                {
                    $message = array(
                        'statusCode' => 300,
                        'errorinput' => 'args[username]',
                        "message" => "用户已经存在"
                    );
                    exit(json_encode($message));
                }
                $email = $args['useremail'];
                $user = $this->user->getUserByEmail($email);
                if($user)
                {
                    $message = array(
                        'statusCode' => 300,
                        'errorinput' => 'args[username]',
                        "message" => "邮箱已经被注册"
                    );
                    exit(json_encode($message));
                }
                $id = $this->user->insertUser(array('username' => $username,'usergroupid' => $defaultgroup['groupid'],'userpassword' => md5($args['userpassword']),'useremail' => $email));
                $this->session->setSessionUser(array('sessionuserid'=>$id,'sessionpassword'=>md5($args['userpassword']),'sessionip'=>$this->ev->getClientIp(),'sessiongroupid'=>$defaultgroup['groupid'],'sessionlogintime'=>TIME,'sessionusername'=>$username));
                $message = array(
                    'statusCode' => 200,
                    "message" => "操作成功",
                    "callbackType" => 'forward',
                    "forwardUrl" => "index.php?exam-phone"
                );
                exit(json_encode($message));
            }
            else
            {
                $this->tpl->display('register');
            }
		}
	}
}


?>
