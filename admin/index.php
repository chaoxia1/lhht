<?php 
require_once '../include.php';
checkLogedin();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="styles/backstage.css">
</head>

<body>
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fr">中钞国鼎电商平台后台管理系统</h3>
    </div>
    <div class="operation_user clearfix">
       <!--   <div class="link fl"><a href="#">ÊÖïËØæ</a><span>&gt;&gt;</span><a href="#">ÂïÜÂìÅÁÆ°ÁêÜ</a><span>&gt;&gt;</span>ÂïÜÂìÅ‰øÆÊîπ</div>-->
        <div class="link fr">
            <b>你好
            <?php 
				if(isset($_SESSION['adminName'])){
					echo $_SESSION['adminName'];
				}elseif(isset($_COOKIE['adminName'])){
					echo $_COOKIE['adminName'];
				}
            ?>
            
            </b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="icon icon_i">主页</a><span></span><a href="#" class="icon icon_n">刷新</a><span></span><a href="doAdminAction.php?act=logout" class="icon icon_e">注销</a>
        </div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--Âè≥‰æßÂÜÖÂÆπ-->
            <div class="cont">
                <div class="title">操作界面</div>
            </div>
        </div>
        <!--Â∑¶‰æßÂàóË°®-->
        <div class="menu">
            <div class="cont">
                <div class="title">功能列表</div>
                <ul class="mList">
                    <li>
                        <h3 onclick="show('menu1','change1')"><span id="change1">+</span>产品</h3>
                        <dl id="menu1" style="display:none;">
                        	<dd><a href="addPro.php" target="mainFrame">添加产品</a></dd>
                            <dd><a href="listPro.php" target="mainFrame">产品查询</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu2','change2')" ><span id="change2">+</span>产品类别</h3>
                        <dl id="menu2" style="display:none;">
                        	<dd><a href="addCate.php" target="mainFrame">增加类别</a></dd>
                            <dd><a href="listCate.php" target="mainFrame">类别查询</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu3','change3')" ><span id="change3" >+</span>订单</h3>
                        <dl id="menu3" style="display:none;">
                            <dd><a href="#">订单修改</a></dd>
                            <dd><a href="#">订单查询</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu4','change4')" ><span id="change4">+</span>用户</h3>
                        <dl id="menu4" style="display:none;">
                        	<dd><a href="addUser.php" target="mainFrame">增加用户</a></dd>
                            <dd><a href="listUser.php" target="mainFrame">用户查询</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu5','change5')" ><span id="change5">+</span>管理员</h3>
                        <dl id="menu5" style="display:none;">
                        	<dd><a href="addAdmin.php" target="mainFrame">增加管理员</a></dd>
                            <dd><a href="listAdmin.php" target="mainFrame">管理员查询</a></dd>
                        </dl>
                    </li>
                    
                         <li>
                        <h3 onclick="show('menu6','change6')" ><span id="change6">+</span>产品图片</h3>
                        <dl id="menu6" style="display:none;">
                            <dd><a href="listProImages.php" target="mainFrame">产品图片查询</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    	function show(num,change){
	    		var menu=document.getElementById(num);
	    		var change=document.getElementById(change);
	    		if(change.innerHTML=="+"){
	    				change.innerHTML="-";
	        	}else{
						change.innerHTML="+";
	            }
    		   if(menu.style.display=='none'){
    	             menu.style.display='';
    		    }else{
    		         menu.style.display='none';
    		    }
        }
    </script>
</body>
</html>