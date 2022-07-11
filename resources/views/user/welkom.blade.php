@extends('master')

@section('content')
    <img class="home-landscape" src="{{ asset('images/arnhem.jpg') }}"/>
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
                U kunt nu verder naar het <a href="{{ url('/eanse-login') }}">login pagina van eANSE</a>, veel success.
                <div class="fs-xs"></div>
                (?) Mocht u een paar dingen missen die nodig zijn voor verificatie, roep
                dan uw huidige examinator voor hulp.
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

