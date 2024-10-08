<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-6/assets/css/login-6.css">
</head>
<body>
<section class="bg-primary p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Log in Petugas</h3>
                </div>
              </div>
            </div>
            <form action="proses_index.php" method ="POST">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
                    <label for="username" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                <!-- <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div> -->
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-2xl btn-primary" type="submit">Log in now</button>
                  </div>
                </div>
                <div class="text-right mt-4">
                  <a href="tambah_petugas.php" class="btn btn-back float-end text-danger">Registrasi</a>
                </div>
              </div>
            </form>
            </div>
           </div>
          </div>
        </div>
       </div>
    </div>
</section>
</body>
</html>