<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      </head> 
        {{-- <title></title> --}}
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <!-- Styles --> --}}
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'sofia', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 10;
            } 
 
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: inherit;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px; 
            }

            .links > a {
                color: #636b6f;
                padding:  50px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration-color: white;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 20%;
            }
             .img {
    
                width: 100px;
             
            }
            .body {
                font-family: 'impact';
                font-size: 100px;
                font-style: initial;
            } 
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-center links">               
                  @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" >Login</a>
                       
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Sign UP</a>
                            
                        @endif        
                    @endauth
                </div>
            @endif

        
            <div class="content">
                <div class="img"><img src="https://cdn.dribbble.com/users/1629240/screenshots/6694533/jg-dribbble.gif" alt="jg logo"></div> 
                <div class="title m-b-md"><link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'></div>
            </div>

                <div class="links">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>


                             </div>
                          </div>
                       </div>
                     </div>
                </div>
            </div> 
        </div>



    </body>
</html>

