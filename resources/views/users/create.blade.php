<form action="{{route('users.store')}}" method="post">
@csrf
<label for="name">Name</label>
<input type="text" name="name" id="name"><br><br>
<label for="email">Email</label>
<input type="text" name="email" id="email"><br><br>
<label for="password">Password</label>
<input type="password" name="password" id="password"><br><br>
<input type="submit">
</form>