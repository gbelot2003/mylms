<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Rol</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if(!$user->roles->isEmpty())
                                {{ $user->roles[0]->name }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $user->status }}</td>
                        </tr>
                        @endforeach
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
