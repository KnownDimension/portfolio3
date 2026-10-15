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
                    <form action="/editconfirm" method="POST">
                        @csrf
                        <h2 class="card-title">Details</h2>
                        
                        <label class="label">Programming languages</label>
                        <textarea type="text" name="keyprogramming" class="textarea textarea-lg w-5/5" placeholder="What programming languages do you use? what is your experience with them?, how would you rate your ability in said programming language?" ></textarea>

                        <label class="label">Personal Profile</label>
                        <textarea type="text" name="profile" class="textarea textarea-lg w-5/5" placeholder="A summary of who you are, what your background is, summary of skills, where do you see yourself in 5 years?" ></textarea>
                        
                        <label class="label">Education</label>
                        <textarea type="text" name="education" class="textarea textarea-lg w-5/5" placeholder="What is your education background?, where and what did you study?, any IT certifications? if so show them here and if applicable their expiry date, what is your work experience if any?" ></textarea>

                        <label class="label">Profile links</label>
                        <textarea type="text" name="URLlinks" class="textarea textarea-lg w-5/5" placeholder="any professional wobsite links you want to show? e.g github, linkedin, or other profesional links relevant for your job?" ></textarea>




                    
                        <div class="flex justify-between mt-4">
                            
                            <div class="card-actions justify-end">
                                <a href="/details" class="btn btn-primary">Cancel Edit</a>
                            </div>
                            
                            <div class="card-actions justify-bottom ">                                    
                                    <button type="submit" class="btn btn-primary">Confirm Edit</button> 
                                    <!-- button for editing a whole database -->
                            </div>

                        </div>
                    </form>
                  

                   

                </div>
            </div>


        </main>



    @endauth

@endsection