<div class="py-5 px-3 d-flex flex-column justify-content-between"
    style="height: 325px; box-shadow:0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;  border-radius: 25px;">
    <div class="marquee-wrapper p-2 d-flex mt-3" style="white-space: nowrap; overflow: hidden; display: flex;">
        <div class="marquee-container gap-4">
            @foreach ($technologies as $technology)
                <div class="tech-icon" style="box-shadow: 0px 4px 6px rgb(35, 29, 29);">
                    <img src="{{ asset($technology->getFirstMedia('images')->getUrl()) }}" alt="technology"
                        class="rounded-4">
                </div>
            @endforeach

            <!-- Duplicate the content to create a seamless loop -->
            @foreach ($technologies as $technology)
                <div class="tech-icon" style="box-shadow: 0px 4px 6px rgb(35, 29, 29);">
                    <img src="{{ asset($technology->getFirstMedia('images')->getUrl()) }}" alt="technology">
                </div>
            @endforeach
        </div>
    </div>
    <div class="mb-3">
        <div style="display: flex; flex-direction: column; align-items: flex-start;">
            <h4 style="font-size: 12px; font-weight: 700; opacity: 0.5; text-transform: uppercase;">
                currently using
            </h4>
            <div style="font-size: 24px; font-weight: bold; text-transform: uppercase;">tech i
                <span class="text-xl">❤️</span>
            </div>
        </div>
    </div>
</div>
<a href="mailto:amrit.bhandari0123@gmail.com" class="socialicon-container"
    style="text-decoration: none; color: inherit;" target="_blank">
    <i class="fas fa-envelope"></i>
</a>

@push('styles')
    <style>
        /*css for technologies I use and *portfolio*/
        svg path {
            fill: initial !important;
        }

        .tech-icon {
            height: 60px;
            width: 60px;
            justify-content: center;
            align-items: center;
            background-color: #bcbcbc87;
            border-radius: 10px;
            padding: 2px;
        }

        .tech-icon img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }

        .marquee-wrapper {
            overflow: hidden;
            width: 100%;
        }

        .marquee-container {
            display: flex;
            animation: scroll 15s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /*css for technologies I use endand *portfolio*/
    </style>
@endpush
