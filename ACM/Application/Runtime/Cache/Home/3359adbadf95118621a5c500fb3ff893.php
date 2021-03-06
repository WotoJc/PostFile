<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>主页</title>
    <link rel="stylesheet" type="text/css" href="/sys/Public/Bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/sys/Public/Css/user.css" />

</head>
<!-- 成功模版 -->
<!-- <div class="form-group">
    <label for="passwordOld" class="col-sm-2 control-label">旧密码</label>
    <div class="col-sm-4 ">
        <div class="has-success has-feedback">
            <input type="password" class="form-control" id="passwordOld" name="passwordOld" maxlength="18">
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
        </div>
    </div>
</div> -->
<body>
    <nav class="navbar navbar-default navbar-fixed-top bg-white" style="background-color:#FFF;">
        <div class="container">
            <div class="navbar-header">
                <!-- <a class="navbar2-brand">
                    <img alt="Brand" src="/sys/Public/Images/ujn.jpg">
                    <img src="/sys/Public/Images/ujn.jpg" alt="brand" class="img-circle">
                </a> -->
                <p class="navbar-text navbar-left brand-left">
                    济南大学 ACM报名系统
                </p>
            </div>
        </div>
    </nav>
    <!-- 注册内容 -->
    <div class="container-fluid register-top">
        <form action="<?php echo U('User/doRegister');?>" method="post">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 re-box-shadow">
                    <div class="page-header">
                        <h3>账号信息</h3>
                    </div>
                    <div class="input-group row-space-small" id="input1">
                        <span class="input-group-addon">登陆账号</span>
                        <input type="text" class="form-control" placeholder="以字母开头的6-18个字符" aria-describedby="sizing-addon2" name="username" id="username">
                    </div>
                    <div class="input-group row-space-small" id="input2">
                        <span class="input-group-addon">登陆密码</span>
                        <input type="password" class="form-control" placeholder="6-20个字符" aria-describedby="sizing-addon2" name="password1" maxlength="20" id="password1">
                    </div>
                    <div class="input-group row-space-tiny">
                        <span class="input-group-addon" id="input3">确认密码</span>
                        <input type="password" class="form-control" placeholder="6-20个字符" aria-describedby="sizing-addon2" name="password2" maxlength="20" id="password2">
                    </div>
                    <div class="page-header">
                        <h3>个人信息</h3>
                    </div>
                    <div class="input-group row-space-small">
                        <span class="input-group-addon">姓名</span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon2" name="nickname" id="nickname">
                    </div>
                    <!-- <form role="form">
                        <div class="form-group">
                            <select class="form-control" name="institude" id="institude">
                                <option value="">选择学院</option>
                                <option value="文学院">文学院</option>
                                <option value="商学院">商学院</option>
                                <option value="信息学院">信息学院</option>
                                <option value="机械学院">机械学院</option>
                                <option value="数学学院">数学学院</option>
                            </select>
                        </div>
                    </form> -->
                    <div class="input-group row-space-small">
                        <span class="input-group-addon">学院</span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon2" name="institude" id="institude">
                    </div>
                    <div class="input-group row-space-small">
                        <span class="input-group-addon">年级</span>
                        <input type="text" class="form-control" placeholder="填写年份" aria-describedby="sizing-addon2" name="grade" id="grade">
                    </div>
                    <div class="input-group row-space-small">
                        <span class="input-group-addon">班级</span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon2" name="class" id="class">
                    </div>
                    <div class="control-group">
                        <div class="inline">
                            <label class="control-label label-inline" for="iframe">性别</label>
                            <label class="radio-inline" for="sex-0">
                            <input type="radio" name="sex" id="sex-0" value="1" >男
                        </label>
                            <label class="radio-inline" for="sex-1">
                            <input type="radio" name="sex" id="sex-1" value="0">女
                        </label>
                        </div>
                    </div>
                    <div class="input-group row-space-small">
                        <span class="input-group-addon">学号</span>
                        <input type="tel" class="form-control" id="number" placeholder="12位数字" aria-describedby="sizing-addon2" maxlength="12" name="number">
                    </div>
                    <div class="input-group row-space-small">
                        <span class="input-group-addon">联系电话</span>
                        <input type="tel" class="form-control" id="phonenumber" placeholder="" aria-describedby="sizing-addon2" name="phonenumber" maxlength="11">
                    </div>
                    <div class="input-group row-space-small">
                        <span class="input-group-addon">E-mail</span>
                        <input type="email" class="form-control" id="email" placeholder="" aria-describedby="sizing-addon2" name="email">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 pull-left">
                            <a href="<?php echo U('User/login');?>"><button type="button" class="btn btn-default">返回</button></a>
                        </div>
                        <div class="col-md-3 pull-right">
                            <button type="button" class="btn btn-success" id="register-btn">注册</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- 错误提示 -->
    <div class="re-alert">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="alertArea">
                    <!-- <div class="alert alert-warning alert-dismissible fade in" role="alert" id="warning-block">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>错误提示！</strong> <span id="alertInfo">错误内容</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/sys/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/sys/Public/Bootstrap/js/bootstrap.min.js"></script>
    <script charset="utf-8">
        $(function() {
            // 添加警告信息
            function addAlertInfo($info, $code) {
                var text = "<div class=\"row\" title=\"error-info\"><div class=\"col-md-12\" ><span class=\"text-danger\">" + $info + "</span></div></div>";
                $("#input" + $code).before(text);
                if ($code == 1) {
                    $("#input1").addClass("has-error");
                } else {
                    $("#input2").addClass("has-error");
                    $("#input3").addClass("has-error");
                }
            }
            //成功是跳转到登陆页面


            // username password1 password2 nickname institude class sex number phonenumber email
            $("#register-btn").click(function() {
                $("div[title='error-info']").remove();
                $("div").removeClass("has-error");
                var username = $('#username').val();
                var password1 = $('#password1').val();
                var password2 = $('#password2').val();
                var nickname = $('#nickname').val();
                var institude = $('#institude').val();
                var grade = $('#grade').val();
                var clazz = $('#class').val();
                var sex = $("input[name='sex'][checked]").val()
                var number = $('#number').val();
                var phonenumber = $('#phonenumber').val();
                var email = $('#email').val();
                $.ajax({
                    type: 'POST',
                    url: "<?php echo U('User/doRegister');?>",
                    data: {
                        username: username,
                        password1: password1,
                        password2: password2,
                        nickname: nickname,
                        institude: institude,
                        class: clazz,
                        grade: grade,
                        sex: sex,
                        stu_id: number,
                        phonenumber: phonenumber,
                        email: email,
                    },
                    cache: false,
                    dataType: 'json',
                    timeout: 5000,
                    success: function(data) {
                        switch (data) {
                            case 0:
                                alert("非法访问");
                                break;
                            case 1:
                                addAlertInfo("该用户名已被占用", 1);
                                break;
                            case 2:
                                addAlertInfo("请正确填写用户名", 1);
                                break;
                            case 3:
                                addAlertInfo("两次输入的密码不一致", 2);
                                break;
                            case 4:
                                addAlertInfo("输入密码格式不正确", 2);
                                break;
                            case 9:
                                alert("数据库出错了");
                                break;
                            case 11:
                                alert("请将个人信息填写完整");
                                break;
                            case 10:
                                alert("注册成功!");
                                window.location.href="<?php echo U('login');?>";
                                break;
                            default:
                                alert("nothing");
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("出错了，请重新尝试");
                        console.log(XMLHttpRequest.status);
                        console.log(XMLHttpRequest.readyState);
                        console.log(textStatus);
                    },
                });
            });
        })
    </script>
</body>

</html>