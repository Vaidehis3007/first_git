<! - resources/views/users/index.blade.php → <!DOCTYPE html>
    <html>

    <head>
        <title>User List</title>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="bg-gray-200">
        <a href="{{url('/')}}">
            <button class="bg-sky-500 my-2 mx-2 text-white text-black px-3 py-2 h-10" type="submit">Home</button>
        </a>
        <div
            class="flex justify-center  items-center content-center flex-col align-items-center min-h-screen border-2 border-black">
            <div class="w-1/4">
                <div class="flex justify-between w-full">
                    <h1 class="text-xl font-bold">User List</h1>
                    <a class="ms-3 bg-sky-500 text-white text-black px-3 py-2"
                        href="{{ route('users.create') }}">Create</a>

                </div>
                <ul>
                    @foreach ($users as $user)
                        <li class="my-3 list-none bg-white px-10 py-3">
                            <div class="flex justify-between items-center">
                                <p>
                                    {{ ucwords($user->name) }}
                                </p>
                                <div class="flex items-center">

                                    <a class="ms-3 bg-sky-500 text-white text-black px-3 py-2 h-10"
                                        href="{{ route('users.edit', $user->id) }}">Edit</a>
                                    <form method="post" class="pt-4s"
                                        action="{{ route('users.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="ms-3  bg-red-500 text-white text-black place-self-center  px-3 py-2">Delete</button>
                                    </form>
                                </div>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>

    </html>