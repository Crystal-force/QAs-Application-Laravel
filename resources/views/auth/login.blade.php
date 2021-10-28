@extends('layout.index')
@section('content')
  @include('common.preloader')
  <section id="wrapper">
    <div class="login-register" style="background-image:url(../assets/images/background/background_.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <h3 class="text-center m-b-20">Entrar</h3>
                <form class="form-horizontal form-material">
                    <p class="register-alert" id="fault_login">As informações de login são falhas.</p>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="O email" id="login_email"> 
                            <p class="register-alert" id="email_alert">E-mail incorreto</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Senha" id="login_password"> 
                            <p class="register-alert" id="pwd_alert">Senha incorreta</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Lembre de mim</label>
                                </div> 
                                <div class="ml-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Esqueci o pwd?</a> 
                                </div>
                            </div>
                            <p class="register-alert" id="check_alert">Por favor, checar isto.</p>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info btn-rounded" type="button" onclick="SignIn()">Conecte-se</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                          Você não tem uma conta? <a href="{{route('reigster')}}" class="text-info m-l-5"><b>Inscrever-se</b></a>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recuperar senha</h3>
                            <p class="text-muted">Digite seu e-mail e as instruções serão enviadas para você!</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="O email"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Nova Senha"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Confirme a Senha"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Redefinir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
  <script>
    function SignIn() {
        var check_status = "";
        var email = $('#login_email').val();
        var password = $('#login_password').val();
      
        if ($('#customCheck1').is(":checked"))
        {
            check_status = '1';
        }
        else {
            check_status = '0';
        }
        
        if(email == "" && password != "") {
            $("#email_alert").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
        }
        else if(email != "" && password == "") {
            $("#pwd_alert").delay(5).fadeIn('slow').delay(1500).fadeOut('slow'); 
        }
        else if(email == "" && password == "") {
            $("#email_alert").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
            $("#pwd_alert").delay(5).fadeIn('slow').delay(1500).fadeOut('slow'); 
        }
        else if(email !="" && password != "" && check_status == '0') {
            $("#check_alert").delay(5).fadeIn('slow').delay(1500).fadeOut('slow'); 
        }

        if ($('#customCheck1').is(":checked")) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/login',
                method: 'POST',
                data: {
                    email: email,
                    password: password
                },
                dataType: false,
                success: function(data) {
                    if(data.data == "1") {
                        $.toast({
                            heading: 'Bem-vindo ao Silver Or Silver',
                            text: 'O login foi bem-sucedido.',
                            position: 'top-right',
                            loaderBg:'#ff6849',
                            icon: 'success',
                            hideAfter: 3000, 
                            stack: 6
                        });

                        setTimeout(function() { 
                            window.location.href="/select-category"
                        }, 3000);
                    }
                    else if(data.data == "0") {
                        $("#fault_login").delay(5).fadeIn('slow').delay(1500).fadeOut('slow'); 
                    }
                }
            });
        }
        


        
      
    //   document.location.href = "/select-category"
    }
  </script>
@endsection