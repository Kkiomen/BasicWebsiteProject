<div>
    <section class="container-sm mx-auto px-4">
        <article>
            <div class="mb-6 text-center">
                <p class="category-article-title"><a
                        href="{{ route('category', ['category_slug' => $category_slug]) }}">{{ $category_name }}</a>
                </p>
                <h1 class="article-title text-5xl mt-2">{{ $title }}</h1>
            </div>
            <div class="text-center">
                <div class="px-4 mx-auto max-w-screen-xl">
                    <nav class="mb-3" aria-label="Breadcrumb">
                        <ol class="inline-flex flex-wrap items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:hover:text-blue-500 dark:text-gray-400" href="{{ route('blog') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true"
                                         class="mr-2 w-4 h-4">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                    </svg>
                                    Blog
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true"
                                         class="w-6 h-6 text-gray-400">
                                        <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                    <a class="inline-flex items-center ml-2 text-sm font-medium text-gray-700 hover:text-blue-600 dark:hover:text-blue-500 dark:text-gray-400"
                                       href="{{ route('category', ['category_slug' => $category_slug]) }}">
                                        {{ $article->category->name }}
                                    </a>
                                </div>
                            </li>
{{--                            <li aria-current="page">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
{{--                                         aria-hidden="true"--}}
{{--                                         class="w-6 h-6 text-gray-400">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
{{--                                              clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Blog Templates</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        </ol>
                    </nav>

                </div>
            </div>

            @if(!empty($article->images))
                <img
                    alt="Thumbnail" fetchpriority="high" decoding="async" data-nimg="fill"
                    class="object-cover transition-all" sizes="(max-width: 768px) 30vw, 33vw"
                    src="{{ asset('storage/'. $article->images) }}">
            @endif

            <hr class="mt-3"/>
            <div class="text-article mt-10">
                {!! $content !!}
            </div>

            @if($is_lesson)
                <div class="w-full flex mb-4 lesson-links">
                    @if($previous_lesson)
                        <div class="w-1/2 border-[0.2px] border-[#0466c8] text-base px-2 py-1">
                            Poprzednia lekcja: <a
                                href="{{ route('article', ['category_slug' => $previous_lesson->category->slug, 'article_slug' => $previous_lesson->slug ]) }}">{{ $previous_lesson->title }}</a>
                        </div>
                    @else
                        <div class="w-1/2">
                        </div>
                    @endif
                    @if($next_lesson)
                        <div
                            class="w-1/2 border-[0.2px] border-[#0466c8] text-base @if($previous_lesson) border-l-0 @endif px-2 py-1">
                            Następna lekcja: <a
                                href="{{ route('article', ['category_slug' => $next_lesson->category->slug, 'article_slug' => $next_lesson->slug ]) }}"
                                class="text-[#0466c8] font-bold">{{ $next_lesson->title }}</a>
                        </div>
                    @else
                        <div class="w-1/2">
                        </div>
                    @endif
                </div>
            @endif

        </article>

    </section>




    @if($tasks->count() > 0)
    <section class="bg-[#0466c8] text-white">
        <div class="container-sm mx-auto px-4 py-12 mt-5">
            <div class="text-center">
                <h2 class="mb-2 text-3xl lg:text-3xl tracking-tight font-semibold text-white dark:text-white">{{ __('home.tasks') }}</h2>
                <p class="font-light text-white sm:text-sm dark:text-gray-400">{{ __('home.task_subtitle') }}</p>
                <hr class="mt-4 mb-6"/>
            </div>
            <div>

                @foreach($tasks as $task)
                    @if($loop->index == 0)
                        <div class="" x-data="{ open{{$loop->index}}: false }">
                            <div class="px-4 text-lg font-bold select-none cursor-pointer" @click="open{{$loop->index}} = ! open{{$loop->index}}">
                                {{ $task->name }}
                            </div>
                    @else
                        <div class="mt-6" x-data="{ open{{$loop->index}}: false }">
                            <hr/>
                            <div class="px-4 mt-4 font-bold text-lg select-none cursor-pointer" @click="open{{$loop->index}} = ! open{{$loop->index}}">
                                {{ $task->name }}
                            </div>
                    @endif

                    <div>
                        <div x-show="open{{$loop->index}}" @click.outside="open{{$loop->index}} = false">
                        <div>
                            <div class="mt-6 border-t border-gray-100">
                                <dl class="divide-y divide-gray-100">
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-white">{{ __('home.task_description') }}</dt>
                                        <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">
                                            {{ $task->description }}
                                        </dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="{ hint{{$loop->index}}: false }">
                                        <dt class="text-sm font-medium leading-6 text-white">{{ __('home.hint') }}</dt>
                                        <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">
                                            <div x-show="!hint{{$loop->index}}" @click="hint{{$loop->index}} = true" @click.outside="hint{{$loop->index}} = false">
                                                <i class="fa-solid fa-eye-slash me-3" ></i> {{ __('home.click_to_show') }}
                                            </div>
                                            <div x-show="hint{{$loop->index}}">
                                                {{ $task->hint }}
                                            </div>
                                        </dd>
                                    </div>

                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="{ solution{{$loop->index}}: false }">
                                        <dt class="text-sm font-medium leading-6 text-white">{{ __('home.solution') }}</dt>
                                        <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">
                                            <div x-show="!solution{{$loop->index}}" @click="solution{{$loop->index}} = true" @click.outside="solution{{$loop->index}} = false">
                                                <i class="fa-solid fa-eye-slash me-3" ></i> {{ __('home.click_to_show') }}
                                            </div>
                                            <div x-show="solution{{$loop->index}}">
                                                {!! $task->solution !!}
                                            </div>
                                        </dd>
                                    </div>

                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="{ explained{{$loop->index}}: false }">
                                        <dt class="text-sm font-medium leading-6 text-white">{{ __('home.explanation') }}</dt>
                                        <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">
                                            <div x-show="!explained{{$loop->index}}" @click="explained{{$loop->index}} = true" @click.outside="explained{{$loop->index}} = false">
                                                <i class="fa-solid fa-eye-slash me-3" ></i> {{ __('home.click_to_show') }}
                                            </div>
                                            <div x-show="explained{{$loop->index}}">
                                                {{ $task->explained }}
                                            </div>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach


        </div>

            @if($is_lesson)
                <div class="w-full flex mb-4 lesson-links mt-20">
                    @if($previous_lesson)
                        <div class="w-1/2 border-[0.2px] border-white text-base px-2 py-1">
                            {{ __('home.previous_lesson') }}: <a
                                class="text-white font-bold"
                                href="{{ route('article', ['category_slug' => $previous_lesson->category->slug, 'article_slug' => $previous_lesson->slug ]) }}">{{ $previous_lesson->title }}</a>
                        </div>
                    @else
                        <div class="w-1/2">
                        </div>
                    @endif
                    @if($next_lesson)
                        <div
                            class="w-1/2 border-[0.2px] border-white text-base @if($previous_lesson) border-l-0 @endif px-2 py-1">
                            {{ __('home.next_lesson') }}: <a
                                href="{{ route('article', ['category_slug' => $next_lesson->category->slug, 'article_slug' => $next_lesson->slug ]) }}"
                                class="text-white font-bold">{{ $next_lesson->title }}</a>
                        </div>
                    @else
                        <div class="w-1/2">
                        </div>
                    @endif
                </div>
        @endif
    </section>
    @endif





@if($articleRandom->count() > 0)
    <section class="bg-[#F1F5F9]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    {{ __('home.other_articles') }}</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ __('home.other_articles_description') }}</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach($articleRandom as $articlePost)
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                href="{{ route('article', ['category_slug' => $articlePost->category->slug, 'article_slug' => $articlePost->slug ]) }}">{{ $articlePost->title }}</a>
                        </h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $articlePost->short_content }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full" src="{{ asset('img/owsianka_jakub.jpg') }}"
                                     alt="Jese Leos avatar"/>
                                <span class="font-medium dark:text-white">
                            {{ $articlePost->author }}
                      </span>
                            </div>
                            <a href="{{ route('article', ['category_slug' => $articlePost->category->slug, 'article_slug' => $articlePost->slug ]) }}"
                               class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                {{ \Illuminate\Support\Facades\Lang::get('article.read_more') }}
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </section>
@endif

    {{--    <h3>{{ $category }}</h3>--}}

</div>
