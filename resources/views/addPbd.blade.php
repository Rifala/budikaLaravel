<!DOCTYPE html>
<body>
    <!-- <center> -->
    <div class="col-lg-8" style="margin: auto; width: 60%; text-align: center; left: 50%;">
        <form method="POST" action="{{ url('/pembudidaya/store') }}" >
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="nam">Nama</label>
                    <input name="nam" id="nam" type="text" class="form-control bg-light border-0" style="height: 55px;" value="{{ old('nam') }}">
                        @error('nam')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-12">
                    <label for="jk">jk</label>
                    <select class="form-control" name="jk" id="jk">
                      <option value="L" {{ "L" == old('jk') ? 'selected' : ''}}>Laki-laki</option>
                      <option value="P" {{ "P" == old('jk') ? 'selected' : ''}}>Perempuan</option>
                    </select>
                </div>

                <div class="col-12">
                    <label for="no_hp">Nomor Telepon</label>
                    <input name="no_hp" id="no_hp" type="text" class="form-control bg-light border-0" style="height: 55px;" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-12">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="text" class="form-control bg-light border-0" style="height: 55px;" value="{{ old('email') }}">
                        @error('email')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-12">
                    <label for="c1">Luas Lahan</label>
                    <select class="form-control" name="c1" id="c1">
                      @foreach($luasLahan as $i => $luas_lahan)
                      <option value="{{ $luas_lahan->id }}" {{ "$luas_lahan->id" == old('c1') ? 'selected' : ''}}>{{ $luas_lahan->luas }}</option>
                      @endforeach
                    </select>
                    <p for="exC1" style="color: grey; font-size: small;">*meter persegi</p>
                        @error('c1')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-12">
                    <label for="c2">Berat Ideal</label>
                    <select class="form-control" name="c2" id="c2">
                      @foreach($beratIdeal as $i => $berat_ideal)
                      <option value="{{ $berat_ideal->id }}" {{ "$berat_ideal->id" == old('c2') ? 'selected' : ''}}>{{ $berat_ideal->berat }}</option>
                      @endforeach
                    </select>
                        @error('c2')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="c3">Jenis Perairan</label>
                    <select class="form-control" name="c3" id="c3">
                      @foreach($jenisPerairan as $i => $jenis_perairan)
                      <option value="{{ $jenis_perairan->id }}" {{ "$jenis_perairan->id" == old('c3') ? 'selected' : ''}}>{{ $jenis_perairan->perairan }}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="c4">Jenis Air</label>
                    <select class="form-control" name="c4" id="c4">
                      @foreach($jenisAir as $i => $jenis_air)
                      <option value="{{ $jenis_air->id }}" {{ "$jenis_air->id" == old('c4') ? 'selected' : ''}}>{{ $jenis_air->air }}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="c5">Masa Panen</label>
                    <select class="form-control" name="c5" id="c5">
                      @foreach($masaPanen as $i => $masa_panen)
                      <option value="{{ $masa_panen->id }}" {{ "$masa_panen->id" == old('c5') ? 'selected' : ''}}>{{ $masa_panen->panen }}</option>
                      @endforeach
                    </select>
                </div>
    
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div></br></br>
    <!-- </center></br></br></br> -->
</body>