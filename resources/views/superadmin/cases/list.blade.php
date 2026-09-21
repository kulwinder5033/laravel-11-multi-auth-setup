@extends('layouts.superadmin')
@section("title", "Cases | Superadmin")
@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Cases</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Cases</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="{{ route('superadmin.cases.create') }}" class="btn btn-sm fw-bold btn-primary">Add Case</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                @include("superadmin.sections.flash-message")

                <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-md-12 mb-xl-12">
                        <!--begin::Card widget-->
                        <div class="card card-flush">
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                  <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-150px">Title</th>
                                            <th class="min-w-150px">Image</th>
                                            <th class="min-w-150px">Order</th>
                                            <th class="min-w-150px">Publish</th>
                                            <th class="min-w-150px">Status</th>
                                            <th class="min-w-150px">Action</th>             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cases as $case)
                                        <tr>
                                            <td>{{ $case->title }}</td>
                                            <td><img id="preview_img" src="{{ asset('storage/uploads/case/image/' . $case->image) }}" class="mt-1" width="100"
                                                height="100" /></td>
                                            <td>{{ $case->order }}</td>
                                            <td><span class="badge mt-2 p-3 text-white 
                                                {{ $case->publish == 'Active' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $case->publish }}
                                            </span></td>
                                            <td><span class="badge mt-2 p-3 text-white 
                                                {{ $case->status == 'Current' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $case->status }}
                                            </span></td>
                                            <td>
                                                <a href="{{ route('superadmin.cases.edit', $case->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="javascript:void(0);" onclick="confirmDelete({{ $case->id }})" class="btn btn-sm btn-danger">Delete</a>
                                                <form id="delete-form{{$case->id}}" action="{{ route('superadmin.cases.destroy', $case->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach 
                                   
                                    <tr>
                                        <td colspan="6">
                                            {{ $cases->appends(request()->query())->links('pagination::bootstrap-5') }}
                                        </td>       
                                    </tr>
                                     </tbody>
                                  </table>
                                 
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget -->

                    </div>

                </div>

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
   
</div>
@endsection
@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function confirmDelete(e) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Delete it!"
        }).then(t => {
            t.isConfirmed && document.getElementById("delete-form" + e).submit()
        })
    }
</script>
@endpush

