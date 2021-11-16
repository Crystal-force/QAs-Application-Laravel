@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div >
        @include('common.top-header')
        @include('common.aside-menu')
        <div class="page-wrapper">
          <div class="container">
              <div class="row page-titles">
                  <div class="col-md-12 align-self-center text-right">
                      <div class="d-flex justify-content-end align-items-center">
                          <a href="{{route('allquestions')}}" class="btn btn-success d-none d-lg-block m-l-15"><i class="fas fa-redo-alt"></i> Todas as questões</a>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="question-area">
                    <div class="question-title">
                        <h4 style="font-weight: 600; color:rgb(56, 56, 2)">Quesion</h4>
                    </div>
                    <h4>{{$question->q_title}}</h4>
                    <p>{{$question->question}}</p>
                  </div>
                  <hr>
              </div>
              <div class="row col-12">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                      <h4 class="card-title" style="color: rgb(56, 56, 2)">Todas as respostas</h4>
                  </div>
                  <div class="comment-widgets m-b-20">
                      <!-- Comment Row -->
                      @if (sizeof($showanswer) == "0")
                            <p style="text-align: center">Sem respostas...</p>
                      @endif
                      @foreach($showanswer as $answers_list)
                      <hr>
                      <div class="d-flex flex-row comment-row">
                          <div class="p-2">
                              <span class="round">
                                  <img src="../assets/images/users/1.jpg" alt="user" width="50">
                              </span>
                          </div>
                          <div class="comment-text w-100">
                              <h5>{{$answers_list->Answers_user->name}}</h5>
                              <div class="comment-footer">
                                  <span class="date">{{$answers_list->updated_at}}</span>
                              </div>
                              <p class="m-b-5 m-t-10">{{$answers_list->answers}}</p>
                          </div>
                      </div>
                      @endforeach
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
    
@endsection