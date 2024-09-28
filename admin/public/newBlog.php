<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One-Stop-Vascular - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'navbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">CREATE BLOG</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-11">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success">CREATE CONTENT</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form style='color:black;' id="addblogform" action="addBlog.php" method="POST" enctype="multipart/form-data">

                                        <div class="mb-3">
                                            <label for="formFileTitleImage" class="form-label text-primary my-2">CHOOSE TITLE IMAGE</label>
                                            <input class="form-control" name="title_image" type="file" id="formFileTitleImage">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label text-primary">ENTER TITLE</label>
                                            <input type="text" class="form-control text-grey-900" name='title' id="exampleFormControlInput1" placeholder="Title" required>
                                        </div>

                                        <!-- Main Content Quill Editor -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label text-primary">ENTER MAIN CONTENT</label>
                                            <div id="mainEditor" style="height: 200px;"></div>
                                            <input name="main_content" id="mainContentData" style="display: none">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFileMainImage" class="form-label text-primary my-2">Choose Main Image</label>
                                            <input class="form-control" name="main_image" type="file" id="formFileMainImage" required>
                                        </div>

                                        <!-- Full Content Quill Editor -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label text-primary">ENTER FULL CONTENT</label>
                                            <div id="editor" style="height: 400px;"></div>
                                            <input name="full_content" id="formcontentdata" style="display: none">
                                        </div>

                                        <!-- Include the Quill library -->
                                        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
                                        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

                                        <!-- Initialize Quill editors for both Main Content and Full Content -->
                                        <script>
                                            const quillMain = new Quill('#mainEditor', {
                                                theme: 'snow',
                                                modules: {
                                                    toolbar: [
                                                        [{
                                                            'header': '1'
                                                        }, {
                                                            'header': '2'
                                                        }, {
                                                            'font': []
                                                        }],
                                                        [{
                                                            size: []
                                                        }],
                                                        ['bold', 'italic', 'underline', 'strike'],
                                                        ['link', 'blockquote', 'code-block'],
                                                        [{
                                                            'list': 'ordered'
                                                        }, {
                                                            'list': 'bullet'
                                                        }],
                                                        [{
                                                            'script': 'sub'
                                                        }, {
                                                            'script': 'super'
                                                        }],
                                                        [{
                                                            'indent': '-1'
                                                        }, {
                                                            'indent': '+1'
                                                        }],
                                                        [{
                                                            'direction': 'rtl'
                                                        }],
                                                        [{
                                                            'color': []
                                                        }, {
                                                            'background': []
                                                        }],
                                                        [{
                                                            'align': []
                                                        }],
                                                        ['clean']
                                                    ]
                                                },
                                                placeholder: 'Enter main content...',
                                            });

                                            const quillFull = new Quill('#editor', {
                                                theme: 'snow',
                                                modules: {
                                                    toolbar: [
                                                        [{
                                                            'header': '1'
                                                        }, {
                                                            'header': '2'
                                                        }, {
                                                            'font': []
                                                        }],
                                                        [{
                                                            size: []
                                                        }],
                                                        ['bold', 'italic', 'underline', 'strike'],
                                                        ['link', 'blockquote', 'code-block'],
                                                        [{
                                                            'list': 'ordered'
                                                        }, {
                                                            'list': 'bullet'
                                                        }],
                                                        [{
                                                            'script': 'sub'
                                                        }, {
                                                            'script': 'super'
                                                        }],
                                                        [{
                                                            'indent': '-1'
                                                        }, {
                                                            'indent': '+1'
                                                        }],
                                                        [{
                                                            'direction': 'rtl'
                                                        }],
                                                        [{
                                                            'color': []
                                                        }, {
                                                            'background': []
                                                        }],
                                                        [{
                                                            'align': []
                                                        }],
                                                        ['clean']
                                                    ]
                                                },
                                                placeholder: 'Compose full content...',
                                            });

                                            document.querySelector('#addblogform').onsubmit = function() {
                                                document.querySelector('#mainContentData').value = quillMain.root.innerHTML;
                                                document.querySelector('#formcontentdata').value = quillFull.root.innerHTML;
                                            };
                                        </script>

                                        <div class='row p-3'>
                                            <div class='col-xl-7 col-sm-2'></div>
                                            <button type='reset' class='btn btn-danger mx-1 my-2 col-xl-2'>Clear</button>
                                            <button type='submit' class='btn btn-success mx-1 my-2 col-xl-2'>Publish</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <div class="footer-widget__copyright">
                                <p class="mini_text" style="color:black"> ©2024 One-Stop-Vascular . All Rights Reserved. Designed &
                                    Developed by <a href="https://bhavicreations.com/" target="_blank" style="text-decoration: none;color:black">Bhavi
                                        Creations</a></p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>