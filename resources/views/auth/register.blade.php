@include('layouts.header')
<main class="form-signin w-100 mx-auto">
    <form name="signup" method="post" action="{{ route('user.postRegister') }}" autocomplete="off">
        @csrf
        <h1 style="color:#000000;font-weight:bold!important;text-align: left;" class="h3 mb-3 fw-normal">Free Signup</h1>

        <div class="form-floating">
            <span for="floatingInput" style="color: #636161;">Name</span>
            <input style="" type="text" class="form-control" id="name" name="name"
                mailto:placeholder="name@example.com" value="{{ old('name') }}">

            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                Surname
            </span>
            <input style="" type="text" class="form-control" id="surname" name="surname"
                placeholder="Surname" value="{{ old('surname') }}">
            @if ($errors->has('surname'))
                <span class="text-danger">{{ $errors->first('surname') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <div class="row">
                <div class="col-md-2">
                    <span for="floatingInput" style="color: #636161;">Phone</span>
                    @if (@$prefix != null || $prefix != '')
                        <select class="form-control" name="mobilenoprefix" id="mobilenoprefix" style="">
                            @foreach ($prefix as $item)
                                <option value="{{ @$item->prefix }}">
                                    +{{ @$item->prefix }}</option>
                            @endforeach
                        </select>

                    @endif
                </div>

                <div class="col-md-10">
                    <span for="floatingInput" style="color: #636161;">&nbsp;&nbsp;&nbsp;</span>
                    <input style="" type="text" class="form-control" id="mobileno" name="mobileno"
                        placeholder="" value="{{ old('mobileno') }}">
                    {{-- <label for="floatingInput" style="color: #636161;">Phone</label> --}}

                </div>
                @if ($errors->has('mobileno'))
                    <span class="text-danger">{{ $errors->first('mobileno') }}</span>
                @endif
            </div>
        </div>
        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                Email
            </span>
            <input style="" type="text" class="form-control" id="email" name="email"
                mailto:placeholder="test@example.com" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>


        <div class="form-floating" id="hidebirthdate">
            <span for="floatingPassword" style="color: #636161;">
                Birthdate
            </span>

            <div class="row">
                <div class="col-md-3">
                    <span style="color: #636161;">
                        Day
                    </span>
                    <select aria-label="Day" name="birthday_day" id="day" title="Day" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <span style="color: #636161;">
                        Month
                    </span>
                    <select aria-label="Month" name="birthday_month" id="month" title="Month"
                        class="form-control">
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <span style="color: #636161;">
                        Year
                    </span>
                    <select aria-label="Year" name="birthday_year" id="year" title="Year"
                        class="form-control">
                        <option value="2023" selected="1">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                        <option value="1907">1907</option>
                        <option value="1906">1906</option>
                        <option value="1905">1905</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                Password
            </span>
            <input style="" type="password" class="form-control" id="password" name="password"
                placeholder="Password" value="{{ old('password') }}">

            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                Confirm Password
            </span>
            <input style="" type="password" class="form-control" id="password_confirmation"
                name="password_confirmation" placeholder="Password" value="{{ old('password_confirmation') }}">

            @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" id="marketing" name="marketing" value="1">
            <label class="form-check-label" for="marketing" style="text-align: left!important;font-size: 12px;">
                <span class="">Marketing</span>
            </label>
            @if ($errors->has('marketing'))
                <span class="text-danger">{{ $errors->first('marketing') }}</span>
            @endif
        </div>
        <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" id="privacy" name="privacy" value="1">
            <input type="hidden" id="whoIs" name="" value="">
            <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                <span class="">Terms of Use</span>
            </label>
            @if ($errors->has('privacy'))
                <span class="text-danger">{{ $errors->first('privacy') }}</span>
            @endif
        </div>
        <button type="submit" style="background-color: #ED4B60;border-radius:30px;color:#ffffff!important;"
            class="w-100 btn mt-2" name="submit"><b>Sign
                up</b></button>
        <p style="color: #636161;text-align:center;" class="mt-2 mb-3">Already have an account?&nbsp;<a
                href="{{ route('login') }}" style="color: #ED4B60;">Sign
                in</a></p>
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<div class="modal fade" id="chooseregmodal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content" style="background-color:#FFFEFF;">
            <div class="modal-header border-0 mt-4">
                <h4 class="modal-title" style="font-weight:bold!important;font-size:30px">
                    create your profile</h4>
            </div>
            <div style="text-align: center">
                <p style="font-size:17px">it takes just a few minutes and you can immediately start interacting with
                    our community.</p>
                <p style="font-weight:bold!important;font-size:17px">First of all, tell us who you are</p>
            </div>
            <div class="modal-body" id="selectcard">
                <div class="col-md-6" style="text-align:center;">
                    <div onclick="changeStyle()" class="">
                        <img src="https://t4.ftcdn.net/jpg/04/50/60/51/360_F_450605101_Rc8xz4hnMtuePmpZA1i6RZMwREwcqaZI.jpg"
                            alt="card image" class="card__img" />
                    </div>

                    <h4 class="card__name" whoIs="user" >User</h4>
                </div>
                <div class="col-md-6" style="text-align:center;">
                    <div class="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYodX4PS5R7aKD07Tli-JcxLDvuKv5PZOFZHpuihWbTu63e-riirBBrvu8IqOJz7XjaSQ&usqp=CAU"
                            alt="card image" class="card__img" />
                    </div>

                    <h4 class="card__name" whoIs="hostess">Hostess</h4>
                </div>
                
            </div>
            {{-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> --}}
        </div>

    </div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $("#chooseregmodal").modal('show');
</script>
<style>
    .card__img {
        width: 150px;
        border-radius: 50%;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .card__border {
        width: 150px;
        height: 150px;
        border: 5px solid hsl(29deg 84.21% 58.12%);
        border-radius: 50%;
        display: grid;
        place-items: center;
        margin: 0 auto 0.75rem;
    }
</style>
<script>
    $('#selectcard img').click(function() {
        $('img').not($(this)).css({
            'border': 'none'
        });
        $(this).css({
            'border': '3px solid hsl(29deg 84.21% 58.12%)'
        });
        var whoIs = $(this).closest('.col-md-6').find("h4").attr('whoIs');
        $("#whoIs").val(whoIs);
        
    });

    function changeStyle(){
        var element = document.getElementById("hidebirthdate");
        element.style.display = "none";
    }
</script>
</body>

</html>
