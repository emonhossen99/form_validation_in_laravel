<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <form class="row g-3" method="POST" action="{{ url('form') }}">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label ">Email</label>
                <input type="email" name="email"  class="form-control @error('email')is-invalid @enderror" id="inputEmail4" value="{{ old('email') }}">

                {{-- now we are error display in two way --}}
                {{-- 1. class="form-control @error('email')is-invalid @enderror" --}}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" name="password" autocomplete="off" class="form-control
                @error('password')is-invalid @enderror" id="inputPassword4">

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control @error('address')is-invalid @enderror" id="inputAddress" placeholder="1234 Main St" value="{{ old('address') }}">

                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" name="adderss2" class="form-control @error('adderss2')is-invalid @enderror" id="inputAddress2"
                    placeholder="Apartment, studio, or floor">

                @error('adderss2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="inputCity">

                @error('city')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" name="state" class="form-select @error('state') is-invalid @enderror">
                    <option value="">Choose</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Ragpur">Ragpur</option>
                </select>

                @error('state')
                    <span class="text-danger">{{ $message }}</span>
                @enderror


            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" name="zip" class="form-control @error('zip')is-invalid @enderror" id="inputZip">

                @error('zip')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" name="condition" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    <br>
                    @error('condition')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
