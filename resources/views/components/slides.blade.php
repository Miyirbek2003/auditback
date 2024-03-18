@extends('layouts.app')


@section('content')
    <h4 class="py-3  m-0"><span class="text-muted fw-light">Отчеты /</span> Отчеты
    </h4>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Наименование Компании</th>
                        <th>ИНН</th>
                        <th>Аудируемый период</th>
                        <th>Дата подписания аудиторского заключения</th>
                        <th>Вид заключения</th>
                        <th>Методы</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                        <tr class="text-center">
                            <td>{{ $slide->id }}</td>
                            <td>{{ $slide->name }}</td>
                            <td>{{ $slide->inn }}</td>
                            <td>{{ $slide->period_start }} {{ $slide->period_end }}</td>
                            <td>{{ $slide->end_date }}</td>
                            <td>
                                @if ($slide->type == 1)
                                    Положительное
                                @elseif($slide->type == 2)
                                    Отрицательное
                                @elseif($slide->type == 3)
                                    С оговоркой
                                @endif
                            </td>

                            <td>
                                <div class="d-flex align-items-center gap-10 justify-content-center">

                                    <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-warning btn-sm me-1"><i
                                            class="mdi mdi-file-edit-outline"></i></a>
                                    <form action="{{ route('slides.destroy', ['slide' => $slide]) }}" class="m-0"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#default"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
