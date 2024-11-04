<!DOCTYPE html>
<html>
<head>
    <title>Tambah Expense</title>
</head>
<body>
    <h2>Tambah Expense</h2>

    <!-- Menampilkan pesan error validasi -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form tambah expense -->
    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="name" value="{{ old('name') }}" required><br><br>

        <label>Jumlah (Amount):</label>
        <input type="number" step="0.01" name="amount" value="{{ old('amount') }}" required><br><br>

        <label>Tanggal:</label>
        <input type="date" name="date" value="{{ old('date') }}" required><br><br>

        <label>Deskripsi:</label>
        <textarea name="description">{{ old('description') }}</textarea><br><br>

        <button type="submit">Simpan Expense</button>
    </form>
</body>
</html>