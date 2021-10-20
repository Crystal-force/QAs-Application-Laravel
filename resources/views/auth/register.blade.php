@extends('layout.index')
@section('content')
  <div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Solver Or Solver</p>
    </div>
  </div>
  <section id="wrapper">
    <div class="login-register register-area" style="background-image:url(../assets/images/background/background___.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="index.html">
                    <h3 class="text-center m-b-20">Inscrever-se</h3>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Nome do usuário">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="O email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Nova Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Confirme a Senha">
                        </div>
                    </div>
                    <div class="form-group text-center p-b-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Inscrever-se</button>
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
@endsection