<x-layout>
    <p>GUESTHOUSE RECORDS</p>
    
<table>
    <tr>
        <th>Guest House Name</th>
        <th>Bookings</th>
    </tr>
    @foreach ($guest_houses as $guest_house)
    <tr>
        <td>{{$guest_house['guest_house_name']}}</td>
        <td>
            <ul>
                @foreach($guest_house->bookings as $booking)
                <li>{{ $booking->guest_name }}</li>
                <ol type="I">
                    <li>contact : {{ $booking->contact }}</li>
                    <li>price : {{ $booking->price}}</li>
                </ol>
                @endforeach
            </ul>
        </td>
    </tr>
    @endforeach

</table>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</x-layout>
