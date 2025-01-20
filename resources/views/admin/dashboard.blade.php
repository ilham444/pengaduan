@extends('layouts.admin')  

@section('content')  
<div class="container mx-auto px-4 py-8">  
    <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">Dashboard Admin</h1>  
    <div class="overflow-x-auto shadow-lg rounded-lg border border-gray-200">  
        <table class="min-w-full divide-y divide-gray-300" id="table">  
            <thead class="bg-green-600 text-white">  
                <tr>  
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">No</th>  
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Judul</th>  
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Status</th>  
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tanggapan</th>  
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tanggal</th>  
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Aksi</th>  
                </tr>  
            </thead>  
            <tbody class="bg-white divide-y divide-gray-300">  
                @foreach($pengaduans as $pengaduan)  
                <tr class="hover:bg-gray-50 transition duration-200">  
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>  
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $pengaduan->judul }}</td>  
                    <td class="px-6 py-4 text-sm text-gray-700">  
                        @if($pengaduan->status == 'masuk')  
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">Masuk</span>  
                        @elseif($pengaduan->status == 'diproses')  
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-yellow-500 rounded-full">Diproses</span>  
                        @elseif($pengaduan->status == 'selesai')  
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Selesai</span>  
                        @elseif($pengaduan->status == 'ditolak')  
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-red-500 rounded-full">Ditolak</span>  
                        @endif  
                    </td>  
                    <td class="px-6 py-4 text-sm text-gray-700">  
                        {{ $pengaduan->tanggapan ?? 'Belum ada tanggapan' }}  
                    </td>  
                    <td class="px-6 py-4 text-sm text-gray-700">  
                        {{ $pengaduan->created_at->timezone('Asia/Jakarta')->format('d M Y, H:i') }}  
                    </td>  
                    <td class="px-6 py-4 text-sm font-medium space-y-2">  
                        <form action="{{ route('admin.tanggapan', $pengaduan->id) }}" method="POST">  
                            @csrf  
                            <div class="flex">  
                                <input type="text" name="tanggapan" class="form-input block w-full rounded-l-md border-gray-300 focus:ring-green-500 focus:border-green-500 text-sm" placeholder="Tanggapan..." required>  
                                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r-md transition duration-200">  
                                    Kirim  
                                </button>  
                            </div>  
                        </form>  
                        @if($pengaduan->status == 'masuk')  
                        <div class="flex space-x-2 mt-2">  
                            <form action="{{ route('admin.pengaduan.update', $pengaduan->id) }}" method="POST" class="inline-block">  
                                @csrf  
                                @method('PUT')  
                                <input type="hidden" name="status" value="diproses">  
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1 rounded-md transition duration-200">Terima</button>  
                            </form>  
                            <form action="{{ route('admin.pengaduan.update', $pengaduan->id) }}" method="POST" class="inline-block">  
                                @csrf  
                                @method('PUT')  
                                <input type="hidden" name="status" value="ditolak">  
                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm px-3 py-1 rounded-md transition duration-200">Tolak</button>  
                            </form>  
                        </div>  
                        @elseif($pengaduan->status == 'diproses')  
                        <form action="{{ route('admin.pengaduan.update', $pengaduan->id) }}" method="POST" class="inline-block mt-2">  
                            @csrf  
                            @method('PUT')  
                            <input type="hidden" name="status" value="selesai">  
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-sm px-3 py-1 rounded-md transition duration-200">Selesaikan</button>  
                        </form>  
                        @endif  
                    </td>  
                </tr>  
                @endforeach  
            </tbody>  
        </table>  
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
                    [5, 10, 25, 50, 100]  
                ]  
            });  

            table.buttons().container()  
                .appendTo('#table_wrapper .col-md-5:eq(0)');  
        });  
    </script>  
@endpush