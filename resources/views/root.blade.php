<!DOCTYPE html>
<!-- 
this is the root template that all pages are based off of.
any content here will appear in all pages.
all other blade sub templates inject code into the "main" section, allowing for easy page creation
daisyUI also helps alot with UI elements

coffee theme was originally a placeholder but i chose to keep it
-->


<html lang="en" data-theme="coffee">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstonCV's</title>
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
 



<body class="min-h-screen flex flex-col bg-base-200 font-sans"> <!-- navbar -->
    <nav class="navbar bg-base-100">
        <div class="navbar-start gap-2">
            <a href="/" class="btn btn-ghost text-xl"> AstonCV's </a> <!-- goes to the root -->
        </div> 


        @if (View::hasSection('ShowSearch')) <!-- a flag of sorts to only trigger if the showsearch section is present -->
            <div class="navbar-center gap-4">
                <form method="GET" action="/search">
                    @csrf
                    <div class="join">
                        <input name="searchfield" type="text" class="input join-item" placeholder="name or programming language" />
                        <button class="btn join-item">search</button>
                    </div>
                    <label class="label">toggle programming search:</label> <!-- changes it to seach for programming language -->
                    <input name="toggle" type="checkbox" class="toggle" value="TRUE" />
                </form>
            </div>
        @endif
        

        <div class="navbar-end gap-2"> <!-- start of the bar -->
            @guest <!-- if guest, login or sign up -->
                <a href="/login" class="btn btn-ghost btn-sm">Log In</a> 
                <a href="/signup" class="btn btn-primary btn-sm">Sign Up</a>
            @endguest
            @auth <!-- if authed, allow user to edit details of their account -->
               <a href="/details" class="btn btn-primary btn-sm">Edit Details</a> 
            @endauth
        </div>
    </nav>


    @section("main")

    @show



    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© AstonCV's built by 250114470</p>
        </div> <!-- basic footer -->
    </footer>
</body>


</html>