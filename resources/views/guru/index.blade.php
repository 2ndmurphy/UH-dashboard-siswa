<h1>{{ $guru->role }} Dashboard</h1>
<h2>Welcome {{ $guru->name }}</h2>

<form action="{{ route('logout') }}" method="post">
  @csrf
  <button type="submit">Logout</button>
</form>