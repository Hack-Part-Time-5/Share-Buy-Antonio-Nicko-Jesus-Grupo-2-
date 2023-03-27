<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Share&Buy'}}</title>
    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="\img\icons\carrito_logo.svg">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- owlcarousel --}}
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.css">
    
    
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">    
    {{$style ?? ''}}
    
    
</head>
<body>
        
        <x-navbar/>   
        
        
        @if (session()->has('message'))
            <x-alert :type="session('message')['type']" :message="session('message')['text']"/>
        @endif
        {{$slot}}
        <x-footer/>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        @livewireScripts
        {{$script ?? ''}}
      
</body>
</html>