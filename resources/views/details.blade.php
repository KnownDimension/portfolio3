@extends('root')

@section("main")

    @guest
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
                    <p>If your seeing this its because you entered a restricted part of the website for authenticated users only.</p> <br> <br>
                    <p>Log in or sign up to gain access to this page</p>
                    <div class="card-actions justify-end">
                    <a href="/" class="btn btn-primary">Go back</a>
                    </div>
                </div>
            </div>
        </main> <!-- basic card to inform user to log in if they somehow end up here -->
    @endguest



    @auth
        <main class="flex-1">
            <div class="card bg-base-100 w-4/5 shadow-sm mx-auto mt-10">
                <div class="card-body">

                    <h2 class="card-title">Details</h2>
                    <p>
                        <b>Programming languages</b>: <br> {{ auth()->user()->keyprogramming }} <br><br> <!-- programming experience -->
                        <b>Personal profile</b>: <br> {{ auth()->user()->profile }} <br><br> <!-- personal profile to summarise themselves -->
                        <b>Education</b>: <br> {{ auth()->user()->education }} <br><br> <!-- education background -->
                        <b>Profile links</b>: <br> {{ auth()->user()->URLlinks }} <br><br> <!-- proffesional links like linkedin or github -->
                    </p>
                    
                    
                  
                    <div class="flex justify-between">
                        <div class="card-actions justify-end">
                            <a href="/edit" class="btn btn-primary">edit</a>
                        </div>
                        
                        <div class="card-actions justify-bottom ">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">log out</button> 
                                <!-- hacky workaround for making a delete btton, there are probably better ways to do this, but NAAHHH -->
                            </form>
                        </div>
                        
                        <div class="card-actions justify-bottom ">
                            <button id="deleter" class="btn btn-primary">delete account</button>
                        </div>
                   </div>
                  

                   

                </div>
            </div>
            
            <div id="confdelbox" style="display: none;" class="card bg-base-100 w-4/5 shadow-sm mx-auto mt-10">
                <div class="card-body">
                    <p>are you sure you want to delete your account? you will not bo able to recover it after clicking yes </p>
                    
                    <div class="flex justify-between">
                        <div class="card-actions justify-beginning">
                            <button id="cancel"  class="btn btn-primary">no</button>
                        </div>


                        <div class="card-actions justify-bottom ">
                            <form action="/deleter" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">yes</button> 
                                <!-- hacky workaround for making a delete btton, there are probably better ways to do this, but NAAHHH -->
                            </form>
                        </div>

                        

                    </div>
                </div>
            </div>

            <script>
                deleteButton = document.getElementById("deleter");
                confirmDelete = document.getElementById("confdelbox");
                cancel = document.getElementById("cancel");


                deleteButton.addEventListener("click", function () {
                    confirmDelete.style.display = "block";
                });

                cancel.addEventListener("click", function () {
                    confirmDelete.style.display = "none";
                });

                // this goofy short in-html javascript makes it so that the delete account button presents
                // a confirmation, and the cancel button labelled "no" to cancel the attemt to delete
            </script>


        </main>



    @endauth

@endsection