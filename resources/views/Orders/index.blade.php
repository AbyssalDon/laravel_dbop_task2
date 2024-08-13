<x-app-layout>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <table>
        <head>
            <tr>
                <th>Customer Number</th>
                <th>Customer Name</th>
                <th>Amount of orders (the highest among all customers)</th>
            </tr>
        </head>
        <body>
            <tr>
                <td>{{ $number }}</td>
                <td>{{ $name }}</td>
                <td>{{ $noorders }}</td>
            </tr>
        </body>
    </table>
</x-app-layout>
