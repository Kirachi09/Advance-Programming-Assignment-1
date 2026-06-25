<x-guest-layout>
    <div class="p-8">

        <div class="mb-6">
            <a href="{{ route('blogs.create') }}" class="font-large">Create Blog</a>
        </div>

        

<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 p-4">
        <h2>Blogs</h2>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-t border-default-medium">
            <tr>
                
                <th scope="col" class="px-6 py-3 font-medium">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Image
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Content
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    {{$blog->id}}
                </th>
                <td class="px-6 py-4">
                    <img src="{{ asset('images/' . $blog->image) }}" alt="{{$blog->title}}">
                </td>
                <td class="px-50 py-4">
                    {{$blog->title}}
                </td>
                <td class="px-6 py-4">
                    {{$blog->content}}
                </td>

                <td class="px-6 py-4 flex gap-2">
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="border border-blue-600 p-2 rounded-lg bg-blue-600 text-white">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border border-red600 p-2 rounded-lg bg-red-600 text-white">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        



    </div>
</x-guest-layout>