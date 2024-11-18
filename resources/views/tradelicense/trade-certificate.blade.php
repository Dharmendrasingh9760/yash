<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade License</title>
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
            <h2>Trade License Bill</h2>
        </div>
        <table class="bill-table">
            <tr>
                <th class="label">Name</th>
                <td class="content">{{ $trade->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">License Type</th>
                <td class="content">{{ $trade->license_type ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Trade Purpose</th>
                <td class="content">{{ $trade->trade_purpose ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Ownership Type</th>
                <td class="content">{{ $trade->type_of_ownership ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">Owner Type</th>
                <td class="content">{{ $trade->type_of_sub_ownership ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="label">GST No.</th>
                <td class="content">{{ $trade->trade_gst_no ?? 'N/A' }}</td>
            </tr>
        </table>
        <table class="summary-table">
            <tr>
                <th>Financial Year</th>
                <th>Total Tax Payable</th>
            </tr>
            <tr class="total-row">
                <td>
                    {{ $trade->created_at? \Carbon\Carbon::parse($trade->created_at)->format('Y') .'-' .\Carbon\Carbon::parse($trade->created_at)->addYear()->format('y'): 'N/A' }}
                </td>
                <td>{{ $trade->amount ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
