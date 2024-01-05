@extends('layouts.layout')
@section('content')
    <header class="bg-white shadow ">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h2 class=" hover:shadow-inner text-6xl font-bold tracking-tight text-gray-900">Recipes</h2>
        <h3 class="text-2xl font-bold tracking-tight text-gray-900">For Ninjas</h3>
        </div>


    </header>
    <main class="bg-gray-100 px-16 py-12">
        <h4 class="font-bold mt-12 pb-2 border-b border4-gray-200">Latest Recipes</h4>



        <div class="mt-8 grid   gap-10 px-1g0 py-6 sm:px-2o lg:px-8 ">
            <!-- My content -->


            {{-- card --}}
            <a href="#" class="flex flex-col items-center bg-white border mt-8 border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 md:rounded-none md:rounded-l-lg" src="/img/a1.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <span class="block flex justify-between text-gray-500 text-sm">By Abu Bilal <i class="">2mins ago</i></span>
            
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">1st Hadith </h5>
                    <p  class="mb-3   font-normal text-gray-700 dark:text-gray-400"> عن ابي هريرة <b class="text-blue-400">More...</b> </p>
                    <p dir="rtl" class="font-bold tracking-tight text-gray-900" lang="ar" style="font-size:30px; font-family:Noto Naskh Arabic">رَبِ زدني علماً</p>

                </div>
                
                  
            </a>
            {{-- ///card --}}

            {{-- card --}}
            <a href="#" class="flex flex-col items-center bg-white border mt-8 border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 h-fit md:h-full md:w-48 md:rounded-none md:rounded-l-lg" src="/img/a2.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <span class="block flex justify-between text-gray-500 text-sm">By Abu Bilal <i class="">2mins ago</i></span>
            
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. <b class="text-blue-400">More...</b> </p>
                </div>
                  
            </a>
            {{-- ///card --}}
        
            <div class="card"> <!-- Card and badge -->
                <img src="/img/city.jpg" alt="night" class="w-full h-32 sm:h-48 object-cover">
                <div class="m-4">
                    <span class="font-bold"> 5 Bean Chilli Stew</span>
                    <span class="block text-gray-500 text-sm">Recipe By Mario</span>
                </div>
                {{-- badge --}}
                <div class="badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>25 mins</span>    
                </div>
                {{-- //badge --}}

            </div>  <!-- //Card and badge -->

            <div class="card"><!-- Card and badge -->
                <img src="/img/nature.jpg" alt="night" class="w-full h-32 sm:h-48 object-cover">
                <div class="m-4">
                    <span class="font-bold"> 5 Bean Chilli Stew</span>
                    <span class="block text-gray-500 text-sm">Recipe By Mario</span>
                </div>
                {{-- badge --}}
                <div class="badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    <span>25 mins</span>    
                </div>
                {{-- //badge --}}
            </div>  <!-- //Card and badge -->

            <div class="card"> <!-- Card and badge -->
                <img src="/img/img.jpg" alt="night" class="w-full h-32  sm:h-48 object-cover">
                <div class="m-4">
                    <span class="font-bold"> 5 Bean Chilli Stew</span>
                    <span class="block text-gray-500 text-sm">Recipe By Mario</span>
                </div>
                {{-- badge --}}
                <div class="badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    <span>25 mins</span>    
                </div>
                {{-- //badge --}}
            </div>  <!-- //Card and badge -->

        
            <div class="card"> <!-- Card and badge -->
                <img src="/img/img2.jpg" alt="night" class="w-full h-32 sm:h-48 object-cover">
                <div class="m-4"> 
                    <span class="font-bold"> 5 Bean Chilli Stew</span>
                    <span class="block text-gray-500 text-sm">Recipe By Mario</span>
                </div>
                {{-- badge --}}
                <div class="badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    <span>25 mins</span>    
                </div>
                {{-- //badge --}}

            </div>  <!-- //Card and badge -->

            <div class="card"><!-- Card and badge -->
                <img src="/img/img4.jpg" alt="night" class="w-full h-32 sm:h-48 object-cover">
                <div class="m-4">
                    <span class="font-bold"> 5 Bean Chilli Stew</span>
                    <span class="block text-gray-500 text-sm">Recipe By Mario</span>
                </div>
                {{-- badge --}}
                <div class="badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    <span>25 mins</span>    
                </div>
                {{-- //badge --}}
            </div>  <!-- //Card and badge -->


        </div>
    </main> 
  
</div> {{-- // m-h-full --}}
@endsection