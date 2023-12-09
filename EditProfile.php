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
                                    <h4>Edit Profile</h4>
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
                                </div>
                                <div class="profileWrap">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <div class="position-relative">
                                                <div class="user-profile user-profile2">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview" style="background-image: url('./assets/images/user-profile.png');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="account-detail">Account</span>
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
                                    <input type="submit" value="Update" class="btn btn-primary update-btn">
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
<script src="assets/js/main.js"></script>