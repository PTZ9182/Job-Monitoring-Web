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

        {{-- form register --}}
        <div class="flex flex-col justify-center mt-20 mx-10 lg:basis-1/2 lg:mt-0 lg:mx-0 lg:px-20">
            <div class="text-center lg:text-start">
                <h1 class="font-bold text-4xl text-Neutral/08">Register Perusahaan</h1>
            </div>
            <div class="mt-5 lg:mt-2">
                <p class="font-normal text-xs text-Neutral/07"> <b class="text-Neutral/05 text-lg">*</b>Buat akun perusahaan baru</p>
            </div>
            <div class="mt-5 lg:px-20">
                <form action="{{ route("register.submit") }}" method="post">
                    @csrf
                    <div>
                        <label for="name" class="font-semibold text-sm text-Neutral/06">Nama Perusahaan</label>
                        <input type="text" id="name" name="name" placeholder="" required class="w-full font-normal text-sm text-Neutral/08 border border-black rounded-md outline-none leading-tight py-3 px-2">
                    </div>   
                    <div class="mt-3">
                        <label for="email" class="font-semibold text-sm text-Neutral/06">Email</label>
                            <input type="email" id="email" name="email" placeholder="" required class="w-full font-normal text-sm text-Neutral/08 border border-black rounded-md outline-none leading-tight py-3 px-2">
                    </div>
                    <div class="mt-3">
                        <label for="password" class="font-semibold text-sm text-Neutral/06">Password</label>
                        <input type="password" id="password" name="password" placeholder="" required class="w-full font-normal text-sm text-Neutral/08 border border-black rounded-md outline-none leading-tight py-3 px-2">
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="w-full px-10 font-medium text-sm text-Neutral/01 bg-Neutral/05 hover:bg-orange-300 rounded-md outline-none leading-tight py-3">Register</button>
                    </div>
                    <div class="mt-8 text-center">
                        <p class="font-normal text-sm">Sudah punya akun perusahaan? <a href="{{ route("login") }}"><b class="text-Neutral/05">Login</b></a></p>
                    </div>
                </form> 
            </div> 
        </div>
        
    </section>
</body>
</html>