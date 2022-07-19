@extends('master')

@section('content')
    <div class="fs-s"></div>

    <div class="container-footer">
        <h3 class="page-header">Login</h3>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="login_text-block">
                    <div class="margin-right">
                        <h4 class="page-content">Inloggen met DigiD</h4>
                        <h6 class="page-content">
                            Met DigiD bent u binnen enkele seconden ingelogd. Hiervoor moet
                            u wel het DigiD app geïnstalleerd hebben op uw mobiele telefoon.
                            <div class="fs-xs"></div>
                            Voor meer informatie, bezoek
                            <a href="https://www.digid.nl/">DigiD.nl</a>.
                        </h6>
                        <div class="fs-xs"></div>
                        <div class="footer-header">
                            <button type="button" class="btn btn-primary">
                                <span class="page-header">Inloggen met DigiD</span>
                                <img class="arrow-login"
                                     src="{{ asset('images/greater-than-symbol.png') }}"
                                     alt="">
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="login_text-block">
                    <div class="margin-right">
                        <h4 class="page-content">BSN verificatie</h4>
                        <h6 class="page-content">
                            Geen DigiD? Geen probleem. Met uw paspoort kunt u ook toegang
                            krijgen tot het eANSE service. <div class="fs-xs"></div> Hierbij moet u wel meer informatie
                            erbij invullen, zoals uw volledige naam en telefoon nummer.
                            <div class="fs-xs"></div>
                            Voor meer informatie, bezoek
                            <a href="https://www.rijksoverheid.nl/onderwerpen/privacy-en-persoonsgegevens/vraag-en-antwoord/wat-is-het-burgerservicenummer-bsn">
                                Wat is het BSN?</a>.
                        </h6>
                        <br>
                        <div class="alert alert-secondary" role="alert">
                            <div class="row">
                                <div class="col-1">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                         aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                                </div>
                                <div class="col-11">
                                <span class="page-content">Het is hierbij extra belangrijk om
                                geen valse informatie in te vullen,
                                dit heeft namelijk gevolgen in uw studie en zal strafrechtelijk
                                gevolgen bij zich dragen.
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="fs-xs"></div>
                        <div class="footer-header">
                            <button type="button" class="btn btn-primary">
                                <span class="page-header">Inloggen met BSN-id</span>
                                <img class="arrow-login"
                                     src="{{ asset('images/greater-than-symbol.png') }}"
                                     alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fs-l"></div>
    </div>

@endsection

