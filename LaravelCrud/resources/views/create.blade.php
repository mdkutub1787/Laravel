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
    <div class="container">
        <div class="flex justify-between items-center py-4">
            <h1 class="text-red-500 text-xl font-bold">Create Laravel</h1>
            <a href="/" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:ring focus:ring-green-300">
                Back To Home
            </a>
        </div>

        
    </div>
    
    <div class="p-6 bg-white shadow rounded-lg max-w-md mx-auto">
    <form action="store" method="POST" class="space-y-4">
        @csrf
        <!-- Name Input -->
        <div>
            <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300" 
                placeholder="Enter name" 
                required>
        </div>

        <!-- Description Input -->
        <div>
            <label for="description" class="block text-gray-700 font-medium mb-1">Description</label>
             <input 
                type="text" 
                id="description" 
                name="description" 
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300" 
                placeholder="Enter description" 
                required>
        </div>

        <!-- Image Input -->
        <div>
            <label for="image" class="block text-gray-700 font-medium mb-1">Image</label>
            <input 
                type="file" 
                id="image" 
                name="image" 
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300" 
                accept="image/*" 
                required>
        </div>

        <!-- Submit Button -->
        <div>
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:ring focus:ring-blue-300">
                Submit
            </button>
        </div>
    </form>
</div>

</body>

</html>
