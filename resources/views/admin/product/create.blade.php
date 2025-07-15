@extends('admin.master')
@section('body')
    <section>
    <div class="container">
      <div class="row">
        <div class="col-">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Product</h3>
            </div>
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">

                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="ProductName">Product Name</label>
                    <input type="text" class="form-control" id="ProductName" name="Product_name" required>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="seoTitle">SEO Title</label>
                    <input type="text" class="form-control" id="seoTitle" name="seo_title">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="seoKeywords">SEO Keywords</label>
                    <input type="text" class="form-control" id="metaKeywords" name="seo_keywords">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="ProductImage">Product Image</label>
                    <input type="file" class="form-control" id="ProductImage" name="Product_image" accept="image/*">
                  </div>
                </div>
                <div class="form-group">
                  <label for="shortDesc">Short Description</label>
                  <textarea class="form-control" id="shortDesc" name="short_description" rows="2" maxlength="255"></textarea>
                </div>

                <div class="form-group">
                  <label for="summernote">Long Description</label>
                  <textarea id="summernote" name="long_description" class="form-control" rows="5"></textarea>
                </div>

              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </section>
@endsection