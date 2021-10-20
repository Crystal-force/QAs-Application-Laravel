@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div id="main-wrapper" class="dashboard-area">
      
        @include('common.top-header')
        @include('common.aside-menu')

        <div class="dashboard-background" >
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12">
                        <h3 class="subject-title">Please choose the subject for your question</h3>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-5">
              <div class="row">
                <div class="col-12">
                  <div class="subject-group">
                    <div class="row button-group">
                      <div class="col-lg-2 col-md-4">
                          <button type="button" class="btn btn-block btn-lg btn-info">Matemática</button>
                          <button type="button" class="btn btn-block btn-lg btn-success">Física</button>
                          <button type="button" class="btn btn-block btn-lg btn-primary">Química</button>
                          <button type="button" class="btn btn-block btn-lg btn-danger">Biologia</button>
                          <button type="button" class="btn btn-block btn-lg btn-secondary">História</button>
                          <button type="button" class="btn btn-block btn-lg btn-warning">Geografia</button>
                          <button type="button" class="btn btn-block btn-lg btn-light">Engenharia</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @include('common.footer')
    </div>
@endsection