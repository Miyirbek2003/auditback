@extends('layouts.app')

@push('body')
    <style>
        .form-hand {
            display: flex !important;
            gap: 15px !important;
        }
    </style>
@endpush

@section('content')
    <h4 class="py-3 m-0"><span class="text-muted fw-light">Отчеты /</span> Добавить отчет</h4>
    <h6 class="text-muted">Отчеты</h6>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header p-0 col-lg">
                    <div class="nav-align-top">
                       
                    </div>
                </div>
                <div class="card-body">

                    <form class="browser-default-validation needs-validation row form-hand" method="POST"
                        action="{{ route('slides.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-xl-12">
                            <div class="tab-pane fade active   show" id="navs-top-home" role="tabpanel">
                                
                                <div class="card-body">
                                    <form>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="Наименование Компании">
                                        <label for="basic-default-fullname">Наименование Компании</label>
                                      </div>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" name="inn" class="form-control" id="basic-default-company" placeholder="ИНН ">
                                        <label for="basic-default-company">ИНН</label>
                                      </div>
                                      <div class="mb-4">
                                        <div class="row">
                                          <div class="col-6">
                                            <div class="input-group input-group-merge">
                                              <div class="form-floating form-floating-outline">
                                                <input type="date" name="period_start" id="basic-default-email" class="form-control" placeholder="Аудируемый период" aria-label="john.doe" aria-describedby="basic-default-email2">
                                                <label for="basic-default-email">Аудируемый период Начало</label>
                                              </div>
                                              
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="input-group input-group-merge">
                                              <div class="form-floating form-floating-outline">
                                                <input type="date" name="period_end" id="basic-default-email" class="form-control" placeholder="Аудируемый период" aria-label="john.doe" aria-describedby="basic-default-email2">
                                                <label for="basic-default-email">Аудируемый период Оканчание</label>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <input type="date" id="basic-default-phone" name="end_date" class="form-control phone-mask" placeholder="Дата подписания аудиторского заключения">
                                        <label for="basic-default-phone">Дата подписани аудиторского заключения</label>
                                      </div>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <select class="form-select" id="exampleFormControlSelect1" name="type" aria-label="Default select example">
                                          <option selected="" disabled>Вид заключения</option>
                                          <option value="1">Положительное</option>
                                          <option value="2">Отрицательное</option>
                                          <option value="3">С оговоркой</option>
                                        </select>
                                        <label for="exampleFormControlSelect1">Вид заключения</label>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Добавить</button>
                                        </div>
                                    </div>
                                    </form>
                                  </div>
                                
                            </div>
                          
                           
                        </div>
                       

                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection


@push('body')
    <script>
        $('.slide2').addClass('active');
    </script>
@endpush
