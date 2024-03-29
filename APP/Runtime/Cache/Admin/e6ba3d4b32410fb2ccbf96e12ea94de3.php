<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>用户注册页面</title>


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->

<link href="css/normalize.css" rel="stylesheet"/>
<link href="css/jquery-ui.css" rel="stylesheet"/>
<link href="css/jquery.idealforms.min.css" rel="stylesheet" media="screen"/>

<style type="text/css">
body{font:normal 15px/1.5 Arial, Helvetica, Free Sans, sans-serif;color: #222;background:url(pattern.png);overflow-y:scroll;padding:60px 0 0 0;}
#my-form{width:755px;margin:0 auto;border:1px solid #ccc;padding:3em;border-radius:3px;box-shadow:0 0 2px rgba(0,0,0,.2);}
#comments{width:350px;height:100px;}
</style>

</head>
<body>


<div class="row">

  <div class="eightcol last">

    <!-- Begin Form -->

    <form id="my-form">

        <section name="第一步">

          <div><label>用户名:</label><input id="username" name="username" type="text"/></div>
          <div><label>密码:</label><input id="pass" name="password" type="password"/></div>
          <div><label>邮箱:</label><input id="email" name="email" data-ideal="required email" type="email"/></div>
          <div><label>出生日期:</label><input name="date" class="datepicker" data-ideal="date" type="text" placeholder="月/日/年"/></div>
          <div><label>上传头像:</label><input id="file" name="file" multiple type="file"/></div>
          <div><label>个人主页:</label><input name="website" data-ideal="url" type="text"/></div>
        </section>

        <section name="第二步">
          <div id="languages">
            <label>语言:</label>
            <label><input type="checkbox" name="langs[]" value="English"/>英文</label>
            <label><input type="checkbox" name="langs[]" value="Chinese"/>中文</label>
            <label><input type="checkbox" name="langs[]" value="Spanish"/>西班牙文</label>
            <label><input type="checkbox" name="langs[]" value="French"/>法文</label>
          </div>
          <div><label>精通几门:</label>
            <label><input type="radio" name="radio" checked/>1</label>
            <label><input type="radio" name="radio"/>2</label>
            <label><input type="radio" name="radio"/>3</label>
            <label><input type="radio" name="radio"/>4</label>
          </div>
        </section>

        <section name="第三步">
          <div><label>电话:</label><input type="tel" name="phone" data-ideal="phone"/></div>
          <div><label>国籍:</label>
          <select id="states" name="states">
            <option value="default">&ndash; 选择国籍 &ndash;</option>
            <option value="AL">阿拉伯</option>
            <option value="AK">中国</option>
            <option value="AZ">美国</option>
            <option value="AR">法国</option>
            <option value="CA">英国</option>
            <option value="CO">德国</option>
            <option value="CT">西班牙</option>
            <option value="DE">俄罗斯</option>
          </select>
        </div>
        <div><label>邮编:</label><input type="text" name="zip" data-ideal="zip"/></div>
        <div><label>备注:</label><textarea id="comments" name="comments"></textarea></div>
      </section>

      <div><hr/></div>

      <div>
        <button type="submit">提交</button>
        <button id="reset" type="button">重置</button>
      </div>

    </form>

    <!-- End Form -->

  </div>

</div>


<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.idealforms.js"></script>
<script type="text/javascript">
var options = {

	onFail: function(){
		alert( $myform.getInvalid().length +' invalid fields.' )
	},

	inputs: {
		'password': {
			filters: 'required pass',
		},
		'username': {
			filters: 'required username',
			data: {
			//ajax: { url:'validate.php' }
			}
		},
		'file': {
			filters: 'extension',
			data: { extension: ['jpg'] }
		},
		'comments': {
			filters: 'min max',
			data: { min: 50, max: 200 }
		},
		'states': {
			filters: 'exclude',
			data: { exclude: ['default'] },
			errors : {
				exclude: '选择国籍.'
			}
		},
		'langs[]': {
			filters: 'min max',
			data: { min: 2, max: 3 },
			errors: {
				min: 'Check at least <strong>2</strong> options.',
				max: 'No more than <strong>3</strong> options allowed.'
			}
		}
	}
	
};

var $myform = $('#my-form').idealforms(options).data('idealforms');

$('#reset').click(function(){
	$myform.reset().fresh().focusFirst()
});

$myform.focusFirst();
</script>
<div style="text-align:center;">
<p>来源：<a href="http://www.mycodes.net/" title="源码之家" target="_blank">源码之家</a></p>
</div>
</body>
</html>