<x-layouts.app title="Factorial">
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
</x-layouts.app>