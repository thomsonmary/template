  @foreach ($template as $t)
    @if ($t->template==='Pertama')
            @yield('templatePertama')
    @elseif ($t->template==='Kedua')
            @yield('templateKedua')
    @elseif ($t->template==='Ketiga')
            @yield('templateKetiga')    
    @elseif ($t->template==='Keempat')
            @yield('templateKeempat')
    @elseif ($t->template==='Kelima')
            @yield('templateKelima')
    @endif
  @endforeach
