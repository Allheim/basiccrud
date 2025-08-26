<x-layout>

    <x-errors/>
    <h1>Add booking</h1>
    <form method="POST" action="{{ route('logs.store') }}">
        <x-logs.forms/>

    </form>

    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</x-layout>
