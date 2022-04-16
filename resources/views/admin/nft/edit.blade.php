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
                    <h3 class="fw-bolder m-0">Create New NFT Drop Details</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form method="post" action="{{route('admin.nftsave')}}" enctype="multipart/form-data" class="form">
                    @csrf
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
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
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
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
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Contact Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">

                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="contact_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Contact name" value="{{$nft->contact_name}}" />
                                    </div>
                                </div>
                                <!--end::Row-->

                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Contact Email</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="contact_email" class="form-control form-control-lg form-control-solid" placeholder="Contact Email " value="{{$nft->contact_email}}" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NFT Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nft_name" class="form-control form-control-lg form-control-solid" placeholder="Nft name" value="{{$nft->nft_name}}" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NFT Description</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nft_description" class="form-control form-control-lg form-control-solid" placeholder="Nft Description" value="{{$nft->nft_description}}" />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pre Sale Price</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="111" />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Public Sale Price</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="011" />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pre-Sale Date  </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="datetime-local" name="company" class="form-control form-control-lg form-control-solid"  />
                            </div>
                            <!--end::Col-->
                        </div>



                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Public Sale Date</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="datetime-local" name="company" class="form-control form-control-lg form-control-solid"  />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Supply  </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid"  value="20000" />
                            </div>
                            <!--end::Col-->
                        </div>


                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">BlockChain</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="country" aria-label="Select a BlockChain" data-control="select2" data-placeholder="Select a BlockChain..." class="form-select form-select-solid form-select-lg fw-bold">
                                    <option  value="">Select a BlockChain...</option>
                                    <option  value="1">Ethereum</option>
                                    <option value="2">Solana</option>
                                    <option value="3">Polygon</option>
                                    <option value="4">Cardano</option>
                                    <option value="5">Terra</option>
                                    <option value="6">Avalanche(Avax)</option>
                                    <option value="7">BSC (Binance Smart Chain)</option>
                                    <option value="8">Harmony</option>
                                    <option value="9">Matic</option>
                                    <option value="10">Near</option>
                                    <option value="11">Nervos</option>
                                    <option value="12">Tezos</option>
                                    <option value="13">Wax</option>
                                    <option value="14"> Cronos</option>
                                    <option value="15"> Elrond</option>
                                    <option value="16"> FLOW</option>
                                    <option value="17"> Fantom</option>
                                    <option value="18"> EOSIO</option>
                                    <option value="19"> Internet Computer</option>
                                    <option value="20"> Immutable X</option>
                                    <option value="21"> Moonriver</option>
                                    <option value="22"> XRP Ledger</option>
                                    <option value="23"> VeChain</option>
                                    <option value="24"> xDAI</option>
                                    <option value="25"> Secret</option>
                                    <option value="26"> Theta</option>
                                    <option value="27"> Hathor</option>
                                    <option value="28"> HIVE</option>
                                    <option value="29"> DeSo</option>
                                    <option value="30"> Ethernity</option>
                                    <option value="31"> Stellar XLM</option>
                                    <option value="32"> TRON</option>
                                    <option value="33"> LINE</option>
                                    <option value="34"> Others</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Marketplace</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->
                                <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Marketplace..." class="form-select form-select-solid form-select-lg">
                                    <option value="">Select a Marketplace...</option>
                                    <option value="2">Magic Eden</option>
                                    <option value="3">Rarible</option>
                                    <option value="4">Entrepot</option>
                                    <option value="5">NiftyGateway</option>
                                    <option value="6">Solsea</option>
                                    <option value="7">Foundation</option>
                                    <option value="8">Solanart</option>
                                    <option value="9">SuperRare</option>
                                    <option value="10">KnownOrigin</option>
                                    <option value="11">NFTrade</option>
                                </select>
                                <!--end::Input-->
                                <!--begin::Hint-->
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Marketplace Url   </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="https://opensea.io/collection/yournftproject"  />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Discord    </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="Discord Link"  />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Twitter    </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="Twitter Link"  />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Website Link    </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="Website Link"  />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Source (Announcement)     </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="https://medium.com/yournftproject/announcement"  />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Traits Count      </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="EX:150"  />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Contract      </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="0xPK1B983892r7FD09d3Z22J9Ec00E29f4cb786BAe"  />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Instagram      </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="company" class="form-control form-control-lg form-control-solid" value="Instagram Link"  />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Category</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="currnecy" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a Category.." class="form-select form-select-solid form-select-lg">
                                    <option value="">Select a Category..</option>
                                    <option selected value="1">Art</option>
                                        <option value="2">auction </option>
                                        <option value="3">charity</option>
                                        <option value="4">collaboration</option>
                                        <option value="5">collectible</option>
                                        <option value="6">dao</option>
                                        <option value="7">defi</option>
                                        <option value="8">game</option>
                                        <option value="9">generative</option>
                                        <option value="10">giveaway</option>
                                        <option value="11">metaverse</option>
                                        <option value="12">music</option>
                                        <option value="13">photo</option>
                                        <option value="14">rewards</option>
                                        <option value="15">sports</option>
                                        <option value="16">video</option>

                                </select>
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
					<!--end::Content-->
@endsection
