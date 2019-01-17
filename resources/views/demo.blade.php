@extends('layouts.mainlayout')
@section('content')

<div class="container">
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Browse Popular
                <small>Resources</small>
            </h1>

<!-- Blog Post -->
<div class="card mb-4">
    <div class="card-body card h-100">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-9">
                <h2 class="card-title">Post Title</h2>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal" >Read More &rarr;</a>
            </div>
        </div>
        <p class="card-text d-flex align-items-stretch">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis
            animi vero voluptate voluptatibus possimus, veniam magni quis! Lorem ipsum dolor sit
            amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis
            soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus
            possimus, veniam magni quis!</p>
    </div>
    <div class="card-footer text-muted d-none d-sm-block">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
    </div>
</div>
<!-- /Blog Post -->

<!-- Edit Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header badge-info">
                <div class="col-md-8">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input for="title"autofocus type="text" class="form-control form-title align-content-center"
                                   id="wh" placeholder="Post Title ">
                        </div>
                    </form>
                </div>
                <div class="com-md-4">
                    <i class="fa fa-pencil"></i>
                    <div id="demo" class="">
                        <a href="#"><i class="fa fa-paper-plane" title="Share" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                        <a href="#"><i class="fa fa-heart" title="Love It" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                        <a href="#"><i class="fa fa-wrench" title="Edit" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                        <a href="#"><i class="fa fa-trash" title="Delite" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                    </div>
                    <button type="button" class="btn btn-info btn-sm"
                            data-toggle="toggle" data-target="#demo">
                        <i class="fa fa-cog"></i>
                    </button>
                </div>
                <script>
                    $("[data-toggle='toggle']").click(function () {
                        var selector = $(this).data("target");
                        $(selector).toggleClass('in');
                    });
                </script>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    {{ csrf_field() }} <!-- we are using a Laravel helper to make sure our form has unique token to prevent cross site forgery. -->
                    <div>
                        <textarea for="content" cols="80" rows="10" id="content" name="content"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('content');
                        </script>
                    </div>
                </form>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input for="url" type="text" class="form-control align-content-center" style="color: #005cbf"
                           placeholder="Url">
                </div>
            </form>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-1">
                        <a href="#"><i class="fa fa-tags fa-lg" id="ci" title="Tags" data-toggle="tooltip"
                                       style="color: #16a085;"></i></a>
                    </div>
                    <div class="col-md-11">
                        <div class="chips chips-initial input-field">
                            <!--<div class="chip">NL78545645
                                <span class="closebtn" >&times;</span>
                            </div>-->
                            <input for="tags" type="text" class="chip-input" id="chip-input">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('#chip-input').attr('disabled', true);
                });
            </script>
            <script>
                $(document).ready(function () {
                    $("#ci").click(function () {
                    $('#chip-input').prop("disabled", false);
                    $('#chip-input').focus();
                    });
                });
            </script>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-1">
                        <div>
                            <img class="round" width="35" height="35" avatar="Female Bootcamp">
                        </div>
                    </div>
                    <div class="col-md-9" style="display: flex; align-items: center">
                        Posted on January 1, 2017 by
                        <a href="#" style="color: #16a085">Start Bootstrap</a>
                    </div>
                    <div class="com-md-2">
                        <a href="">
                            <button type="button" class="btn btn-info" data-dismiss="modal">
                                Post
                            </button>
                        </a>
                    </div>
                            @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Modal -->


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">More</a>
                </li>
            </ul>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            @include('layouts.partials.searchWidget')
            <!-- Create Widget -->
            @include('layouts.partials.createWidget')
            <!-- Categories Widget -->
            @include('layouts.partials.categoriesWidget')
        <!-- /Sidebar Widgets Column -->

        </div>
    </div>
</div>

@endsection
