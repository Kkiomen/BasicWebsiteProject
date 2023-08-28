<div class="h-screen">
    <div>
        <div class="container relative z-30 pt-10 sm:pb-48 lg:pt-64 lg:pb-48">
            <div class="flex flex-col items-center justify-center md:flex-row">
                <div class="hidden lg:block shadow-xl">
                    <img
                        src="{{ asset('/img/owsianka_jakub_full.png') }}"
                        class="h-48 sm:h-56"
                        alt="author"
                    />
                </div>
                <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                    <h1
                        class="text-center font-header text-4xl text-black sm:text-left sm:text-5xl md:text-6xl"
                    >
                        {{ __('home.title') }}
                    </h1>
                    <p class="text-center sm:text-left text-black text-lg">
                        {{ __('home.subTitle1') }}<br/>
                        {{ __('home.subTitle2') }}<br/>
                        <strong>{{ __('home.subTitle3') }}</strong> <br/>
                        {{ __('home.about_me') }}
                    </p>
                    {{--                        <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">--}}
                    {{--                            <div--}}
                    {{--                                class="flex items-center justify-center pl-0 sm:justify-start md:pl-1"--}}
                    {{--                            >--}}
                    {{--                                <p class="font-body text-lg uppercase text-white">Let's connect</p>--}}
                    {{--                                <div class="hidden sm:block">--}}
                    {{--                                    <i class="bx bx-chevron-right text-3xl text-yellow"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div--}}
                    {{--                                class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"--}}
                    {{--                            >--}}
                    {{--                                <a href="/">--}}
                    {{--                                    <i--}}
                    {{--                                        class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"--}}
                    {{--                                    ></i>--}}
                    {{--                                </a>--}}
                    {{--                                <a href="/" class="pl-4">--}}
                    {{--                                    <i--}}
                    {{--                                        class="bx bxl-twitter text-2xl text-white hover:text-yellow"--}}
                    {{--                                    ></i>--}}
                    {{--                                </a>--}}
                    {{--                                <a href="/" class="pl-4">--}}
                    {{--                                    <i--}}
                    {{--                                        class="bx bxl-dribbble text-2xl text-white hover:text-yellow"--}}
                    {{--                                    ></i>--}}
                    {{--                                </a>--}}
                    {{--                                <a href="/" class="pl-4">--}}
                    {{--                                    <i--}}
                    {{--                                        class="bx bxl-linkedin text-2xl text-white hover:text-yellow"--}}
                    {{--                                    ></i>--}}
                    {{--                                </a>--}}
                    {{--                                <a href="/" class="pl-4">--}}
                    {{--                                    <i--}}
                    {{--                                        class="bx bxl-instagram text-2xl text-white hover:text-yellow"--}}
                    {{--                                    ></i>--}}
                    {{--                                </a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <div class="flex flex-row justify-center gap-2 mt-5">
                        <a href="{{ route('blog') }}" class="bg-black text-white px-3 py-3 w-full">
                            Blog
                        </a>
                        {{--                            <a href="#" class="bg-white text-black px-3 py-1 w-full">--}}
                        {{--                                Kurs PHP--}}
                        {{--                            </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

