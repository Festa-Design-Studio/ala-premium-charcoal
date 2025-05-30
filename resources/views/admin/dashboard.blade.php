<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Products</h3>
                        <p class="text-3xl font-bold">{{ $stats['products'] }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Pages</h3>
                        <p class="text-3xl font-bold">{{ $stats['pages'] }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Inquiries</h3>
                        <p class="text-3xl font-bold">{{ $stats['inquiries'] }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Unread Messages</h3>
                        <p class="text-3xl font-bold">{{ $stats['unread_messages'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Recent Inquiries -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Recent Inquiries</h3>
                    @if($recent_inquiries->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($recent_inquiries as $inquiry)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $inquiry->company_name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $inquiry->contact_name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $inquiry->product->name ?? 'N/A' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                    @if($inquiry->status === 'new') bg-green-100 text-green-800
                                                    @elseif($inquiry->status === 'in-progress') bg-blue-100 text-blue-800
                                                    @elseif($inquiry->status === 'completed') bg-gray-100 text-gray-800
                                                    @else bg-red-100 text-red-800
                                                    @endif">
                                                    {{ ucfirst($inquiry->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-500">No recent inquiries</p>
                    @endif
                </div>
            </div>

            <!-- Recent Messages -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-4">Unread Messages</h3>
                    @if($recent_messages->count() > 0)
                        <div class="space-y-4">
                            @foreach($recent_messages as $message)
                                <div class="border-l-4 border-blue-500 pl-4">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="text-sm font-semibold">{{ $message->name }}</h4>
                                            <p class="text-sm text-gray-600">{{ $message->email }}</p>
                                        </div>
                                        <span class="text-xs text-gray-500">{{ $message->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h5 class="text-sm font-medium mt-2">{{ $message->subject }}</h5>
                                    <p class="text-sm text-gray-600 mt-1">{{ Str::limit($message->message, 100) }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">No unread messages</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 