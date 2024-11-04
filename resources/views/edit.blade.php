<!DOCTYPE html>
<html>
<head>
    <title>Edit Expense</title>
</head>
<body>
    <h2>Edit Expense</h2>

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

    <!-- Form edit expense -->
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="name" value="{{ $expense->name }}" required><br><br>

        <label>Jumlah (Amount):</label>
        <input type="number" step="0.01" name="amount" value="{{ $expense->amount }}" required><br><br>

        <label>Tanggal:</label>
        <input type="date" name="date" value="{{ $expense->date }}" required><br><br>

        <label>Deskripsi:</label>
        <textarea name="description">{{ $expense->description }}</textarea><br><br>

        <button type="submit">Update Expense</button>
    </form>
</body>
</html>