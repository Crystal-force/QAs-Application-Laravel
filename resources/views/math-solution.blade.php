@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div class="dashboard-area">
      
        @include('common.top-header')
        @include('common.solution-menu')

        <div class="math-solution-background" >
            <div class="container-fluid mt-2">
                <h3 class="card-title" style="color:white; text-align:center">Perguntas e respostas para matemática</h3>
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
                                          <th>Question</th>
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
                                          <td class="align-middle"><p>10/18/2021</p></td>
                                          <td class="align-middle">
                                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#questionReplyModal" data-whatever="reply"><i class="fas fa-reply"></i></button>
                                          </td>
                                      </tr>
                                      <tr class="each-question">
                                          <td>
                                              <h6>Vertical align in bootstrap table</h6>
                                              <small class="text-muted sm-question-content">I want to vertically align the text to the center position, but somehow the css doesn't seem to work. I have used the bootstrap responsive tables. I want to know why my code doesn't work and whats is the correct method to make it work.</small>
                                          </td>
                                          <td class="align-middle">
                                              <h6>Johnathan</h6>
                                          </td>
                                          <td class="align-middle"><p>10/18/2021</p></td>
                                          <td class="align-middle">
                                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#questionReplyModal" data-whatever="reply"><i class="fas fa-reply"></i></button>
                                          </td>
                                      </tr>
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
                                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#replyAnswerModal" data-whatever="reply"><i class="fas fa-eye"></i></button>
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
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <h6>Vertical align in bootstrap table</h6>
                      </div>
                      <div class="form-group">
                          <p>I want to vertically align the text to the center position, but somehow the css doesn't seem to work. I have used the bootstrap responsive tables. I want to know why my code doesn't work and whats is the correct method to make it work.</p>
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="control-label">Responder:</label>
                          <textarea class="textarea_editor form-control" rows="13" placeholder="Digite o texto ..."></textarea>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Enviar resposta</button>
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
      function Post_Question() {
        document.location.href = "/answers"
      }
    </script>
@endsection