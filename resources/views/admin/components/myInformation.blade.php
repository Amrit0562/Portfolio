<div class="2xl:col-span-1 lg:col-span-2 mb-5">
    <div class="card">
        <div class="p-6">
            <div class="flex justify-between">
                <div class="grow overflow-hidden">
                    <div class="flex justify-between">
                        <h5 class="text-base/3 text-gray-800 font-normal mt-0 mb-4 card-title" title="Number of Customers"
                            style="display: flex; align-items: center;">
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
                                                <a href="{{ route('userInfo.edit', ['id' => $userInformation->id]) }}">
                                                    <i class="ri-edit-2-line text-lg text-primary"></i>
                                                </a>

                                                <form action="{{ route('userInfo.delete', $userInformation->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>
                                                        <i class="ri-delete-bin-2-line text-lg text-danger"></i>
                                                    </button>
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
        </div>
    </div>
</div>
