@extends('admin.dashboard')

@section('content')
    <!-- content header -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid col-md-8">
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <form method="POST" class="/users" action="#">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="id_user">Seller</label>
                      <select class="form-control select2 select2-hidden-accessible" name="id_user" style="width: 100%;" tabindex="-1" aria-hidden="true" required autofocus>
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                      <span class="select2 select2-container select2-container--default select2-container--below select2-container--open" dir="ltr" style="width: 100%;">
                        <span class="selection">
                          <span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-labelledby="select2-vq33-container" aria-owns="select2-vq33-results" aria-activedescendant="select2-vq33-result-v3h9-Delaware">
                            <span class="select2-selection__rendered" id="select2-vq33-container" title="Alabama">Alabama</span>
                              <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b>
                              </span>
                            </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true">
                        </span>
                      </span>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" name="product_name" value="" required autofocus placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" value="" required autofocus 
                        placeholder="Enter email"></textarea>
                    </div>
                    <div class="form-group col-5">
                      <label for="price">Price</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp</span>
                        </div>
                        <input type="number" class="form-control" name="price" value="" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="variant">Variant</label>
                        <input type="text" class="form-control" name="variant" value="" required autofocus>
                    </div>
                    <div class="form-group col-3">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock" value="" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="photo_user">Photo Product</label>
                        <input type="text" class="form-control" name="photo_user" value="" required autofocus name">
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                    <!-- <div class="card-footer"> -->
                  <button type="submit" name="submit" value="Create" class="btn btn-success pull-right">
                  Submit
                <!-- </div> -->

                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          <!-- </div>
          <!-- /.card-body -->

        </div> 
        <!-- /.card -->
      </div>
    </section>
@endsection
