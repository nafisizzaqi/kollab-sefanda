<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 bg-light">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Data Barang</h4>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('products.create') }}" class="btn btn-md btn-success mb-3">ADD PRODUCT</a>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Stoch</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @forelse ($products as $product)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded"
                                        style="width: 150px">
                                </td>
                                <td>{{ $product->title }}</td>
                                <td>{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                <td>{{ $product->stock }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        <a href="{{ route('products.show', $product->id) }}"
                                            class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btndanger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Products belum Tersedia.
                            </div>
                            @endforelse
                            </tbody>
                        </table>

                        {{ $products->links() }}

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert 
        @if(session('success')) 
            Swal.fire({ 
                icon: "success", 
                title: "BERHASIL", 
                text: "{{ session('success') }}", 
                showConfirmButton: false, 
                timer: 2000 
            }); 
        @elseif(session('error')) 
            Swal.fire({ 
                icon: "error", 
                title: "GAGAL!", 
                text: "{{ session('error') }}", 
                showConfirmButton: false, 
                timer: 2000 
            }); 
        @endif 
 
    </script>
</body>

</html>