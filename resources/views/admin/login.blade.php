<!DOCTYPE HTML>
<html>
<head>
    <title>Purple_loginform Website Template | Home :: w3layouts</title>
    <link href="{{ asset('adminframe/assets/css/loginstyle.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- -->
    <script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
    <script src="{{ asset('adminframe/assets/js/jquery.min.js') }}"></script>
    <script>$(document).ready(function(c) {
            $('.alert-close').on('click', function(c){
                $('.message').fadeOut('slow', function(c){
                    $('.message').remove();
                    alert('握草，你这是想敢杀子！！！！');
                });
            });
        });
    </script>
</head>
<body>
<!-- contact-form -->
<div class="message warning">
    <div class="inset">
        <div class="login-head">
            <h1>LOSELF 管理员登录</h1>
            <div class="alert-close"> </div>
        </div>
        <form action="{{url('user/login')}}" method="POST">
            <li>
                <input type="text" class="text" name="Username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"><a href="#" class=" icon user"></a>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </li>
            <div class="clear"> </div>
            <li>
                <input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> <a href="#" class="icon lock"></a>
            </li>
            <div class="clear"> </div>
            <div class="submit">
                <input type="submit"  value="登录" >
                <div class="clear">  </div>
            </div>

        </form>
    </div>
</div>
</div>
<div class="clear"> </div>
<!--- footer --->
<div class="footer">
    <p>Copyright &copy; 2017.</p>
</div>
</body>
</html>