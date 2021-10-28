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
                        @foreach($subject as $subjects)
                          <button type="button" class="btn btn-block btn-lg {{$subjects->color}}" data-id="{{$subjects->id}}" onclick="MathQuestion(this)">{{$subjects->name}}</button>
                        @endforeach
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
      function MathQuestion(elem) {
        $subject_id = $(elem).attr('data-id');
        window.location.href='/math-question?id=1';
      }
    
      function PhyQuestion(elem) {
        $subject_id = $(elem).attr('data-id');
        window.location.href="/phy-question?id=2";
      }
    
      function CheQuestion(elem) {
        window.location.href="/che-question";
      }
    
      function BioQuestion(elem) {
        window.location.href="/bio-question";
      }
    
      function HisQuestion(elem) {
        window.location.href="/his-question";
      }
    
      function GeoQuestion(elem) {
        window.location.href="/geo-question";
      }
    
      function EngQuestion(elem)  {
        window.location.href="/eng-question";
      }
    </script>
@endsection
