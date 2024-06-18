<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #292747;
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                font-size: 19px;
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
           <div><h1> Todo list. </h1>
           @foreach ($listItems as $listItem)
           <p> Item: {{$listItem->name}}</p>  
           <form method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charset="UTF-8">
           {{ csrf_field() }}
           <button type="submit" style="max-height: 25px; margin-left:20px;">Mark Complete</button>    
        </form>
            @endforeach
        <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
            {{ csrf_field() }}
           <label for="listItem">New Todo Item</label> </br>
           <input type="text" name="listItem"> </br>
           <button>Save Item</button>
        </form>
          </div>
        </div>
    </body>
</html>
