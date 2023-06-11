<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <div>
                    <form action="/create" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" required name="invoiceNumber" placeholder="Enter your invoice number">
                        <input type="date" required name="invoiceDate" placeholder="Enter your invoice number">
                        <input type="date" required name="invoiceDueDate" placeholder="Enter your invoice number">
                        <input type="text"  required name="invoiceStatus" placeholder="Enter your invoice status">
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
            </div>
        </div>

    </div>
</x-app-layout>
