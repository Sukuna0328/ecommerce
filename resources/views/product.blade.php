@extends('layouts.app')
@section('content')

    <head>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>

    <style>
      table {
          border-collapse: collapse;
          width: 100%;
      }

      th,
      td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
      }

      th {
          background-color: goldenrod;
      }
      th, td {
          border: 1px solid #ddd;
          text-align: left;
          padding: 8px;
       }

input[type="checkbox"] {
           margin: 0 10px;
       }

  </style>


    <body>
        <div class="container">
            {{-- <h2>Product Table</h2> --}}
            <button class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add New Product</button>

            <table class="table mt-3" id="role_table">
                <thead>

                    <tr>
                      <td>Product</td>
                      <td>Description</td>
                      <td>Picture</td>
                      <td>Stock</td>
                      <td>Price</td>
                      <td>Status</td>
                    </tr>
       
                </thead>

                <tbody id="productTableBody">
                    <!-- Rows will be inserted here via JavaScript -->

                </tbody>
            </table>

        </div>

        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="productModalLabel">Add New Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form id="productForm" enctype="multipart/form-data" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Product Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="product"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                                    rows="4">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="picture">{{ __('Picture') }}</label>
                                <input id="picture" type="file"
                                    class="form-control-file @error('picture') is-invalid @enderror" name="picture">
                                @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stocks">{{ __('Stocks') }}</label>
                                <select id="stocks" class="form-control @error('stocks') is-invalid @enderror"
                                    name="stocks">
                                    <option value="available">{{ __('Available') }}</option>
                                    <option value="out_of_stock">{{ __('Out of Stock') }}</option>
                                </select>
                                @error('stocks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input id="price" type="number" step="0.01"
                                    class="form-control @error('price') is-invalid @enderror" name="price"
                                    value="{{ old('price') }}">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <div class="form-check">
                                    <input type="checkbox" id="status" name="status" value="1"
                                        class="form-check-input @error('status') is-invalid @enderror"
                                        {{ old('status') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status">{{ __('Featured') }}</label>
                                </div>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button id="submitbtn" class="btn btn-primary">
                                    {{ __('Save Product') }}
                                </button>
                            </div>
                        </form>
                        <div id="formMessages"></div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
                $('#productForm').on('submit', function(event) {
                    event.preventDefault(); // Prevent the default form submission
                    const csrfToken = $('meta[name="csrf-token"]').attr('content');
                    let formData = new FormData(this);
                    console.log(formData);
                    $.ajax({
                        url: '{{ route('posts.create') }}', // Replace with your server endpoint
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                        'X-CSRF-TOKEN': csrfToken // Add CSRF token to headers
                    },
                        success: function(response) {
                            // Assuming the response contains the new product data
                            // addProductToTable(response);
                            // $('#productModal').modal('hide'); // Hide the modal
                            console.log(response)
                        },
                        error: function(xhr) {
                            // Handle error responses
                            $('#formMessages').html('<div class="alert alert-danger">Error: ' + xhr
                                .responseText + '</div>');
                        }
                    });
                });

                function addProductToTable(product) {
                    let row = `<tr>
                            <td>${product.name}</td>
                            <td>${product.description}</td>
                            <td><img src="${product.picture_url}" alt="Product Image" width="50"></td>
                            <td>${product.stock}</td>
                            <td>${product.price}</td>
                            <td>${product.status ? 'Featured' : 'Not Featured'}</td>
                        </tr>`;
                    $('#productTableBody').append(row);
                }
            });

            $('input[type="checkbox"]').each(function() {
                console.log($(this).val());
            });
        </script>
    </body>
    </html>

@endsection
