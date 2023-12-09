<?php include "includes/head.php"; ?>
<!-- <?php include "includes/header.php"; ?> -->

<body>
    <div class="mainWrapper">
        <?php include "includes/aside.php"; ?>
        <main class="main">
            <div class="container-fluid w-100">
                <?php include "includes/header.php"; ?>
                <div class="row p-35">
                    <div class="col-12">
                        <div class="tabs">
                            <div class="tabs-links">
                                <a href="#">
                                    <h3 class='dashboard-hd'>Dashboard <span><i class="fa-solid fa-chevron-right"></i></span></h3>
                                </a>
                                <a href="#">
                                    <h4>Profile</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="userDetailContent">
                    <div class="row">
                        <div class="col-12">
                            <div class="user-cover user-cover2">
                                <div class="coverWrap">
                                    <img src="./assets/images/userDtail-cover.png" alt="" class="w-100">
                                    <button type="button" class="btn btn-primary edit-cover-btn">Edit Cover Photo</button>
                                </div>
                                <div class="profileWrap">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <div class="position-relative">
                                                <div class="user-profile user-profile2">
                                                    <img src="./assets/images/user-profile.png" alt="">

                                                </div>
                                                <span class="account-detail">Account Details</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="button" class="btn btn-primary">Edit Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-40">
                        <div class="col-lg-6 col-sm-12">
                            <div class="user-form">
                                <form action="#">
                                    <div class="animated-input">
                                        <input type="text" required>
                                        <label>UserName</label>
                                    </div>
                                    <div class="animated-input eye">
                                        <input type="text" required>
                                        <label>Email</label>
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <div class="animated-input eye">
                                        <input type="text" required>
                                        <label>Password</label>
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<?php include "includes/footer.php"; ?>