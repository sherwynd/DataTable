<?php require('components/head.inc.php'); ?>
<?php require('components/header/header.inc.php'); ?>
<?php require('components/navbar/navbar.inc.php'); ?>


<body>
    <div class="container">

       <!-- <div class="bubble">
            <span style="--i:11"></span>
            <span style="--i:12"></span>
            <span style="--i:21"></span>
            <span style="--i:10"></span>
            <span style="--i:14"></span>
            <span style="--i:23"></span>
            <span style="--i:18"></span>
            <span style="--i:16"></span>
            <span style="--i:19"></span>
            <span style="--i:20"></span>
            <span style="--i:22"></span>
            <span style="--i:25"></span>
            <span style="--i:18"></span>
            <span style="--i:21"></span>
            <span style="--i:15"></span>
            <span style="--i:13"></span>
            <span style="--i:26"></span>
            <span style="--i:17"></span>
            <span style="--i:13"></span>
            <span style="--i:28"></span>
            <span style="--i:11"></span>
            <span style="--i:12"></span>
            <span style="--i:21"></span>
            <span style="--i:10"></span>
            <span style="--i:14"></span>
            <span style="--i:23"></span>
            <span style="--i:18"></span>
            <span style="--i:16"></span>
            <span style="--i:19"></span>
            <span style="--i:20"></span>
            <span style="--i:22"></span>
            <span style="--i:25"></span>
            <span style="--i:18"></span>
            <span style="--i:21"></span>
            <span style="--i:15"></span>
            <span style="--i:13"></span>
            <span style="--i:26"></span>
            <span style="--i:17"></span>
            <span style="--i:13"></span>
            <span style="--i:28"></span>
       </div> -->

      <h1 class="heading-lv1">Inventory</h1>

      <div class="table-app" id="product-table-app">
        <div class="table-handler">
          <div class="table-handler-dropdown-cell">
            <div class="dropdown">
              <h3 class="dropdown-heading">
                <i class="fas fa-filter"></i> Brand
              </h3>
              <select
                class="select js-handle-table js-filter"
                id="filter-brand"
              >
                <option value="all">All</option>
              </select>
            </div>
          </div>

          <div class="table-handler-dropdown-cell">
            <div class="dropdown">
              <h3 class="dropdown-heading">
                <i class="fas fa-filter"></i> Category
              </h3>
              <select
                class="select js-handle-table js-filter"
                id="filter-category"
              >
                <option value="all">All</option>
              </select>
            </div>
          </div>

          <div class="table-handler-dropdown-cell">
            <div class="dropdown">
              <h3 class="dropdown-heading">
                <i class="fas fa-sort-amount-up-alt"></i> Sort by
              </h3>
              <select class="select js-handle-table" id="sort-by">
                <option value="none"> - </option>
                <option value="price">Price</option>
                <option value="created_at">Created at</option>
                <option value="updated_at">Updated at</option>
              </select>
            </div>
          </div>

          <div class="table-handler-dropdown-cell">
            <!-- TODO: add label and create style -->
            <input
              type="checkbox"
              class="js-handle-table"
              id="toggle"
              value="hiding-out-of-stock"
            />
            <label for="toggle">Hiding out-of-stock products</label>
          </div>
        </div>
        <!-- /.table-handler -->

        <div class="table-wrapper">
          <table class="table" id="table">
            <thead>
              <tr class="table-head">
                <th class="table-cell align-right">ID</th>
                <th class="table-cell align-left">Brand</th>
                <th class="table-cell align-left">Name</th>
                <th class="table-cell align-left">Category</th>
                <th class="table-cell align-right">Price</th>
                <th class="table-cell align-left">Status</th>
                <th class="table-cell align-left">Created at</th>
                <th class="table-cell align-left">Updated at</th>
              </tr>
            </thead>

            <tbody>
              <!-- Loop -->
            </tbody>
          </table>

          <div class="no-results hidden" id="no-results">
            <p class="no-results-message">
              No results found.
            </p>
          </div>
          <!-- /#no-results -->
        </div>
        <!-- /.table-wrapper -->
      </div>
      <!-- /.table-app -->
    </div>
    <!-- /.container -->
  
  </body>




  <?php require('components/footer/footer.inc.php'); ?>
