<div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
    <div class="row">
        <div class="mb-4 col-md-6">
            <label for="banner_user_name" class="form-label">banner_user_name</label>
            <input type="text" class="form-control" id="banner_user_name" name="banner_user_name"
                placeholder="banner_user_name" value="{{ $settings['banner_user_name'] }}" />
            @error('banner_user_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4 col-md-6">
            <label for="contact_phone" class="form-label">banner_title</label>
            <input type="text" class="form-control" id="contact_phone" name="banner_title"
                placeholder="Contact phone" value="{{ $settings['banner_title'] }}" />
            @error('banner_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="banner_description" class="form-label">banner_description</label>
            <textarea name="banner_description" rows="4" class="form-control br-8" placeholder="Enter Site Information">{{ $settings['banner_description'] }}</textarea>
            @error('banner_description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="banner_description" class="form-label">Bnner Image</label>
            <input type="file" name="banner_image" class="mainlogo" id="banner_image" data-show-remove="false"
                data-default-file="{{ $settings['banner_image'] }}">
            <img src="" alt="">
        </div>
        <div class="mb-4 col-md-6">
            <label for="about_me_title" class="form-label">about_me_title</label>
            <input type="text" class="form-control" id="about_me_title" name="about_me_title"
                placeholder="about_me_title" value="{{ $settings['about_me_title'] }}" />
            @error('about_me_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="about_me_slogan" class="form-label">about_me_slogan</label>
            <input type="text" class="form-control" id="about_me_slogan" name="about_me_slogan"
                placeholder="about_me_slogan" value="{{ $settings['about_me_slogan'] }}" />
            @error('about_me_slogan')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="experience_title" class="form-label">experience_title</label>
            <input type="text" class="form-control" id="experience_title" name="experience_title"
                placeholder="experience_title" value="{{ $settings['experience_title'] }}" />
            @error('experience_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="experience_slogan" class="form-label">experience_slogan</label>
            <input type="text" class="form-control" id="experience_slogan" name="experience_slogan"
                placeholder="experience_slogan" value="{{ $settings['experience_slogan'] }}" />
            @error('experience_slogan')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="project_title" class="form-label">project_title</label>
            <input type="text" class="form-control" id="project_title" name="project_title"
                placeholder="project_title" value="{{ $settings['project_title'] }}" />
            @error('project_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="project_slogan" class="form-label">project_slogan</label>
            <input type="text" class="form-control" id="project_slogan" name="project_slogan"
                placeholder="project_slogan" value="{{ $settings['project_slogan'] }}" />
            @error('project_slogan')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="skill_slogan" class="form-label">skill_slogan</label>
            <input type="text" class="form-control" id="skill_slogan" name="skill_slogan"
                placeholder="skill_slogan" value="{{ $settings['skill_slogan'] }}" />
            @error('skill_slogan')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="skill_title" class="form-label">skill_title</label>
            <input type="text" class="form-control" id="skill_title" name="skill_title"
                placeholder="skill_title" value="{{ $settings['skill_title'] }}" />
            @error('skill_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="contact_title" class="form-label">contact_title</label>
            <input type="text" class="form-control" id="contact_title" name="contact_title"
                placeholder="contact_title" value="{{ $settings['contact_title'] }}" />
            @error('contact_title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="contact_slogan" class="form-label">contact_slogan</label>
            <input type="text" class="form-control" id="contact_slogan" name="contact_slogan"
                placeholder="contact_slogan" value="{{ $settings['contact_slogan'] }}" />
            @error('contact_slogan')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="banner_description" class="form-label">about_image</label>
            <input type="file" name="about_image" class="mainlogo dropify" id="about_image"
                data-show-remove="false" data-default-file="{{ $settings['about_image'] }}">
            <img src="" alt="">
        </div>

        <div class="mb-4 col-md-6">
            <label for="experience" class="form-label">experience</label>
            <input type="text" class="form-control" id="experience" name="experience" placeholder="experience"
                value="{{ $settings['experience'] }}" />
            @error('experience')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="experience_field" class="form-label">experience_field</label>
            <input type="text" class="form-control" id="experience_field" name="experience_field"
                placeholder="experience_field" value="{{ $settings['experience_field'] }}" />
            @error('experience_field')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="education" class="form-label">Education</label>
            <input type="text" class="form-control" id="education" name="education" placeholder="education"
                value="{{ $settings['education'] }}" />
            @error('education')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="faculty" class="form-label">faculty</label>
            <input type="text" class="form-control" id="faculty" name="faculty" placeholder="faculty"
                value="{{ $settings['faculty'] }}" />
            @error('faculty')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4 col-md-6">
            <label for="about_me_description" class="form-label">about_me_description</label>
            <textarea name="about_me_description" rows="4" class="form-control br-8" placeholder="Enter Site Information">{{ $settings['about_me_description'] }}</textarea>
            @error('about_me_description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


    </div>
</div>
