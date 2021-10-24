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
                          <a href="{{route('ask-subject')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Post New</a>
                      </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">Account Setting</h4>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-body">
                                    <h3 class="card-title">Person Info</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">User Name</label>
                                                <input type="text" id="username" class="form-control" placeholder="John doe" value="John doe">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" id="email" class="form-control" placeholder="admin@admin.com" value="admin@admin.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="text" id="email" class="form-control" placeholder="" value="Passowrd123!">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>

          </div>
        </div>
    </div>
@endsection