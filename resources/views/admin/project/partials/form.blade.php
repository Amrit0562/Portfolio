<div class="mb-3">
    <label class="mb-2" for="title">Project title<span class="text-danger">*</span></label>
    <input type="text" name="title" id="title" class="form-input" value="{{ old('title', $userInfo->title ?? '') }}"
        placeholder="Your project title.." required autocomplete="title">
</div>
@error('title')
    <small class="text-danger">{{ $message }}</small>
@enderror

<!-- Project Image -->
<div class="mb-3">
    <label class="mb-2" for="image">Project Image<span class="text-danger">*</span></label>
    <input type="file" id="project_image" name="image" accept="image/*"
        onchange="previewImage(event, 'project_preview')" class="form-input" required>
</div>
@error('image')
    <small class="text-danger">{{ $message }}</small>
@enderror
<img id="project_preview" src="#" alt="Project Image Preview"
    style="display: none; max-width: 200px; max-height: 200px;">

<!-- Company Name -->
<div class="mb-3">
    <label class="mb-2" for="company_name">Company Name<span class="text-danger">*</span></label>
    <input type="text" name="company_name" id="company_name" class="form-input"
        value="{{ old('company_name', $userInfo->company_name ?? '') }}" placeholder="Your company name.." required
        autocomplete="company_name">
</div>
@error('company_name')
    <small class="text-danger">{{ $message }}</small>
@enderror

<!-- Company Logo -->
<div class="mb-3">
    <label class="mb-2" for="company_logo">Company Logo<span class="text-danger">*</span></label>
    <input type="file" id="company_logo" name="company_logo" accept="image/*"
        onchange="previewImage(event, 'company_preview')" class="form-input" required>
</div>
@error('company_logo')
    <small class="text-danger">{{ $message }}</small>
@enderror
<img id="company_preview" src="#" alt="Company Logo Preview"
    style="display: none; max-width: 200px; max-height: 200px;">

<div class="mb-3">
    <label class="mb-2" for="tools">Tools Used<span class="text-danger">*</span></label>
    <div class="relative">
        <select class="custom-select2 form-control block appearance-none w-full" name="tools_used[]" id="tools"
            title="Not Chosen" multiple required>
            @foreach ($projectTools as $projectTool)
                @php
                    $isSelected = isset($project) && $project->projectTools->contains('id', $projectTool->id);
                @endphp
                <option value="{{ $projectTool->id }}" {{ $isSelected ? 'selected' : '' }}>
                    {{ $projectTool->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>



@error('project_tools')
    <small class="text-danger">{{ $message }}</small>
@enderror


@push('scripts')
    <script>
        function previewImage(event, previewId) {
            const preview = document.getElementById(previewId);
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    preview.src = reader.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
            }
        }

        $(document).ready(function() {
            $('#tools').select2({
                placeholder: "Select tools",
                allowClear: true
            });
        });
    </script>
@endpush
