@extends('admin.layouts.app')

@section('content')

	<!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div id="kt_content_container" class="container-xxl">
							<!--begin::Navbar-->
							<div class="card mb-5 mb-xl-10">

							</div>
							<!--end::Navbar-->
							<!--begin::Basic info-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bolder m-0">Setting</h3>
									</div>
									<!--end::Card title-->
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
									<!--begin::Form-->
                                    <form method="post" action="{{route('admin.settingupdate')}}" class="form">
                                        @csrf
                                        <input type="hidden" name="id" value="1">

										<!--end::Card body-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Show news page frontend </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="checkbox" id="new" name="new" value="1" {{($setting->new == '1')? 'checked' : ''}}>
                                                <label for="vehicle1"> Is active</label><br>
                                                <!--end::Input-->
                                                <!--begin::Hint-->
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Show faq page frontend  </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <input type="checkbox" id="faq" name="faq" value="1" {{($setting->faq == '1')? 'checked' : ''}}>
                                                <label for="vehicle1"> Is active</label><br>
                                                <!--end::Input-->
                                                <!--begin::Hint-->
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="reset" class="btn btn-light btn-active-light-primary me-2">Reset</button>
											<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>



						</div>
						<!--end::Container-->
					</div>

    <script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description', {
            height: 300,

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        } );
    </script>
					<!--end::Content-->
@endsection
