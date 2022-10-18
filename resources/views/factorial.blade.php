<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('factorial') }}" method="post">
        @csrf
        <input 
            type="number" 
            value="{{ isset($n) ? $n : 1  }}" 
            min="1" 
            max="20"
            required
            name="n"
        >
        @error('n')    
        <div>
            {{ $message }}
        </div>
        @enderror    
        <button type="submit">
            Calcular
        </button>
    </form>
    @isset($prod)
        <section>
           La factorial {{ $n }} es: {{ $prod }}
        </section>
    @endisset
</body>
</html>