<x-layouts.app>
    <form action="{{ route('palindromo') }}" method="post">
        @csrf
        <input type="text" name="cadena">
        @error('cadena')
            <div>
                {{ $message }}
            </div>
        @enderror
        <button type="submit">
            Verificar
        </button>
    </form>
    @isset($result)
        La cadena: {{ $cadena }} {{$result}} Palindromo
    @endisset
</x-layouts.app>