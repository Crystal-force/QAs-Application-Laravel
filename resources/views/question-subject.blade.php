@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div class="dashboard-area">
      
        @include('common.top-header')
        @include('common.aside-menu')

        <div class="dashboard-background" >
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12">
                        <h3 class="subject-title">Escolha o assunto da sua pergunta</h3>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-5">
              <div class="row">
                <div class="col-12">
                  <div class="subject-group">
                    <div class="row button-group">
                      <div class="col-lg-2 col-md-4">
                          <button type="button" class="btn btn-block btn-lg btn-info" data-id="1" onclick="MathQuestion(this)">Matemática</button>
                          <button type="button" class="btn btn-block btn-lg btn-success" data-id="2" onclick="PhyQuestion(this)">Física</button>
                          <button type="button" class="btn btn-block btn-lg btn-primary" data-id="3" onclick="CheQuestion(this)">Química</button>
                          <button type="button" class="btn btn-block btn-lg btn-danger" data-id="4" onclick="BioQuestion(this)">Biologia</button>
                          <button type="button" class="btn btn-block btn-lg btn-secondary" data-id="5" onclick="HisQuestion(this)">História</button>
                          <button type="button" class="btn btn-block btn-lg btn-warning" data-id="6" onclick="GeoQuestion(this)">Geografia</button>
                          <button type="button" class="btn btn-block btn-lg btn-light" data-id="7" onclick="EngQuestion(this)">Engenharia</button>
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
<script>
  function MathQuestion(elem) {
    document.location.href="/math-question";
  }

  function PhyQuestion(elem) {
    document.location.href="/phy-question";
  }

  function CheQuestion(elem) {
    document.location.href="/che-question";
  }

  function BioQuestion(elem) {
    document.location.href="/bio-question";
  }

  function HisQuestion(elem) {
    document.location.href="/his-question";
  }

  function GeoQuestion(elem) {
    document.location.href="/geo-question";
  }

  function EngQuestion(elem)  {
    document.location.href="/eng-question";
  }
</script>