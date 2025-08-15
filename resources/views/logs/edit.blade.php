<x-layout>
    
    @if($errors->any)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif

    @if(session('success'))
        <h1 style="background-color: gray">{{session('success')}} </h1>

    @endif

    <form action="{{route('logs.update',$booking['id'])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="guest_name">Guest Name</label>
        <input type="text" name="guest_name" id="guestName" value="{{old('guest_name',$booking->guest_name)}}">
        <label for="contact">Contact</label>
        <input type="number" name="contact" id="contact" value="{{old('contact',$booking->contact)}}">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{old('price',$booking->price)}}">

        <button type="submit">Submit</button>

    </form>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</x-layout>
