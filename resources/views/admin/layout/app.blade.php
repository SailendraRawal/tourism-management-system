<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- Sidebar -->
    <div class="flex h-screen">
        @if(auth()->user()->role === 'admin')
        @include('admin.sidebar.admin')  <!-- Admin Sidebar -->
        @elseif(auth()->user()->role === 'user')
            @include('admin.sidebar.user')    <!-- User Sidebar -->
        @else
            <p>You don't have permission to access this page.</p>
        @endif


        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 p-6 ml-64">
            <!-- Header -->
            @include('admin.layout.header')

           @yield('content')


        </div>
    </div>




    <script>
        const profileButton = document.querySelector('button.flex.items-center');
        const dropdownMenu = document.querySelector('.absolute.right-0.mt-2.w-48');

        profileButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
