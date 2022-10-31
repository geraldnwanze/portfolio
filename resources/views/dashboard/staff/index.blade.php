<h1>welcome staff</h1>

<form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button>logout</button>
</form>