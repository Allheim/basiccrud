<x-layout>
    <h1>Add booking</h1>
    <form method="POST" action="{{ route('logs.store') }}">
        @csrf
        <label for="guest_name">Guest Name</label>
        <input type="text" name="guest_name" id="guestName">
        <label for="contact">Contact</label>
        <input type="number" name="contact" id="contact">
        <label for="price">Price</label>
        <input type="number" name="price" id="price">

        <button type="submit">Submit</button>

    </form>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</x-layout>
