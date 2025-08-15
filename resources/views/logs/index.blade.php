<x-layout>
    <h1>Logs</h1>

    @if(session('success'))
        <h1 style="background-color: gray">{{session('success')}} </h1>

    @endif
    
    <a href ="{{ route('logs.create') }}">Add Booking </a>


    @foreach ($bookings as $booking1)

        <h2>{{ $booking1['guest_name'] }}</h2>
        <p>{{ $booking1['contact'] }}</p>
        <p>{{ $booking1['price'] }}</p>
        <a href="{{route('logs.show',$booking1['id'])}}">Check ID No.{{$booking1['id']}}</a>
    
    @endforeach
    <!-- egg -->
    


</x-layout>

