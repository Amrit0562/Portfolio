<div class="p-2"
    style="box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc; border-radius: 30px; height: 300px;">
    <div class="d-flex flex-column flex-md-row m-1"
        style=" align-items: center; overflow: hidden; text-align: center;box-sizing: border-box;">
        <img src="{{ $userInfo ? $userInfo->getFirstMediaUrl('images') : asset('assets/images/frontend/avatar7.jpg') }}"
            alt="Avatar"
            style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; margin-right: 15px; border: solid;">
        <p class="m-0 user-name">
            {{ $userInfo->name }}
        </p>
    </div>
    <p class="mt-3 text-center" style="overflow: hidden;text-overflow: ellipsis;">{{ $userInfo->description }}
    </p>
</div>


<style>
    .user-name {
        overflow: hidden;
        font-weight: bold;
        font-size: 24px;
        text-overflow: ellipsis;
        text-transform: uppercase;
    }

    @media screen and (max-width: 768px) {
        .user-name {
            font-size: 15px;
        }
    }
</style>
