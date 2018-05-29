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
<!--
<div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--open" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-labelledby="select2-fsun-container" aria-owns="select2-fsun-results" aria-activedescendant="select2-fsun-result-q2mj-Alabama"><span class="select2-selection__rendered" id="select2-fsun-container" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                /!-->
                    <div class="form-group">
                        <label for="id_user">id_user</label>
                        <input type="text" class="form-control" name="id_user" id="id_user" placeholder="id_user" required>
                    </div>

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" align="middle" class="form-control" name="product_name" value="" required autofocus id="product_name" placeholder="Enter product's name">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" value="" required autofocus id="description" placeholder="Enter description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="price" required>
                    </div>

                    <!-- <div class="form-group">
                        <label for="photo_product">photo_product</label>
                        <input type="text" class="form-control" name="photo_product" id="photo_product" placeholder="variant" required>
                    </div> -->

                    <div class="form-group">
                        <label for="photo_product" class="col-md-4 control-label">photo_product</label>
                        <div class="col-md-6">
                            <input id="photo_product" type="file" class="form-control" name="photo_product"  required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="stock">stock</label>
                        <input type="text" class="form-control" name="stock" id="stock" placeholder="stock" required>
                    </div>



                    <!-- <div class="form-group">
                        <label for="gender">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="radio" value="Female">
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="radio" value="Male">
                            <label class="form-check-label">Male</label>
                        </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" rows="3" name="address"
                        placeholder="Enter address..." required autofocus></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Phone Number</label>
                        <input type="text" align="middle" class="form-control" name="no_telp" value="" required autofocus id="name" placeholder="Enter phone number">
                    </div> -->

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
