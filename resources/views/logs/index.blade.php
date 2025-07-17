<x-layout>
    <h1>Logs</h1>
    <a href ="/">Redirect </a>

    <?php foreach ($bookings as $booking): ?>

        <h2><?= htmlspecialchars($booking->guest_name) ?></h2>
        <p><?= htmlspecialchars($booking->contact)?></p>
        <p><?= htmlspecialchars($booking['price'])?></p>
    <?php endforeach; ?>


    @foreach ($bookings as $booking1)

        <h2>{{ $booking1['guest_name'] }}</h2>
        <p>{{ $booking1['contact'] }}</p>
        <p>{{ $booking1['price'] }}</p>
    
    @endforeach

    <!-- egg -->
</x-layout>

