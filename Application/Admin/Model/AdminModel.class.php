<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
    protected $_validate = array(
        array('nickname','require','请输入用户名'),
        array('nickname', '', '用户名已经存在', 0, 'unique', 1),
        array('password','require','请输入密码'),
        array('passwords','require','请输入确认密码'),
        array('passwords','password','两次密码不一致',1,'confirm'),
        array('email','require','请输入邮箱'),
        array('email', 'email', '邮箱格式不正确'),
        array('email', '', '邮箱已使用', 0, 'unique', 1),
    );
    protected $_auto = array(
        array('password','md5',1,'function'),
        array('register_time','time',1,'function'),
        array('register_ip','get_client_ip',1,'function'),
    );
}