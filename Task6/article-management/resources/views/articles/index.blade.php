<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @can('create', App\Models\Article::class)
                        <a href="{{ route('articles.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            Create Article
                        </a>
                    @endcan

                    <div class="mt-6 space-y-4">
                        @foreach ($articles as $article)
                            <div class="border p-4 rounded">
                                <h3 class="text-lg font-bold">
                                    <a href="{{ route('articles.show', $article) }}" class="text-blue-600 hover:underline">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-600">By: {{ $article->user->name }}</p>
                                <p>{{ Str::limit($article->content, 100) }}</p>

                                @can('update', $article)
                                    <a href="{{ route('articles.edit', $article) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                @endcan
                                @can('delete', $article)
                                    <form method="POST" action="{{ route('articles.destroy', $article) }}" class="inline-block ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>