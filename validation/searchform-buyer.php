 <html>
 
 <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
                <div class="banner-content col-lg-12 col-md-12">
                    <h1 class='text-uppercase'>
                        We’re The Real Estate King
                    </h1>
                    
                    <div class="search-field">
                        <form class="search-form" action="result.php" method="post">
                            <div class="row">
                                <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="search-title">Search Properties For</h4>
                                        </div>
                                        <div class="col">
                                            <div class="onoffswitch3 d-block mx-auto">
                                                <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox"
                                                    id="myonoffswitch3" checked>
                                                <label class="onoffswitch3-label" for="myonoffswitch3">
                                                    <span class="onoffswitch3-inner">
                                                        <span class="onoffswitch3-active">
                                                            <span class="onoffswitch3-switch">Sell</span>
                                                            <span class="lnr lnr-arrow-right"></span>
                                                        </span>
                                                        <span class="onoffswitch3-inactive">
                                                            <span class="lnr lnr-arrow-left"></span>
                                                            <span class="onoffswitch3-switch">Rent</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6">
                                    <select name="location" class="app-select form-control" required>
                                        <option data-display="Choose locations">Choose city</option>
										<option value="3">Alexandria</option>
                                        <option value="1">Aswan</option>
                                        <option value="2">Asyut</option>
                                        <option value="3">Behira</option>
										<option value="3">Beni Suef</option>
										<option value="3">Cairo</option>
										<option value="3">Dakahlya</option>
										<option value="3">Damietta</option>
										<option value="3">Faiyum</option>
										<option value="3">Gharbia</option>
										<option value="3">Giza</option>
										<option value="3">Ismailia</option>
										<option value="3">Kafr El Sheikh</option>
										<option value="3">Luxor</option>
										<option value="3">Matruh</option>
										<option value="3">Minya</option>
										<option value="3">Monufia</option>
										<option value="3">New Valley</option>
										<option value="3">North Sinai</option>
										<option value="3">Port Said</option>
										<option value="3">Qalyubia</option>
										<option value="3">Qena</option>
										<option value="3">Red Sea</option>
										<option value="3">Sharqia</option>
										<option value="3">Sohag</option>
										<option value="3">South Sinai</option>
										<option value="3">Suez</option>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6">
                                    <select name="property-type" class="app-select form-control" required>
                                        <option data-display="Property Type">Property Type</option>
                                        <option value="1">appartment</option>
                                        <option value="2">duplex</option>
                                        <option value="3">villa</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6">
                                    <select name="bedroom" class="app-select form-control" required>
                                        <option data-display="Bedrooms">Bedrooms</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="3">more</option>
                                    </select>
                                </div>
                                
                                <div class="col-lg-4 range-wrap">
                                    <p>Price Range:</p>
                                    <input type="text" id="range" value="" name="range" />
                                </div>
                                <div class="col-lg-4 range-wrap">
                                    <p>Area:</p>
                                    <input type="text" id="range2" value="" name="range" />
                                </div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <button  type="submit" name="submit" class="primary-btn mt-50" style="height: 45px;">Search Properties<span
                                            class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	</html>