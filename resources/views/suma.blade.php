<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('suma') }}" method="post">
        @csrf
        <input 
            type="number"
            required 
            name="n1"
            value="{{ isset($n1) ? $n1 : 0  }}" 
        >
        @error('n1')
            <div>
                {{ $message }}
            </div>
        @enderror
        <input 
            type="number" 
            required
            name="n2"
            value="{{ isset($n2) ? $n2 : 0  }}" 
        >
        @error('n2')
            <div>
                {{ $message }}
            </div>
        @enderror
        <button type="submit">
            Sumar
        </button>
    </form>
    @isset($suma)
        <section>
            La suma de {{ $n1 }} con {{ $n2 }} es: {{ $suma }}
        </section>
    @endisset
</body>
</html>