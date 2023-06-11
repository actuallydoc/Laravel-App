<div>
    <form action="/create" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="invoiceNumber" placeholder="Enter your invoice number">
        <input type="date" name="invoiceDate" placeholder="Enter your invoice number">
        <input type="date" name="invoiceDueDate" placeholder="Enter your invoice number">
        <input type="text" name="invoiceStatus" placeholder="Enter your invoice status">
        <button class="bg-white p-2 rounded-lg mt-3" type="submit">Create invoice</button>
    </form>
    <table>
        <thead>
        <tr>
            <th>Invoice Number</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->invoice_number }}</td>
                <td>{{ $invoice->invoice_date }}</td>
                <td>{{ $invoice->invoice_status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
