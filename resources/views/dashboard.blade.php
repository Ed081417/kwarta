<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 underline underline-offset-2 mb-2">Bills</h2>
                    <table class="table-auto rounded-lg">
                        <thead>
                            <tr>
                                <th class="border px-6 py-2">Category</th>
                                <th class="border px-6">Budget</th>
                                <th class="border px-6">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-6 py-2">Rent</td>
                                <td class="border px-6">5000</td>
                                <td class="border px-6">Done</td>
                            </tr>
                            <tr>
                                <td class="border px-6 py-2">Internet</td>
                                <td class="border px-6">1500</td>
                                <td class="border px-6">Pending</td>
                            </tr>
                            <tr>
                                <td class="border px-6 py-2">Electricity</td>
                                <td class="border px-6">1000</td>
                                <td class="border px-6">Pending</td>
                            </tr>
                        </tbody>

                        <tr>
                            <td class="font-semibold border px-6 py-2">Total</td>
                            <td class="border px-6">1000</td>
                        </tr>
                    </table>
                </div>

                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 underline underline-offset-2 mb-2">Income</h2>
                    <table class="table-auto rounded-lg">
                        <thead>
                            <tr>
                                <th class="border px-6 py-2 col-span-2" colspan="2">Type</th>
                                <th class="border px-6">Received</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-6 py-2" colspan="2">Work</td>
                                <td class="border px-6">30000</td>
                            </tr>
                            <tr>
                                <td class="border px-6 py-2" colspan="2">Online Selling</td>
                                <td class="border px-6">10000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
