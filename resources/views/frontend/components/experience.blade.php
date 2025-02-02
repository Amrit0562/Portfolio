<div class="py-5 px-3"
    style="box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;  border-radius: 25px; height: 500px; margin: 0; padding: 0;">
    <div class="mb-3">
        <div class="mb-4">
            <h4 style="font-size: 12px; font-weight: 700; opacity: 0.5; text-transform: uppercase;" class="mb-0">
                {{ $totalExperienceYears }} years of
            </h4>
            <h1 class="mb-5" style="font-size: 24px; font-weight: bold; text-transform: uppercase; opacity: 0.9;">
                Experience
            </h1>
        </div>
        <div class="">
            @foreach ($experiences as $experience)
                <div class="d-flex justify-content-between">
                    <h1 class="align-content-center" style="font-size: 35px; opacity: 0.9;">
                        {{ $experience->position }}
                    </h1>
                    <div class="">
                        <h6 class="mb-0" style="opacity: 0.9;">{{ $experience->company }}</h6>
                        <span style="font-size: 12px; opacity: 0.5; display: block; text-align: right;" class="mb-0">
                            {{ $experience->join }} -
                            {{ $experience->leave }}
                        </span>
                    </div>
                </div>
                <hr class="mb-2"
                    style="border: none; border-top: 3px solid #888; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 20px 0;">
            @endforeach
        </div>
    </div>
</div>
