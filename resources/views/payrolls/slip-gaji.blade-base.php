<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Slip</title>
     <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .salary-slip {
            width: 750px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #ccc;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 20px;
        }

        .header p {
            margin: 5px 0 0 0;
        }

        .company-logo {
            width: 60px;
            height: 60px;
            background-image: url('{{ public_path("images/logo.png") }}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 50%;
        }

        .section-title {
            font-weight: bold;
            margin-top: 30px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            font-size: 14px;
        }

        .info-table, .salary-table {
            width: 100%;
            margin-top: 10px;
        }

        .info-table td, .salary-table td {
            padding: 6px;
        }

        .info-table td:first-child {
            font-weight: bold;
            width: 150px;
        }

        .salary-table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        .salary-table th, .salary-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .salary-table th {
            background-color: #ecf0f1;
            text-align: left;
        }

        .totals {
            margin-top: 20px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
        }

        .net-pay {
            color: green;
        }

        .signatures {
            margin-top: 60px;
            display: flex;
            justify-content: space-between;
        }

        .signatures div {
            text-align: center;
        }

        .signature-line {
            margin-top: 40px;
            border-top: 1px solid #000;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }
      
    </style>
    {{-- style awal --}}
    <style>
        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .salary-slip {
            max-width: 750px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .header {
            background: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        
        .header h1 {
            margin: 0;
            font-size: 18px;
        }
        
        .company-logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #2c3e50;
        }
        
        .employee-info {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: #f9f9f9;
            border-bottom: 1px solid #eee;
        }
        
        .info-block {
            flex: 1;
            padding: 0 10px;
        }
        
        .info-block h3 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 16px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 5px;
        }
        
        .info-label {
            font-weight: bold;
            width: 120px;
        }
        
        .info-value {
            flex: 1;
        }
        
        .salary-details {
            display: flex;
            padding: 20px;
        }
        
        .earnings, .deductions {
            flex: 1;
            padding: 0 15px;
        }
        
        .earnings {
            border-right: 1px solid #eee;
        }
        
        .section-title {
            color: #2c3e50;
            font-size: 16px;
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .salary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .salary-item {
            font-weight: 400;
        }
        
        .salary-amount {
            font-weight: 500;
        }
        
        .total {
            background: #f9f9f9;
            padding: 15px 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 16px;
        }
        
        .net-pay {
            color: #27ae60;
        }
        .total-salary {
            color: #3234ca;
        }
        .total-deductions {
            color: #bb3412;
        }
        
        .footer {
            padding: 15px 20px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
            background: #f9f9f9;
            border-top: 1px solid #eee;
        }
        
        .signature {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin-top: 20px;
        }
        
        .signature-block {
            text-align: center;
            width: 45%;
        }
        
        .signature-line {
            border-top: 1px solid #333;
            width: 80%;
            margin: 10px auto;
            padding-top: 5px;
        }
        
        @media print {
            body {
                background: none;
                padding: 0;
            }
            
            .salary-slip {
                box-shadow: none;
                border-radius: 0;
            }
        } */
    </style> 
</head>
<body>
    <div class="salary-slip">
        <div class="header">
            <h1>SLIP GAJI</h1>
            <div class="company-logo">
          
                {{-- <img src="{{ asset('HRIS-Logo.png') }}" alt="">LOGO</div> --}}
                <img src="{{ public_path('HRIS-Logo.png') }}" alt="Logo" width="85"></div>
            
            <p>Bulan <strong>{{ implode(' ', array_slice(explode(' ', $bulan), 1, 2)) }}</strong></p>

        </div>

        <div class="employee-info">
            <div class="info-block">
                <h3>Detail Karyawan</h3>
                {{-- <div class="info-row">
                    <div class="info-label">Nama: {{ $nama }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">ID Karyawan  &Tab; :EMP-2023-001</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Departemen &Tab;&Tab; :Pengembangan Perangkat Lunak</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Jabatan: Senior Developer</div> --}}

                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $nama }}</td>
                        </tr>
                        <tr>
                            <td>ID Karyawan</td>
                            <td>:</td>
                            <td>{{ 'EMP-2023-001' }}</td>
                        </tr>
                        <tr>
                            <td>Departemen</td>
                            <td>:</td>
                            <td>{{ "Pengembangan Perangkat Lunak" }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{ "Senior Developer" }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="info-block">
                <h3>Detail Pembayaran</h3>
                <div class="info-row">
                    <div class="info-label">Nama Bank:</div>
                    <div class="info-value">Bank BCA</div>
                </div>
                <div class="info-row">
                    <div class="info-label">No. Rekening:</div>
                    <div class="info-value">0732000641</div>
                    {{-- <div class="info-value">906266515104000</div> --}}
                </div>
                <div class="info-row">
                    <div class="info-label">No. NPWP:</div>
                    {{-- <div class="info-value">ABCDE1234F</div> --}}
                    <div class="info-value">906266515104000</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Tanggal Pembayaran:</div>
                    <div class="info-value">{{ $bulan }}</div>
                    {{-- <div class="info-value">05-Juli-2023</div> --}}
                </div>
            </div>
        </div>

        <div class="salary-details">
            <div class="earnings">
                <h3 class="section-title">Pendapatan</h3>
                <div class="salary-row">
                    <div class="salary-item">Gaji Pokok</div>
                    {{-- <div class="salary-amount">{{ $gaji_pokok }}</div> --}}
                    <div class="salary-amount">{{ 'Rp.'.number_format($gaji_pokok, 2, ',', '.') }}</div>
                    {{-- <div class="salary-amount">Rp4.500.000</div> --}}
                </div>
                <div class="salary-row">
                    <div class="salary-item">Tunjangan Rumah</div>
                    <div class="salary-amount">Rp1.800.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Tunjangan Transportasi</div>
                    <div class="salary-amount">Rp500.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Tunjangan Kesehatan</div>
                    <div class="salary-amount">Rp300.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Tunjangan Khusus</div>
                    <div class="salary-amount">Rp700.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Bonus</div>
                    <div class="salary-amount">{{ 'Rp.'.number_format($bonus, 2, ',', '.') }}</div>
                </div>
            </div>

            <div class="deductions">
                <h3 class="section-title">Potongan</h3>
                <div class="salary-row">
                    <div class="salary-item">Dana Pensiun</div>
                    <div class="salary-amount">Rp540.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Pajak Profesi</div>
                    <div class="salary-amount">Rp200.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Pajak Penghasilan</div>
                    <div class="salary-amount">Rp1.200.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Angsuran Pinjaman</div>
                    <div class="salary-amount">Rp800.000</div>
                </div>
                <div class="salary-row">
                    <div class="salary-item">Potongan Terlambat</div>
                    <div class="salary-amount">Rp50.000</div>
                </div>
            </div>
        </div>

        <div class="total">
            <div>Total Pendapatan: <span class="total-salary">Rp8.800.000</span></div>
            
            <div>Total Potongan: <span class="total-deductions">{{ 'Rp.'.number_format($potongan, 2, ',', '.') }}</span></div>
            {{-- <div>Total Potongan: <span class="total-deductions">Rp2.790.000</span></div> --}}
            
            <div>Gaji Bersih: <span class="net-pay">{{ 'Rp.'.number_format($total_gaji, 2, ',', '.') }}</span></div>
        </div>
<br>
<br>
<br>
        <div class="signature">
            <div class="signature-block">
                <div class="signature-line"></div>
                <div>Tanda Tangan Karyawan</div>
            </div>
            <div class="signature-block">
                <div class="signature-line"></div>
                <div>Tanda Tangan Pejabat</div>
            </div>
        </div>

        <div class="footer">
            <p>Dokumen ini dibuat secara otomatis dan tidak memerlukan tanda tangan</p>
            <p>Untuk pertanyaan, silakan hubungi Departemen HRD</p>
        </div>
    </div>
</body>
</html>
