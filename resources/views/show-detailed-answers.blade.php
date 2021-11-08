
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
                          <a href="/question-post?id={{$subject_id->s_id}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Post New Question</a>
                      </div>
                  </div>
              </div>
              
              <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header bg-info">
                          <h4 class="m-b-0 text-white"><i class="fas fa-book mr-2"></i>Answers(3)</h4>
                      </div>
                      <div class="card-body">
                        @if(isset($answers))
                          <p style="text-align:center">The answers doesn't exist still.</p>
                        @endif
                        @foreach($answers as $answer) 
                        <div class="answer-blog p-3">
                          <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex">
                              <div>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /></a>
                              </div>
                              <div class="p-l-10">
                                  <h4 class="m-b-0">{{$answer->Answers_user->name}}</h4>
                                  <small class="text-muted">From: {{$answer->Answers_user->email}}</small>
                              </div>
                            </div>
                            <div>
                              @if($answer->read == "1")
                              <input type="checkbox" class="check answer-confirm" id="minimal-checkbox-1" checked unenable>
                              @elseif($answer->read == "0")
                              <input type="checkbox" class="check answer-confirm" id="answer-status">
                              @endif
                            </div>
                          </div>
                          <div class="">
                            <p>{{$answer->answers}}</p>
                          </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        @endforeach
                      </div>
                  </div>
                </div>
                <div class="col-lg-3"></div>
              </div>
          </div>
        </div>
        @include('common.footer')
    </div>

    <script>
      
    </script>
@endsection