<x-layout>
    <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>Product list</h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">
                        <svg class="stroke-icon">
                          <use
                            href="{{asset('')}}assets/svg/icon-sprite.svg#stroke-home"
                          ></use></svg
                      ></a>
                    </li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item active">Product list</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="list-product-header">
                      <div>
                        <div class="light-box">
                          <a
                            data-bs-toggle="collapse"
                            href="#collapseProduct"
                            role="button"
                            aria-expanded="false"
                            aria-controls="collapseProduct"
                            ><i
                              class="filter-icon show"
                              data-feather="filter"
                            ></i
                            ><i class="icon-close filter-close hide"></i
                          ></a>
                        </div>
                        <a class="btn btn-primary" href="add-products.html"
                          ><i class="fa fa-plus"></i>Add Product</a
                        >
                      </div>
                      <div class="collapse" id="collapseProduct">
                        <div class="card card-body list-product-body">
                          <div
                            class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3"
                          >
                            <div class="col">
                              <select
                                class="form-select"
                                aria-label="Default select example"
                              >
                                <option selected="">Choose Product</option>
                                <option value="1">Apple iphone 13 Pro</option>
                                <option value="2">Wood Chair</option>
                                <option value="3">
                                  M185 Compact Wireless Mouse
                                </option>
                              </select>
                            </div>
                            <div class="col">
                              <select
                                class="form-select"
                                aria-label="Default select example"
                              >
                                <option selected="">Choose Category</option>
                                <option value="1">Furniture</option>
                                <option value="2">Smart Gadgets</option>
                                <option value="3">Electrics</option>
                              </select>
                            </div>
                            <div class="col">
                              <select
                                class="form-select"
                                aria-label="Default select example"
                              >
                                <option selected="">Choose Sub Category</option>
                                <option value="1">Smart Phones</option>
                                <option value="2">Smart Watches</option>
                                <option value="3">Wireless headphone</option>
                              </select>
                            </div>
                            <div class="col">
                              <select
                                class="form-select"
                                aria-label="Default select example"
                              >
                                <option selected="">Status</option>
                                <option value="1">Sold Out</option>
                                <option value="2">In Stock</option>
                                <option value="3">Pre Order</option>
                                <option value="4">Limited Stock</option>
                              </select>
                            </div>
                            <div class="col">
                              <select
                                class="form-select"
                                aria-label="Default select example"
                              >
                                <option selected="">Price</option>
                                <option value="1">56000.00</option>
                                <option value="2">19000.00</option>
                                <option value="3">10000.00</option>
                                <option value="3">15000.00</option>
                                <option value="3">99000.00</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-product">
                      <table class="table" id="project-status">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check">
                                <input
                                  class="form-check-input checkbox-primary"
                                  type="checkbox"
                                />
                              </div>
                            </th>
                            <th>
                              <span class="f-light f-w-600">Product Name</span>
                            </th>
                            <th><span class="f-light f-w-600">SKU </span></th>
                            <th>
                              <span class="f-light f-w-600">Category</span>
                            </th>
                            <th><span class="f-light f-w-600">Price</span></th>
                            <th><span class="f-light f-w-600">Qty</span></th>
                            <th><span class="f-light f-w-600">Status</span></th>
                            <th><span class="f-light f-w-600">Rating</span></th>
                            <th><span class="f-light f-w-600">Action</span></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check">
                                <input
                                  class="form-check-input checkbox-primary"
                                  type="checkbox"
                                />
                              </div>
                            </td>
                            <td>
                              <div class="product-names">
                                <div class="light-product-box">
                                  <img
                                    class="img-fluid"
                                    src="{{asset('')}}assets/images/ecommerce/product-categories/laptop.png"
                                    alt="laptop"
                                  />
                                </div>
                                <p>Apple Desktop 2024</p>
                              </div>
                            </td>
                            <td>
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td>
                              <p class="f-light">Laptops</p>
                            </td>
                            <td>
                              <p class="f-light">56000.00</p>
                            </td>
                            <td>
                              <p class="f-light">13</p>
                            </td>
                            <td>
                              <span class="badge badge-light-secondary"
                                >Sold Out</span
                              >
                            </td>
                            <td>
                              <div class="rating">
                                <i class="fa fa-star txt-warning"></i
                                ><i class="fa fa-star txt-warning"></i
                                ><i class="fa fa-star txt-warning"></i
                                ><i class="fa fa-star txt-warning"></i
                                ><i class="fa fa-star f-light"></i>
                              </div>
                            </td>
                            <td>
                              <div class="product-action">
                                <a href="add-products.html">
                                  <svg>
                                    <use
                                      href="{{asset('')}}assets/svg/icon-sprite.svg#edit-content"
                                    ></use></svg
                                ></a>
                                <svg>
                                  <use
                                    href="{{asset('')}}assets/svg/icon-sprite.svg#trash1"
                                  ></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check">
                                <input
                                  class="form-check-input checkbox-primary"
                                  type="checkbox"
                                />
                              </div>
                            </td>
                            <td>
                              <div class="product-names">
                                <div class="light-product-box">
                                  <img
                                    class="img-fluid"
                                    src="{{asset('')}}assets/images/ecommerce/product-categories/phone.png"
                                    alt="phone"
                                  />
                                </div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td>
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td>
                              <p class="f-light">Smart Phones</p>
                            </td>
                            <td>
                              <p class="f-light">19000.00</p>
                            </td>
                            <td>
                              <p class="f-light">48</p>
                            </td>
                            <td>
                              <span class="badge badge-light-primary"
                                >In Stock</span
                              >
                            </td>
                            <td>
                              <div class="rating">
                                <i class="fa fa-star txt-warning"></i
                                ><i class="fa fa-star txt-warning"></i
                                ><i class="fa fa-star txt-warning"></i
                                ><i class="fa fa-star f-light"></i
                                ><i class="fa fa-star f-light"></i>
                              </div>
                            </td>
                            <td>
                              <div class="product-action">
                                <a href="add-products.html">
                                  <svg>
                                    <use
                                      href="{{asset('')}}assets/svg/icon-sprite.svg#edit-content"
                                    ></use></svg
                                ></a>
                                <svg>
                                  <use
                                    href="{{asset('')}}assets/svg/icon-sprite.svg#trash1"
                                  ></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
</x-layout>