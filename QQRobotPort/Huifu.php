<?php 


// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 快捷回复区 //----------------------- // //

	if(in_array($Message,$help)){						//帮助命令的快捷回复
        echo $help_ab;
        exit;
    }

	if(in_array($Message,$kuaid)){						//快递的快捷回复
        echo $kuaidi_ab;
        exit;
    }

	if($Message=="接口"){
		echo "本接口作者为：小雨(QQ:614422099)。\r\n接口版本： V1.2 免费版。\r\n官方网站：http://api.dingxiaoyu.com";
		exit;
    }
	
	if($Message=="logo"){
		echo "[img]http://im.z-robot.com/static/image/common/logo.png[/img]";
		exit;
    }
	
	if($Message=="内置命令"){
		echo "------------内置命令-------------\r\nTo          给好友发送消息\r\nToQ         给群发消息\r\n签名        更改签名\r\n昵称        更改昵称\r\n退群        退出群\r\n加群        加入群\r\n弹窗        给好友发送弹窗\r\n加好友      主动添加好友\r\n更新机器人信息 \r\n--------------------------\r\n以上为内置命令，你还可发生‘特殊命令’获取特殊命令！";
		exit;
    }
	
	if($Message=="特殊命令"){
		echo "------------特殊命令-------------\r\nT               群内T人\r\nInvite          邀请加入群\r\nBlacklist       黑名单\r\n状态            查询状态\r\n退群            退出群\r\n群信息          获取群信息\r\n版本信息        查询版本信息\r\n统计信息        查询统计信息\r\n清空加群队列 \r\n--------------------------\r\n以上为特殊命令，你还可发生‘内置命令’获取特殊命令！";
		exit;
    }
	
	if($Message=="状态" or $Message=="群信息" or $Message=="统计信息" or $Message=="版本信息" or $Message=="清空加群队列" or $Message=="更新机器人信息"){
		exit;
    }
