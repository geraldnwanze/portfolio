<h1>welcome user</h1>

<form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button>logout</button>
</form>