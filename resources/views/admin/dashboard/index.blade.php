@extends('admin.app')
@section('content')
    <main class="p-6">
        <!-- Page Title Start -->
        @include('admin.components.pagetitle')
        <!-- Page Title End -->

        <!-- My Information Start -->
        @include('admin.components.myinformation')
        <!-- My Information End -->

        <!-- Technology Used Start -->
        @include('admin.components.techUsed')
        <!-- Technology Used End -->

        <!-- Experience Details Start -->
        @include('admin.components.experienceDetails')
        <!-- Experience Details End -->

        <!-- Project Details Start -->
        @include('admin.components.projectDetails')
        <!-- Project Details End -->

    </main>
    @include('admin.partials.footer')
@endsection

@push('scripts')
    <script>
        document.getElementById('dropdownButton').addEventListener('click', function() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        });

        function selectCategory(id, name) {
            // Update the dropdown button text
            const button = document.getElementById('dropdownButton');
            button.innerHTML = `${name} <i class="ri-arrow-down-s-fill"></i>`;

            // Close the dropdown
            document.getElementById('dropdownMenu').classList.add('hidden');

            // Optionally, you can submit the selected category ID to a server or perform other actions
            console.log('Selected Category ID:', id);
        }
    </script>
@endpush
