@extends('templates.layout')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Home</h2>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-xl font-semibold text-gray-700">Selamat datang di halaman Home!</h1>
        <p class="text-gray-600 mt-2">
            Ini adalah halaman utama. Kamu bisa menambahkan konten lain di sini sesuai kebutuhan.
        </p>
    </div>
</div>
@endsection

@push('scripts')
<!-- Tambahkan script khusus halaman ini jika diperlukan -->
@endpush
