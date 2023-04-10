@extends('layouts.blank')

@section('css')
<style>
    #wrapper-login {
        background: #fff;
        height: 100vh;
        max-height: 100vh;
        position: relative;
    }

        @media (min-width: 1080px) {
            .left {
                flex: 1;
                width: 100%;
                max-width: 600px;
                position: relative;
                padding: 140px 4.2rem;                
            }
        }

        .right {
            flex: 1;
            width: 100%;
            background: linear-gradient(45deg, #bac6ff, #da91da);
        }

    .eye-login {
        top: 12px; 
        right: 13px; 
        color: #a4b1bc; 
        cursor: pointer;
    }
    .form-control {
        border: 1px solid #d6d7df;
    }
    .card{
        position: relative;
        background: #dbffd6;
    }

    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }

</style>   
@endsection

@section('content')

    <div class="card" style="width: 38rem;">
            <div class="card-body">
                <div id="wrapper-login" class="">
                    <div class="center">
                        <div class="login">
                            <h2 class="mb-3 fw-semibold text-center">Login To SKM Administrator</h2>
                            <div id="error-msg"></div>

                            <form method="post" id="form-login" spellcheck="false">
                            <div class="mb-5">
                                    <div class="d-flex justify-content-between">
                                        <label for="username" class="fw-semibold mb-1">Username</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="username" name="username" id="username" tabindex="2" class="form-control px-3 py-2 pe-5" maxlength="40" required />
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="d-flex justify-content-between">
                                        <label for="password" class="fw-semibold mb-1">Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control px-3 py-2 pe-5" maxlength="40" required />
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-success w-100 py-2">Login</button>
                                </div>
                                <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember_me">
                                    <label class="form-check-label" for="remember_me">
                                        Remember Me
                                    </label>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    <div>






@endsection

@section('script')
<script>    
    $(document).ready(function() {
        $('#form-login').on('submit', function(e) {
            e.preventDefault();
            
            $.ajax({
                url: "{{ url('/auth/login') }}",
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    username: $('#username').val(),
                    password: $('#password').val(),
                },
                success: function(response) {
                    $('#error-msg').html('');
                    window.location.href = "{{ url('/admin/dashboard') }}";
                },
                error: function(xhr, stat, err) {
                    if (xhr.status == 401) {
                        $('#error-msg').html(`<div class="alert alert-danger">
                            ${xhr.responseJSON.message}
                        </div>`);
                    }
                }
            });

        });
    });
</script>
@endsection