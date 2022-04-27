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
<h3 class="fw-bolder m-0">View Post </h3>
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
                    <div class="container">
                        <div class="row">

                     

                    <div class="col-md-6">
                    <tr style="line-height:6pc">
                            <td class="text-muted min-w-125px w-125px">  Image</td>
                            <td class="text-gray-800"><img src="#"  class="img-fluid" style="width: 150px;"></td>
                        </tr>


                    </div>

                    <div class="col-md-6">
                    <tr style="line-height:6pc">
                            <td class="text-muted min-w-125px w-125px">  Category</td>
                            <td class="text-gray-800">Advirtisment</td>
                        </tr>

                        
                    </div>


                    </div>
                    </div>



                    </table>

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
@endsection
