<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="Nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="Nim" name="Nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="namaLengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="namaLengkap" name="namaLengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Jenis Kelamin" id="Jenis Kelamin_0" type="radio" class="custom-control-input" value="laki"> 
        <label for="Jenis Kelamin_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Jenis Kelamin" id="Jenis Kelamin_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="Jenis Kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="program studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="program studi" name="program studi" class="custom-select" required="required">
        <option value="sistem informasi">Sistem Informasi</option>
        <option value="teknik informatika">Teknik Informatika</option>
        <option value="bisnis digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill Web &amp; Programming" id="Skill Web &amp; Programming_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="Skill Web &amp; Programming_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill Web &amp; Programming" id="Skill Web &amp; Programming_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="Skill Web &amp; Programming_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill Web &amp; Programming" id="Skill Web &amp; Programming_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="Skill Web &amp; Programming_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill Web &amp; Programming" id="Skill Web &amp; Programming_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap"> 
        <label for="Skill Web &amp; Programming_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill Web &amp; Programming" id="Skill Web &amp; Programming_4" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="Skill Web &amp; Programming_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill Web &amp; Programming" id="Skill Web &amp; Programming_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="Skill Web &amp; Programming_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill Web &amp; Programming" id="Skill Web &amp; Programming_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="Skill Web &amp; Programming_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="tempat domisili" name="tempat domisili" class="custom-select" required="required">
        <option value="jakarta">Jakarta</option>
        <option value="depok">Depok</option>
        <option value="bogor">Bogor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>