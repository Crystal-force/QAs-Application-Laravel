@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div class="dashboard-area">
      
        @include('common.index-header')

        <div class="dashboard-background" >
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12">
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