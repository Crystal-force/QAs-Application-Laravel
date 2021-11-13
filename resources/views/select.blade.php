@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div class="dashboard-area">
      
        @include('common.select-header')
        <div class="dashboard-background category-area">
            <div class="container">
              <div class="row col-12">
                    <div class="col-6">
                      <a href="{{route('ask-subject')}}" class="ask-category p-2">
                        <i class="fas fa-question question-icon"></i>
                        <p class="ask-font">Perguntar</p>
                      <a>
                    </div>
                    <div class="col-6">
                      <a href="{{route('solution-subject')}}" class="soluction-category p-2">
                        <i class="fas fa-exclamation solution-icon"></i>
                        <p class="solution-font">Soluções</p>
                      <a>
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