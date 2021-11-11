<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">
    <title>School - Registration </title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
  </head>
  <body class="hold-transition theme-primary bg-gradient-primary">
    <div class="container h-p100">
      <div class="row align-items-center justify-content-md-center h-p100">
        <div class="col-12">
          <div class="row justify-content-center no-gutters">
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-white">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-lg-8 col-md-6 col-12">
              <div class="content-top-agile p-10">
                <h2 class="text-white">Get started with Us</h2>
                <p class="text-white-50">Register a new membership</p>
              </div>
              <div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                <form method="POST" action="{{ route('register') }}"> @csrf <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent text-white">
                          <i class="ti-user"></i>
                        </span>
                      </div>
                      <input type="text"  id="name" class="form-control pl-15 bg-transparent text-white plc-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ener Your Full Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent text-white">
                          <i class="ti-email"></i>
                        </span>
                      </div>
                      <input type="email" id="email" class="form-control pl-15 bg-transparent text-white plc-white" name="email" name="Enter Your Email" :value="old('email')" required placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent text-white">
                          <i class="ti-lock"></i>
                        </span>
                      </div>
                      <input type="password"  id="password" class="form-control pl-15 bg-transparent text-white plc-white" name="password" required autocomplete="new-password" placeholder="Enter Your Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent text-white">
                          <i class="ti-lock"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control pl-15 bg-transparent text-white plc-white" name="password_confirmation" required autocomplete="new-password" id="password_confirmation" placeholder="Confirm Password">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="checkbox text-white">
                        <input type="checkbox" name="terms" id="terms">
                        <label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning">
                            <b>Terms</b>
                          </a>
                        </label> @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature()) <div class="mt-4">
                          <x-jet-label for="terms">
                            <div class="flex items-center">
                              <div class="ml-2"> {!! __('I agree to the :terms_of_service and :privacy_policy', [ 'terms_of_service' => ' <a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>', 'privacy_policy' => ' <a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>', ]) !!} </div>
                            </div>
                          </x-jet-label>
                        </div> @endif
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-info btn-rounded margin-top-10">SIGN IN</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
                <div class="text-center text-white">
                  <p class="mt-20">- Register With -</p>
                  <p class="gap-items-2 mb-20">
                    <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </p>
                </div>
                <div class="text-center">
                  <p class="mt-15 mb-0 text-white">Already have an account? <a href="auth_login.html" class="text-danger ml-5"> Sign In</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
  </body>
</html>
