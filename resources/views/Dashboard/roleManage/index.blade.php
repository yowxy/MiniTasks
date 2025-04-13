<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <!-- Optional: Add custom CSS -->
    <style>
        /* Custom styles for sidebar and content */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
        }
    </style>

        <div class="sidebar bg-gray-800 text-white p-5">
        <h3 class="text-xl font-semibold text-center mb-8">Dashboard</h3>
        <ul>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Dashboard</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">User Account</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Role Managements</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Reports</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="block py-2 px-4 hover:bg-gray-700 rounded text-left">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</body>
</html>
