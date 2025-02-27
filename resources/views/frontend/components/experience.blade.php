<div class="py-5 px-3"
    style="box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;  border-radius: 25px; height: 500px; margin: 0; padding: 0;">
    <div class="mb-3">
        <div class="mb-4">
            <h4 style="font-size: 12px; font-weight: 700; opacity: 0.5; text-transform: uppercase;" class="mb-0">
                {{ $totalExperienceYears }} years of
            </h4>
            <h1 class="mb-4" style="font-size: 24px; font-weight: bold; text-transform: uppercase; opacity: 0.9;">
                Experience
            </h1>
        </div>
        <div class="custom-scroll overflow-auto" style="height: 60vh;">
            @foreach ($experiences as $experience)
                <div class="d-flex justify-content-between">
                    <div class="align-content-center" style="font-size: min(6vh,5vh); opacity: 0.9;">
                        {{ $experience->position }}
                    </div>
                    <div class="">
                        <div class="mb-0" style="font-size: 3vh; opacity: 0.9;">{{ $experience->company }}</div>
                        <span style="font-size: 2vh; opacity: 0.5; display: block; text-align: right;" class="mb-0">
                            {{ $experience->join }} - {{ $experience->leave }}
                        </span>
                    </div>
                </div>
                <hr class="mb-2"
                    style="border: none; border-top: 3px solid #888; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 20px 0;">
            @endforeach
        </div>

    </div>
</div>
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
