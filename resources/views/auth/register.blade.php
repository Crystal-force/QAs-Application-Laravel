@extends('layout.index')
@section('content')
  @include('common.preloader')
  <section id="wrapper">
    <div class="login-register register-area" style="background-image:url(../assets/images/background/background_.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="index.html">
                    <h3 class="text-center m-b-20">Inscrever-se</h3>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Nome do usuário" id="reigster_name">
                            <p class="register-alert" id="name_alert">Nome incorreto</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="O email" id="register_email">
                            <p class="register-alert" id="email_alert">E-mail incorreto</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Nova Senha" id="register_pwd">
                            <p class="register-alert" id="pwd_alert">Senha incorreta</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Confirme a Senha" id="register_confirm_pwd">
                            <p class="register-alert" id="confirm_alert">Senha de confirmação incorreta</p>
                        </div>
                    </div>
                    <div class="form-group text-center p-b-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="button" onclick="Register()">Inscrever-se</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                          já tem uma conta? <a href="{{route('login')}}" class="text-info m-l-5"><b>Entrar</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  <script>
    function Register() {
      var name = '';
      var email = '';
      var password = '';
      var con_pwd = '';

      name = $("#reigster_name").val();
      email = $("#register_email").val();
      password = $("#register_pwd").val();
      con_pwd = $("#register_confirm_pwd").val();
      
    }
  </script>
@endsection