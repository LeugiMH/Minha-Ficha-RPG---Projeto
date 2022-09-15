<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    {{ $teste  }}
    
        @for ($a = 1; $a <= 100; $a++)
           <br> 'A' é igual a {{$a}}
        @endfor

        @include('welcome')

        {{-- para acessar a pasta 'public' usar asset('') que será retornado a url do diretório ou arquivo --}}
    <script>
        
    </script>
</body>
</html>