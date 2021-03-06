@extends('admin.layouts.app')

@section('content')
<div id="kt_customer_view_payment_method" class="card-body pt-0 container">
													<!--begin::Option-->

													<div class="py-0" data-kt-customer-payment-method="row">
														<!--begin::Header-->
														<div class="py-3 d-flex flex-stack flex-wrap">
                                                            	<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer container" style=" padding: 20px 30px;" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bolder m-0">View NFT Drop Details</h3>
									</div>
									<!--end::Card title-->
								</div>
                                                <!--begin::Toggle-->
                            <div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                                    <!--begin::Arrow-->
                                                    <div class="me-3 rotate-90">

                                                    </div>
                                                    <!--end::Arrow-->
                                                    <!--begin::Logo-->
                                                    <img src="#" class="w-140px me-3" alt="" />
                                                    <!--end::Logo-->

                                                </div>
                                                <!--end::Toggle-->
                                                <!--begin::Toolbar-->

                                                <!--end::Toolbar-->
                                            </div>
														<!--end::Header-->
														<!--begin::Body-->
														<div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
															<!--begin::Details-->
															<div class="d-flex flex-wrap py-5">
																<!--begin::Col-->
																<div class="flex-equal me-5">
																	<table class="table table-flush fw-bold gy-1">
                                                                    <tr>
																			<td class="text-muted min-w-125px w-125px">Image  : </td>
																			<td class="text-gray-800"><img  src="{{ asset($nft->file_path) }}" style="width: 50px;"/> </td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">Contact Name : </td>
																			<td class="text-gray-800">{{$nft->contact_name}}</td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">Contact Email  :  </td>
																			<td class="text-gray-800">{{$nft->contact_email}}</td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">NFT Name  : </td>
																			<td class="text-gray-800">{{$nft->nft_name}}</td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">NFT Description  : </td>
																			<td class="text-gray-800">{{$nft->nft_description}}</td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">Pre-Sale Price  : </td>
																			<td class="text-gray-800">{{$nft->pre_sale_price}}</td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">Public Sale Price : </td>
																			<td class="text-gray-800">{{$nft->public_sale_price}}</td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">Pre-Sale Date : </td>
																			<td class="text-gray-800">{{$nft->pre_sale_date}}</td>
																		</tr>
																		<tr>
																			<td class="text-muted min-w-125px w-125px">Public Sale Date : </td>
																			<td class="text-gray-800">{{$nft->public_sale_date}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Supply : </td>
																			<td class="text-gray-800">{{$nft->supply}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Blockchain : </td>
																			<td class="text-gray-800">{{$nft->blockchain}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Marketplace  :  </td>
																			<td class="text-gray-800">{{$nft->marketplace}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px"> Marketplace Url :  </td>
																			<td class="text-gray-800">{{$nft->marketplace_url}}</td>
																			<br>

																		</tr>

																	</table>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="flex-equal">
																	<table class="table table-flush fw-bold gy-1">

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Discord  :  </td>
																			<td class="text-gray-800">{{$nft->discord_link}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Twitter :  </td>
																			<td class="text-gray-800">{{$nft->twitter_link}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Website  : </td>
																			<td class="text-gray-800">{{$nft->website}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Source  :  </td>
																			<td class="text-gray-800">{{$nft->source}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Traits Count  :  </td>
																			<td class="text-gray-800">{{$nft->traits_count}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Contract  :  </td>
																			<td class="text-gray-800">{{$nft->contract}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Instagram  :  </td>
																			<td class="text-gray-800">{{$nft->instagram_link}}</td>
																		</tr>

																		<tr>
																			<td class="text-muted min-w-125px w-125px">Category  : </td>
																			<td class="text-gray-800">{{$nft->category}}</td>
																		</tr>

                                                                        <tr>
                                                                            <td class="text-muted min-w-125px w-125px">Show home page  : </td>
                                                                            <td class="text-gray-800">{{$nft->show_home_page}}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-muted min-w-125px w-125px">Show feature post  : </td>
                                                                            <td class="text-gray-800">{{$nft->show_feature_post}}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="text-muted min-w-125px w-125px">Status  : </td>
                                                                            <td class="text-gray-800">{{ $nft->status == 0  ? "Not Approved" : "Approved" }}</td><br>

                                                                        </tr>
																		<tr>
																		<td class="text-muted min-w-125px w-125px" >                                                                            <button name="btn" class="btn btn-info btn-sm" onclick="change_reject('{{$nft->id}}')" > Reject NFT  </button></td> </td>
																		<td><button name="btn" class="btn btn-info btn-sm" onclick="change_status('{{$nft->id}}')" > Change Status  </button></td>
                                                                         </tr>

																	</table>
																</div>
																<!--end::Col-->
															</div>
															<!--end::Details-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Option-->
													<div class="separator separator-dashed"></div>

													<div class="separator separator-dashed"></div>

												</div>
												<!--end::Card body-->
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    function change_status(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You are be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change the status!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{url('admin/changestatus')}}"+ '/' + id,
                    success: function(data) {
                        Swal.fire(
                            'Updated!',
                            'NFT Status has been updated.',
                            'success'
                        )
                        location.reload();
                    }
                });
            }
        })
    }
    function change_reject(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You are be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Reject!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{url('admin/changereject')}}"+ '/' + id,
                    success: function(data) {
                        Swal.fire(
                            'Updated!',
                            'NFT Status has been Rejected.',
                            'success'
                        )
                        location.reload();
                    }
                });
            }
        })
    }
</script>
@endsection
