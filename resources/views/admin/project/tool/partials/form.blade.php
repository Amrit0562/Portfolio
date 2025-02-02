<div class="mb-3">
    <label class="mb-2" for="name">Project Name<span class="text-danger">*</span></label>
    <input type="text" name="name" id="name" class="form-input"
        value="{{ old('name', $projectTool->name ?? '') }}" placeholder="Your project tool name.." required
        autocomplete="name">
</div>
@error('name')
    <small class="text-danger">{{ $message }}</small>
@enderror
