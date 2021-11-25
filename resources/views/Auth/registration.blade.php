@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><ruby>
                            登録 <rp></rp>
                            <rt>とうろく</rt>
                            <rp></rp>
                        </ruby> Register</div>
                    <div class="card-body">

                        <head>
                            <script>
                        < meta name = "viewport" content = "width=device-width, initial-scale=1" >
                        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
                        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

                        </head>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                        <script>
                        $(document).ready(function(){
@if($errors->first('username'))
  $("input[name='username']").focus();
@elseif($errors->first('password'))
  $("input[name='password']").focus();
  @elseif($errors->first('email'))
  $("input[name='email']").focus();
  @elseif($errors->first('firstname'))
  $("input[name='firstname']").focus();
  @elseif($errors->first('surname'))
  $("input[name='surname']").focus();
  @elseif($errors->first('city'))
  $("input[name='city']").focus();
  @elseif($errors->first('country'))
  $("input[name='country']").focus();
@endif
});
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">

                        </script>
                        </head>
                        <form action="{{ route('register.post') }}" role="form" data-toggle="validator" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right"><ruby>
                                        登録名<rp></rp>
                                        <rt>とうろくめい</rt>
                                        <rp></rp>
                                    </ruby> Username <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    パスワード Password
                                    <small id="password" class="form-text text-muted"> 6 <ruby> 桁以上<rp></rp>
                                            <rt> けたいじょう</rt>
                                            <rp></rp>
                                        </ruby> 6 digits or more</small></label>

                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" data-error=" email address is invalid" required autofocus>

                                    @if ($errors->has('password'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><ruby>e-mail アドレス　</ruby>e-mail address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" data-error="Bruh, that email address is invalid" required autofocus>
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong></span>
                                    @endif
                                </div>
                            </div>







                            <div class="form-group row">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right"><ruby>名<rp></rp>
                                        <rt>めい</rt>
                                    </ruby> Firstname<small class="form-text text-muted">アルファベットで in alphabet</small></label>
                                <div class="col-md-6">
                                    <input type="text" id="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
                                    @if ($errors->has('firstname'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right"><ruby>姓<rp></rp>
                                        <rt>せい</rt>
                                    </ruby> Surname <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                                <div class="col-md-6">
                                    <input type="text" id="surname" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
                                    @if ($errors->has('surname'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right"><ruby>
                                        都市<rp></rp>
                                        <rt>とし</rt>
                                        <rp></rp>
                                    </ruby>/
                                    <ruby>
                                        町<rp>(</rp>
                                        <rt>まち</rt>
                                        <rp>)</rp>
                                    </ruby>
                                    City/town <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                                <div class="col-md-6">
                                    <input type="text" id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                                    @if ($errors->has('city'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <label for="country" class="col-md-4 col-form-label text-md-right"><ruby>
                                        国<rp>(</rp>
                                        <rt>くに</rt>
                                        <rp>)</rp>
                                    </ruby> Country <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                                <div class="col-md-6">
                                    <input list="country" name="country" class="countryTextBox"/>
                                    <datalist id="country">
                                        <option value="Afghanistan" />
                                        <option value="Albania" />
                                        <option value="Algeria" />
                                        <option value="American Samoa" />
                                        <option value="Andorra" />
                                        <option value="Angola" />
                                        <option value="Anguilla" />
                                        <option value="Antarctica" />
                                        <option value="Antigua and Barbuda" />
                                        <option value="Argentina" />
                                        <option value="Armenia" />
                                        <option value="Aruba" />
                                        <option value="Australia" />
                                        <option value="Austria" />
                                        <option value="Azerbaijan" />
                                        <option value="Bahamas" />
                                        <option value="Bahrain" />
                                        <option value="Bangladesh" />
                                        <option value="Barbados" />
                                        <option value="Belarus" />
                                        <option value="Belgium" />
                                        <option value="Belize" />
                                        <option value="Benin" />
                                        <option value="Bermuda" />
                                        <option value="Bhutan" />
                                        <option value="Bolivia" />
                                        <option value="Bosnia and Herzegovina" />
                                        <option value="Botswana" />
                                        <option value="Bouvet Island" />
                                        <option value="Brazil" />
                                        <option value="British Indian Ocean Territory" />
                                        <option value="Brunei Darussalam" />
                                        <option value="Bulgaria" />
                                        <option value="Burkina Faso" />
                                        <option value="Burundi" />
                                        <option value="Cambodia" />
                                        <option value="Cameroon" />
                                        <option value="Canada" />
                                        <option value="Cape Verde" />
                                        <option value="Cayman Islands" />
                                        <option value="Central African Republic" />
                                        <option value="Chad" />
                                        <option value="Chile" />
                                        <option value="China" />
                                        <option value="Christmas Island" />
                                        <option value="Cocos (Keeling) Islands" />
                                        <option value="Colombia" />
                                        <option value="Comoros" />
                                        <option value="Congo" />
                                        <option value="Congo, The Democratic Republic of The" />
                                        <option value="Cook Islands" />
                                        <option value="Costa Rica" />
                                        <option value="Cote D'ivoire" />
                                        <option value="Croatia" />
                                        <option value="Cuba" />
                                        <option value="Cyprus" />
                                        <option value="Czech Republic" />
                                        <option value="Denmark" />
                                        <option value="Djibouti" />
                                        <option value="Dominica" />
                                        <option value="Dominican Republic" />
                                        <option value="Ecuador" />
                                        <option value="Egypt" />
                                        <option value="El Salvador" />
                                        <option value="Equatorial Guinea" />
                                        <option value="Eritrea" />
                                        <option value="Estonia" />
                                        <option value="Ethiopia" />
                                        <option value="Falkland Islands (Malvinas)" />
                                        <option value="Faroe Islands" />
                                        <option value="Fiji" />
                                        <option value="Finland" />
                                        <option value="France" />
                                        <option value="French Guiana" />
                                        <option value="French Polynesia" />
                                        <option value="French Southern Territories" />
                                        <option value="Gabon" />
                                        <option value="Gambia" />
                                        <option value="Georgia" />
                                        <option value="Germany" />
                                        <option value="Ghana" />
                                        <option value="Gibraltar" />
                                        <option value="Greece" />
                                        <option value="Greenland" />
                                        <option value="Grenada" />
                                        <option value="Guadeloupe" />
                                        <option value="Guam" />
                                        <option value="Guatemala" />
                                        <option value="Guinea" />
                                        <option value="Guinea-bissau" />
                                        <option value="Guyana" />
                                        <option value="Haiti" />
                                        <option value="Heard Island and Mcdonald Islands" />
                                        <option value="Holy See (Vatican City State)" />
                                        <option value="Honduras" />
                                        <option value="Hong Kong" />
                                        <option value="Hungary" />
                                        <option value="Iceland" />
                                        <option value="India" />
                                        <option value="Indonesia" />
                                        <option value="Iran, Islamic Republic of" />
                                        <option value="Iraq" />
                                        <option value="Ireland" />
                                        <option value="Israel" />
                                        <option value="Italy" />
                                        <option value="Jamaica" />
                                        <option value="Japan" />
                                        <option value="Jordan" />
                                        <option value="Kazakhstan" />
                                        <option value="Kenya" />
                                        <option value="Kiribati" />
                                        <option value="Korea, Democratic People's Republic of" />
                                        <option value="Korea, Republic of" />
                                        <option value="Kuwait" />
                                        <option value="Kyrgyzstan" />
                                        <option value="Lao People's Democratic Republic" />
                                        <option value="Latvia" />
                                        <option value="Lebanon" />
                                        <option value="Lesotho" />
                                        <option value="Liberia" />
                                        <option value="Libyan Arab Jamahiriya" />
                                        <option value="Liechtenstein" />
                                        <option value="Lithuania" />
                                        <option value="Luxembourg" />
                                        <option value="Macao" />
                                        <option value="Macedonia, The Former Yugoslav Republic of" />
                                        <option value="Madagascar" />
                                        <option value="Malawi" />
                                        <option value="Malaysia" />
                                        <option value="Maldives" />
                                        <option value="Mali" />
                                        <option value="Malta" />
                                        <option value="Marshall Islands" />
                                        <option value="Martinique" />
                                        <option value="Mauritania" />
                                        <option value="Mauritius" />
                                        <option value="Mayotte" />
                                        <option value="Mexico" />
                                        <option value="Micronesia, Federated States of" />
                                        <option value="Moldova, Republic of" />
                                        <option value="Monaco" />
                                        <option value="Mongolia" />
                                        <option value="Montserrat" />
                                        <option value="Morocco" />
                                        <option value="Mozambique" />
                                        <option value="Myanmar" />
                                        <option value="Namibia" />
                                        <option value="Nauru" />
                                        <option value="Nepal" />
                                        <option value="Netherlands" />
                                        <option value="Netherlands Antilles" />
                                        <option value="New Caledonia" />
                                        <option value="New Zealand" />
                                        <option value="Nicaragua" />
                                        <option value="Niger" />
                                        <option value="Nigeria" />
                                        <option value="Niue" />
                                        <option value="Norfolk Island" />
                                        <option value="Northern Mariana Islands" />
                                        <option value="Norway" />
                                        <option value="Oman" />
                                        <option value="Pakistan" />
                                        <option value="Palau" />
                                        <option value="Palestinian Territory, Occupied" />
                                        <option value="Panama" />
                                        <option value="Papua New Guinea" />
                                        <option value="Paraguay" />
                                        <option value="Peru" />
                                        <option value="Philippines" />
                                        <option value="Pitcairn" />
                                        <option value="Poland" />
                                        <option value="Portugal" />
                                        <option value="Puerto Rico" />
                                        <option value="Qatar" />
                                        <option value="Reunion" />
                                        <option value="Romania" />
                                        <option value="Russian Federation" />
                                        <option value="Rwanda" />
                                        <option value="Saint Helena" />
                                        <option value="Saint Kitts and Nevis" />
                                        <option value="Saint Lucia" />
                                        <option value="Saint Pierre and Miquelon" />
                                        <option value="Saint Vincent and The Grenadines" />
                                        <option value="Samoa" />
                                        <option value="San Marino" />
                                        <option value="Sao Tome and Principe" />
                                        <option value="Saudi Arabia" />
                                        <option value="Senegal" />
                                        <option value="Serbia and Montenegro" />
                                        <option value="Seychelles" />
                                        <option value="Sierra Leone" />
                                        <option value="Singapore" />
                                        <option value="Slovakia" />
                                        <option value="Slovenia" />
                                        <option value="Solomon Islands" />
                                        <option value="Somalia" />
                                        <option value="South Africa" />
                                        <option value="South Georgia and The South Sandwich Islands" />
                                        <option value="Spain" />
                                        <option value="Sri Lanka" />
                                        <option value="Sudan" />
                                        <option value="Suriname" />
                                        <option value="Svalbard and Jan Mayen" />
                                        <option value="Swaziland" />
                                        <option value="Sweden" />
                                        <option value="Switzerland" />
                                        <option value="Syrian Arab Republic" />
                                        <option value="Taiwan, Province of China" />
                                        <option value="Tajikistan" />
                                        <option value="Tanzania, United Republic of" />
                                        <option value="Thailand" />
                                        <option value="Timor-leste" />
                                        <option value="Togo" />
                                        <option value="Tokelau" />
                                        <option value="Tonga" />
                                        <option value="Trinidad and Tobago" />
                                        <option value="Tunisia" />
                                        <option value="Turkey" />
                                        <option value="Turkmenistan" />
                                        <option value="Turks and Caicos Islands" />
                                        <option value="Tuvalu" />
                                        <option value="Uganda" />
                                        <option value="Ukraine" />
                                        <option value="United Arab Emirates" />
                                        <option value="United Kingdom" />
                                        <option value="United States" />
                                        <option value="United States Minor Outlying Islands" />
                                        <option value="Uruguay" />
                                        <option value="Uzbekistan" />
                                        <option value="Vanuatu" />
                                        <option value="Venezuela" />
                                        <option value="Viet Nam" />
                                        <option value="Virgin Islands, British" />
                                        <option value="Virgin Islands, U.S" />
                                        <option value="Wallis and Futuna" />
                                        <option value="Western Sahara" />
                                        <option value="Yemen" />
                                        <option value="Zambia" />
                                        <option value="Zimbabwe" />
                                    </datalist>
                                    @if ($errors->has('country'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="Remember">セーブしてください。 Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    　<ruby>
                                        登録<rp>(</rp>
                                        <rt>とうろく</rt>
                                        <rp>)</rp>
                                    </ruby> Register
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection