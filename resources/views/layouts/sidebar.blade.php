<div class="w-1/5 bg-gray-900 min-h-screen px-4 py-6">
    <div class="mb-6">
        <header class="font-medium text-gray-400 uppercase text-xs px-2">
            Main
        </header>
        <a href="#" class="block text-gray-200 px-4 py-2">Dashboard</a>
    </div>
    @can('create playlists')
    <div class="mb-6">
        <header class="font-medium text-gray-400 uppercase text-xs px-2">
            Playlist
        </header>
        <a href="{{route('playlists.create')}}" class="block text-gray-200 px-4 py-2">Create</a>
        <a href="{{route('playlists.table')}}" class="block text-gray-200 px-4 py-2">Table</a>
    </div>
    @endcan

    @can('create tags')
    <div class="mb-6">
        <header class="font-medium text-gray-400 uppercase text-xs px-2">
            Tags
        </header>
        <a href="#" class="block text-gray-200 px-4 py-2">Create</a>
        <a href="#" class="block text-gray-200 px-4 py-2">Table</a>
    </div>
    @endcan

    @can('show users')
    <div class="mb-6">
        <header class="font-medium text-gray-400 uppercase text-xs px-2">
            Users
        </header>
        <a href="#" class="block text-gray-200 px-4 py-2">Table</a>
    </div>
    @endcan


       <!-- Authentication -->
       <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a  class="block text-gray-200 px-4 py-2" href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </a >
    </form>
</div>
