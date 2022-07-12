@extends('master')

@section('content')

    <div class="container-image">
        <img class="home-landscape" src="{{ asset('images/arnhem.jpg') }}"/>
        <div class="text-block">
            <h4 class="page-content">Welkom examen-kandidaat.</h4>
            <a href="{{ url('/eanse-login') }}" class="remove-td">
                <h6 class="image-elements">
                    <img class="arrow-image"
                         src="{{ asset('images/greater-than-symbol.png') }}"
                         alt=""> eANSE login</h6>
            </a>

            <a href="{{ url('/over-mij') }}" class="remove-td">
                <h6 class="image-elements">
                    <img class="arrow-image"
                         src="{{ asset('images/greater-than-symbol.png') }}"
                         alt=""> Algemene regels examens</h6>
            </a>

            <a href="{{ url('/copyright') }}" class="remove-td">
                <h6 class="image-elements">
                    <img class="arrow-image"
                         src="{{ asset('images/greater-than-symbol.png') }}"
                         alt=""> Aanmelden eANSE examencommissie</h6>
            </a>
        </div>
    </div>

    <div class="fs-s"></div>

    <div class="container-content">
        <h3 class="page-header">Welkom bij eANSE</h3>
            <br>
            <h5 class="page-content">
                Op dit website gaat u uw schoolexamen maken. Hiervoor moet u
                inloggen met de volgende kredieten: <div class="fs-xs"></div>
                ➜ BSN nummer of DigiD<br>
                ➜ Uw naam en achternaam <br>
                ➜ Unieke 'e-code'
                <div class="fs-xs"></div>
                U kunt dan verder naar het <a href="{{ url('/eanse-login') }}">
                    login pagina van eANSE</a>, veel success met uw examen.
                <div class="fs-xs"></div>
                (?) Mocht u toch een paar dingen missen die nodig zijn voor uw verificatie, roep
                dan de huidige examinator voor hulp.
            </h5>

        <div class="fs-s"></div>
        <h3 class="page-header">Wat is een eANSE e-code?</h3>
        <br>
        <h5 class="page-content">
            Om een opengestelde examen te maken is het belangrijk dat het examencommissie
            weet of u het echt bent / het gemaakt heeft.
            <br><div class="fs-xs"></div>
            Hierbij komt het 'e-code' zeer goed van pas, wanneer u tijdens het examen
            een unieke code krijgt van het examinator en dat vervolgens invult. Dan weet
            het examencomissie gelijk dat u bent begonnen met een examen. Hiervoor is
            er een 'dashboard' gemaakt voor alle officiële leden van het examencommissie.
        </h5>
        <div class="fs-l"></div>
    </div>

@endsection

