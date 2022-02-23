<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border-collapse border border-slate-400">
                        <thead>
                            <tr>
                                <th class="border border-slate-300">USER</th>
                                <th class="border border-slate-300">TITLE</th>
                                <th class="border border-slate-300">MESSAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr class="">
                                <td class="px-2 py-1 border border-slate-300">{{ $post->user_id }}</td>
                                <td class="px-2 py-1 border border-slate-300">{{ $post->title }}</td>
                                <td class="px-2 py-1 border border-slate-300">{{ $post->message }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
