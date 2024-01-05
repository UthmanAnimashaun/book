@extends('layouts.layout')
@section('content')
<header class="rounded-lg  mx-7 bg-transparent bg-clip-tebxt bg-clip-content bg-gradivent-to-  bg-gradient-to-br freom-neutral-300    to-stone-400">
  <div class="px-4 py-7 lg:py-2 mx-auto max-w-screen-xl  md:flex justify-between text-center p-8 first-line:py-16 ">
     
      <div class="p-3 mx-3   my-auto ">
        <div class="px-4  text-center py-10 lg:py-32">
          <h1 class="mb-4 text-xl font-extrabold tracking-tight leading-none  text-gray-700 md:text-1xl flex justify-center">Memorisation of </h1>
          <h1 class="mb-4 text-7xl md:text-9xl font-extrabold tracking-tight leading-none  text-gray-700 flex justify-center">100</h1>
          <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none  text-gray-700 md:text-3xl flex justify-center">Short Authentic Ahaadeeth of the Prophet (S.A.W)</h1>
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none  text-gray-700 md:text-5xl lg:text-6xl flex justify-center">Did you Know تتابلي</h1>
        </div>
      </div>
      <div class="p-3 mx-3 p-2v my-auto">
        <img class="  rounded-lg lg:h-72  w-auxto mx-auto  "
            src="/img/a1.jpg">
    </div>

  </div>
</header>

<section class="  rounded-lg mx-7 bg-transparent bg-clip-tebxt bg-clip-content bg-gradient-to-  bg-gradient-to-br from-neutral-300    to-stone-400 to-stone-400">
  <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-32">
      <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none  text-gray-700 md:text-3xl flex justify-center">Memorisation of </h1>
      <h1 class="mb-4 text-4xl md:text-9xl font-extrabold tracking-tight leading-none  text-gray-700 flex justify-center">100 </h1>
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none  text-gray-700 md:text-5xl lg:text-6xl flex justify-center">Did you Know </h1>

      <p class="mb-8 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 lg:px-48">
       <b class=" font-bold">💯 Ahaadeeth Memorization</b> is a community of muslims from acrross 21 countries</p>
      <p class="mb-8 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 lg:px-48">
       <b>💯  Ahaadeeth Memorization</b> is made up of <b>Actiities, Perks, Certification</b> </p>
 
      <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
          <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-900">
              Get started
              <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
          </a>
          <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-gray rounded-lg bg-gray-200 border border-gray hover:bg-gray-300 focus:ring-4 focus:ring-gray-400">
              Learn more
          </a>  
      </div>
  </div>
