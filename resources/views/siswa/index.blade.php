<h1>{{ $siswa->role }} Dashboard</h1>
<h2>Welcome {{ $siswa->name }}</h2>

<form action="{{ route('logout') }}" method="post">
  @csrf
  <button type="submit">Logout</button>
</form>