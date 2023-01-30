@extends('dashboard.master')
@section('page_title' , 'create company')
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


                <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data"
                      action="{{route('companies.store')}}" method="post">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center" style="margin-top: 10px">
                        <h3>
                            Create New Company
                        </h3>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Name</span></label>
                                <input type="text" class="form-control form-control-solid"
                                       placeholder="Enter Company name"
                                       name="name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Email</span></label>
                                <input type="email" class="form-control form-control-solid"
                                       placeholder="Enter Company email"
                                       name="email" value="{{old('email')}}">
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Website</span></label>
                                <input type="text" class="form-control form-control-solid"
                                       placeholder="Enter Company website"
                                       name="website" value="{{old('website')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center"><span>Logo</span></label>
                                <input type="file" class="form-control form-control-solid" name="logo">
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
