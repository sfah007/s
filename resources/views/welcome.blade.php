<?php

 $random_quote = mt_rand(1,7);
 $quote = "";
if($random_quote==1)
{
    $quote = "I had trouble with physics in college. When I signed up I thought it said psychics.
- Greg Tamblyn";
}

if($random_quote==2)
{
    $quote = "When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity.
- Albert Einstein";
}

if($random_quote==3)
{
    $quote = "Creationists make it sound as though a 'theory' is something you dreamt up after being drunk all night.
- Isaac Asimov";
}

if($random_quote==4)
{
    $quote = "Only two things are infinite, the universe and human stupidity, and I'm not sure about the universe.
- Albert Einstein";
}

if($random_quote==5)
{
    $quote = "God not only plays dice, he throws them in the corner where you can't see them.
- Stephen Hawking";
}

if($random_quote==6)
{
    $quote = "In physics, you don't have to go around making trouble for yourself. Nature does it for you.
- Frank Wilczek";
}

if($random_quote==7)
{
    $quote = "There is no great invention, from fire to flying, which has not been hailed as an insult to some god.
- J. B. S. Haldane";
}



?>






<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Science HUB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Science HUB
                </div>
                <div>
                    <span><font size="4.8"><?php echo $quote; ?></span>
                </div>
                
            </div>
        </div>

    </body>
    
</html>
