<link href="{{ asset('profile-tempt') }}/style.css" rel="stylesheet">
<link href="{{ asset('myAdmin') }}/css/sb-admin-2.min.css" rel="stylesheet">

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a href="/dashboard">Kembali</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button type="submit">Upload Gambar</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                @if(session()->has('message'))
                    <div class="text-600 mb-4" style="color: rgb(36, 255, 36)">{{ session()->get('message') }}</div>
                @endif
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="post">
                        @method("PUT")
                        @csrf
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your username" value="{{ old('name', Auth::user()->name)}}">
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="f_name">First name</label>
                                <input class="form-control" id="f_name" name="f_name" type="text" placeholder="Enter your first name" value="{{ old('f_name', Auth::user()->f_name) }}">
                            </div>
                            @error('f_name')
                                <div class="text-red-500 mt-2 text-sm" style="color: red">{{ $message }}</div>
                            @enderror
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="l_name">Last name</label>
                                <input class="form-control" id="l_name" name="l_name" type="text" placeholder="Enter your last name" value="{{ old('l_name', Auth::user()->l_name) }}">
                            </div>
                            @error('l_name')
                                <div class="text-red-500 mt-2 text-sm" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="address">Alamat Rumah</label>
                                <input class="form-control" id="address" name="address" type="text" placeholder="Enter your location" value="{{ old('address', Auth::user()->address) }}">
                            </div>
                            @error('address')
                                <div class="text-red-500 mt-2 text-sm" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email address" value="{{ old('email', Auth::user()->email) }}">
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Form Row-->
                        <div class="mb-3">
                            <label class="small mb-1" for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password" value="{{ old('password', Auth::user()->password) }}">
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="phone">Phone number</label>
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Enter your phone number" value="{{ old('phone', Auth::user()->phone) }}">
                            </div>
                            @error('phone')
                                <div class="text-red-500 mt-2 text-sm" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>