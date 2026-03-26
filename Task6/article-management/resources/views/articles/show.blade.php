<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-gray-600">By: {{ $article->user->name }}</p>
                    <div class="mt-4">
                        {{ $article->content }}
                    </div>

                    <div class="mt-6">
                        @can('update', $article)
                            <a href="{{ route('articles.edit', $article) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">Edit</a>
                        @endcan
                        @can('delete', $article)
                            <form method="POST" action="{{ route('articles.destroy', $article) }}" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        @endcan
                        <a href="{{ route('articles.index') }}" class="ml-4 text-indigo-600 hover:text-indigo-900">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>