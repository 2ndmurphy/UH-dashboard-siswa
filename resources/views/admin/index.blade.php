<h1>{{ $admin->role }} Dashboard</h1>
<h2>Welcome {{ $admin->name }}</h2>

<form action="{{ route('logout') }}" method="post">
  @csrf
  <button type="submit">Logout</button>
</form>