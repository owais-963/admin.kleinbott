<form action="{{route('pages.update', $page->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{$page->title}}"><br><br>

    <label for="slug">slug</label>
    <input type="slug" name="slug" id="slug" value="{{$page->slug}}"><br><br>
    
    <label for="heading">Heading</label>
    <input type="text" name="heading" id="heading" value="{{$page->heading}}"><br><br>

    <label for="content">Content</label>
    <input type="text" name="content" id="content" value="{{$page->content}}"><br><br>

    <label for="image">Image</label>
    <input type="file" name="image" id="image"><br><br>

    <label for="link">link</label>
    <input type="text" name="link" id="link" value="{{$page->link}}"><br><br>

    <label for="meta_title">Meta Title</label>
    <input type="text" name="meta_title" id="meta_title" value="{{$page->meta_title}}"><br><br>

    <label for="meta_desc">Meta Description</label>
    <input type="text" name="meta_desc" id="meta_desc" value="{{$page->meta_desc}}"><br><br>

    <label for="meta_keyword">Meta Keywords</label>
    <input type="text" name="meta_keyword" id="meta_keyword" value="{{$page->meta_keyword}}"><br><br>

    <label for="status">Status</label>
    <select>
        <option id="status" name="status" value="1">Active</option>
        <option value="0">Inactive</option>
        </select>

    <input type="submit">
    </form>