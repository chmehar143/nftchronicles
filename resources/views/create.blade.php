@extends('layouts.app')

@section('content')

<div class="create-new-wrapper"style="background: #1F1F1F !important;"><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-12 col-lg-8" data-aos="flip-left" data-aos-duration="800">
                <!-- Create New Form -->
                <div class="create-new-form border shadow-sm p-4 p-sm-5">
                    <h2 class="mb-4" style="font-family:bodoni;color:#DC6A2A;" data-aos="fade-up" data-aos-duration="800">Create New NFT Drop</h2>
                    <form  action="#" enctype="multipart/form-data" id="nft_form_submit">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="formFileMultiple">Upload NFT Drop Image * </label>
                                    <input class="form-control bg-transparent" id="formFileMultiple" name="file" type="file"  class="@error('file') is-invalid @enderror" >
                                    @error('file')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Contact Name * </label>
                                    <input class="form-control" id="noOfcopies" name="contact_name" type="text" placeholder="Contact Name" class="@error('contact_name') is-invalid @enderror">
                                    @error('contact_name')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Contact Email * </label>
                                    <input class="form-control" id="noOfcopies" type="text"  name="contact_email" placeholder=" Contact Email " class="@error('contact_email') is-invalid @enderror">
                                    @error('contact_email')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="title">NFT Name * </label>
                                    <input class="form-control" id="title" type="text" name="nft_name" placeholder="Macaw Bird" class="@error('nft_name') is-invalid @enderror">
                                    @error('nft_name')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="description">NFT Description * </label>
                                    <textarea class="form-control" id="message" name="nft_description" placeholder="Write in details" class="@error('nft_description') is-invalid @enderror" ></textarea>
                                    @error('nft_description')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="price">Pre-Sale Price * </label>
                                    <input class="form-control" id="price" type="text" name="pre_sale_price" class="@error('pre_sale_price') is-invalid @enderror"  placeholder="0.324 ">
                                    @error('pre_sale_price')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="price">Public Sale Price * </label>
                                    <input class="form-control" id="price" type="text" name="public_sale_price"  class="@error('public_sale_price') is-invalid @enderror"  placeholder="0.324 ">
                                    @error('public_sale_price')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="startingDate">Pre-Sale Date</label>
                                    <input class="form-control" id="startingDate" type="date" name="pre_sale_date" >
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="endingDate">Public Sale Date</label>
                                    <input class="form-control" id="endingDate" type="date" name="public_sale_date" >
                                </div>
                            </div>
                            <!-- <div class="col-sm-4"></div> -->
                            <div class="col-12 col-md-6">
                                <div class="form-check mb-4 mb-md-0">
                                    <input class="form-check-input" id="tba" type="checkbox" name="tba"  value="1"  class="@error('tba') is-invalid @enderror">
                                    <label class="form-check-label" for="tba">if pre sale Date is not define please check on (To Be Announced)</label>
                                    @error('tba')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6"></div>



                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Supply * </label>
                                    <input class="form-control" id="noOfcopies" type="text" name="supply" class="@error('supply') is-invalid @enderror" placeholder="10,000">
                                    @error('supply')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories">Select Blockchain * </label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" name="blockchain" id="catagories" class="@error('blockchain') is-invalid @enderror" >
                                        <option  value="">Choose...</option>
                                        <option  value="Ethereum">Ethereum</option>
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

                                    </select>
                                    @error('blockchain')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories"> Marketplace </label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" name="marketplace" id="catagories">
                                        <option  value="">Choose...</option>
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
                                    </select>
                                </div>
                            </div>



                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Marketplace Url </label>
                                    <input class="form-control" id="noOfcopies" name="marketplace_url" type="text" placeholder="https://opensea.io/collection/yournftproject ">
                                </div>
                            </div>





                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Discord * </label>
                                    <input class="form-control" id="noOfcopies" name="discord_link" type="text" placeholder="Discord Link" class="@error('discord_link') is-invalid @enderror">
                                    @error('discord_link')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Twitter</label>
                                    <input class="form-control" id="noOfcopies" name="twitter_link" type="text" placeholder="Twitter Link">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Website</label>
                                    <input class="form-control" id="noOfcopies" name="website" type="text" placeholder="Website Link">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Source (Announcement) </label>
                                    <input class="form-control" id="noOfcopies" name="source" type="text" placeholder="https://medium.com/yournftproject/announcement">
                                </div>
                            </div>







                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Traits Count </label>
                                    <input class="form-control" id="noOfcopies" name="traits_count" type="text" placeholder="EX: 150 ">
                                </div>
                            </div>


                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies"> Contract  </label>
                                    <input class="form-control" id="noOfcopies" name="contract" type="text" placeholder="0xPK1B983892r7FD09d3Z22J9Ec00E29f4cb786BAe ">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies"> Instagram   </label>
                                    <input class="form-control" id="noOfcopies" name="instagram_link" type="text" placeholder="Instagram Link">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories"> Category * </label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" name="category" id="catagories" class="@error('category') is-invalid @enderror">
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
                                    @error('category')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>




                            <div class="col-12 col-md-8">
                                <div class="form-check mb-4 mb-md-0">
                                    <input class="form-check-input" id="rememberMe" type="checkbox" name="rememberMe"  value="1" checked class="@error('rememberMe') is-invalid @enderror">
                                    <label class="form-check-label" for="rememberMe">I agree to all terms &amp; conditions.</label>
                                    @error('rememberMe')
                                    <div class="validation">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <button class="tf-button-st2 btn-effect" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-lg-3" data-aos="flip-right" data-aos-duration="800"  style="height:631px;width:358px">
                <!-- Preview Card -->
                <div class="nft-card card border-0" style="box-shadow:5px 20px 30px black;">
                    <div class="card-body">
                        <div class="img-wrap"><img src="{{$nft->file_path}}" alt=""  style="width:99%" class="img-fluid">


                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; {{$nft->pre_sale_date}}</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-0 align-items-center mt-0" style="background: #1F1F1F !important;height: 52px;">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;margin-left:1pc;"><img src="img/crypto1.png" width="14%" class="mb-1 me-1">{{$nft->pre_sale_price}}</span></div>
                            <div class="col-4 ">
                                <a href="{{route('item-details',$nft->id)}}"> <small style="color: white; margin-left:1pc;"><img src="img/diamond (2).png " class="mb-1  " style="width: 22px;"> {{$nft->supply}}K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center " style="margin-top:20px;">
                            <a href="{{route('item-details',$nft->id)}}">
                                <h5 class="text-center">{{$nft->nft_name}}  </h5>
                                <p class="text-center">{{Str::limit($nft->nft_description, 65, $end='.......')}}</p>
                            </a>

                            <!-- <div class="container-fluid" style="    background: #1F1F1F !important; width: 97%;border-radius:11px;margin-top: 65px;">
                                <div class="row">
                                    <div class="col-4" style="margin-top:-34px">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><img src="img/eye.png" class="mb-1"> {{$nft->discord_follower}}k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-34px">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><img src="img/insta.png" class="me-2 mb-1"></i>{{$nft->instagram_follower}}k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-34px">
                                        <div style="text-align-last: center;">


                                            <a href="{{$nft->discord_link}}">  <span class="d-block fz-15" style="color: white;"><img src="img/twitter.png" class="me-2 mb-1">{{$nft->twitter_follower}}k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="container-fluid" style="    background: #1F1F1F !important; width: 97%;  height: 65px;border-radius:11px;margin-top: 40px;"><a href="http://127.0.0.1:8000/item-details/33">
                                </a><div class="row"><a href="http://127.0.0.1:8000/item-details/33">
                                    </a><div class="col-4" style="margin-top:-34px"><a href="http://127.0.0.1:8000/item-details/33">
                                        </a><div style="text-align-last: center;"><a href="http://127.0.0.1:8000/item-details/33">
                                            </a><a href="#"><span class="d-block fz-15" style="color: white;"><img src="img/eye.png" class="mb-1"> 0.00k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-6px">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><img src="img/insta.png" class="me-2 mb-1">0.00k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-6px">
                                        <div style="text-align-last: center;">


                                            <a href="https://discord.google.com/">  <span class="d-block fz-15" style="color: white;"><img src="img/twitter.png" class="me-2 mb-1">0.00k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><br><br><Br>
</div>


<script>

    $(document).ready(function(){

        var form = '#nft_form_submit';

        $(form).on('submit', function(event){
            event.preventDefault();
            var url = $(this).attr('data-action');

            $.ajax({
                url: "{{route('nft.save')}}",
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {
                    $(form).trigger("reset");
                    alert(response.success);
                },
                error: function(response) {
                }
            });
        });

    });

</script>
@endsection
