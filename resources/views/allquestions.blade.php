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
                                                <th style="width: 72%; text-align: center">Name</th>
                                                <th style="text-align: center">posted date</th>
                                                <th style="text-align: center" ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">Vertical align in bootstrap table</td>
                                                <td class="align-middle" style="text-align: center">2011/04/25</td>
                                                <td class="align-middle" style="text-align: center">
                                                    <a href="javascript:;" data-toggle="tooltip" title="Mostre a resposta detalhada" onclick="ShowAnswer(this)"><i class="fas fa-eye text-success show-icon"></i> </a>
                                                    <a href="javascript:;" data-toggle="tooltip" title="Remover uma pergunta"> <i class="mdi mdi-delete-forever text-primary remove-icon"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">Vertical align in bootstrap table</td>
                                                <td class="align-middle" style="text-align: center">2011/07/25</td>
                                                <td class="align-middle" style="text-align: center">
                                                    <a href="javascript:;" data-toggle="tooltip" title="Mostre a resposta detalhada" onclick="ShowAnswer(this)"><i class="fas fa-eye text-success show-icon"></i> </a>
                                                    <a href="javascript:;" data-toggle="tooltip" title="Remover uma pergunta"> <i class="mdi mdi-delete-forever text-primary remove-icon"></i></a>
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
                                <h4 class="card-title">Answers</h4>
                                <hr class="mt-1 mb-1">
                                <div class="answer-area mt-2">
                                    <p>Based on what you have provided your CSS selector is not specific enough to override the CSS rules defined by Bootstrap.</p>
                                    <p>@BarryFranklin Add a class to that table, <table class="table vertical-align">, and slightly increase the specificity of the selector using that class, table.vertical-align > tbody > tr > td {}. You could also do .table.vertical-alilgn > tbody > tr > td {} though that has a higher specificity than the first option. I always try to increase specificity in my CSS selectors as little as possible if I can. Notice that the first option is selecting a table element that has .vertical-align while the second option is selecting an element that has the .table AND .vertical-align</p>
                                </div>
                                <hr class="mt-2 mb-2">
                                <div class="answer-area mt-2">
                                    <p>Based on what you have provided your CSS selector is not specific enough to override the CSS rules defined by Bootstrap.</p>
                                    <p>@BarryFranklin Add a class to that table, <table class="table vertical-align">, and slightly increase the specificity of the selector using that class, table.vertical-align > tbody > tr > td {}. You could also do .table.vertical-alilgn > tbody > tr > td {} though that has a higher specificity than the first option. I always try to increase specificity in my CSS selectors as little as possible if I can. Notice that the first option is selecting a table element that has .vertical-align while the second option is selecting an element that has the .table AND .vertical-align</p>
                                </div>
                                <hr class="mt-2 mb-2">
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
            $('.answer-area').show();
        }
    </script>
@endsection