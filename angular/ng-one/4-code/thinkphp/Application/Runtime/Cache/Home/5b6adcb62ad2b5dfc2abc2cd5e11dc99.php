<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>用户登陆</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/AngularJS/01day/4-code/thinkphp/Public/css/init.css" />
    <link rel="stylesheet" type="text/css" href="/AngularJS/01day/4-code/thinkphp/Public/css/login.css" />
</head>
<body>
    <!--<div id="bg"><img src="./Images/wallpaper.jpg" /></div>-->
    <div id="login">
        <div class="logo"><a href="index.html"></a></div>
        <div class="box">
            <div class="pics">
                <div class="tit">发现更多精彩!</div>
                <div class="pic1"><a href="#"><img src="/AngularJS/01day/4-code/thinkphp/Public/upload/log1.jpg" /></a></div>
                <div class="pic2"><a href="#"><img src="/AngularJS/01day/4-code/thinkphp/Public/upload/log2.jpg" /></a></div>
                <div class="pic3"><a href="#"><img src="/AngularJS/01day/4-code/thinkphp/Public/upload/log3.jpg" /></a></div>
                <div class="pic4"><a href="#"><img src="/AngularJS/01day/4-code/thinkphp/Public/upload/log4.jpg" /></a></div>
            </div>
            <div class="logform">
                <form method="post">
                    <h2>用户登陆</h2>
                    <table>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="name" placeholder="微博账号/QQ号码/电子邮箱" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="password" name="password" placeholder="密码" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="sub" value="登 陆" />
                            </td>
                            <td align="center">
                                <input type="checkbox" class="chk" name="check" />下次自动登陆
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)" class="qqlog"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="sinalog"></a>
                            </td>
                        </tr>
                    </table>
                    <div class="reg">
                        <a href="javascript:void(0)">忘记密码？</a>|
                        <a href="register.html">注册新账号</a>|
                        <a href="javascript:void(0)">意见反聩</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <div id="footer">
        <div class="copy">
            <p>网站开发测试中...</p>
            <p>版权所有 爱旅行 www.ailvxing.cc</p>
        </div>
    </div>
</body>
</html>