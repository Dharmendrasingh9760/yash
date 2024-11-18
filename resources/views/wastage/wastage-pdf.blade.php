{{-- @dd($wastage) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wastage Collection PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .bill-container {
            width: 700px;
            margin: 30px auto;
            border: 2px solid #000;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 28px;
            margin: 0;
            text-transform: uppercase;
            color: #333;
        }

        .header h2 {
            font-size: 20px;
            margin: 5px 0 10px;
            text-transform: uppercase;
            font-weight: normal;
            color: #666;
        }

        .bill-table,
        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .bill-table th,
        .bill-table td,
        .summary-table th,
        .summary-table td {
            border: 1px solid #ccc;
            padding: 12px;
            font-size: 16px;
            text-align: left;
            vertical-align: middle;
        }

        .bill-table th,
        .summary-table th {
            background-color: #f2f2f2;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .bill-table .label {
            width: 30%;
            font-weight: bold;
            background-color: #f9f9f9;
        }

        .bill-table .content {
            text-align: left;
            background-color: #fff;
        }

        .summary-table .total-row td {
            font-weight: bold;
            background-color: #eaeaea;
        }

        .footer {
            font-size: 14px;
            line-height: 1.6;
            text-align: left;
            margin-top: 20px;
            border-top: 2px solid #000;
            padding-top: 10px;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer strong {
            font-weight: bold;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .bill-container {
                width: 100%;
                padding: 10px;
            }

            .header h1 {
                font-size: 22px;
            }

            .header h2 {
                font-size: 18px;
            }

            .bill-table th,
            .bill-table td,
            .summary-table th,
            .summary-table td {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="bill-container">
        <div class="header">
            <h1>Nagar Palika Appentus</h1>
            <h2>Wastage Collection Bill</h2>
        </div>
        <table class="bill-table">
            <tr>
                <th class="label">Name</th>
                <td class="content">{{ $user->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Emitra Code</th>
                <td class="content">{{ $wastage->code_12 ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Mobile Number</th>
                <td class="content">{{ $wastage->mobile ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Email</th>
                <td class="content">{{ $wastage->email ?? 'N/A' }}</td>
            </tr>
        </table>
        <table class="summary-table">
            <tr>
                <th>Financial Year</th>
                <th>Total Tax Payable</th>
            </tr>
            <tr class="total-row">
                <td>
                    {{ isset($wastage->created_at)? \Carbon\Carbon::parse($wastage->created_at)->format('Y') .'-' .\Carbon\Carbon::parse($wastage->created_at)->addYear()->format('y'): 'N/A' }}
                </td>
                <td>{{ $wastage->amount ?? 'N/A' }}</td>
            </tr>
        </table>
        <div class="footer">
            <p>Thank you for your timely payment!</p>
        </div>
    </div>
</body>

</html>
