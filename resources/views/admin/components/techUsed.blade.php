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
            <div class="col-start-1 col-end-7">
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
                                                style="box-shadow: 4px 4px 10px rgb(0 0 0 / 48%)" alt="default-image">
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
