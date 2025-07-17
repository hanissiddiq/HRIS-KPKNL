@extends('layouts.frame_dashboard')
@section('content')

{{-- @section('content') --}}
<div class="container">
    <h4>Setting Lokasi Kantor</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.setting.office-location.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Kantor</label>
            <input type="text" name="nama_kantor" id="nama_kantor" class="form-control" value="{{ old('nama_kantor', $setting->nama_kantor ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label>Latitude</label>
            <input type="text" name="office_latitude" id="lat" class="form-control" value="{{ old('office_latitude', $setting->office_latitude ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label>Longitude</label>
            <input type="text" name="office_longitude" id="lng" class="form-control" value="{{ old('office_longitude', $setting->office_longitude ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>Pilih Lokasi di Peta:</label>
            <div id="map" style="height: 350px;"></div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Lokasi</button>
    </form>
</div>
@endsection
@section('scripts')
<!-- Leaflet JS & CSS -->

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil koordinat dari input atau pakai default
        var lat = parseFloat(document.getElementById('lat').value) || -6.200000; // default Jakarta
        var lng = parseFloat(document.getElementById('lng').value) || 106.816666;

        var map = L.map('map').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Tambahkan marker awal
        var marker = L.marker([lat, lng], { draggable: true }).addTo(map);

        // Event klik pada peta
        map.on('click', function (e) {
            var latlng = e.latlng;
            marker.setLatLng(latlng);
            document.getElementById('lat').value = latlng.lat.toFixed(8);
            document.getElementById('lng').value = latlng.lng.toFixed(8);
        });

        // Event drag marker
        marker.on('dragend', function (e) {
            var latlng = marker.getLatLng();
            document.getElementById('lat').value = latlng.lat.toFixed(8);
            document.getElementById('lng').value = latlng.lng.toFixed(8);
        });
    });
</script>
@endsection
