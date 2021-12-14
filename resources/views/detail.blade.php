@extends('layouts.main')

@section('container')
<div class="detail pt-5 mt-5">
<div data-reflow-type="product mt-5">
  <div class="reflow-product">
      <div class="ref-media">
          <div class="ref-preview"><img class="ref-image active" src="https://cdn.bootstrapstudio.io/products/product-page-3_md.jpg" data-reflow-preview-type="image" /><img class="ref-image" src="https://cdn.bootstrapstudio.io/products/product-page-1_md.jpg" data-reflow-preview-type="image" /><img class="ref-image" src="https://cdn.bootstrapstudio.io/products/product-page-4_md.jpg" data-reflow-preview-type="image" /><img class="ref-image" src="https://cdn.bootstrapstudio.io/products/product-page-2_md.jpg" data-reflow-preview-type="image" /></div>
          <div class="ref-thumbnails">
              <div class="ref-thumbnail">
                  <div class="ref-image active" data-reflow-preview-type="image" data-reflow-preview="undefined" style="background-image: url('https://cdn.bootstrapstudio.io/products/product-page-3_sm.jpg');"></div>
              </div>
              <div class="ref-thumbnail">
                  <div class="ref-image" data-reflow-preview-type="image" data-reflow-preview="undefined" style="background-image: url('https://cdn.bootstrapstudio.io/products/product-page-1_sm.jpg');"></div>
              </div>
              <div class="ref-thumbnail">
                  <div class="ref-image" data-reflow-preview-type="image" data-reflow-preview="undefined" style="background-image: url('https://cdn.bootstrapstudio.io/products/product-page-4_sm.jpg');"></div>
              </div>
              <div class="ref-thumbnail">
                  <div class="ref-image" data-reflow-preview-type="image" data-reflow-preview="undefined" style="background-image: url('https://cdn.bootstrapstudio.io/products/product-page-2_sm.jpg');"></div>
              </div>
          </div>
      </div>
      <div class="ref-product-data">
          <h2 class="ref-name">Awesome Product</h2><strong class="ref-price">$168.73</strong><span data-reflow-type="add-to-cart" data-reflow-product="558773655" data-reflow-variant="746363596_s">
              <div class="ref-product-controls">
                  <div class="ref-variant"><label><span>Size</span><select class="ref-field-variants" name="variant-state" required>
                              <option value="746363596_s">S</option>
                              <option value="746363596_m">M</option>
                              <option value="746363596_l">L</option>
                          </select></label></div>
                  <div class="ref-quantity-widget">
                      <div class="ref-decrease">-</div><input type="text" value="1" />
                      <div class="ref-increase">+</div>
                  </div><a class="ref-button" href="#">Add to Cart</a>
              </div>
          </span>
          <div class="ref-description">
              <p>Quam dui aliquet a ac, <b>commodo duis</b> sodales class tristique cras. Pharetra nullam <i>cubilia</i> sagittis molestie quam, congue nulla fermentum consequat vestibulum.</p>
              <ul>
                  <li>Aliquam eleifend</li>
                  <li>Tincidunt class</li>
                  <li>Aenean potenti</li>
              </ul>
              <p>Mattis donec ad aliquet cursus. Risus praesent erat id risus. Dapibus torquent metus pharetra platea amet, ultrices feugiat. At tortor metus taciti facilisis, quis curae. Malesuada enim porta ut in.</p>
          </div>
      </div>
  </div>
</div>
<section class="testimonials-clean">
  <div class="container">
      <div class="intro">
          <h2 class="text-center">Testimonials </h2>
          <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
      </div>
      <div class="row people">
          <div class="col-md-6 col-lg-4 item">
              <div class="box">
                  <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
              </div>
              <div class="author"><img class="rounded-circle" src="{{ ('assets/img/3.jpg') }}" />
                  <h5 class="name">Ben Johnson</h5>
                  <p class="title">CEO of Company Inc.</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 item">
              <div class="box">
                  <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
              </div>
              <div class="author"><img class="rounded-circle" src="{{ ('assets/img/2.jpg') }}" />
                  <h5 class="name">Carl Kent</h5>
                  <p class="title">Founder of Style Co.</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 item">
              <div class="box">
                  <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
              </div>
              <div class="author"><img class="rounded-circle" src="{{ ('assets/img/1.jpg') }}" />
                  <h5 class="name">Emily Clark</h5>
                  <p class="title">Owner of Creative Ltd.</p>
              </div>
          </div>
      </div>
  </div>
</section>
</div>

@endsection