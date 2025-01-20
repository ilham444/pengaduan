@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-br from-blue-100 via-white to-blue-50 min-h-screen">
        <div class="container mx-auto px-6 py-10">
            <h1 class="text-4xl font-bold text-center text-blue-800 mb-8">Daftar Pengaduan Saya</h1>

            <!-- Header Actions  -->
            <div class="flex justify-between items-center mb-6">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full shadow-lg transition transform hover:scale-105">
                        Logout
                    </button>
                </form>
                <a href="{{ route('user.pengaduan.create') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full shadow-lg transition transform hover:scale-105">
                    Tambah Pengaduan
                </a>
            </div>

            <!-- Success Alert -->
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md mb-6">
                    <p class="font-bold">Sukses!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- Table -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <table class="w-full table-auto" id="table">
                    <thead class="bg-blue-800 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left">No</th>
                            <th class="px-6 py-3 text-left">Judul</th>
                            <th class="px-6 py-3 text-left">Deskripsi</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Tanggal</th>
                            <th class="px-6 py-3 text-left">Tanggapan</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse ($pengaduans as $pengaduan)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 border-b">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 border-b">{{ e($pengaduan->judul) }}</td>
                                <td class="px-6 py-4 border-b">{{ e($pengaduan->deskripsi) }}</td>
                                <td class="px-6 py-4 border-b">
                                    @if ($pengaduan->status == 'masuk')
                                        <span
                                            class="px-3 py-1 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">Masuk</span>
                                    @elseif ($pengaduan->status == 'diproses')
                                        <span
                                            class="px-3 py-1 text-xs font-semibold text-yellow-800 bg-yellow-200 rounded-full">Diproses</span>
                                    @elseif ($pengaduan->status == 'selesai')
                                        <span
                                            class="px-3 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">Selesai</span>
                                    @elseif ($pengaduan->status == 'ditolak')
                                        <span
                                            class="px-3 py-1 text-xs font-semibold text-red-800 bg-red-200 rounded-full">Ditolak</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 border-b">
                                    {{ $pengaduan->created_at->timezone('Asia/Jakarta')->format('d M Y, H:i') }}
                                </td>
                                <td class="px-6 py-4 border-b">{{ $pengaduan->tanggapan ?? 'Belum ada tanggapan' }}</td>
                                <td class="px-6 py-4 border-b">
                                    <div class="flex space-x-2">
                                        @if ($pengaduan->status != 'selesai')
                                            <a href="{{ route('user.pengaduan.edit', $pengaduan->id) }}"
                                                class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded transition">
                                                Edit
                                            </a>
                                        @endif
                                        <form action="{{ route('user.pengaduan.destroy', $pengaduan->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded transition"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-4 text-center border-b">
                                    <strong class="text-gray-500">Belum ada pengaduan yang diajukan.</strong>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#table').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, ]
                ]
            });

            table.buttons().container()
                .appendTo('#table_wrapper .col-md-5:eq(0)');
        });
    </script>
@endpush
