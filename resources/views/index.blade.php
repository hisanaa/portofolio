<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body class="font-poppins">

    <div class="h-screen w-screen xl:hidden flex items-center justify-center bg-purple-600">
      <h1 class="text-white text-2xl font-bold text-center content-center">Working on Desktop Only!</h1>
    </div>
    <div class="hidden sm:hidden md:hidden lg:hidden xl:block">
      {{-- navbar --}}
      <div class="w-full h-2 bg-purple-600">
  
      </div>
  
      {{-- about me --}}
      <div class="w-full justify-center items-center flex flex-col bg-custom-gray p-5">
          <div class="bg-red-400 w-32 h-32 border-4 border-purple-600 rounded-full overflow-hidden">
            <img class="object-contain" src="{{ asset('img/pp.jpg') }}" alt="">
          </div>
          <h1 class="text-lg font-medium pt-2">ARIF SAIFUDIN</h1>
          <h1 class="text-4xl text-purple-500 font-bold pb-2">WEB DEVELOPER</h1>
          <p class="w-2/4 text-center text-gray-600">Saya adalah seseorang yang memiliki ketertarikan di dunia teknologi. Terutama pada teknologi software, hardware dan jaringan. menjadi seorang yang kompeten pada ketertarikan saya adalah impian saya. Untuk sekarang saya bekerja dan fokus pada software development. Fokus utama saya adalah untuk menjadi fullstack developer.</p>
          <div class="flex w-30 pt-3">
            <div class="w-10 h-10 bg-purple-600 hover:bg-purple-700 mx-2 rounded-full items-center justify-center flex">
              <a class="items-center flex" target="_blank" href="https://www.facebook.com/d4rmanlebay">
                <i class="fab fa-facebook-f text-xl font-bold text-custom-gray"></i>
              </a>
            </div>
            <div class="w-10 h-10 bg-purple-600 hover:bg-purple-700 mx-2 rounded-full items-center justify-center flex">
              <a class="items-center flex" target="_blank" href="https://instagram.com/ezzanox">
                <i class="fab fa-instagram text-xl font-bold text-custom-gray"></i>
              </a>
            </div>
            <div class="w-10 h-10 bg-purple-600 hover:bg-purple-700 mx-2 rounded-full items-center justify-center flex">
              <a class="items-center flex" target="_blank" href="https://twitter.com/ezzanox">
                <i class="fab fa-twitter text-xl font-bold text-custom-gray"></i>
              </a>
            </div>
            <div class="w-10 h-10 bg-purple-600 hover:bg-purple-700 mx-2 rounded-full items-center justify-center flex">
              {{-- <i class="fab fa-facebook-f text-xl font-bold text-custom-gray"></i> --}}
              <a class="items-center flex" target="_blank" href="https://github.com/ezzanox">
                <i class="fab fa-github text-xl font-bold text-custom-gray"></i>
              </a>
            </div>
          </div>
        </div>
      {{-- portfolio --}}
      <div class="w-full pt-2 pb-4  bg-white">
          <div class="container mx-auto">
              <div class="py-5 flex justify-center items-center">
                  <h4 class="text-3xl uppercase font-semibold text-gray-700">Portfolio</h4>
              </div>
              <div class="grid grid-cols-4 gap-5">
                @foreach ($portfolio as $item)
                <div class="bg-custom-gray shadow-lg rounded-md overflow-hidden py-2">
                    {{-- <div class="font-medium text-md">Type : </div> --}}
                    <div class="w-full">
                        <img class="object-contain h-full" src="{{ asset('storage/'. $item->thumbnail ) }}" alt="">
                    </div>
                    <div class=" p-5 ">
                        <div class="font-medium text-md flex">
                            <span class="text-gray-500">Project On :</span>
                            <span class="px-1 font-semibold">{{ $item->project_on }}</span>
                        </div>
                        <div class="font-medium text-md flex">
                            <span class="text-gray-500">Tools :</span>
                            <span class="px-1 font-semibold">[{{ $item->tools }}]</span>
                        </div>
                        <div class="font-medium text-md flex">
                            <span class="text-gray-500">Url :</span>
                            <span class="px-1 font-semibold hover:text-gray-700"><a target="_blank" href="{{ $item->url }}">{{ Str::replace('https://', ' ', $item->url)  }}</a></span>
                        </div>
                        {{-- button show --}}
                        {{-- <div class="flex items-center pt-2">
                          <div class="flex ">
                            <a href="{{ redirect()->to($item->url) }}" class="bg-purple-600 items-center hover:bg-purple-700 h-10 rounded text-white text-center px-5 font-semibold">Show Portfolio</a>
                          </div>
                        </div> --}}
                    </div>
                </div>
                @endforeach
              </div>
              <div class="flex justify-center font-semibold uppercase pt-5 text-purple-600 hover:text-purple-700">
                 <a href="/portfolio">More Data Portfolio</a>
              </div>
          </div>
      </div>
      {{-- contact me --}}
      <div class="w-full bg-custom-gray p-5">
          <div class="container mx-auto">
              <div class="pb-5 flex justify-center items-center">
                  <h4 class="text-3xl uppercase font-semibold text-gray-700">My Skills</h4>
              </div>
              <div class="grid grid-cols-3 gap-3">
                  <div class="bg-white p-5 rounded shadow">
                      <div class="h-10 rounded-md w-1/3 mb-3 flex justify-center text-md items-center font-semibold bg-gray-100">
                          Frontend
                      </div>
                      <div class="relative">
                        <div class="flex mb-1 items-center justify-between">
                          <div>
                            <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                              React JS
                            </span>
                          </div>
                          <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-purple-600">
                              75%
                            </span>
                          </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                          <div
                            style="width: 75%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                        </div>
                      </div>
                      <div class="relative">
                          <div class="flex mb-1 items-center justify-between">
                            <div>
                              <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                                Next JS
                              </span>
                            </div>
                            <div class="text-right">
                              <span class="text-xs font-semibold inline-block text-purple-600">
                                75%
                              </span>
                            </div>
                          </div>
                          <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                            <div
                              style="width: 75%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                          </div>
                      </div>
                      <div class="relative">
                        <div class="flex mb-1 items-center justify-between">
                          <div>
                            <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                              Tailwind CSS
                            </span>
                          </div>
                          <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-purple-600">
                              85%
                            </span>
                          </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                          <div
                            style="width: 85%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                        </div>
                      </div>
                      <div class="relative">
                        <div class="flex mb-1 items-center justify-between">
                          <div>
                            <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                              Bootstrap
                            </span>
                          </div>
                          <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-purple-600">
                              85%
                            </span>
                          </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                          <div
                            style="width: 85%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                        </div>
                      </div>
                      <div class="relative">
                        <div class="flex mb-1 items-center justify-between">
                          <div>
                            <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                              Wordpress
                            </span>
                          </div>
                          <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-purple-600">
                              85%
                            </span>
                          </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                          <div
                            style="width: 85%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                        </div>
                      </div>
                  </div>
                  <div class="bg-white p-5 rounded shadow">
                      <div class="h-10 rounded-md w-1/3 mb-3 flex justify-center text-md items-center font-semibold bg-gray-100">
                          Backend
                      </div>
                      <div class="relative">
                          <div class="flex mb-1 items-center justify-between">
                            <div>
                              <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                                Laravel
                              </span>
                            </div>
                            <div class="text-right">
                              <span class="text-xs font-semibold inline-block text-purple-600">
                                80%
                              </span>
                            </div>
                          </div>
                          <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                            <div
                              style="width: 80%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                          </div>
                      </div>
                      <div class="relative">
                        <div class="flex mb-1 items-center justify-between">
                          <div>
                            <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                              Codeigniter
                            </span>
                          </div>
                          <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-purple-600">
                              75%
                            </span>
                          </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                          <div
                            style="width: 75%"
                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                        </div>
                    </div>
                  </div>
                  <div class="bg-white p-5 rounded shadow">
                      <div class="h-10 rounded-md w-1/3 mb-3 flex justify-center text-md items-center font-semibold bg-gray-100">
                          Mobile
                      </div>
                      <div class="relative">
                          <div class="flex mb-1 items-center justify-between">
                            <div>
                              <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                                React Native
                              </span>
                            </div>
                            <div class="text-right">
                              <span class="text-xs font-semibold inline-block text-purple-600">
                                80%
                              </span>
                            </div>
                          </div>
                          <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                            <div
                              style="width: 80%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                          </div>
                      </div>
                      <div class="relative">
                          <div class="flex mb-1 items-center justify-between">
                            <div>
                              <span class="text-xs font-semibold inline-block py-0 px-2 uppercase rounded-full text-purple-600">
                                Tailwind for React Native
                              </span>
                            </div>
                            <div class="text-right">
                              <span class="text-xs font-semibold inline-block text-purple-600">
                                80%
                              </span>
                            </div>
                          </div>
                          <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                            <div
                              style="width: 80%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </div>

</body>
</html>