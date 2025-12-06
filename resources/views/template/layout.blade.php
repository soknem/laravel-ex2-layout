<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-indigo-50 via-white to-indigo-50 text-gray-800">
    @include('template.header')
    @yield('content')
    @include('template.footer')

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>