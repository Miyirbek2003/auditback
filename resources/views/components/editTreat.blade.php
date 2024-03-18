@extends('layouts.app')


@section('content')
    <h4 class="py-3 m-0"><span class="text-muted fw-light">Лечений /</span> Изменить категорию
    </h4>
    <h6 class="text-muted">Лечений</h6>

    <div class="row">

        <div class="table-responsive col-xl-12">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header p-0 col-lg">
                            {{-- <div class="nav-align-top">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link waves-effect active" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-top-home"
                                            aria-controls="navs-top-home" aria-selected="true">O'zbekcha</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link waves-effect" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-top-profile"
                                            aria-controls="navs-top-profile" aria-selected="false"
                                            tabindex="-1">Русский</button>
                                    </li>

                                    <span class="tab-slider" style="left: 0px; width: 91.1719px; bottom: 0px;"></span>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="card-body">

                            <form class="browser-default-validation needs-validation row form-hand" method="POST"
                                action="{{ route('treatments.update', ['treatment' => $slide]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="tab-content col-xl-12">
                                    <div class="tab-pane fade active   show" id="navs-top-home" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-floating form-floating-outline mb-4">
                                                    <input type="text" class="form-control h-px-25"
                                                        id="basic-default-bio" name='title'
                                                        value="{{$slide->title}}"
                                                        placeholder="Mavzuni kiriting" rows="3">
                                                    
                                                    <label for="basic-default-bio">Mavzu</label>
                                                    
                                                </div>

                                            </div>
                                            <div>
                                                <textarea class="ckeditor form-control" id="post_content" cols='30' name='body' placeholder="Kontent"
                                                    rows="10">{{ $slide->body }}</textarea>
                                             
                                                <label for="basic-default-bio">Kontent</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Изменить</button>
                                        </div>
                                    </div>
                                </div>
                                
                                

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
