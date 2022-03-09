@extends('layout.index')
@section('content')
    @include('common.preloader')
    <div>
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
                    <div style="width: 100%;">
                        <div class="col-8" style="margin: auto">
                            <div class="card-body">
                                <h4 class="card-title">Responder perguntas</h4>
                                <hr>
                                <div class="question-model">
                                    <p style="font-weight: 600;  text-align: center; color: rgb(129, 127, 127)">{{ $question->questions }}</p>
                                    <p class="sm-data"><i
                                            class="fas fa-calendar-alt"></i>{{ $question->created_at }}</p>
                                </div>
                                <hr>
                                <div>
                                    <p>This is reply area</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
