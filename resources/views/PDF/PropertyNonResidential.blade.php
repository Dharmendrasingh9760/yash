<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Tax Bill</title>
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
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            text-transform: uppercase;
        }

        .header h2 {
            font-size: 18px;
            margin: 5px 0 10px;
            text-transform: uppercase;
            font-weight: normal;
        }

        .bill-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .bill-table th,
        .bill-table td {
            border: 1px solid #000;
            padding: 12px;
            font-size: 14px;
            text-align: left;
            vertical-align: middle;
        }

        .bill-table th {
            background-color: #f2f2f2;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .bill-table .label {
            width: 30%;
            font-weight: bold;
            text-align: left;
            background-color: #f2f2f2;
        }

        .bill-table .content {
            text-align: center;
            background-color: #fff;
        }

        .bill-table .double-border td {
            border-top: 2px solid #000;
        }

        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .summary-table th,
        .summary-table td {
            border: 1px solid #000;
            padding: 15px;
            font-size: 14px;
            text-align: center;
            vertical-align: middle;
        }

        .summary-table th {
            background-color: #f2f2f2;
            text-transform: uppercase;
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
        }

        .footer p {
            margin: 5px 0;
        }

        .footer strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="bill-container">
        <div class="header">
            <h1>Nagar Palika Appentus</h1>
            <h2>House Tax Bill</h2>
        </div>
        <table class="bill-table">
            <tr>
                <th class="label">House No</th>
                <td class="content">{{ $Property->bhr_number_local_address ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Name of Owner/Occupier</th>
                <td class="content">{{ $Property->name_chairman_owner ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Father/Husband Name</th>
                <td class="content">{{ $Property->name_fh_chairman_owner ?? 'N/A' }}</td>
            </tr>
            <tr class="double-border">
                <th class="label">Financial Year</th>
                <td class="content">
                    {{ $Property->created_at? \Carbon\Carbon::parse($Property->created_at)->format('Y') .'-' .\Carbon\Carbon::parse($Property->created_at)->addYear()->format('y'): 'N/A' }}
                </td>
            </tr>
            <tr>
                <th class="label">Annual Value</th>
                <td class="content">{{ $Property->annual_value_building ?? 'N/A' }}</td>
            </tr>
            {{-- <tr>
                <th class="label">Assessment Date</th>
                <td class="content">01/04/2016</td>
            </tr> --}}
        </table>
        <table class="summary-table">
            <tr>
                <th>Tax for Current Year</th>
                <th>Total Tax Payable</th>
            </tr>
            <tr class="total-row">
                <td>{{ $Property->amount * 12 ?? 'N/A' }}</td>
                <td>{{ $Property->amount ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
