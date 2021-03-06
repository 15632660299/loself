<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>LoseLf后台管理系统</title>
       <meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <link rel="stylesheet" href="{{ asset('adminframe/admin/welcome/css/amazeui.min.css') }}"/>
	    <link rel="stylesheet" href="{{ asset('adminframe/admin/welcome/css/welcome.css') }}"/>
		<!-- basic styles -->

		<link href="{{ asset('adminframe/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
		<link rel="stylesheet" href="{{ asset('adminframe/assets/css/font-awesome.min.css') }}" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="{{ asset('adminframe/assets/css/font-awesome-ie7.min.css') }}" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!--  <link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext' rel='stylesheet'>-->

		<!-- ace styles -->

		<link rel="stylesheet" href="{{ asset('adminframe/assets/css/ace.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('adminframe/assets/css/ace-rtl.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('adminframe/assets/css/ace-skins.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('adminframe/assets/css/jquery-ui-1.10.3.full.min.css') }}" />
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="{{ asset('adminframe/assets/css/ace-ie.min.css') }}" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="{{ asset('adminframe/assets/js/ace-extra.min.js') }}"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="{{ asset('adminframe/assets/js/html5shiv.js') }}"></script>
		<script src="{{ asset('adminframe/assets/js/respond.min.js') }}"></script>
		<![endif]-->
	</head>

	<body>


		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							LoseLf后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					 <ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{ asset('adminframe/assets/avatars/user.jpg') }}" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎,{{ Session::get('username') }}</small>

								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								{{--<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>
--}}
								<li>
									<a href="{{ url('user/loginout') }}">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>
					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>
							<span class="btn btn-info"></span>
							<span class="btn btn-warning"></span>
							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->
                      {!!session::get('usernav')  !!}
                   {{-- <ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">  </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								--}}{{--@foreach($tag_list[$k] as $value)
								<li>
									<a href="{{ $value['url']}}">
										<i class="icon-double-angle-right"></i>
										{{ $value['name']}}
									</a>
								</li>
								@endforeach
--}}{{--
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->--}}

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">系统</a>
							</li>

							<li>
								<a href="#">列表</a>
							</li>
							<li class="active"></li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<!--  <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>-->
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						 <div class="page-header">
							<!--  <h1>
								Tables
								<small>
									<i class="icon-double-angle-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>-->
						</div> <!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->



							@yield('content')


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->


		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{ asset('adminframe/assets/js/jquery-2.0.3.min.js') }}'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='{{ asset('adminframe/assets/js/jquery-1.10.2.min.js') }}'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='{{ asset('adminframe/assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
		</script>
		<script src="{{ asset('adminframe/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('adminframe/assets/js/typeahead-bs2.min.js') }}"></script>

		<!-- page specific plugin scripts -->

		<script src="{{ asset('adminframe/assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('adminframe/assets/js/jquery.dataTables.bootstrap.js') }}"></script>

		<!-- ace scripts -->

		<script src="{{ asset('adminframe/assets/js/ace-elements.min.js') }}"></script>
		<script src="{{ asset('adminframe/assets/js/ace.min.js') }}"></script>

		<!-- inline scripts related to this page -->
		<script src="{{ asset('adminframe/assets/js/jquery-ui-1.10.3.full.min.js') }}"></script>
		<script src="{{ asset('adminframe/assets/js/jquery.ui.touch-punch.min.js') }}"></script>
		@yield('js')
	</body>
</html>