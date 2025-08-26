<x-layout>
    <h1>Logs</h1>

    <x-success/>
    
    <a href ="{{ route('logs.create') }}">Add Booking </a>


    @foreach ($bookings as $booking1)

        <h2>{{ $booking1['guest_name'] }}</h2>
        <p>{{ $booking1['contact'] }}</p>
        <p>{{ $booking1['price'] }}</p>
        <p>{{ $booking1->guest_house['guest_house_name']}}</p>
        <a href="{{route('logs.show',$booking1['id'])}}">Check ID No.{{$booking1['id']}}</a>
    
    @endforeach
    {{$bookings->links('vendor/pagination/simple-default')}}

    <!-- egg -->
    


</x-layout>

