<div class="mb-3">
    <!-- Corrected label and input id for 'name' field -->
    <label class="mb-2" for="name">Name<span class="text-danger">*</span></label>
    <input type="text" name="name" id="name" class="form-input" value="{{ old('name', $userInfo->name ?? '') }}"
        placeholder="Your name...." required autocomplete="name">
</div>
@error('name')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="mb-3">
    <!-- Corrected label and textarea id for 'description' -->
    <label class="mb-2" for="description">About<span class="text-danger">*</span></label>
    <textarea id="description" name="description" class="form-input" placeholder="About you..." required autocomplete="off">{{ old('description', $userInfo->description ?? '') }}</textarea>
</div>
@error('description')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="mb-3">
    <label class="mb-2" for="image">Choose Your Profile<span class="text-danger">*</span></label>
    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)"
        class="form-input" required>
</div>
@error('image')
    <small class="text-danger">{{ $message }}</small>
@enderror

<img id="preview" src="#" alt="Image Preview" style="display: none; max-width: 200px; max-height: 200px;">
