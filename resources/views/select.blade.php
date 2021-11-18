@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div class="dashboard-area">
      
        @include('common.select-header')
        <div class="dashboard-background category-area">
            <div class="container">
              <div class="row col-12">
                    <div class="col-6">
                      <a href="javascript:;" class="ask-category p-2" data-id="1" onclick="SelectOption(this)">
                        <i class="fas fa-question question-icon"></i>
                        <p class="ask-font">Perguntar</p>
                      <a>
                    </div>
                    <div class="col-6">
                      <a href="javascript:;" class="soluction-category p-2" data-id="2" onclick="SelectOption(this)">
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
      function SelectOption(elem) {
        var id = $(elem).attr('data-id');
        console.log(id);
        if(id == '1') {
          window.location.href = "/ask-subject?id="+id;
        }
        else if(id == "2") {
          window.location.href = "/solution-subject?id="+id;
        }
      }
    </script>
@endsection