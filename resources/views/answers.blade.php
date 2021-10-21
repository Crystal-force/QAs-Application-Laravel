@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div id="main-wrapper">
      
        @include('common.top-header')
        @include('common.aside-menu')
        <div class="page-wrapper">
          <div class="container-fluid">
              
              <div class="row page-titles">
                  <div class="col-md-12 align-self-center text-right">
                      <div class="d-flex justify-content-end align-items-center">
                          <a href="{{route('dashboard')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Post New</a>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> </p>
                                                </div>
                                            </div>
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
                            <h4 class="m-b-0 text-white"><i class="fas fa-book mr-2"></i>Answers</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Answers</th>
                                        <th>Users</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="answer-table">
                                    <tr>
                                      <td class="aws-content">Lunar probe project</td>
                                      <td class="aws-name">by Jose</td>
                                      <td class="aws-show"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-eye"></i></button></td>
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
        @include('common.footer')
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <label for="recipient-name" class="control-label">Recipient:</label>
                          <input type="text" class="form-control" id="recipient-name1">
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="control-label">Message:</label>
                          <textarea class="form-control" id="message-text1"></textarea>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message</button>
              </div>
          </div>
      </div>
    </div>
@endsection