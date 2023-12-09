<?php include "includes/head.php"; ?>
<!-- <?php include "includes/header.php"; ?> -->

<body>
    <div class="mainWrapper">
    <?php include "includes/aside.php"; ?>
        <main class="main">
            <div class="container-fluid w-100">
            <?php include "includes/header.php"; ?>
                <div class="row p-35 align-items-center">
                    <div class="col-lg-6">
                        <div class="tabs">
                            <div class="tabs-links">
                                <a href="#">
                                    <h4 >Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h4>
                                </a>
                                <a href="#">
                                    <h4 class='active'>subscription</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-primary ms-auto d-block">Update Plan</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="user-table">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="table-hd">Users</h3>
                                <label class="wrap d-flex" style="border-radius: 3.948px 0px 0px 3.948px">
                                    <h4 class="table-hdc">Sort</h4>
                                    <select name="Sort" id="filter" class="filter-2" style="border-radius: 0px 3.95px 3.95px 0px;">
                                        <option value="Default">Default</option>
                                        <option value="Yearly">Coustom</option>
                                    </select>
                                </label>
                                <input type="date" data-date="" value="" class="to-from">
                                <input type="date" data-date="" value="" class="to-from">
                                <label class="wrap">
                                    <select name="Monthly" id="filter" class="filter filter3">
                                        <option value="Monthly">Show</option>
                                        <option value="Yearly">Hide</option>
                                    </select>
                                </label>
                                <label for="" class="search-side">
                                    <input type="text" placeholder="search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </label>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="col">S.No</th>
                                        <th scope="col" class="col">Name<img src="./assets/images/arrows.svg" alt=""></th>
                                        <th scope="col" class="col">Email</th>
                                        <th scope="col" class="col">Pakage</th>
                                        <th scope="col" class="col">Take On<img src="./assets/images/arrows.svg" alt=""></th>
                                        <th scope="col" class="col">Status<img src="./assets/images/arrows.svg" alt=""></th>
                                        <th scope="col" class="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="user-name">Mark</td>
                                        <td>info@abc.com</td>
                                        <td>ADCF</td>
                                        <td>Nov 15, 2023</td>
                                        <td class="status"><span class="status-indicate"></span>Active</td>
                                        <td>
                                            <img src="./assets/images/more.svg" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="user-name">Mark</td>
                                        <td>info@abc.com</td>
                                        <td>ADCF</td>
                                        <td>Nov 15, 2023</td>
                                        <td class="status"><span class="status-indicate"></span>Active</td>
                                        <td>
                                            <img src="./assets/images/more.svg" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="user-name">Mark</td>
                                        <td>info@abc.com</td>
                                        <td>ADCF</td>
                                        <td>Nov 15, 2023</td>
                                        <td class="status"><span class="status-indicate"></span>Active</td>
                                        <td>
                                            <img src="./assets/images/more.svg" alt="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example" class="pt-5">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><img src="./assets/images/pagination-arrow.svg" alt=""> Prev 10</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next 10</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
        
        </script> -->
</body>
<?php include "includes/footer.php"; ?>