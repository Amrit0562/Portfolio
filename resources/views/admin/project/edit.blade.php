@extends('admin.app')
@section('content')
    <main class="p-6">
        <!-- Page Title Start -->
        <div class="flex justify-between items-center mb-6">
            <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Project</h4>

            <div class="md:flex hidden items-center gap-2.5 font-semibold">
                <div class="flex items-center gap-2">
                    <a href="{{ route('dashboard') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                        aria-current="page">Dashboard</a>
                    <i class="ri-arrow-right-s-line text-base text-slate-400 rtl:rotate-180"></i>
                    <a href="" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                        aria-current="page">Update Project
                    </a>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <div class="2xl:col-span-1 lg:col-span-2 mb-5">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="grow overflow-hidden">

                            <div class="card mb-6">
                                <div class="bg-black/5 card-header flex items-center justify-between mb-5 p-2"
                                    style="padding: 10px;">
                                    <h5 class="text-base/3 text-gray-800 font-normal mt-0 card-title flex items-center">
                                        Update Your Projects Details...
                                    </h5>
                                </div>

                                <form class="px-5" action="{{ route('project.update', ['id' => $project->id]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    @include('admin.project.partials.form')

                                    <div class="text-center mt-4 multisteps-form__content">
                                        <button type="submit"
                                            class="btn bg-violet-500 border-violet-500 text-white mb-4 gap-2">
                                            <i class="ri-upload-cloud-line text-xl text-gray-300 dark:text-gray-200"></i>
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
