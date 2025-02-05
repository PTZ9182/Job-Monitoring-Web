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
    
            {{-- content jumlah Karyawan & search --}}
            <div class="mx-10 mt-5 lg:mx-20 lg:mt-14 ">
                <h1 class="font-bold text-3xl text-center lg:text-start ">Karyawan</h1>

                <div class="flex flex-col items-center mt-6 lg:flex-row lg:justify-between">
                    
                    {{-- jumlah karyawan --}}
                    <div class="bg-Neutral/01 flex flex-row w-full justify-between px-5 py-5 rounded-3xl drop-shadow-lg shadow-inner lg:w-1/2 lg:mr-10">
                        
                        <div class="flex flex-row items-center">
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.239 22.7673C29.6407 23.1697 32.2879 22.7498 34.1461 21.5075C36.618 19.8627 36.618 17.168 34.1461 15.5232C32.2703 14.2809 29.5881 13.8609 27.1864 14.2808M9.76095 22.7673C7.35925 23.1697 4.71212 22.7498 2.85387 21.5075C0.382044 19.8627 0.382044 17.168 2.85387 15.5232C4.72965 14.2809 7.41184 13.8609 9.81354 14.2808M29.0447 10.0289C28.9395 10.0114 28.8168 10.0114 28.7116 10.0289C26.2924 9.94139 24.364 7.96413 24.364 5.51444C24.364 3.01225 26.38 1 28.8869 1C31.3938 1 33.4098 3.02975 33.4098 5.51444C33.3923 7.96413 31.4639 9.94139 29.0447 10.0289ZM7.95529 10.0289C8.06048 10.0114 8.18319 10.0114 8.28837 10.0289C10.7076 9.94139 12.636 7.96413 12.636 5.51444C12.636 3.01225 10.62 1 8.11307 1C5.60618 1 3.59015 3.02975 3.59015 5.51444C3.60768 7.96413 5.53606 9.94139 7.95529 10.0289ZM18.5263 23.0997C18.4211 23.0822 18.2984 23.0822 18.1932 23.0997C15.774 23.0123 13.8456 21.035 13.8456 18.5853C13.8456 16.0831 15.8616 14.0709 18.3685 14.0709C20.8754 14.0709 22.8914 16.1006 22.8914 18.5853C22.8739 21.035 20.9455 23.0298 18.5263 23.0997ZM13.4249 28.6116C10.953 30.2563 10.953 32.951 13.4249 34.5958C16.2298 36.4681 20.8228 36.4681 23.6277 34.5958C26.0995 32.951 26.0995 30.2563 23.6277 28.6116C20.8403 26.7568 16.2298 26.7568 13.4249 28.6116Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="flex flex-col items-center">
                                <p class="font-medium text-lg mx-5 lg:font-medium lg:text-base">Jumlah Karyawan</p>
                                <p class="font-medium text-lg lg:font-medium lg:text-base">{{ $count }}</p>
                            </div>
                        </div>

                        <div>
                            <a href="{{ Route("karyawan.tambah.show") }}" class="flex items-center"> 
                                <button class="font-medium text-sm text-black-500 bg-Neutral/05 hover:bg-stone-300 rounded-3xl outline-none leading-tight py-3 px-5 lg:px-12" type="button">Tambah Karyawan</button>
                            </a>
                        </div>

                    </div>
                    
                    {{-- search --}}
                    <div class="w-full mt-5 lg:items-center lg:justify-end lg:w-1/2 lg:mt-0">
                        <form>
                            <div class="rounded-3xl drop-shadow-lg shadow-inner flex justify-between">
                              <input class="w-full rounded-l-3xl text-ms px-1 py-2 lg:px-2 lg:py-3 " type="search" id="mySearch" name="mySearch" placeholder="Cari Nama Karyawan" value="{{ $filterName }}" />
                              <button class="text-ms hover:bg-stone-300 bg-Neutral/05 rounded-r-3xl py-2 px-2 lg:px-4 lg:py-3">Cari</button>
                            </div>
                          </form>
                    </div>

                </div>
            </div>
    
            {{-- content list Karyawan --}}
            <div class="bg-white mx-10 mt-5 rounded-3xl drop-shadow-lg shadow-inner lg:mx-20 lg:mt-10">
                <div class="p-5 flex flex-col justify-between text-center ">
                    
                    {{-- menampilkan data --}}
                    @if($count != 0)

                    <table>
                        <tr class="bg-Neutral/05">
                            <th class="font-medium text-base py-3 px-3">No</th>
                            <th class="font-medium text-base py-3 px-3">Divisi</th>
                            <th class="font-medium text-base py-3 px-3">Nama Karyawan</th>
                            <th class="font-medium text-base py-3 px-3">No Hp</th>
                            <th class="font-medium text-base py-3 px-3">Jenis Kelamin</th>
                            <th class="font-medium text-base py-3 px-3">Tanggal Lahir</th>
                            <th class="font-medium text-base py-3 px-3">Alamat</th>
                            <th class="font-medium text-base py-3 px-3">Email</th>
                            <th class="font-medium text-base py-3 ">Aksi</th>
                        </tr>

                        @php $no = 1; $index = 0; @endphp
                        @foreach ($dataId as $dataId)

                            <tr class="border-2">
                                <td class="font-normal text-sm py-3 ">{{ $no++ }}</td>
                                <td class="font-normal text-sm py-3 ">{{ $dataDivisi[$index++]->divisi}}</td>
                                <td class="font-normal text-sm py-3 ">{{ $dataId->namaKaryawan }}</td>
                                <td class="font-normal text-sm py-3 ">{{ $dataId->noHp }}</td>
                                <td class="font-normal text-sm py-3 ">{{ $dataId->jenisKelamin }}</td>
                                <td class="font-normal text-sm py-3 ">{{ $dataId->tanggalLahir }}</td>
                                <td class="font-normal text-sm py-3 ">{{ $dataId->alamat }}</td>
                                <td class="font-normal text-sm py-3 ">{{ $dataId->email }}</td>
                                <td class="font-normal text-sm py-3 flex flex-row items-center justify-center"> 
                                    <a href="{{ Route("karyawan.edit.show",$dataId->id) }}">
                                        <button type="button" class="items-center mx-2 border px-4 py-1 rounded hover:bg-Neutral/11 lg:mx-5" >      
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 2.00001H9C4 2.00001 2 4.00001 2 9.00001V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13M14.91 4.15001C15.58 6.54001 17.45 8.41001 19.85 9.09001M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z" stroke="#1434A4" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </a>
                                    <button type="button" onclick="passDataDelete({{ $dataId->id }})" class="items-center mx-2 border px-4 py-1 rounded hover:bg-Neutral/11 lg:mx-5">      
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 5.98C17.67 5.65 14.32 5.48 10.98 5.48C9 5.48 7.02 5.58 5.04 5.78L3 5.98M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97M18.85 9.14L18.2 19.21C18.09 20.78 18 22 15.21 22H8.79C6 22 5.91 20.78 5.8 19.21L5.15 9.14M10.33 16.5H13.66M9.5 12.5H14.5" stroke="#C70039" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </td>
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

            {{-- modal hapus Karyawan --}}
            <div id="hapusKaryawanModal"  class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-center justify-center min-h-screen bg-gray-500 bg-opacity-50">
                    <div class="bg-white w-auto p-10 rounded-3xl shadow-md">
                        <div class="flex flex-col p-4 md:p-5 text-center items-center">

                            <svg class="mx-auto mb-4 text-red-600 w-12 h-12 dark:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>

                            <h3 class="mb-5 text-lg font-normal text-neutral-800">Hapus Karyawan ?</h3>
                            
                            <form id="form-hapus-karyawan" method="post">
                                @csrf
                                <button id="hapusKaryawanButton" data-modal-hide="popup-modal" type="submit" class="text-white mr-2 bg-Neutral/05 hover:bg-orange-300  font-medium rounded-3xl text-sm inline-flex items-center px-5 py-2.5 text-center">Hapus</button>
                                <button id="tidakHapusKaryawanButton" data-modal-hide="popup-modal" type="button" class="text-white mr-2 bg-Neutral/05 hover:bg-orange-300  font-medium rounded-3xl text-sm inline-flex items-center px-5 py-2.5 text-center">Tidak</button>
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    </div>

    <script>
        // Modal Hapus Karyawan
        const tidakHapusKaryawanButton = document.getElementById('tidakHapusKaryawanButton')
        const hapusKaryawanButton = document.getElementById('hapusKaryawanButton')
        const hapusKaryawanModal = document.getElementById('hapusKaryawanModal')

        function passDataDelete($id){
            hapusKaryawanModal.classList.remove('hidden');
            
            tidakHapusKaryawanButton.addEventListener('click', () => {
                hapusKaryawanModal.classList.add('hidden');
            });

            hapusKaryawanButton.addEventListener('click', () => {
                var url = '{{ route("karyawan.delete", ":id") }}';
                url = url.replace(':id', $id);
                document.getElementById("form-hapus-karyawan").action=url;
            });
        }
    </script>

</body>
</html>