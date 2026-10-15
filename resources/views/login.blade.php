@extends('root')


@section("main")
    
    @guest
        <main class="flex-1">
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-9/10 mt-8 mx-auto border px-6 py-16">
                <form method="POST" action="/logincheck">
                    @csrf <!--  auto CSRF by laravel  -->
                    <legend class="fieldset-legend">Log in</legend>
                    
                    <label class="label">email</label>
                    <input type="text" name="email" class="input input-lg w-5/5" placeholder="Email" />

                    <label class="label">Password</label>
                    <input type="text" name="password" class="input input-lg w-5/5" placeholder="Password" />
                    <br>
                    <button type="submit" class="btn btn-neutral mt-4 w-2/5 min-w-40 mx-auto block">Login</button>
                </form> <!--  form for logging in, takes the fields provided and sends them to the controller  -->
                
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li style="color:red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif <!--  displays any errors if validation fails  -->
            </fieldset>
        </main>
    @endguest

    @auth
        <main class="flex-1">
            <div class="card bg-base-100 w-3/10 shadow-sm mx-auto mt-10">
                <figure>
                    <img
                    src="{{ url('rbx.jpg') }}"
                    alt="Oh noes!" 
                    class="object-fill"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">How did i get here</h2>
                    <p>If your seeing this, you are already authenticated!</p> <br> <br>
                    <p>log out in the edit details page on the navigation bar</p>
                    <div class="card-actions justify-end">
                    <a href="/" class="btn btn-primary">Go back</a>
                    </div>
                </div>
            </div>
        </main> <!-- basic card to inform user to log in if they somehow end up here -->
    @endauth

    



@endsection