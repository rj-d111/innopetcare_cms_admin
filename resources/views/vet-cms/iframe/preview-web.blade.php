<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Other head elements -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <title>{{ $name ?? 'Vet Management System' }}</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('vet-cms.iframe.navbar-cms')
</body>

</html>
