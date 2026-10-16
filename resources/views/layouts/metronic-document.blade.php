<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {!! trim($__env->yieldContent('head_assets')) !!}
</head>

<body {!! trim($__env->yieldContent('body_attributes')) !!}>
    {!! trim($__env->yieldContent('body_content')) !!}
</body>

</html>
