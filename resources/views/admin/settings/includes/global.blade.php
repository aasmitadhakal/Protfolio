<div class="tab-pane fade show active" id="v-pills-global" role="tabpanel" aria-labelledby="v-pills-global-tab">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_logo">Site Main Logo</label>
                <div class="custom-file">
                    <input type="file" name="site_main_logo" class="mainlogo" id="site_main_logo"
                        data-show-remove="false" data-default-file="{{ $settings['banner_image'] }}">
                    <img src="" alt="">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_fav_icon">Site Fav Icon</label>
                <div class="custom-file">
                    <input type="file" name="site_fav_icon" class="site_fav_icon dropify" id="site_fav_icon"
                        data-show-remove="false" data-default-file="{{ $settings['site_fav_icon'] }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_footer_logo">Site Footer Logo</label>
                <div class="custom-file">
                    <input type="file" name="site_footer_logo" class="footerlogo dropify" id="site_footer_logo"
                        data-show-remove="false" data-default-file="{{ $settings['site_footer_logo'] }}">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group mb-3">
                <label for="site_information">Site Information</label>
                <textarea name="site_information" rows="4" class="form-control br-8" placeholder="Enter Site Information">{{ $settings['site_information'] }}</textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_phone">Phone Number</label>
                <input type="tel" name="site_phone" value="{{ $settings['site_phone'] }}" class="form-control br-8"
                    placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_email">Email</label>
                <input type="email" name="site_email" value="{{ $settings['site_email'] }}" class="form-control br-8"
                    placeholder="Enter Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_location">Location</label>
                <input type="text" name="site_location" value="{{ $settings['site_location'] }}"
                    class="form-control br-8" placeholder="Enter Location">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_map">Map</label>
                <input type="text" name="site_map" value="{{ $settings['site_map'] }}" class="form-control br-8"
                    placeholder="Enter Location Url">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_mail">Mail</label>
                <input type="text" name="site_mail" value="{{ $settings['site_mail'] }}" class="form-control br-8"
                    placeholder="Enter Site Mail ">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_url">Site Url</label>
                <input type="text" name="site_url" value="{{ $settings['site_url'] }}" class="form-control br-8"
                    placeholder="Enter Site Url ">
            </div>
        </div>
    </div>
</div>
