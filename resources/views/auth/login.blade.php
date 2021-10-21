@extends('layout.index')
@section('content')
  @include('common.preloader')
  <section id="wrapper">
    <div class="login-register" style="background-image:url(../assets/images/background/background_.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material">
                    <h3 class="text-center m-b-20">Entrar</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Nome do usuário" id="login_name"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Senha" id="login_password"> </div>
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
      console.log('login');
      document.location.href = "/subject"
    }
  </script>
@endsection