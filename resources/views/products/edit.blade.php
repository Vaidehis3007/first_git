<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-200">
    <a href="{{url('/')}}">
        <button class="bg-sky-500 my-2 mx-2 text-white text-black px-3 py-2 h-10" type="submit">Home</button>
    </a>

    <div
        class="flex justify-center  items-center content-center flex-col align-items-center min-h-screen border-2 border-black">
        <div class="w-1/4">
            <div class="flex justify-center my-2 w-full">
                <h1 class="text-xl font-bold my-2">Edit Product</h1>
            </div>
            <hr>
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div class="flex flex-col gep-y-2">
                    <label for="name">Name:</label>
                    <input value="{{ $product->name }}" class="px-2 h-10 border border-black" type="text"
                        name="name" required><br>
                </div>
                <div class="flex flex-col gep-y-2">
                    <label for="description">Description:</label>
                    <textarea class="px-2 h-16 border border-black" name="description" required>{{ $product->description }}</textarea><br>
                </div>
                <div class="flex flex-col gep-y-2">
                    <label for="price">Price:</label>
                    <input value="{{ $product->price }}" class="px-2 h-10 border border-black" type="number"
                        name="price" step="0.01" required><br>
                </div>


                <button class="bg-sky-500 text-white text-black px-3 py-2 h-10" type="submit">Update</button>
            </form>
        </div>
    </div>
</body>

</html>