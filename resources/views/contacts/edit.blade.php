<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid ">
            <form action="/siswacreate" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert" id="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success" role="alert" id="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mb-5 row justify-content-center">
                    <div class="col-lg-9 col-12 ">
                        <div class="card " id="basic-info">
                            <div class="card-header">
                                <h5>Student</h5>
                            </div>
                            <div class="pt-0 card-body">

                                <div class="row">
                                    <div class="col-6">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            value="" class="form-control">
                                        @error('name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="age">Age</label>
                                        <input type="text" name="umur" id="umur"
                                            value="" class="form-control">
                                        @error('email')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="gender">Gender</label>
                                        <input type="text" name="gender" id="gender"
                                            placeholder=""
                                            value=""
                                            class="form-control">
                                        @error('location')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="hobby">Hobby</label>
                                        <input type="text" name="hobi" id="hobi" placeholder=""
                                            value="{{ old('phone', auth()->user()->phone) }}" class="form-control">
                                        @error('phone')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="major">Major</label>
                                        <input type="text" name="jurusan" id="jurusan"
                                            placeholder=""
                                            value=""
                                            class="form-control">
                                        @error('location')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="hobby">Handphone</label>
                                        <input type="text" name="noHP" id="noHP" placeholder=""
                                            value="{{ old('phone', auth()->user()->phone) }}" class="form-control">
                                        @error('phone')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <label for="address">Address</label>
                                    <textarea name="alamat" id="alamat" rows="5" class="form-control"></textarea>
                                    @error('about')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <x-app.footer />
        </div>
    </main>

</x-app-layout>
