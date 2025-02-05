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

                    <li class="bg-Neutral/11 py-2 mb-2">
                        <a href="{{ Route("karyawan.presensi.show") }}" class="flex items-center mx-5">
                            <svg width="27" height="29" viewBox="0 0 37 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2105 1V6.28571M24.9474 1V6.28571M1.92105 13.4919H33.2368M23.7868 36.2381C25.0763 37.3481 26.7711 38 28.6316 38C31.3211 38 33.6605 36.6257 34.9316 34.5819C35.6132 33.5248 36 32.2738 36 30.9524C36 29.1729 35.3 27.5519 34.1579 26.3009M23.7868 36.2381C23.2158 35.78 22.7184 35.2162 22.3316 34.5819C21.65 33.5248 21.2632 32.2738 21.2632 30.9524C21.2632 27.0586 24.5605 23.9048 28.6316 23.9048C30.8421 23.9048 32.8132 24.8385 34.1579 26.3009M23.7868 36.2381H10.2105C3.76316 36.2381 1 32.7143 1 27.4286V12.4524C1 7.16667 3.76316 3.64286 10.2105 3.64286H24.9474C31.3947 3.64286 34.1579 7.16667 34.1579 12.4524V26.3009M25.7579 30.9524L27.5816 32.6966L31.5053 29.2257M17.5706 21.6143H17.5872M10.7527 21.6143H10.7692M10.7527 26.9H10.7692" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                           <span class="font-medium text-base ml-4">Presensi</span>
                        </a>
                    </li>
    
                    <li class="hover:bg-Neutral/11 py-2 mb-2">
                        <a href="{{ route("karyawan.karyawan.edit.show") }}" class="flex items-center mx-5">
                            <svg width="29" height="29" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.4908 25.221C22.5544 25.221 25.038 22.6596 25.038 19.5C25.038 16.3404 22.5544 13.779 19.4908 13.779C16.4271 13.779 13.9435 16.3404 13.9435 19.5C13.9435 22.6596 16.4271 25.221 19.4908 25.221Z" stroke="#BDBDBD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 21.1782V17.8218C1 15.8386 2.57171 14.1985 4.51324 14.1985C7.86007 14.1985 9.22839 11.7576 7.54573 8.76358C6.58421 7.04728 7.15742 4.81609 8.84008 3.82445L12.039 1.93652C13.4997 1.04022 15.3858 1.57419 16.2549 3.08072L16.4583 3.44305C18.1224 6.43704 20.8591 6.43704 22.5417 3.44305L22.7451 3.08072C23.6142 1.57419 25.5002 1.04022 26.961 1.93652L30.1599 3.82445C31.8426 4.81609 32.4158 7.04728 31.4543 8.76358C29.7716 11.7576 31.1399 14.1985 34.4868 14.1985C36.4098 14.1985 38 15.8195 38 17.8218V21.1782C38 23.1614 36.4283 24.8015 34.4868 24.8015C31.1399 24.8015 29.7716 27.2424 31.4543 30.2364C32.4158 31.9718 31.8426 34.1839 30.1599 35.1756L26.961 37.0635C25.5002 37.9598 23.6142 37.4258 22.7451 35.9193L22.5417 35.557C20.8776 32.563 18.1409 32.563 16.4583 35.557L16.2549 35.9193C15.3858 37.4258 13.4997 37.9598 12.039 37.0635L8.84008 35.1756C7.15742 34.1839 6.58421 31.9527 7.54573 30.2364C9.22839 27.2424 7.86007 24.8015 4.51324 24.8015C2.57171 24.8015 1 23.1614 1 21.1782Z" stroke="#BDBDBD" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                           <span class="font-medium text-base ml-4">Pengaturan</span>
                        </a>
                    </li>

                    <li class="hover:bg-Neutral/11 py-2 mb-2">
                        @if (Auth::guard('karyawan')->check())
                        <form action="{{ Route("logout.karyawan") }}" method="post"> 
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
                            <img class="rounded-full" src="{{asset('/storage/images/'.Auth::guard('karyawan')->user()->image)}}" alt="profile_image" style="width: 70px;height: 70px; padding: 10px; margin: 0px; ">
                            <div class="flex flex-col">
                                <span class="uppercase font-medium text-sm mx-3">{{ Auth::guard('karyawan')->user()->namaKaryawan }}</span>
                                <span class="font-normal text-xs mx-3">Karyawan</span>
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
                    <button id="buttonHide" class="flex items-center">      
                        {{-- <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="40" height="40" rx="4" fill="#525252"/>
                            <path d="M24.9 25.8001L20.3 21.2001C20.2 21.1001 20.1294 20.9917 20.088 20.8751C20.046 20.7584 20.025 20.6334 20.025 20.5001C20.025 20.3667 20.046 20.2417 20.088 20.1251C20.1294 20.0084 20.2 19.9001 20.3 19.8001L24.9 15.2001C25.0834 15.0167 25.3124 14.9207 25.587 14.9121C25.8624 14.9041 26.1 15.0001 26.3 15.2001C26.4834 15.3834 26.575 15.6167 26.575 15.9001C26.575 16.1834 26.4834 16.4167 26.3 16.6001L22.425 20.5001L26.3 24.4001C26.4834 24.5834 26.579 24.8124 26.587 25.0871C26.5957 25.3624 26.5 25.6001 26.3 25.8001C26.1167 25.9834 25.8834 26.0751 25.6 26.0751C25.3167 26.0751 25.0834 25.9834 24.9 25.8001ZM18.3 25.8001L13.7 21.2001C13.6 21.1001 13.5294 20.9917 13.488 20.8751C13.446 20.7584 13.425 20.6334 13.425 20.5001C13.425 20.3667 13.446 20.2417 13.488 20.1251C13.5294 20.0084 13.6 19.9001 13.7 19.8001L18.3 15.2001C18.4834 15.0167 18.7127 14.9207 18.988 14.9121C19.2627 14.9041 19.5 15.0001 19.7 15.2001C19.8834 15.3834 19.975 15.6167 19.975 15.9001C19.975 16.1834 19.8834 16.4167 19.7 16.6001L15.825 20.5001L19.7 24.4001C19.8834 24.5834 19.9794 24.8124 19.988 25.0871C19.996 25.3624 19.9 25.6001 19.7 25.8001C19.5167 25.9834 19.2834 26.0751 19 26.0751C18.7167 26.0751 18.4834 25.9834 18.3 25.8001Z" fill="#BDBDBD"/>
                        </svg> --}}
                    </button>
                </div>

                <div class="mx-5">
                    <div class="flex flex-row">
                        <p class="font-normal text-base text-Neutral/08">Welcome </p>
                        <p class="font-medium text-base text-Neutral/14 ml-1 uppercase">{{ Auth::guard('karyawan')->user()->namaKaryawan }}</p>
                    </div>
                </div>

            </div>
    
            {{-- content waktu presensi --}}
            <div class="mx-10 mt-5 lg:mx-20 lg:mt-14 ">
                <h1 class="font-bold text-3xl text-center lg:text-start ">Presensi</h1>
                
                <div class="bg-white items-center rounded-3xl drop-shadow-lg shadow-inner mt-10">

                    <h1 class="font-medium text-xl lg:text-2xl text-center pt-6">{{ $date }}</h1>
                    <hr class="border mt-3">
                    <div class="flex flex-col lg:flex-row items-center justify-center">
    
                        {{-- menampilakn jadwal jam kerja --}}
                        <div class="w-1/2 flex fl justify-center mb-5 mt-8 lg:m-10 lg:items-start lg:justify-start">
                            <div class="flex flex-col justify-center items-center lg:flex-row">

                                @if ($kerja == 'kerja')

                                <div>
                                    <p class=" border border-green-700 rounded-3xl bg-green-600 text-Neutral/01 font-medium text-xl py-2 px-5 mb-3 lg:mb-0">Kerja</p>
                                </div>
                                <div class="flex flex-col justify-center items-center lg:flex-row">
                                    <p class="font-medium text-xl mb-2 lg:text-xl ml-5 mr-2 lg:mb-0">Jam Kerja :</p>
                                    <p class="font-medium text-xl lg:text-xl">{{ $resultJamMasuk }} - {{ $resultJamKeluar }}</p>
                                </div>
                                
                                @else

                                <div>
                                    <p class=" border border-red-700 rounded-3xl bg-red-600 text-Neutral/01 font-medium text-xl py-2 px-5 mb-3 lg:mb-0">Libur</p>
                                </div>
                                <div class="flex flex-col justify-center items-center lg:flex-row">
                                    <p class="font-medium text-xl mb-2 lg:text-xl ml-5 mr-2 lg:mb-0">Jam Kerja :</p>
                                    <p class="font-medium text-xl lg:text-xl"> - </p>
                                </div>
                                @endif
                
                            </div>
                        </div>
                        
                        {{-- button masuk dan keluar presensi --}}
                        <div class="w-1/2 flex justify-center p-6">
                            <div class="flex flex-row">

                                @if ($kerja == 'kerja')

                                    @if($timerButton)
                                        @if ($count == 0)

                                            <div class="mx-5">
                                                <a href="{{ route('karyawan.presensi.masuk.show') }}" class="bg-Neutral/05 hover:bg-orange-300 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                    <span class="font-medium text-base text-white">Masuk</span>
                                                </a>
                                            </div>

                                            <div class="mx-5">
                                                <a href="#" class="bg-Neutral/15  rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                    <span class="font-medium text-base text-white">Keluar</span>
                                                </a>
                                            </div>

                                        @else

                                            @if ($selesai == "")

                                                <div class="mx-5">
                                                    <button type="button" class="bg-Neutral/15 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                        <span class="font-medium text-base text-white">Masuk</span>
                                                    </button>
                                                </div>

                                                <div class="mx-5">
                                                    
                                                    <form action="{{ route('karyawan.presensi.keluar.submit')}}" method="POST">
                                                        @csrf
                                                        <button type="submit"  class="bg-Neutral/05 hover:bg-orange-300 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                            <span class="font-medium text-base text-white">Keluar</span>
                                                        </button>
                                                    </form>
                                                </div>

                                            @else

                                                <div class="mx-5">
                                                    <button type="button" class="bg-Neutral/15 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                        <span class="font-medium text-base text-white">Masuk</span>
                                                    </button>
                                                </div>

                                                <div class="mx-5">
                                                    <button type="button" class="bg-Neutral/15  rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                        <span class="font-medium text-base text-white">Keluar</span>
                                                    <button>
                                                </div>

                                            @endif
                                            
                                        @endif

                                    @else
                                    
                                        @if ($count == 0)

                                            <div class="mx-5">
                                                <a href="#" class="bg-Neutral/15 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                    <span class="font-medium text-base text-white">Masuk</span>
                                                </a>
                                            </div>

                                            <div class="mx-5">
                                                <a href="#" class="bg-Neutral/15  rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                    <span class="font-medium text-base text-white">Keluar</span>
                                                </a>
                                            </div>

                                        @else

                                            @if ($selesai == "")

                                                <div class="mx-5">
                                                    <button type="button" class="bg-Neutral/15 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                        <span class="font-medium text-base text-white">Masuk</span>
                                                    </button>
                                                </div>

                                                <div class="mx-5">
                                                    
                                                    <form action="{{ route('karyawan.presensi.keluar.submit')}}" method="POST">
                                                        @csrf
                                                        <button type="submit"  class="bg-Neutral/05 hover:bg-orange-300 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                            <span class="font-medium text-base text-white">Keluar</span>
                                                        </button>
                                                    </form>
                                                </div>

                                            @else

                                                <div class="mx-5">
                                                    <button type="button" class="bg-Neutral/15 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                        <span class="font-medium text-base text-white">Masuk</span>
                                                    </button>
                                                </div>

                                                <div class="mx-5">
                                                    <button type="button" class="bg-Neutral/15  rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                                        <span class="font-medium text-base text-white">Keluar</span>
                                                    <button>
                                                </div>

                                            @endif
                                        
                                        @endif

                                    @endif

                                @else

                                    <div class="mx-5">
                                        <button type="button" class="bg-Neutral/15 rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                            <span class="font-medium text-base text-white">Masuk</span>
                                        </button>
                                    </div>
                                    
                                    <div class="mx-5">
                                        <button type="button" class="bg-Neutral/15  rounded-3xl drop-shadow-lg shadow-inner px-12 py-3">
                                            <span class="font-medium text-base text-white">Keluar</span>
                                        </button>
                                    </div>
                                
                                @endif

                            </div>
                        </div>

                    </div>

                </div>
            </div>
    
            {{-- content list presensi --}}
            <div class="bg-white mx-10 mt-5 rounded-3xl drop-shadow-lg shadow-inner lg:mx-20 lg:mt-10">
                <div class="p-5 flex flex-col justify-between text-center ">

                    <h1 class="font-medium text-2xl text-center mb-10">Catatan</h1>

                    {{-- menampilkan data --}}
                    @if($count2 != 0)

                    <table>
                        <tr class="bg-Neutral/05">
                            <th class="font-medium text-base py-3 px-3">No</th>
                            <th class="font-medium text-base py-3 px-3">Tanggal</th>
                            <th class="font-medium text-base py-3 px-3">Profil</th>
                            <th class="font-medium text-base py-3 px-3">Nama Karyawan</th>
                            <th class="font-medium text-base py-3 px-3">Jam Masuk</th>
                            <th class="font-medium text-base py-3 px-3">Jam Keluar</th>
                            <th class="font-medium text-base py-3 px-3">Foto</th>
                        </tr>

                        @php $no = 1; @endphp
                        @foreach ($dataId as $item)

                        <tr class="border-2">
                            <td class="font-normal text-sm py-3 ">{{ $no++ }}</td>
                            <td class="font-normal text-sm py-3 ">{{ $item->tanggal }}</td>
                            <td class="font-normal text-sm py-3 flex justify-center"><img class="rounded-full" src="{{asset('/storage/images/'.Auth::guard('karyawan')->user()->image)}}" alt="profile_image" style="width: 70px;height: 70px; padding: 10px; margin: 0px; "></td>
                            <td class="font-normal text-sm py-3 ">{{ Auth::guard('karyawan')->user()->namaKaryawan }}</td>
                            <td class="font-normal text-sm py-3 ">{{ $item->waktuMasuk }}</td>
                            <td class="font-normal text-sm py-3 ">{{ $item->waktuKeluar }}</td>
                            <td class="font-normal text-sm py-3 ">-</td>
                        </tr>

                        @endforeach

                    </table>

                    @else
                    
                    <div class="flex flex-col w-full items-center justify-center my-20">
                        <img src="{{asset('/storage/images/profile_unikom.png')}}" alt="empty_image" style="width: 180px;height: 180px; padding: 10px; margin: 0px; ">
                        <p class="font-normal text-base text-Neutral/08 mt-3 ">Tidak ada data ! </p>
                    </div>

                    @endif

                </div>
            </div>
            
        </section>

    </div>
</body>
</html>