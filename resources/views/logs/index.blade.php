<x-layout>
    <h1>Logs</h1>
    
    <a href ="{{ route("logs.create") }}">Add Booking </a>


    @foreach ($bookings as $booking1)

        <h2>{{ $booking1['guest_name'] }}</h2>
        <p>{{ $booking1['contact'] }}</p>
        <p>{{ $booking1['price'] }}</p>
    
    @endforeach
    <!-- egg -->
    


</x-layout>

