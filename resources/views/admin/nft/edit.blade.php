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
                <form method="post" action="{{route('admin.nftupdate')}}" enctype="multipart/form-data" class="form">
                    @csrf
                    <input type="hidden" name="id" value="{{$nft->id}}">
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Select Image</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset($nft->file_path)}})"></div>
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
                                        <input type="text" name="contact_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('contact_name') is-invalid @enderror " placeholder="Contact name" value="{{$nft->contact_name}}" />
                                        @error('contact_name')
                                        <div class="validation mt-1">{{ $message }}</div>
                                        @enderror
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
                                <input type="email" name="contact_email" class="form-control form-control-lg form-control-solid @error('contact_email') is-invalid @enderror " placeholder="Contact Email " value="{{$nft->contact_email}}" />
                                @error('contact_email')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NFT Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nft_name" class="form-control form-control-lg form-control-solid @error('nft_name') is-invalid @enderror " placeholder="Nft name" value="{{$nft->nft_name}}" />
                                @error('nft_name')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NFT Description</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <textarea class="form-control form-control-lg form-control-solid" id="message" name="nft_description" placeholder="nft description" class="@error('nft_description') is-invalid @enderror" >{{$nft->nft_description}}</textarea>
                                @error('nft_description')
                                <div class="validation ">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Pre Sale Price</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="pre_sale_price" class="form-control form-control-lg form-control-solid @error('pre_sale_price') is-invalid @enderror" placeholder="pre sale price" value="{{$nft->pre_sale_price}}" />
                                @error('pre_sale_price')
								<div class="validation ">{{ $message }}</div>
								@enderror
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6" >Public Sale Price</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="public_sale_price" class="form-control form-control-lg form-control-solid @error('public_sale_price') is-invalid @enderror" placeholder="public sale price"  value="{{$nft->public_sale_price}}"  />
                                @error('public_sale_price')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6"  for="startingDate">Pre-Sale Date  </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" id="startingDate"  name="pre_sale_date" class="form-control form-control-lg form-control-solid"  value="{{$nft->pre_sale_date}}"  />
                            </div>
                            <!--end::Col-->
                        </div>



                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6" for="endingDate">Public Sale Date</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" id="endingDate" name="public_sale_date" class="form-control form-control-lg form-control-solid" value="{{$nft->public_sale_date}}" />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Supply  </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                             <input type="text"  name="supply" class="form-control form-control-lg form-control-solid @error('supply') is-invalid @enderror"  value="{{$nft->supply}}" />
                            @error('supply')
													<div class="validation">{{ $message }}</div>
													@enderror
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
                                <select  aria-label="Select a BlockChain" data-control="select2" data-placeholder="Select a BlockChain..."  name="blockchain"  id="catagories" class="form-select form-select-solid form-select-lg fw-bold @error('blockchain') is-invalid @enderror">
                                    @if($nft->blockchain)
                                        <option value="{{$nft->blockchain}}" selected>{{$nft->blockchain}}</option>
                                    @else
                                    <option  value="">Select a BlockChain...</option>
														<option selected value="Ethereum">Ethereum</option>
														<option value="Solana">Solana</option>
														<option value="Polygon">Polygon</option>
														<option value="Cardano">Cardano</option>
														<option value="Terra">Terra</option>
														<option value="Avalanche(Avax)">Avalanche(Avax)</option>
														<option value="BSC (Binance Smart Chain)">BSC (Binance Smart Chain)</option>
														<option value="Harmony">Harmony</option>
														<option value="Matic">Matic</option>
														<option value="Near">Near</option>
														<option value="Nervos">Nervos</option>
														<option value="Tezos">Tezos</option>
														<option value="Wax">Wax</option>
														<option value="Cronos">Cronos</option>
														<option value="Elrond">Elrond</option>
														<option value="FLOW">FLOW</option>
														<option value="Fantom">Fantom</option>
														<option value="EOSIO">EOSIO</option>
														<option value="Internet Computer">Internet Computer</option>
														<option value="Immutable X">Immutable X</option>
														<option value="Moonriver">Moonriver</option>
														<option value="XRP Ledger">XRP Ledger</option>
														<option value="VeChain">VeChain</option>
														<option value="xDAI">xDAI</option>
														<option value="Secret">Secret</option>
														<option value="Theta">Theta</option>
														<option value="Hathor">Hathor</option>
														<option value="HIVE">HIVE</option>
														<option value="DeSo">DeSo</option>
														<option value="Ethernity">Ethernity</option>
														<option value="Stellar XLM">Stellar XLM</option>
														<option value="TRON">TRON</option>
														<option value="LINE">LINE</option>
														<option value="Others">Others</option>
                                                     @endif
													</select>
													@error('blockchain')
													<div class="validation">{{ $message }}</div>
													@enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Marketplace</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->
                                <select  aria-label="Select a Marketplace" data-control="select2" data-placeholder="Select a Marketplace..."  name="marketplace" id="catagories" class="form-select form-select-solid form-select-lg">
                                    @if($nft->marketplace)
                                        <option value="{{$nft->marketplace}}" selected>{{$nft->marketplace}}</option>
                                    @else
                                                        <option value="">Select a Marketplace...</option>
														<option value="OpenSea">OpenSea</option>
														<option value="Magic Eden">Magic Eden</option>
														<option value="Rarible">Rarible</option>
														<option value="Entrepot">Entrepot</option>
														<option value="NiftyGateway">NiftyGateway</option>
														<option value="Solsea">Solsea</option>
														<option value="Foundation">Foundation</option>
														<option value="Solanart">Solanart</option>
														<option value="SuperRare">SuperRare</option>
														<option value="KnownOrigin">KnownOrigin</option>
														<option value="NFTrade">NFTrade</option>
                                    @endif
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
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Marketplace Url   </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="marketplace_url" class="form-control form-control-lg form-control-solid" value="{{$nft->marketplace_url}}"  />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Discord    </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="discord_link" class="form-control form-control-lg form-control-solid  @error('discord_link') is-invalid @enderror" value="{{$nft->discord_link}}"  />
                                @error('discord_link')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Discord Follower   </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="discord_follower" class="form-control form-control-lg form-control-solid  @error('discord_follower') is-invalid @enderror" value="{{$nft->discord_follower}}"  />
                                @error('discord_follower')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Twitter    </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="twitter_link" value="{{$nft->twitter_link}}"  class="form-control form-control-lg form-control-solid"  />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Twitter Follower   </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="twitter_follower" value="{{$nft->twitter_follower}}"  class="form-control form-control-lg form-control-solid"  />
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Website Link    </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text"  name="website"  value="{{$nft->website}}"  class="form-control form-control-lg form-control-solid"   />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">

                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Source (Announcement)     </label>
                            <div class="col-lg-8 fv-row">
                                <input type="text"  name="source"  value="{{$nft->source}}" class="form-control form-control-lg form-control-solid"   />
                            </div>
                        </div>

                        <div class="row mb-6">

                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Traits Count      </label>
                            <div class="col-lg-8 fv-row">
                                <input type="text"  name="traits_count" value="{{$nft->traits_count}}" class="form-control form-control-lg form-control-solid"   />
                            </div>
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Contract      </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text"  name="contract"  value="{{$nft->contract}}" class="form-control form-control-lg form-control-solid" />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Instagram      </label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="instagram_link"  value="{{$nft->instagram_link}}" class="form-control form-control-lg form-control-solid"  />
                            </div>
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Instagram Follower </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="instagram_follower"  value="{{$nft->instagram_follower}}" class="form-control form-control-lg form-control-solid"   />
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Category</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select  aria-label="Select a Timezone" name="category" id="catagories" data-control="select2" data-placeholder="Select a Category.." class="form-select form-select-solid form-select-lg @error('category') is-invalid @enderror">
                                    <option value="">Select a Category..</option>
                                    <option  value="1" {{($nft->category == '1') ? 'Selected' : ''}} >Art</option>
                                        <option value="2" {{($nft->category == '2') ? 'Selected' : ''}}>auction </option>
                                        <option value="3" {{($nft->category == '3') ? 'Selected' : ''}}>charity</option>
                                        <option value="4" {{($nft->category == '4') ? 'Selected' : ''}}>collaboration</option>
                                        <option value="5" {{($nft->category == '5') ? 'Selected' : ''}}>collectible</option>
                                        <option value="6" {{($nft->category == '6') ? 'Selected' : ''}}>dao</option>
                                        <option value="7" {{($nft->category == '7') ? 'Selected' : ''}}>defi</option>
                                        <option value="8" {{($nft->category == '8') ? 'Selected' : ''}}>game</option>
                                        <option value="9" {{($nft->category == '9') ? 'Selected' : ''}}>generative</option>
                                        <option value="10" {{($nft->category == '10') ? 'Selected' : ''}}>giveaway</option>
                                        <option value="11" {{($nft->category == '11') ? 'Selected' : ''}}>metaverse</option>
                                        <option value="12" {{($nft->category == '12') ? 'Selected' : ''}}>music</option>
                                        <option value="13" {{($nft->category == '13') ? 'Selected' : ''}}>photo</option>
                                        <option value="14" {{($nft->category == '14') ? 'Selected' : ''}}>rewards</option>
                                        <option value="15" {{($nft->category == '15') ? 'Selected' : ''}}>sports</option>
                                        <option value="16" {{($nft->category == '16') ? 'Selected' : ''}}>video</option>

                                </select>
                                </select>
													@error('category')
													<div class="validation">{{ $message }}</div>
													@enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">Is Sponsored post</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="checkbox" id="is_sponsored_post" name="is_sponsored_post" value="1" {{($nft->is_sponsored_post == '1')? 'checked' : ''}}>
                                <label for="vehicle1"> Is active</label><br>
                                <!--end::Input-->
                                <!--begin::Hint-->
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label  fw-bold fs-6">Show home page </label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
												<input type="checkbox" id="show_home_page" name="show_home_page" value="1" {{($nft->show_home_page == '1')? 'checked' : ''}}>
												<label for="vehicle1"> Is active</label><br>
													<!--end::Input-->
													<!--begin::Hint-->
													<!--end::Hint-->
												</div>
												<!--end::Col-->
											</div>
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label  fw-bold fs-6">Show  feature post  </label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
												<input type="checkbox" id="show_feature_post" name="show_feature_post" value="1" {{($nft->show_feature_post == '1')? 'checked' : ''}}>
  													<label for="vehicle1"> Is active</label><br>
													<!--end::Input-->
													<!--begin::Hint-->
													<!--end::Hint-->
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
