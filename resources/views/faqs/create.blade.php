<form action="{{route('faqs.store')}}" method="post">
@csrf
<label for="service">Service ID</label>
<input type="number" id="service" name="service_id" required>
<br><br>
<label for="question">Question</label>
<input type="text" id="question" name="question" required><br><br>
<label for="answer">Answer</label>
<textarea  cols="30" rows="10" id="answer" name="answer"></textarea> <br><br>
<label for="page_id">Page ID</label>
<input type="text" id="page_id" name="page_id" required>
<label for="order">Order</label>
<input type="number" id="order" name="order" required>
<label for="status">Status</label>
<select name="status" id="status">
    <option value=1>Active</option>
    <option value=2>Inactive</option>
</select>
<button class="btn btn-primary" type="submit">Submit</button>
</form>