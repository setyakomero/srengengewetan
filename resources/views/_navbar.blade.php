            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fas fa-align-left"></i>
                        <!-- <span>Menu</span> -->
                    </button>

                    <div class="dropdown">
                        <div data-toggle="dropdown">
                            <style type="text/css">
                                .word-wrap {
                                    word-break: break-all;
                                    word-wrap: break-word;
                                    overflow-wrap: break-word;
                                }

                                #loader {
                                    display: none;
                                    position: fixed;
                                    top: 0;
                                    left: 0;
                                    right: 0;
                                    bottom: 0;
                                    width: 100%;
                                    background:
                                        rgba(0,0,0,0.75)
                                        url({{ asset('public/img/animation/loading.gif') }})
                                        no-repeat
                                        center
                                        center;
                                    z-index: 1060;
                                }

                                .nav-photo-profile{
                                    margin: auto;
                                    width: 50px;
                                    min-width: 50px;
                                    height: 50px;
                                    min-height: 50px;
                                    background-color: grey;
                                    border: 2px solid;
                                    text-align: center;
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                }
                            </style>
                            <a href="">
                                <div class="nav-photo-profile rounded-circle border-primary" style="background-image: url('{{ auth()->user()->photo != null ? asset('public/img/profile/').'/'.auth()->user()->photo : asset('public/img/profile/').'/default.png' }}');">
                                </div>
                                <!-- ▾ -->
                            </a>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="text-center mb-0 pb-0">
                                {{ auth()->user()->name }}
                            </h6>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item btn" onclick="_editProfile();">
                                <i class="fas fa-user-edit fa-fw"></i>
                                Edit
                            </button>
                            <a class="dropdown-item btn" href="{{ url('logout') }}">
                                <i class="fas fa-sign-out-alt fa-fw"></i>
                                Log Out
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

             <!-- MODAL -->
            <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        
                    </div>
                </div>
            </div>
            <!-- END MODAL -->

            <div id="loader"></div>

            <script type="text/javascript">
                var spinner = $('#loader');

                function _editProfile(){
                    $.ajax({
                        type: "GET",
                        url: "{{ url('profile/edit') }}",
                        data: "JSON",
                        beforeSend: function() {
                            spinner.show();
                        },
                        success: function(data, textStatus, jqXHR) {
                            $('.modal-content').html(data);
                            spinner.hide();
                            $('#modal').modal('show');
                        },
                        error: function(event, request, settings){
                            $(".modal-content").html(
                                '<div class="modal-header">'+
                                    '<h5 class="modal-title">Something went wrong!</h5>'+
                                    '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                    '<span aria-hidden="true">&times;</span>'+
                                    '</button>'+
                                '</div>'
                            );
                            spinner.hide();
                            $('#modal').modal('show');
                        }
                    });
                }
            </script>