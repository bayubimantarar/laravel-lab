<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link 
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito:200,600" 
  />
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>
<body>
  <ol>
    @foreach($profile as $item)
      <li>
        {{ $item->name }}
      </li>
    @endforeach
  </ol>
</body>
</html>
