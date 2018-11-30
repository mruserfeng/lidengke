<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>积云市场管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="{{asset('Cloud')}}/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{{asset('Cloud')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('Cloud')}}/js/global.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('Cloud')}}/css/page.css">
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href=""><img src="{{asset('Cloud')}}/images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul class="navRight">
    <li class="M noLeft">
      <a href="JavaScript:void(0);">您好,
        @if(Session::has('userinfo'))
          {{Session::get('userinfo')['username']}}
        @endif
    </a>
   <!--   <div class="drop mUser">
      <a href="#">编辑我的个人资料</a>
      <a href="#">设置云账户</a>
     </div> -->
    </li>
    <li class="noRight"><a href="{{url('login_out')}}">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="{{url('index')}}"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
   <ul>
  <li><a href="{{url('admin')}}"><i class="productCat"></i><em>管理员管理</em></a></li>
 </ul>
  <ul>
      <li id="parent"><a href="javascript:void(0)"><i class="articleCat"></i><em>组织结构</em></a>
      <span id="hid">0</span>
      </li>
      <ul id="getinfo" style="display: none">
          <li><a href="{{url('area')}}"><i class="articleCat"></i><em>区域管理</em></a></li>
          <li><a href="{{url('major')}}"><i class="articleCat"></i><em>总监管理</em></a></li>
          <li><a href="{{url('manager')}}"><i class="articleCat"></i><em>区域经理管理</em></a></li>
          <li><a href="{{url('xb')}}"><i class="articleCat"></i><em>县办管理</em></a></li>
          <li><a href="{{url('zb')}}"><i class="articleCat"></i><em>招办管理</em></a></li>
          <li><a href="{{url('zsry')}}"><i class="articleCat"></i><em>招生人员管理</em></a></li>
      </ul>
 </ul>

   <ul class="bot">
  <li><a href="{{url('wenzhang')}}"><i class="backup"></i><em>文章管理</em></a></li>
       <li><a href="{{url('xinwen')}}"><i class="backup"></i><em>新闻管理</em></a></li>
       <li><a href="{{url('zhengce')}}"><i class="backup"></i><em>政策管理</em></a></li>
 </ul>
  <ul class="bot">
      <li><a href="{{url('student')}}"><i class="backup"></i><em>意向学生管理</em></a></li>
  </ul>
</div></div>
<div id="urHere">积云教育管理中心<b>></b><strong>网站管理员</strong> </div>
@yield('content')
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 北京优思安科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
 </div>
<script>
   window.onload = function (){
        //点击显示
        document.getElementById('parent').onclick=function () {
            if(document.getElementById('getinfo').style.display=='none'){
                document.getElementById('getinfo').style.display='block';
            }else{
                document.getElementById('getinfo').style.display='none';
            }
        }

   }

</script>
<!-- <script src="http://www.mycodes.net/js/tongji.js"></script>
<script src="http://www.mycodes.net/js/youxia.js" type="text/javascript"></script> -->

</body>
</html>