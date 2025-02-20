<div class="card mb-6">
    <div class="flex card-header justify-between items-center">
        <h4 class="card-title">My Experience Details...</h4>
        <a role="button" href="{{ route('experience.create') }}"
            class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white mb-4 gap-1">
            <i class="ri-add-fill"></i> Create Experience
        </a>
    </div>
    <div class="p-4">
        <h1 class="mb-2"> Details:</h1>
        <div class="card">
            <div class="py-2 px-1">
                <div class="custom-scroll overflow-auto h-50">
                    <div class="custom-scroll overflow-auto h-80">
                        @php
                            $ExperienceCount = App\Models\Experience::count();
                        @endphp
                        @if ($ExperienceCount >= 1)
                            <ul class="max-w-full grid grid-cols-1 md:grid-cols-2 gap-2">
                                @foreach ($experiences as $experience)
                                    <li class="">
                                        <div class="p-4 border border-gray-300 rounded-lg shadow-sm">
                                            <h1 class="text-xl font-semibold mb-2">Experience On:
                                            </h1>
                                            <p><strong>Position:</strong> {{ $experience->position }}</p>
                                            <p><strong>Company:</strong> {{ $experience->company }}</p>
                                            <p><strong>Joined:</strong> {{ $experience->join }} A.D</p>
                                            <p><strong>Leaved:</strong> {{ $experience->leave }} A.D.</p>
                                            <p><strong>Worked For:</strong>
                                                {{ $experience->experience_time }}
                                                years</p>
                                            <div class="flex items-center justify-center gap-3">
                                                <a href="{{ route('experience.edit', ['id' => $experience->id]) }}">
                                                    <i class="ri-edit-2-line text-lg text-primary"></i>
                                                </a>

                                                <form action="{{ route('experience.delete', $experience->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>
                                                        <i class="ri-delete-bin-2-line text-lg text-danger"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="flex font-normal justify-center text-xl"> 😔 No any Experiences
                                Found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
