@if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="alert alert-success bg-primary border-2 container p-2 text-white"
        style="width: fit-content; position: fixed; top: 20px; right: 20px; z-index: 1050; border-radius: 20px;">
        {{ session('success') }}
    </div>
@endif
