<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoShow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
    
</head>
<body>
    @include('inc.topbar')
    <div class="row">
        @include('inc.messages')
        @yield('content')
    </div>
</body>
</html>