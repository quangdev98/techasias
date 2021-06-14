<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>クアン・メルセデス - @yield('title')</title>
    <base href="{{ asset('') }}">
    <link href="images/q_favicon.png" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="css/bootstrap4_3_1.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    @yield('style-libraries')
</head>
<body>
    @include('AdminStore.partial.header')
    @include('AdminStore.partial.tabControl')
    <main id="wrap-main">
        <div class="wrapper">
            <div class="wrap-form">
                @yield('content')
            </div>
        </div>
    </main>
    @include('AdminStore.partial.footer')
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/tyniMCE.min.js" referrerpolicy="origin"></script>
<script type="text/javascript" type="text/javascript" src="js/main.js"></script>
<script>
    tinymce.init({
      selector: 'textarea#content',
          // selector: ,
          height: 400,
          plugins: [
          'advlist autolink link image lists charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
          'table emoticons template paste help'
          ],
          toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
          menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css',

    });
</script>
@yield('scripts')
</html>
