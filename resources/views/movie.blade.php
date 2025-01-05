@extends('layout')

@section('content')
    <!-- Movie Details -->
    <div class="py-6 flex flex-col justify-center sm:py-12">
        <div class="sm:mx-auto">
            <div class=" p-8 flex space-x-8">
                <!-- Movie Poster -->
                <div class="h-48 overflow-visible w-1/3">
                    <img class="rounded-3xl shadow-lg"
                         src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1LRLLWGvs5sZdTzuMqLEahb88Pc.jpg"
                         alt="Sweet Tooth">
                </div>
                <!-- Movie Information -->
                <div class="flex flex-col w-2/3 space-y-4">
                    <!-- Title and Rating -->
                    <div class="flex justify-between items-start">
                        <h2 class="text-3xl font-bold dark:text-gray-200">Sweet Tooth: El niño ciervo</h2>
                        <div class="bg-yellow-400 font-bold rounded-xl p-2">IMDb 7.2</div>
                    </div>
                    <!-- Year and Genre -->
                    <div>
                        <div class="text-sm dark:text-gray-400 text-gray-800">Країна: <span class="dark:text-gray-300">CША</span>
                        </div>
                        <div class="text-sm dark:text-gray-400 text-gray-800">Рік: <span
                                class="dark:text-gray-300">2024</span></div>
                        <div class="text-sm dark:text-gray-400 text-gray-800">Genres: <span class="dark:text-gray-300">Fantasy, Drama</span>
                        </div>
                        <div class="flex items-center text-sm dark:text-gray-400 text-gray-800">
                            Рейтинг:
                            <span class="flex items-center ml-2 text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967h4.174c.969 0 1.371 1.24.588 1.81l-3.375 2.455 1.286 3.966c.3.921-.755 1.688-1.54 1.11l-3.375-2.454-3.375 2.454c-.784.578-1.839-.189-1.539-1.11l1.285-3.966-3.375-2.455c-.783-.57-.381-1.81.588-1.81h4.174l1.285-3.967z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967h4.174c.969 0 1.371 1.24.588 1.81l-3.375 2.455 1.286 3.966c.3.921-.755 1.688-1.54 1.11l-3.375-2.454-3.375 2.454c-.784.578-1.839-.189-1.539-1.11l1.285-3.966-3.375-2.455c-.783-.57-.381-1.81.588-1.81h4.174l1.285-3.967z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967h4.174c.969 0 1.371 1.24.588 1.81l-3.375 2.455 1.286 3.966c.3.921-.755 1.688-1.54 1.11l-3.375-2.454-3.375 2.454c-.784.578-1.839-.189-1.539-1.11l1.285-3.966-3.375-2.455c-.783-.57-.381-1.81.588-1.81h4.174l1.285-3.967z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967h4.174c.969 0 1.371 1.24.588 1.81l-3.375 2.455 1.286 3.966c.3.921-.755 1.688-1.54 1.11l-3.375-2.454-3.375 2.454c-.784.578-1.839-.189-1.539-1.11l1.285-3.966-3.375-2.455c-.783-.57-.381-1.81.588-1.81h4.174l1.285-3.967z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300"
                                     fill="currentColor"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967h4.174c.969 0 1.371 1.24.588 1.81l-3.375 2.455 1.286 3.966c.3.921-.755 1.688-1.54 1.11l-3.375-2.454-3.375 2.454c-.784.578-1.839-.189-1.539-1.11l1.285-3.966-3.375-2.455c-.783-.57-.381-1.81.588-1.81h4.174l1.285-3.967z"/>
                                </svg>
                            </span>
                            <span class="ml-2 dark:text-gray-300 text-gray-800">4.5</span>
                        </div>
                    </div>

                    <!-- Short Description -->
                    <p class="dark:text-gray-400 text-gray-800 max-h-40 overflow-y-hidden">
                        In a post-apocalyptic world, a boy who’s half human and half deer embarks on a perilous
                        adventure.
                    </p>
                    <!-- Cast -->
                    <div class="mt-8">
                        <h3 class="text-lg text-gray-600 dark:text-gray-200 font-semibold mb-2">Top Cast:</h3>
                        <div class="flex flex-wrap gap-2 sm:gap-4">
                            <figure class="flex flex-col items-center gap-2">
                                <img src="https://image.tmdb.org/t/p/original//vrzZ41TGNAFgfmZjC2sOJySzBLd.jpg"
                                     alt="Paul Mescal"
                                     class="h-[64px] w-[48px] md:h-[96px] md:w-[72px] object-cover rounded-md shadow-md">
                                <h4 class="text-gray-800 dark:text-gray-400 text-[10px] md:text-[12px] text-center max-w-[48px] md:max-w-[72px]">
                                    Paul Mescal</h4>
                            </figure>
                            <figure class="flex flex-col items-center gap-2">
                                <img src="https://image.tmdb.org/t/p/original//9Iyt3wbsla5bM6IzbICDVnBhkER.jpg"
                                     alt="Denzel Washington"
                                     class="h-[64px] w-[48px] md:h-[96px] md:w-[72px] object-cover rounded-md shadow-md">
                                <h4 class="text-gray-800 dark:text-gray-400 text-[10px] md:text-[12px] text-center max-w-[48px] md:max-w-[72px]">
                                    Denzel Washington</h4>
                            </figure>
                            <figure class="flex flex-col items-center gap-2">
                                <img src="https://image.tmdb.org/t/p/original//9VYK7oxcqhjd5LAH6ZFJ3XzOlID.jpg"
                                     alt="Pedro Pascal"
                                     class="h-[64px] w-[48px] md:h-[96px] md:w-[72px] object-cover rounded-md shadow-md">
                                <h4 class="text-gray-800 dark:text-gray-400 text-[10px] md:text-[12px] text-center max-w-[48px] md:max-w-[72px]">
                                    Pedro Pascal</h4>
                            </figure>
                            <figure class="flex flex-col items-center gap-2">
                                <img src="https://image.tmdb.org/t/p/original//lvQypTfeH2Gn2PTbzq6XkT2PLmn.jpg"
                                     alt="Connie Nielsen"
                                     class="h-[64px] w-[48px] md:h-[96px] md:w-[72px] object-cover rounded-md shadow-md">
                                <h4 class="text-gray-800 dark:text-gray-400 text-[10px] md:text-[12px] text-center max-w-[48px] md:max-w-[72px]">
                                    Connie Nielsen</h4>
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
