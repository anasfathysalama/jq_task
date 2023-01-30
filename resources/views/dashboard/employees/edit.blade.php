@extends('dashboard.master')
@section('page_title' , 'edit employee')
@push('style')
@endpush

@section('content')
    <div class="card">
        <div class="card-body p-0">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">


                <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                      action="{{route('employees.update' , $employee->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <!--begin::Heading-->
                    <div class="mb-13 text-center" style="margin-top: 10px">
                        <h3>
                            Edit Employee
                        </h3>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>First Name</span></label>
                                <input type="text" class="form-control form-control-solid"
                                       placeholder="Enter First name"
                                       name="first_name" value="{{$employee->first_name}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Last Name</span></label>
                                <input type="text" class="form-control form-control-solid"
                                       placeholder="Enter Last name"
                                       name="last_name" value="{{$employee->last_name}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Company</span></label>
                                <select class="form-select form-select-solid" name="company_id">
                                    <option value=""></option>
                                    @foreach($companies as $company)
                                        @if((int)$company->id === (int)$employee->company_id)
                                            <option selected value="{{$company->id}}">{{$company->name}}</option>
                                        @else
                                            <option value="{{$company->id}}">{{$company->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Phone</span></label>
                                <input type="text" class="form-control form-control-solid"
                                       placeholder="Enter Phone"
                                       name="phone" value="{{$employee->phone}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Email</span></label>
                                <input type="email" class="form-control form-control-solid"
                                       placeholder="Enter Email"
                                       name="email" value="{{$employee->email}}">
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection


@push('scripts')
@endpush
