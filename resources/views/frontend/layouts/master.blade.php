<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @include('frontend.partials.styles')
 
</head>

<body>
    <div class="wrapper">

        @include('frontent.partials.nav')
        @yield('frontend.content')
        @include('frontend.partials.footer')


    </div> 

    {{--Start Scripts--}}

        @include('frontend.partials.scripts')

    {{--End Scripts--}}

</body>
</html>
