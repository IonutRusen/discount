<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->
    {!! HTML::style('administrare/src/css/bootstrap.min.css') !!}
    {!! HTML::style('administrare/src/fonts/css/font-awesome.min.css') !!}
    {!! HTML::style('administrare/src/css/animate.min.css') !!}
    {!! HTML::style('administrare/src/css/custom.css') !!}
    {!! HTML::style('administrare/src/css/icheck/flat/green.css') !!}



    {!! HTML::script('administrare/src/js/jquery.min.js') !!}


            <!--[if lt IE 9]> -->
    {!! HTML::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
    {!! HTML::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}


</head>

    <body style="background:#F7F7F7;">

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    {!! FORM::open(array('action' => 'admin\UserController@postSignIn')) !!}
                        <h1>Login Form</h1>
                        <div>
                            {!! FORM::text('email',null,array(
                                'class' => 'form-control',
                                'placeholder' => 'Email',
                                'id' => 'email',
                                'autocomplete' => 'off'
                            )) !!}
                        <span class="text-danger">{!! $errors->first('email') !!}</span>
                        </div>
                        <div>
                            {!! FORM::password('password',array(
                                'class' => 'form-control',
                                'placeholder' => 'Password',
                                'id' => 'password',
                                'autocomplete' => 'off'
                            )) !!}
                            <span class="text-danger">{!! $errors->first('password') !!}</span>
                            <span class="text-danger">{!! Session::get('message') !!}</span>
                        </div>
                        <div>

                            {!! FORM::submit('Log In',array(
                                'class' => 'btn btn-default submit',
                            )) !!}

                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    {!! FORM::close() !!}
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    {!! FORM::open(array('action' => 'admin\UserController@postSignUp')) !!}
                        <h1>Create Account</h1>
                        <div>
                            {!! FORM::text('firstname',null,array(
                                'class' => 'form-control',
                                'placeholder' => 'User Name',
                                'id' => 'firstname'
                            )) !!}
                            <span class="text-danger">{!! $errors->first('firstname') !!}</span>
                        </div>
                        <div>
                            {!! FORM::text('email',null,array(
                                'class' => 'form-control',
                                'placeholder' => 'Email',
                                'id' => 'email'
                            )) !!}
                            <span class="text-danger">{!! $errors->first('email') !!}</span>
                        </div>
                        <div>
                            {!! FORM::password('password',array(
                                'class' => 'form-control',
                                'placeholder' => 'Password',
                                'id' => 'password'
                            )) !!}
                            <span class="text-danger">{!! $errors->first('password') !!}</span>
                        </div>
                        <div>
                            {!! FORM::submit('Register',array(
                                 'class' => 'btn btn-default submit',
                             )) !!}
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

    </body>

    </html>
