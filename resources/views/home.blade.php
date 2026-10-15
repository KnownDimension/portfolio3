@extends('root')

@section("ShowSearch")

@show <!-- exists solesy to enable search -->

@section("main")
    <main class="flex-1 container mx-auto px-4 py-8">
        <div class="max-w-1xl mx-auto">
            @foreach ($cvs as $cv) <!-- for every cv account in the database, create a accordion element with these details -->
                <div class="collapse bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-1" />
                    <div class="collapse-title font-semibold">{{$cv->name}} ----- {{ $cv->email }}  </div> <!-- username and email -->
                    <div class="collapse-content text-sm">
                        <b>Programming languages</b>: <br> {{ $cv->keyprogramming }} <br><br> <!-- programming experience -->
                        <b>Personal profile</b>: <br> {{ $cv->profile }} <br><br> <!-- personal profile to summarise themselves -->
                        <b>Education</b>: <br> {{ $cv->education }} <br><br> <!-- education background -->
                        <b>Profile links</b>: <br> {{ $cv->URLlinks }} <br><br> <!-- proffesional links like linkedin or github -->
                    </div>
                </div> 
            @endforeach
        </div>

    </main>

@endsection

 
