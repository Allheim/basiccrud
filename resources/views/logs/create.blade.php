<x-layout>
    @if($errors->any)
        <div style="color:green; background-color:grey;"><ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul></div>
    @endif
    
    <h1>Add booking</h1>
    <form method="POST" action="{{ route('logs.store') }}">
        @csrf
        <label for="guest_name">Guest Name</label>
        <input type="text" name="guest_name" id="guestName" value="{{old('guest_name')}}">
        <label for="contact">Contact</label>
        <input type="number" name="contact" id="contact" value="{{old('contact')}}">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{old('price')}}">

        <button type="submit">Submit</button>

    </form>

    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</x-layout>
