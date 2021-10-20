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
                          <button type="button" class="btn btn-block btn-lg btn-info" data-id="1" onclick="Question(this)">Matemática</button>
                          <button type="button" class="btn btn-block btn-lg btn-success" data-id="2" onclick="Question(this)">Física</button>
                          <button type="button" class="btn btn-block btn-lg btn-primary" data-id="3" onclick="Question(this)">Química</button>
                          <button type="button" class="btn btn-block btn-lg btn-danger" data-id="4" onclick="Question(this)">Biologia</button>
                          <button type="button" class="btn btn-block btn-lg btn-secondary" data-id="5" onclick="Question(this)">História</button>
                          <button type="button" class="btn btn-block btn-lg btn-warning" data-id="6" onclick="Question(this)">Geografia</button>
                          <button type="button" class="btn btn-block btn-lg btn-light" data-id="7" onclick="Question(this)">Engenharia</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @include('common.footer')
    </div>
    <script>
      function Question(elem) {
        var id = $(elem).attr('data-id');
        document.location.href = "/question"
      }
    </script>
@endsection