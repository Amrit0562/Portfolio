<div class="mb-3">
    <label class="mb-2" for="title">Technology title<span class="text-danger">*</span></label>
    <input type="text" name="title" id="title" class="form-input" value="{{ old('title', $userInfo->title ?? '') }}"
        placeholder="Tech title you use.." required autocomplete="title">
</div>
@error('title')
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