</section>






            {{-- about services and FAQ --}}
            

 
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                  <li class="mr-2">
                      <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">About</button>
                  </li>
                  <li class="mr-2">
                      <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Services</button>
                  </li>
                  <li class="mr-2">
                      <button id="statistics-tab" data-tabs-target="#statistics" type="button" role="tab" aria-controls="statistics" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">FAQ</button>
                  </li>
              </ul>
              <div id="defaultTabContent">
                  <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                      <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Institute of Intellect for Arabic Studies and Islamic Culture</h2>
                      <p class="mb-3 text-gray-500 dark:text-gray-400">Empower Developers, IT Ops, and business teams to collaborate at high velocity. Respond to changes and deliver great customer and employee service experiences fast.</p>
                      <a href="#" class="inline-flex items-center font-medium text-transparent bg-clip-text bg-gradient-to-  bg-gradient-to-br from-purple-600    to-pink-600 ">
                          Learn more
                          <svg class="w-2.5 h-2.5 ml-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                      </a>
                  </div>
                  <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
                      <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the world’s potential</h2>
                      <!-- List -->
                      <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                          <li class="flex space-x-2 items-center">
                              <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                              </svg>
                              <span class="leading-tight">Dynamic reports and dashboards</span>
                          </li>
                          <li class="flex space-x-2 items-center">
                              <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                              </svg>
                              <span class="leading-tight">Templates for everyone</span>
                          </li>
                          <li class="flex space-x-2 items-center">
                              <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                              </svg>
                              <span class="leading-tight">Development workflow</span>
                          </li>
                          <li class="flex space-x-2 items-center">
                              <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                              </svg>
                              <span class="leading-tight">Limitless business automation</span>
                          </li>
                      </ul>
                  </div>
                  
                  <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                          <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
          
                              <h2 id="accordion-flush-heading-1">
                                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                  <span>What is 💯 Ahaadeeth?</span>
                                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                  </svg>
                                  </button>
                              </h2>
                              <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                  <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                  <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                                  <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                                  </div>
                              </div>
          
                              <h2 id="accordion-flush-heading-2">
                                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                  <span>Is there a PDF file available?</span>
                                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                  </svg>
                                  </button>
                              </h2>
                              <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                  <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                  <p class="mb-2 text-gray-500 dark:text-gray-400">Yes there is, click on the link below o download or yu could get it at the boook store</p>
                                  <p class="text-gray-500 dark:text-gray-400">Clik <a href="/files/Noor_Book_com_100_حديث_صحيح_للحفظ_من_قصار_الأحاديث_3_(2).pdf" class="text-transparent bg-clip-text bg-gradient-to-  bg-gradient-to-br from-purple-600    to-pink-600  hover:underline" attribute-list download> here </a>to downlad 100 Ahaadeeth PDF.</p>
                                  </div>
                              </div>
          
                              <h2 id="accordion-flush-heading-3">
                                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                                  <span>I'm unable to click on the registration link on WhatsApp</span>
                                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                  </svg>
                                  </button>
                              </h2>
                              <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                  <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                  <p class="mb-2 text-gray-500 dark:text-gray-400"> Update your WhatsApp</p>
                                  <p class="mb-2 text-gray-500 dark:text-gray-400"> Kindly make use of another browser</p>
                                  <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                      <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdGePN3WFAGfVxzm17s1UZIjFbNJ6cw0iyCtBd26HnS1FhiUQ/viewform?usp=pp_url
                                        " class="text-blue-600 dark:text-blue-500 hover:underline">Registration link</a></li>
                                      <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                  </ul>
                                  </div>
                              </div>
                
                              <h2 id="accordion-flush-heading-4">
                                  <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                                  <span>I'm unable to fill the form/I'm unable to submit the form</span>
                                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                  </svg>
                                  </button>
                              </h2>
                              <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                                  <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                  <p class="mb-2 text-gray-500 dark:text-gray-400"> Kindly make use of another browser </p>
                                  <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                      <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdGePN3WFAGfVxzm17s1UZIjFbNJ6cw0iyCtBd26HnS1FhiUQ/viewform?usp=pp_url
                                        " class="text-blue-600 dark:text-blue-500 hover:underline">Registration link</a></li>
                                      <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                  </ul>
                                  </div>
                              </div>
                          </div>
                      </div> {{-- </div> end --}}
              </div>
          </div>
            
            {{-- //about services and FAQ --}}


            {{-- Did you know --}}
            <section class="bg-center bg-blue-50 text-gray bg-blend-multiply bg-no-repeat bg-[url('/img/city.jpg')]">
              <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                  <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-700 md:text-5xl lg:text-6xl flex justify-center">Did you Know 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 text-red-600  ml-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                    
                    
                  </h1>
                  <p class="mb-8 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 lg:px-48">
                   <b class=" font-bold">💯 Ahaadeeth Memorization</b> is a community of muslims from acrross 21 countries</p>
                  <p class="mb-8 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 lg:px-48">
                   <b>💯  Ahaadeeth Memorization</b> is made up of <b>Actiities, Perks, Certification</b> </p>
             
                  <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                      <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-900">
                          Get started
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                      <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-gray rounded-lg bg-gray-200 border border-gray hover:bg-gray-300 focus:ring-4 focus:ring-gray-400">
                          Learn more
                      </a>  
                  </div>
              </div>
            </section>
            
            {{-- ///Did you know --}}


            {{-- 
              ==================
              ==================
              ==================
              Testimones 
              ==================
              ==================
              ==================
              ==================
              ==================
              ========--}}


                
                  <section class="bg-center bg-blend-multiply bg-no-repeat bg-[url('\img\city.jpg')]">
                    <div class="px-4 mx-auto max-w-screen-xl text-center py-10 lg:py-24">
                        <h5 class="mb-4 text-2xl  font-extrabold tracking-tight leading-none text-gray-700  lg:text-3xl flex justify-center text-transparent bg-clip-text bg-gradient-to-  bg-gradient-to-br from-purple-600    to-pink-600">Our Students 
                          
                        </h5>
                        <h2 class="mb-4 text-3xl capitalize font-extrabold tracking-tight leading-none text-gray-700  lg:text-4xl flex justify-center">What Students say
                        
                        </h2>
                        <p class="mb-8 text-bbb capitalize font-normal text-gray-700 lg:text-xl sm:px-16 lg:px-48">
                        <b class=" font-bold">Not sure yet? See what our students say about our programme!</p>
                     
                    </div>
                  </section>



                              
              <div class="grid mb-8 border capitalize border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Adhering to Policies</h3>
                        <p class="my-4">The structure of the programme and its organisation is quite excellent."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Bonnie Green</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Batch 8 Level 5</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg  font-semibold text-gray-900 dark:text-white">Consistency</h3>
                        <p class="my-4">it's consistency towards rekindling the Deen in our hearts"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Roberta Casas</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Batch 6 Level 6</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">How it been carried out</h3>
                        <p class="my-4">All mode of teachng is amazing. The pace of learning is also comfortable"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Jese Leos</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Batch 7 level 4</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-br-lg dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">The program structure</h3>
                        <p class="my-4">I love the recitations and the explanation. They are clear and quite detailed."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Joseph McFall</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Batch 4 Level 8</div>
                        </div>
                    </figcaption>    
                </figure>
              </div>

            {{-- /////
              ==================
              ==================
              ==================
              Testimones 
              ==================
              ==================
              ==================
              ==================
              ==================
              ========--}}



    @livewire('counter')

    <section class="bg-center capitalize bg-blend-multiply bg-no-repeat bg-[url('\img\city.jpg')]">
      <div class="px-4 mx-auto max-w-screen-xl text-center py-10 lg:py-24">
          <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-700  lg:text-4xl flex justify-center ">Trusted by over
            
          </h2>
          <h2 class="mb-4 text-3xl  from-purple-600    to-pink-600 text-transparent bg-clip-text bg-gradient-to- bg-gradient-to-bl  font-extrabold tracking-tight leading-none   lg:text-4xl flex justify-center">21 Countries over the World
          
          </h2>
          <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
          <b class=" font-bold">alhamdulilah! we have active participants accross over 19 countries which nclude Nigeria, U.S.A, ivory coast, malaysa, ghana, niger, china, gambia, u.A.E (dubai), kingdom of saudi arabia, u.k, iraq, egypt, cmeroon and seven (7) other countries. </p>
       
      </div>
    </section>

@endsection

