<style>
    td {
        text-align: center
    }
</style>
<style>
        .dataTables_length, .dataTables_filter {
            display: none;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .pagination li {
            list-style-type: none;
            padding: 8px 16px;
            margin: 0 5px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .pagination li.active {
            background-color: #007bff;
            color: #fff;
        }

        .pagination li:hover {
            background-color: #ddd;
        }

        .search-container {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
        }

        .search-container input {
            padding: 6px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-container button {
            padding: 6px 10px;
            font-size: 16px;
            border: 1px solid #007bff;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        .search-container button:hover {
            background-color: #0056b3;
        }
    </style>