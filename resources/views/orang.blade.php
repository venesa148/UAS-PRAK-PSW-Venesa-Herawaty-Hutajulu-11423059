

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pilih Role</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
</head>
 
<body>
    <section class="bg-blue-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                Pilih Role
            </div>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Pilih Role
                    </h1>
                    <form action="{{ route('register.save') }}" method="POST" class="space-y-4 md:space-y-6">
                        @csrf
                        <div>
                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                            <select class="form-select" 
                            name="type"
                            aria-label="Default select example">
                              <option selected>Pilih Tipe</option>
                                <option value="1">Login Admin</option>
                                <option value="1">Login Pengelola Lapangan</option>
                                {{-- <option value="1">Login Player</option> --}}
                                
                            </select>
                        
                        </div>

                        {{-- <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk Ke Login Pilihan </button> --}}
                        <center>

                            <a href="{{ route('loginbanget') }}" 
                            style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background: rgb(52, 127, 224); text-align: center; text-decoration: none; border: 2px solid rgb(52, 127, 224); border-radius: 5px; cursor: pointer;">
                             Masuk Ke Login Pilihan
                         </a>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>