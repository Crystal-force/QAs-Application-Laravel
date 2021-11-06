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
                    <h4 class="text-themecolor">All Questions</h4>
                  </div>
                  <div class="col-md-7 align-self-center text-right">
                      <div class="d-flex justify-content-end align-items-center">
                          <a href="{{route('ask-subject')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Post New</a>
                      </div>
                  </div>
              </div>

              <div class="row col-12">
                    <div class="col-6">
                        <div class="card" style="width: 100%">
                            <div class="card-body">
                                <h4 class="card-title">All Questions</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 72%; text-align: center">Question</th>
                                                <th style="width: 72%; text-align: center">Subject</th>
                                                <th style="text-align: center">Date</th>
                                                <th style="text-align: center" ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($questions as $questions)
                                            <tr>
                                                <td class="align-middle">
                                                    {{$questions->q_title}}
                                                    <p class="sm-question-content">{{$questions->question}}</p>
                                                </td>
                                                <td>
                                                    {{$questions->Subjects_List->name}}
                                                </td>
                                                <td class="align-middle" style="text-align: center">{{$questions->updated_at}}</td>
                                                <td class="align-middle" style="text-align: center">
                                                    <a href="javascript:;" data-toggle="tooltip" title="Mostre a resposta detalhada" data-id={{$questions->id}} onclick="ShowAnswer(this)"><i class="fas fa-eye text-success show-icon"></i> </a>
                                                    <a href="javascript:;" data-toggle="tooltip" title="Remover uma pergunta" data-id={{$questions->id}}> <i class="mdi mdi-delete-forever text-primary remove-icon"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Answers</h4>
                                <hr class="mt-1 mb-1">
                                <div class="p-1" id="question_area">
                                    
                                </div>
                                <div id="answers_area">
                                    {{-- this create in JS --}}
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
        </div>
    </div>
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>   
    <script>
        $(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script>
         function ShowAnswer(elem) {
            var q_id = $(elem).attr('data-id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/show-answers',
                method: 'POST',
                data: {
                    id: q_id
                },
                dataType: false,
                success: function(data) {
                    var question_html = '';
                    
                    question_html+='<div class="mt-3" style="background:#e3e2e24a; padding: 1rem">\n'+
                                        '<h5 style="font-weight:500">'+data.data.q_title+'</h5>\n'+
                                        '<p style="text-align:end">'+data.data.updated_at+'</p>\n'+
                                        '<p>'+data.data.question+'</p>\n'+
                                    '</div>\n'
                                    '<hr class="mt-2 mb-2">';
                     $("#question_area").html(question_html); 

                    if(data.data == 'null') {
                        var null_html = '';
                        null_html+='<p style="text-align:center; margin-top:25px;">No Answers...</p>';
                        $("#answers_area").html(null_html);
                    }
                    else {
                        var count = data.data.length;
                        
                        var full_html = '';
                        for(var i=0; i<count; i++) {
                            full_html+='<div class="answer-area mt-2">\n'+
                                        '<p>'+data.data.answers+'</p>\n'+
                                    '</div>\n'+
                                    '<hr class="mt-2 mb-2">';
                        }
                        $("#answers_area").html(full_html);
                    }
                }
            });
        }
    </script>
@endsection