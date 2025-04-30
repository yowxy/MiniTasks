<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Vite assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind CSS (Via CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    @include('components.sidebar')

    <!-- Main Content -->
    <div class="ml-[260px] p-6">


        <h1 class="text-3xl font-bold mb-6">Welcome  to Your Dashboard</h1>

        @auth
            <h2 class="text-2xl font-semibold mb-4">Hello, {{ Auth::user()->name }}!</h2>
        @endauth

        <!-- Card Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md">
                <h5 class="text-lg font-semibold">Total Users</h5>
                <p class="text-2xl">{{ $usersCount }}</p>
            </div>
            <div class="bg-green-500 text-white p-6 rounded-lg shadow-md">
                <h5 class="text-lg font-semibold">Active Users</h5>
                <p class="text-2xl">400</p>
            </div>
            <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md">
                <h5 class="text-lg font-semibold">Pending Requests</h5>
                <p class="text-2xl">12</p>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="my-8">
            <h3 class="text-2xl font-semibold">Recent Activity</h3>
            <ul class="space-y-4">
                <li class="bg-white p-4 shadow-md rounded-lg">
                    <strong>User John</strong> added a new task.
                </li>
                <li class="bg-white p-4 shadow-md rounded-lg">
                    <strong>User Jane</strong> updated their profile.
                </li>
                <li class="bg-white p-4 shadow-md rounded-lg">
                    <strong>User Bob</strong> completed a task.
                </li>
            </ul>
        </div>
    </div>

</body>
</html>
