<form action="{{route('locale.set', $lang)}}" method="POST">
    @csrf
    <button type="button" class="nav-link btn-language btn btn-outline-dark">
        <span class="flag-icon flag-icon-{{$country}}"></span>
    </button>
</form>