<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <title>Add Movie</title>
</head>

<body>
  <div class="relative flex h-full w-full">
    <div class="h-screen w-1/2 bg-black">
      <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
        {{-- <div>
        <p class="text-2xl">Login|</p>
        <p>please login to continue|</p>
      </div> --}}
        {{-- <div class="my-6">
        <button class="flex w-full justify-center rounded-3xl border-none bg-white p-1 text-black hover:bg-gray-200 sm:p-2"><img src="https://freesvg.org/img/1534129544.png" class="mr-2 w-6 object-fill" />Sign in with Google</button>
      </div>
      <div>
        <fieldset class="border-t border-solid border-gray-600">
          <legend class="mx-auto px-2 text-center text-sm">Or login via our secure system</legend>
        </fieldset>
      </div> --}}
        <div class="mt-10">
          <div class="my-50">

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form action="{{route('save_movie')}}" method="post" class="form" enctype="multipart/form-data">
              @csrf
              <label class="block mb-50 text-sm leading-tight text-black-700" for="title" class="text-black"> Title</label>
              <input id="title" name="title" type="text" placeholder="Movie title" required class="text-black" value="{{ old('title') }}">

              <label class="block mb-50 text-sm leading-tight text-black-700" for="title" class="text-black"> Language</label>
              <select id="language" name="language" required class="text-black">
                <option value="english">English</option>
                <option value="french">french</option>
                <option value="kinyarwanda">kinyarwanda</option>
                <option value="kiswahili">kiswahili</option>
              </select>

              <label class="block mb-50 text-sm leading-tight text-black-700" for="title">Description </label>
              <input type="text" name="description" placeholder="Enter Description" class="text-black" value="{{ old('description') }}">

              <label class="block mb-50 text-sm leading-tight text-black-700" for="title">Select a File </label>
              <input type="file" id="myFile" name="file">

              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="h-screen w-1/2 bg-blue-600">
      <img src="https://images.pexels.com/photos/2523959/pexels-photo-2523959.jpeg" class="h-full w-full" />
    </div>
  </div>
</body>

</html>