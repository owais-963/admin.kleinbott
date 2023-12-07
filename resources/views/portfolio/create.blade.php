<form action="{{route('portfolio.store')}}" method="POST">
    @method('POST')
    @csrf
    <label for="service">Service ID</label>
    <input type="number" id="service" name="service_id"><br><br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image"><br><br>
    <label for="on_home">Is on home</label>
    <select name="is_on_home" id="is_on_home">
        <option value="1">Yes</option>
        <option value="0">No</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select><br><br>
    <label for="status">Status</label>
    <select name="status" id="status">
        <option value="1">Active</option>
        <option value="2">Inactive</option>
        <option value="1">Active</option>
        <option value="2">Inactive</option>
    </select><br><br>
    <label for="order">Order</label>
    <input type="number" id="order" name="order"><br><br>
    <button type="submit">Update Portfolio</button>
    </form>