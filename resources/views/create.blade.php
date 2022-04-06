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
                    <form action="#">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="formFileMultiple">Upload NFT Drop Image:</label>
                                    <input class="form-control bg-transparent" id="formFileMultiple" type="file" multiple>
                                </div>
                            </div>
                            <!-- <div class="col-12">
                              <div class="form-group mb-4">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1" checked>
                                  <label class="form-check-label" for="inlineRadio1">Fixed price</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Unlock Purchased</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3">
                                  <label class="form-check-label" for="inlineRadio3">Open for bids</label>
                                </div>
                              </div>
                            </div> -->
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Contact Name</label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="Contact Name">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Contact Email </label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder=" Contact Email ">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="title">NFT Name</label>
                                    <input class="form-control" id="title" type="text" placeholder="Macaw Bird">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="description">NFT Description</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Write in details"></textarea>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="price">Pre-Sale Price</label>
                                    <input class="form-control" id="price" type="text" placeholder="0.324 ">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="price">Public Sale Price</label>
                                    <input class="form-control" id="price" type="text" placeholder="0.324 ">
                                </div>
                            </div>



                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="startingDate">Pre-Sale Date</label>
                                    <input class="form-control" id="startingDate" type="date">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="endingDate">Public Sale Date</label>
                                    <input class="form-control" id="endingDate" type="date">
                                </div>
                            </div>
                            <!-- <div class="col-12 col-lg-6">
                              <div class="form-group mb-4">
                                <label class="mb-2 fz-16" for="royality">Royality</label>
                                <input class="form-control" id="royality" type="text" placeholder="5%">
                              </div>
                            </div>
                             -->

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Supply</label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="10,000">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories">Select Blockchain</label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" id="catagories">
                                        <option selected value="1">Ethereum</option>
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
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories"> Marketplace </label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" id="catagories">
                                        <option selected value="1">OpenSea</option>
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
                                </div>
                            </div>



                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Marketplace Url </label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="https://opensea.io/collection/yournftproject ">
                                </div>
                            </div>





                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Discord</label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="Discord Link">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Twitter</label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="Twitter Link">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Website</label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="Website Link">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Source (Announcement) </label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="https://medium.com/yournftproject/announcement">
                                </div>
                            </div>







                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies">Traits Count </label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="EX: 150 ">
                                </div>
                            </div>


                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies"> Contract  </label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="0xPK1B983892r7FD09d3Z22J9Ec00E29f4cb786BAe ">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="noOfcopies"> Instagram   </label>
                                    <input class="form-control" id="noOfcopies" type="text" placeholder="Instagram Link">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label class="mb-2 fz-16" for="catagories"> Category </label>
                                    <select class="filter-select2 border border-2 w-100 mb-4" id="catagories">
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
                                    <input class="form-check-input" id="rememberMe" type="checkbox" value="" checked>
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
