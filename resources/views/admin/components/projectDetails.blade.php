<div class="card mb-6">
    <div class="flex card-header justify-between items-center">
        <h4 class="card-title">My Projects Details...</h4>
        <a role="button" href="{{ route('project.create') }}"
            class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white mb-4 gap-1">
            <i class="ri-add-fill"></i> Create New Project
        </a>
    </div>
    <div class="p-4">
        <h1 class="mb-2"> Details:</h1>
        <div class="grid grid-cols-3 gap-2">
            <div class="col-span-2">
                <div class="py-2 px-1">
                    <div class="custom-scroll overflow-auto h-50">
                        <div class="custom-scroll overflow-auto h-80">
                            <div class="grid grid-cols-2 gap-2">
                                @foreach ($projects as $project)
                                    <div class="border rounded-lg">
                                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                            <div class="flex justify-center">
                                                @if ($project->hasMedia('project_images'))
                                                    <img src="{{ $project->getFirstMediaUrl('project_images') }}"
                                                        alt="Project Image" class="max-h-50">
                                                @else
                                                    <img src="{{ asset('assets/images/admin/Alogosm.png') }}"
                                                        alt="Default Image" class="max-h-50">
                                                @endif
                                            </div>
                                            <div class="px-2">
                                                <div class="font-bold py-1 text-xl">{{ $project->title }}</div>
                                            </div>
                                            <div class="px-2 py-1">
                                                <div class="align-items-center flex gap-1.5 text-black text-md">
                                                    @if ($project->hasMedia('company_logos'))
                                                        <img src="{{ $project->getFirstMediaUrl('company_logos') }}"
                                                            alt="Company Logo"
                                                            class="border-2 border-info/40 h-10 rounded-full w-10">
                                                    @else
                                                        <img src="{{ asset('assets/images/admin/Alogosm.png') }}"
                                                            alt="Default Image"
                                                            class="border-2 border-info/40 h-10 rounded-full w-10">
                                                    @endif
                                                    <span class="flex items-center text-center w-full">
                                                        {{ $project->company_name }}
                                                    </span>

                                                </div>
                                            </div>
                                            <div class="pb-1 pt-4 px-2 py-1">
                                                @foreach ($project->projectTools as $tool)
                                                    {{-- {{ dd($tool) }} --}}
                                                    <span
                                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                                        {{ $tool->name }}
                                                    </span>
                                                @endforeach
                                            </div>

                                            <div class="flex items-center justify-center gap-4">
                                                <a href="{{ route('project.edit', ['id' => $project->id]) }}"
                                                    class="bg-primary btn mb-2 p-1 text-white" type="button">
                                                    <i class="ri-edit-2-line text-lg"></i>
                                                </a>

                                                <form action="{{ route('project.delete', $project->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="bg-danger btn mb-2 p-1 text-white">
                                                        <i class="ri-delete-bin-2-line text-lg"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="custom-scroll overflow-auto h-40 py-5 px-4">
                    <div class="font-bold text-center mb-3">Tools Used In Project</div>
                    @foreach ($projectTools as $projectTool)
                        <div class="flex"><i class="ri-arrow-right-fill"></i>
                            {{ $projectTool->name }}
                            <div class="flex items-center justify-center gap-3 px-4">
                                <a href="{{ route('projectTool.edit', ['id' => $projectTool->id]) }}">
                                    <i class="ri-edit-2-line text-lg text-primary"></i>
                                </a>

                                <form action="{{ route('projectTool.delete', $projectTool->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button>
                                        <i class="ri-delete-bin-2-line text-danger text-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <div class="custom-scroll overflow-auto h-40 text-center">
                        <a role="button" href="{{ route('projectTool.create') }}"
                            class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white mb-4 mt-4 gap-1">
                            <i class="ri-add-fill"></i> Add
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
