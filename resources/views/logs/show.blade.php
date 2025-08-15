<x-layout>

    <ul>
        
        <li>{{ $booking->guest_name}}</li>
        <li>{{ $booking->contact}}</li>
        <li>{{ $booking->price}}</li>

        
    </ul>
    <button><a href="{{route('logs.edit',$booking['id'])}}" >Edit Booking</a></button>
    <form action="{{route('logs.destroy',$booking['id'])}}" method="POST">
        @csrf
        @method('DELETE')
        <button style="color:red">Delete Booking</button>
    </form>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</x-layout>
