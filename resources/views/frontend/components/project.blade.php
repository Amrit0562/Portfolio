@foreach ($projects as $project)
    <div class="col-md-6 d-flex flex-column gap-4" id="work">
        <div class="p-4"
            style="box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;  border-radius: 25px; height: 90vh; margin: 0; padding: 0;">
            <div class="custom-scroll overflow-auto h-100">
                <div class="d-flex justify-content-center rounded"
                    style="box-shadow: 0 4px 6px #6c757d9c; width: 100%; height: 300px; overflow: hidden;">
                    @if ($project->hasMedia('project_images'))
                        <img src="{{ $project->getFirstMediaUrl('project_images') }}" alt="Project Image"
                            class="img-fluid rounded" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                        <img src="{{ asset('assets/images/admin/Alogosm.png') }}" alt="Default Image"
                            class="img-fluid rounded" style="width: 100%; height: 100%; object-fit: cover;">
                    @endif
                </div>

                <!-- Project Company -->
                <div class="px-3 mt-3 d-flex align-items-center" style="font-size: 12px; text-transform: uppercase;">
                    <span class="">Project at</span>
                    @if ($project->hasMedia('company_logos'))
                        <img src="{{ $project->getFirstMediaUrl('company_logos') }}" alt="Company Logo"
                            class="rounded-circle ms-2" style="height: 25px; width: 25px;">
                    @else
                        <img src="{{ asset('assets/images/admin/Alogosm.png') }}" alt="Default Logo"
                            class="rounded-circle ms-2" style="height: 25px; width: 25px;">
                    @endif
                    <span class="ms-2">{{ $project->company_name }}</span>
                </div>

                <!-- Project Title -->
                <div class="px-3 text-2xl">
                    <h4 class="">{{ $project->title }}</h4>
                </div>

                <!-- Tools Used -->
                <div class="px-3 mt-3">
                    @foreach ($project->projectTools as $tool)
                        <span class="inline-block bg-gray-400 rounded-full px-3 py-1 text-sm text-black mr-2 mb-2">
                            {{ $tool->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endforeach

@push('styles')
    <style>
        .custom-scroll {
            scrollbar-width: none;
            /* For Firefox */
            -ms-overflow-style: none;
            /* For IE and Edge */
        }

        .custom-scroll::-webkit-scrollbar {
            display: none;
            /* For Chrome, Safari, and Opera */
        }
    </style>
@endpush
