<form action="{{route('faqs.update', $faq->id)}}" method="post">
    @csrf
    <label for="service">Service ID</label>
    <input type="number" id="service" name="service_id" value="{{$faq->service}}" required>
    <br><br>
    <label for="question">Question</label>
    <input type="text" id="question" name="question" value="{{$faq->question}}" required><br><br>
    <label for="answer">Answer</label>
    <textarea  cols="30" rows="10" id="answer" name="answer" value={{$faq->answer}}></textarea> <br><br>
    <label for="page_id">Page ID</label>
    <input type="text" id="page_id" name="page_id" value="{{$faq->page_id}}" required>
    <label for="order">Order</label>
    <input type="number" id="order" name="order" value="{{$faq->order}}" required>
    <label for="status">Status</label>
    <select name="status" id="status">
        <option value=1>Active</option>
        <option value=2>Inactive</option>
    </select>
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>