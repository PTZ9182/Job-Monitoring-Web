<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Monitoring</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-row ">
        
        {{-- sidebar --}}
        <section class="hidden lg:visible lg:h-screen lg:flex lg:flex-col lg:w-1/5">

            <div class="mt-5">
                <h1 class="font-medium text-3xl text-Neutral/10 text-center">Job-Monitoring</h3>

                <ul class="mt-6">

                    <li class="hover:bg-Neutral/11 py-2 mb-2">
                        <a href="{{ Route("divisi.show") }}" class="flex items-center mx-5">
                            <svg width="25" height="29" viewBox="0 0 37 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.7222 20.89H24.3333M10.7222 28.69H19.2389M26.2778 4.939C32.7528 5.29 36 7.6885 36 16.6V28.3C36 36.1 34.0556 40 24.3333 40H12.6667C2.94445 40 1 36.1 1 28.3V16.6C1 7.708 4.24722 5.29 10.7222 4.939M14.6111 8.8H22.3889C26.2778 8.8 26.2778 6.85 26.2778 4.9C26.2778 1 24.3333 1 22.3889 1H14.6111C12.6667 1 10.7222 1 10.7222 4.9C10.7222 8.8 12.6667 8.8 14.6111 8.8Z" stroke="#BDBDBD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                           <span class="font-medium text-base ml-4">Divisi</span>
                        </a>
                     </li>
    
                    <li class="bg-Neutral/11 py-2 mb-2">
                        <a href="{{ Route("karyawan.show") }}" class="flex items-center mx-5">
                            <svg width="27" height="27" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.239 22.7673C29.6407 23.1697 32.2879 22.7498 34.1461 21.5075C36.618 19.8627 36.618 17.168 34.1461 15.5232C32.2703 14.2809 29.5881 13.8609 27.1864 14.2808M9.76095 22.7673C7.35925 23.1697 4.71212 22.7498 2.85387 21.5075C0.382044 19.8627 0.382044 17.168 2.85387 15.5232C4.72965 14.2809 7.41184 13.8609 9.81354 14.2808M29.0447 10.0289C28.9395 10.0114 28.8168 10.0114 28.7116 10.0289C26.2924 9.94139 24.364 7.96413 24.364 5.51444C24.364 3.01225 26.38 1 28.8869 1C31.3938 1 33.4098 3.02975 33.4098 5.51444C33.3923 7.96413 31.4639 9.94139 29.0447 10.0289ZM7.95529 10.0289C8.06048 10.0114 8.18319 10.0114 8.28837 10.0289C10.7076 9.94139 12.636 7.96413 12.636 5.51444C12.636 3.01225 10.62 1 8.11307 1C5.60618 1 3.59015 3.02975 3.59015 5.51444C3.60768 7.96413 5.53606 9.94139 7.95529 10.0289ZM18.5263 23.0997C18.4211 23.0822 18.2984 23.0822 18.1932 23.0997C15.774 23.0123 13.8456 21.035 13.8456 18.5853C13.8456 16.0831 15.8616 14.0709 18.3685 14.0709C20.8754 14.0709 22.8914 16.1006 22.8914 18.5853C22.8739 21.035 20.9455 23.0298 18.5263 23.0997ZM13.4249 28.6116C10.953 30.2563 10.953 32.951 13.4249 34.5958C16.2298 36.4681 20.8228 36.4681 23.6277 34.5958C26.0995 32.951 26.0995 30.2563 23.6277 28.6116C20.8403 26.7568 16.2298 26.7568 13.4249 28.6116Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                           <span class="font-medium text-base ml-4">Karyawan</span>
                        </a>
                     </li>
    
                     <li class="hover:bg-Neutral/11 py-2 mb-2">
                        <a href="{{ Route("presensi.show") }}" class="flex items-center mx-5">
                            <svg width="27" height="29" viewBox="0 0 37 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2105 1V6.28571M24.9474 1V6.28571M1.92105 13.4919H33.2368M23.7868 36.2381C25.0763 37.3481 26.7711 38 28.6316 38C31.3211 38 33.6605 36.6257 34.9316 34.5819C35.6132 33.5248 36 32.2738 36 30.9524C36 29.1729 35.3 27.5519 34.1579 26.3009M23.7868 36.2381C23.2158 35.78 22.7184 35.2162 22.3316 34.5819C21.65 33.5248 21.2632 32.2738 21.2632 30.9524C21.2632 27.0586 24.5605 23.9048 28.6316 23.9048C30.8421 23.9048 32.8132 24.8385 34.1579 26.3009M23.7868 36.2381H10.2105C3.76316 36.2381 1 32.7143 1 27.4286V12.4524C1 7.16667 3.76316 3.64286 10.2105 3.64286H24.9474C31.3947 3.64286 34.1579 7.16667 34.1579 12.4524V26.3009M25.7579 30.9524L27.5816 32.6966L31.5053 29.2257M17.5706 21.6143H17.5872M10.7527 21.6143H10.7692M10.7527 26.9H10.7692" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                           <span class="font-medium text-base ml-4">Presensi</span>
                        </a>
                     </li>
    
                     <li class="hover:bg-Neutral/11 py-2 mb-2">
                        <a href="{{ Route("pengaturan.edit.profil.show") }}" class="flex items-center mx-5">
                            <svg width="29" height="29" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.4908 25.221C22.5544 25.221 25.038 22.6596 25.038 19.5C25.038 16.3404 22.5544 13.779 19.4908 13.779C16.4271 13.779 13.9435 16.3404 13.9435 19.5C13.9435 22.6596 16.4271 25.221 19.4908 25.221Z" stroke="#BDBDBD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 21.1782V17.8218C1 15.8386 2.57171 14.1985 4.51324 14.1985C7.86007 14.1985 9.22839 11.7576 7.54573 8.76358C6.58421 7.04728 7.15742 4.81609 8.84008 3.82445L12.039 1.93652C13.4997 1.04022 15.3858 1.57419 16.2549 3.08072L16.4583 3.44305C18.1224 6.43704 20.8591 6.43704 22.5417 3.44305L22.7451 3.08072C23.6142 1.57419 25.5002 1.04022 26.961 1.93652L30.1599 3.82445C31.8426 4.81609 32.4158 7.04728 31.4543 8.76358C29.7716 11.7576 31.1399 14.1985 34.4868 14.1985C36.4098 14.1985 38 15.8195 38 17.8218V21.1782C38 23.1614 36.4283 24.8015 34.4868 24.8015C31.1399 24.8015 29.7716 27.2424 31.4543 30.2364C32.4158 31.9718 31.8426 34.1839 30.1599 35.1756L26.961 37.0635C25.5002 37.9598 23.6142 37.4258 22.7451 35.9193L22.5417 35.557C20.8776 32.563 18.1409 32.563 16.4583 35.557L16.2549 35.9193C15.3858 37.4258 13.4997 37.9598 12.039 37.0635L8.84008 35.1756C7.15742 34.1839 6.58421 31.9527 7.54573 30.2364C9.22839 27.2424 7.86007 24.8015 4.51324 24.8015C2.57171 24.8015 1 23.1614 1 21.1782Z" stroke="#BDBDBD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                           <span class="font-medium text-base ml-4">Pengaturan</span>
                        </a>
                     </li>
    
                     <li class="hover:bg-Neutral/11 py-2 mb-2">
                        @if (Auth::check())
                        <form action="{{ Route("logout") }}" method="post"> 
                            @csrf
                            <button type="submit" class="flex w-full items-center mx-5">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12L15 8M19 12L15 16M19 12H9M14 21C12.8181 21 11.6478 20.7672 10.5558 20.3149C9.46392 19.8626 8.47177 19.1997 7.63604 18.364C6.80031 17.5282 6.13738 16.5361 5.68508 15.4442C5.23279 14.3522 5 13.1819 5 12C5 10.8181 5.23279 9.64778 5.68508 8.55585C6.13738 7.46392 6.80031 6.47177 7.63604 5.63604C8.47177 4.80031 9.46392 4.13738 10.5558 3.68508C11.6478 3.23279 12.8181 3 14 3" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="font-medium text-base ml-4">Logout</span>
                            </button>
                        </form>
                        @endif
                     </li> 
    
                </ul>
                
                <div class="border mx-5 mb-2" ><hr></div>
    
                <div class="mx-5">
                    <ul>
                        <li class="py-2 flex items-center">
                            <img class="rounded-full" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" style="width: 70px;height: 70px; padding: 10px; margin: 0px; ">
                            <div class="flex flex-col">
                                <span class="uppercase font-medium text-sm mx-3">{{ Auth::user()->name }}</span>
                                <span class="font-normal text-xs mx-3">Admin</span>
                            </div>        
                         </li> 
                    </ul>
                </div>

            </div> 

        </section>
    
        {{-- nav --}}
        <section class="bg-Neutral/13 h-auto w-full flex flex-col lg:w-4/5">

            <div class="bg-Neutral/01 h-16 flex flex-row justify-between items-center lg:h-20">
                
                <div class="mx-5">
                    <a href="#" class="flex items-center">      
                        {{-- <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="40" height="40" rx="4" fill="#525252"/>
                            <path d="M24.9 25.8001L20.3 21.2001C20.2 21.1001 20.1294 20.9917 20.088 20.8751C20.046 20.7584 20.025 20.6334 20.025 20.5001C20.025 20.3667 20.046 20.2417 20.088 20.1251C20.1294 20.0084 20.2 19.9001 20.3 19.8001L24.9 15.2001C25.0834 15.0167 25.3124 14.9207 25.587 14.9121C25.8624 14.9041 26.1 15.0001 26.3 15.2001C26.4834 15.3834 26.575 15.6167 26.575 15.9001C26.575 16.1834 26.4834 16.4167 26.3 16.6001L22.425 20.5001L26.3 24.4001C26.4834 24.5834 26.579 24.8124 26.587 25.0871C26.5957 25.3624 26.5 25.6001 26.3 25.8001C26.1167 25.9834 25.8834 26.0751 25.6 26.0751C25.3167 26.0751 25.0834 25.9834 24.9 25.8001ZM18.3 25.8001L13.7 21.2001C13.6 21.1001 13.5294 20.9917 13.488 20.8751C13.446 20.7584 13.425 20.6334 13.425 20.5001C13.425 20.3667 13.446 20.2417 13.488 20.1251C13.5294 20.0084 13.6 19.9001 13.7 19.8001L18.3 15.2001C18.4834 15.0167 18.7127 14.9207 18.988 14.9121C19.2627 14.9041 19.5 15.0001 19.7 15.2001C19.8834 15.3834 19.975 15.6167 19.975 15.9001C19.975 16.1834 19.8834 16.4167 19.7 16.6001L15.825 20.5001L19.7 24.4001C19.8834 24.5834 19.9794 24.8124 19.988 25.0871C19.996 25.3624 19.9 25.6001 19.7 25.8001C19.5167 25.9834 19.2834 26.0751 19 26.0751C18.7167 26.0751 18.4834 25.9834 18.3 25.8001Z" fill="#BDBDBD"/>
                        </svg> --}}
                    </a>
                </div>

                <div class="mx-5">
                    <div class="flex flex-row">
                        <p class="font-normal text-base text-Neutral/08">Welcome </p>
                        <p class="font-medium text-base text-Neutral/14 ml-1">{{ Auth::user()->name }}</p>
                    </div>
                </div>

            </div>
    
            {{-- form ganti password Karyawan --}}
            <div class="mt-5 lg:mt-14 ">
                <h1 class="font-bold text-3xl text-center">Ganti Password Karyawan</h1>
            </div>
    
            <div class="my-10 lg:flex lg:flex-col lg:items-center">
                <div class=" p-10 mx-5 bg-white rounded-3xl drop-shadow-lg shadow-inner lg:w-1/2 ">

                    {{-- alert form-validation --}}
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-3 rounded-3xl relative " role="alert">
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                            <svg class="fill-current h-6 w-6 text-red-500"  role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" ><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" /></svg>
                        </span>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- form ganti password --}}
                    <form action="{{ route('karyawan.ganti.password.submit',$data->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="passwordbaru1" class="font-semibold text-sm text-Neutral/06">*Password Baru</label>
                            <input type="password" id="passwordbaru1" name="passwordbaru1" placeholder="" class="w-full font-normal text-sm text-Neutral/08 border border-black rounded-3xl outline-none leading-tight py-3 px-2" required>
                        </div>
                        <div class="mb-10">
                            <label for="passwordbaru2" class="font-semibold text-sm text-Neutral/06">*Password Baru</label>
                            <input type="password" id="passwordbaru2" name="passwordbaru2" placeholder="" class="w-full font-normal text-sm text-Neutral/08 border border-black rounded-3xl outline-none leading-tight py-3 px-2" required>
                        </div>
                        <div class="mb-4 flex items-center justify-center">
                            <button type="submit" class="w-auto px-10 font-medium text-sm text-Neutral/01 bg-Neutral/05 hover:bg-orange-300 rounded-3xl outline-none leading-tight py-3">Simpan</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            
        </section>
        
    </div>
</body>
</html>