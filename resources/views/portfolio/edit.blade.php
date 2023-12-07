<form action="{{route('portfolio.update', $portfolio->id)}}" method="POST">
@method('UPDATE')
@csrf
<label for="service">Service ID</label>
<input type="number" id="service" name="service_id" value="{{$portfolio->service_id}}">
<label for="image">Image</label>
<input type="file" name="image" id="image" value="{{$portfolio->image}}">
<label for="on_home">Is on home</label>
<select name="is_on_home" id="is_on_home">
    @if($portfolio->is_on_home == 1)  
    <option selected value="1">Yes</option>
    <option value="0">No</option>
    @else
    <option value="1">Yes</option>
    <option selected value="0">No</option>
    @endif
</select>
<label for="status">Status</label>
<select name="status" id="status">
    @if ($portfolio->status == 1)
    <option selected value="1">Active</option>
    <option value="2">Inactive</option>
    @else
    <option value="1">Active</option>
    <option selected value="2">Inactive</option>
    @endif
</select>
<label for="order">Order</label>
<input type="number" id="order" name="order" value="{{$portfolio->order}}">
<button type="submit">Update Portfolio</button>
</form>