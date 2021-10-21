@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div >
      
        @include('common.top-header')
        @include('common.aside-menu')
        <div class="page-wrapper">
          <div class="container-fluid">
              
              <div class="row page-titles">
                  <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Answer Details</h4>
                  </div>
                  <div class="col-md-7 align-self-center text-right">
                      <div class="d-flex justify-content-end align-items-center">
                          <a href="{{route('subject')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Post New</a>
                      </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-xlg-2 col-lg-3 col-md-4">
                                <div class="card-body inbox-panel"><a href="{{route('answers')}}" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">To Back</a>
                                    <ul class="list-group list-group-full">
                                        <li class="list-group-item active">
                                            <a href="javascript:void(0)"> <i class="mdi mdi-file-document-box"></i> Starred </a>
                                        </li>
                                        
                                        <li class="list-group-item ">
                                            <a href="javascript:void(0)"> <i class="mdi mdi-file-document-box"></i> Sent Mail </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xlg-10 col-lg-9 col-md-8 bg-light border-left">
                                <div class="card-body p-t-0">
                                    <div class="card b-all shadow-none">
                                        <div class="card-body">
                                            <h3 class="card-title m-b-0">Your message title goes here</h3>
                                        </div>
                                        <div>
                                            <hr class="m-t-0">
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex m-b-40">
                                                <div>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /></a>
                                                </div>
                                                <div class="p-l-10">
                                                    <h4 class="m-b-0">Pavan kumar</h4>
                                                    <small class="text-muted">From: jonathan@domain.com</small>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                            <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
                                        </div>
                                    </div>
                                </div>
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
      function AnswersDetail(elem) {
        var id = $(elem).attr('data-id');
        document.location.href = "/answer-detail";
      }
    </script>
@endsection