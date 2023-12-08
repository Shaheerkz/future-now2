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
                        <div class="n-head">
                            <p class="d-flex align-items-center"><img src="./assets/images/bell-icon.png" class="w-100" style="max-width: 20px; height: 20px;" alt=""> <strong class="strong ms-5 me-2">Turn on push notifications</strong> to know when your video has been watched and interacted with.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="notification">
                            <h2>Notification</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">Shaheer</div>
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