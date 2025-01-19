@if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="alert alert-success bg-primary border-2 container font-medium p-2 rounded-full text-white"
        style="width: fit-content; position: fixed; top: 20px; right: 20px; z-index: 1050;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="alert alert-error bg-danger border-2 container font-medium p-2 rounded-full text-white"
        style="width: fit-content; position: fixed; top: 20px; right: 20px; z-index: 1050;">
        {{ session('error') }}
    </div>
@endif
