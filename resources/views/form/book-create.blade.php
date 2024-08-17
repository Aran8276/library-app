<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Buku | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<script>
    function standby(event) {
        event.target.src = '/book-placeholder.svg'
    }
</script>

<body>
    <header class="sticky top-0 z-50 bg-white">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center mx-auto mb-12 md:mb-auto">
        <div class="flex flex-col space-y-4 w-[20rem] md:w-[80rem]">
            <div>
                <h1 class="font-bold text-3xl py-12 text-center text-gray-600">Buat Buku</h1>
            </div>
            <form action="{{ route('book.create') }}" enctype="multipart/form-data" method="POST">
                <livewire:book-form :isCreate="true" />
            </form>

        </div>
    </main>
</body>

</html>
