<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Monitoring</title>
    @vite('resources/css/app.css')
</head>
<body>

    <section class="h-screen flex flex-col justify-center lg:flex-row">

        <div class="text-center lg:basis-1/2 lg:bg-auto" style="background-image: url(./img/background.png)">
            <h1 class="font-medium text-5xl text-Neutral/09 lg:text-start lg:mt-5 lg:ml-10">Job-Monitoring</h1>
        </div>
    
        {{-- form login --}}
        <div class="flex flex-col justify-center mt-20 mx-10 lg:basis-1/2 lg:mt-0 lg:mx-0 lg:px-20">
            <div class="text-center lg:text-start">
                <h1 class="font-bold text-4xl text-Neutral/08">Login Perusahaan</h1>
            </div>

            <div class="mt-5 lg:px-20" >

                @if (session('gagal'))
                <div class="bg-Neutral/04 rounded">
                    <p class="font-medium text-sm text-Neutral/08 py-2 mx-3 mb-1">{{ session('gagal') }}</p>
                </div>
                @endif

                <form action="{{ route("login.submit") }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="font-semibold text-sm text-Neutral/06">Email</label>
                        <input type="email" id="email" name="email" placeholder="" required class="w-full font-normal text-sm text-Neutral/08 border border-black rounded-md outline-none leading-tight py-3 px-2">
                    </div>
                    <div class="mt-3">
                        <label class="font-semibold text-sm text-Neutral/06" for="password" >Password</label>
                        <input type="password" id="password" name="password" placeholder="" required class="w-full font-normal text-sm text-Neutral/08 border border-black rounded-md outline-none leading-tight py-3 px-2">
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="w-full px-10 font-medium text-sm text-Neutral/01 bg-Neutral/05 hover:bg-orange-300 rounded-md outline-none leading-tight py-3">Login</button>
                    </div>
                    <div class="mt-8 text-center">
                        <p class="font-normal text-sm">Belum punya akun Perusahaan? <a href="{{ route('register.show') }}"><b class="text-Neutral/05">Register</b></a></p>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route("karyawan.login") }}">
                            <button type="button" class="w-full px-10 font-medium text-sm text-Neutral/08 bg-Neutral/01 hover:bg-Neutral/04 rounded-md outline-none leading-tight py-3 shadow-inner drop-shadow-xl">Login Karyawan</button>
                        </a>
                    </div>
                </form> 

            </div> 
            
        </div>

    </section>

</body>
</html>