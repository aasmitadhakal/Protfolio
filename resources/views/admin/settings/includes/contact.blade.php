<div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
    <div class="row">

        <div class="mb-4 col-md-6">
            <label for="contact_title" class="form-label">Contact Title</label>
            <input type="text" class="form-control" id="contact_title" name="contact_title" placeholder="Contact Title"
                value="{{ $settings['contact_title'] }}" />
            @error('contact_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4 col-md-6">
            <label for="contact_location" class="form-label">Contact location</label>
            <input type="text" class="form-control" id="contact_location" name="contact_location"
                placeholder="Contact location" value="{{ $settings['contact_location'] }}" />
            @error('contact_location')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4 col-md-6">
            <label for="contact_email" class="form-label">Contact email</label>
            <input type="text" class="form-control" id="contact_email" name="contact_email"
                placeholder="Contact email" value="{{ $settings['contact_email'] }}" />
            @error('contact_email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4 col-md-6">
            <label for="contact_phone" class="form-label">Contact phone</label>
            <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                placeholder="Contact phone" value="{{ $settings['contact_phone'] }}" />
            @error('contact_phone')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>



    </div>
</div>
