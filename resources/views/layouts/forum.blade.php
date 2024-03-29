<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

{{--    <!-- Font -->--}}
{{--    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"--}}
{{--          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOa93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"--}}
{{--          crossorigin="anonymous"/>--}}

    @yield('inside_head_tag')

    <title>Forum!</title>
</head>
<body>

@include('inc.nav')

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

@yield('before_body_end_tag')
</body>
</html>
