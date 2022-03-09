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
                                            @if (sizeof($allQuestions) == '0')
                                                <p style="text-align: center">A pergunta não existe no momento.</p>
                                            @endif

                                            @foreach ($allQuestions as $questions)
                                                <td class="align-middle">
                                                    <p class="sm-question-content"
                                                        style="font-weight: 600; text-align: left">
                                                        {{ $questions->questions }}</p>
                                                </td>
                                                <td class="align-middle"
                                                    style="text-align: center; color:brown; font-weight: 600">
                                                    {{ $questions->score }}</td>
                                                <td class="align-middle" style="text-align: center">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-info"
                                                        data-id="{{ $questions->id }}" onclick="Reply_Answer(this)"><i
                                                            class="far fa-edit mr-1"></i>Responder</button>
                                                </td>

                                                <td class="align-middle" style="text-align: center">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-danger"
                                                        data-id="" onclick="Show_CorrectAnswer(this)" disabled><i
                                                            class="ti-eye mr-1"></i>Selecionada</button>
                                                </td>
                                            @endforeach
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

    <script>
        function Reply_Answer(elem) {
            var id = $(elem).attr('data-id');
            document.location.href = "/institution-question-reply?id=" + id;
        }
    </script>
@endsection
