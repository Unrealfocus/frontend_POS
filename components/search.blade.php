@props(['url'])

<div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3">

      </div>
      <div class="col-lg-6 col-sm-6">
        <form action="{{ $url }}" method="POST" class="search-wrap">
            @csrf
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
        </form> <!-- search-wrap .end// -->
      </div> <!-- col.// -->
    </div> <!-- row.// -->
      </div> <!-- container.// -->