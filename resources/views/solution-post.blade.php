@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div class="dashboard-area">
      
        @include('common.top-header')
        @include('common.solution-menu')

        <div class="math-solution-background" >
            <div class="container-fluid mt-4 mb-3">
                <h3 class="card-title" style="color:white; text-align:center; font-weight:600">Perguntas e respostas para {{$subject->name}}</h3>
                <div class="row col-12">
                    <div class="col-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <h4 class="card-title">As perguntas que você pode responder.</h4>
                            <select class="custom-select w-25 ml-auto">
                                <option selected="">All</option>
                                <option value="1">Today</option>
                                <option value="2">Week</option>
                                <option value="3">Month</option>
                            </select>
                          </div>
                          <div class="table-responsive m-t-40">
                              <table class="table stylish-table">
                                  <thead>
                                      <tr>
                                          <th style="width:60%">Questions</th>
                                          <th>User</th>
                                          <th>Date</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($questions as $question)
                                      <tr class="each-question">
                                          <td>
                                              <h6>{{$question->q_title}}</h6>
                                              <small class="text-muted sm-question-content">{{$question->question}}</small>
                                          </td>
                                          <td class="align-middle">
                                              <h6>{{$question->Question_user->name}}</h6>
                                          </td>
                                          <td class="align-middle"><p>{{$question->updated_at}}</p></td>
                                          <td class="align-middle">
                                            <button type="button" class="btn btn-info" data-whatever="reply" data-id={{$question->id}} onclick="ReplyQuestion(this)"><i class="fas fa-reply"></i></button>
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
                          <div class="d-flex align-items-center">
                            <h4 class="card-title">Suas respostas</h4>
                            <select class="custom-select w-25 ml-auto">
                                <option selected="">All</option>
                                <option value="1">Today</option>
                                <option value="2">Week</option>
                                <option value="3">Month</option>
                            </select>
                          </div>
                          <div class="table-responsive m-t-40">
                              <table class="table stylish-table">
                                  <thead>
                                      <tr>
                                          <th>Answers</th>
                                          <th>User</th>
                                          <th>Date</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="each-question">
                                          <td>
                                              <h6>Vertical align in bootstrap table</h6>
                                              <small class="text-muted sm-question-content">I want to vertically align the text to the center position, but somehow the css doesn't seem to work. I have used the bootstrap responsive tables. I want to know why my code doesn't work and whats is the correct method to make it work.</small>
                                          </td>
                                          <td class="align-middle">
                                              <h6>Johnathan</h6>
                                          </td>
                                          <td class="align-middle">
                                            <p>10/18/2021</p>
                                            <span class="label label-danger">respondeu</span>
                                          </td>
                                          <td class="align-middle">
                                              <a href="javascript:;" data-toggle="modal" data-target="#replyAnswerModal" data-whatever="reply"><i class="fas fa-eye text-success show-icon"></i> </a>
                                              <a href="javascript:;" data-toggle="tooltip" title="Remover uma pergunta"> <i class="mdi mdi-delete-forever text-primary remove-icon"></i></a>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
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

    <div class="modal fade" id="questionReplyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel1">Por favor responda a uma pergunta</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body" >
                  <div id="question">

                  </div>
                  <p style="font-weight: 400"><i class="fa fa-paperclip m-r-10 m-b-10"></i>Attachments</p>
                  <div id="attampt_file">
                      
                  </div>
                  <div id="reply_answer">
                     <div class="form-group">
                        <label for="message-text" class="control-label">Responder:</label>
                        <textarea class="textarea_editor form-control" rows="13" placeholder="Digite o texto ..." id="answer_content"></textarea>
                        <p class="answer-alert">Por favor, insira as respostas corretas para esta pergunta.</p>  
                    </div>
                  </div>
              </div>
              <div id="reply_button">

              </div>
          </div>
      </div>
    </div>

    <div class="modal fade" id="replyAnswerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel1">Responder</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <h6>Vertical align in bootstrap table</h6>
                      </div>
                      <div class="form-group">
                          <p>I want to vertically align the text to the center position, but somehow the css doesn't seem to work. I have used the bootstrap responsive tables. I want to know why my code doesn't work and whats is the correct method to make it work.</p>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
    </div>
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script> 
    <script>
      $(document).ready(function() {
          $('.textarea_editor').wysihtml5();
      });

      function ReplyQuestion(elem) {
          var q_id = $(elem).attr('data-id');
          $("#questionReplyModal").modal();

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              url:'/reply-answer',
              method: 'POST',
              data: {
                  id: q_id
              },
              dataType: false,
              success: function(data) {
                var reply_html = "";
                var attampt = "";
                var reply_btn = "";
                reply_html += '<div class="form-group">\n'+
                                '<h6 style="font-weight: 400">'+data.data[0].q_title+'</h6>\n'+
                            '</div>\n'+
                            '<div class="form-group">\n'+
                                '<p>'+data.data[0].question+'</p>\n'+
                            '</div>\n';
                var count = data.attampt.length;
                for (var item of data.attampt) {
                attampt += '<a href="/'+item.file_path+'" class="attachment" target="_blank">\n'+
                                '<p>'+item.file_name+'</p>\n'+
                            '</a>';
                }
               
                reply_btn += '<div class="modal-footer">\n'+
                                    '<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>\n'+
                                    '<button type="button" class="btn btn-primary" data-id="'+data.data[0].id+'" onclick="ReplyAnswer(this)">Enviar resposta</button>\n'+
                                '</div>';
            
                $("#question").html(reply_html);
                $("#attampt_file").html(attampt);
                $("#reply_button").html(reply_btn);
              }
          })
      }

      function ReplyAnswer(elem) {
          var q_id = '';
          var answer = '';
          q_id = $(elem).attr('data-id');
          answer = $("#answer_content").val();
         
         if(answer == '') {
            $(".answer-alert").show();
         }
         else {
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              url:'/send-answer',
              method: 'POST',
              data: {
                  id: q_id,
                  answer: answer
              },
              dataType: false,
              success: function(data) {
                  if(data.data = '1') {
                    $.toast({
                            heading: 'Sua resposta foi postada corretamente. Obrigada.',
                            position: 'top-center',
                            loaderBg:'#ff6849',
                            icon: 'success',
                            hideAfter: 3000, 
                            stack: 6
                     });

                    setTimeout(function() { 
                        location.reload();
                    }, 3000);
                  }
              }
          })
         }
      }
    </script>
@endsection