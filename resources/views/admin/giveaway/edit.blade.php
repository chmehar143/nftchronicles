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
										<h3 class="fw-bolder m-0">Edit  Post</h3>
									</div>
									<!--end::Card title-->
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
									<!--begin::Form-->
                                    <form method="post" action="{{route('admin.giveawayupdate')}}" enctype="multipart/form-data" class="form">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$giveaway->id}}">
										<div class="card-body border-top p-9">

                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset($giveaway->file_path)}})"></div>
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
                                                    <input type="text" name="title" value="{{$giveaway->title}}" class="form-control form-control-lg form-control-solid @error('title') is-invalid @enderror" placeholder=" PharaGods "  />
                                                    @error('title')
                                                    <div class="validation mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> Details</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="text" name="details" value="{{$giveaway->details}}" class="form-control form-control-lg form-control-solid @error('details') is-invalid @enderror" placeholder=" 2 NFTs + 100 WL Spots "  />
                                                    @error('details')
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
                                                    <input type="text" name="twitter_link"  value="{{$giveaway->twitter_link}}" class="form-control form-control-lg form-control-solid @error('twitter_link') is-invalid @enderror" placeholder=" https://twitter.com/myriagames "  />
                                                    @error('twitter_link')
                                                    <div class="validation mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> discord link</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="text" name="discord_link" value="{{$giveaway->discord_link}}" class="form-control form-control-lg form-control-solid @error('discord_link') is-invalid @enderror" placeholder="https://discord.com/invite/oddstronauts"  />
                                                    @error('discord_link')
                                                    <div class="validation mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label  fw-bold fs-6" for="startingDate"> Start Date </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="date"  id="startingDate"  name="start_date" value="{{$giveaway->start_date}}" class="form-control form-control-lg form-control-solid "  />

                                                </div>
                                                <!--end::Col-->
                                            </div>



                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label  fw-bold fs-6" for="startingDate">End Date  </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <input type="date"  id="startingDate"  name="end_date" value="{{$giveaway->end_date}}" class="form-control form-control-lg form-control-solid "  />

                                                </div>
                                                <!--end::Col-->
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
					<!--end::Content-->
@endsection
