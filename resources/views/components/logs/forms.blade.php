
@csrf
<label for="guest_name">Guest Name</label>
<input type="text" name="guest_name" id="guestName" value="{{old('guest_name', $booking->guest_name ?? '')}}">
<label for="contact">Contact</label>
<input type="number" name="contact" id="contact" value="{{old('contact', $booking->contact ?? '')}}">
<label for="price">Price</label>
<input type="text" name="price" id="price" value="{{old('price', $booking->price ?? '')}}">

<button type="submit">Submit</button>
<!-- The only way to do great work is to love what you do. - Steve Jobs -->
