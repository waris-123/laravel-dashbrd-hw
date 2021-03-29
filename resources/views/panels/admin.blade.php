@extends ('layouts.app')


@section('content')

>

<div class="mt-28 mb-24">

    <div>
        <h1 class="bg-green-900 p-4 text-center text-3xl text-white">Here is a list of my Admins</h1>
    </div>

    @foreach ($users as $user)
        
        <div class="flex gap-8 justify-center p-4 bg-red-600 text-white">
            
            <div>
                <p>{{ $user->id}} - </p>
            </div>

            <div>
                <p>{{ $user->name}}</p>
            </div>

            <div>
                <p>{{ $user->email}}</p>
            </div>

            <div>
                <p>{{ $user->created_at->diffForHumans() }}</p>
            </div>
 
        </div>
        
    @endforeach
</div>

@endsection