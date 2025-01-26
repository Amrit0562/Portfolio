@php
    $currentYear = date('Y');
    $years = range($currentYear, 1950);
@endphp

<!-- Position -->
<div class="mb-3">
    <label class="mb-2" for="position">Position<span class="text-danger">*</span></label>
    <input type="text" name="position" id="position" class="form-input"
        value="{{ old('position', $experience->position) }}" placeholder="Position..." required
        autocomplete="organization-title">
</div>
@error('position')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <!-- Company -->
    <div class="mb-3">
        <label class="mb-2" for="company">Company<span class="text-danger">*</span></label>
        <input type="text" name="company" id="company" class="form-input"
            value="{{ old('company', $experience->company) }}" placeholder="Company..." required
            autocomplete="organization">
    </div>
    @error('company')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <!-- Experience Time -->
    <div class="mb-3">
        <label class="mb-2" for="experience_time">Experience Time (in years)<span class="text-danger">*</span></label>
        <input type="number" name="experience_time" id="experience_time" class="form-input"
            value="{{ old('experience_time', $experience->experience_time) }}" placeholder="Number of years..." required
            autocomplete="off">
    </div>
    @error('experience_time')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <!-- Join Year -->
    <div class="mb-3">
        <label class="mb-2" for="join">Join Year<span class="text-danger">*</span></label>
        <select class="rounded-lg" name="join" id="join" required>
            <option value="" disabled selected>Select Year</option>
            @foreach ($years as $year)
                <option value="{{ $year }}" {{ old('join', $experience->join) == $year ? 'selected' : '' }}>
                    {{ $year }}</option>
            @endforeach
        </select>
    </div>
    @error('join')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <!-- Leave Year -->
    <div class="mb-3">
        <label class="mb-2" for="leave">Leave Year (or 'present')<span class="text-danger">*</span></label>
        <select class="rounded-lg" name="leave" id="leave" required>
            <option value="present" {{ old('leave', $experience->leave) == 'present' ? 'selected' : '' }}>Present
            </option>
            <option value="" disabled selected>Select Year</option>
            @foreach ($years as $year)
                <option value="{{ $year }}" {{ old('leave', $experience->leave) == $year ? 'selected' : '' }}>
                    {{ $year }}</option>
            @endforeach
        </select>
    </div>
    @error('leave')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
