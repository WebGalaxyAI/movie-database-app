@extends('layout')
@section('content')
    @include('partials.hero-banner')
    @include('partials.top-stars')
    @include('partials.similar-movies')
    <section class="w-full"
             style="background-image: linear-gradient(to top, rgb(0, 0, 0), rgba(0, 0, 0, 0.98), rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.4)), url(&quot;https://image.tmdb.org/t/p/original//2cxhvwyEwRlysAmRH4iodkvo0z5.jpg&quot;); background-position: center top; background-size: cover;">
        <div
            class="max-w-[1140px] mx-auto md:px-8 sm:px-6 px-4 xl:px-0 lg:py-36 sm:py-[136px] sm:pb-28 xs:py-28 xs:pb-12 pt-24 pb-8 flex flex-row lg:gap-12 md:gap-10 gap-8 justify-center ">
            <div class="md:block hidden">
                <div class="h-[380px] w-[254px]" style="opacity: 1; transform: none;"><img
                        src="https://image.tmdb.org/t/p/original//2cxhvwyEwRlysAmRH4iodkvo0z5.jpg" alt="Gladiator II"
                        height="380" width="254"
                        class="transition-all duration-300 ease-in object-cover rounded-xl shadow-lg opacity-100"></div>
            </div>
            <div
                class="text-gray-300 sm:max-w-[80vw] max-w-[90vw]  md:max-w-[520px] font-nunito flex flex-col lg:gap-5 sm:gap-4 xs:gap-[14px] gap-3 mb-8 flex-1"
                style="opacity: 1;"><h2
                    class="sm:text-4xl xs:text-3xl text-[28.75px] font-extrabold sm:leading-[1.2] xs:leading-normal leading-snug text-secColor sm:max-w-[420px] xs:max-w-[320px] max-w-[280px] md:max-w-[420px]"
                    style="opacity: 1; transform: none;">Gladiator II</h2>
                <ul class="flex flex-row items-center  sm:gap-[14px] xs:gap-3 gap-[6px] flex-wrap"
                    style="opacity: 1; transform: none;"><span class="genre
       md:text-[12.75px] sm:text-[12px] xs:text-[11.75px] text-[10.75px]  sm:py-1 py-[2.75px] sm:px-3 px-[10px] rounded-full dark:text-gray-300">Action</span><span
                        class="genre
       md:text-[12.75px] sm:text-[12px] xs:text-[11.75px] text-[10.75px]  sm:py-1 py-[2.75px] sm:px-3 px-[10px] rounded-full dark:text-gray-300">Adventure</span><span
                        class="genre
       md:text-[12.75px] sm:text-[12px] xs:text-[11.75px] text-[10.75px]  sm:py-1 py-[2.75px] sm:px-3 px-[10px] rounded-full dark:text-gray-300">Drama</span>
                </ul>
                <p class="sm:text-base xs:text-[15.75px] text-[14.25px] leading-relaxed"
                   style="opacity: 1; transform: none;"><span>Years after witnessing the death of the revered hero Maximus at the hands of his uncle, Lucius is forced to enter the Colosseum after his home is conquered by the tyrannical Emperors who now lead Rome with an iron fist. With rage in his heart and the future of the Empire at stake...</span>
                    <button type="button"
                            class="font-bold ml-1 hover:underline transition-all duration-300 inline-block">show more
                    </button>
                </p>
                <h3 class="text-secColor font-bold md:text-[18px] sm:text-[16.75px] xs:text-[15.75px] text-[14.75px]"
                    style="opacity: 1; transform: none;">Top Casts</h3>
                <div class="flex flex-wrap md:gap-4 sm:gap-[14px] gap-2  sm:-mt-2 xs:-mt-[6px] -mt-1"
                     style="opacity: 1;">
                    <figure class="flex flex-col justify-start gap-2" style="opacity: 1; transform: none;">
                        <div class="md:h-[96px] md:w-[64px] h-[54px] w-[40px]"><img
                                src="https://image.tmdb.org/t/p/original//vrzZ41TGNAFgfmZjC2sOJySzBLd.jpg"
                                alt="Paul Mescal" height="96" width="64"
                                class="transition-all duration-300 ease-in object-cover rounded-md shadow-md opacity-100">
                        </div>
                        <h4 class="text-gray-300 md:text-[12px] sm:text-[10.75px] text-[10px] md:max-w-[64px] text-center font-semibold sm:-mt-0 leading-snug max-w-[40px]">
                            Paul Mescal</h4></figure>
                    <figure class="flex flex-col justify-start gap-2" style="opacity: 1; transform: none;">
                        <div class="md:h-[96px] md:w-[64px] h-[54px] w-[40px]"><img
                                src="https://image.tmdb.org/t/p/original//9Iyt3wbsla5bM6IzbICDVnBhkER.jpg"
                                alt="Denzel Washington" height="96" width="64"
                                class="transition-all duration-300 ease-in object-cover rounded-md shadow-md opacity-100">
                        </div>
                        <h4 class="text-gray-300 md:text-[12px] sm:text-[10.75px] text-[10px] md:max-w-[64px] text-center font-semibold sm:-mt-0 leading-snug max-w-[40px]">
                            Denzel Washington</h4></figure>
                    <figure class="flex flex-col justify-start gap-2" style="opacity: 1; transform: none;">
                        <div class="md:h-[96px] md:w-[64px] h-[54px] w-[40px]"><img
                                src="https://image.tmdb.org/t/p/original//9VYK7oxcqhjd5LAH6ZFJ3XzOlID.jpg"
                                alt="Pedro Pascal" height="96" width="64"
                                class="transition-all duration-300 ease-in object-cover rounded-md shadow-md opacity-100">
                        </div>
                        <h4 class="text-gray-300 md:text-[12px] sm:text-[10.75px] text-[10px] md:max-w-[64px] text-center font-semibold sm:-mt-0 leading-snug max-w-[40px]">
                            Pedro Pascal</h4></figure>
                    <figure class="flex flex-col justify-start gap-2" style="opacity: 1; transform: none;">
                        <div class="md:h-[96px] md:w-[64px] h-[54px] w-[40px]"><img
                                src="https://image.tmdb.org/t/p/original//lvQypTfeH2Gn2PTbzq6XkT2PLmn.jpg"
                                alt="Connie Nielsen" height="96" width="64"
                                class="transition-all duration-300 ease-in object-cover rounded-md shadow-md opacity-100">
                        </div>
                        <h4 class="text-gray-300 md:text-[12px] sm:text-[10.75px] text-[10px] md:max-w-[64px] text-center font-semibold sm:-mt-0 leading-snug max-w-[40px]">
                            Connie Nielsen</h4></figure>
                </div>
            </div>
        </div>
    </section>

    https://github.com/sudeepmahato16/movie-app
@endsection
