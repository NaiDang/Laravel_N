<form action="{{ route('tong') }}" method="POST">
    @csrf
    <label for="a">A:</label>
    <input type="number" name="a" id="a"><br><br>
    <label for="b">B:</label>
    <input type="number" name="b" id="b"><br><br>
    <button type="submit">Tính tổng</button>

    @if (isset($tong))
    <p>Tổng: {{ $tong }}</p>
    @endif
</form>
