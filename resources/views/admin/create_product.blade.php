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
                <form method="POST" class="/products" action="" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label class="control-label">Seller</label>
                            <select class="form-control select2" data-placeholder="Select a State"
                                style="width: 100%;" name="id_user" id="id_user" required>
                                <option value="" disabled selected hidden>Select seller</option>
                              @foreach($users as $user)
                              <option value="{{$user->id}}">{{$user->name}} </option>
                              @endforeach
                            </select>
                    </div>
                  
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" align="middle" class="form-control" name="product_name" value="" required autofocus id="product_name" placeholder="Enter product's name">
                    </div>

                    <div class="form-group">
                      <label class="control-label">Category</label>
                            <select class="form-control select2" data-placeholder="Select category"
                                style="width: 100%;" name="category" id="category" required>
                                <option value="" disabled selected hidden>Select category</option>
                                <option value="Umum">Umum</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Teknonogi">Teknologi</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" value="" required autofocus id="description" placeholder="Enter description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" id="price" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="photo_product" class="col-md-4 control-label">Photo Product</label>
                        <div class="col-md-6">
                            <input id="photo_product" type="file" class="form-control" name="photo_product"  required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock" id="stock" min="1" value="1" required>
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
