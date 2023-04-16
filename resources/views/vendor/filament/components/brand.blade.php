{{-- @if (filled($brand = config('filament.brand')))
    <div @class([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        {{ $brand }}
    </div>
@endif --}}

<img src="{{ asset('/assets/img/dole.png') }}" alt="Logo" class="h-10" style="height: 45px">
