@extends('layouts.app')

@section('content')
    <h4 class="py-3  m-0"><span class="text-muted fw-light">Отчет /</span> Изменить отчет</h4>
    <h6 class="text-muted">Отчет</h6>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header p-0 col-lg">
                    <div class="nav-align-top">
                        
                    </div>
                </div>
                <div class="card-body">
                    <form class="browser-default-validation needs-validation row" method="POST"
                        action="{{ route('slides.update', ['slide' => $slide]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="col-xl-12">
                            <div class="tab-pane fade active   show" id="navs-top-home" role="tabpanel">
                                
                                <div class="card-body">
                                    <form>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" name="name" value="{{$slide->name}}" class="form-control" id="basic-default-fullname" placeholder="Наименование Компании">
                                        <label for="basic-default-fullname">Наименование Компании</label>
                                      </div>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" value="{{$slide->inn}}" name="inn" class="form-control" id="basic-default-company" placeholder="ИНН ">
                                        <label for="basic-default-company">ИНН</label>
                                      </div>
                                      <div class="mb-4">
                                        <div class="row">
                                          <div class="col-6">
                                            <div class="input-group input-group-merge">
                                              <div class="form-floating form-floating-outline">
                                                <input type="date" value="{{$slide->period_start}}" name="period_start" id="basic-default-email" class="form-control" placeholder="Аудируемый период" aria-label="john.doe" aria-describedby="basic-default-email2">
                                                <label for="basic-default-email">Аудируемый период Начало</label>
                                              </div>
                                              
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="input-group input-group-merge">
                                              <div class="form-floating form-floating-outline">
                                                <input value="{{$slide->period_end}}" type="date" name="period_end" id="basic-default-email" class="form-control" placeholder="Аудируемый период" aria-label="john.doe" aria-describedby="basic-default-email2">
                                                <label for="basic-default-email">Аудируемый период Оканчание</label>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <input type="date" id="basic-default-phone" value="{{$slide->end_date}}" name="end_date" class="form-control phone-mask" placeholder="Дата подписания аудиторского заключения">
                                        <label for="basic-default-phone">Дата подписани аудиторского заключения</label>
                                      </div>
                                      <div class="form-floating form-floating-outline mb-4">
                                        <select  class="form-select" id="exampleFormControlSelect1" name="type" aria-label="Default select example">
                                            <option disabled>Вид заключения</option>
                                            <option value="1" {{ $slide->type == 1 ? 'selected' : '' }}>Положительное</option>
                                            <option value="2" {{ $slide->type == 2 ? 'selected' : '' }}>Отрицательное</option>
                                            <option value="3" {{ $slide->type == 3 ? 'selected' : '' }}>С оговоркой</option>
                                        </select>
                                        <label for="exampleFormControlSelect1">Вид заключения</label>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Изменить</button>
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
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
@endpush
