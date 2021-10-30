@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div >
      
        @include('common.top-header')
        @include('common.aside-menu')
        <div class="page-wrapper">
          <div class="container-fluid">
              
              <div class="row page-titles">
                  <div class="col-md-12 align-self-center text-right">
                      <div class="d-flex justify-content-end align-items-center">
                          <a href="{{route('answers')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Post New</a>
                      </div>
                  </div>
              </div>
              
              <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white"><i class="fas fa-question"></i> My Question</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <h3>{{$q_data->q_title}}</h3>
                                    <hr class="m-t-0 m-b-5">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <p class="form-control-static">{{$q_data->question}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-12">
                                        <label><i class="fa fa-paperclip m-r-10 m-b-10"></i>Attachments</label>
                                        @foreach($q_file as $files)
                                        <a href="/{{$files->file_path}}" target="_blank">
                                           <p>{{$files->file_name}}</p>
                                        </a>
                                        @endforeach
                                        {{-- <p class="file-name"><span class="mr-2">test.doc, test.pdf, test.png</p> --}}
                                       
                                      </div>
                                    </div>
                                    <hr class="m-t-0 m-b-0">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white"><i class="fas fa-book mr-2"></i>Answers(3)</h4>
                        </div>
                        <div class="card-body">
                          <div class="answer-blog p-3">
                            <div class="d-flex mb-2">
                              <div>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /></a>
                              </div>
                              <div class="p-l-10">
                                  <h4 class="m-b-0">Pavan kumar</h4>
                                  <small class="text-muted">From: jonathan@domain.com</small>
                              </div>
                            </div>
                            <div class="">
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                              <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
                            </div>
                          </div>
                          <hr class="mt-4 mb-4">
                          <div class="answer-blog p-3">
                            <div class="d-flex mb-2">
                              <div>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /></a>
                              </div>
                              <div class="p-l-10">
                                  <h4 class="m-b-0">Pavan kumar</h4>
                                  <small class="text-muted">From: jonathan@domain.com</small>
                              </div>
                            </div>
                            <div class="each-aws-content p-2 ">
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                              <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
                            </div>
                          </div>
                          <hr class="mt-4 mb-4">
                          <div class="answer-blog p-3">
                            <div class="d-flex mb-2">
                              <div>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /></a>
                              </div>
                              <div class="p-l-10">
                                  <h4 class="m-b-0">Pavan kumar</h4>
                                  <small class="text-muted">From: jonathan@domain.com</small>
                              </div>
                            </div>
                            <div class="each-aws-content p-2 ">
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                              <p>enean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
                            </div>
                          </div>
                          <hr class="mt-4 mb-4">
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
        @include('common.footer')
    </div>
@endsection