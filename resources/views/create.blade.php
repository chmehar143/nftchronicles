@extends('layouts.app')

@section('content')

<div class="divider"></div>
<div class="divider"></div>
<div class="create-new-wrapper">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Create New Form -->
                <div class="create-new-form border shadow-sm p-4 p-sm-5">
                    <h2 class="mb-4">Create New NFT Drop</h2>
                    <form method="post" action="{{route('nft.save')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="formFileMultiple">Upload NFT Drop Image:</label>
                                    <input class="form-control bg-transparent" id="formFileMultiple" name="file" type="file"  class="@error('file') is-invalid @enderror" >
                                    @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Contact Name</label>
                                    <input class="form-control" id="noOfcopies" name="contact_name" type="text" placeholder="Contact Name" class="@error('contact_name') is-invalid @enderror">
                                    @error('contact_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Contact Email </label>
                                    <input class="form-control" id="noOfcopies" type="text"  name="contact_email" placeholder=" Contact Email ">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="title">NFT Name</label>
                                    <input class="form-control" id="title" type="text" name="nft_name" placeholder="Macaw Bird">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="description">NFT Description</label>
                                    <textarea class="form-control" id="message" name="nft_description" placeholder="Write in details"></textarea>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="price">Pre-Sale Price</label>
                                    <input class="form-control" id="price" type="text" name="pre_sale_price"  placeholder="0.324 ">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="price">Public Sale Price</label>
                                    <input class="form-control" id="price" type="text" name="public_sale_price" placeholder="0.324 ">
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


                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Supply</label>
                                    <input class="form-control" id="noOfcopies" type="text" name="supply" placeholder="10,000">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories">Select Blockchain</label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" name="blockchain" id="catagories">
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

                                    </select>
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories"> Marketplace </label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" name="marketplace" id="catagories">
                                        <option selected value="OpenSea">OpenSea</option>
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
                                    <label class="mb-2 fz-16" for="noOfcopies">Discord</label>
                                    <input class="form-control" id="noOfcopies" name="discord_link" type="text" placeholder="Discord Link">
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
                                    <label class="mb-2 fz-16" for="catagories"> Category </label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" name="category" id="catagories">
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
                            </div>




                            <div class="col-12 col-md-8">
                                <div class="form-check mb-4 mb-md-0">
                                    <input class="form-check-input" id="rememberMe" type="checkbox" name="rememberMe"  value="1" checked>
                                    <label class="form-check-label" for="rememberMe">I agree to all terms &amp; conditions.</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <button class="btn btn-primary rounded-pill w-100" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-lg-3">
                <!-- Preview Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/1.gif" alt="">
                            <!-- Badge -->
                            <div class="badge bg-dark position-absolute">
                                <img src="img/star.png" alt="">
                            </div>

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
                <h5 class="mb-0 mt-3 text-center"><i class="bi bi-eye me-1"></i>Live Preview</h5>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
@endsection
