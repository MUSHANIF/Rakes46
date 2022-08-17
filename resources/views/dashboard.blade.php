<form action="{{ route('logout') }}" method="POST">

    @csrf

    <button href="{{ route('logout') }}">

        logout
    </button>

</form>
