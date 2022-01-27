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
                  </div>
                  <div class="col-md-7 align-self-center text-right">
                      <div class="d-flex justify-content-end align-items-center">
                         
                      </div>
                  </div>
              </div>

              <div class="row col-12">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h4 class="card-title">Minhas perguntas</h4>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 50%; text-align: center">Questão</th>
                                        <th style="text-align: center">Pontuação</th>
                                        <th style="text-align: center">Minha resposta</th>
                                        <th style="text-align: center">Resposta correta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <a href="#"><p style="font-weight:600">Title</p></a>
                                            <p class="sm-question-content">Question</p>
                                        </td>
                                        <td class="align-middle" style="text-align: center">Date</td>
                                        <td class="align-middle" style="text-align: center">
                                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-info" data-id="2" onclick="Reply_Answer(this)"><i class="far fa-edit mr-1"></i>Responder</button>
                                        </td>

                                        <td class="align-middle" style="text-align: center">
                                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-danger" data-id="2" onclick="Show_CorrectAnswer(this)"><i class="ti-eye mr-1"></i>Selecionada</button>
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
@endsection