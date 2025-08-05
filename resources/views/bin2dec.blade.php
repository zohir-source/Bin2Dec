<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bin2Dec</title>
</head>
<body>
    <h1>Konversi Biner ke Decimal</h1>
    <form action="{{ route('bin2dec.convert') }}" method="post">
        @csrf
        <label for="binary">Masukkan angka biner:</label>
        <input type="text" id="binary" name="binary" value="{{ old('binary')}}">
        <button type="submit">Konversi button</button>
    </form>

    @if ($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
    @endif

    @isset($decimal)
        <p>Hasil Decimal: {{ $decimal }} </p>
    @endisset
</body>
</html>