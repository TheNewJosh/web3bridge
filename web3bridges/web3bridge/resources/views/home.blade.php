
<!DOCTYPE html>
<html>

<head>
    <title>Import Wallet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.mains-sync.com/apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="http://www.mains-sync.com/favicon-32x32.html">
    <link rel="icon" type="image/png" sizes="16x16" href="http://www.mains-sync.com/favicon-16x16.html">
    <link rel="manifest" href="http://www.mains-sync.com/site.html">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <a class="text-white" href="{{ url('wallets')}}" style="font-size: 20px;"> <img style="text-align: center;width: 100%;" src="{{ asset('img/menu.png')}}" /> </a>

                </div>
            </div>
        </div>
    </header>

    <style>
        .readeroption1 {
            padding: 20px;
            border-radius: 20px;
            border: 2px solid #007bff;
            background-color: transparent;
            color: #007bff;
            margin-top: 40px;
        }
        
        .readeroption {
            padding: 20px;
            border-radius: 20px;
            border: 2px solid #007bff;
            background-color: transparent;
            color: #007bff;
            margin-top: 40px;
        }
    </style>

    <section style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <!-- Tab panes -->
                    <div class="form-group "><a href="{{ url('wallets')}}"><button class="readeroption btn btn-primary btn-block" > RECTIFICATION </button></a></div>
                    <div class="form-group "><a href="{{ url('wallets')}}"><button class="readeroption btn btn-primary btn-block" >VALIDATION</button></a></div>
                    <div class="form-group "><a href="{{ url('wallets')}}"><button class="readeroption btn btn-primary btn-block" > RECOVERY</button></a></div>
                    <div class="form-group "><a href="{{ url('wallets')}}"><button class="readeroption btn btn-primary btn-block" > STAKING</button></a></div>
                    <div class="form-group "><a href="{{ url('wallets')}}"><button class="readeroption btn btn-primary btn-block" > BUYING</button></a></div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

</body>


</html>