<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-auto">
                    <thead>
                        <th></th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('E-Mail') }}</th>
                        <th>{{ __('Rol') }}</th>
                        <th>{{ __('Status') }}</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                            </td>
                            <td><a class="underline" href="/users/{{$user->id}}/edit">{{ $user->name }}</a></td>
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
