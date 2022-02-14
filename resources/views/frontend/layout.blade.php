<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bullish') }}</title>
    <link rel="shortcut icon" href="{{ Custom::getIcon() }}">
    <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
</head>
<style>
      .btn-success {     
        margin-right:10px;
        
    }
    </style>
<body class="bg-light">
<div id="app">
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container" >
            <a class="navbar-brand" href="https://www.goldinsacs.com/">
                <img src="{{ Custom::getIcon() }}" alt="{{ config('app.name', 'Laravel') }}" class="img-fluid inline-block pb-1" style="max-height: 25px">
                {{ config('app.name', 'Bullish') }}
            </a>
        <div class="d-flex flex-row">
            <a class="btn btn-success"  href="{{ route('auth', 'login') }}">@lang('Log in')</a>
            <br>
            <a class="btn btn-success" href="{{ route('auth', 'register') }}" >@lang('register')</a>
          </div>
        </div>
    </nav>
     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank">.</a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
   
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
   
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },

    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    },
      {
      "proName": "NASDAQ:AAPL",
      "title": "Apple"
    },
     {
      "proName": "NASDAQ:DPRO",
      "title": "DPRO"
    },
     {
      "proName": "OTC:CWRK",
      "title": "Currency Works"
    },
    {
      "proName": "NASDAQ:TSLA",
      "title": "Tesla"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
    @yield('content')
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 h-100 text-center text-lg-left my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; {{ config('app.name', 'Laravel') }} {{ date('Y') }}. @lang('All Rights Reserved').</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZK2N74DB4G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZK2N74DB4G');
</script>

<script>
    window.config = {
        'path': '{{ url('/') }}',
        'timezone': '{{ setting('app_timezone') }}',
        'date_locale': '{{ setting('app_date_locale') }}',
        'date_format': '{{ setting('app_date_format') }}',
        'sentry_dsn': '{{ env('SENTRY_VUE_DSN') }}'
    };
</script>
<script src="{{ mix('js/frontend.js') }}"></script>
</body>
</html>
