<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<style>
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url({{ storage_path('fonts/custom/Montserrat-Regular.ttf') }}) format('truetype');
}

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: url({{ storage_path('fonts/custom/Montserrat-Bold.ttf') }}) format('truetype');
}

* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.page {
    width: 21cm;
    max-width: 21cm;
    font-family: "Montserrat", Sans-serif;
}

.intro-line {
    width: 2cm;
    color: #FFDE58;
    border-width: 5px;
    border-style: solid;
}

.header {
    background-color: #19708B;
    color: white;
    padding: 2cm 1cm 0.5cm 1cm;
    padding-top: 2cm;
}

.header .title {
    margin-top: 0.5cm;
    font-size: 24px;
}

.header #name {
    font-size: 48px;
}

.result {
    padding: 2cm 0cm 0.5cm 1cm;
}

.result.strong {
    page-break-after: always;
}

.result .title {
    font-size: 36px;
    /*font-weight: 700;*/
    color: #364D61;
    margin-bottom: 0.5cm;
}

.items tr, .items td {
    padding-top: 1.5cm;
}

.items td {
    min-height: 100%;
    width: 50%;
    max-width: 50%;
}

.item {
    padding-right: 1cm;
    vertical-align: top;
}

.item .label {
    margin-bottom: 0.5cm;
    font-size: 18px;
    font-weight: 700;
}

.item .explanation {
    font-size: 16px;
    text-align: justify;
}

</style>
<body>
    <div class="page">
        <div class="header">
            <hr class="intro-line"/>
            <p class="title">Hasil Light Assessment</p>
            <p id="name">{{ strtoupper($name) }}</p>
        </div>
        <div class="result strong">
            <p class="title">PERAN-PERAN KUAT</p>
            <hr class="intro-line" />
            <table class="items">
                <tbody>
                    <tr>
                        @foreach ($result['very_fit'] as $item)
                            @component('result-item')
                                @slot('result') {{ $item['result'] }} @endslot
                                {{ $item['exp_pos'] }}
                            @endcomponent
                            @if ($loop->last)
                                </tr>
                            @elseif ($loop->even)
                                </tr>
                                <tr>
                            @endif
                        @endforeach
                </tbody>
            </table>
        </div>
        <div class="result weak">
            <p class="title">PERAN-PERAN LEMAH</p>
            <hr class="intro-line" />
            <table class="items">
                <tbody>
                    <tr>
                        @foreach ($result['very_not_fit'] as $item)
                            @component('result-item')
                                @slot('result') {{ $item['result'] }} @endslot
                                {{ $item['exp_neg'] }}
                            @endcomponent
                            @if ($loop->last)
                                </tr>
                            @elseif ($loop->even)
                                </tr>
                                <tr>
                            @endif
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>