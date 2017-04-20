<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
	'simgthunbwidth' => 150,//封面小图宽度
	'simgthunbhieght' => 150,//封面小图高度
	'limgthunbwidth' => 300,//封面大图宽度
	'limgthunbhieght' => 300,//封面大图高度
	'public' => '/static/', //系统样式地址
	'systemname' => '***系统',
	'notrolenav' =>['Index/index','Common/updatepwd'],
	'nav' =>[
		'1000' => ['订单管理','Orderinfo',true,[
			'1001' => ['订单列表','Order/index',true,[
				'10011' => ['添加','Order/add',false],
				'10012' => ['修改','Order/edit',false],
				'10013' => ['删除','Order/delete',false],
			]],
			'1002' => ['发货管理','Order/collect',true,[
				'10021' => ['添加','Article/add',false],
				'10022' => ['修改','Article/edit',false],
				'10023' => ['删除','Article/delete',false],
			]],
		],true,'si-notebook'],
		'2000' => ['网站数据','Webdata',true,[
			'2001' => ['文章管理','Article/index',true,[
				'20011' => ['添加','Article/add',false],
				'20012' => ['修改','Article/edit',false],
				'20013' => ['删除','Article/delete',false],
				'20014' => ['更改状态','Article/check',false],
			]],
			'2002' => ['商品管理','Product/index',true,[
				'20021' => ['添加','Product/add',false],
				'20022' => ['修改','Product/edit',false],
				'20023' => ['删除','Product/delete',false],
				'20024' => ['更改状态','Product/check',false],
			]],
		],true,'si-docs'],
		'3000' => ['系统设置','System',true,[
			'3001' => ['页面设置','Pagesetting/index',true,[
				'30011' => ['添加','Pagesetting/add',false],
				'30012' => ['修改','Pagesetting/edit',false],
				'30013' => ['删除','Pagesetting/delete',false],
				'30014' => ['单条设置内容编辑','Pagesetting/modifyvalue',false],
				'30015' => ['多条设置列表','Pagesetting/modifylist',false],
				'30016' => ['多条设置内容编辑','Pagesetting/modifylistvalue',false],
				'30017' => ['多条设置内容排序','Pagesetting/modifylistupdatesort',false],
				'30018' => ['多条设置数据删除','Pagesetting/modifylistvalue',false],
			]],
			'3002' => ['地区设置','Area/index',true,[
				'30021' => ['添加','Area/add',false],
				'30012' => ['修改','Area/edit',false],
				'30013' => ['删除','Area/delete',false],
			]],
		],true,'si-grid'],
		'4000' => ['微信功能','Weixin',true,[
			'4001' => ['账号设置','Wxapi/index',true,[
				'40011' => ['添加','Wxapi/add',false],
				'40012' => ['修改','Wxapi/edit',false],
				'40013' => ['删除','Wxapi/delete',false]
			]],
			'4002' => ['自动消息回复','Wxreply/index',true,[
				'40021' => ['添加','Wxreply/add',false],
				'40022' => ['修改','Wxreply/edit',false],
				'40023' => ['删除','Wxreply/delete',false]
			]],
		],true,'si-note'],
		'5000' => ['管理员','Master',true,[
			'5001' => ['角色管理','Role/index',true,[
				'50011' => ['添加/修改','Role/modify',false],
				'50012' => ['分配角色','Role/modifyrole',false],
				'50013' => ['删除','Role/delete',false],
			]],
			'5002' => ['管理员列表','User/index',true,[
				'50021' => ['添加','User/add',false],
				'50022' => ['修改','User/edit',false],
				'50023' => ['删除','User/delete',false],
				'50024' => ['更改状态','User/check',false],
			]],
		],true,'si-user'],
		'6000' => ['会员管理','Memberinfo',true,[
			'6001' => ['会员信息','Member/index',true,[
				'60011' => ['收货地址','Member/address',false],
				'60012' => ['删除','Member/delete',false],
			]],
			/*'6002' => ['收货地址','Address/index',true,[
				'60021' => ['添加','Address/add',false],
				'60022' => ['修改','Address/edit',false],
				'60023' => ['删除','Address/delete',false],
			]],*/
		],true,'si-users'],
	],
	'pay_status' => [
		['id'=>1,'status'=>'未支付'],
		['id'=>2,'status'=>'已支付']
	],//支付状态
	'ship_status' => [
		['id' => 1, 'status' => '待发货'],
		['id' => 2, 'status' => '待收货'],
		['id' => 3, 'status' => '已收货'],
		['id' => 4, 'status' => '待评价'],
		['id' => 5, 'status' => '退货/售后'],
	],//发货状态
	'member_status' => [
		['id'=>1,'status'=>'正常'],
		['id'=>2,'status'=>'锁定'],
		['id'=>3,'status'=>'冻结']
	],//支付状态
	'wx_type' => [
		['id'=>1,'status'=>'未认证订阅号'],
		['id'=>2,'status'=>'微信认证订阅号'],
		['id'=>3,'status'=>'未认证服务号'],
		['id'=>4,'status'=>'微信认证服务号']
	],//支付状态
	'wx_api' => [
		'appId'  => 'wx7b739a344a69a410',
		'appSecret' => '9296286bb73ac0391d2eaf2b668c668a',
		'getAccessToken'  => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s', //获取access_token的api
		'getJsApiTicket'  => 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=%s&type=jsapi', // 获取jsapi_ticket的api
	]
];

