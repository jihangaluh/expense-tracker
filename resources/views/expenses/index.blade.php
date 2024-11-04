<!DOCTYPE html>
<html>
<head>
    <title>Daftar Expense</title>
</head>
<body>
    <h2>Daftar Expense</h2>

    <!-- Link untuk menambah expense baru -->
    <a href="{{ route('expenses.create') }}">Tambah Expense</a>

    <!-- Menampilkan pesan sukses -->
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Daftar expense -->
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        @foreach ($expenses as $expense)
            <tr>
                <td>{{ $expense->name }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->date }}</td>
                <td>{{ $expense->description }}</td>
                <td>
                    <a href="{{ route('expenses.edit', $expense->id) }}">Edit</a> |
                    <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>