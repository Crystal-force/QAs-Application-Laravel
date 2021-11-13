@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div class="dashboard-area">
      
        @include('common.index-header')

        <video autoplay muted loop id="myVideo">
            <source src="assets/images/background/SolverorSolver.mp4" type="video/mp4">
        </video>

        {{-- <div class="index-background" >
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div> --}}
        @include('common.footer')
    </div>
    <script>
      function Question(elem) {
        var id = $(elem).attr('data-id');
        document.location.href = "/question"
      }
    </script>
@endsection