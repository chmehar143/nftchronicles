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
										<h3 class="fw-bolder m-0">Add New Blogs</h3>
									</div>
									<!--end::Card title-->
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
									<!--begin::Form-->
                                    <form method="post" action="{{route('admin.newssave')}}" enctype="multipart/form-data" class="form">
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
												<label class="col-lg-4 col-form-label required fw-bold fs-6"> News Heading</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="text" name="heading" class="form-control form-control-lg form-control-solid @error('heading') is-invalid @enderror" placeholder=" News Heading "  />
                                                    @error('heading')
                                                    <div class="validation mt-1">{{ $message }}</div>
                                                    @enderror
												</div>
												<!--end::Col-->
											</div>

											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-bold fs-6">News Description </label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<textarea name="description" class="form-control form-control-lg form-control-solid @error('description') is-invalid @enderror" placeholder="News Description "  rows="6"></textarea>
                                                    @error('description')
                                                    <div class="validation mt-1">{{ $message }}</div>
                                                    @enderror
												</div>
												<!--end::Col-->
											</div>

											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-bold fs-6" > News Category</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select  aria-label="Select a Timezone" name="category" id="catagories" data-control="select2" data-placeholder="Select a Category.." class="form-select form-select-solid form-select-lg @error('category') is-invalid @enderror">
														<option value="">Select a News..</option>
														    <option value="Simple News">Simple News</option>
															<option value="Popular Post">Popular Post</option>
															<option value="Important News">Important News</option>
													</select>
                                                    @error('category')
                                                    <div class="validation mt-1">{{ $message }}</div>
                                                    @enderror

												</div>
												<!--end::Col-->
											</div>


										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
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
@endsection
