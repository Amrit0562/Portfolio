@extends('admin.app')
@section('content')
    <main class="p-6">
        <!-- Page Title Start -->
        <div class="flex justify-between items-center mb-6">
            <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Dashboard</h4>
        </div>
        <!-- Page Title End -->

        <div class="2xl:col-span-1 lg:col-span-2 mb-5">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="grow overflow-hidden">
                            <div class="flex justify-between">
                                <h5 class="text-base/3 text-gray-800 font-normal mt-0 mb-4 card-title"
                                    title="Number of Customers" style="display: flex; align-items: center;">
                                    My Information:</h5>
                                <a role="button" href="{{ route('userInfo.create') }}"
                                    class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white mb-4 gap-1">
                                    <i class="ri-add-fill"></i> Create
                                </a>
                            </div>
                            <hr class="mb-4" />

                            <div class="relative overflow-auto">
                                <table
                                    class="border-collapse min-w-full border border-primary dark:border-slate-600 bg-white dark:bg-slate-800 text-sm shadow-sm">
                                    <thead class="bg-slate-50 dark:bg-slate-700">
                                        <tr>
                                            <th
                                                class="border border-primary dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-start">
                                                Name</th>
                                            <th
                                                class="border border-primary dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-start">
                                                About</th>
                                            <th
                                                class="border border-primary dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-center">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userInformations as $userInformation)
                                            <tr>
                                                <th scope="row"
                                                    class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white sm:items-center flex-col">
                                                    @if ($userInformation->getFirstMedia('images'))
                                                        <img src="{{ asset($userInformation->getFirstMedia('images')->getUrl()) }}"
                                                            class="rounded-full w-8 h-8" alt="user-image">
                                                    @else
                                                        <img src="{{ asset('assets/images/user.png') }}"
                                                            class="rounded-full w-8 h-8" alt="user-image">
                                                    @endif
                                                    <div
                                                        class="text-sm font-medium text-gray-500 dark:text-gray-200 overflow-hidden text-ellipsis whitespace-nowrap max-w-full text-center sm:text-left">
                                                        {{ $userInformation ? $userInformation->name : '-' }}
                                                    </div>
                                                </th>

                                                <td
                                                    class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                    {{ $userInformation ? $userInformation->description : '-' }}
                                                </td>
                                                <td
                                                    class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 text-center gap-3">

                                                    <div class="flex items-center justify-center gap-3">
                                                        <a
                                                            href="{{ route('userInfo.edit', ['id' => $userInformation->id]) }}">
                                                            <i class="ri-edit-2-line text-lg text-primary"></i>
                                                        </a>

                                                        <form action="{{ route('userInfo.delete', $userInformation->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button>
                                                                <i class="ri-delete-bin-2-line text-lg text-danger"></i>
                                                            </button>
                                                            {{-- {{ dd('deleted') }} --}}
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>

        <div class="card mb-6">
            <div class="flex card-header justify-between items-center">
                <h4 class="card-title">Tech I Use:</h4>
                <a role="button" href="{{ route('technology.create') }}"
                    class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white mb-4 gap-1">
                    <i class="ri-add-fill"></i> Create
                </a>
            </div>
            <div class="p-4">
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-start-1 col-end-7 ...">
                        <div class="py-2 px-1">
                            <div class="custom-scroll overflow-auto h-50">
                                <ul class="max-w-full">
                                    <div class="grid grid-cols-3 gap-4">
                                        @foreach ($technologies as $technology)
                                            <div class="flex flex-col items-center">

                                                @if ($technology->getFirstMedia('images'))
                                                    <img src="{{ asset($technology->getFirstMedia('images')->getUrl()) }}"
                                                        class="h-20 w-20 p-2 border border-gray-300 rounded-lg"
                                                        style="box-shadow: 4px 4px 10px rgb(0 0 0 / 48%)" alt="user-image">
                                                @else
                                                    <img src="{{ asset('assets/images/user.png') }}"
                                                        class="h-20 w-20 p-2 border border-gray-300 rounded-lg"
                                                        style="box-shadow: 4px 4px 10px rgb(0 0 0 / 48%)"
                                                        alt="default-image">
                                                @endif
                                                <span class="m-1">{{ $technology->title }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-6">
            <div class="flex card-header justify-between items-center">
                <h4 class="card-title">My Experience Details...</h4>
                <a role="button" href="{{ route('experience.create') }}"
                    class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white mb-4 gap-1">
                    <i class="ri-add-fill"></i> Create
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
                                                        <a
                                                            href="{{ route('experience.edit', ['id' => $experience->id]) }}">
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

        <div class="card mb-6">
            <div class="flex card-header justify-between items-center">
                <h4 class="card-title">My Projects Details...</h4>
                <a role="button" href="{{ route('project.create') }}"
                    class="btn rounded-full bg-info/25 text-info hover:bg-info hover:text-white mb-4 gap-1">
                    <i class="ri-add-fill"></i> Create
                </a>
            </div>
            <div class="p-4">
                <h1 class="mb-2"> Details:</h1>
                <div class="grid grid-cols-3 gap-2">
                    <div class="col-span-2">
                        {{-- <div class="card"> --}}
                        <div class="py-2 px-1">
                            <div class="custom-scroll overflow-auto h-50">
                                <div class="custom-scroll overflow-auto h-80">
                                    <div class="grid grid-cols-2 gap-2">
                                        @foreach ($projects as $project)
                                            <div class="border rounded-lg">
                                                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                                    @if ($project->hasMedia('images'))
                                                        <img src="{{ asset($project->getFirstMediaUrl('images')) }}"
                                                            alt="Project Image">
                                                    @else
                                                        <img src="{{ asset('assets/images/admin/Alogosm.png') }}"
                                                            alt="Default Image">
                                                    @endif
                                                    <div class="px-2">
                                                        <div class="font-bold text-xl">{{ $project->title }}</div>
                                                    </div>
                                                    <div class="px-2">
                                                        <div class="text-black text-md">{{ $project->company_name }}
                                                        </div>
                                                    </div>
                                                    <div class="px-2 pt-4 pb-2">
                                                        <span
                                                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                    </div>
                    <div class="card">
                        <div class="custom-scroll overflow-auto h-40 py-5 px-4">
                            <div class="font-bold text-center mb-3">Tools Used In Project</div>
                            @foreach ($projectTools as $projectTool)
                                <div class="flex"><i class="ri-arrow-right-fill"></i>
                                    {{ $projectTool->name }}
                                    <div class="flex items-center justify-center gap-3 px-4">
                                        <a href="">
                                            <i class="ri-edit-2-line text-lg text-primary"></i>
                                        </a>

                                        <form action="" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button>
                                                <i class="ri-delete-bin-2-line text-lg text-danger"></i>
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
