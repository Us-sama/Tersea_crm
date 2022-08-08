<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100 bg-image"
  style="">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Completer votre compte</h2>

              <form action="{{route('signUp_employe')}}" method="POST">
                @csrf

                <div class="form-outline mb-2">
                  <input type="text" id="name"  name="name"  class="form-control form-control-lg" value="{{$invitation->nom_employe}}" />
                  <label class="form-label" for="name">Nom</label>
                </div>
                <div class="form-outline mb-2">
                  <input type="email" id="email"  name="email"  class="form-control form-control-lg" value="{{$invitation->email_employe}}" />
                  <label class="form-label" for="email">Email</label>
                </div>


                <div class="form-outline mb-2">
                  <input type="date" id="date_naissance" name="date_naissance" class="form-control form-control-lg" />
                  <label class="form-label" for="date_naissance">Date de naissance</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Mot de passe</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">repetez le mot de passe</label>
                </div>
                <input type="text" hidden value="{{$invitation->societe_id}}" name="societe_id" id="societe_id">
                <input type="text" hidden value="{{$invitation->id}}" name="invitation_id" id="invitation_id">



                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-dark">Terminer</button>
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
