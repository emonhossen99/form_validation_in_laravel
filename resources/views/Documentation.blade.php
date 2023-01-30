{{-- we can error display in from page in two way --}}
* Text in our Controller *

1. $req -> validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:32',
            'address' => 'required',
            'adderss2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ],[
            {{-- This is A custome Error --}}
            'email.required' => 'Email Filed is Required',
            'email.email' => 'Must Be Use @ And Before gmail.com',
            'password' => 'Password Has Be Required',
            'address' => 'Address Has Be Required',
            'adderss2' => 'Address2 Has Required',
            'city' => 'City Has Be Required',
            'state' => 'State Has Be Required',
            'zip' => 'Zip Has Be Required',
        ]);

        {{-- This Code use in paraent input from error in bottom useing this code  --}}
        @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror


{{-- 2. This using Bootsrap error display  --}}
{{-- use in input class  --}}
 class="form-control @error('email')is-invalid @enderror"


 {{-- error show but after value show in this input  field  --}}
 {{-- use this input value --}}
    value="{{ old('Name') }}"

    {{-- selected value valiadiation --}}
    <option value=""></option>
    <option value="name">name</option>
    <option value="name">name</option>

    {{-- frist option value empty and others option using value  --}}
