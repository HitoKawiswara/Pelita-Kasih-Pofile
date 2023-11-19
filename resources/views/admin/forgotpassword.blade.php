<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex item-center justify-center">
        <div class="flex item-center justify-center mt-10 ">
            <img src="{{ URL('images/admin/logo.png') }}" class="w-32 md:w-64 lg:w-48">
        </div>
    </div>

    <form action="{{ route('login.index') }}" class="flex flex-col items-center justify-center">
        <div class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 shadow-md border border-gray-800 mt-2">
        <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm">FORGOT PASSWORD</h1>
            <input type="text" class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base" placeholder="Enter your email" id="email" name="email" autocomplete="off" required>
            <input type="text" class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base" placeholder="Enter your new password" id="newpassword" name="newpassword" autocomplete="off" required>
            <input type="text" class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base" placeholder="Re-enter your new password" id="newpassword" name="newpassword" autocomplete="off" required>
            <button type="submit" class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 bg-indigo-700 text-white text-sm sm:text-base" value="submit">Submit</button>
        </div>
    </form>
    </div>
</body>
</html>