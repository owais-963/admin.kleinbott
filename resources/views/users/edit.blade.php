<form action="{{route('users.update', $user->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$user->name}}"><br><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$user->email}}"><br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="optional"><br><br>
    <input type="submit">
    </form>