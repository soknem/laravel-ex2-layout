<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-gray-800">   <!-- only this line changed -->
    @include('template.header')
    @yield('content')
    @include('template.footer')

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>