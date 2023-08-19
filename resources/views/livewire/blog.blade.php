<div>
    <div class="container px-8 mx-auto xl:px-5 max-w-screen-lg pb-5 pt-3 lg:py-8">
        <div class="grid gap-10 md:grid-cols-2 lg:gap-10 ">
            @foreach($articlesTop as $article)
                <div class="group cursor-pointer">
                    <div
                        class=" overflow-hidden rounded-md bg-gray-100 transition-all hover:scale-105   dark:bg-gray-800">
                        <a class="relative block aspect-video"
                           href="{{ route('article', ['category_slug' => $article->category->slug, 'article_slug' => $article->slug]) }}">
                            <img
                                alt="Thumbnail"
                                class="object-cover transition-all" sizes="(max-width: 768px) 30vw, 33vw"
                                src="{{ asset('storage/'. $article->images) }}"
                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        </a>
                    </div>
                    <div class="">
                        <div>
                            <div class="flex gap-1">
                                <a href="{{ route('category', ['category_slug' => $article->category->slug]) }}">
                                    <span class="inline-block text-xs font-medium tracking-wider uppercase mt-5 text-blue-600">{{ $article->category->name }}</span>
                                </a>
                            </div>
                            <h2 class="text-lg font-semibold leading-snug tracking-tight mt-2 dark:text-white">
                                <a href="{{ route('article', ['category_slug' => $article->category->slug, 'article_slug' => $article->slug]) }}">
                                    <span
                                        class="bg-gradient-to-r from-green-200 to-green-100 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px] dark:from-purple-800 dark:to-purple-900">
                                        {{ $article->title }}
                                    </span>
                                </a>
                            </h2>

                            <div class="mt-3 flex items-center space-x-3 text-gray-500 dark:text-gray-400">
                                <a href="#">
                                    <div class="flex items-center gap-3">
                                        <div class="relative h-5 w-5 flex-shrink-0">
                                            <img alt="Mario Sanchez"
                                                 loading="lazy" decoding="async"
                                                 data-nimg="fill"
                                                 class="rounded-full object-cover"
                                                 sizes="20px"
                                                 src="{{ asset('img/owsianka_jakub.jpg') }}"
                                                 style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <span class="truncate text-sm">{{ $article->author }}</span></div>
                                </a><span class="text-xs text-gray-300 dark:text-gray-600">•</span>
                                <time class="truncate text-sm" datetime="2022-10-21T15:48:00.000Z">{{ date('Y-m-d' , strtotime($article->created_at)) }}
                                </time>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-10 grid gap-10 md:grid-cols-2 lg:gap-10 xl:grid-cols-3 ">
            @foreach($articlesMain as $article)
                <div class="group cursor-pointer">
                    <div
                        class=" overflow-hidden rounded-md bg-gray-100 transition-all hover:scale-105   dark:bg-gray-800">
                        <a class="relative block aspect-video"
                           href="{{ route('article', ['category_slug' => $article->category->slug, 'article_slug' => $article->slug]) }}">
                            <img
                                alt="Thumbnail" fetchpriority="high" decoding="async" data-nimg="fill"
                                class="object-cover transition-all" sizes="(max-width: 768px) 30vw, 33vw"
                                src="{{ asset('storage/'. $article->images) }}"
                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        </a>
                    </div>
                    <div class="">
                        <div>
                            <div class="flex gap-1">
                                <a href="{{ route('category', ['category_slug' => $article->category->slug]) }}">
                                    <span class="inline-block text-xs font-medium tracking-wider uppercase mt-5 text-blue-600">{{ $article->category->name }}</span>
                                </a>
                            </div>
                            <h2 class="text-lg font-semibold leading-snug tracking-tight mt-1 dark:text-white">
                                <a href="{{ route('article', ['category_slug' => $article->category->slug, 'article_slug' => $article->slug]) }}">
                                    <span
                                        class="bg-gradient-to-r from-green-200 to-green-100 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px] dark:from-purple-800 dark:to-purple-900">
                                        {{ $article->title }}
                                    </span>
                                </a>
                            </h2>

                            <div class="mt-2 flex items-center space-x-3 text-gray-500 dark:text-gray-400">
                                <a href="#">
                                    <div class="flex items-center gap-3">
                                        <div class="relative h-5 w-5 flex-shrink-0">
                                            <img alt="Mario Sanchez"
                                                 loading="lazy" decoding="async"
                                                 data-nimg="fill"
                                                 class="rounded-full object-cover"
                                                 sizes="20px"
                                                 src="{{ asset('img/owsianka_jakub.jpg') }}"
                                                 style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        </div>
                                        <span class="truncate text-sm">{{ $article->author }}</span></div>
                                </a>
                                <span class="text-xs text-gray-300 dark:text-gray-600">•</span>
                                <time class="truncate text-sm" datetime="2022-10-21T15:48:00.000Z">{{ date('Y-m-d' , strtotime($article->created_at)) }}
                                </time>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
