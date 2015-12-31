<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
    Whoareyou V1.0
    @desc 后台界面
    @author Rongx
    @since  20150303 
-->
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>内容管理</title>
    <link rel="stylesheet" href="__PUBLIC__/css/pintuer.css">
    <link rel="stylesheet" href="__PUBLIC__/css/admin.css">
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/pintuer.js"></script>
    <script src="__PUBLIC__/js/respond.js"></script>
    <script src="__PUBLIC__/js/admin.js"></script>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="__PUBLIC__/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="/Blog/">前台首页</a>
                <a class="button button-little bg-yellow" href="/Blog/index.php/Admin/Login">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="/Blog/index.php/Admin/" class="icon-home"> 开始</a>
                    <ul>
                    <li><a href="/Blog/index.php/Admin/Index/system">系统设置</a></li>
                    <li><a href="/Blog/index.php/Admin/Index/content">内容管理</a></li>
                    </ul>
                </li>
                <li><a href="/Blog/index.php/Admin/Index/system" class="icon-cog"> 系统</a>
            	    <ul>
                        <li><a href="#">全局设置</a></li>
                        <li class="active"><a href="#">系统设置</a></li>
                    </ul>
                </li>
                <li class="active"><a href="/Blog/index.php/Admin/Index/content" class="icon-file-text"> 内容</a>
					<ul>
                        <li><a href="#">添加内容</a></li>
                        <li class="active"><a href="#">内容管理</a>
                        </li><li><a href="#">分类设置</a></li>
                        <li><a href="#">链接管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，admin，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="/Blog/index.php/Admin/" class="icon-home"> 开始</a></li>
                <li><a href="/Blog/index.php/Admin/Index/content">内容</a></li>
                <li>内容管理</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
            <input type="button" class="button button-small border-green" value="添加文章" />
            <input type="button" class="button button-small border-yellow" value="批量删除" />
            <input type="button" class="button button-small border-blue" value="回收站" />
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">分类</th>
                <th width="*">名称</th>
                <th width="100">时间</th>
                <th width="100">操作</th>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="id" value="1" />
                </td>
                <td>起步</td>
                <td>下载拼图框架</td>
                <td>2014-10-1</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="id" value="2" />
                </td>
                <td>起步</td>
                <td>框架包含的文件</td>
                <td>2014-9-20</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
                    <tr>
                <td>
                    <input type="checkbox" name="id" value="3" />
                </td>
                <td>起步</td>
                <td>下载拼图框架</td>
                <td>2014-10-1</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="id" value="4" />
                </td>
                <td>起步</td>
                <td>框架包含的文件</td>
                <td>2014-9-20</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>        <tr>
                <td>
                    <input type="checkbox" name="id" value="5" />
                </td>
                <td>起步</td>
                <td>下载拼图框架</td>
                <td>2014-10-1</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="id" value="6" />
                </td>
                <td>起步</td>
                <td>框架包含的文件</td>
                <td>2014-9-20</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>        <tr>
                <td>
                    <input type="checkbox" name="id" value="7" />
                </td>
                <td>起步</td>
                <td>下载拼图框架</td>
                <td>2014-10-1</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="id" value="8" />
                </td>
                <td>起步</td>
                <td>框架包含的文件</td>
                <td>2014-9-20</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>        <tr>
                <td>
                    <input type="checkbox" name="id" value="9" />
                </td>
                <td>起步</td>
                <td>下载拼图框架</td>
                <td>2014-10-1</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="id" value="10" />
                </td>
                <td>起步</td>
                <td>框架包含的文件</td>
                <td>2014-9-20</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>        <tr>
                <td>
                    <input type="checkbox" name="id" value="11" />
                </td>
                <td>起步</td>
                <td>下载拼图框架</td>
                <td>2014-10-1</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="id" value="12" />
                </td>
                <td>起步</td>
                <td>框架包含的文件</td>
                <td>2014-9-20</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a>
                    <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                </td>
            </tr>
        </table>
        <div class="panel-foot text-center">
            <ul class="pagination"><li><a href="#">上一页</a></li></ul>
            <ul class="pagination pagination-group">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
            <ul class="pagination"><li><a href="#">下一页</a></li></ul>
        </div>
    </div>
    </form>
    <br/>
</div>

</body>
</html>