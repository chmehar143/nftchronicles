@extends('admin.layouts.app')

@section('content')
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
                        <h3 class="fw-bolder m-0">Add New MARKET Place</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form method="post" action="{{route('admin.marketsave')}}" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->

                            <!--end::Input group-->

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Avatar</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/150-26.jpg)"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file"   class="@error('file') is-invalid @enderror" name="file"  id="formFileMultiple" type="file" multiple accept=".png, .jpg, .jpeg, .gif" />
                                            <input type="hidden" name="avatar_remove" />
                                            @error('file')
                                            <div class="validation ">{{ $message }}</div>
                                        @enderror
                                        <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> Title</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="title" class="form-control form-control-lg form-control-solid @error('title') is-invalid @enderror" placeholder=" Open Sea "  />
                                    @error('title')
                                    <div class="validation mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> Description </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea name="description" id="description" class="form-control form-control-lg form-control-solid @error('description') is-invalid @enderror" placeholder=" Description "  rows="6"></textarea>
                                    @error('description')
                                    <div class="validation mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> Twitter link</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="twitter_link" class="form-control form-control-lg form-control-solid @error('twitter_link') is-invalid @enderror" placeholder=" https://twitter.com/myriagames "  />
                                    @error('twitter_link')
                                    <div class="validation mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> instagram link</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="instagram_link" class="form-control form-control-lg form-control-solid @error('instagram_link') is-invalid @enderror" placeholder="https://help.instagram.com/372819389498306"  />
                                    @error('instagram_link')
                                    <div class="validation mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> website link</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="website_link" class="form-control form-control-lg form-control-solid @error('website_link') is-invalid @enderror" placeholder="https://opensea.io/"  />
                                    @error('website_link')
                                    <div class="validation mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-bold fs-6">Twitter Followers</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="twitter_follower"  class="form-control form-control-lg form-control-solid" placeholder="102.5"  />
                                </div>
                                <!--end::Col-->
                            </div>


                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-bold fs-6">Instagram  Followers </label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="instagram_follower"  class="form-control form-control-lg form-control-solid" placeholder="108.66"  />
                                </div>
                            </div>


                        </div>


                        <!--end::Card body-->
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
@endsection
