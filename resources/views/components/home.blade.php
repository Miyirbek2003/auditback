@extends('layouts.app')

@section('content')
    <div class="row gy-4">
        

        <div class="col-lg-3 col-sm-6 col-12">
            <a href="{{ route('employees.index') }}">
                <div class="card bg-success">
                    <div class="card-header align-items-start pb-3">
                        <div>
                            <h2 class="fw-bolder text-white" style="display: flex; justify-content: space-between">
                                {{ $workers }}
                                <i class="menu-icon tf-icons mdi mdi-account-outline"></i>

                            </h2>
                            <p class="card-text text-white">Отчеты</p>
                        </div>

                    </div>
                </div>
            </a>
        </div>
        
    </div>
@endsection
