<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
        <link rel="stylesheet" href="css/app.css">
 
        

        <title>My habit tracker</title>

    </head>
    <body>
        <div id="app">
        
            <div id="heading">
                <div class="hero is-primary is-small">
                    <!-- Hero head: will stick at the top -->
                    <div class="hero-head"></div>

                    <!-- Hero content: will be in the middle -->
                    <div class="hero-body">
                        <h1 class="title">Habit tracker</h1>
                        <h2 class="subtitle">Actually start sticking to your guns on habits you set for yourself.</h2>
                    </div>
                </div>
            </div>
            <div id="navbar">
                <nav>
                    @include('layouts.nav') 
                </nav>
            </div>
            <router-view></router-view>
        
            <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot">
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
