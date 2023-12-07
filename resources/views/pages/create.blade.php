<form action="{{route('pages.store')}}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" ><br><br>

    <label for="slug">slug</label>
    <input type="slug" name="slug" id="slug" ><br><br>
    
    <label for="heading">Heading</label>
    <input type="text" name="heading" id="heading" ><br><br>

    <label for="content">Content</label>
    <input type="text" name="content" id="content" ><br><br>

    <label for="image">Image</label>
    <input type="file" name="image" id="image"><br><br>

    <label for="link">link</label>
    <input type="text" name="link" id="link" ><br><br>

    <label for="meta_title">Meta Title</label>
    <input type="text" name="meta_title" id="meta_title" ><br><br>

    <label for="meta_desc">Meta Description</label>
    <input type="text" name="meta_desc" id="meta_desc" ><br><br>

    <label for="meta_keywords">Meta Keywords</label>
    <input type="text" name="meta_keyword" id="meta_keywords" ><br><br>

    <label for="status">Status</label>
    <select name="status" id="status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
        </select>

    <input type="submit">
    </form>