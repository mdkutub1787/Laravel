<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
        .container {
          @apply px-10 mx-auto;
        }
      }
    </style>
    <title>Laravel Greeting</title>
</head>

<body class="bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="flex justify-between items-center py-4">
            <h1 class="text-red-500 text-xl font-bold">Hello Laravel</h1>
            <a href="/create"
                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:ring focus:ring-green-300">
                Add New Post
            </a>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 max-w-md mx-auto">
                <span>{{ session('success') }}</span>
            </div>
        @endif

    </div>
</body>


</html>